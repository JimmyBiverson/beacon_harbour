import Lenis from 'lenis';

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const lenis = new Lenis({
    autoRaf: true,
    anchors: { offset: -88 },
    smoothWheel: true,
    duration: 0.9,
    wheelMultiplier: 0.9,
    respectReducedMotion: true,
});

const toggle = document.querySelector('#toggle');
const nav = document.querySelector('#nav');
const compact = matchMedia('(max-width: 900px)');

function setMenu(open) {
    if (!toggle || !nav) {
        return;
    }

    toggle.hidden = !compact.matches;
    nav.hidden = compact.matches && !open;
    toggle.setAttribute('aria-expanded', String(open));
    toggle.firstChild.textContent = open ? 'Close ' : 'Menu ';
}

if (toggle && nav) {
    setMenu(false);
    compact.addEventListener('change', () => setMenu(false));
    toggle.addEventListener('click', () => setMenu(nav.hidden));
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => setMenu(false)));

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && compact.matches && !nav.hidden) {
            setMenu(false);
            toggle.focus();
        }
    });
}

const siteHeader = document.querySelector('#site-header');
const scrollProgress = document.querySelector('#scroll-progress');
if (siteHeader) {
    const updateHeaderState = (scrollY = lenis.scroll) => {
        siteHeader.classList.toggle('is-scrolled', scrollY > 10);

        if (scrollProgress) {
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = scrollableHeight > 0 ? scrollY / scrollableHeight : 0;
            scrollProgress.style.transform = `scaleX(${Math.min(1, Math.max(0, progress))})`;
        }
    };

    updateHeaderState();
    lenis.on('scroll', updateHeaderState);
    window.addEventListener('resize', () => updateHeaderState(), { passive: true });
}

const slider = document.querySelector('[data-slider]');
if (slider) {
    const slides = [...slider.querySelectorAll('.slide')];
    const dots = [...slider.querySelectorAll('.slider-dot')];
    let currentIndex = 0;
    let isPaused = false;

    const activateSlide = index => {
        currentIndex = index;
        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle('is-active', slideIndex === index);
        });

        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle('is-active', dotIndex === index);
            dot.setAttribute('aria-pressed', String(dotIndex === index));
        });
    };

    if (slides.length > 0) {
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => activateSlide(index));
        });

        slider.addEventListener('mouseenter', () => {
            isPaused = true;
        });
        slider.addEventListener('mouseleave', () => {
            isPaused = false;
        });
        slider.addEventListener('focusin', () => {
            isPaused = true;
        });
        slider.addEventListener('focusout', event => {
            if (!slider.contains(event.relatedTarget)) {
                isPaused = false;
            }
        });

        if (!reducedMotion && slides.length > 1) {
            window.setInterval(() => {
                if (!isPaused && !document.hidden) {
                    activateSlide((currentIndex + 1) % slides.length);
                }
            }, 6000);
        }
    }
}

const particleCanvas = document.querySelector('#particle-field');

if (particleCanvas instanceof HTMLCanvasElement && !prefersReducedMotion) {
    const context = particleCanvas.getContext('2d');
    let particles = [];
    let animationFrame = 0;
    let viewportWidth = 0;
    let viewportHeight = 0;
    let isRunning = false;
    let lastDraw = 0;
    const maximumConnectionDistance = 150;
    const maximumConnectionDistanceSquared = maximumConnectionDistance * maximumConnectionDistance;
    const frameInterval = 1000 / 30;

    const resizeCanvas = () => {
        if (!context) {
            return;
        }

        const pixelRatio = Math.min(window.devicePixelRatio || 1, 1.5);
        viewportWidth = window.innerWidth;
        viewportHeight = window.innerHeight;
        particleCanvas.width = Math.round(viewportWidth * pixelRatio);
        particleCanvas.height = Math.round(viewportHeight * pixelRatio);
        particleCanvas.style.width = `${viewportWidth}px`;
        particleCanvas.style.height = `${viewportHeight}px`;
        context.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);

        const particleCount = Math.min(40, Math.max(14, Math.round((viewportWidth * viewportHeight) / 32000)));
        particles = Array.from({ length: particleCount }, () => ({
            x: Math.random() * viewportWidth,
            y: Math.random() * viewportHeight,
            radius: Math.random() * 1.7 + 0.6,
            velocityX: (Math.random() - 0.5) * 0.24,
            velocityY: (Math.random() - 0.5) * 0.24,
        }));
    };

    const drawFrame = timestamp => {
        context.clearRect(0, 0, viewportWidth, viewportHeight);

        particles.forEach((particle, index) => {
            particle.x += particle.velocityX;
            particle.y += particle.velocityY;

            if (particle.x < -5 || particle.x > viewportWidth + 5) {
                particle.velocityX *= -1;
            }
            if (particle.y < -5 || particle.y > viewportHeight + 5) {
                particle.velocityY *= -1;
            }

            context.beginPath();
            context.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
            context.fillStyle = 'rgba(207, 232, 193, 0.5)';
            context.fill();

            for (let nextIndex = index + 1; nextIndex < particles.length; nextIndex += 1) {
                const nextParticle = particles[nextIndex];
                const deltaX = particle.x - nextParticle.x;
                const deltaY = particle.y - nextParticle.y;
                const distanceSquared = deltaX * deltaX + deltaY * deltaY;

                if (distanceSquared < maximumConnectionDistanceSquared) {
                    const distance = Math.sqrt(distanceSquared);
                    context.beginPath();
                    context.moveTo(particle.x, particle.y);
                    context.lineTo(nextParticle.x, nextParticle.y);
                    context.strokeStyle = `rgba(191, 220, 184, ${0.14 * (1 - distance / maximumConnectionDistance)})`;
                    context.lineWidth = 0.7;
                    context.stroke();
                }
            }
        });

        lastDraw = timestamp;
    };

    const drawParticles = timestamp => {
        if (!context || !isRunning) {
            return;
        }

        if (timestamp - lastDraw >= frameInterval) {
            drawFrame(timestamp);
        }

        animationFrame = window.requestAnimationFrame(drawParticles);
    };

    const syncParticles = () => {
        if (document.hidden) {
            isRunning = false;
            window.cancelAnimationFrame(animationFrame);
            return;
        }

        if (isRunning) {
            return;
        }

        isRunning = true;
        lastDraw = 0;
        animationFrame = window.requestAnimationFrame(drawParticles);
    };

    resizeCanvas();
    syncParticles();
    window.addEventListener('resize', resizeCanvas, { passive: true });
    document.addEventListener('visibilitychange', syncParticles);
}

if ('IntersectionObserver' in window && !prefersReducedMotion) {
    document.body.classList.add('motion-ready');
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('seen');
            observer.unobserve(entry.target);
        }
    }), {
        threshold: 0.16,
        rootMargin: '0px 0px -56px 0px',
    });

    document.querySelectorAll('.reveal').forEach(element => observer.observe(element));
}
