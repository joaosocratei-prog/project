<?php
session_start();
// =====================================================================
//  GS KIGEME A - HOME PAGE (index.php)
//  Edit the arrays below. The page builds itself from them.
//  Sections with empty data (news, events, headteacher, social) hide automatically.
// =====================================================================
$school = [
    'name'     => 'GS KIGEME A',
    'motto'    => 'Learning Today, Leading Tomorrow',
    'location' => 'Nyamagabe District, Rwanda',
    'phone'    => '0788600587',
    'email'    => 'gskigeme2@yahoo.com',
    'logo'     => 'images/gs logo.jpg',
];

// Shown as a bar at the very top. Leave '' to hide it.
$announcement = '';   // e.g. 'Admissions are open. Apply online today.'

$nav = [
    'index.php' => 'Home', 'about.php' => 'About', 'academic.php' => 'Academics',
    'students.php' => 'Students', 'teachers.php' => 'Teachers', 'gallery.php' => 'Gallery',
    'news.php' => 'News', 'contact.php' => 'Contact',
];

// Quick links under the hero
$quick = [
    ['📝', 'Apply for admission', 'Start your application online.',      'admission/index.php'],
    ['📖', 'Our academics',       'Ordinary and Advanced Level.',          'academic.php'],
    ['👩‍🏫', 'Our teachers',       'Meet the people who teach.',            'teachers.php'],
    ['📞', 'Contact the school',  'Phone, email and location.',            'contact.php'],
];

// Add your REAL numbers here, e.g. ['1,200', 'Students']. Items below are facts already on the site.
$stats = [
    ['2', 'Education levels'],
    ['5', 'Advanced Level combinations'],
    ['1', 'Caring school community'],
];

$aboutPoints = [
    'Encouraging academic achievement', 'Promoting discipline and respect',
    'Supporting learner participation', 'Preparing students for the future',
];

// Fill 'name' to show the message section. Write the message yourself or ask the headteacher for it.
$headteacher = ['name' => '', 'title' => 'Head Teacher', 'photo' => 'images/headteacher.jpg', 'message' => ''];

$combinations = ['MPC', 'MCB', 'PCB', 'MS1', 'MS2'];

$why = [
    ['📚', 'Quality education',     'Supporting learning, knowledge and academic growth.'],
    ['🤝', 'Discipline and values', 'Encouraging responsibility, respect and cooperation.'],
    ['🎓', 'Future-ready skills',   'Problem-solving, teamwork and independent thinking.'],
    ['⚽', 'Sports and activities', 'Building confidence, cooperation and healthy competition.'],
];

$studentLife = [
    ['images/students.jpg',   'Learners at school', 'Learning activities', 'Curiosity, participation and a strong commitment to learning.'],
    ['images/activities.jpg', 'School activities',  'School activities',   'Confidence, teamwork and communication skills.'],
    ['images/sports.jpg',     'School sports',      'Sports and teamwork', 'Cooperation, determination and healthy competition.'],
];

$admissionSteps = [
    ['Open the admission portal', 'Go to the Apply page on this website.'],
    ['Fill in the application form', 'Enter the learner details and follow the instructions.'],
    ['Submit and wait for the school', 'The school will contact you using the details you provide.'],
];

$gallery = [
    ['images/OVERVIEW.jpg', 'School overview'], ['images/students.jpg', 'School learners'],
    ['images/activities.jpg', 'School activities'], ['images/sports.jpg', 'School sports'],
];

// Verified news: ['date' => '2026-11-01', 'title' => '...', 'text' => '...']
$news = [];
// Events:        ['date' => '2026-12-05', 'title' => '...', 'place' => '...']
$events = [];

$faq = [
    ['How do I apply?',            'Use the Apply now button. It opens the admission portal with the application form and instructions.'],
    ['Which levels does the school offer?', 'Ordinary Level and Advanced Level. Advanced Level combinations are ' . implode(', ', $combinations) . '.'],
    ['How can I contact the school?', 'Call ' . $school['phone'] . ' or email ' . $school['email'] . '.'],
    ['Where is the school?',       $school['name'] . ' is in ' . $school['location'] . '.'],
];

// Parent/student voices. Only add REAL, permitted quotes: ['text' => '...', 'name' => '...', 'role' => 'Parent']
$testimonials = [];

// Downloadable files (put the files in a "downloads" folder): ['Admission form', 'downloads/admission-form.pdf']
$downloads = [];

// Social links: ['Facebook' => 'https://...']. Empty = hidden.
$social = [];

$currentPage = basename($_SERVER['PHP_SELF']);
function e($t) { return htmlspecialchars((string)$t, ENT_QUOTES, 'UTF-8'); }

// ---------- ENQUIRY FORM HANDLER ----------
if (empty($_SESSION['csrf'])) { $_SESSION['csrf'] = bin2hex(random_bytes(16)); }
$formError = '';
$formSent  = isset($_GET['sent']);
$old = ['name' => '', 'email' => '', 'phone' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enquiry'])) {
    foreach ($old as $k => $_) { $old[$k] = trim((string)($_POST[$k] ?? '')); }

    if (!hash_equals($_SESSION['csrf'], (string)($_POST['csrf'] ?? ''))) {
        $formError = 'Your session expired. Please try again.';
    } elseif (!empty($_POST['website'])) {
        // Honeypot field filled in: it's a bot. Pretend success.
        header('Location: index.php?sent=1#contact'); exit;
    } elseif ($old['name'] === '' || $old['message'] === '') {
        $formError = 'Please enter your name and your message.';
    } elseif (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $formError = 'Please enter a valid email address.';
    } elseif (mb_strlen($old['message']) > 2000 || mb_strlen($old['name']) > 100) {
        $formError = 'Your message or name is too long.';
    } else {
        $cleanName = str_replace(["\r", "\n"], ' ', $old['name']);
        $cleanMsg  = str_replace(["\r", "\n"], ' ', $old['message']);
        $dir = __DIR__ . '/data';
        if (!is_dir($dir)) {
            @mkdir($dir, 0755, true);
            @file_put_contents($dir . '/.htaccess', "Require all denied\n");   // blocks browser access to saved messages
        }
        $line = date('Y-m-d H:i') . ' | ' . $cleanName . ' | ' . $old['email'] . ' | ' . str_replace(["\r", "\n"], ' ', $old['phone']) . ' | ' . $cleanMsg . "\n";
        $saved = @file_put_contents($dir . '/messages.txt', $line, FILE_APPEND | LOCK_EX);
        @mail($school['email'], 'Website enquiry from ' . $cleanName,
              "Name: $cleanName\nEmail: {$old['email']}\nPhone: {$old['phone']}\n\n{$old['message']}",
              "Reply-To: {$old['email']}\r\nContent-Type: text/plain; charset=UTF-8");
        if ($saved === false) {
            $formError = 'Sorry, we could not save your message. Please call or email us instead.';
        } else {
            $_SESSION['csrf'] = bin2hex(random_bytes(16));
            header('Location: index.php?sent=1#contact'); exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($school['name']) ?> | <?= e($school['motto']) ?></title>
<meta name="description" content="<?= e($school['name']) ?> in <?= e($school['location']) ?>. <?= e($school['motto']) ?>. Admissions, academics, news and contact.">
<meta name="theme-color" content="#176b3a">
<meta property="og:title" content="<?= e($school['name']) ?>">
<meta property="og:description" content="<?= e($school['motto']) ?>">
<meta property="og:image" content="images/OVERVIEW.jpg">
<link rel="icon" href="<?= e($school['logo']) ?>">
<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org', '@type' => 'School',
    'name' => $school['name'], 'slogan' => $school['motto'],
    'telephone' => $school['phone'], 'email' => $school['email'],
    'address' => ['@type' => 'PostalAddress', 'addressRegion' => 'Nyamagabe District', 'addressCountry' => 'RW'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
</script>

<style>
:root{--green:#176b3a;--dark:#0c4525;--deep:#082e19;--tint:#edf7ef;--gold:#e0b32e;--text:#26352c;--gray:#55645b;--line:#dfe8e2;--shadow:0 8px 25px rgba(0,0,0,.09);--serif:Georgia,"Times New Roman",serif;--sans:system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:var(--sans);color:var(--text);line-height:1.7;background:#fff}
a{text-decoration:none;color:inherit}
img{max-width:100%;display:block}
h1,h2,h3{font-family:var(--serif)}
:focus-visible{outline:3px solid var(--gold);outline-offset:3px;border-radius:4px}
.skip{position:absolute;left:12px;top:-60px;z-index:2000;background:var(--gold);color:#17251b;padding:10px 16px;border-radius:6px;font-weight:bold}
.skip:focus{top:12px}

.topbar{background:var(--gold);color:#17251b;text-align:center;padding:8px 6%;font-size:14px;font-weight:600}
.infobar{background:var(--deep);color:#d7e8dc;font-size:13px;padding:6px 6%;display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}
.infobar a{color:#fff}.infobar a:hover{color:var(--gold)}

header{background:#fff;padding:10px 6%;display:flex;align-items:center;justify-content:space-between;gap:20px;position:sticky;top:0;z-index:1000;box-shadow:0 2px 12px rgba(0,0,0,.08)}
.brand{display:flex;align-items:center;gap:12px}
.brand img{width:56px;height:56px;object-fit:contain}
.brand strong{display:block;color:var(--green);font:bold 21px/1.2 var(--serif)}
.brand small{display:block;font-size:12px;color:var(--gray)}
nav ul{list-style:none;display:flex;align-items:center;gap:4px}
nav a{display:block;padding:8px 12px;font-size:14px;font-weight:600;border-radius:6px;transition:background .2s,color .2s}
nav a:hover{background:var(--tint);color:var(--green)}
nav a.active{color:var(--green);box-shadow:inset 0 -3px 0 var(--gold);border-radius:6px 6px 0 0}
nav a.apply{background:var(--green);color:#fff;margin-left:8px;padding:10px 18px;box-shadow:none;border-radius:6px}
nav a.apply:hover{background:var(--dark)}
.menu-toggle{display:none;background:var(--green);color:#fff;border:0;border-radius:6px;padding:9px 14px;font:bold 14px var(--sans);cursor:pointer}

.hero{min-height:620px;display:flex;align-items:center;padding:80px 8% 110px;color:#fff;background:linear-gradient(90deg,rgba(5,45,23,.92),rgba(5,45,23,.45)),url("images/OVERVIEW.jpg") center/cover no-repeat,var(--dark)}
.hero-content{max-width:700px;animation:rise .8s ease both}
.tag{display:inline-block;background:var(--gold);color:#202820;padding:5px 14px;border-radius:30px;font-size:13px;font-weight:bold;margin-bottom:18px}
.hero h1{font-size:clamp(36px,5.5vw,64px);line-height:1.12;margin-bottom:18px}
.hero h1 span{color:var(--gold)}
.hero p{font-size:18px;margin-bottom:28px;max-width:600px}
.button{display:inline-block;padding:13px 24px;border-radius:6px;font-weight:bold;margin:5px 8px 5px 0;transition:transform .2s,background .2s;border:0;cursor:pointer;font-size:16px}
.button:hover{transform:translateY(-2px)}
.gold{background:var(--gold);color:#17251b}.gold:hover{background:#ecc243}
.outline{border:2px solid #fff;color:#fff}.outline:hover{background:rgba(255,255,255,.12)}

section{padding:80px 8%;scroll-margin-top:90px}
.heading{text-align:center;max-width:700px;margin:0 auto 42px}
.heading h2{color:var(--dark);font-size:clamp(27px,4vw,38px);line-height:1.25;margin-bottom:12px}
.heading p{color:var(--gray)}
.center{text-align:center;margin-top:30px}
.grid{display:grid;gap:22px}
.g3{grid-template-columns:repeat(3,1fr)}.g4{grid-template-columns:repeat(4,1fr)}

.quick{padding-top:0;margin-top:-60px;position:relative;z-index:2}
.quick a{background:#fff;padding:24px;border-radius:12px;box-shadow:var(--shadow);border-top:4px solid var(--gold);transition:transform .2s;display:block}
.quick a:hover{transform:translateY(-4px)}
.quick .ic{font-size:30px}
.quick h3{color:var(--green);font-size:18px;margin:6px 0 2px}
.quick p{color:var(--gray);font-size:14px}

.stats{background:var(--green);color:#fff;padding:44px 8%}
.stats .grid{text-align:center}
.stats b{display:block;font:bold 44px/1.1 var(--serif);color:var(--gold)}
.stats span{font-size:15px}

.split{display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:48px}
.photo{background:var(--tint);border-radius:14px;overflow:hidden}
.photo img{width:100%;height:420px;object-fit:cover;box-shadow:var(--shadow)}
.split h2{color:var(--dark);font-size:clamp(26px,3.5vw,36px);line-height:1.25;margin-bottom:18px}
.split p{color:var(--gray);margin-bottom:14px;max-width:60ch}
.checks{list-style:none;margin:20px 0 24px}
.checks li{margin-bottom:8px}
.checks li::before{content:"✓";color:var(--green);font-weight:bold;margin-right:10px}

.message{background:var(--tint)}
.message blockquote{font:italic 20px/1.7 var(--serif);color:var(--dark);margin-bottom:16px;max-width:60ch}
.message cite{font-style:normal;font-weight:bold;color:var(--green)}

.tint{background:var(--tint)}
.card{background:#fff;padding:28px;border-radius:12px;box-shadow:var(--shadow);border-bottom:4px solid var(--green)}
.card .ic{font-size:32px}
.card h3{color:var(--green);margin:8px 0}
.card p{color:var(--gray);font-size:15px}
.chips{display:flex;flex-wrap:wrap;gap:8px;margin-top:12px}
.chips span{background:var(--tint);color:var(--dark);padding:5px 12px;border-radius:5px;font-size:13px;font-weight:bold}
.acad{display:flex;flex-direction:column;align-items:flex-start}
.acad p{flex-grow:1;margin-bottom:16px}

.scard{border-radius:12px;overflow:hidden;background:#fff;box-shadow:var(--shadow)}
.scard .photo{border-radius:0;height:220px}
.scard img{height:220px;box-shadow:none}
.scard .body{padding:22px}
.scard h3{color:var(--green);margin-bottom:6px}
.scard p{color:var(--gray);font-size:15px}

.motto{text-align:center;background:var(--dark);color:#fff;padding:60px 8%}
.motto h2{font-size:clamp(25px,4vw,40px);margin-bottom:10px}
.motto h2 span{color:var(--gold)}
.motto p{color:#e1eee5}

.steps{counter-reset:s;list-style:none;display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.steps li{counter-increment:s;background:#fff;border-radius:12px;padding:28px;box-shadow:var(--shadow);position:relative}
.steps li::before{content:counter(s);display:grid;place-items:center;width:38px;height:38px;border-radius:50%;background:var(--gold);color:#17251b;font-weight:bold;margin-bottom:12px}
.steps h3{color:var(--green);margin-bottom:6px}
.steps p{color:var(--gray);font-size:15px}

.gal a{display:block;overflow:hidden;border-radius:10px;background:var(--tint)}
.gal img{width:100%;height:220px;object-fit:cover;transition:transform .35s}
.gal a:hover img{transform:scale(1.05)}

.two{display:grid;grid-template-columns:2fr 1fr;gap:28px}
.ncard{padding:24px;background:#fff;border:1px solid var(--line);border-left:4px solid var(--gold);border-radius:10px}
.ncard time{font-size:13px;color:var(--gray)}
.ncard h3{color:var(--green);margin:2px 0 6px}
.ncard p{color:var(--gray);font-size:15px}
.note{margin-top:20px;text-align:center;font-size:13px;color:var(--gray)}
.events h3.t{color:var(--dark);margin-bottom:12px}
.ev{display:flex;gap:14px;align-items:center;margin-bottom:14px}
.ev .d{min-width:58px;text-align:center;background:var(--green);color:#fff;border-radius:8px;padding:6px 4px;line-height:1.2}
.ev .d b{display:block;font-size:22px}.ev .d small{font-size:12px}
.ev p{font-size:14px;color:var(--gray)}.ev strong{display:block;color:var(--text)}

.faq{max-width:800px;margin:0 auto}
details{background:#fff;border:1px solid var(--line);border-radius:10px;margin-bottom:12px}
summary{cursor:pointer;padding:16px 20px;font-weight:bold;color:var(--dark);list-style:none;display:flex;justify-content:space-between;gap:12px}
summary::-webkit-details-marker{display:none}
summary::after{content:"+";color:var(--green);font-size:22px;line-height:1}
details[open] summary::after{content:"−"}
details p{padding:0 20px 18px;color:var(--gray)}

.cta{background:linear-gradient(90deg,var(--green),var(--dark));color:#fff;text-align:center}
.cta h2{font-size:clamp(26px,4vw,36px);margin-bottom:10px}
.cta p{max-width:620px;margin:0 auto 22px;color:#e1eee5}

.contact{background:var(--dark);color:#fff}
.contact .heading h2{color:#fff}.contact .heading p{color:#d7e8dc}
.ccard{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:10px;padding:26px;text-align:center}
.ccard h3{color:var(--gold);margin-bottom:6px}
.ccard a{text-decoration:underline;text-underline-offset:3px}
.ccard p,.ccard a{color:#fff;overflow-wrap:anywhere}

footer{background:var(--deep);color:#d7e8dc;padding:50px 8% 22px;font-size:14px}
.fgrid{display:grid;grid-template-columns:2fr 1fr 1fr;gap:30px;margin-bottom:30px}
footer h3{color:var(--gold);font-size:16px;margin-bottom:10px}
footer ul{list-style:none}footer li{margin-bottom:6px}
footer a:hover{color:var(--gold)}
.copy{border-top:1px solid rgba(255,255,255,.15);padding-top:16px;text-align:center;font-size:13px}

.top{position:fixed;right:18px;bottom:18px;width:44px;height:44px;border:0;border-radius:50%;background:var(--green);color:#fff;font-size:20px;cursor:pointer;box-shadow:var(--shadow);opacity:0;pointer-events:none;transition:opacity .25s;z-index:900}
.top.show{opacity:1;pointer-events:auto}
@keyframes rise{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:none}}

@media(max-width:1000px){
 .menu-toggle{display:block}
 nav{position:absolute;left:0;right:0;top:100%;background:#fff;box-shadow:0 10px 20px rgba(0,0,0,.1);display:none;padding:10px 6% 18px}
 nav.open{display:block}
 nav ul{flex-direction:column;align-items:stretch;gap:2px}
 nav a.active{box-shadow:inset 4px 0 0 var(--gold);border-radius:6px}
 nav a.apply{margin:8px 0 0;text-align:center}
 .g4{grid-template-columns:repeat(2,1fr)}
 .g3{grid-template-columns:repeat(2,1fr)}
 .two{grid-template-columns:1fr}
}
@media(max-width:700px){
 .hero{min-height:540px;padding:60px 6% 100px}
 section{padding:56px 6%}
 .g3,.g4,.split,.steps,.fgrid{grid-template-columns:1fr}
 .gal.g4{grid-template-columns:repeat(2,1fr)}
 .gal img{height:150px}
 .photo img{height:280px}
 .brand strong{font-size:18px}.brand img{width:46px;height:46px}
 .infobar{justify-content:center;text-align:center}
}
@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*{animation:none!important;transition:none!important}}

.quote{background:#fff;border-radius:12px;padding:28px;box-shadow:var(--shadow)}
.quote p{font:italic 17px/1.7 var(--serif);color:var(--dark);margin-bottom:12px}
.quote b{color:var(--green)}.quote small{display:block;color:var(--gray)}
.dl{max-width:700px;margin:0 auto;list-style:none}
.dl a{display:flex;justify-content:space-between;gap:12px;background:#fff;border:1px solid var(--line);border-radius:10px;padding:14px 18px;margin-bottom:10px;font-weight:600;color:var(--dark)}
.dl a:hover{border-color:var(--green)}.dl a::after{content:"⬇";color:var(--green)}
.cform{background:#fff;color:var(--text);border-radius:12px;padding:28px}
.cform h3{font-family:var(--serif);color:var(--dark);margin-bottom:14px}
.cform label{display:block;font-weight:600;font-size:14px;margin:12px 0 4px}
.cform input,.cform textarea{width:100%;padding:11px 12px;border:1px solid #b9c7bd;border-radius:6px;font:inherit}
.cform input:focus,.cform textarea:focus{border-color:var(--green);outline:3px solid rgba(23,107,58,.25)}
.cform .hp{position:absolute;left:-9999px}
.alert{padding:12px 16px;border-radius:8px;margin-bottom:12px;font-size:14px}
.alert.ok{background:#e3f5e8;color:#0c4525}.alert.err{background:#fde8e8;color:#8a1f1f}
.cwrap{display:grid;grid-template-columns:1fr 1fr;gap:22px;margin-top:22px}
.map{border:0;width:100%;height:100%;min-height:360px;border-radius:12px;background:var(--tint)}
@media(max-width:1000px){.cwrap{grid-template-columns:1fr}}
</style>
</head>

<body>
<a class="skip" href="#main">Skip to main content</a>

<?php if ($announcement !== ''): ?>
<div class="topbar" role="status"><?= e($announcement) ?></div>
<?php endif; ?>

<div class="infobar">
    <span>📍 <?= e($school['location']) ?></span>
    <span><a href="tel:<?= e($school['phone']) ?>">📞 <?= e($school['phone']) ?></a> &nbsp; <a href="mailto:<?= e($school['email']) ?>">✉️ <?= e($school['email']) ?></a></span>
</div>

<header>
    <a class="brand" href="index.php" aria-label="<?= e($school['name']) ?> home">
        <img src="<?= e($school['logo']) ?>" alt="" onerror="this.style.display='none'">
        <span><strong><?= e($school['name']) ?></strong><small><?= e($school['motto']) ?></small></span>
    </a>
    <button class="menu-toggle" id="menuToggle" aria-expanded="false" aria-controls="mainNav">Menu</button>
    <nav id="mainNav" aria-label="Main navigation">
        <ul>
            <?php foreach ($nav as $file => $label): ?>
                <li><a href="<?= e($file) ?>"<?= $file === $currentPage ? ' class="active" aria-current="page"' : '' ?>><?= e($label) ?></a></li>
            <?php endforeach; ?>
            <li><a href="admission/index.php" class="apply">Apply now</a></li>
        </ul>
    </nav>
</header>

<main id="main">

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <span class="tag">Welcome to our school</span>
        <h1>Welcome to <span><?= e($school['name']) ?></span></h1>
        <p>We support learners through education, discipline, knowledge, skills and personal development. Together, we prepare students for a brighter future.</p>
        <a href="about.php" class="button gold">Discover our school</a>
        <a href="admission/index.php" class="button outline">Apply for admission</a>
    </div>
</section>

<!-- QUICK LINKS -->
<section class="quick" aria-label="Quick links">
    <div class="grid g4">
        <?php foreach ($quick as [$ic, $t, $d, $href]): ?>
            <a href="<?= e($href) ?>"><div class="ic" aria-hidden="true"><?= $ic ?></div><h3><?= e($t) ?></h3><p><?= e($d) ?></p></a>
        <?php endforeach; ?>
    </div>
</section>

<!-- STATS -->
<div class="stats">
    <div class="grid g3">
        <?php foreach ($stats as [$num, $label]): ?>
            <div><b><?= e($num) ?></b><span><?= e($label) ?></span></div>
        <?php endforeach; ?>
    </div>
</div>

<!-- ABOUT -->
<section id="about">
    <div class="split">
        <div class="photo"><img src="images/OVERVIEW.jpg" alt="Overview of <?= e($school['name']) ?>" loading="lazy" onerror="this.style.display='none'"></div>
        <div>
            <h2>Building knowledge, character and opportunity</h2>
            <p><?= e($school['name']) ?> is a school in <?= e($school['location']) ?>. We provide an environment that encourages learning, personal responsibility and growth.</p>
            <p>Our school community works to develop learners who contribute positively to society.</p>
            <ul class="checks">
                <?php foreach ($aboutPoints as $p): ?><li><?= e($p) ?></li><?php endforeach; ?>
            </ul>
            <a href="about.php" class="button gold">Learn more about us</a>
        </div>
    </div>
</section>

<!-- HEADTEACHER MESSAGE (hidden until filled) -->
<?php if ($headteacher['name'] !== '' && $headteacher['message'] !== ''): ?>
<section class="message" id="message">
    <div class="split">
        <div>
            <h2>A message from our school leader</h2>
            <blockquote><?= e($headteacher['message']) ?></blockquote>
            <cite><?= e($headteacher['name']) ?>, <?= e($headteacher['title']) ?></cite>
        </div>
        <div class="photo"><img src="<?= e($headteacher['photo']) ?>" alt="<?= e($headteacher['name']) ?>" loading="lazy" onerror="this.style.display='none'"></div>
    </div>
</section>
<?php endif; ?>

<!-- ACADEMICS -->
<section class="tint" id="academics">
    <div class="heading"><h2>Learning for a better future</h2><p>Discover the levels and subject combinations offered at <?= e($school['name']) ?>.</p></div>
    <div class="grid g3">
        <div class="card acad"><div class="ic" aria-hidden="true">📖</div><h3>Ordinary Level</h3><p>Helps learners build foundational knowledge and skills across subjects.</p><a href="academic.php" class="button gold">Explore academics</a></div>
        <div class="card acad"><div class="ic" aria-hidden="true">🔬</div><h3>Advanced Level</h3><p>Lets learners focus on a subject combination and prepare for further study.</p>
            <div class="chips"><?php foreach ($combinations as $c): ?><span><?= e($c) ?></span><?php endforeach; ?></div></div>
        <div class="card acad"><div class="ic" aria-hidden="true">🌟</div><h3>Skills and development</h3><p>Learning is supported by responsibility, problem-solving, teamwork and independent thinking.</p><a href="students.php" class="button gold">Student life</a></div>
    </div>
</section>

<!-- WHY US -->
<section id="why">
    <div class="heading"><h2>Why families choose <?= e($school['name']) ?></h2><p>The values and habits we build in every learner.</p></div>
    <div class="grid g4">
        <?php foreach ($why as [$ic, $t, $d]): ?>
            <div class="card"><div class="ic" aria-hidden="true"><?= $ic ?></div><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div>
        <?php endforeach; ?>
    </div>
</section>

<!-- STUDENT LIFE -->
<section class="tint" id="students">
    <div class="heading"><h2>Learning beyond the classroom</h2><p>Academic activities, sports, teamwork and chances to develop new skills.</p></div>
    <div class="grid g3">
        <?php foreach ($studentLife as [$img, $alt, $t, $d]): ?>
            <article class="scard">
                <div class="photo"><img src="<?= e($img) ?>" alt="<?= e($alt) ?>" loading="lazy" onerror="this.style.display='none'"></div>
                <div class="body"><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- MOTTO -->
<section class="motto" aria-label="School motto">
    <h2>Learning Today, <span>Leading Tomorrow</span></h2>
    <p>Knowledge opens doors. Discipline builds character. Education helps shape the future.</p>
</section>

<!-- ADMISSION STEPS -->
<section id="admission">
    <div class="heading"><h2>How to join our school</h2><p>Applying takes three simple steps.</p></div>
    <ol class="steps">
        <?php foreach ($admissionSteps as [$t, $d]): ?>
            <li><h3><?= e($t) ?></h3><p><?= e($d) ?></p></li>
        <?php endforeach; ?>
    </ol>
    <div class="center"><a href="admission/index.php" class="button gold">Start your application</a></div>
</section>

<!-- GALLERY -->
<section class="tint" id="gallery">
    <div class="heading"><h2>A glimpse of school life</h2><p>Photographs of our school, learning environment and activities.</p></div>
    <div class="grid g4 gal">
        <?php foreach ($gallery as [$img, $alt]): ?>
            <a href="gallery.php"><img src="<?= e($img) ?>" alt="<?= e($alt) ?>" loading="lazy" onerror="this.style.display='none'"></a>
        <?php endforeach; ?>
    </div>
    <div class="center"><a href="gallery.php" class="button gold">View full gallery</a></div>
</section>

<!-- NEWS + EVENTS -->
<section id="news">
    <div class="heading"><h2>News and events</h2><p>Verified announcements, academic updates and important information.</p></div>
    <div class="<?= !empty($events) ? 'two' : '' ?>">
        <div class="grid <?= !empty($events) ? '' : 'g3' ?>">
            <?php if (!empty($news)): foreach ($news as $n): ?>
                <article class="ncard">
                    <time datetime="<?= e($n['date']) ?>"><?= e(date('j F Y', strtotime($n['date']))) ?></time>
                    <h3><?= e($n['title']) ?></h3><p><?= e($n['text']) ?></p>
                </article>
            <?php endforeach; else: ?>
                <article class="ncard"><h3>Academic announcements</h3><p>Check official school communications for learning activities, assessments and academic dates.</p></article>
                <article class="ncard"><h3>School activities</h3><p>Follow confirmed updates about school events, student activities and community participation.</p></article>
                <article class="ncard"><h3>Important notices</h3><p>Read official notices about school programmes, admission information and other announcements.</p></article>
            <?php endif; ?>
        </div>
        <?php if (!empty($events)): ?>
        <aside class="events">
            <h3 class="t">Upcoming events</h3>
            <?php foreach ($events as $ev): $ts = strtotime($ev['date']); ?>
                <div class="ev">
                    <div class="d"><b><?= e(date('j', $ts)) ?></b><small><?= e(date('M', $ts)) ?></small></div>
                    <p><strong><?= e($ev['title']) ?></strong><?= e($ev['place'] ?? '') ?></p>
                </div>
            <?php endforeach; ?>
        </aside>
        <?php endif; ?>
    </div>
    <?php if (empty($news)): ?><p class="note">These are news categories, not reports of recent events. Add verified news to <code>$news</code> at the top of this file.</p><?php endif; ?>
    <div class="center"><a href="news.php" class="button gold">Visit news page</a></div>
</section>

<!-- TESTIMONIALS (hidden until filled) -->
<?php if (!empty($testimonials)): ?>
<section id="voices">
    <div class="heading"><h2>What people say about us</h2></div>
    <div class="grid g3">
        <?php foreach ($testimonials as $q): ?>
            <figure class="quote"><p>“<?= e($q['text']) ?>”</p><b><?= e($q['name']) ?></b><small><?= e($q['role'] ?? '') ?></small></figure>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<!-- DOWNLOADS (hidden until filled) -->
<?php if (!empty($downloads)): ?>
<section class="tint" id="downloads">
    <div class="heading"><h2>Downloads</h2><p>Forms and documents from the school.</p></div>
    <ul class="dl"><?php foreach ($downloads as [$label, $file]): ?><li><a href="<?= e($file) ?>" download><?= e($label) ?></a></li><?php endforeach; ?></ul>
</section>
<?php endif; ?>

<!-- FAQ -->
<section class="tint" id="faq">
    <div class="heading"><h2>Frequently asked questions</h2></div>
    <div class="faq">
        <?php foreach ($faq as [$q, $a]): ?>
            <details><summary><?= e($q) ?></summary><p><?= e($a) ?></p></details>
        <?php endforeach; ?>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="cta">
    <h2>Join the <?= e($school['name']) ?> community</h2>
    <p>Interested in joining our school? Visit the admission portal to find the application form and follow the instructions.</p>
    <a href="admission/index.php" class="button gold">Apply for admission</a>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
    <div class="heading"><h2>Get in touch with our school</h2><p>Contact <?= e($school['name']) ?> for school information and enquiries.</p></div>
    <div class="grid g3">
        <div class="ccard"><h3>📍 Location</h3><p><?= e($school['location']) ?></p>
            <p><a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($school['name'] . ' ' . $school['location']) ?>" target="_blank" rel="noopener">Open in Google Maps</a></p></div>
        <div class="ccard"><h3>📞 Phone</h3><p><a href="tel:<?= e($school['phone']) ?>"><?= e($school['phone']) ?></a></p></div>
        <div class="ccard"><h3>✉️ Email</h3><p><a href="mailto:<?= e($school['email']) ?>"><?= e($school['email']) ?></a></p></div>
    </div>
    <div class="cwrap">
        <form class="cform" method="post" action="index.php#contact" novalidate>
            <h3>Send us a message</h3>
            <?php if ($formSent): ?><div class="alert ok" role="status">Thank you. Your message was sent. We will reply soon.</div><?php endif; ?>
            <?php if ($formError !== ''): ?><div class="alert err" role="alert"><?= e($formError) ?></div><?php endif; ?>
            <input type="hidden" name="enquiry" value="1">
            <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
            <input class="hp" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
            <label for="f-name">Your name</label>
            <input id="f-name" name="name" required maxlength="100" value="<?= e($old['name']) ?>" autocomplete="name">
            <label for="f-email">Email</label>
            <input id="f-email" name="email" type="email" required value="<?= e($old['email']) ?>" autocomplete="email">
            <label for="f-phone">Phone (optional)</label>
            <input id="f-phone" name="phone" type="tel" maxlength="30" value="<?= e($old['phone']) ?>" autocomplete="tel">
            <label for="f-msg">Message</label>
            <textarea id="f-msg" name="message" rows="5" required maxlength="2000"><?= e($old['message']) ?></textarea>
            <button class="button gold" type="submit" style="margin-top:14px">Send message</button>
        </form>
        <iframe class="map" title="Map of <?= e($school['name']) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q=<?= urlencode($school['name'] . ' ' . $school['location']) ?>&output=embed"></iframe>
    </div>
</section>

</main>

<footer>
    <div class="fgrid">
        <div>
            <h3><?= e($school['name']) ?></h3>
            <p><?= e($school['motto']) ?>.</p>
            <p><?= e($school['location']) ?></p>
            <?php if (!empty($social)): ?>
                <p><?php foreach ($social as $name => $url): ?><a href="<?= e($url) ?>" target="_blank" rel="noopener"><?= e($name) ?></a> &nbsp;<?php endforeach; ?></p>
            <?php endif; ?>
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
    <div class="copy">&copy; <?= date('Y') ?> <?= e($school['name']) ?>. All rights reserved.</div>
</footer>

<button class="top" id="toTop" aria-label="Back to top">↑</button>

<script>
const t=document.getElementById('menuToggle'),n=document.getElementById('mainNav');
const close=()=>{n.classList.remove('open');t.setAttribute('aria-expanded','false');t.textContent='Menu'};
t.addEventListener('click',()=>{const o=n.classList.toggle('open');t.setAttribute('aria-expanded',o);t.textContent=o?'Close':'Menu'});
n.querySelectorAll('a').forEach(a=>a.addEventListener('click',close));
document.addEventListener('keydown',e=>{if(e.key==='Escape')close()});
const b=document.getElementById('toTop');
addEventListener('scroll',()=>b.classList.toggle('show',scrollY>600),{passive:true});
b.addEventListener('click',()=>scrollTo({top:0,behavior:'smooth'}));
</script>
</body>
</html>
