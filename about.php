
<?php
// ================================================================
// GS KIGEME A - ABOUT US PAGE
// Complete PHP + HTML + CSS + JavaScript in one file.
// Modern UI/UX and accessibility improvements.
// ================================================================

$school = [
    'name'     => 'GS KIGEME A',
    'motto'    => 'Learning Today, Leading Tomorrow',
    'location' => 'Kigeme, Gasaka, Nyamagabe District, Rwanda',
    'phone'    => '0788600587',
    'email'    => 'gskigeme2@yahoo.com',
    'logo'     => 'images/gs logo.jpg',
];

$nav = [
    'index.php'    => 'Home',
    'about.php'    => 'About',
    'academic.php' => 'Academics',
    'students.php' => 'Students',
    'teachers.php' => 'Teachers',
    'gallery.php'  => 'Gallery',
    'news.php'     => 'News',
    'contact.php'  => 'Contact',
];

$currentPage = basename($_SERVER['PHP_SELF']);

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

// About page sections
$sections = [
    'who'        => 'Who We Are',
    'values'     => 'Mission and Values',
    'history'    => 'Our History',
    'leadership' => 'Leadership',
    'location'   => 'Our Location',
];

// School history
$timeline = [
    [
        '1965',
        'The Beginning',
        'GS Kigeme-A began its educational journey as an auxiliary instructor institution.'
    ],
    [
        '1967',
        'Ordinary Level Education',
        'The school introduced Ordinary Level education as part of its development.'
    ],
    [
        '1970',
        'Teacher Training Development',
        'The institution developed into an Inferior Teacher Training Centre.'
    ],
    [
        '1972',
        'First Graduation',
        'The institution celebrated its first graduation.'
    ],
    [
        '1981',
        'Teacher Training Expansion',
        'The institution developed into a full Teacher Training Centre.'
    ],
    [
        '1990',
        'Groupe Scolaire Kigeme',
        'The institution became known as Groupe Scolaire Kigeme.'
    ],
    [
        '2026',
        'Continuing the Educational Journey',
        'GS Kigeme-A continues its commitment to education, discipline, knowledge and student development.'
    ],
];

// Replace these placeholders with officially approved information.
$leaders = [
    ['Head Teacher Name', 'Head Teacher', 'images/headteacher.jpg'],
    ['Deputy Head Name', 'Deputy Head, Academics', 'images/deputy-academic.jpg'],
    ['Deputy Head Name', 'Deputy Head, Discipline', 'images/deputy-discipline.jpg'],
];

$values = [
    'Discipline and responsibility',
    'Respect and cooperation',
    'Academic excellence',
    'Integrity and honesty',
    'Hard work and commitment',
    'Service to the community',
];

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= e($school['name']) ?> | About Us</title>

<meta name="description"
      content="Discover the history, mission, leadership and educational journey of GS Kigeme-A in Nyamagabe District, Rwanda.">

<meta name="theme-color" content="#104d2c">

<link rel="icon" href="<?= e($school['logo']) ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">

<style>

/* ================================================================
   1. GLOBAL DESIGN
================================================================ */

:root {
    --green: #176b3a;
    --dark: #104d2c;
    --deep: #082e19;
    --gold: #e0b32e;

    --light-green: #edf7ef;
    --pale: #f7faf7;

    --text: #24352b;
    --gray: #59685e;
    --line: #e1e9e3;
    --white: #ffffff;

    --shadow: 0 10px 30px rgba(10, 50, 25, .09);
    --shadow-hover: 0 18px 40px rgba(10, 50, 25, .15);

    --serif: 'Playfair Display', Georgia, serif;
    --sans: 'Inter', Arial, sans-serif;

    --radius: 14px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
    scroll-padding-top: 110px;
}

body {
    font-family: var(--sans);
    color: var(--text);
    line-height: 1.75;
    background: var(--white);
    overflow-x: hidden;
}

body,
button,
a {
    -webkit-tap-highlight-color: transparent;
}

a {
    text-decoration: none;
    color: inherit;
}

img {
    display: block;
    max-width: 100%;
}

button {
    font: inherit;
}

h1,
h2,
h3 {
    font-family: var(--serif);
    line-height: 1.3;
}

.container {
    width: min(90%, 1200px);
    margin: auto;
}

::selection {
    background: var(--gold);
    color: var(--deep);
}

/* Accessibility focus */

:focus-visible {
    outline: 3px solid var(--gold);
    outline-offset: 4px;
}

/* Skip navigation */

.skip {
    position: fixed;
    top: -100px;
    left: 15px;
    z-index: 3000;

    background: var(--gold);
    color: var(--deep);

    padding: 12px 18px;
    border-radius: 8px;
    font-weight: 800;
}

.skip:focus {
    top: 15px;
}

/* ================================================================
   2. INFORMATION BAR
================================================================ */

.infobar {
    background: var(--deep);
    color: #e0eee4;

    padding: 9px 5%;

    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;

    flex-wrap: wrap;
    font-size: 12px;
}

.infobar a {
    color: #fff;
    transition: color .2s;
}

.infobar a:hover {
    color: var(--gold);
}

/* ================================================================
   3. NAVIGATION
================================================================ */

header {
    position: sticky;
    top: 0;
    z-index: 1000;

    background: rgba(255, 255, 255, .97);
    backdrop-filter: blur(12px);

    min-height: 82px;
    padding: 10px 5%;

    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;

    box-shadow: 0 3px 18px rgba(0,0,0,.07);
}

.brand {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 0;
}

.brand img {
    width: 54px;
    height: 54px;
    object-fit: contain;
}

.brand strong {
    display: block;
    font-family: var(--serif);
    color: var(--green);
    font-size: 20px;
    line-height: 1.3;
}

.brand small {
    display: block;
    font-size: 11px;
    color: var(--gray);
}

nav ul {
    display: flex;
    align-items: center;
    gap: 3px;
    list-style: none;
}

nav a {
    display: block;
    padding: 9px 11px;
    border-radius: 7px;

    color: var(--text);
    font-size: 13px;
    font-weight: 700;

    transition: background .2s, color .2s;
}

nav a:hover,
nav a.active {
    background: var(--light-green);
    color: var(--green);
}

nav a.active {
    box-shadow: inset 0 -3px 0 var(--gold);
}

nav a.apply {
    background: var(--green);
    color: #fff;
    margin-left: 7px;
    padding: 10px 16px;
}

nav a.apply:hover {
    background: var(--dark);
}

.menu-toggle {
    display: none;

    border: 0;
    border-radius: 8px;

    padding: 10px 15px;

    background: var(--green);
    color: #fff;

    font-weight: 700;
    cursor: pointer;
}

.menu-toggle:hover {
    background: var(--dark);
}

/* ================================================================
   4. HERO SECTION
================================================================ */

.about-hero {
    min-height: 440px;

    display: flex;
    align-items: center;

    padding: 75px 8%;

    position: relative;
    overflow: hidden;

    background:
        linear-gradient(
            100deg,
            rgba(5, 40, 20, .94),
            rgba(5, 40, 20, .58)
        ),
        url("images/OVERVIEW.jpg") center/cover no-repeat,
        var(--dark);

    color: #fff;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 760px;
    animation: rise .8s ease both;
}

.breadcrumb {
    color: #dcebe0;
    font-size: 13px;
    margin-bottom: 20px;
}

.breadcrumb a {
    color: var(--gold);
}

.hero-tag {
    display: inline-block;

    background: var(--gold);
    color: var(--deep);

    padding: 7px 17px;
    border-radius: 30px;

    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;

    margin-bottom: 20px;
}

.about-hero h1 {
    font-size: clamp(38px, 6vw, 65px);
    line-height: 1.12;
    margin-bottom: 22px;
}

.about-hero h1 span {
    color: var(--gold);
}

.about-hero p {
    color: #edf7ef;
    font-size: 16px;
    max-width: 650px;
}

/* ================================================================
   5. MAIN CONTENT LAYOUT
================================================================ */

.about-layout {
    display: grid;
    grid-template-columns: 245px minmax(0, 1fr);
    gap: 45px;

    padding-top: 75px;
    padding-bottom: 70px;
}

/* ================================================================
   6. SIDE NAVIGATION
================================================================ */

.side-menu {
    position: sticky;
    top: 110px;
    align-self: start;

    padding: 24px;

    background: #fff;
    border: 1px solid var(--line);
    border-radius: var(--radius);

    box-shadow: var(--shadow);
}

.side-menu h3 {
    font-size: 19px;
    color: var(--dark);
    margin-bottom: 17px;
}

.side-menu ul {
    list-style: none;
}

.side-menu li {
    margin-bottom: 7px;
}

.side-menu a {
    display: block;

    padding: 10px 12px;

    color: var(--gray);
    font-size: 13px;
    font-weight: 700;

    border-left: 3px solid transparent;
    border-radius: 6px;

    transition: .2s;
}

.side-menu a:hover,
.side-menu a.active {
    background: var(--light-green);
    color: var(--green);
    border-left-color: var(--gold);
}

/* ================================================================
   7. CONTENT SECTIONS
================================================================ */

.about-content {
    min-width: 0;
}

.about-content section {
    padding-bottom: 70px;
    scroll-margin-top: 110px;
}

.section-title {
    position: relative;

    color: var(--dark);
    font-size: clamp(27px, 3vw, 37px);

    margin-bottom: 20px;
    padding-bottom: 13px;
}

.section-title::after {
    content: "";

    position: absolute;
    bottom: 0;
    left: 0;

    width: 65px;
    height: 4px;

    background: var(--gold);
    border-radius: 10px;
}

.section-description {
    max-width: 750px;
    color: var(--gray);
    margin-bottom: 23px;
}

.about-content p {
    color: var(--gray);
    margin-bottom: 16px;
}

/* ================================================================
   8. SCHOOL PHOTO
================================================================ */

.school-photo {
    position: relative;

    width: 100%;
    height: 370px;

    overflow: hidden;
    border-radius: var(--radius);

    margin-top: 28px;

    background: var(--light-green);
    box-shadow: var(--shadow);
}

.school-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;

    transition: transform .6s;
}

.school-photo:hover img {
    transform: scale(1.045);
}

.image-fallback {
    display: none;

    height: 100%;
    min-height: 120px;

    align-items: center;
    justify-content: center;

    padding: 20px;

    background: var(--light-green);
    color: var(--green);

    text-align: center;
    font-weight: 700;
}

/* ================================================================
   9. MISSION, VISION AND VALUES
================================================================ */

.mvv-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;

    margin-top: 28px;
}

.mvv-card {
    padding: 27px 22px;

    border-radius: var(--radius);
    background: #fff;

    box-shadow: var(--shadow);
    border: 1px solid var(--line);
    border-bottom: 4px solid var(--green);

    transition: transform .3s, box-shadow .3s;
}

.mvv-card:nth-child(2) {
    border-bottom-color: var(--gold);
}

.mvv-card:nth-child(3) {
    border-bottom-color: var(--dark);
}

.mvv-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
}

.mvv-icon {
    width: 55px;
    height: 55px;

    display: grid;
    place-items: center;

    background: var(--light-green);
    border-radius: 12px;

    font-size: 27px;
    margin-bottom: 16px;
}

.mvv-card h3 {
    color: var(--green);
    font-size: 20px;
    margin-bottom: 12px;
}

.mvv-card p {
    font-size: 13px;
}

.values-list {
    padding-left: 18px;
}

.values-list li {
    color: var(--gray);
    font-size: 13px;
    margin-bottom: 7px;
}

/* ================================================================
   10. HISTORY TIMELINE
================================================================ */

.timeline {
    list-style: none;

    border-left: 3px solid var(--line);
    margin: 30px 0 0 12px;
}

.timeline li {
    position: relative;
    padding: 0 0 32px 30px;
}

.timeline li::before {
    content: "";

    position: absolute;
    left: -10px;
    top: 6px;

    width: 17px;
    height: 17px;

    background: var(--gold);
    border: 3px solid #fff;
    border-radius: 50%;

    box-shadow: 0 0 0 2px var(--gold);
}

.timeline strong {
    color: var(--green);
    font-family: var(--serif);
    font-size: 26px;
}

.timeline h3 {
    color: var(--dark);
    font-size: 19px;
    margin: 4px 0;
}

.timeline p {
    font-size: 14px;
}

/* ================================================================
   11. LEADERSHIP
================================================================ */

.people-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;

    margin-top: 28px;
}

.person-card {
    background: #fff;

    padding: 27px 18px;
    border-radius: var(--radius);

    text-align: center;

    border: 1px solid var(--line);
    box-shadow: var(--shadow);

    transition: transform .3s, box-shadow .3s;
}

.person-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-hover);
}

.person-card img,
.person-placeholder {
    width: 120px;
    height: 120px;

    border-radius: 50%;

    margin: 0 auto 17px;

    border: 4px solid var(--light-green);
}

.person-card img {
    object-fit: cover;
}

.person-placeholder {
    display: grid;
    place-items: center;

    background: var(--green);
    color: var(--gold);

    font-size: 40px;
    font-weight: 800;
}

.person-card h3 {
    color: var(--green);
    font-size: 17px;
}

.person-card p {
    font-size: 13px;
    margin-top: 5px;
}

/* ================================================================
   12. LOCATION
================================================================ */

.location-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 22px;

    margin-top: 28px;
}

.location-details {
    padding: 28px;
    background: var(--light-green);
    border-radius: var(--radius);
}

.location-details h3 {
    color: var(--dark);
    font-size: 22px;
    margin-bottom: 20px;
}

.location-details dl {
    display: grid;
    grid-template-columns: 105px minmax(0, 1fr);
    gap: 12px;
}

.location-details dt {
    color: var(--green);
    font-weight: 800;
    font-size: 13px;
}

.location-details dd {
    color: var(--gray);
    font-size: 13px;
}

.location-map {
    background: linear-gradient(145deg, var(--green), var(--deep));

    padding: 32px;
    border-radius: var(--radius);

    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 15px;

    color: #fff;
}

.location-map h3 {
    color: var(--gold);
    font-size: 25px;
}

.location-map p {
    color: #edf7ef;
}

.button {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: fit-content;

    padding: 12px 21px;

    background: var(--gold);
    color: var(--deep);

    border-radius: 7px;
    font-weight: 800;
    font-size: 13px;

    transition: transform .2s, background .2s;
}

.button:hover {
    background: #f0c94d;
    transform: translateY(-3px);
}

/* ================================================================
   13. CALL TO ACTION
================================================================ */

.about-cta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;

    gap: 22px;

    padding: 38px;

    background: linear-gradient(110deg, var(--green), var(--deep));
    border-radius: var(--radius);

    margin-bottom: 40px;
    color: #fff;
}

.about-cta h2 {
    font-size: 25px;
}

.about-cta p {
    color: #e1eee5;
    font-size: 14px;
    margin-top: 7px;
}

/* ================================================================
   14. FOOTER
================================================================ */

footer {
    background: var(--deep);
    color: #d7e8dc;

    padding: 55px 7% 22px;
    font-size: 13px;
}

.fgrid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 35px;

    margin-bottom: 35px;
}

footer h3 {
    color: var(--gold);
    font-size: 17px;
    margin-bottom: 15px;
}

footer p {
    margin-bottom: 10px;
}

footer ul {
    list-style: none;
}

footer li {
    margin-bottom: 9px;
}

footer a {
    transition: color .2s;
}

footer a:hover {
    color: var(--gold);
}

.copy {
    border-top: 1px solid rgba(255,255,255,.17);
    padding-top: 20px;
    text-align: center;
}

/* ================================================================
   15. BACK TO TOP
================================================================ */

.top {
    position: fixed;
    right: 22px;
    bottom: 22px;
    z-index: 900;

    width: 48px;
    height: 48px;

    display: grid;
    place-items: center;

    border: none;
    border-radius: 50%;

    background: var(--green);
    color: #fff;

    font-size: 22px;
    font-weight: bold;

    cursor: pointer;
    box-shadow: var(--shadow);

    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);

    transition: .25s;
}

.top.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.top:hover {
    background: var(--gold);
    color: var(--deep);
}

/* ================================================================
   16. SCROLL ANIMATIONS
================================================================ */

.reveal {
    opacity: 0;
    transform: translateY(25px);
    transition: opacity .7s ease, transform .7s ease;
}

.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}

@keyframes rise {
    from {
        opacity: 0;
        transform: translateY(25px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ================================================================
   17. TABLET AND MOBILE
================================================================ */

@media(max-width:1100px) {

    .menu-toggle {
        display: block;
    }

    header {
        position: sticky;
    }

    nav {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;

        display: none;

        padding: 15px 5% 22px;

        background: #fff;
        box-shadow: 0 12px 22px rgba(0,0,0,.1);
    }

    nav.open {
        display: block;
    }

    nav ul {
        flex-direction: column;
        align-items: stretch;
    }

    nav a {
        padding: 12px;
    }

    nav a.active {
        box-shadow: inset 4px 0 0 var(--gold);
    }

    nav a.apply {
        margin: 8px 0 0;
        text-align: center;
    }

    .about-layout {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .side-menu {
        position: static;
    }

    .side-menu ul {
        display: flex;
        gap: 8px;
        overflow-x: auto;
        padding-bottom: 8px;
    }

    .side-menu li {
        flex-shrink: 0;
    }

    .side-menu a {
        white-space: nowrap;
        border: 1px solid var(--line);
        border-radius: 25px;
    }

    .side-menu a.active {
        border-color: var(--green);
    }

}

@media(max-width:750px) {

    .container {
        width: 92%;
    }

    .infobar {
        justify-content: center;
        text-align: center;
        font-size: 11px;
    }

    header {
        padding: 10px 4%;
    }

    .brand img {
        width: 43px;
        height: 43px;
    }

    .brand strong {
        font-size: 16px;
    }

    .brand small {
        font-size: 9px;
    }

    .about-hero {
        min-height: 380px;
        padding: 55px 6%;
    }

    .about-hero p {
        font-size: 14px;
    }

    .mvv-grid,
    .people-grid,
    .location-grid,
    .fgrid {
        grid-template-columns: 1fr;
    }

    .school-photo {
        height: 260px;
    }

    .about-layout {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .about-content section {
        padding-bottom: 45px;
    }

    .about-cta {
        padding: 25px;
    }

    .about-cta h2 {
        font-size: 21px;
    }

    footer {
        padding: 40px 6% 20px;
    }

}

@media(max-width:420px) {

    .brand {
        gap: 7px;
    }

    .brand strong {
        font-size: 14px;
    }

    .menu-toggle {
        padding: 9px 11px;
        font-size: 12px;
    }

    .location-details {
        padding: 20px;
    }

    .location-details dl {
        grid-template-columns: 85px minmax(0, 1fr);
    }

}

/* ================================================================
   18. ACCESSIBILITY: REDUCED MOTION
================================================================ */

@media(prefers-reduced-motion: reduce) {

    html {
        scroll-behavior: auto;
    }

    *,
    *::before,
    *::after {
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: .01ms !important;
    }

    .reveal {
        opacity: 1;
        transform: none;
    }

}

@media print {

    header,
    .infobar,
    .side-menu,
    .top,
    .about-cta,
    footer,
    .menu-toggle {
        display: none !important;
    }

    body {
        color: #000;
        background: #fff;
    }

    .about-layout {
        display: block;
        padding: 20px 0;
    }

    .about-hero {
        min-height: auto;
        color: #000;
        background: #fff;
        padding: 20px 0;
    }

    .about-hero p,
    .about-hero h1,
    .about-hero h1 span {
        color: #000;
    }

    .reveal {
        opacity: 1;
        transform: none;
    }

}

</style>

</head>

<body>

<a class="skip" href="#main">
    Skip to main content
</a>

<!-- ============================================================
     INFORMATION BAR
============================================================ -->

<div class="infobar">

    <span>
        📍 <?= e($school['location']) ?>
    </span>

    <span>

        <a href="tel:<?= e($school['phone']) ?>">
            📞 <?= e($school['phone']) ?>
        </a>

        &nbsp; | &nbsp;

        <a href="mailto:<?= e($school['email']) ?>">
            ✉️ <?= e($school['email']) ?>
        </a>

    </span>

</div>


<!-- ============================================================
     MAIN NAVIGATION
============================================================ -->

<header>

    <a class="brand"
       href="index.php"
       aria-label="<?= e($school['name']) ?> home">

        <img
            src="<?= e($school['logo']) ?>"
            alt="<?= e($school['name']) ?> logo"
            onerror="this.style.display='none'"
        >

        <span>

            <strong><?= e($school['name']) ?></strong>

            <small><?= e($school['motto']) ?></small>

        </span>

    </a>


    <button
        class="menu-toggle"
        id="menuToggle"
        type="button"
        aria-expanded="false"
        aria-controls="mainNav"
        aria-label="Open navigation menu"
    >
        ☰ Menu
    </button>


    <nav id="mainNav" aria-label="Main navigation">

        <ul>

            <?php foreach ($nav as $file => $label): ?>

                <li>

                    <a
                        href="<?= e($file) ?>"
                        <?= $file === $currentPage
                            ? 'class="active" aria-current="page"'
                            : '' ?>
                    >
                        <?= e($label) ?>
                    </a>

                </li>

            <?php endforeach; ?>

            <li>

                <a href="admission/index.php" class="apply">
                    Apply now
                </a>

            </li>

        </ul>

    </nav>

</header>


<main id="main">

<!-- ============================================================
     HERO SECTION
============================================================ -->

<section class="about-hero">

    <div class="hero-content">

        <div class="breadcrumb">

            <a href="index.php">Home</a> / About Us

        </div>

        <span class="hero-tag">
            DISCOVER OUR SCHOOL
        </span>

        <h1>
            Discover the Story of
            <span>GS Kigeme A</span>
        </h1>

        <p>
            Education, discipline, knowledge and character development.
            Discover our history, mission, leadership and the values
            that guide our school community.
        </p>

    </div>

</section>


<!-- ============================================================
     MAIN CONTENT
============================================================ -->

<div class="container about-layout">


<!-- SIDE NAVIGATION -->

<aside class="side-menu" aria-label="About page sections">

    <h3>Explore About Us</h3>

    <ul id="sideMenu">

        <?php foreach ($sections as $id => $title): ?>

            <li>

                <a href="#<?= e($id) ?>">
                    <?= e($title) ?>
                </a>

            </li>

        <?php endforeach; ?>

    </ul>

</aside>


<!-- ABOUT CONTENT -->

<article class="about-content">


<!-- ============================================================
     WHO WE ARE
============================================================ -->

<section id="who" class="reveal">

    <h2 class="section-title">
        Who We Are
    </h2>

    <p>
        GS Kigeme A is an Anglican Church secondary school managed
        by the Anglican Church of Rwanda through Kigeme Diocese,
        in collaboration with the Government of Rwanda.
    </p>

    <p>
        The school is located in Kigeme Cell, Gasaka Sector,
        Nyamagabe District, Southern Province of Rwanda.
        Since its establishment in 1965, the institution has
        continued contributing to education and the development
        of responsible members of society.
    </p>

    <p>
        Our school is committed to providing an environment where
        learners develop academic knowledge, discipline,
        responsibility, practical skills and positive values.
    </p>

    <div class="school-photo">

        <img
            src="images/OVERVIEW.jpg"
            alt="Overview of GS Kigeme A"
            loading="lazy"
            onerror="this.style.display='none';this.nextElementSibling.style.display='flex'"
        >

        <div class="image-fallback">
            School overview image is not available.
        </div>

    </div>

</section>


<!-- ============================================================
     MISSION AND VALUES
============================================================ -->

<section id="values" class="reveal">

    <h2 class="section-title">
        Our Mission and Values
    </h2>

    <p class="section-description">
        Our educational approach focuses on academic development,
        good character, responsibility and preparation for the future.
    </p>

    <div class="mvv-grid">

        <div class="mvv-card">

            <div class="mvv-icon" aria-hidden="true">🎯</div>

            <h3>Our Mission</h3>

            <p>
                To provide quality education that develops learners'
                knowledge, skills, discipline and responsibility,
                enabling them to contribute positively to society.
            </p>

        </div>


        <div class="mvv-card">

            <div class="mvv-icon" aria-hidden="true">🌍</div>

            <h3>Our Vision</h3>

            <p>
                To be a school recognized for academic achievement,
                strong moral values, discipline and the development
                of responsible future leaders.
            </p>

        </div>


        <div class="mvv-card">

            <div class="mvv-icon" aria-hidden="true">⭐</div>

            <h3>Our Values</h3>

            <ul class="values-list">

                <?php foreach ($values as $value): ?>

                    <li><?= e($value) ?></li>

                <?php endforeach; ?>

            </ul>

        </div>

    </div>

</section>


<!-- ============================================================
     HISTORY
============================================================ -->

<section id="history" class="reveal">

    <h2 class="section-title">
        Our History
    </h2>

    <p class="section-description">
        GS Kigeme A has a long educational journey.
        Explore some of the important milestones in its development.
    </p>

    <ol class="timeline">

        <?php foreach ($timeline as [$year, $title, $description]): ?>

            <li>

                <strong><?= e($year) ?></strong>

                <h3><?= e($title) ?></h3>

                <p><?= e($description) ?></p>

            </li>

        <?php endforeach; ?>

    </ol>

</section>


<!-- ============================================================
     LEADERSHIP
============================================================ -->

<section id="leadership" class="reveal">

    <h2 class="section-title">
        Our School Leadership
    </h2>

    <p class="section-description">
        Effective school leadership supports teaching,
        learning, discipline and the development of learners.
    </p>

    <div class="people-grid">

        <?php foreach ($leaders as [$name, $role, $photo]): ?>

            <div class="person-card">

                <?php if (
                    is_file(__DIR__ . '/' . $photo) &&
                    is_readable(__DIR__ . '/' . $photo)
                ): ?>

                    <img
                        src="<?= e($photo) ?>"
                        alt="<?= e($name) ?> - <?= e($role) ?>"
                        loading="lazy"
                    >

                <?php else: ?>

                    <div class="person-placeholder" aria-hidden="true">
                        <?= e(mb_substr($name, 0, 1, 'UTF-8')) ?>
                    </div>

                <?php endif; ?>

                <h3><?= e($name) ?></h3>

                <p><?= e($role) ?></p>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- ============================================================
     LOCATION
============================================================ -->

<section id="location" class="reveal">

    <h2 class="section-title">
        Where We Are Located
    </h2>

    <p class="section-description">
        Visit GS Kigeme A and discover our educational environment
        in the beautiful Southern Province of Rwanda.
    </p>

    <div class="location-grid">


        <div class="location-details">

            <h3>School Address</h3>

            <dl>

                <dt>Country</dt>
                <dd>Rwanda</dd>

                <dt>Province</dt>
                <dd>Southern Province</dd>

                <dt>District</dt>
                <dd>Nyamagabe</dd>

                <dt>Sector</dt>
                <dd>Gasaka</dd>

                <dt>Cell</dt>
                <dd>Kigeme</dd>

                <dt>School</dt>
                <dd>GS Kigeme A</dd>

            </dl>

        </div>


        <div class="location-map">

            <h3>Visit Our School</h3>

            <p>
                Find GS Kigeme A in Nyamagabe District,
                Southern Province, Rwanda.
            </p>

            <a
                class="button"
                href="https://www.google.com/maps/search/?api=1&query=GS+Kigeme+A+Nyamagabe+Rwanda"
                target="_blank"
                rel="noopener noreferrer"
            >
                Open Google Maps →
            </a>

        </div>

    </div>

</section>


<!-- ============================================================
     CALL TO ACTION
============================================================ -->

<div class="about-cta reveal">

    <div>

        <h2>Become Part of Our School Community</h2>

        <p>
            Would you like to know more about GS Kigeme A?
            We are ready to help you.
        </p>

    </div>

    <a href="contact.php" class="button">
        Contact Our School
    </a>

</div>


</article>

</div>

</main>


<!-- ============================================================
     FOOTER
============================================================ -->

<footer>

    <div class="fgrid">


        <div>

            <h3><?= e($school['name']) ?></h3>

            <p><?= e($school['motto']) ?>.</p>

            <p><?= e($school['location']) ?></p>

        </div>


        <div>

            <h3>Website Pages</h3>

            <ul>

                <?php foreach ($nav as $file => $label): ?>

                    <li>

                        <a href="<?= e($file) ?>">
                            <?= e($label) ?>
                        </a>

                    </li>

                <?php endforeach; ?>

            </ul>

        </div>


        <div>

            <h3>Contact Information</h3>

            <ul>

                <li>
                    <a href="tel:<?= e($school['phone']) ?>">
                        <?= e($school['phone']) ?>
                    </a>
                </li>

                <li>
                    <a href="mailto:<?= e($school['email']) ?>">
                        <?= e($school['email']) ?>
                    </a>
                </li>

                <li>
                    <a href="admission/index.php">
                        Apply now
                    </a>
                </li>

            </ul>

        </div>

    </div>


    <div class="copy">

        &copy; <?= date('Y') ?>
        <?= e($school['name']) ?>.
        All rights reserved.

    </div>

</footer>


<!-- ============================================================
     BACK TO TOP
============================================================ -->

<button
    class="top"
    id="toTop"
    type="button"
    aria-label="Back to top"
    title="Back to top"
>
    ↑
</button>


<!-- ============================================================
     JAVASCRIPT FUNCTIONS
============================================================ -->

<script>

/* ================================================================
   1. MOBILE NAVIGATION
================================================================ */

const menuToggle = document.getElementById('menuToggle');
const mainNav = document.getElementById('mainNav');

function openMenu() {

    mainNav.classList.add('open');

    menuToggle.setAttribute('aria-expanded', 'true');
    menuToggle.setAttribute('aria-label', 'Close navigation menu');

    menuToggle.textContent = '✕ Close';

}

function closeMenu() {

    mainNav.classList.remove('open');

    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.setAttribute('aria-label', 'Open navigation menu');

    menuToggle.textContent = '☰ Menu';

}

menuToggle.addEventListener('click', function () {

    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

    if (isOpen) {
        closeMenu();
    } else {
        openMenu();
    }

});


/* Close menu after selecting a page */

mainNav.querySelectorAll('a').forEach(function(link) {

    link.addEventListener('click', closeMenu);

});


/* Close menu using Escape */

document.addEventListener('keydown', function(event) {

    if (event.key === 'Escape') {

        closeMenu();

    }

});


/* Close menu when clicking outside it */

document.addEventListener('click', function(event) {

    const clickedInside = mainNav.contains(event.target) ||
                          menuToggle.contains(event.target);

    if (!clickedInside) {
        closeMenu();
    }

});


/* ================================================================
   2. BACK TO TOP BUTTON
================================================================ */

const topButton = document.getElementById('toTop');

window.addEventListener('scroll', function() {

    if (window.scrollY > 450) {

        topButton.classList.add('show');

    } else {

        topButton.classList.remove('show');

    }

}, { passive: true });


topButton.addEventListener('click', function() {

    window.scrollTo({

        top: 0,

        behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches
            ? 'auto'
            : 'smooth'

    });

});


/* ================================================================
   3. ACTIVE SECTION HIGHLIGHTING
================================================================ */

const sideLinks = Array.from(
    document.querySelectorAll('#sideMenu a')
);

const observedSections = sideLinks
    .map(function(link) {

        return document.querySelector(
            link.getAttribute('href')
        );

    })
    .filter(Boolean);


if ('IntersectionObserver' in window) {

    const sectionObserver = new IntersectionObserver(

        function(entries) {

            entries.forEach(function(entry) {

                if (entry.isIntersecting) {

                    sideLinks.forEach(function(link) {

                        const isActive =
                            link.getAttribute('href') ===
                            '#' + entry.target.id;

                        link.classList.toggle('active', isActive);

                        if (isActive) {

                            link.setAttribute('aria-current', 'location');

                        } else {

                            link.removeAttribute('aria-current');

                        }

                    });

                }

            });

        },

        {
            rootMargin: '-20% 0px -65% 0px',
            threshold: 0
        }

    );


    observedSections.forEach(function(section) {

        sectionObserver.observe(section);

    });

}


/* ================================================================
   4. SCROLL REVEAL ANIMATIONS
================================================================ */

const revealElements = document.querySelectorAll('.reveal');

const reduceMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)'
).matches;


if ('IntersectionObserver' in window && !reduceMotion) {

    const revealObserver = new IntersectionObserver(

        function(entries, observer) {

            entries.forEach(function(entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add('visible');

                    observer.unobserve(entry.target);

                }

            });

        },

        {
            threshold: 0.12
        }

    );


    revealElements.forEach(function(element) {

        revealObserver.observe(element);

    });

} else {

    revealElements.forEach(function(element) {

        element.classList.add('visible');

    });

}


/* ================================================================
   5. PRINT PAGE FUNCTION
================================================================ */

function printAboutPage() {

    window.print();

}


/* ================================================================
   6. SHARE PAGE FUNCTION
================================================================ */

async function shareAboutPage() {

    const shareData = {

        title: 'About GS Kigeme A',

        text: 'Discover the history and educational journey of GS Kigeme A.',

        url: window.location.href

    };


    try {

        if (navigator.share) {

            await navigator.share(shareData);

        } else if (navigator.clipboard &&
                   window.isSecureContext) {

            await navigator.clipboard.writeText(shareData.url);

            alert('Page link copied successfully!');

        } else {

            alert('Sharing is not available in this browser.');

        }

    } catch (error) {

        if (error.name !== 'AbortError') {

            console.error('Sharing failed:', error);

        }

    }

}

</script>

</body>
</html>
