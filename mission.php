
<?php
$school_name = "GS KIGEME A";
$year = date("Y");

$values = [
    ["Respect", "We respect one another and value everyone's ideas."],
    ["Discipline", "We encourage good behaviour and responsibility."],
    ["Excellence", "We work hard to achieve the best results."],
    ["Teamwork", "We work together to achieve our goals."]
];

$goals = [
    "To provide quality education to all students.",
    "To develop students' talents and creativity.",
    "To promote discipline and good moral values.",
    "To prepare students for a better future."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Our Mission | <?php echo $school_name; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f8fc;
        }

        .navbar {
            background: #073b67;
        }

        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 600;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        .hero {
            min-height: 420px;
            background: linear-gradient(
                rgba(0, 35, 70, 0.75),
                rgba(0, 35, 70, 0.75)
            ), url("images/school.jpg") center/cover no-repeat;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }

        .section-title {
            color: #073b67;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .info-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
            height: 100%;
        }

        .info-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .icon {
            font-size: 35px;
            color: #0d6efd;
        }

        .motto {
            background: #073b67;
            color: white;
            padding: 55px 20px;
            text-align: center;
        }

        footer {
            background: #052b4b;
            color: white;
            padding: 20px;
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            GS KIGEME A
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link active" href="mission.php">Our Mission</a></li>
                <li class="nav-item"><a class="nav-link" href="academic.php">Academics</a></li>
                <li class="nav-item"><a class="nav-link" href="activities.php">Activities</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-3 fw-bold">Our Mission & Vision</h1>
        <p class="lead mt-3">
            Building knowledge, discipline and a brighter future.
        </p>
        <a href="#mission" class="btn btn-warning btn-lg mt-3">
            Discover More
        </a>
    </div>
</section>

<!-- Mission and Vision -->
<section class="container py-5" id="mission">
    <h2 class="text-center section-title">Who We Are</h2>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card info-card shadow-sm p-4">
                <div class="icon mb-3">🎯</div>
                <h3>Our Mission</h3>
                <p>
                    To provide quality education that develops knowledgeable,
                    responsible, disciplined and creative students who
                    contribute positively to society.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card info-card shadow-sm p-4">
                <div class="icon mb-3">🌍</div>
                <h3>Our Vision</h3>
                <p>
                    To become a school recognised for academic excellence,
                    good character, innovation and the development of
                    responsible citizens.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center section-title">Our Core Values</h2>

        <div class="row g-4">
            <?php foreach ($values as $value): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card info-card shadow-sm text-center p-4">
                        <div class="icon mb-3">⭐</div>
                        <h5><?php echo htmlspecialchars($value[0]); ?></h5>
                        <p><?php echo htmlspecialchars($value[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Goals -->
<section class="container py-5">
    <h2 class="text-center section-title">Our Goals</h2>

    <div class="card shadow-sm border-0 p-4">
        <ul class="list-group list-group-flush">
            <?php foreach ($goals as $goal): ?>
                <li class="list-group-item">
                    <span class="text-primary fw-bold">✓</span>
                    <?php echo htmlspecialchars($goal); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- Motto -->
<section class="motto">
    <div class="container">
        <h2>Our Motto</h2>
        <p class="fs-3 fw-bold mt-3">
            Education for a Better Future
        </p>
        <p>Learning today, leading tomorrow.</p>
    </div>
</section>

<!-- Contact -->
<section class="container text-center py-5">
    <h2 class="section-title">Join Our School Community</h2>
    <p>Learn more about our school and the opportunities we offer.</p>
    <a href="contact.php" class="btn btn-primary btn-lg">
        Contact Us
    </a>
</section>

<!-- Footer -->
<footer class="text-center">
    <p class="mb-1">
        &copy; <?php echo $year; ?> <?php echo $school_name; ?>.
        All Rights Reserved.
    </p>
    <small>Nyamagabe District, Southern Province, Rwanda</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
