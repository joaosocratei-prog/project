<?php
/* ============================================================
   academic.php  |  GS Kigeme A
   All content lives in the arrays below. Edit the arrays,
   not the HTML. Any card whose title starts with "[" is shown
   as a yellow "to do" card automatically.
   ============================================================ */

$pageTitle = 'Academic | GS Kigeme A';
$current   = basename($_SERVER['PHP_SELF']); // highlights the active menu link
$showHelp  = true;                           // set to false when you finish

// Escape helper (safe output)
function e($text) {
    return htmlspecialchars((string)$text, ENT_QUOTES, 'UTF-8');
}
// Adds the "todo" class when a title is still a placeholder
function todoClass($title) {
    return strpos(trim($title), '[') === 0 ? ' todo' : '';
}

$menu = [
    'index.php'      => 'Home',
    'about.php'      => 'About',
    'discover.php'   => 'Discover',
    'academic.php'   => 'Academic',
    'activities.php' => 'Activities',
    'contact.php'    => 'Contact',
];

$quickLinks = [
    'approach'   => 'Our Approach',
    'programmes' => 'Programmes',
    'subjects'   => 'Subjects',
    'timetable'  => 'Timetable',
    'results'    => 'Results',
    'teachers'   => 'Teachers',
    'calendar'   => 'Calendar',
    'join'       => 'How to Join',
];

$approach = [
    ['Competence-Based Learning', 'Students discuss, research and present their own ideas, so they learn by doing.'],
    ['Digital Learning',          'Computers and ICT tools make lessons more practical and interesting.'],
    ['Discipline & Values',       'Respect, hard work and integrity are part of every lesson.'],
    ['[Add another point]',       '[Describe another strength of your teaching, e.g. small groups, guidance and counselling.]'],
];

// tag, title, description, optional bold note
$programmes = [
    ['O-Level', 'Senior 1 to Senior 3', '[Describe the general subjects and how students are guided to choose a stream.]', ''],
    ['Stream 1', 'Senior 4 and Senior 5', '[Describe Stream 1: subjects studied and who it is for.]', ''],
    ['Stream 2', 'Senior 4 and Senior 5', '[Describe Stream 2: subjects studied and who it is for.]', ''],
    ['MCB', 'Mathematics - Chemistry - Biology', '[Careers: e.g. medicine, nursing, agriculture.]', 'Senior 6 only.'],
    ['PCB', 'Physics - Chemistry - Biology', '[Careers and description.]', 'Senior 6 only.'],
    ['ANP', 'Associate Nursing Programme', 'Prepares students for a career in nursing and health care. [Add: duration, practical training at Kigeme Hospital, and what graduates can do.]', 'Senior 6 only.'],
];

$subjects = [
    ['Senior 1 - 3',                       '[Kinyarwanda, English, Mathematics, Biology, Chemistry, Physics, ...]'],
    ['Senior 4 - 5 (Stream 1)',            '[List the subjects of Stream 1]'],
    ['Senior 4 - 5 (Stream 2)',            '[List the subjects of Stream 2]'],
    ['Senior 6 - MCB',                     '[Mathematics, Chemistry, Biology, General Studies, ...]'],
    ['Senior 6 - PCB',                     '[Physics, Chemistry, Biology, General Studies, ...]'],
    ['Senior 6 - ANP (Associate Nursing)', '[Anatomy, Physiology, Nursing Fundamentals, Community Health, Clinical Practice, ...]'],
];

$timetable = [
    ['[7:30 - 8:00]',   '[Morning assembly]'],
    ['[8:00 - 10:00]',  '[Lessons]'],
    ['[10:00 - 10:20]', '[Break]'],
    ['[10:20 - 12:30]', '[Lessons]'],
    ['[12:30 - 2:00]',  '[Lunch]'],
    ['[2:00 - 4:00]',   '[Lessons / clubs]'],
];

$stats = [
    ['[00%]',  'National exam pass rate'],
    ['[00]',   'Students finishing each year'],
    ['[00]',   'Students joining university'],
    ['[Year]', 'Latest results'],
];

$teachers = [
    ['[Name]', 'Head Teacher'],
    ['[Name]', 'Deputy Head Teacher (Studies)'],
    ['[Name]', '[Head of Science Department]'],
    ['[Name]', '[Head of Languages Department]'],
];

$calendar = [
    ['Term 1', '[date]', '[date]'],
    ['Term 2', '[date]', '[date]'],
    ['Term 3', '[date]', '[date]'],
];

$steps = [
    '[Step 1: Collect or download the application form.]',
    '[Step 2: Prepare the documents needed, e.g. previous results and ID.]',
    '[Step 3: Submit the form to the school office.]',
    '[Step 4: Wait for the admission confirmation.]',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?></title>
<style>
:root{--blue:#0b3d91;--blue-d:#082c6c;--green:#1e7a3c;--ink:#1f2937;--muted:#475569;--bg:#f9fafb;--tint:#e8f0fb;--r:14px;--sh:0 2px 10px rgba(11,61,145,.08);--sh2:0 12px 28px rgba(11,61,145,.16)}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:system-ui,"Segoe UI",Roboto,Arial,sans-serif;color:var(--ink);line-height:1.7;background:var(--bg);-webkit-font-smoothing:antialiased}
:focus-visible{outline:3px solid #e0a800;outline-offset:3px;border-radius:6px}
.skip{position:absolute;left:-999px;top:8px;background:#fff;color:var(--blue);padding:8px 14px;border-radius:8px;z-index:100;font-weight:700}
.skip:focus{left:8px}

nav{background:var(--blue);position:sticky;top:0;z-index:50;transition:box-shadow .3s}
nav.scrolled{box-shadow:0 4px 18px rgba(0,0,0,.25)}
.nav-inner{max-width:1100px;margin:auto;padding:0 20px;display:flex;align-items:center;justify-content:space-between;min-height:58px;flex-wrap:wrap}
.brand{color:#fff;font-weight:800;letter-spacing:.3px}
.menu a{color:#e6edfa;text-decoration:none;font-weight:600;display:inline-block;padding:18px 12px;position:relative;transition:color .2s}
.menu a::after{content:"";position:absolute;left:12px;right:12px;bottom:10px;height:3px;border-radius:3px;background:#fff;transform:scaleX(0);transition:transform .25s}
.menu a:hover,.menu a.active{color:#fff}
.menu a:hover::after,.menu a.active::after{transform:scaleX(1)}
.nav-toggle{display:none;background:none;border:0;color:#fff;font-size:1.7rem;cursor:pointer;padding:6px 10px}

header{background:linear-gradient(135deg,var(--blue),var(--green));color:#fff;text-align:center;padding:90px 20px 70px;position:relative;overflow:hidden}
header::before{content:"";position:absolute;width:420px;height:420px;border-radius:50%;background:rgba(255,255,255,.06);top:-160px;right:-120px}
header h1{font-size:clamp(2rem,5vw,3rem);margin-bottom:12px;line-height:1.2;position:relative}
header p{max-width:650px;margin:auto;opacity:.95;font-size:1.08rem;position:relative}
.quick{display:flex;flex-wrap:wrap;justify-content:center;gap:10px;margin-top:28px;position:relative}
.quick a{background:rgba(255,255,255,.15);color:#fff;text-decoration:none;padding:9px 18px;border-radius:999px;font-size:.92rem;border:1px solid rgba(255,255,255,.25);transition:background .2s,transform .2s}
.quick a:hover{background:#fff;color:var(--blue);transform:translateY(-2px)}

section{max-width:1000px;margin:auto;padding:64px 20px;scroll-margin-top:58px}
section.alt{max-width:none;background:var(--tint)}
section.alt .inner{max-width:1000px;margin:auto}
h2{color:var(--blue);margin-bottom:8px;font-size:1.8rem;line-height:1.25}
h2::after{content:"";display:block;width:52px;height:4px;border-radius:4px;background:var(--green);margin-top:10px}
.lead{color:var(--muted);margin:14px 0 6px}

.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:22px;margin-top:22px}
.card{background:#fff;padding:26px;border-radius:var(--r);box-shadow:var(--sh);border-top:4px solid transparent;transition:transform .25s,box-shadow .25s,border-color .25s}
.card:hover{transform:translateY(-6px);box-shadow:var(--sh2);border-top-color:var(--green)}
.card h3{color:var(--green);margin-bottom:6px}
.tag{display:inline-block;background:var(--blue);color:#fff;border-radius:999px;padding:3px 14px;font-weight:700;font-size:.8rem;letter-spacing:.5px;margin-bottom:10px}
.todo{border:2px dashed #e0a800;background:#fff8e1}
.todo h3{color:#7a5b00}

.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:18px;margin-top:22px}
.stat{background:#fff;border-radius:var(--r);padding:26px 16px;text-align:center;box-shadow:var(--sh);color:var(--muted);font-size:.95rem}
.stat b{display:block;font-size:2.2rem;color:var(--blue);line-height:1.2;margin-bottom:4px}

.table-wrap{overflow-x:auto;margin-top:22px;border-radius:var(--r);box-shadow:var(--sh);background:#fff}
table{width:100%;border-collapse:collapse}
th{background:var(--blue);color:#fff;text-align:left;padding:14px 16px;font-size:.92rem;letter-spacing:.3px}
td{padding:14px 16px;border-bottom:1px solid #e2e8f0}
td:first-child{font-weight:600;color:var(--blue)}
tr:last-child td{border:none}
tbody tr:nth-child(even) td{background:#f8fafc}
tbody tr:hover td{background:#eef4ff}

.steps{counter-reset:s;list-style:none;margin-top:22px;position:relative}
.steps li{counter-increment:s;background:#fff;border-radius:var(--r);padding:18px 18px 18px 70px;margin-bottom:14px;position:relative;box-shadow:var(--sh);transition:transform .2s}
.steps li:hover{transform:translateX(6px)}
.steps li::before{content:counter(s);position:absolute;left:18px;top:50%;transform:translateY(-50%);width:38px;height:38px;border-radius:50%;background:var(--green);color:#fff;font-weight:700;display:flex;align-items:center;justify-content:center}

.help{background:#fff8e1;border:2px dashed #e0a800;border-radius:var(--r);padding:24px}
.help h2{font-size:1.3rem;color:#7a5b00}
.help h2::after{display:none}
.help ol{margin:10px 0 0 20px}
.help code{background:#fff;padding:1px 6px;border-radius:5px}

.contact-box{background:linear-gradient(135deg,#e6f4ea,#dbe8fb);border-radius:var(--r);padding:40px 24px;text-align:center}
.contact-box h2::after{margin:10px auto 0}
.contact-box a{display:inline-block;margin-top:16px;background:var(--green);color:#fff;text-decoration:none;padding:14px 32px;border-radius:999px;font-weight:700;box-shadow:0 6px 16px rgba(30,122,60,.35);transition:transform .2s,box-shadow .2s}
.contact-box a:hover{transform:translateY(-3px);box-shadow:0 10px 22px rgba(30,122,60,.45)}

footer{text-align:center;padding:26px 20px;background:var(--blue-d);color:#dbe5f7;font-size:.9rem}

#top-btn{position:fixed;right:18px;bottom:18px;width:46px;height:46px;border-radius:50%;border:0;background:var(--green);color:#fff;font-size:1.3rem;cursor:pointer;box-shadow:var(--sh2);opacity:0;visibility:hidden;transform:translateY(10px);transition:.3s;z-index:60}
#top-btn.show{opacity:1;visibility:visible;transform:none}

.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s,transform .6s}
.reveal.in{opacity:1;transform:none}

@media(max-width:760px){
  .nav-toggle{display:block}
  .menu{display:none;width:100%;padding-bottom:10px}
  .menu.open{display:block}
  .menu a{display:block;padding:12px 8px;border-top:1px solid rgba(255,255,255,.12)}
  .menu a::after{display:none}
  .menu a.active{background:rgba(255,255,255,.12);border-radius:8px}
  section{padding:48px 18px}
  header{padding:64px 18px 48px}
  /* tables become stacked cards on phones */
  table,thead,tbody,tr,td{display:block}
  thead{position:absolute;left:-9999px}
  tbody tr{padding:10px 4px;border-bottom:8px solid var(--bg)}
  td{border:0!important;padding:6px 16px;background:none!important}
  td::before{content:attr(data-label);display:block;font-size:.75rem;text-transform:uppercase;letter-spacing:.6px;color:var(--muted);font-weight:700}
}
@media(prefers-reduced-motion:reduce){*{transition:none!important;scroll-behavior:auto!important}.reveal{opacity:1;transform:none}}
@media print{nav,.quick,#top-btn,.help{display:none}header{background:none;color:#000;padding:20px}.reveal{opacity:1;transform:none}}
</style>
</head>
<body>

<a class="skip" href="#approach">Skip to content</a>
<nav id="nav" aria-label="Main">
  <div class="nav-inner">
    <span class="brand">GS Kigeme A</span>
    <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="menu" aria-label="Toggle menu">&#9776;</button>
    <div class="menu" id="menu">
      <?php foreach ($menu as $file => $label): ?>
        <a href="<?= e($file) ?>"<?= $current === $file ? ' class="active" aria-current="page"' : '' ?>><?= e($label) ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</nav>

<header>
  <h1>Academic Life</h1>
  <p>Quality education built on discipline, knowledge and good values, from Senior 1 to Senior 6.</p>
  <div class="quick">
    <?php foreach ($quickLinks as $id => $label): ?>
      <a href="#<?= e($id) ?>"><?= e($label) ?></a>
    <?php endforeach; ?>
  </div>
</header>

<!-- ================= APPROACH ================= -->
<section id="approach">
  <h2>Our Approach to Learning</h2>
  <p class="lead">How we teach and how our students learn.</p>
  <div class="grid">
    <?php foreach ($approach as [$title, $text]): ?>
      <div class="card<?= todoClass($title) ?>">
        <h3><?= e($title) ?></h3>
        <p><?= e($text) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ================= PROGRAMMES ================= -->
<section id="programmes" class="alt">
  <div class="inner">
    <h2>Programmes</h2>
    <p class="lead">Senior 1 to 3 general studies, Senior 4 and 5 streams, and Senior 6 combinations.</p>
    <div class="grid">
      <?php foreach ($programmes as [$tag, $title, $text, $note]): ?>
        <div class="card">
          <span class="tag"><?= e($tag) ?></span>
          <h3><?= e($title) ?></h3>
          <p><?php if ($note !== ''): ?><b><?= e($note) ?></b> <?php endif; ?><?= e($text) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================= SUBJECTS ================= -->
<section id="subjects">
  <h2>Subjects We Teach</h2>
  <p class="lead">Fill the table with the real subjects for each level.</p>
  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>Level</th><th>Subjects</th></tr>
      </thead>
      <tbody>
        <?php foreach ($subjects as [$level, $list]): ?>
          <tr><td data-label="Level"><?= e($level) ?></td><td data-label="Subjects"><?= e($list) ?></td></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- ================= TIMETABLE ================= -->
<section id="timetable" class="alt">
  <div class="inner">
    <h2>A Day at School</h2>
    <p class="lead">Replace the times with your real daily timetable.</p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>Time</th><th>Activity</th></tr>
        </thead>
        <tbody>
          <?php foreach ($timetable as [$time, $activity]): ?>
            <tr><td data-label="Time"><?= e($time) ?></td><td data-label="Activity"><?= e($activity) ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ================= RESULTS ================= -->
<section id="results">
  <h2>Our Results</h2>
  <p class="lead">Get the real figures from the school office before publishing.</p>
  <div class="stats">
    <?php foreach ($stats as [$value, $label]): ?>
      <div class="stat"><b><?= e($value) ?></b><?= e($label) ?></div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ================= TEACHERS ================= -->
<section id="teachers" class="alt">
  <div class="inner">
    <h2>Our Academic Team</h2>
    <p class="lead">The teachers and leaders behind our students' success.</p>
    <div class="grid">
      <?php foreach ($teachers as [$name, $role]): ?>
        <div class="card<?= todoClass($name) ?>">
          <h3><?= e($name) ?></h3>
          <p><?= e($role) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================= CALENDAR ================= -->
<section id="calendar">
  <h2>School Calendar</h2>
  <p class="lead">Important academic dates.</p>
  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>Term</th><th>Starts</th><th>Ends</th></tr>
      </thead>
      <tbody>
        <?php foreach ($calendar as [$term, $start, $end]): ?>
          <tr><td data-label="Term"><?= e($term) ?></td><td data-label="Starts"><?= e($start) ?></td><td data-label="Ends"><?= e($end) ?></td></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- ================= HOW TO JOIN ================= -->
<section id="join" class="alt">
  <div class="inner">
    <h2>How to Join GS Kigeme A</h2>
    <p class="lead">Check the exact steps with the school office, then update this list.</p>
    <ol class="steps">
      <?php foreach ($steps as $step): ?>
        <li><?= e($step) ?></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- ================= HELP BOX ================= -->
<?php if ($showHelp): ?>
<section>
  <div class="help">
    <h2>How to add more, step by step</h2>
    <ol>
      <li>Open <code>academic.php</code> and find the arrays at the top of the file.</li>
      <li>Replace each <code>[...]</code> placeholder with real information.</li>
      <li>To add a card, table row, step or stat, copy one line inside the array and paste it below, then edit the text.</li>
      <li>Cards whose title starts with <code>[</code> show as yellow "to do" cards. They turn normal automatically once the bracket is removed.</li>
      <li>When you finish, set <code>$showHelp = false;</code> at the top to hide this box.</li>
    </ol>
  </div>
</section>
<?php endif; ?>

<section>
  <div class="contact-box">
    <h2>Have a question about studies?</h2>
    <p>Our academic team will be happy to help.</p>
    <a href="contact.php">Contact Us</a>
  </div>
</section>

<footer>&copy; <?= date('Y') ?> GS Kigeme A. All rights reserved.</footer>

<button id="top-btn" aria-label="Back to top">&uarr;</button>
<script>
(function(){
  var nav=document.getElementById('nav'),btn=document.getElementById('top-btn'),
      tg=document.getElementById('navToggle'),menu=document.getElementById('menu');
  tg.addEventListener('click',function(){
    var o=menu.classList.toggle('open');tg.setAttribute('aria-expanded',o);
  });
  menu.addEventListener('click',function(e){if(e.target.tagName==='A'){menu.classList.remove('open');tg.setAttribute('aria-expanded',false);}});
  function onScroll(){
    nav.classList.toggle('scrolled',scrollY>10);
    btn.classList.toggle('show',scrollY>500);
  }
  addEventListener('scroll',onScroll,{passive:true});onScroll();
  btn.addEventListener('click',function(){scrollTo({top:0,behavior:'smooth'});});
  var els=document.querySelectorAll('.card,.stat,.steps li,.table-wrap,.contact-box');
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(en){en.forEach(function(x){
      if(x.isIntersecting){x.target.classList.add('in');io.unobserve(x.target);}
    });},{threshold:.12});
    els.forEach(function(el){el.classList.add('reveal');io.observe(el);});
  }
})();
</script>
</body>
</html>
