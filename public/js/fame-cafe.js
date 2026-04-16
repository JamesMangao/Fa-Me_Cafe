/* Fa-Me Café – interactive behaviour for Laravel Blade project */

(function () {
    'use strict';

    /* ── Navbar: scroll state & mobile toggle ── */
    const navbar    = document.getElementById('navbar');
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconMenu  = document.getElementById('icon-menu');
    const iconClose = document.getElementById('icon-close');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    if (mobileBtn) {
        mobileBtn.addEventListener('click', function () {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', isOpen);
            iconMenu.classList.toggle('hidden', !isOpen);
            iconClose.classList.toggle('hidden', isOpen);
        });

        document.querySelectorAll('.mobile-nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                iconMenu.classList.remove('hidden');
                iconClose.classList.add('hidden');
            });
        });
    }

    /* ── Menu: main tabs (Drinks / Food) ── */
    const mainTabs   = document.querySelectorAll('.menu-main-tab');
    const panelDrinks = document.getElementById('panel-drinks');
    const panelFood   = document.getElementById('panel-food');

    mainTabs.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const tab = btn.dataset.tab;

            mainTabs.forEach(function (b) {
                b.classList.remove('bg-amber-500', 'text-white', 'shadow-lg', 'shadow-amber-500/30');
                b.classList.add('text-white/50', 'hover:text-white');
            });
            btn.classList.add('bg-amber-500', 'text-white', 'shadow-lg', 'shadow-amber-500/30');
            btn.classList.remove('text-white/50', 'hover:text-white');

            if (tab === 'drinks') {
                panelDrinks.classList.remove('hidden');
                panelFood.classList.add('hidden');
            } else {
                panelFood.classList.remove('hidden');
                panelDrinks.classList.add('hidden');
            }
        });
    });

    /* ── Menu: drink sub-tabs ── */
    function initSubTabs(tabSelector, panelAttr) {
        const tabs = document.querySelectorAll(tabSelector);

        tabs.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const target = btn.dataset[panelAttr === 'data-drink-panel' ? 'drinkSub' : 'foodSub'];

                tabs.forEach(function (b) {
                    b.classList.remove('bg-amber-500/20', 'border-amber-500/50', 'text-amber-300');
                    b.classList.add('bg-white/5', 'border-white/10', 'text-white/40', 'hover:text-white/70');
                });
                btn.classList.add('bg-amber-500/20', 'border-amber-500/50', 'text-amber-300');
                btn.classList.remove('bg-white/5', 'border-white/10', 'text-white/40', 'hover:text-white/70');

                const panelClass = panelAttr === 'data-drink-panel' ? '.drink-panel' : '.food-panel';
                const attrName   = panelAttr === 'data-drink-panel' ? 'drinkPanel' : 'foodPanel';

                document.querySelectorAll(panelClass).forEach(function (panel) {
                    if (panel.dataset[attrName] === target) {
                        panel.classList.remove('hidden');
                    } else {
                        panel.classList.add('hidden');
                    }
                });
            });
        });
    }

    initSubTabs('.drink-sub-tab', 'data-drink-panel');
    initSubTabs('.food-sub-tab',  'data-food-panel');

})();
