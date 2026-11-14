const toggle = document.querySelector('#toggle');
const nav = document.querySelector('#nav');
const compact = matchMedia('(max-width: 900px)');
function setMenu(open) {
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
if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('seen');
            observer.unobserve(entry.target);
        }
    }), {threshold: 0.12});
    document.querySelectorAll('.reveal').forEach(element => observer.observe(element));
}
