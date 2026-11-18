<?php
// navbar.php  (ONE file: PHP + CSS + Bootstrap 5)
// Use on every page, inside body, at the top: include 'navbar.php';

$nav = [
    'index.php'    => 'Home',
    'about.php'    => 'About',
    'academic.php' => 'Academics',
    'staff.php'    => 'Staff',
    'gallery.php'  => 'Gallery',
    'news.php'     => 'News',
    'contact.php'  => 'Contact',
];

$siteName   = 'GS KIGEME -A-';
$siteSlogan = 'School website';
$current    = basename($_SERVER['PHP_SELF']);
$ctaPage    = 'contact.php'; // shown as a button
?>

<!-- Bootstrap 5 CSS (remove this line if your page already loads Bootstrap) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

<style>
:root {
    --gs-blue:      #0a3d7a;
    --gs-blue-dark: #072b57;
    --gs-yellow:    #f6b800;
    --gs-green:     #431a8a;
    --gs-ink:       #14233a;
    --gs-green-text: #501580;
    --gs-muted:     #5b6b82;
    --gs-hover:     #eef3fa;
    --gs-violet:      #6d28d9;
    --gs-violet-dark: #d225cc;
    --gs-violet-soft: #f1eafe;
}

/* Skip link */
.skip-link {
    position: absolute; left: 12px; top: -60px; z-index: 2000;
    background: var(--gs-blue); color: #fff; padding: 10px 16px;
    border-radius: 8px; font-weight: 600; text-decoration: none;
    transition: top .2s;
}
.skip-link:focus { top: 12px; color: #fff; }

/* Header */
.site-header {
    position: sticky; top: 0; z-index: 1030;
    background: #2aa921;
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, 'Segoe UI', sans-serif;
    transition: box-shadow .25s ease;
}
.site-header.is-scrolled { box-shadow: 0 6px 24px rgba(10, 61, 122, .12); }

.tricolor {
    height: 5px;
    background: linear-gradient(to right,
        var(--gs-blue) 0 50%, var(--gs-yellow) 50% 75%, var(--gs-green) 75% 100%);
}

.site-header .navbar { min-height: 90px; padding-top: 0; padding-bottom: 0; }

/* Brand */
.site-header .navbar-brand {
    display: flex; align-items: center; gap: 14px; margin: 0; padding: 0;
}
.brand-mark {
    width: 60px; height: 60px; border-radius: 16px;
    background: var(--gs-blue); color: #fff;
    display: grid; place-items: center;
    font-weight: 800; font-size: 24px; letter-spacing: .5px;
    box-shadow: inset 0 -5px 0 var(--gs-yellow);
}
.brand-text { display: flex; flex-direction: column; line-height: 1.15; }
.brand-text strong { font-size: 21px; font-weight: 800; color: var(--gs-blue); }
.brand-text small  { font-size: 14px; font-weight: 500; color: var(--gs-muted); }

/* Brand / toggler hover */
.site-header .navbar-brand:hover .brand-mark { background: var(--gs-violet); }
.site-header .navbar-brand:hover .brand-text strong { color: var(--gs-violet); }
.brand-mark, .brand-text strong { transition: background .2s, color .2s; }
.site-header .navbar-toggler:hover { background: var(--gs-violet-soft); }

/* Links */
.site-header .nav-link {
    position: relative;
    padding: 12px 18px;
    border-radius: 12px;
    font-size: 18px; font-weight: 600;
    color: var(--gs-green-text);
    transition: background .2s, color .2s;
}
.site-header .nav-link::after {
    content: ''; position: absolute; left: 18px; right: 18px; bottom: 3px;
    height: 4px; border-radius: 3px; background: var(--gs-violet);
    transform: scaleX(0); transform-origin: center;
    transition: transform .25s ease, background .2s;
}
.site-header .nav-link:hover {
    background: var(--gs-violet-soft); color: var(--gs-violet);
}
.site-header .nav-link:hover::after { transform: scaleX(1); background: var(--gs-violet); }
.site-header .nav-link.active { color: var(--gs-blue); }
.site-header .nav-link.active::after { transform: scaleX(1); background: var(--gs-yellow); }
.site-header .nav-link.active:hover { color: var(--gs-violet); }
.site-header .nav-link.active:hover::after { background: var(--gs-violet); }

/* Contact button */
.site-header .nav-link.nav-cta {
    margin-left: 10px; padding: 12px 28px;
    background: var(--gs-blue); color: #fff; border-radius: 999px;
}
.site-header .nav-link.nav-cta:hover  { background: var(--gs-violet); color: #fff; box-shadow: 0 6px 16px rgba(109, 40, 217, .35); }
.site-header .nav-link.nav-cta.active { background: var(--gs-green); }
.site-header .nav-link.nav-cta.active:hover { background: var(--gs-violet); color: #fff; }
.site-header .nav-link.nav-cta::after,
.site-header .nav-link.nav-cta.active::after { display: none; }

/* Focus */
.site-header .nav-link:focus-visible,
.site-header .navbar-brand:focus-visible,
.site-header .navbar-toggler:focus-visible {
    outline: 3px solid var(--gs-yellow); outline-offset: 2px; box-shadow: none;
}

/* Toggler (hamburger) */
.site-header .navbar-toggler {
    border: 0; background: var(--gs-hover); border-radius: 12px;
    width: 46px; height: 46px; padding: 0;
}

/* Mobile / tablet */
@media (max-width: 1199.98px) {
    .site-header .navbar-collapse {
        position: absolute; top: 100%; left: 0; right: 0;
        background: #fff; border-top: 1px solid #e3eaf3;
        box-shadow: 0 16px 24px rgba(10, 61, 122, .14);
        padding: 12px 16px 20px;
        max-height: calc(100vh - 95px); overflow-y: auto;
    }
    .site-header .nav-link { padding: 14px 16px; font-size: 16px; }
    .site-header .nav-link.active { background: var(--gs-hover); }
    .site-header .nav-link::after {
        left: 0; right: auto; top: 12px; bottom: 12px; width: 4px; height: auto;
        transform: scaleY(0);
    }
    .site-header .nav-link:hover::after,
    .site-header .nav-link.active::after { transform: scaleY(1); }
    .site-header .nav-link.nav-cta {
        margin: 8px 0 0; text-align: center; border-radius: 12px;
    }
}

@media (max-width: 420px) {
    .brand-mark { width: 48px; height: 48px; font-size: 19px; border-radius: 13px; }
    .brand-text strong { font-size: 17px; }
    .brand-text small { display: none; }
}

@media (prefers-reduced-motion: reduce) {
    .site-header, .site-header .nav-link, .skip-link { transition: none; }
}
</style>

<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header" id="siteHeader">
    <div class="tricolor" aria-hidden="true"></div>

    <nav class="navbar navbar-expand-xl" aria-label="Main navigation">
        <div class="container position-relative">

            <a class="navbar-brand" href="index.php" aria-label="<?= htmlspecialchars($siteName) ?> home">
                <!-- To use a logo image, replace the span with: <img src="images/logo.png" alt="" width="44" height="44"> -->
                <span class="brand-mark" aria-hidden="true">GS</span>
                <span class="brand-text">
                    <strong><?= htmlspecialchars($siteName) ?></strong>
                    <small><?= htmlspecialchars($siteSlogan) ?></small>
                </span>
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navMenu"
                    aria-controls="navMenu" aria-expanded="false" aria-label="Toggle menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-xl-center gap-xl-1">
                    <?php foreach ($nav as $file => $label):
                        $isActive = ($file === $current);
                        $isCta    = ($file === $ctaPage);
                        $classes  = 'nav-link' . ($isActive ? ' active' : '') . ($isCta ? ' nav-cta' : '');
                    ?>
                        <li class="nav-item">
                            <a class="<?= $classes ?>"
                               href="<?= htmlspecialchars($file) ?>"
                               <?= $isActive ? 'aria-current="page"' : '' ?>>
                                <?= htmlspecialchars($label) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </nav>
</header>

<!-- Bootstrap 5 JS (needed for the mobile menu; remove if your page already loads it) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Shadow under the header after scrolling
    (function () {
        var header = document.getElementById('siteHeader');
        function onScroll() { header.classList.toggle('is-scrolled', window.scrollY > 8); }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();
</script>
