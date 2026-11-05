
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GS KIGEME A | Learning Today, Leading Tomorrow</title>

    <meta name="description"
          content="Welcome to GS KIGEME A in Nyamagabe District, Rwanda. Learning Today, Leading Tomorrow.">

    <style>
        :root {
            --green: #176b3a;
            --dark-green: #0c4525;
            --light-green: #edf7ef;
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
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            line-height: 1.7;
            background: #ffffff;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* HEADER */
        header {
            background: var(--white);
            padding: 12px 6%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        }

        .school-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .school-brand img {
            width: 65px;
            height: 65px;
            object-fit: contain;
        }

        .school-brand h2 {
            color: var(--green);
            font-size: 22px;
            line-height: 1.3;
        }

        .school-brand p {
            font-size: 12px;
            color: var(--gray);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        nav a {
            color: var(--text);
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover {
            color: var(--green);
        }

        .apply-button {
            background: var(--green);
            color: white !important;
            padding: 10px 17px;
            border-radius: 6px;
        }

        .apply-button:hover {
            background: var(--dark-green);
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

        /* MOBILE RESPONSIVE */
        @media (max-width: 1000px) {
            header {
                flex-direction: column;
            }

            nav {
                justify-content: center;
            }

            .academic-grid,
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            header {
                position: relative;
            }

            nav {
                gap: 12px;
            }

            nav a {
                font-size: 13px;
            }

            .hero {
                min-height: 500px;
                padding: 60px 6%;
            }

            section {
                padding: 55px 6%;
            }

            .highlight-grid,
            .about-grid,
            .academic-grid,
            .student-grid,
            .news-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .about-image img {
                height: 280px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-grid img {
                height: 160px;
            }

            .school-brand h2 {
                font-size: 19px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="school-brand">
            <img src="images/gs logo.jpg" alt="GS KIGEME A School Logo">

            <div>
                <h2>GS KIGEME A</h2>
                <p>Learning Today, Leading Tomorrow</p>
            </div>
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="academics.php">Academics</a>
            <a href="students.php">Students</a>
            <a href="teachers.php">Teachers</a>
            <a href="gallery.php">Gallery</a>
            <a href="news.php">News</a>
            <a href="contact.php">Contact</a>
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

            <a href="about.html" class="button button-gold">
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
                    GS KIGEME A is a school in Nyamagabe District, Rwanda.
                    We aim to provide learners with an environment that
                    encourages learning, personal responsibility and growth.
                </p>

                <p>
                    Our school community works toward developing learners
                    who are prepared to contribute positively to society.
                </p>

                <ul class="check-list">
                    <li>Encouraging academic achievement</li>
                    <li>Promoting discipline and respect</li>
                    <li>Supporting learner participation</li>
                    <li>Preparing students for the future</li>
                </ul>

                <a href="about.html" class="button button-gold">
                    Learn More About Us
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
                <a href="academics.html" class="button button-gold">
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
                <a href="students.html" class="button button-gold">
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
            <a href="gallery.html" class="button button-gold">
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
            <a href="news.html" class="button button-gold">
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
            &copy; <span id="year"></span> GS KIGEME A.
            All rights reserved.
        </p>

        <p>Learning Today, Leading Tomorrow.</p>
    </footer>

    <script>
        document.getElementById("year").textContent =
            new Date().getFullYear();
    </script>

</body>
</html>
