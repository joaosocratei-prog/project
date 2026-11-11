<?php
// =====================================================================
//  GS KIGEME A - ABOUT PAGE (about.php)
//  Edit the arrays below. The HTML at the bottom builds itself from them.
//  $school, $nav and the footer are the same as in index.php.
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

$pageTitle    = 'About Us';
$pageSubtitle = "Groupe Scolaire Kigeme A, Nyamagabe District, Southern Province, Rwanda. Educating today's learners to lead tomorrow.";

// SITE MENU (same as index.php)
$nav = [
    'index.php' => 'Home', 'about.php' => 'About', 'academic.php' => 'Academics',
    'students.php' => 'Students', 'teachers.php' => 'Teachers', 'gallery.php' => 'Gallery',
    'news.php' => 'News', 'contact.php' => 'Contact',
];

// PAGE MENU (jumps to sections on this page)
$menu = [
    '#who' => 'Who we are', '#mission' => 'Mission & vision', '#innovation' => 'Innovation',
    '#team' => 'Leadership', '#contact' => 'Contact',
];

// Add the founding year and real numbers when you have them, for example:
// "Since 1998, we have ... Today we welcome about 900 students taught by 40 dedicated teachers."
$who = 'GS Kigeme A is a school located in Kigeme, Nyamagabe District. We are committed to giving every student a quality education based on discipline, knowledge and good values. Our teachers and students work together to build a strong and successful community.';

$mission_cards = [
    ['🎯', 'Our Mission', 'To provide quality, inclusive education that prepares students with knowledge, skills and values for life.'],
    ['🔭', 'Our Vision',  'To be a leading school in Nyamagabe District, producing responsible and innovative citizens.'],
    ['💎', 'Our Values',  'Discipline, respect, hard work, integrity and love for our country.'],
];

$innovation_intro = 'We believe education must move with the times. Our school encourages creativity, technology and problem solving in every classroom.';

$innovation_cards = [
    ['💻', 'Digital Learning',          'Use of computers and ICT tools to make lessons more practical and interesting.'],
    ['🔬', 'Science & Innovation Club', 'Students design projects and simple inventions that solve real problems in our community.'],
    ['🧠', 'Modern Teaching Methods',   'Competence-based learning where students discuss, research and present their own ideas.'],
    ['🌳', 'Green School',              'Tree planting, gardens and clean environment activities led by students.'],
];

$team = [
    ['H', 'HAKIZIMANA Emmanuel', 'Head Teacher'],
    ['D', 'HAKIZIMANA Michel',   'Deputy Head Teacher (Studies)'],
    ['M', 'Miracle Makers',      'Website Team (Students / Developers)'],
];

// label => [text to show, link (or '' for no link)]
$contact = [
    '📍 Location' => ['Kigeme, Nyamagabe District, Southern Province, Rwanda', ''],
    '📞 Phone'    => [$school['phone'], 'tel:' . $school['phone']],
    '✉️ Email'    => [$school['email'], 'mailto:' . $school['email']],
];

$currentPage = basename($_SERVER['PHP_SELF']);
function e($t) { return htmlspecialchars((string)$t, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?> | <?= e($school['name']) ?></title>
<meta name="description" content="About <?= e($school['name']) ?> in <?= e($school['location']) ?>: who we are, our mission, vision, values and leadership.">
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

/* SITE HEADER + NAV */
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

/* PAGE HERO */
.page-hero{background:linear-gradient(135deg,rgba(23,107,58,.96),rgba(12,69,37,.96)),var(--dark);color:#fff;text-align:center;padding:70px 8% 60px}
.crumbs{font-size:13px;margin-bottom:14px;color:#d7e8dc}
.crumbs a{text-decoration:underline;text-underline-offset:3px}.crumbs a:hover{color:var(--gold)}
.page-hero h1{font-size:clamp(34px,5vw,54px);line-height:1.15;margin-bottom:12px}
.page-hero p{max-width:680px;margin:auto;opacity:.95}

/* PAGE MENU */
.subnav{background:#fff;border-bottom:1px solid var(--line);padding:10px 6%;display:flex;gap:8px;justify-content:center;overflow-x:auto;white-space:nowrap}
.subnav a{padding:7px 16px;border-radius:30px;font-size:14px;font-weight:600;color:var(--gray);border:1px solid var(--line);transition:.2s}
.subnav a:hover{border-color:var(--green);color:var(--green)}
.subnav a.on{background:var(--green);border-color:var(--green);color:#fff}

/* SECTIONS */
section{padding:70px 8%;scroll-margin-top:90px}
.wrap{max-width:1000px;margin:auto}
.tag{display:inline-block;background:var(--gold);color:#202820;padding:3px 12px;border-radius:30px;font-size:12px;font-weight:bold;margin-bottom:10px;text-transform:uppercase;letter-spacing:1px}
h2{color:var(--dark);font-size:clamp(26px,4vw,36px);line-height:1.25;margin-bottom:14px}
.lead{color:var(--gray);max-width:70ch}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:22px;margin-top:28px}
.card{background:#fff;padding:28px;border-radius:12px;box-shadow:var(--shadow);border-top:4px solid var(--gold);transition:transform .2s}
.card:hover{transform:translateY(-4px)}
.card .ic{font-size:32px}
.card h3{color:var(--green);margin:8px 0}
.card p{color:var(--gray);font-size:15px}
.tint{background:var(--tint)}
.avatar{width:72px;height:72px;border-radius:50%;background:var(--green);color:#fff;display:grid;place-items:center;font:bold 1.8rem var(--serif);margin-bottom:12px;border:3px solid var(--gold)}
.contact-card a{text-decoration:underline;text-underline-offset:3px;color:var(--dark);font-weight:600;overflow-wrap:anywhere}
.contact-card h3{font-size:17px}

.button{display:inline-block;padding:13px 24px;border-radius:6px;font-weight:bold;transition:transform .2s,background .2s}
.button:hover{transform:translateY(-2px)}
.gold{background:var(--gold);color:#17251b}.gold:hover{background:#ecc243}
.cta{background:linear-gradient(90deg,var(--green),var(--dark));color:#fff;text-align:center}
.cta h2{color:#fff}
.cta p{max-width:600px;margin:0 auto 22px;color:#e1eee5}

/* FOOTER (same as index.php) */
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
    <?php foreach ($menu as $link => $label): ?>
        <a href="<?= e($link) ?>"><?= e($label) ?></a>
    <?php endforeach; ?>
</nav>

<main id="main">

<section id="who">
    <div class="wrap">
        <span class="tag">Who we are</span>
        <h2>A school built on knowledge, discipline and values</h2>
        <p class="lead"><?= e($who) ?></p>
    </div>
</section>

<section id="mission" class="tint">
    <div class="wrap">
        <span class="tag">Our purpose</span>
        <h2>Our mission &amp; vision</h2>
        <div class="grid">
            <?php foreach ($mission_cards as [$ic, $title, $text]): ?>
                <div class="card"><div class="ic" aria-hidden="true"><?= $ic ?></div><h3><?= e($title) ?></h3><p><?= e($text) ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="innovation">
    <div class="wrap">
        <span class="tag">Innovation</span>
        <h2>Innovation at <?= e($school['name']) ?></h2>
        <p class="lead"><?= e($innovation_intro) ?></p>
        <div class="grid">
            <?php foreach ($innovation_cards as [$ic, $title, $text]): ?>
                <div class="card"><div class="ic" aria-hidden="true"><?= $ic ?></div><h3><?= e($title) ?></h3><p><?= e($text) ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="team" class="tint">
    <div class="wrap">
        <span class="tag">Our people</span>
        <h2>Our leadership</h2>
        <div class="grid">
            <?php foreach ($team as [$letter, $name, $role]): ?>
                <div class="card">
                    <div class="avatar" aria-hidden="true"><?= e($letter) ?></div>
                    <h3><?= e($name) ?></h3>
                    <p><?= e($role) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact">
    <div class="wrap">
        <span class="tag">Contact</span>
        <h2>Contact us</h2>
        <div class="grid">
            <?php foreach ($contact as $label => [$value, $href]): ?>
                <div class="card contact-card">
                    <h3><?= e($label) ?></h3>
                    <p><?php if ($href !== ''): ?><a href="<?= e($href) ?>"><?= e($value) ?></a><?php else: ?><?= e($value) ?><?php endif; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta">
    <h2>Join the <?= e($school['name']) ?> community</h2>
    <p>Interested in joining our school? Visit the admission portal to find the application form and follow the instructions.</p>
    <a href="admission/index.php" class="button gold">Apply for admission</a>
</section>

</main>

<!-- FOOTER (same as index.php) -->
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

// Highlight the page-menu pill for the section being read
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