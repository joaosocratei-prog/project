<?php
/* activities.php | GS Kigeme A
   Edit the arrays below, not the HTML. A card whose title starts with "["
   shows as a yellow "to do" card until you remove the bracket. */

$pageTitle = 'Activities | GS Kigeme A';
$current   = basename($_SERVER['PHP_SELF']);
$showHelp  = true; // set to false when you finish

function e($text) { return htmlspecialchars((string)$text, ENT_QUOTES, 'UTF-8'); }
function todoClass($title) { return strpos(trim($title), '[') === 0 ? ' todo' : ''; }

$menu = [
    'index.php'      => 'Home',
    'about.php'      => 'About',
    'discover.php'   => 'Discover',
    'academic.php'   => 'Academic',
    'activities.php' => 'Activities',
    'contact.php'    => 'Contact',
];

// key => [filter button label, tag shown on the card, icon]
$categories = [
    'clubs'     => ['Clubs', 'Clubs', '🔬'],
    'sports'    => ['Sports', 'Sports', '⚽'],
    'culture'   => ['Music & Culture', 'Music & Culture', '🎶'],
    'academic'  => ['Academic', 'Academic', '📚'],
    'community' => ['Community & Environment', 'Community', '🌱'],
];

// [category, photo placeholder text, photo file (or ''), title, description, details]
$activities = [
    ['clubs', 'Photo: Science Club', '', 'Science & Innovation Club', 'Students design projects and simple inventions that solve real problems in our community.', 'When: [day and time] | Patron: [teacher name]'],
    ['clubs', 'Photo: ICT Club', '', 'ICT & Digital Learning', 'Use of computers and ICT tools to make lessons more practical and interesting.', 'When: [day and time] | Patron: [teacher name]'],
    ['sports', 'Photo: Football', '', '[Football]', '[Describe the team, training days and competitions.]', 'When: [day and time] | Coach: [name]'],
    ['sports', 'Photo: Volleyball', '', '[Volleyball]', '[Describe the team and achievements.]', 'When: [day and time] | Coach: [name]'],
    ['culture', 'Photo: Choir', '', '[School Choir]', '[Describe the choir and where it performs.]', 'When: [day and time] | Leader: [name]'],
    ['culture', 'Photo: Traditional dance', '', '[Traditional Dance & Drama]', '[Describe performances and events.]', 'When: [day and time] | Leader: [name]'],
    ['academic', 'Photo: Classroom', '', 'Competence-Based Learning', 'Students discuss, research and present their own ideas in class.', 'Who: [classes] | Teacher: [name]'],
    ['academic', 'Photo: Debate', '', '[Debate & Reading Club]', '[Describe how students practise speaking and reading.]', 'When: [day and time] | Patron: [name]'],
    ['community', 'Photo: Tree planting', '', 'Green School', 'Tree planting, gardens and clean environment activities led by students.', 'When: [day and time] | Patron: [teacher name]'],
    ['community', 'Photo: Umuganda', '', '[Umuganda & Community Service]', '[Describe how students help the neighbouring community.]', 'When: [day and time] | Leader: [name]'],
    // ADD NEW ACTIVITIES ABOVE THIS LINE
];
$counts = array_count_values(array_column($activities, 0)); // activities per category
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
:root{--blue:#0b3d91;--blue-d:#082c6c;--green:#1e7a3c}
body{background:#f9fafb;scroll-behavior:smooth}
.bg-brand{background:var(--blue)}
.bg-brand-dark{background:var(--blue-d)}
.btn-primary{--bs-btn-bg:var(--blue);--bs-btn-border-color:var(--blue);--bs-btn-hover-bg:var(--blue-d);--bs-btn-hover-border-color:var(--blue-d);--bs-btn-active-bg:var(--blue-d)}
.btn-outline-primary{--bs-btn-color:var(--blue);--bs-btn-border-color:var(--blue);--bs-btn-hover-bg:var(--blue);--bs-btn-hover-border-color:var(--blue);--bs-btn-active-bg:var(--blue);--bs-btn-active-border-color:var(--blue)}
.btn-success{--bs-btn-bg:var(--green);--bs-btn-border-color:var(--green);--bs-btn-hover-bg:#17622f;--bs-btn-hover-border-color:#17622f}
.navbar .nav-link.active{font-weight:700;text-decoration:underline;text-underline-offset:8px}
.hero{background:linear-gradient(135deg,var(--blue),var(--green));position:relative;overflow:hidden}
.hero::before{content:"";position:absolute;width:420px;height:420px;border-radius:50%;background:rgba(255,255,255,.07);top:-160px;right:-120px}
.section-title::after{content:"";display:block;width:52px;height:4px;border-radius:4px;background:var(--green);margin-top:10px}
.toolbar{top:56px;z-index:1010;background:rgba(249,250,251,.95);backdrop-filter:blur(8px)}
#filters{scrollbar-width:none}
.activity-col[data-cat=clubs]{--ac:#0b3d91}.activity-col[data-cat=sports]{--ac:#d9480f}.activity-col[data-cat=culture]{--ac:#7b2cbf}.activity-col[data-cat=academic]{--ac:#1e7a3c}.activity-col[data-cat=community]{--ac:#0e8a7d}
.activity-card{border-top:4px solid var(--ac,var(--green))!important;transition:transform .25s,box-shadow .25s;animation:pop .35s}
.activity-card:hover{transform:translateY(-6px);box-shadow:0 12px 28px rgba(11,61,145,.18)!important}
.activity-card.todo{border:2px dashed #e0a800!important}
.pic{background:linear-gradient(135deg,#dbe5f7,#cbd5e1);color:#475569;font-weight:600;font-size:.9rem}
.pic img{object-fit:cover}
.ico{font-size:2.6rem;line-height:1}
.cat-badge{color:var(--ac,var(--green));background:#eef2f7;background:color-mix(in srgb,var(--ac,#1e7a3c) 12%,#fff);text-transform:uppercase;letter-spacing:.5px}
.cta{background:linear-gradient(135deg,#e6f4ea,#dbe8fb)}
@keyframes pop{from{opacity:0;transform:translateY(10px)}}
@media(prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}
</style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-brand sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">GS Kigeme A</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <?php foreach ($menu as $file => $label): ?>
          <li class="nav-item">
            <a class="nav-link<?= $current === $file ? ' active' : '' ?>"<?= $current === $file ? ' aria-current="page"' : '' ?> href="<?= e($file) ?>"><?= e($label) ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

<header class="hero text-center text-white py-5">
  <div class="container py-4 position-relative">
    <h1 class="display-5 fw-bold">School Activities</h1>
    <p class="lead mx-auto" style="max-width:650px">Learning at GS Kigeme A goes beyond the classroom. Discover the clubs, sports and programmes that help our students grow.</p>
  </div>
</header>

<main>
  <div class="toolbar sticky-top border-bottom py-3">
    <div class="container">
      <div class="input-group input-group-lg mb-3">
        <span class="input-group-text bg-white rounded-start-pill ps-4">&#128269;</span>
        <input type="search" class="form-control rounded-end-pill" id="search" placeholder="Search activities..." aria-label="Search activities" autocomplete="off">
      </div>
      <div class="d-flex gap-2 overflow-auto pb-1" id="filters" role="group" aria-label="Filter activities">
        <button type="button" class="btn btn-outline-primary rounded-pill text-nowrap active" data-cat="all" aria-pressed="true">All <span class="badge text-bg-light ms-1"><?= count($activities) ?></span></button>
        <?php foreach ($categories as $key => [$label, , $icon]): ?>
          <button type="button" class="btn btn-outline-primary rounded-pill text-nowrap" data-cat="<?= e($key) ?>" aria-pressed="false"><?= e($icon) ?> <?= e($label) ?> <span class="badge text-bg-light ms-1"><?= (int)($counts[$key] ?? 0) ?></span></button>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <section class="container py-5" id="activities">
    <h2 class="section-title fw-bold text-primary mb-2" style="color:var(--blue)!important">What We Do</h2>
    <p class="text-secondary mt-3">Choose a category to see the activities. <span id="count" class="fw-semibold" aria-live="polite"></span></p>

    <div class="row g-4 mt-1" id="grid">
      <?php foreach ($activities as [$cat, $pic, $img, $title, $text, $meta]): ?>
        <div class="col-12 col-md-6 col-lg-4 activity-col" data-cat="<?= e($cat) ?>" data-text="<?= e(mb_strtolower($title . ' ' . $text . ' ' . $meta)) ?>">
          <div class="card h-100 border-0 shadow-sm overflow-hidden activity-card<?= todoClass($title) ?>">
            <div class="ratio ratio-16x9 pic">
              <?php if ($img !== ''): ?>
                <img src="<?= e($img) ?>" alt="<?= e($title) ?>" loading="lazy">
              <?php else: ?>
                <div class="d-flex flex-column align-items-center justify-content-center text-center gap-1 p-2">
                  <span class="ico"><?= e($categories[$cat][2] ?? '📌') ?></span><?= e($pic) ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="card-body">
              <span class="badge rounded-pill cat-badge mb-2"><?= e($categories[$cat][1] ?? $cat) ?></span>
              <h3 class="h5 card-title" style="color:var(--blue)"><?= e($title) ?></h3>
              <p class="card-text text-secondary"><?= e($text) ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <?php foreach (explode(' | ', $meta) as $m): ?>
                <li class="list-group-item small text-muted"><?= e($m) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center py-5 d-none" id="empty">
      <p class="text-secondary">No activities match your search.</p>
      <button type="button" class="btn btn-primary rounded-pill px-4" id="reset">Show all activities</button>
    </div>
  </section>

  <?php if ($showHelp): ?>
  <section class="container pb-4">
    <div class="alert alert-warning border-2" style="border-style:dashed">
      <h2 class="h5">How to add a new activity</h2>
      <ol class="mb-0">
        <li>Open <code>activities.php</code> and find <code>$activities</code> at the top.</li>
        <li>Copy one line and paste it above "ADD NEW ACTIVITIES ABOVE THIS LINE".</li>
        <li>Category must be one of: <code>clubs</code>, <code>sports</code>, <code>culture</code>, <code>academic</code>, <code>community</code>.</li>
        <li>For a photo, put the file name in the third field, e.g. <code>'football.jpg'</code>.</li>
        <li>Remove the <code>[ ]</code> from the title when complete. Set <code>$showHelp = false;</code> to hide this box.</li>
      </ol>
    </div>
  </section>
  <?php endif; ?>

  <section class="container pb-5">
    <div class="cta rounded-4 text-center p-5">
      <h2 class="fw-bold" style="color:var(--blue)">Want to take part?</h2>
      <p class="text-secondary">Ask about any activity and we will tell you how to join.</p>
      <a class="btn btn-success btn-lg rounded-pill px-5 shadow" href="contact.php">Contact Us</a>
    </div>
  </section>
</main>

<footer class="bg-brand-dark text-center text-white-50 py-4 small">
  &copy; <?= date('Y') ?> GS Kigeme A. All rights reserved.
</footer>

<button id="up" class="btn btn-success rounded-circle shadow position-fixed bottom-0 end-0 m-3 d-none" style="width:46px;height:46px" aria-label="Back to top">&uarr;</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function(){
  var btns=document.querySelectorAll('#filters button'),cols=document.querySelectorAll('#grid .activity-col'),
      empty=document.getElementById('empty'),count=document.getElementById('count'),
      q=document.getElementById('search'),up=document.getElementById('up'),cat='all';
  function apply(){
    var n=0,term=q.value.trim().toLowerCase();
    btns.forEach(function(b){var on=b.dataset.cat===cat;b.classList.toggle('active',on);b.setAttribute('aria-pressed',on);});
    cols.forEach(function(c){
      var m=(cat==='all'||c.dataset.cat===cat)&&(!term||c.dataset.text.indexOf(term)>-1);
      c.classList.toggle('d-none',!m);if(m)n++;
    });
    empty.classList.toggle('d-none',n>0);
    count.textContent='Showing '+n+(n===1?' activity':' activities');
  }
  btns.forEach(function(b){b.addEventListener('click',function(){
    cat=b.dataset.cat;apply();
    history.replaceState(null,'',cat==='all'?location.pathname:'#'+cat);
  });});
  q.addEventListener('input',apply);
  q.addEventListener('keydown',function(e){if(e.key==='Escape'){q.value='';apply();}});
  document.getElementById('reset').addEventListener('click',function(){q.value='';cat='all';apply();});
  addEventListener('scroll',function(){up.classList.toggle('d-none',scrollY<500);},{passive:true});
  up.addEventListener('click',function(){scrollTo({top:0,behavior:'smooth'});});
  var h=location.hash.slice(1);
  if(h&&document.querySelector('#filters [data-cat="'+h+'"]'))cat=h;
  apply();
})();
</script>
</body>
</html>
