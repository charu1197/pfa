/* ============================================================
   PFA — Main JavaScript
   Carousel + Scroll Reveal
   ============================================================ */

/* ── Hero Carousel ─────────────────────────────────────── */
(function () {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.carousel-dot');
    if (!slides.length) return;

    let current = 0;
    let timer = null;

    function goTo(index) {
        const prev = current;
        current = (index + slides.length) % slides.length;

        slides[prev].classList.remove('active');
        slides[prev].classList.add('exit-left');

        setTimeout(() => {
            slides[prev].classList.remove('exit-left');
        }, 800);

        slides[current].classList.add('active');

        dots.forEach((d, i) => d.classList.toggle('active', i === current));
    }

    function startAuto() {
        timer = setInterval(() => goTo(current + 1), 5000);
    }

    function resetAuto() {
        clearInterval(timer);
        startAuto();
    }

    /* Dots */
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => { goTo(i); resetAuto(); });
    });

    /* Arrows */
    document.querySelector('.carousel-arrow.prev')?.addEventListener('click', () => { goTo(current - 1); resetAuto(); });
    document.querySelector('.carousel-arrow.next')?.addEventListener('click', () => { goTo(current + 1); resetAuto(); });

    /* Touch / swipe */
    let touchStartX = 0;
    const wrapper = document.querySelector('.hero-carousel');
    wrapper?.addEventListener('touchstart', (e) => { touchStartX = e.touches[0].clientX; }, { passive: true });
    wrapper?.addEventListener('touchend', (e) => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) { goTo(diff > 0 ? current + 1 : current - 1); resetAuto(); }
    });

    /* Init */
    slides[0].classList.add('active');
    dots[0]?.classList.add('active');
    startAuto();
})();

/* ── Scroll Reveal ─────────────────────────────────────── */
(function () {
    const els = document.querySelectorAll('.reveal');
    if (!els.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12 }
    );

    els.forEach((el) => observer.observe(el));
})();
