
<?php
$pageTitle = "Gallery";

$photos = [
    [
        "image" => "images/OVERVIEW.jpg",
        "title" => "Our School Environment",
        "category" => "School"
    ],
    [
        "image" => "images/students.jpg",
        "title" => "Our Students",
        "category" => "Students"
    ],
    [
        "image" => "images/activities.jpg",
        "title" => "School Activities",
        "category" => "Activities"
    ],
    [
        "image" => "images/sports.jpg",
        "title" => "Sports and Teamwork",
        "category" => "Sports"
    ]
];

$categories = ["All", "School", "Students", "Activities", "Sports"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($pageTitle) ?> | GS KIGEME A</title>

<style>
:root {
    --green: #176b3a;
    --dark-green: #0c4525;
    --light-green: #edf7ef;
    --gold: #e0b32e;
    --white: #ffffff;
    --text: #26352c;
    --gray: #66736a;
    --shadow: 0 8px 25px rgba(0,0,0,0.09);
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

/* =========================
   HEADER AND NAVIGATION
========================= */

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
    box-shadow: 0 3px 15px rgba(0,0,0,0.08);
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

nav a:hover,
nav a.active {
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

/* =========================
   GALLERY HERO
========================= */

.gallery-hero {
    min-height: 390px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 70px 8%;

    background:
        linear-gradient(
            rgba(5,45,23,0.88),
            rgba(5,45,23,0.65)
        ),
        url("images/OVERVIEW.jpg") center/cover no-repeat;

    color: white;
}

.hero-content {
    max-width: 750px;
}

.hero-label {
    display: inline-block;
    background: var(--gold);
    color: #202820;
    padding: 6px 16px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: bold;
    margin-bottom: 20px;
}

.gallery-hero h1 {
    font-size: clamp(36px, 5vw, 58px);
    line-height: 1.2;
    margin-bottom: 18px;
}

.gallery-hero h1 span {
    color: var(--gold);
}

.gallery-hero p {
    font-size: 17px;
    color: #f0f5f1;
}

/* =========================
   SECTION INTRODUCTION
========================= */

section {
    padding: 70px 8%;
}

.section-heading {
    text-align: center;
    max-width: 750px;
    margin: 0 auto 40px;
}

.small-title {
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

/* =========================
   GALLERY FILTER BUTTONS
========================= */

.gallery-section {
    background: #fafcfb;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 38px;
}

.filter-btn {
    border: 1px solid var(--green);
    background: white;
    color: var(--green);
    padding: 10px 22px;
    border-radius: 30px;
    cursor: pointer;
    font-weight: bold;
    font-size: 14px;
    transition: 0.3s;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--green);
    color: white;
}

/* =========================
   GALLERY GRID
========================= */

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.gallery-item {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: 0.35s;
}

.gallery-item:hover {
    transform: translateY(-7px);
    box-shadow: 0 14px 30px rgba(0,0,0,0.15);
}

.gallery-image {
    position: relative;
    overflow: hidden;
}

.gallery-image img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    cursor: pointer;
    transition: 0.5s;
}

.gallery-item:hover .gallery-image img {
    transform: scale(1.08);
}

.image-overlay {
    position: absolute;
    inset: 0;
    background: rgba(5,45,23,0.35);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: 0.3s;
    pointer-events: none;
}

.gallery-item:hover .image-overlay {
    opacity: 1;
}

.image-overlay span {
    color: white;
    font-size: 35px;
}

.photo-info {
    padding: 20px;
}

.photo-info h3 {
    color: var(--green);
    font-size: 18px;
    margin-bottom: 5px;
}

.photo-info p {
    color: var(--gray);
    font-size: 13px;
}

.gallery-item.hidden {
    display: none;
}

/* =========================
   IMAGE LIGHTBOX
========================= */

.lightbox {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 2000;
    background: rgba(0,0,0,0.94);
    align-items: center;
    justify-content: center;
    padding: 25px;
}

.lightbox img {
    max-width: 90%;
    max-height: 82vh;
    object-fit: contain;
    border-radius: 8px;
}

.close-lightbox {
    position: absolute;
    top: 15px;
    right: 30px;
    color: white;
    font-size: 42px;
    cursor: pointer;
}

/* =========================
   CONTACT SECTION
   MATCHING INDEX.PHP
========================= */

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
    gap: 25px;
}

.contact-card {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    transition: 0.3s;
}

.contact-card:hover {
    background: rgba(255,255,255,0.13);
    transform: translateY(-5px);
}

.contact-card h3 {
    color: var(--gold);
    font-size: 22px;
    margin-bottom: 12px;
}

.contact-card p,
.contact-card a {
    color: white;
    font-size: 17px;
    overflow-wrap: anywhere;
}

.contact-card a:hover {
    color: var(--gold);
}

/* =========================
   FOOTER
========================= */

footer {
    background: #082e19;
    color: #d7e8dc;
    padding: 22px 8%;
    text-align: center;
    font-size: 14px;
}

footer p {
    margin: 4px 0;
}

footer a {
    color: var(--gold);
}

/* =========================
   RESPONSIVE DESIGN
========================= */

@media (max-width: 1000px) {

    header {
        flex-direction: column;
    }

    nav {
        justify-content: center;
    }

    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 700px) {

    header {
        position: relative;
        padding: 15px 5%;
    }

    nav {
        justify-content: center;
        gap: 12px;
    }

    nav a {
        font-size: 13px;
    }

    .school-brand h2 {
        font-size: 19px;
    }

    .gallery-hero {
        min-height: 330px;
        padding: 55px 6%;
    }

    section {
        padding: 55px 6%;
    }

    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .gallery-image img {
        height: 240px;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }
}
</style>
</head>

<body>

<!-- =========================
     HEADER - SAME AS INDEX
========================= -->

<header>

    <div class="school-brand">

        <img src="images/gs logo.jpg"
             alt="GS KIGEME A School Logo">

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
        <a href="gallery.php" class="active">Gallery</a>
        <a href="news.php">News</a>
        <a href="contact.php">Contact</a>
        <a href="admission/index.php" class="apply-button">
            Apply Now
        </a>
    </nav>

</header>


<!-- =========================
     GALLERY HERO
========================= -->

<section class="gallery-hero">

    <div class="hero-content">

        <span class="hero-label">
            EXPLORE OUR SCHOOL
        </span>

        <h1>
            Welcome to <span>Our Gallery</span>
        </h1>

        <p>
            Discover the beautiful moments, school environment,
            academic activities and unforgettable memories
            of GS KIGEME A.
        </p>

    </div>

</section>


<!-- =========================
     GALLERY INTRODUCTION
========================= -->

<section class="gallery-section">

    <div class="section-heading">

        <span class="small-title">
            OUR SCHOOL MEMORIES
        </span>

        <h2>A Glimpse of Life at GS KIGEME A</h2>

        <p>
            Every photograph tells a story. Explore our school
            environment, students, activities and sports through
            our collection of photographs.
        </p>

    </div>


    <!-- FILTER BUTTONS -->

    <div class="filter-buttons">

        <?php foreach ($categories as $index => $category): ?>

            <button
                type="button"
                class="filter-btn <?= $index === 0 ? 'active' : '' ?>"
                data-filter="<?= htmlspecialchars($category) ?>">

                <?= htmlspecialchars($category) ?>

            </button>

        <?php endforeach; ?>

    </div>


    <!-- GALLERY PHOTOS -->

    <div class="gallery-grid">

        <?php foreach ($photos as $photo): ?>

            <div class="gallery-item"
                 data-category="<?= htmlspecialchars($photo['category']) ?>">

                <div class="gallery-image">

                    <img
                        src="<?= htmlspecialchars($photo['image']) ?>"
                        alt="<?= htmlspecialchars($photo['title']) ?>"
                        loading="lazy"
                        onclick="openLightbox(this.src, this.alt)">

                    <div class="image-overlay">
                        <span>⌕</span>
                    </div>

                </div>

                <div class="photo-info">

                    <h3>
                        <?= htmlspecialchars($photo['title']) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($photo['category']) ?>
                    </p>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- =========================
     IMAGE PREVIEW
========================= -->

<div class="lightbox" id="lightbox" onclick="closeLightbox()">

    <span class="close-lightbox" onclick="closeLightbox()">
        &times;
    </span>

    <img id="lightbox-image"
         src=""
         alt="School photograph">

</div>


<!-- =========================
     CONTACT US
     MATCHING INDEX.PHP
========================= -->

<section class="contact" id="contact">

    <div class="section-heading">

        <span class="small-title">
            CONTACT US
        </span>

        <h2>Get in Touch With Our School</h2>

        <p>
            Contact GS KIGEME A for school information and enquiries.
        </p>

    </div>


    <div class="contact-grid">

        <div class="contact-card">

            <h3>📍 Location</h3>

            <p>
                Nyamagabe District, Rwanda
            </p>

        </div>


        <div class="contact-card">

            <h3>📞 Phone</h3>

            <p>
                <a href="tel:0788600587">
                    0788600587
                </a>
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


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        &copy; <?= date("Y") ?> GS KIGEME A.
        All rights reserved.
    </p>

    <p>
        Learning Today, Leading Tomorrow.
    </p>

</footer>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>

// FILTER GALLERY PHOTOS

const filterButtons = document.querySelectorAll(".filter-btn");

const galleryItems = document.querySelectorAll(".gallery-item");

filterButtons.forEach(button => {

    button.addEventListener("click", function() {

        filterButtons.forEach(btn => {
            btn.classList.remove("active");
        });

        this.classList.add("active");

        const selectedCategory = this.dataset.filter;

        galleryItems.forEach(item => {

            const itemCategory = item.dataset.category;

            if (
                selectedCategory === "All" ||
                selectedCategory === itemCategory
            ) {
                item.classList.remove("hidden");
            } else {
                item.classList.add("hidden");
            }

        });

    });

});


// OPEN IMAGE PREVIEW

function openLightbox(imageSource, imageAlt) {

    const lightbox = document.getElementById("lightbox");

    const lightboxImage = document.getElementById("lightbox-image");

    lightboxImage.src = imageSource;

    lightboxImage.alt = imageAlt;

    lightbox.style.display = "flex";

    document.body.style.overflow = "hidden";
}


// CLOSE IMAGE PREVIEW

function closeLightbox() {

    document.getElementById("lightbox").style.display = "none";

    document.body.style.overflow = "auto";
}


// CLOSE WHEN ESCAPE IS PRESSED

document.addEventListener("keydown", function(event) {

    if (event.key === "Escape") {
        closeLightbox();
    }

});


// PREVENT CLICKING IMAGE FROM CLOSING LIGHTBOX

document.getElementById("lightbox-image").addEventListener("click", function(event) {

    event.stopPropagation();

});

</script>

</body>
</html>
