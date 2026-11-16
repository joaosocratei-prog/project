
<?php
// Small PHP helper for safe output. No Node.js or external framework is required.
function e($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$currentYear = date('Y');
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'about.php');

$navigation = [
    'Home'      => 'index.php',
    'About'     => 'about.php',
    'Academics' => 'academics.php',
    'Students'  => 'students.php',
    'Teachers'  => 'teachers.php',
    'Gallery'   => 'gallery.php',
    'News'      => 'news.php',
    'Contact'   => 'contact.php'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5.3 and Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">


    <title>About GS KIGEME A | Learning Today, Leading Tomorrow</title>

    <meta name="description"
          content="Learn about GS KIGEME A, an Anglican Church secondary school in Kigeme, Nyamagabe District, Rwanda.">

    <style>
        :root {
            --green: #238653;
            --green-deep: #145b38;
            --dark-green: #0b3d27;
            --light-green: #effaf3;
            --mint: #d9f2e2;
            --gold: #e0b32e;
            --white: #ffffff;
            --text: #26352c;
            --gray: #66736a;
            --shadow: 0 8px 25px rgba(0, 0, 0, 0.09);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            -webkit-tap-highlight-color: transparent;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 110px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            line-height: 1.7;
            background: linear-gradient(180deg, #ffffff 0%, #fbfefc 100%);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* SMOOTH GREEN NAVIGATION BAR */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            padding: 11px 5.5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            background: rgba(255, 255, 255, .96);
            border-bottom: 1px solid rgba(35, 134, 83, .12);
            box-shadow: 0 7px 25px rgba(11, 61, 39, .09);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        .school-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }

        .school-brand img {
            width: 62px;
            height: 62px;
            object-fit: contain;
            border-radius: 14px;
            padding: 4px;
            background: var(--light-green);
        }

        .school-brand h2 {
            color: var(--dark-green);
            font-size: 21px;
            line-height: 1.25;
            letter-spacing: .3px;
        }

        .school-brand p {
            font-size: 11px;
            color: var(--gray);
            letter-spacing: .35px;
        }

        .nav-toggle {
            position: absolute;
            width: 1px;
            height: 1px;
            opacity: 0;
            pointer-events: none;
        }

        .menu-toggle {
            display: none;
            width: 45px;
            height: 42px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 5px;
            border-radius: 12px;
            background: var(--light-green);
            border: 1px solid rgba(35, 134, 83, .18);
            cursor: pointer;
        }

        .menu-toggle span {
            width: 21px;
            height: 2px;
            border-radius: 5px;
            background: var(--dark-green);
            transition: transform .25s ease, opacity .25s ease;
        }

        .main-nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 5px;
        }

        .main-nav a {
            position: relative;
            display: inline-flex;
            align-items: center;
            padding: 10px 12px;
            border-radius: 10px;
            color: #355343;
            font-size: 13px;
            font-weight: 700;
            white-space: nowrap;
            transition: color .25s ease, background .25s ease, transform .25s ease;
        }

        .main-nav a:not(.apply-button):hover,
        .main-nav a.active {
            color: var(--green-deep);
            background: var(--light-green);
        }

        .main-nav a:not(.apply-button)::after {
            content: "";
            position: absolute;
            left: 13px;
            right: 13px;
            bottom: 5px;
            height: 2px;
            border-radius: 5px;
            background: var(--green);
            transform: scaleX(0);
            transform-origin: center;
            transition: transform .25s ease;
        }

        .main-nav a:not(.apply-button):hover::after,
        .main-nav a.active::after {
            transform: scaleX(1);
        }

        .main-nav .apply-button {
            margin-left: 5px;
            padding: 11px 17px;
            color: #fff;
            background: linear-gradient(135deg, #2a9b60, #145b38);
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 11px;
            box-shadow: 0 5px 14px rgba(20, 91, 56, .2);
        }

        .main-nav .apply-button:hover {
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(20, 91, 56, .27);
        }

        /* HERO */
        .hero {
            min-height: 570px;
            display: flex;
            align-items: center;
            padding: 80px 8%;
            background:
                linear-gradient(90deg,
                rgba(5, 45, 23, 0.90),
                rgba(5, 45, 23, 0.43)),
                url("images/OVERVIEW.jpg") center/cover no-repeat;
            color: white;
        }

        .hero-content {
            max-width: 720px;
        }

        .hero-label {
            display: inline-block;
            background: var(--gold);
            color: #202820;
            padding: 6px 15px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(36px, 5vw, 62px);
            line-height: 1.15;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--gold);
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 620px;
        }

        .button {
            display: inline-block;
            padding: 13px 23px;
            border-radius: 6px;
            font-weight: bold;
            margin: 5px 8px 5px 0;
            transition: 0.3s;
        }

        .button-gold {
            background: var(--gold);
            color: #17251b;
        }

        .button-white {
            border: 2px solid white;
            color: white;
        }

        .button:hover {
            transform: translateY(-3px);
        }

        /* GENERAL SECTIONS */
        section {
            padding: 75px 8%;
            scroll-margin-top: 95px;
        }

        .section-heading {
            text-align: center;
            max-width: 720px;
            margin: 0 auto 40px;
        }

        .section-heading .small-title {
            color: var(--green);
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
            font-size: 13px;
        }

        .section-heading h2 {
            color: var(--dark-green);
            font-size: clamp(27px, 4vw, 38px);
            line-height: 1.3;
            margin: 10px 0 15px;
        }

        .section-heading p {
            color: var(--gray);
        }

        /* HIGHLIGHTS */
        .highlights {
            padding-top: 0;
            position: relative;
            margin-top: -35px;
            z-index: 2;
        }

        .highlight-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .highlight-card {
            background: white;
            padding: 27px;
            text-align: center;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }

        .highlight-card .icon {
            font-size: 34px;
            margin-bottom: 10px;
        }

        .highlight-card h3 {
            color: var(--green);
            margin-bottom: 8px;
        }

        .highlight-card p {
            color: var(--gray);
            font-size: 14px;
        }

        /* ABOUT */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 45px;
        }

        .about-image img {
            width: 100%;
            height: 390px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: var(--shadow);
        }

        .about-text h2 {
            color: var(--dark-green);
            font-size: 34px;
            line-height: 1.3;
            margin: 12px 0 20px;
        }

        .about-text p {
            color: var(--gray);
            margin-bottom: 15px;
        }

        .check-list {
            list-style: none;
            margin: 20px 0;
        }

        .check-list li {
            margin-bottom: 10px;
        }

        .check-list li::before {
            content: "✓";
            color: var(--green);
            font-weight: bold;
            margin-right: 10px;
        }

        /* ACADEMICS */
        .academics {
            background: var(--light-green);
        }

        .academic-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .academic-card {
            background: white;
            padding: 28px;
            border-radius: 12px;
            border-bottom: 4px solid var(--green);
            box-shadow: var(--shadow);
            transition: 0.3s;
        }

        .academic-card:hover {
            transform: translateY(-6px);
        }

        .academic-card .icon {
            font-size: 34px;
        }

        .academic-card h3 {
            color: var(--green);
            margin: 12px 0;
        }

        .academic-card p {
            color: var(--gray);
            font-size: 14px;
        }

        .combination-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }

        .combination-list span {
            background: var(--light-green);
            color: var(--dark-green);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 13px;
            font-weight: bold;
        }

        /* STUDENT LIFE */
        .student-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .student-card {
            border-radius: 12px;
            overflow: hidden;
            background: white;
            box-shadow: var(--shadow);
        }

        .student-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .student-card div {
            padding: 22px;
        }

        .student-card h3 {
            color: var(--green);
            margin-bottom: 8px;
        }

        .student-card p {
            color: var(--gray);
            font-size: 14px;
        }

        /* MOTTO BANNER */
        .motto {
            text-align: center;
            background: var(--dark-green);
            color: white;
            padding: 55px 8%;
        }

        .motto h2 {
            font-size: clamp(25px, 4vw, 38px);
            margin-bottom: 12px;
        }

        .motto h2 span {
            color: var(--gold);
        }

        .motto p {
            color: #e1eee5;
        }

        /* GALLERY */
        .gallery {
            background: #fafcfb;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .gallery-grid img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            transition: 0.3s;
        }

        .gallery-grid img:hover {
            transform: scale(1.03);
        }

        /* NEWS */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .news-card {
            padding: 25px;
            background: white;
            border: 1px solid #e5ece7;
            border-radius: 10px;
        }

        .news-card h3 {
            color: var(--green);
            margin-bottom: 10px;
        }

        .news-card p {
            color: var(--gray);
            font-size: 14px;
        }

        .news-note {
            margin-top: 25px;
            text-align: center;
            font-size: 13px;
            color: var(--gray);
        }

        /* ADMISSION BANNER */
        .admission-banner {
            background: var(--light-green);
            text-align: center;
        }

        .admission-banner h2 {
            color: var(--dark-green);
            font-size: 34px;
            margin-bottom: 12px;
        }

        .admission-banner p {
            color: var(--gray);
            max-width: 650px;
            margin: 0 auto 22px;
        }

        /* CONTACT */
        .contact {
            background: var(--dark-green);
            color: white;
        }

        .contact .section-heading h2 {
            color: white;
        }

        .contact .section-heading p {
            color: #d7e8dc;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
        }

        .contact-card h3 {
            color: var(--gold);
            margin-bottom: 8px;
        }

        .contact-card p,
        .contact-card a {
            color: white;
            overflow-wrap: anywhere;
        }

        /* FOOTER */
        footer {
            background: #082e19;
            color: #d7e8dc;
            padding: 22px 8%;
            text-align: center;
            font-size: 13px;
        }

        footer a {
            color: var(--gold);
        }


        /* SOCIAL MEDIA */
        .social-media {
            padding: 30px 15px 10px;
            text-align: center;
        }

        .social-media h3 {
            color: var(--gold);
            margin-bottom: 8px;
            font-size: 19px;
        }

        .social-media p {
            color: #d7e8dc;
            margin-bottom: 16px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 18px;
            border-radius: 25px;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            transition: .25s ease;
        }

        .social-btn:hover {
            color: #fff;
            transform: translateY(-4px);
            filter: brightness(1.08);
        }

        .social-btn.whatsapp { background: #25D366; }
        .social-btn.instagram { background: linear-gradient(45deg, #feda75, #d62976, #962fbf, #4f5bd5); }
        .social-btn.facebook { background: #1877F2; }
        .social-btn.youtube { background: #FF0000; }

        .whatsapp-float {
            position: fixed;
            right: 22px;
            bottom: 22px;
            z-index: 2000;
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #25D366;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
            box-shadow: 0 5px 18px rgba(0,0,0,.25);
            transition: .25s ease;
        }

        .whatsapp-float:hover {
            color: #fff;
            transform: scale(1.08);
        }



        .reveal-ready {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .65s ease, transform .65s ease;
        }
        .reveal-ready.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        @media (prefers-reduced-motion: reduce) {
            .reveal-ready {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }

        /* BOOTSTRAP-ENHANCED SOCIAL ICON BUTTONS */
        .social-btn {
            gap: 9px;
            min-width: 132px;
            padding: 11px 19px;
            box-shadow: 0 5px 14px rgba(0, 0, 0, .16);
            letter-spacing: .2px;
        }

        .social-btn i {
            font-size: 19px;
            line-height: 1;
        }

        .social-btn:focus-visible,
        .whatsapp-float:focus-visible {
            outline: 3px solid var(--gold);
            outline-offset: 4px;
        }

        .whatsapp-float i {
            font-size: 29px;
        }

        /* Smooth reveal animation for page content */
        .highlight-card, .academic-card, .student-card, .news-card,
        .contact-card, .gallery-grid img {
            will-change: transform;
        }

        .button, .social-btn, .main-nav a, .menu-toggle {
            -webkit-font-smoothing: antialiased;
        }

        @media (max-width: 480px) {
            .social-links { gap: 9px; }
            .social-btn { min-width: 118px; padding: 10px 13px; font-size: 13px; }
            .social-btn i { font-size: 17px; }
        }

        /* TABLET AND MOBILE NAVIGATION */
        @media (max-width: 1100px) {
            .site-header { padding-left: 4%; padding-right: 4%; gap: 12px; }
            .main-nav { gap: 1px; }
            .main-nav a { padding: 9px 8px; font-size: 12px; }
        }

        @media (max-width: 900px) {
            .site-header { min-height: 82px; }
            .menu-toggle { display: flex; margin-left: auto; }
            .main-nav {
                position: absolute;
                top: calc(100% + 8px);
                left: 4%;
                right: 4%;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 5px;
                padding: 12px;
                border: 1px solid rgba(35, 134, 83, .15);
                border-radius: 16px;
                background: rgba(255,255,255,.98);
                box-shadow: 0 15px 35px rgba(11,61,39,.16);
                opacity: 0;
                visibility: hidden;
                pointer-events: none;
                transform: translateY(-8px);
                transition: opacity .25s ease, transform .25s ease, visibility .25s ease;
            }
            .main-nav a { justify-content: center; width: 100%; padding: 12px; font-size: 14px; }
            .main-nav .apply-button { margin: 4px 0 0; }
            .nav-toggle:checked ~ .main-nav {
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: translateY(0);
            }
            .nav-toggle:checked + .menu-toggle span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
            .nav-toggle:checked + .menu-toggle span:nth-child(2) { opacity: 0; }
            .nav-toggle:checked + .menu-toggle span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
            .academic-grid, .news-grid { grid-template-columns: repeat(2, 1fr); }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 700px) {
            .hero { min-height: 500px; padding: 60px 6%; }
            section { padding: 55px 6%; }
            .highlight-grid, .about-grid, .academic-grid, .student-grid,
            .news-grid, .contact-grid { grid-template-columns: 1fr; }
            .about-image img { height: 280px; }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); }
            .gallery-grid img { height: 160px; }
            .school-brand img { width: 53px; height: 53px; }
            .school-brand h2 { font-size: 18px; }
            .school-brand p { font-size: 10px; }
            .whatsapp-float { right: 15px; bottom: 15px; }
        }

        /* Subtle transitions and accessibility */
        .highlight-card, .academic-card, .student-card, .news-card,
        .contact-card, .about-image img, .gallery-grid img {
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .highlight-card:hover, .news-card:hover, .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 32px rgba(11, 61, 39, .12);
        }

        :focus-visible {
            outline: 3px solid #e0b32e;
            outline-offset: 3px;
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- STICKY GREEN NAVIGATION -->
    <header class="site-header">
        <a class="school-brand" href="index.php" aria-label="GS Kigeme A home">
            <img src="images/gs logo.jpg" alt="GS KIGEME A School Logo">
            <span>
                <h2>GS KIGEME A</h2>
                <p>Learning Today, Leading Tomorrow</p>
            </span>
        </a>

        <input class="nav-toggle" type="checkbox" id="nav-toggle" aria-label="Toggle navigation">
        <label class="menu-toggle" for="nav-toggle" aria-label="Open navigation menu">
            <span></span><span></span><span></span>
        </label>

        <nav class="main-nav" aria-label="Main navigation">
            <?php foreach ($navigation as $label => $url): ?>
                <a href="<?php echo e($url); ?>" class="<?php echo $currentPage === $url ? 'active' : ''; ?>"
                   <?php echo $currentPage === $url ? 'aria-current="page"' : ''; ?>>
                    <?php echo e($label); ?>
                </a>
            <?php endforeach; ?>
            <a href="admission/index.php" class="apply-button">Apply Now</a>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <span class="hero-label">WELCOME TO OUR SCHOOL</span>

            <h1>
                Welcome to <span>GS KIGEME A</span>
            </h1>

            <p>
                We are committed to supporting learners through education,
                discipline, knowledge, skills and personal development.
                Together, we prepare students for a brighter future.
            </p>

            <a href="about.php" class="button button-gold">
                Discover Our School
            </a>

            <a href="admission/index.php" class="button button-white">
                Apply for Admission
            </a>
        </div>
    </section>

    <!-- HIGHLIGHTS -->
    <section class="highlights">
        <div class="highlight-grid">

            <div class="highlight-card">
                <div class="icon">📚</div>
                <h3>Quality Education</h3>
                <p>Supporting learning, knowledge and academic growth.</p>
            </div>

            <div class="highlight-card">
                <div class="icon">🎓</div>
                <h3>Academic Development</h3>
                <p>Helping learners build skills for future opportunities.</p>
            </div>

            <div class="highlight-card">
                <div class="icon">🤝</div>
                <h3>Discipline and Values</h3>
                <p>Encouraging responsibility, respect and cooperation.</p>
            </div>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about">
        <div class="about-grid">

            <div class="about-image">
                <img src="images/OVERVIEW.jpg"
                     alt="Overview of GS KIGEME A"
                     loading="lazy">
            </div>

            <div class="about-text">
                <span class="small-title">ABOUT OUR SCHOOL</span>

                <h2>Building Knowledge, Character and Opportunity</h2>

                <p>
                    GS KIGEME A is an Anglican Church secondary school managed
                    by the Anglican Church of Rwanda through Kigeme Diocese,
                    in collaboration with the Government of Rwanda. The school
                    is located in Kigeme Cell, Gasaka Sector, Nyamagabe District,
                    Southern Province, Rwanda.
                </p>

                <p>
                    Our school is committed to supporting learners through
                    education, discipline, knowledge, practical skills and
                    personal development. We work with the school community
                    to prepare students to contribute positively to society.
                </p>

                <ul class="check-list">
                    <li>Encouraging academic achievement</li>
                    <li>Promoting discipline and respect</li>
                    <li>Supporting learner participation</li>
                    <li>Preparing students for the future</li>
                </ul>

                <a href="#academics" class="button button-gold">
                    Explore Our School
                </a>
            </div>

        </div>
    </section>

    <!-- ACADEMICS -->
    <section class="academics" id="academics">
        <div class="section-heading">
            <span class="small-title">OUR ACADEMICS</span>
            <h2>Learning for a Better Future</h2>
            <p>
                Discover the levels and subject combinations offered
                at GS KIGEME A.
            </p>
        </div>

        <div class="academic-grid">

            <div class="academic-card">
                <div class="icon">📖</div>
                <h3>Ordinary Level</h3>
                <p>
                    Ordinary Level supports learners in developing
                    foundational knowledge and skills across subjects.
                </p>
                <a href="academics.php" class="button button-gold">
                    Explore Academics
                </a>
            </div>

            <div class="academic-card">
                <div class="icon">🔬</div>
                <h3>Advanced Level</h3>
                <p>
                    Advanced Level gives learners opportunities to focus
                    on subject combinations and prepare for further study.
                </p>

                <div class="combination-list">
                    <span>MPC</span>
                    <span>MCB</span>
                    <span>PCB</span>
                    <span>MS1</span>
                    <span>MS2</span>
                </div>
            </div>

            <div class="academic-card">
                <div class="icon">🌟</div>
                <h3>Skills and Development</h3>
                <p>
                    Learning is supported by developing responsibility,
                    problem-solving, teamwork and independent thinking.
                </p>
                <a href="students.php" class="button button-gold">
                    Student Life
                </a>
            </div>

        </div>
    </section>

    <!-- STUDENT LIFE -->
    <section id="students">
        <div class="section-heading">
            <span class="small-title">STUDENT LIFE</span>
            <h2>Learning Beyond the Classroom</h2>
            <p>
                School life can include academic activities, sports,
                teamwork and opportunities to develop new skills.
            </p>
        </div>

        <div class="student-grid">

            <div class="student-card">
                <img src="images/students.jpg"
                     alt="Learners at school"
                     loading="lazy">

                <div>
                    <h3>Learning Activities</h3>
                    <p>
                        Encourage curiosity, participation and a strong
                        commitment to learning.
                    </p>
                </div>
            </div>

            <div class="student-card">
                <img src="images/activities.jpg"
                     alt="School activities"
                     loading="lazy">

                <div>
                    <h3>School Activities</h3>
                    <p>
                        Activities can help learners build confidence,
                        teamwork and communication skills.
                    </p>
                </div>
            </div>

            <div class="student-card">
                <img src="images/sports.jpg"
                     alt="School sports"
                     loading="lazy">

                <div>
                    <h3>Sports and Teamwork</h3>
                    <p>
                        Sports encourage cooperation, determination
                        and healthy competition.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- SCHOOL MOTTO -->
    <section class="motto">
        <h2>Learning Today, <span>Leading Tomorrow</span></h2>
        <p>
            Knowledge opens doors. Discipline builds character.
            Education helps shape the future.
        </p>
    </section>

    <!-- GALLERY -->
    <section class="gallery" id="gallery">
        <div class="section-heading">
            <span class="small-title">OUR GALLERY</span>
            <h2>A Glimpse of School Life</h2>
            <p>
                Explore photographs that represent our school,
                learning environment and activities.
            </p>
        </div>

        <div class="gallery-grid">
            <img src="images/OVERVIEW.jpg"
                 alt="School overview"
                 loading="lazy">

            <img src="images/students.jpg"
                 alt="School learners"
                 loading="lazy">

            <img src="images/activities.jpg"
                 alt="School activities"
                 loading="lazy">

            <img src="images/sports.jpg"
                 alt="School sports"
                 loading="lazy">
        </div>

        <div style="text-align:center; margin-top:30px;">
            <a href="gallery.php" class="button button-gold">
                View Full Gallery
            </a>
        </div>
    </section>

    <!-- NEWS AND UPDATES -->
    <section id="news">
        <div class="section-heading">
            <span class="small-title">NEWS AND UPDATES</span>
            <h2>What's Happening at Our School?</h2>
            <p>
                Visit the school news page for verified announcements,
                academic updates and important information.
            </p>
        </div>

        <div class="news-grid">

            <div class="news-card">
                <h3>Academic Announcements</h3>
                <p>
                    Check official school communications for information
                    about learning activities, assessments and academic dates.
                </p>
            </div>

            <div class="news-card">
                <h3>School Activities</h3>
                <p>
                    Follow confirmed updates about school events,
                    student activities and community participation.
                </p>
            </div>

            <div class="news-card">
                <h3>Important Notices</h3>
                <p>
                    Read official notices about school programmes,
                    admission information and other announcements.
                </p>
            </div>

        </div>

        <p class="news-note">
            Note: These are news categories, not reports of confirmed
            recent events. Add verified school news before publishing.
        </p>

        <div style="text-align:center; margin-top:25px;">
            <a href="news.php" class="button button-gold">
                Visit News Page
            </a>
        </div>
    </section>

    <!-- ADMISSION -->
    <section class="admission-banner">
        <h2>Join the GS KIGEME A Community</h2>

        <p>
            Interested in joining our school? Visit the admission portal
            to find the application form and follow the instructions.
        </p>

        <a href="admission/index.php" class="button button-gold">
            Apply for Admission
        </a>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="section-heading">
            <span class="small-title">CONTACT US</span>
            <h2>Get in Touch With Our School</h2>
            <p>
                Contact GS KIGEME A for school information and enquiries.
            </p>
        </div>

        <div class="contact-grid">

            <div class="contact-card">
                <h3>📍 Location</h3>
                <p>Nyamagabe District, Rwanda</p>
            </div>

            <div class="contact-card">
                <h3>📞 Phone</h3>
                <p>
                    <a href="tel:0788600587">0788600587</a>
                </p>
            </div>

            <div class="contact-card">
                <h3>✉️ Email</h3>
                <p>
                    <a href="mailto:gskigeme2@yahoo.com">
                        gskigeme2@yahoo.com
                    </a>
                </p>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>
            &copy; <?php echo e($currentYear); ?> GS KIGEME A.
            All rights reserved.
        </p>

        <p>Learning Today, Leading Tomorrow.</p>

        <div class="social-media">
            <h3>Connect With GS KIGEME A</h3>
            <p>Follow our school updates and stay connected with our community.</p>
            <div class="social-links">
                <a class="social-btn whatsapp" href="https://wa.me/250788600587" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="bi bi-whatsapp" aria-hidden="true"></i><span>WhatsApp</span></a>
                <a class="social-btn instagram" href="https://www.instagram.com/YOUR_INSTAGRAM_USERNAME/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                <a class="social-btn facebook" href="https://www.facebook.com/YOUR_FACEBOOK_PAGE/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook" aria-hidden="true"></i><span>Facebook</span></a>
                <a class="social-btn youtube" href="https://www.youtube.com/@YOUR_CHANNEL" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="bi bi-youtube" aria-hidden="true"></i><span>YouTube</span></a>
            </div>
        </div>
    </footer>

    <a class="whatsapp-float" href="https://wa.me/250788600587?text=Hello%20GS%20Kigeme%20A"
       target="_blank" rel="noopener noreferrer" aria-label="Chat with GS KIGEME A on WhatsApp" title="Chat with us on WhatsApp"><i class="bi bi-whatsapp" aria-hidden="true"></i></a>


    <!-- Bootstrap JavaScript bundle (CDN; no Node.js required) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Close the mobile navigation after a menu item is selected.
        const navToggle = document.getElementById('nav-toggle');
        document.querySelectorAll('.main-nav a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (navToggle) navToggle.checked = false;
            });
        });

        // Gentle reveal animation as sections enter the viewport.
        const revealItems = document.querySelectorAll(
            'section, .highlight-card, .academic-card, .student-card, .news-card, .contact-card'
        );

        if ('IntersectionObserver' in window &&
            !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            revealItems.forEach(function (item) {
                item.classList.add('reveal-ready');
            });

            const observer = new IntersectionObserver(function (entries, currentObserver) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        currentObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            revealItems.forEach(function (item) {
                observer.observe(item);
            });
        }
    });
    </script>
\n</body>
</html>
