<?php
// =====================================================================
//  GS KIGEME A - ACADEMIC PAGE (academic.php) - Bootstrap 5 version
//  Edit the arrays below. A section with an EMPTY array is hidden
//  automatically (and removed from the page menu).
//  Bootstrap loads from the internet (CDN), so the page needs a connection.
// =====================================================================

$school = [
    'name'     => 'GS KIGEME A',
    'motto'    => 'Learning Today, Leading Tomorrow',
    'location' => 'Nyamagabe District, Rwanda',
    'phone'    => '0788600587',
    'email'    => 'gskigeme2@yahoo.com',
    'logo'     => 'images/gs logo.jpg',
    'year'     => date('Y'),
];

$pageTitle    = 'Academic Life';
$pageSubtitle = 'Quality education built on discipline, knowledge and good values, from Senior 1 to Senior 6.';

$nav = [
    'index.php' => 'Home', 'about.php' => 'About', 'academic.php' => 'Academics',
    'students.php' => 'Students', 'teachers.php' => 'Teachers', 'gallery.php' => 'Gallery',
    'news.php' => 'News', 'contact.php' => 'Contact',
];

// [icon, title, text]
$approach = [
    ['🧩', 'Competence-Based Learning', 'Students discuss, research and present their own ideas, so they learn by doing.'],
    ['💻', 'Digital Learning',          'Computers and ICT tools make lessons more practical and interesting.'],
    ['🤝', 'Discipline & Values',       'Respect, hard work and integrity are part of every lesson.'],
];

// [tag, title, level, description ('' to hide)]
$programmes = [
    ['O-Level', 'Senior 1 to Senior 3', 'General studies', ''],
    ['MCB',     'Mathematics - Chemistry - Biology', 'Senior 6 only', ''],
    ['PCB',     'Physics - Chemistry - Biology',     'Senior 6 only', ''],
    ['ANP',     'Associate Nursing Programme',       'Senior 6 only', 'Prepares students for a career in nursing and health care.'],
    // ['Stream 1', 'Senior 4 and Senior 5', 'Who it is for', 'Subjects studied...'],
];

$subjects  = [];   // ['Senior 1 - 3', 'Kinyarwanda, English, Mathematics, ...']
$timetable = [];   // ['7:30 - 8:00', 'Morning assembly']
$results   = [];   // ['85%', 'National exam pass rate']   (use REAL figures)
$calendar  = [];   // ['Term 1', '2027-01-11', '2027-04-02']

$team = [
    ['H', 'HAKIZIMANA Emmanuel', 'Head Teacher'],
    ['D', 'HAKIZIMANA Michel',   'Deputy Head Teacher (Studies)'],
];

$joinSteps = [
    'Open the admission portal on this website (Apply now).',
    'Fill in the application form and follow the instructions.',
    'Submit it and wait for the school to contact you.',
];

$sections = array_filter([
    'approach'   => ['Our approach', !empty($approach)],
    'programmes' => ['Programmes',   !empty($programmes)],
    'subjects'   => ['Subjects',     !empty($subjects)],
    'timetable'  => ['Timetable',    !empty($timetable)],
    'results'    => ['Results',      !empty($results)],
    'teachers'   => ['Teachers',     !empty($team)],
    'calendar'   => ['Calendar',     !empty($calendar)],
    'join'       => ['How to join',  !empty($joinSteps)],
], fn($s) => $s[1]);

$currentPage = basename($_SERVER['PHP_SELF']);
function e($t) { return htmlspecialchars((string)$t, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?> | <?= e($school['name']) ?></title>
<meta name="description" content="Academics at <?= e($school['name']) ?>: our approach to learning, programmes from Senior 1 to Senior 6, and how to join.">
<meta name="theme-color" content="#176b3a">
<link rel="icon" href="<?= e($school['logo']) ?>">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* Theme: turn Bootstrap's primary colour into the school green */
:root{
  --green:#176b3a;--dark:#0c4525;--deep:#082e19;--tint:#edf7ef;--gold:#e0b32e;
  --bs-primary:#176b3a;--bs-primary-rgb:23,107,58;--bs-link-color:#176b3a;--bs-link-hover-color:#0c4525;
  --serif:Georgia,"Times New Roman",serif;
}
html{scroll-behavior:smooth}
body{color:#26352c;line-height:1.7}
h1,h2,h3,h4,.brand-name{font-family:var(--serif)}
:focus-visible{outline:3px solid var(--gold)!important;outline-offset:3px}

.btn-primary{--bs-btn-bg:var(--green);--bs-btn-border-color:var(--green);--bs-btn-hover-bg:var(--dark);--bs-btn-hover-border-color:var(--dark);--bs-btn-active-bg:var(--dark);--bs-btn-active-border-color:var(--dark)}
.btn-gold{--bs-btn-bg:var(--gold);--bs-btn-color:#17251b;--bs-btn-border-color:var(--gold);--bs-btn-hover-bg:#ecc243;--bs-btn-hover-color:#17251b;--bs-btn-hover-border-color:#ecc243;--bs-btn-active-bg:#ecc243;--bs-btn-active-color:#17251b;font-weight:700}

.skip{position:absolute;left:12px;top:-60px;z-index:2000;background:var(--gold);color:#17251b;padding:10px 16px;border-radius:6px;font-weight:700}
.skip:focus{top:12px}

.navbar .brand-name{color:var(--green);font-weight:700;font-size:1.3rem;line-height:1.2}
.navbar .nav-link{font-weight:600;font-size:.92rem;border-radius:6px}
.navbar .nav-link:hover{background:var(--tint);color:var(--green)}
.navbar .nav-link.active{color:var(--green)!important;box-shadow:inset 0 -3px 0 var(--gold)}

.page-hero{background:linear-gradient(135deg,#176b3a,#0c4525);color:#fff}
.page-hero .breadcrumb{--bs-breadcrumb-divider-color:#d7e8dc;--bs-breadcrumb-item-active-color:#fff}
.page-hero .breadcrumb a{color:#d7e8dc}

.subnav-wrap{background:#fff;border-bottom:1px solid #dfe8e2}
.subnav{flex-wrap:nowrap;overflow-x:auto;white-space:nowrap;gap:8px;justify-content:center}
.subnav .nav-link{border:1px solid #dfe8e2;border-radius:30px;color:#55645b;font-weight:600;font-size:.9rem;padding:6px 16px}
.subnav .nav-link:hover{border-color:var(--green);color:var(--green)}
.subnav .nav-link.active{background:var(--green);border-color:var(--green);color:#fff}
@media(max-width:991px){.subnav{justify-content:flex-start}}

section[id]{scroll-margin-top:100px}
.section-tag{display:inline-block;background:var(--gold);color:#202820;padding:3px 12px;border-radius:30px;font-size:.75rem;font-weight:700;letter-spacing:1px;text-transform:uppercase}
.bg-tint{background:var(--tint)}
.card-school{border:0;border-top:4px solid var(--gold);transition:transform .2s,box-shadow .2s}
.card-school:hover{transform:translateY(-4px);box-shadow:0 .75rem 1.5rem rgba(0,0,0,.12)!important}
.card-school h3{color:var(--green);font-size:1.25rem}
.icon-lg{font-size:2rem}
.badge-prog{background:var(--green);font-size:.85rem}
.avatar{width:72px;height:72px;border-radius:50%;background:var(--green);color:#fff;display:grid;place-items:center;font:700 1.8rem var(--serif);border:3px solid var(--gold)}
.stat-num{font:700 2.2rem var(--serif);color:var(--green)}
.thead-green{--bs-table-bg:var(--green);--bs-table-color:#fff}
.list-group-numbered>.list-group-item::before{background:var(--gold);color:#17251b;font-weight:700;border-radius:50%;display:inline-grid;place-items:center;width:30px;height:30px;margin-right:12px}
.cta{background:linear-gradient(90deg,var(--green),var(--dark));color:#fff}
footer{background:var(--deep);color:#d7e8dc;font-size:.9rem}
footer h3{color:var(--gold);font-size:1rem}
footer a{color:#d7e8dc;text-decoration:none}footer a:hover{color:var(--gold)}
.top{position:fixed;right:18px;bottom:18px;width:44px;height:44px;border:0;border-radius:50%;background:var(--green);color:#fff;font-size:20px;box-shadow:0 .5rem 1rem rgba(0,0,0,.2);opacity:0;pointer-events:none;transition:opacity .25s;z-index:900}
.top.show{opacity:1;pointer-events:auto}
@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*{transition:none!important}}
</style>
</head>

<body data-bs-spy="scroll" data-bs-target="#subnav" data-bs-root-margin="-30% 0px -60% 0px" tabindex="0">
<a class="skip" href="#main">Skip to main content</a>

<!-- SITE MENU (Bootstrap navbar) -->
<nav class="navbar navbar-expand-xl bg-white sticky-top shadow-sm" aria-label="Main navigation">
  <div class="container-xl">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <img src="<?= e($school['logo']) ?>" alt="" width="52" height="52" style="object-fit:contain" onerror="this.style.display='none'">
      <span><span class="brand-name d-block"><?= e($school['name']) ?></span><small class="text-secondary d-block" style="font-size:.72rem"><?= e($school['motto']) ?></small></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-xl-center gap-xl-1">
        <?php foreach ($nav as $file => $label): ?>
          <li class="nav-item"><a class="nav-link<?= $file === $currentPage ? ' active' : '' ?>" href="<?= e($file) ?>"<?= $file === $currentPage ? ' aria-current="page"' : '' ?>><?= e($label) ?></a></li>
        <?php endforeach; ?>
        <li class="nav-item ms-xl-2 mt-2 mt-xl-0"><a class="btn btn-primary w-100" href="admission/index.php">Apply now</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- PAGE HERO -->
<header class="page-hero text-center py-5 px-3">
  <div class="container py-3">
    <nav aria-label="breadcrumb"><ol class="breadcrumb justify-content-center small mb-3">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= e($pageTitle) ?></li>
    </ol></nav>
    <h1 class="display-4 fw-bold mb-3"><?= e($pageTitle) ?></h1>
    <p class="lead mx-auto mb-0" style="max-width:680px"><?= e($pageSubtitle) ?></p>
  </div>
</header>

<!-- PAGE MENU -->
<div class="subnav-wrap py-2">
  <nav id="subnav" class="nav subnav container-xl" aria-label="On this page">
    <?php foreach ($sections as $id => [$label]): ?>
      <a class="nav-link" href="#<?= e($id) ?>"><?= e($label) ?></a>
    <?php endforeach; ?>
  </nav>
</div>

<main id="main">

<?php if (isset($sections['approach'])): ?>
<section id="approach" class="py-5">
  <div class="container py-4">
    <span class="section-tag mb-2">How we teach</span>
    <h2 class="fw-bold mb-2">Our approach to learning</h2>
    <p class="text-secondary mb-4">How we teach and how our students learn.</p>
    <div class="row g-4">
      <?php foreach ($approach as [$ic, $title, $text]): ?>
        <div class="col-md-6 col-lg-4"><div class="card card-school shadow-sm h-100"><div class="card-body p-4">
          <div class="icon-lg" aria-hidden="true"><?= $ic ?></div>
          <h3 class="mt-2"><?= e($title) ?></h3><p class="text-secondary mb-0"><?= e($text) ?></p>
        </div></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (isset($sections['programmes'])): ?>
<section id="programmes" class="py-5 bg-tint">
  <div class="container py-4">
    <span class="section-tag mb-2">What we offer</span>
    <h2 class="fw-bold mb-2">Programmes</h2>
    <p class="text-secondary mb-4">General studies in Senior 1 to 3, and specialised combinations in Senior 6.</p>
    <div class="row g-4">
      <?php foreach ($programmes as [$tag, $title, $meta, $text]): ?>
        <div class="col-md-6 col-lg-4"><div class="card card-school shadow-sm h-100"><div class="card-body p-4">
          <span class="badge badge-prog mb-2"><?= e($tag) ?></span>
          <h3><?= e($title) ?></h3>
          <?php if ($meta !== ''): ?><div class="small fw-semibold mb-1" style="color:var(--dark)"><?= e($meta) ?></div><?php endif; ?>
          <?php if ($text !== ''): ?><p class="text-secondary mb-0"><?= e($text) ?></p><?php endif; ?>
        </div></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (isset($sections['subjects'])): ?>
<section id="subjects" class="py-5">
  <div class="container py-4">
    <span class="section-tag mb-2">Curriculum</span>
    <h2 class="fw-bold mb-4">Subjects we teach</h2>
    <div class="table-responsive rounded-3 shadow-sm"><table class="table table-striped table-hover align-middle mb-0">
      <thead class="thead-green"><tr><th>Level</th><th>Subjects</th></tr></thead>
      <tbody><?php foreach ($subjects as [$level, $list]): ?><tr><th scope="row"><?= e($level) ?></th><td><?= e($list) ?></td></tr><?php endforeach; ?></tbody>
    </table></div>
  </div>
</section>
<?php endif; ?>

<?php if (isset($sections['timetable'])): ?>
<section id="timetable" class="py-5 bg-tint">
  <div class="container py-4">
    <span class="section-tag mb-2">Daily routine</span>
    <h2 class="fw-bold mb-4">A day at school</h2>
    <div class="table-responsive rounded-3 shadow-sm"><table class="table table-striped align-middle mb-0">
      <thead class="thead-green"><tr><th>Time</th><th>Activity</th></tr></thead>
      <tbody><?php foreach ($timetable as [$time, $what]): ?><tr><th scope="row"><?= e($time) ?></th><td><?= e($what) ?></td></tr><?php endforeach; ?></tbody>
    </table></div>
  </div>
</section>
<?php endif; ?>

<?php if (isset($sections['results'])): ?>
<section id="results" class="py-5">
  <div class="container py-4">
    <span class="section-tag mb-2">Achievements</span>
    <h2 class="fw-bold mb-4">Our results</h2>
    <div class="row g-4">
      <?php foreach ($results as [$num, $label]): ?>
        <div class="col-6 col-lg-3"><div class="card border-0 shadow-sm h-100 text-center"><div class="card-body p-4">
          <div class="stat-num"><?= e($num) ?></div><div class="text-secondary small"><?= e($label) ?></div>
        </div></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (isset($sections['teachers'])): ?>
<section id="teachers" class="py-5 bg-tint">
  <div class="container py-4">
    <span class="section-tag mb-2">Our people</span>
    <h2 class="fw-bold mb-2">Our academic team</h2>
    <p class="text-secondary mb-4">The teachers and leaders behind our students' success.</p>
    <div class="row g-4">
      <?php foreach ($team as [$letter, $name, $role]): ?>
        <div class="col-md-6 col-lg-4"><div class="card card-school shadow-sm h-100"><div class="card-body p-4">
          <div class="avatar mb-3" aria-hidden="true"><?= e($letter) ?></div>
          <h3><?= e($name) ?></h3><p class="text-secondary mb-0"><?= e($role) ?></p>
        </div></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (isset($sections['calendar'])): ?>
<section id="calendar" class="py-5">
  <div class="container py-4">
    <span class="section-tag mb-2">Dates</span>
    <h2 class="fw-bold mb-4">School calendar</h2>
    <div class="table-responsive rounded-3 shadow-sm"><table class="table table-striped align-middle mb-0">
      <thead class="thead-green"><tr><th>Term</th><th>Starts</th><th>Ends</th></tr></thead>
      <tbody><?php foreach ($calendar as [$term, $start, $end]): ?>
        <tr><th scope="row"><?= e($term) ?></th><td><?= e(date('j F Y', strtotime($start))) ?></td><td><?= e(date('j F Y', strtotime($end))) ?></td></tr>
      <?php endforeach; ?></tbody>
    </table></div>
  </div>
</section>
<?php endif; ?>

<?php if (isset($sections['join'])): ?>
<section id="join" class="py-5 bg-tint">
  <div class="container py-4">
    <span class="section-tag mb-2">Admission</span>
    <h2 class="fw-bold mb-4">How to join <?= e($school['name']) ?></h2>
    <ol class="list-group list-group-numbered shadow-sm mb-4" style="max-width:760px">
      <?php foreach ($joinSteps as $step): ?><li class="list-group-item py-3"><?= e($step) ?></li><?php endforeach; ?>
    </ol>
    <a href="admission/index.php" class="btn btn-gold btn-lg">Apply for admission</a>
  </div>
</section>
<?php endif; ?>

<section class="cta text-center py-5 px-3">
  <div class="container py-3">
    <h2 class="fw-bold">Have a question about studies?</h2>
    <p class="mb-4" style="color:#e1eee5">Our academic team will be happy to help.</p>
    <a href="contact.php" class="btn btn-gold btn-lg">Contact us</a>
  </div>
</section>

</main>

<footer class="pt-5 pb-3">
  <div class="container-xl">
    <div class="row g-4 mb-4">
      <div class="col-lg-6">
        <h3><?= e($school['name']) ?></h3>
        <p class="mb-1"><?= e($school['motto']) ?>.</p>
        <p class="mb-0"><?= e($school['location']) ?></p>
      </div>
      <div class="col-6 col-lg-3">
        <h3>Pages</h3>
        <ul class="list-unstyled mb-0"><?php foreach ($nav as $file => $label): ?><li><a href="<?= e($file) ?>"><?= e($label) ?></a></li><?php endforeach; ?></ul>
      </div>
      <div class="col-6 col-lg-3">
        <h3>Contact</h3>
        <ul class="list-unstyled mb-0">
          <li><a href="tel:<?= e($school['phone']) ?>"><?= e($school['phone']) ?></a></li>
          <li><a href="mailto:<?= e($school['email']) ?>"><?= e($school['email']) ?></a></li>
          <li><a href="admission/index.php">Apply now</a></li>
        </ul>
      </div>
    </div>
    <div class="border-top border-secondary pt-3 text-center small">&copy; <?= e($school['year']) ?> <?= e($school['name']) ?>. All rights reserved.</div>
  </div>
</footer>

<button class="top" id="toTop" aria-label="Back to top">↑</button>

<!-- Bootstrap 5 JS (menu toggle, scroll highlight) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const b=document.getElementById('toTop');
addEventListener('scroll',()=>b.classList.toggle('show',scrollY>600),{passive:true});
b.addEventListener('click',()=>scrollTo({top:0,behavior:'smooth'}));
</script>
</body>
</html>