<?php
// =====================================================================
//  GS KIGEME A - ACADEMIC PAGE (academic.php)
//  Edit the arrays below. The page builds itself from them.
//  A section with an EMPTY array is hidden automatically (and removed
//  from the page menu), so visitors never see "[placeholder]" text.
//  $school, $nav and the footer are the same as in index.php and about.php.
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

// SITE MENU (same as index.php)
$nav = [
    'index.php' => 'Home', 'about.php' => 'About', 'academic.php' => 'Academics',
    'students.php' => 'Students', 'teachers.php' => 'Teachers', 'gallery.php' => 'Gallery',
    'news.php' => 'News', 'contact.php' => 'Contact',
];

// ---------- OUR APPROACH ----------
$approach = [
    ['🧩', 'Competence-Based Learning', 'Students discuss, research and present their own ideas, so they learn by doing.'],
    ['💻', 'Digital Learning',          'Computers and ICT tools make lessons more practical and interesting.'],
    ['🤝', 'Discipline & Values',       'Respect, hard work and integrity are part of every lesson.'],
    // Add more: ['🧭', 'Guidance and counselling', 'Describe it here.'],
];

// ---------- PROGRAMMES ----------
// [tag, title, level, description ('' to hide)]
$programmes = [
    ['O-Level', 'Senior 1 to Senior 3', 'General studies', ''],
    ['MCB',     'Mathematics - Chemistry - Biology', 'Senior 6 only', ''],
    ['PCB',     'Physics - Chemistry - Biology',     'Senior 6 only', ''],
    ['ANP',     'Associate Nursing Programme',       'Senior 6 only', 'Prepares students for a career in nursing and health care.'],
    // Add Senior 4 and 5 streams when you know the real names:
    // ['Stream 1', 'Senior 4 and Senior 5', 'Describe who it is for', 'Subjects studied...'],
];

// ---------- SUBJECTS (empty = hidden) ----------
// ['Level', 'Subjects']
$subjects = [
    // ['Senior 1 - 3', 'Kinyarwanda, English, Mathematics, ...'],
];

// ---------- A DAY AT SCHOOL (empty = hidden) ----------
// ['Time', 'Activity']
$timetable = [
    // ['7:30 - 8:00', 'Morning assembly'],
];

// ---------- RESULTS (empty = hidden). Use REAL figures from the school office ----------
// ['Number', 'Label']
$results = [
    // ['85%', 'National exam pass rate'],
];

// ---------- ACADEMIC TEAM ----------
// [letter, name, role]
$team = [
    ['H', 'HAKIZIMANA Emmanuel', 'Head Teacher'],
    ['D', 'HAKIZIMANA Michel',   'Deputy Head Teacher (Studies)'],
];

// ---------- CALENDAR (empty = hidden) ----------
// ['Term', 'Starts', 'Ends']
$calendar = [
    // ['Term 1', '2027-01-11', '2027-04-02'],
];

// ---------- HOW TO JOIN ----------
// Check the exact steps with the school office, then update.
$joinSteps = [
    'Open the admission portal on this website (Apply now).',
    'Fill in the application form and follow the instructions.',
    'Submit it and wait for the school to contact you.',
];

// Which sections exist on the page menu (hidden automatically when empty)
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
<style>
:root{--green:#176b3a;--dark:#0c4525;--deep:#082e19;--tint:#edf7ef;--gold:#e0b32e;--text:#26352c;--gray:#55645b;--line:#dfe8e2;--shadow:0 8px 25px rgba(0,0,0,.09);--serif:Georgia,"Times New Roman",serif;--sans:system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:var(--sans);color:var(--text);line-height:1.7;background:#fff}
a{text-decoration:none;color:inherit}
h1,h2,h3{font-family:var(--serif)}
:focus-visible{outline:3px solid var(--gold);outline-offset:3px;border-radius:4px}
.skip{position:absolute;left:12px;top:-60px;z-index:2000;background:var(--gold);color:#17251b;padding:10px 16px;border-radius:6px;font-weight:bold}
.skip:focus{top:12px}

header.site{background:#fff;padding:10px 6%;display:flex;align-items:center;justify-content:space-between;gap:20px;position:sticky;top:0;z-index:1000;box-shadow:0 2px 12px rgba(0,0,0,.08)}
.brand{display:flex;align-items:center;gap:12px}
.brand img{width:56px;height:56px;object-fit:contain}
.brand strong{display:block;color:var(--green);font:bold 21px/1.2 var(--serif)}
.brand small{display:block;font-size:12px;color:var(--gray)}
nav.main ul{list-style:none;display:flex;align-items:center;gap:4px}
nav.main a{display:block;padding:8px 12px;font-size:14px;font-weight:600;border-radius:6px;transition:background .2s,color .2s}
nav.main a:hover{background:var(--tint);color:var(--green)}
nav.main a.active{color:var(--green);box-shadow:inset 0 -3px 0 var(--gold);border-radius:6px 6px 0 0}
nav.main a.apply{background:var(--green);color:#fff;margin-left:8px;padding:10px 18px;box-shadow:none;border-radius:6px}
nav.main a.apply:hover{background:var(--dark)}
.menu-toggle{display:none;background:var(--green);color:#fff;border:0;border-radius:6px;padding:9px 14px;font:bold 14px var(--sans);cursor:pointer}

.page-hero{background:linear-gradient(135deg,rgba(23,107,58,.96),rgba(12,69,37,.96)),var(--dark);color:#fff;text-align:center;padding:70px 8% 60px}
.crumbs{font-size:13px;margin-bottom:14px;color:#d7e8dc}
.crumbs a{text-decoration:underline;text-underline-offset:3px}.crumbs a:hover{color:var(--gold)}
.page-hero h1{font-size:clamp(34px,5vw,54px);line-height:1.15;margin-bottom:12px}
.page-hero p{max-width:680px;margin:auto;opacity:.95}

.subnav{background:#fff;border-bottom:1px solid var(--line);padding:10px 6%;display:flex;gap:8px;justify-content:center;overflow-x:auto;white-space:nowrap}
.subnav a{padding:7px 16px;border-radius:30px;font-size:14px;font-weight:600;color:var(--gray);border:1px solid var(--line);transition:.2s}
.subnav a:hover{border-color:var(--green);color:var(--green)}
.subnav a.on{background:var(--green);border-color:var(--green);color:#fff}

section{padding:70px 8%;scroll-margin-top:90px}
.wrap{max-width:1000px;margin:auto}
.tag{display:inline-block;background:var(--gold);color:#202820;padding:3px 12px;border-radius:30px;font-size:12px;font-weight:bold;margin-bottom:10px;text-transform:uppercase;letter-spacing:1px}
h2{color:var(--dark);font-size:clamp(26px,4vw,36px);line-height:1.25;margin-bottom:10px}
.lead{color:var(--gray);max-width:70ch}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:22px;margin-top:28px}
.card{background:#fff;padding:28px;border-radius:12px;box-shadow:var(--shadow);border-top:4px solid var(--gold);transition:transform .2s}
.card:hover{transform:translateY(-4px)}
.card .ic{font-size:32px}
.card h3{color:var(--green);margin:8px 0 4px}
.card p{color:var(--gray);font-size:15px}
.card .meta{font-size:13px;font-weight:600;color:var(--dark);margin-bottom:6px}
.pill{display:inline-block;background:var(--green);color:#fff;border-radius:6px;padding:2px 12px;font-weight:700;font-size:.85rem;margin-bottom:6px}
.tint{background:var(--tint)}
.avatar{width:72px;height:72px;border-radius:50%;background:var(--green);color:#fff;display:grid;place-items:center;font:bold 1.8rem var(--serif);margin-bottom:12px;border:3px solid var(--gold)}

.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:18px;margin-top:28px}
.stat{background:#fff;border-radius:12px;padding:24px;text-align:center;box-shadow:var(--shadow);color:var(--gray);font-size:14px}
.stat b{display:block;font:bold 2.2rem var(--serif);color:var(--green)}

.table-wrap{overflow-x:auto;margin-top:26px;border-radius:12px;box-shadow:var(--shadow)}
table{width:100%;border-collapse:collapse;background:#fff;min-width:520px}
th{background:var(--green);color:#fff;text-align:left;padding:13px 16px}
td{padding:13px 16px;border-bottom:1px solid var(--line)}
tr:last-child td{border:none}
tr:nth-child(even) td{background:#f6faf7}

.steps{counter-reset:s;list-style:none;margin-top:26px;max-width:760px}
.steps li{counter-increment:s;background:#fff;border-radius:12px;padding:18px 18px 18px 66px;margin-bottom:12px;position:relative;box-shadow:var(--shadow)}
.steps li::before{content:counter(s);position:absolute;left:18px;top:16px;width:34px;height:34px;border-radius:50%;background:var(--gold);color:#17251b;font-weight:700;display:grid;place-items:center}

.button{display:inline-block;padding:13px 24px;border-radius:6px;font-weight:bold;transition:transform .2s,background .2s;margin-top:18px}
.button:hover{transform:translateY(-2px)}
.gold{background:var(--gold);color:#17251b}.gold:hover{background:#ecc243}
.cta{background:linear-gradient(90deg,var(--green),var(--dark));color:#fff;text-align:center}
.cta h2{color:#fff}
.cta p{max-width:600px;margin:0 auto;color:#e1eee5}

footer{background:var(--deep);color:#d7e8dc;padding:50px 8% 22px;font-size:14px}
.fgrid{display:grid;grid-template-columns:2fr 1fr 1fr;gap:30px;margin-bottom:30px}
footer h3{color:var(--gold);font-size:16px;margin-bottom:10px}
footer ul{list-style:none}footer li{margin-bottom:6px}
footer a:hover{color:var(--gold)}
.copy{border-top:1px solid rgba(255,255,255,.15);padding-top:16px;text-align:center;font-size:13px}
.top{position:fixed;right:18px;bottom:18px;width:44px;height:44px;border:0;border-radius:50%;background:var(--green);color:#fff;font-size:20px;cursor:pointer;box-shadow:var(--shadow);opacity:0;pointer-events:none;transition:opacity .25s;z-index:900}
.top.show{opacity:1;pointer-events:auto}

@media(max-width:1000px){
 .menu-toggle{display:block}
 nav.main{position:absolute;left:0;right:0;top:100%;background:#fff;box-shadow:0 10px 20px rgba(0,0,0,.1);display:none;padding:10px 6% 18px}
 nav.main.open{display:block}
 nav.main ul{flex-direction:column;align-items:stretch;gap:2px}
 nav.main a.active{box-shadow:inset 4px 0 0 var(--gold);border-radius:6px}
 nav.main a.apply{margin:8px 0 0;text-align:center}
 .subnav{justify-content:flex-start}
}
@media(max-width:700px){
 section{padding:52px 6%}
 .page-hero{padding:54px 6% 46px}
 .fgrid{grid-template-columns:1fr}
 .brand strong{font-size:18px}.brand img{width:46px;height:46px}
}
@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*{transition:none!important}}
</style>
</head>

<body>
<a class="skip" href="#main">Skip to main content</a>

<header class="site">
    <a class="brand" href="index.php" aria-label="<?= e($school['name']) ?> home">
        <img src="<?= e($school['logo']) ?>" alt="" onerror="this.style.display='none'">
        <span><strong><?= e($school['name']) ?></strong><small><?= e($school['motto']) ?></small></span>
    </a>
    <button class="menu-toggle" id="menuToggle" aria-expanded="false" aria-controls="mainNav">Menu</button>
    <nav class="main" id="mainNav" aria-label="Main navigation">
        <ul>
            <?php foreach ($nav as $file => $label): ?>
                <li><a href="<?= e($file) ?>"<?= $file === $currentPage ? ' class="active" aria-current="page"' : '' ?>><?= e($label) ?></a></li>
            <?php endforeach; ?>
            <li><a href="admission/index.php" class="apply">Apply now</a></li>
        </ul>
    </nav>
</header>

<div class="page-hero">
    <div class="crumbs"><a href="index.php">Home</a> &rsaquo; <?= e($pageTitle) ?></div>
    <h1><?= e($pageTitle) ?></h1>
    <p><?= e($pageSubtitle) ?></p>
</div>

<nav class="subnav" id="subnav" aria-label="On this page">
    <?php foreach ($sections as $id => [$label]): ?>
        <a href="#<?= e($id) ?>"><?= e($label) ?></a>
    <?php endforeach; ?>
</nav>

<main id="main">

<?php if (isset($sections['approach'])): ?>
<section id="approach">
    <div class="wrap">
        <span class="tag">How we teach</span>
        <h2>Our approach to learning</h2>
        <p class="lead">How we teach and how our students learn.</p>
        <div class="grid">
            <?php foreach ($approach as [$ic, $title, $text]): ?>
                <div class="card"><div class="ic" aria-hidden="true"><?= $ic ?></div><h3><?= e($title) ?></h3><p><?= e($text) ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (isset($sections['programmes'])): ?>
<section id="programmes" class="tint">
    <div class="wrap">
        <span class="tag">What we offer</span>
        <h2>Programmes</h2>
        <p class="lead">General studies in Senior 1 to 3, and specialised combinations in Senior 6.</p>
        <div class="grid">
            <?php foreach ($programmes as [$tag, $title, $meta, $text]): ?>
                <div class="card">
                    <span class="pill"><?= e($tag) ?></span>
                    <h3><?= e($title) ?></h3>
                    <?php if ($meta !== ''): ?><div class="meta"><?= e($meta) ?></div><?php endif; ?>
                    <?php if ($text !== ''): ?><p><?= e($text) ?></p><?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (isset($sections['subjects'])): ?>
<section id="subjects">
    <div class="wrap">
        <span class="tag">Curriculum</span>
        <h2>Subjects we teach</h2>
        <div class="table-wrap">
            <table>
                <thead><tr><th>Level</th><th>Subjects</th></tr></thead>
                <tbody><?php foreach ($subjects as [$level, $list]): ?><tr><td><strong><?= e($level) ?></strong></td><td><?= e($list) ?></td></tr><?php endforeach; ?></tbody>
            </table>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (isset($sections['timetable'])): ?>
<section id="timetable" class="tint">
    <div class="wrap">
        <span class="tag">Daily routine</span>
        <h2>A day at school</h2>
        <div class="table-wrap">
            <table>
                <thead><tr><th>Time</th><th>Activity</th></tr></thead>
                <tbody><?php foreach ($timetable as [$time, $what]): ?><tr><td><strong><?= e($time) ?></strong></td><td><?= e($what) ?></td></tr><?php endforeach; ?></tbody>
            </table>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (isset($sections['results'])): ?>
<section id="results">
    <div class="wrap">
        <span class="tag">Achievements</span>
        <h2>Our results</h2>
        <div class="stats">
            <?php foreach ($results as [$num, $label]): ?><div class="stat"><b><?= e($num) ?></b><?= e($label) ?></div><?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (isset($sections['teachers'])): ?>
<section id="teachers" class="tint">
    <div class="wrap">
        <span class="tag">Our people</span>
        <h2>Our academic team</h2>
        <p class="lead">The teachers and leaders behind our students' success.</p>
        <div class="grid">
            <?php foreach ($team as [$letter, $name, $role]): ?>
                <div class="card"><div class="avatar" aria-hidden="true"><?= e($letter) ?></div><h3><?= e($name) ?></h3><p><?= e($role) ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (isset($sections['calendar'])): ?>
<section id="calendar">
    <div class="wrap">
        <span class="tag">Dates</span>
        <h2>School calendar</h2>
        <div class="table-wrap">
            <table>
                <thead><tr><th>Term</th><th>Starts</th><th>Ends</th></tr></thead>
                <tbody>
                <?php foreach ($calendar as [$term, $start, $end]): ?>
                    <tr><td><strong><?= e($term) ?></strong></td>
                        <td><?= e(date('j F Y', strtotime($start))) ?></td>
                        <td><?= e(date('j F Y', strtotime($end))) ?></td></tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (isset($sections['join'])): ?>
<section id="join" class="tint">
    <div class="wrap">
        <span class="tag">Admission</span>
        <h2>How to join <?= e($school['name']) ?></h2>
        <ol class="steps"><?php foreach ($joinSteps as $step): ?><li><?= e($step) ?></li><?php endforeach; ?></ol>
        <a href="admission/index.php" class="button gold">Apply for admission</a>
    </div>
</section>
<?php endif; ?>

<section class="cta">
    <h2>Have a question about studies?</h2>
    <p>Our academic team will be happy to help.</p>
    <a href="contact.php" class="button gold">Contact us</a>
</section>

</main>

<footer>
    <div class="fgrid">
        <div>
            <h3><?= e($school['name']) ?></h3>
            <p><?= e($school['motto']) ?>.</p>
            <p><?= e($school['location']) ?></p>
        </div>
        <div>
            <h3>Pages</h3>
            <ul><?php foreach ($nav as $file => $label): ?><li><a href="<?= e($file) ?>"><?= e($label) ?></a></li><?php endforeach; ?></ul>
        </div>
        <div>
            <h3>Contact</h3>
            <ul>
                <li><a href="tel:<?= e($school['phone']) ?>"><?= e($school['phone']) ?></a></li>
                <li><a href="mailto:<?= e($school['email']) ?>"><?= e($school['email']) ?></a></li>
                <li><a href="admission/index.php">Apply now</a></li>
            </ul>
        </div>
    </div>
    <div class="copy">&copy; <?= e($school['year']) ?> <?= e($school['name']) ?>. All rights reserved.</div>
</footer>

<button class="top" id="toTop" aria-label="Back to top">↑</button>

<script>
const t=document.getElementById('menuToggle'),n=document.getElementById('mainNav');
const close=()=>{n.classList.remove('open');t.setAttribute('aria-expanded','false');t.textContent='Menu'};
t.addEventListener('click',()=>{const o=n.classList.toggle('open');t.setAttribute('aria-expanded',o);t.textContent=o?'Close':'Menu'});
n.querySelectorAll('a').forEach(a=>a.addEventListener('click',close));
document.addEventListener('keydown',e=>{if(e.key==='Escape')close()});

const pills=[...document.querySelectorAll('#subnav a')];
const io=new IntersectionObserver(es=>es.forEach(en=>{
  if(en.isIntersecting){pills.forEach(p=>p.classList.toggle('on',p.getAttribute('href')==='#'+en.target.id))}
}),{rootMargin:'-40% 0px -55% 0px'});
pills.forEach(p=>{const s=document.querySelector(p.getAttribute('href'));if(s)io.observe(s)});

const b=document.getElementById('toTop');
addEventListener('scroll',()=>b.classList.toggle('show',scrollY>600),{passive:true});
b.addEventListener('click',()=>scrollTo({top:0,behavior:'smooth'}));
</script>
</body>
</html>