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

.filters{display:flex;flex-wrap:wrap;gap:10px;margin:18px 0 8px}
.filters button{border:2px solid var(--blue);background:#fff;color:var(--blue);padding:9px 20px;border-radius:999px;font:inherit;font-weight:600;cursor:pointer;transition:.2s}
.filters button:hover{background:var(--tint)}
.filters button.on{background:var(--blue);color:#fff}
.count{color:var(--muted);font-size:.9rem}
.activity{background:#fff;border-radius:var(--r);box-shadow:var(--sh);overflow:hidden;display:flex;flex-direction:column;transition:transform .25s,box-shadow .25s}
.activity:hover{transform:translateY(-6px);box-shadow:var(--sh2)}
.activity.hide{display:none}
.activity .pic{height:160px;background:linear-gradient(135deg,#dbe5f7,#cbd5e1);display:flex;align-items:center;justify-content:center;color:var(--muted);font-weight:600;font-size:.9rem;text-align:center;padding:10px}
.activity .pic img{width:100%;height:100%;object-fit:cover}
.activity .body{padding:22px;flex:1}
.activity h3{color:var(--blue);margin-bottom:6px}
.activity.todo h3{color:#7a5b00}
.cat{display:inline-block;background:#e6f4ea;color:var(--green);font-weight:700;font-size:.75rem;border-radius:999px;padding:3px 12px;margin-bottom:10px;text-transform:uppercase;letter-spacing:.5px}
.meta{font-size:.88rem;color:#64748b;margin-top:12px;padding-top:10px;border-top:1px solid #e2e8f0}
.empty{display:none;text-align:center;padding:30px;color:var(--muted)}

.sr{position:absolute;left:-9999px}
.toolbar{position:sticky;top:58px;z-index:20;background:rgba(249,250,251,.94);backdrop-filter:blur(8px);padding:12px 0 10px;margin-top:14px;border-bottom:1px solid #e2e8f0}
.search{display:block;position:relative;margin-bottom:12px}
.search::before{content:"\1F50D";position:absolute;left:16px;top:50%;transform:translateY(-50%);font-size:.95rem}
.search input{width:100%;padding:13px 16px 13px 44px;border:2px solid #cbd5e1;border-radius:999px;font:inherit;background:#fff;transition:border-color .2s,box-shadow .2s}
.search input:focus{outline:none;border-color:var(--blue);box-shadow:0 0 0 4px rgba(11,61,145,.12)}
.filters{margin:0}
.filters button{white-space:nowrap}
.filters small{background:rgba(11,61,145,.12);border-radius:999px;padding:0 8px;margin-left:4px;font-size:.78rem}
.filters button.on small{background:rgba(255,255,255,.25)}
.count{margin:14px 0 0}
.activity{border-top:4px solid var(--ac,var(--green));animation:pop .35s}
@keyframes pop{from{opacity:0;transform:translateY(10px)}}
.activity[data-cat=clubs]{--ac:#0b3d91}.activity[data-cat=sports]{--ac:#d9480f}.activity[data-cat=culture]{--ac:#7b2cbf}.activity[data-cat=academic]{--ac:#1e7a3c}.activity[data-cat=community]{--ac:#0e8a7d}
.cat{color:var(--ac,var(--green));background:#eef2f7;background:color-mix(in srgb,var(--ac,#1e7a3c) 12%,#fff)}
.activity .pic{flex-direction:column}
.ph{display:flex;flex-direction:column;align-items:center;gap:4px}
.ico{font-size:2.6rem;line-height:1}
ul.meta{list-style:none;display:flex;flex-direction:column;gap:2px}
.empty button{margin-top:10px;background:var(--blue);color:#fff;border:0;border-radius:999px;padding:10px 24px;font:inherit;font-weight:600;cursor:pointer}
@media(max-width:760px){.toolbar{top:0;position:static}.filters{flex-wrap:nowrap;overflow-x:auto;padding-bottom:6px;scrollbar-width:none}}
@media(prefers-reduced-motion:reduce){.activity{animation:none}}
</style>
</head>
<body>

<a class="skip" href="#activities">Skip to content</a>
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
  <h1>School Activities</h1>
  <p>Learning at GS Kigeme A goes beyond the classroom. Discover the clubs, sports and programmes that help our students grow.</p>
</header>

<main>
<section id="activities">
  <h2>What We Do</h2>
  <p class="lead">Choose a category to see the activities.</p>

  <div class="toolbar">
    <label class="search">
      <span class="sr">Search activities</span>
      <input type="search" id="search" placeholder="Search activities..." autocomplete="off">
    </label>
    <div class="filters" id="filters" role="group" aria-label="Filter activities">
      <button class="on" data-cat="all" aria-pressed="true">All <small><?= count($activities) ?></small></button>
      <?php foreach ($categories as $key => [$label, , $icon]): ?>
        <button data-cat="<?= e($key) ?>" aria-pressed="false"><?= e($icon) ?> <?= e($label) ?> <small><?= (int)($counts[$key] ?? 0) ?></small></button>
      <?php endforeach; ?>
    </div>
  </div>
  <p class="count" id="count" aria-live="polite"></p>

  <div class="grid" id="grid">
    <?php foreach ($activities as [$cat, $pic, $img, $title, $text, $meta]): ?>
      <div class="activity<?= todoClass($title) ?>" data-cat="<?= e($cat) ?>" data-text="<?= e(mb_strtolower($title . ' ' . $text . ' ' . $meta)) ?>">
        <div class="pic">
          <?php if ($img !== ''): ?>
            <img src="<?= e($img) ?>" alt="<?= e($title) ?>" loading="lazy">
          <?php else: ?>
            <span class="ph"><span class="ico"><?= e($categories[$cat][2] ?? '📌') ?></span><?= e($pic) ?></span>
          <?php endif; ?>
        </div>
        <div class="body">
          <span class="cat"><?= e($categories[$cat][1] ?? $cat) ?></span>
          <h3><?= e($title) ?></h3>
          <p><?= e($text) ?></p>
          <ul class="meta">
            <?php foreach (explode(' | ', $meta) as $m): ?><li><?= e($m) ?></li><?php endforeach; ?>
          </ul>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="empty" id="empty">
    <p>No activities match your search.</p>
    <button type="button" id="reset">Show all activities</button>
  </div>
</section>

<?php if ($showHelp): ?>
<section>
  <div class="help">
    <h2>How to add a new activity</h2>
    <ol>
      <li>Open <code>activities.php</code> and find <code>$activities</code> at the top.</li>
      <li>Copy one line and paste it above "ADD NEW ACTIVITIES ABOVE THIS LINE".</li>
      <li>Change the category to one of: <code>clubs</code>, <code>sports</code>, <code>culture</code>, <code>academic</code>, <code>community</code>.</li>
      <li>Change the title, description and details (day, time, teacher).</li>
      <li>For a photo, put the file name in the third field, e.g. <code>'football.jpg'</code>.</li>
      <li>Remove the <code>[ ]</code> from the title when the card is complete. Set <code>$showHelp = false;</code> to hide this box.</li>
    </ol>
  </div>
</section>
<?php endif; ?>

<section>
  <div class="contact-box">
    <h2>Want to take part?</h2>
    <p>Ask about any activity and we will tell you how to join.</p>
    <a href="contact.php">Contact Us</a>
  </div>
</section>
</main>

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
<script>
(function(){
  var btns=document.querySelectorAll('#filters button'),cards=document.querySelectorAll('#grid .activity'),
      empty=document.getElementById('empty'),count=document.getElementById('count'),
      q=document.getElementById('search'),cat='all';
  function apply(){
    var n=0,term=q.value.trim().toLowerCase();
    btns.forEach(function(b){var on=b.dataset.cat===cat;b.classList.toggle('on',on);b.setAttribute('aria-pressed',on);});
    cards.forEach(function(c){
      var m=(cat==='all'||c.dataset.cat===cat)&&(!term||c.dataset.text.indexOf(term)>-1);
      c.classList.toggle('hide',!m);if(m)n++;
    });
    empty.style.display=n?'none':'block';
    count.textContent='Showing '+n+(n===1?' activity':' activities');
  }
  btns.forEach(function(b){b.addEventListener('click',function(){
    cat=b.dataset.cat;apply();
    history.replaceState(null,'',cat==='all'?location.pathname:'#'+cat);
  });});
  q.addEventListener('input',apply);
  q.addEventListener('keydown',function(e){if(e.key==='Escape'){q.value='';apply();}});
  document.getElementById('reset').addEventListener('click',function(){q.value='';cat='all';apply();});
  var h=location.hash.slice(1);
  if(h&&document.querySelector('#filters [data-cat="'+h+'"]'))cat=h;
  apply();
})();
</script>
</body>
</html>
