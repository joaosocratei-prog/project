
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GS KIGEME A | Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f8f5;
            color: #26352b;
            line-height: 1.6;
        }

        header {
            background: #086b3c;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 32px;
        }

        header p {
            color: #ffdc70;
            font-style: italic;
        }

        nav {
            background: #064d30;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
            display: inline-block;
            font-weight: bold;
        }

        nav a:hover {
            color: #ffdc70;
        }

        .hero {
            background: linear-gradient(
                rgba(0, 65, 35, 0.78),
                rgba(0, 65, 35, 0.78)
            ), url("images/overview.jpg");

            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h2 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .button {
            background: #e3b52e;
            color: #173321;
            text-decoration: none;
            padding: 13px 25px;
            border-radius: 8px;
            font-weight: bold;
            display: inline-block;
        }

        .button:hover {
            background: white;
        }

        .section {
            padding: 50px 20px;
            text-align: center;
        }

        .section h2 {
            color: #086b3c;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: white;
            width: 280px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px #00000012;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-7px);
        }

        .card h3 {
            color: #086b3c;
            margin-bottom: 10px;
        }

        .card a {
            display: inline-block;
            margin-top: 15px;
            color: #086b3c;
            font-weight: bold;
            text-decoration: none;
        }

        .contact {
            background: #e5f2e9;
        }

        footer {
            background: #064d30;
            color: white;
            text-align: center;
            padding: 25px 15px;
        }

        footer a {
            color: #ffdc70;
        }

        @media (max-width: 600px) {
            .hero h2 {
                font-size: 30px;
            }

            header h1 {
                font-size: 25px;
            }

            nav a {
                margin: 6px;
            }
        }
    </style>
</head>

<body>

  <header class="school-header">
    <img src="images/gs logo.jpg"
         alt="GS KIGEME A School Logo"
         class="school-logo">

    <div class="school-info">
        <h1>GS KIGEME A</h1>
        <p>Learning Today, Leading Tomorrow</p>
        <p>Gasaka Sector, Nyamagabe District, Rwanda</p>
    </div>
</header>  

    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="academics.html">Academics</a>
        <a href="students.html">Students</a>
        <a href="teachers.html">Teachers</a>
        <a href="gallery.html">Gallery</a>
        <a href="news.html">News</a>
        <a href="contact.html">Contact</a>
    </nav>

    <section class="hero">
        <h2>Welcome to GS KIGEME A</h2>
        <p>Discover knowledge, build character and prepare for a brighter future.</p>
        <a href="admission/index.php" class="button">
            Apply for Admission
        </a>
    </section>

    <section class="section">
        <h2>Welcome to Our School</h2>
        <p>
            GS KIGEME A is committed to education, personal development
            and helping learners prepare for tomorrow's opportunities.
        </p>
    </section>

    <section class="section">
        <h2>Explore Our School</h2>

        <div class="cards">

            <div class="card">
                <h3>📚 Academics</h3>
                <p>Discover our academic programmes and learning activities.</p>
                <a href="academics.html">Learn More →</a>
            </div>

            <div class="card">
                <h3>🎓 Admission</h3>
                <p>Visit our online admission portal to apply to our school.</p>
                <a href="admission/index.php">Apply Now →</a>
            </div>

            <div class="card">
                <h3>⚽ Student Life</h3>
                <p>Explore sports, clubs, activities, and student leadership.</p>
                <a href="students.html">Discover More →</a>
            </div>

            <div class="card">
                <h3>👩‍🏫 Our Teachers</h3>
                <p>Learn about our teachers and their role in education.</p>
                <a href="teachers.html">Meet Our Teachers →</a>
            </div>

            <div class="card">
                <h3>🖼️ Gallery</h3>
                <p>Explore photographs of school life and activities.</p>
                <a href="gallery.html">View Gallery →</a>
            </div>

            <div class="card">
                <h3>📰 School News</h3>
                <p>Read announcements and published school updates.</p>
                <a href="news.html">Read News →</a>
            </div>

        </div>
    </section>

    <section class=" section contact">
        <h2>Contact Our School</h2>
        <p>📍 Gasaka Sector, Nyamagabe District, Rwanda</p>
        <p>📞 <a href="tel:0788600587">0788600587</a></p>
        <p>
            ✉
            <a href="mailto:gskigeme2@yahoo.com">
                gskigeme2@yahoo.com
            </a>
        </p>
    </section>

    <footer>
        <h3>GS KIGEME A</h3>
        <p>Learning Today, Leading Tomorrow.</p>
        <p>&copy; 2026 GS KIGEME A. All rights reserved.</p>
    </footer>

</body>
</html>
