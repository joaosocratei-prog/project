<?php
/*
  ABOUT US PAGE (PHP version)
  To change any text, edit the arrays below. The HTML at the bottom
  repeats the cards automatically with loops, so you never need to copy HTML.
*/

$school = [
    'name'     => 'GS Kigeme A',
    'subtitle' => "Groupe Scolaire Kigeme A, Nyamagabe District, Southern Province, Rwanda. Educating today's learners to lead tomorrow.",
    'year'     => date('Y'),
];

$menu = [
    'index.php'   => 'Home',
    '#who'        => 'Who We Are',
    '#mission'    => 'Mission',
    '#innovation' => 'Innovation',
    '#team'       => 'Team',
    '#contact'    => 'Contact',
];

$who = 'GS Kigeme A is a school located in Kigeme, Nyamagabe District. Since [year founded], we have been committed to giving every student a quality education based on discipline, knowledge and good values. Our teachers and students work together to build a strong and successful community. Today we welcome about [number] students taught by [number] dedicated teachers.';

$mission_cards = [
    ['Our Mission', 'To provide quality, inclusive education that prepares students with knowledge, skills and values for life.'],
    ['Our Vision',  'To be a leading school in Nyamagabe District, producing responsible and innovative citizens.'],
    ['Our Values',  'Discipline, respect, hard work, integrity and love for our country.'],
];

$innovation_intro = 'We believe education must move with the times. Our school encourages creativity, technology and problem solving in every classroom.';

$innovation_cards = [
    ['Digital Learning',          'Use of computers and ICT tools to make lessons more practical and interesting.'],
    ['Science & Innovation Club', 'Students design projects and simple inventions that solve real problems in our community.'],
    ['Modern Teaching Methods',   'Competence-based learning where students discuss, research and present their own ideas.'],
    ['Green School',              'Tree planting, gardens and clean environment activities led by students.'],
];

$team = [
    ['H', '[Name]', 'Head Teacher'],
    ['D', '[Name]', 'Deputy Head Teacher (Studies)'],
    ['W', '[Name]', 'Website Team (Students / Developers)'],
];

$contact = [
    'School'   => 'GS Kigeme A',
    'Location' => 'Kigeme, Nyamagabe District, Southern Province, Rwanda',
    'Email'    => '[school email]',
    'Phone'    => '[+250 ...]',
];

// Prints text safely on the page
function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us | <?= e($school['name']) ?></title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:Segoe UI,Arial,sans-serif;color:#1f2937;line-height:1.7;background:#f9fafb}
nav{background:#0b3d91;padding:12px 20px;text-align:center}
nav a{color:#fff;text-decoration:none;margin:0 12px;font-weight:600}
nav a:hover{text-decoration:underline}
header{background:linear-gradient(135deg,#0b3d91,#1e7a3c);color:#fff;text-align:center;padding:80px 20px}
header h1{font-size:2.4rem;margin-bottom:10px}
header p{max-width:650px;margin:auto;opacity:.95}
section{max-width:1000px;margin:auto;padding:50px 20px}
h2{color:#0b3d91;margin-bottom:15px;font-size:1.7rem}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;margin-top:20px}
.card{background:#fff;padding:25px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.card h3{margin-bottom:8px;color:#1e7a3c}
.innovation{background:#e8f0fb;max-width:none}
.innovation .inner{max-width:1000px;margin:auto}
.avatar{width:70px;height:70px;border-radius:50%;background:#0b3d91;color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.8rem;margin-bottom:12px}
.contact{background:#e6f4ea;border-radius:10px;padding:30px}
footer{text-align:center;padding:20px;background:#0b3d91;color:#fff;font-size:.9rem}
@media(max-width:600px){header h1{font-size:1.8rem}nav a{display:inline-block;margin:4px 8px}}
</style>
</head>
<body>

<nav>
  <?php foreach ($menu as $link => $label): ?>
    <a href="<?= e($link) ?>"><?= e($label) ?></a>
  <?php endforeach; ?>
</nav>

<header>
  <h1><?= e($school['name']) ?></h1>
  <p><?= e($school['subtitle']) ?></p>
</header>

<section id="who">
  <h2>Who We Are</h2>
  <p><?= e($who) ?></p>
</section>

<section id="mission">
  <h2>Our Mission &amp; Vision</h2>
  <div class="grid">
    <?php foreach ($mission_cards as [$title, $text]): ?>
      <div class="card">
        <h3><?= e($title) ?></h3>
        <p><?= e($text) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="innovation" class="innovation">
  <div class="inner">
    <h2>Innovation at <?= e($school['name']) ?></h2>
    <p><?= e($innovation_intro) ?></p>
    <div class="grid">
      <?php foreach ($innovation_cards as [$title, $text]): ?>
        <div class="card">
          <h3><?= e($title) ?></h3>
          <p><?= e($text) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="team">
  <h2>Our Leadership</h2>
  <div class="grid">
    <?php foreach ($team as [$letter, $name, $role]): ?>
      <div class="card">
        <div class="avatar"><?= e($letter) ?></div>
        <h3><?= e($name) ?></h3>
        <p><?= e($role) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="contact">
  <div class="contact">
    <h2>Contact Us</h2>
    <p>
      <?php foreach ($contact as $label => $value): ?>
        <?= e($label) ?>: <?= e($value) ?><br>
      <?php endforeach; ?>
    </p>
  </div>
</section>

<footer>&copy; <?= e($school['year']) ?> <?= e($school['name']) ?>. All rights reserved.</footer>

</body>
</html>
