<?php
// ---------- School information (edit these values) ----------
$schoolName   = "GS Kigeme A";
$fullName     = "Groupe Scolaire Kigeme A";
$location     = "Kigeme, Nyamagabe District, Southern Province, Rwanda";
$yearFounded  = "[year founded]";
$studentCount = "[number]";
$teacherCount = "[number]";
$email        = "[school email]";
$phone        = "[+250 ...]";

// ---------- Navigation ----------
$navLinks = [
    "who"        => "Who We Are",
    "mission"    => "Mission",
    "innovation" => "Innovation",
    "team"       => "Team",
    "contact"    => "Contact",
];

// ---------- Mission, Vision, Values ----------
$missionCards = [
    ["title" => "Our Mission", "text" => "To provide quality, inclusive education that prepares students with knowledge, skills and values for life."],
    ["title" => "Our Vision",  "text" => "To be a leading school in Nyamagabe District, producing responsible and innovative citizens."],
    ["title" => "Our Values",  "text" => "Discipline, respect, hard work, integrity and love for our country."],
];

// ---------- Innovation ----------
$innovationCards = [
    ["title" => "Digital Learning",         "text" => "Use of computers and ICT tools to make lessons more practical and interesting."],
    ["title" => "Science & Innovation Club", "text" => "Students design projects and simple inventions that solve real problems in our community."],
    ["title" => "Modern Teaching Methods",  "text" => "Competence-based learning where students discuss, research and present their own ideas."],
    ["title" => "Green School",             "text" => "Tree planting, gardens and clean environment activities led by students."],
];

// ---------- Leadership ----------
$team = [
    ["letter" => "H", "name" => "[Name]", "role" => "Head Teacher"],
    ["letter" => "D", "name" => "[Name]", "role" => "Deputy Head Teacher (Studies)"],
    ["letter" => "W", "name" => "[Name]", "role" => "Website Team (Students / Developers)"],
];

// Helper: safely print text in HTML
function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us | <?= e($schoolName) ?></title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: Segoe UI, Arial, sans-serif; color: #1f2937; line-height: 1.7; background: #f9fafb; }
  nav { background: #0b3d91; padding: 12px 20px; text-align: center; }
  nav a { color: #fff; text-decoration: none; margin: 0 12px; font-weight: 600; }
  nav a:hover { text-decoration: underline; }
  header { background: linear-gradient(135deg, #0b3d91, #1e7a3c); color: #fff; text-align: center; padding: 80px 20px; }
  header h1 { font-size: 2.4rem; margin-bottom: 10px; }
  header p { max-width: 650px; margin: auto; opacity: .95; }
  section { max-width: 1000px; margin: auto; padding: 50px 20px; }
  h2 { color: #0b3d91; margin-bottom: 15px; font-size: 1.7rem; }
  .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-top: 20px; }
  .card { background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,.08); }
  .card h3 { margin-bottom: 8px; color: #1e7a3c; }
  .innovation { background: #e8f0fb; max-width: none; }
  .innovation .inner { max-width: 1000px; margin: auto; }
  .avatar { width: 70px; height: 70px; border-radius: 50%; background: #0b3d91; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; margin-bottom: 12px; }
  .contact { background: #e6f4ea; border-radius: 10px; padding: 30px; }
  footer { text-align: center; padding: 20px; background: #0b3d91; color: #fff; font-size: .9rem; }
  @media (max-width: 600px) {
    header h1 { font-size: 1.8rem; }
    nav a { display: inline-block; margin: 4px 8px; }
  }
</style>
</head>
<body>

<nav>
  <?php foreach ($navLinks as $id => $label): ?>
    <a href="#<?= e($id) ?>"><?= e($label) ?></a>
  <?php endforeach; ?>
</nav>

<header>
  <h1><?= e($schoolName) ?></h1>
  <p><?= e($fullName) ?>, Nyamagabe District, Southern Province, Rwanda. Educating today's learners to lead tomorrow.</p>
</header>

<section id="who">
  <h2>Who We Are</h2>
  <p><?= e($schoolName) ?> is a school located in Kigeme, Nyamagabe District. Since <?= e($yearFounded) ?>, we have been committed to giving every student a quality education based on discipline, knowledge and good values. Our teachers and students work together to build a strong and successful community. Today we welcome about <?= e($studentCount) ?> students taught by <?= e($teacherCount) ?> dedicated teachers.</p>
</section>

<section id="mission">
  <h2>Our Mission &amp; Vision</h2>
  <div class="grid">
    <?php foreach ($missionCards as $card): ?>
      <div class="card">
        <h3><?= e($card["title"]) ?></h3>
        <p><?= e($card["text"]) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="innovation" class="innovation">
  <div class="inner">
    <h2>Innovation at <?= e($schoolName) ?></h2>
    <p>We believe education must move with the times. Our school encourages creativity, technology and problem solving in every classroom.</p>
    <div class="grid">
      <?php foreach ($innovationCards as $card): ?>
        <div class="card">
          <h3><?= e($card["title"]) ?></h3>
          <p><?= e($card["text"]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="team">
  <h2>Our Leadership</h2>
  <div class="grid">
    <?php foreach ($team as $member): ?>
      <div class="card">
        <div class="avatar"><?= e($member["letter"]) ?></div>
        <h3><?= e($member["name"]) ?></h3>
        <p><?= e($member["role"]) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="contact">
  <div class="contact">
    <h2>Contact Us</h2>
    <p>School: <?= e($schoolName) ?><br>
    Location: <?= e($location) ?><br>
    Email: <?= e($email) ?><br>
    Phone: <?= e($phone) ?></p>
  </div>
</section>

<footer>&copy; <?= date("Y") ?> <?= e($schoolName) ?>. All rights reserved.</footer>

</body>
</html>
