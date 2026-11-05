/* =========================================================
   GS KIGEME -A- : smooth.js
   Scroll reveal, progress bar, navbar shadow, counters
   (Ntisimbura js/script.js yawe: ni dosiye yongeweho)
========================================================= */

(function () {
    'use strict';

    var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var hasObserver = 'IntersectionObserver' in window;

    // Niba browser idashyigikira ibi, reka ibintu bigaragare bisanzwe
    if (reduceMotion || !hasObserver) {
        document.documentElement.classList.remove('js');
    }


    /* ---------- Scroll progress bar + navbar shadow ---------- */

    var bar = document.createElement('div');
    bar.className = 'scroll-progress';
    document.body.appendChild(bar);

    var navbar = document.querySelector('.navbar');
    var ticking = false;

    function updateOnScroll() {
        var root = document.documentElement;
        var max = root.scrollHeight - root.clientHeight;
        var progress = max > 0 ? root.scrollTop / max : 0;

        bar.style.transform = 'scaleX(' + progress + ')';

        if (navbar) {
            navbar.classList.toggle('scrolled', root.scrollTop > 10);
        }

        ticking = false;
    }

    window.addEventListener('scroll', function () {
        if (!ticking) {
            ticking = true;
            window.requestAnimationFrame(updateOnScroll);
        }
    }, { passive: true });

    updateOnScroll();

    if (reduceMotion || !hasObserver) {
        return;
    }


    /* ---------- Scroll reveal ---------- */

    // [selector, stagger step in seconds]
    var groups = [
        ['.section-title', 0],
        ['.cards .card', 0.14],
        ['.message-image', 0],
        ['.message-content', 0.15],
        ['.statistics > div', 0.12],
        ['.community-grid article', 0.14],
        ['.newsletter > *', 0.1]
    ];

    var revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) { return; }

            var el = entry.target;
            revealObserver.unobserve(el);

            el.classList.add('in-view');

            // Rangiza animation, hanyuma ukureho classes kugira ngo hover
            // effects z'umwimerere zikomeze gukora neza
            var delay = parseFloat(el.style.getPropertyValue('--delay')) || 0;

            window.setTimeout(function () {
                el.classList.remove('reveal', 'in-view');
                el.style.removeProperty('--delay');
            }, (1.05 + delay) * 1000);
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -60px 0px'
    });

    groups.forEach(function (group) {
        var items = document.querySelectorAll(group[0]);

        items.forEach(function (el, i) {
            el.classList.add('reveal');
            el.style.setProperty('--delay', (i * group[1]).toFixed(2) + 's');
            revealObserver.observe(el);
        });
    });


    /* ---------- Count-up for statistics (1000+, 100+, 30, 95+) ---------- */

    var counters = document.querySelectorAll('.statistics h2');

    var countObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) { return; }

            var el = entry.target;
            countObserver.unobserve(el);

            var match = el.textContent.trim().match(/^(\d+)(.*)$/);
            if (!match) { return; }

            var target = parseInt(match[1], 10);
            var suffix = match[2];
            var duration = 1800;
            var start = null;

            function step(ts) {
                if (start === null) { start = ts; }

                var t = Math.min((ts - start) / duration, 1);
                var eased = 1 - Math.pow(1 - t, 4); // easeOutQuart

                el.textContent = Math.round(target * eased) + suffix;

                if (t < 1) {
                    window.requestAnimationFrame(step);
                }
            }

            el.textContent = '0' + suffix;
            window.requestAnimationFrame(step);
        });
    }, { threshold: 0.6 });

    counters.forEach(function (el) {
        countObserver.observe(el);
    });

})();
