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
}

if (toggle && nav) {
    setMenu(false);
    compact.addEventListener('change', () => setMenu(false));
    toggle.addEventListener('click', () => setMenu(nav.hidden));

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && compact.matches && !nav.hidden) {
            setMenu(false);
            toggle.focus();
        }
    });
}

const siteHeader = document.querySelector('#site-header');
if (siteHeader) {
    const updateHeaderState = () => {
        siteHeader.classList.toggle('is-scrolled', window.scrollY > 10);
    };

    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, { passive: true });
}

const slider = document.querySelector('[data-slider]');
if (slider) {
    const slides = [...slider.querySelectorAll('.slide')];
    const dots = [...slider.querySelectorAll('.slider-dot')];

    let currentIndex = 0;

    const activateSlide = index => {
        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle('is-active', slideIndex === index);
        });

        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle('is-active', dotIndex === index);
            dot.setAttribute('aria-pressed', String(dotIndex === index));
        });
    };

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            activateSlide(currentIndex);
        });
    });

    window.setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        activateSlide(currentIndex);
    }, 5000);
}

if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('seen');
            observer.unobserve(entry.target);
        }
    }), { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(element => observer.observe(element));
}
