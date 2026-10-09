<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GS KIGEME -A- — official school website with academics, activities, updates and school life.">

    <title>GSKIGEME -A-</title>

    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="in.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->
<header class="navbar">

    <div class="logo">
        <div class="logo-circle">G</div>

        <div>
            <h2>GS KIGEME -A-</h2>
            <span>all about our school</span>
        </div>
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="https://github.com/joaosocratei-prog/project/blob/main/about.php">Our School</a>
        <a href="academics.php">Academics</a>
        <a href="activities.php">Activities</a>
        <a href="news.php">Updates</a>
        <a href="contact.php">Contact</a>
    </nav>

    <button class="menu-btn" onclick="toggleMenu()" aria-label="Toggle navigation menu">☰</button>

</header>


<!-- ================= HERO ================= -->
<section class="hero">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <p class="small-title">WELCOME TO GS KIGEME -A-</p>

        <h1>
            A World of Knowledge
            <br>
            and Opportunity
        </h1>

        <p>
            Discover an inspiring learning community
            where students grow academically,
            socially and creatively.
        </p>

        <div class="hero-buttons">
            <a href="about.html" class="btn primary">
                Discover GS KIGEME-A-
            </a>

            <a href="contact.html" class="btn secondary">
                Contact Us
            </a>
        </div>

    </div>

</section>


<!-- ================= DISCOVER ================= -->
<section class="discover">

    <div class="section-title">

        <span>DISCOVER GS KIGEME -A-</span>

        <h2>
            Opening Doors to a
            <br>
            Brighter Future
        </h2>

        <p>
            Explore our academic programs, student activities
            and opportunities for personal development.
        </p>

    </div>


    <div class="cards">

        <div class="card">

            <div class="card-icon">📚</div>

            <h3>Academics</h3>

            <p>
                Explore challenging academic programs
                designed to develop knowledge,
                creativity and critical thinking.
            </p>

            <a href="academics.html">
                View More →
            </a>

        </div>


        <div class="card">

            <div class="card-icon">🏆</div>

            <h3>Activities</h3>

            <p>
                Discover sports, clubs and extracurricular
                activities that help students discover
                their talents.
            </p>

            <a href="activities.html">
                View More →
            </a>

        </div>


        <div class="card">

            <div class="card-icon">📰</div>

            <h3>School Updates</h3>

            <p>
                Stay informed about school news,
                announcements and upcoming events.
            </p>

            <a href="news.html">
                View More →
            </a>

        </div>

    </div>

</section>


<!-- ================= MESSAGE ================= -->
<section class="message">

    <div class="message-image">
        <img src="images/school.jpg" alt="GS KIGEME-A- School">
    </div>

    <div class="message-content">

        <span>PRINCIPAL'S MESSAGE</span>

        <h2>
            Building Students
            <br>
            for the Future
        </h2>

        <p>
            At our school, we believe education goes beyond
            classrooms. We encourage students to develop
            knowledge, creativity, discipline and leadership skills.
        </p>

        <p>
            Together with parents, teachers and students,
            we continue building a strong and supportive
            learning community.
        </p>

        <h4>HAKIZIMANA Emmanuell</h4>
        <small>Head of School</small>

    </div>

</section>


<!-- ================= STATISTICS ================= -->
<section class="statistics">

    <div>
        <h2>1000+</h2>
        <p>Students</p>
    </div>

    <div>
        <h2>100+</h2>
        <p>Staff</p>
    </div>

    <div>
        <h2>30</h2>
        <p>Average Class Size</p>
    </div>

    <div>
        <h2>95+</h2>
        <p>Years of Legacy</p>
    </div>

</section>


<!-- ================= COMMUNITY ================= -->
<section class="community">

    <div class="section-title">

        <span>OUR COMMUNITY</span>

        <h2>
            Learning Beyond
            <br>
            the Classroom
        </h2>

    </div>


    <div class="community-grid">

        <article>
            <img src="images/games.jpg" alt="School Games">

            <div>
                <h3>Games</h3>

                <p>
                    Sports develop teamwork, discipline,
                    resilience and friendship.
                </p>
            </div>
        </article>


        <article>
            <img src="images/learner.png" alt="Student Innovation">

            <div>
                <h3>Innovation</h3>

                <p>
                    Student projects encourage creativity,
                    collaboration and problem solving.
                </p>
            </div>
        </article>


        <article>
            <img src="images/culture.jpg" alt="School Culture">

            <div>
                <h3>Culture</h3>

                <p>
                    We celebrate culture, creativity,
                    traditional dance and student talents.
                </p>
            </div>
        </article>

    </div>

</section>


<!-- ================= NEWSLETTER ================= -->
<section class="newsletter">

    <h2>Stay Updated</h2>

    <p>
        Receive the latest school news and announcements.
    </p>

    <form id="newsletter-form">

        <label for="subscriber-name" class="sr-only">Your full name</label>
        <input
            id="subscriber-name"
            name="name"
            type="text"
            placeholder="Your full name"
            required
        >

        <label for="subscriber-email" class="sr-only">Your email address</label>
        <input
            id="subscriber-email"
            name="email"
            type="email"
            placeholder="Your email address"
            required
        >

        <button type="submit">
            Subscribe
        </button>

    </form>

</section>


<!-- ================= FOOTER ================= -->
<footer>

    <div class="footer-content">

        <div>
            <h2>KIGEME</h2>

            <p>
                GS KIGEME -A-
            </p>

            <p>
                A community of knowledge,
                discipline and excellence.
            </p>
        </div>


        <div>

            <h3>Quick Links</h3>

            <a href="index.html">Home</a>
            <a href="about.html">Our School</a>
            <a href="academics.html">Academics</a>
            <a href="activities.html">Activities</a>

        </div>


        <div>

            <h3>Contact</h3>

            <p>Butare, Rwanda</p>
            <p>Email: info@gskigeme.rw</p>
            <p>Phone: +250 788 000 000</p>

        </div>

    </div>


    <div class="copyright">

        © 2026 GS KIGEME-A-.
        All Rights Reserved.

    </div>

</footer>


<script src="js/script.js"></script>
<script>
    // Basic newsletter form handling (replace with real endpoint later)
    document.getElementById('newsletter-form').addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Thanks for subscribing! We will keep you updated.');
        this.reset();
    });
</script>

</body>
</html>
