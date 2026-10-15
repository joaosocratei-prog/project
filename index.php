 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GS KIGEME A | Official School Website</title>
    <meta name="description" content="Welcome to GS KIGEME A in Nyamagabe, Rwanda. Learning today, leading tomorrow.">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --green: #087443;
            --dark-green: #064b30;
            --gold: #f2c14e;
            --light: #f4f8f5;
            --white: #ffffff;
            --text: #26352b;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--light);
            color: var(--text);
            line-height: 1.7;
        }

        /* PROFESSIONAL SCHOOL HEADER */

        .school-header {
            background: linear-gradient(120deg, #043d27, #0b8150);
            color: white;
            padding: 25px 7%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 25px;
            border-bottom: 4px solid var(--gold);
        }

        .school-logo {
            width: 115px;
            height: 115px;
            object-fit: contain;
            background: white;
            padding: 7px;
            border: 3px solid var(--gold);
            border-radius: 50%;
            box-shadow: 0 8px 25px #00000030;
            flex-shrink: 0;
            transition: transform 0.4s;
        }

        .school-logo:hover {
            transform: scale(1.07);
        }

        .school-info {
            text-align: left;
        }

        .school-info h1 {
            font-size: clamp(27px, 4vw, 42px);
            line-height: 1.2;
            letter-spacing: 2px;
            font-weight: 800;
        }

        .school-info .motto {
            color: var(--gold);
            font-size: 17px;
            font-style: italic;
            margin: 7px 0;
        }

        .school-info .location {
            font-size: 13px;
            color: #e4f4e9;
        }

        /* NAVIGATION BAR */

        nav {
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 5px;
            padding: 12px 15px;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 15px #00000010;
        }

        nav a {
            color: var(--dark-green);
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            padding: 9px 12px;
            border-radius: 6px;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.active {
            background: var(--green);
            color: white;
        }

        nav a.apply-link {
            background: var(--gold);
            color: var(--dark-green);
        }

        nav a.apply-link:hover {
            background: var(--dark-green);
            color: white;
        }

        /* HERO SECTION */

        .hero {
            min-height: 540px;
            padding: 100px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;

            background:
                linear-gradient(
                    110deg,
                    rgba(3, 53, 32, 0.88),
                    rgba(8, 116, 67, 0.63)
                ),
                url("images/overview.jpg");

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 850px;
            animation: appear 1s ease;
        }

        .hero-label {
            display: inline-block;
            padding: 7px 17px;
            margin-bottom: 20px;
            color: var(--gold);
            border: 1px solid #f2c14e99;
            background: #ffffff12;
            border-radius: 30px;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .hero h2 {
            font-size: clamp(35px, 6vw, 60px);
            line-height: 1.15;
            margin-bottom: 22px;
        }

        .hero h2 span {
            color: var(--gold);
        }

        .hero p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 18px;
            color: #f0f8f2;
        }

        .button {
            display: inline-block;
            background: var(--gold);
            color: var(--dark-green);
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 7px;
            font-weight: 800;
            margin: 5px;
            transition: 0.3s;
        }

        .button:hover {
            background: white;
            transform: translateY(-3px);
        }

        .button-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .button-outline:hover {
            background: white;
            color: var(--dark-green);
        }

        /* WELCOME SECTION */

        .section {
            max-width: 1200px;
            padding: 75px 25px;
            margin: auto;
            text-align: center;
        }

        .section-heading {
            color: var(--dark-green);
            font-size: clamp(28px, 4vw, 37px);
            margin-bottom: 12px;
        }

        .gold-line {
            width: 65px;
            height: 4px;
            background: var(--gold);
            border-radius: 5px;
            margin: 0 auto 25px;
        }

        .intro {
            max-width: 850px;
            margin: auto;
            color: #536157;
            font-size: 17px;
        }

        /* SCHOOL VALUES */

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
            margin-top: 40px;
            text-align: left;
        }

        .card {
            background: white;
            padding: 30px 25px;
            border-radius: 14px;
            border: 1px solid #e4ece5;
            border-bottom: 4px solid var(--green);
            box-shadow: 0 8px 25px #00000009;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px #064b3020;
        }

        .card-icon {
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e7f5eb;
            border-radius: 12px;
            font-size: 28px;
            margin-bottom: 18px;
        }

        .card h3 {
            color: var(--green);
            font-size: 21px;
            margin-bottom: 10px;
        }

        .card p {
            color: #58645b;
            font-size: 15px;
        }

        .card a {
            display: inline-block;
            color: var(--green);
            text-decoration: none;
            font-weight: 800;
            margin-top: 18px;
        }

        .card a:hover {
            color: #a87900;
        }

        /* SCHOOL MOTTO BANNER */

        .motto-banner {
            background: linear-gradient(120deg, #064b30, #087443);
            padding: 55px 20px;
            text-align: center;
            color: white;
        }

        .motto-banner h2 {
            font-size: clamp(25px, 4vw, 35px);
            margin-bottom: 10px;
        }

        .motto-banner p {
            color: var(--gold);
            font-size: 18px;
            font-style: italic;
        }

        /* CONTACT SECTION */

        .contact {
            background: #e8f4eb;
            max-width: none;
        }

        .contact-inner {
            max-width: 900px;
            margin: auto;
        }

        .contact p {
            margin: 10px 0;
        }

        .contact a {
            color: var(--green);
            font-weight: 700;
            text-decoration: none;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        /* FOOTER */

        footer {
            background: #033c26;
            color: white;
            padding: 35px 20px;
            text-align: center;
            border-top: 4px solid var(--gold);
        }

        footer h3 {
            font-size: 25px;
            margin-bottom: 5px;
        }

        footer .footer-motto {
            color: var(--gold);
            font-style: italic;
        }

        footer .copyright {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #ffffff25;
            font-size: 13px;
            color: #d9e9de;
        }

        /* ANIMATION */

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* TABLETS */

        @media (max-width: 900px) {
            .cards {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .school-header {
                padding: 22px 4%;
            }

            nav a {
                padding: 8px;
                font-size: 13px;
            }
        }

        /* MOBILE PHONES */

        @media (max-width: 600px) {
            .school-header {
                flex-direction: column;
                text-align: center;
                gap: 12px;
                padding: 25px 15px;
            }

            .school-logo {
                width: 95px;
                height: 95px;
            }

            .school-info {
                text-align: center;
            }

            .school-info h1 {
                font-size: 29px;
            }

            .school-info .motto {
                font-size: 15px;
            }

            nav {
                position: relative;
                padding: 10px 5px;
                gap: 3px;
            }

            nav a {
                margin: 2px;
                padding: 7px;
                font-size: 12px;
            }

            .hero {
                min-height: 450px;
                padding: 75px 18px;
            }

            .hero h2 {
                font-size: 36px;
            }

            .hero p {
                font-size: 16px;
            }

            .section {
                padding: 55px 18px;
            }

            .cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .card {
                padding: 25px 22px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *, *::before, *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>

    <!-- SCHOOL HEADER AND LOGO -->

    <header class="school-header">

        <img
            src="images/gs logo.jpg"
            alt="GS KIGEME A School Logo"
            class="school-logo"
        >

        <div class="school-info">
            <h1>GS KIGEME A</h1>
            <p class="motto">Learning Today, Leading Tomorrow</p>
            <p class="location">
                Gasaka Sector, Nyamagabe District, Rwanda
            </p>
        </div>

    </header>

    <!-- NAVIGATION -->

    <nav aria-label="Main navigation">
        <a href="index.html" class="active">Home</a>
        <a href="about.html">About</a>
        <a href="academics.html">Academics</a>
        <a href="students.html">Students</a>
        <a href="teachers.html">Teachers</a>
        <a href="gallery.html">Gallery</a>
        <a href="news.html">News</a>
        <a href="contact.html">Contact</a>
        <a href="admission/index.php" class="apply-link">Apply Now</a>
    </nav>

    <!-- WELCOME BANNER -->

    <section class="hero">
        <div class="hero-content">

            <div class="hero-label">WELCOME TO OUR SCHOOL</div>

            <h2>
                Welcome to <span>GS KIGEME A</span>
            </h2>

            <p>
                Discover knowledge, build character, develop your talents,
                and prepare for a brighter future through education.
            </p>

            <a href="admission/index.php" class="button">
                Apply for Admission →
            </a>

            <a href="about.html" class="button button-outline">
                Discover Our School
            </a>

        </div>
    </section>

    <!-- INTRODUCTION -->

    <section class="section">

        <h2 class="section-heading">Welcome to Our School</h2>
        <div class="gold-line"></div>

        <p class="intro">
            GS KIGEME A is committed to education, personal development,
            discipline, and helping learners prepare for tomorrow's
            opportunities. Explore our school, learning programmes,
            student activities, and community.
        </p>

    </section>

    <!-- SCHOOL INFORMATION CARDS -->

    <section class="section" style="padding-top: 10px;">

        <h2 class="section-heading">Explore Our School</h2>
        <div class="gold-line"></div>

        <p class="intro">
            Learn more about the different parts of our school community.
        </p>

        <div class="cards">

            <article class="card">
                <div class="card-icon">📚</div>
                <h3>Academics</h3>
                <p>
                    Discover our academic programmes, learning activities,
                    and educational opportunities.
                </p>
                <a href="academics.html">Explore Academics →</a>
            </article>

            <article class="card">
                <div class="card-icon">🎓</div>
                <h3>Admission</h3>
                <p>
                    Visit our online admission portal to learn how to
                    apply to GS KIGEME A.
                </p>
                <a href="admission/index.php">Apply Now →</a>
            </article>

            <article class="card">
                <div class="card-icon">⚽</div>
                <h3>Student Life</h3>
                <p>
                    Explore sports, clubs, student leadership, school
                    activities, and personal development.
                </p>
                <a href="students.html">Discover Student Life →</a>
            </article>

            <article class="card">
                <div class="card-icon">👩‍🏫</div>
                <h3>Our Teachers</h3>
                <p>
                    Learn about our teaching community and its role
                    in supporting learners.
                </p>
                <a href="teachers.html">Meet Our Teachers →</a>
            </article>

            <article class="card">
                <div class="card-icon">🖼️</div>
                <h3>School Gallery</h3>
                <p>
                    View photographs that showcase school life,
                    activities, and memorable moments.
                </p>
                <a href="gallery.html">View Gallery →</a>
            </article>

            <article class="card">
                <div class="card-icon">📰</div>
                <h3>School News</h3>
                <p>
                    Visit our news page for school announcements
                    and verified updates.
                </p>
                <a href="news.html">Read News →</a>
            </article>

        </div>

    </section>

    <!-- SCHOOL MOTTO -->

    <section class="motto-banner">
        <h2>Learning Today, Leading Tomorrow</h2>
        <p>Building knowledge, character, and opportunity.</p>
    </section>

    <!-- CONTACT -->

    <section class="section contact">

        <div class="contact-inner">

            <h2 class="section-heading">Contact Our School</h2>
            <div class="gold-line"></div>

            <p>📍 Gasaka Sector, Nyamagabe District, Rwanda</p>

            <p>
                📞 <a href="tel:0788600587">0788600587</a>
            </p>

            <p>
                ✉️
                <a href="mailto:gskigeme2@yahoo.com">
                    gskigeme2@yahoo.com
                </a>
            </p>

        </div>

    </section>

    <!-- FOOTER -->

    <footer>

        <h3>GS KIGEME A</h3>

        <p class="footer-motto">
            Learning Today, Leading Tomorrow.
        </p>

        <p>Gasaka Sector, Nyamagabe District, Rwanda</p>

        <p class="copyright">
            &copy; 2026 GS KIGEME A. All rights reserved.
        </p>

    </footer>

</body>
</html>
