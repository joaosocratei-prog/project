<?php
/* contact.php | GS Kigeme A
   Edit the settings below, not the HTML. */

$pageTitle   = 'Contact Us | GS Kigeme A';
$current     = basename($_SERVER['PHP_SELF']);

// How the form sends messages:
//   'mailto' = opens the visitor's email app (works everywhere, nothing to set up)
//   'php'    = the server sends the email with mail() (needs a hosting with mail enabled)
$sendMethod  = 'mailto';
$schoolEmail = 'school@example.com'; // replace with the real school email

$school = [
    'address'   => ['GS Kigeme A', 'Kigeme, Nyamagabe District', 'Southern Province, Rwanda'],
    'phone'     => '[+250 ...]',      // text shown on the page
    'phoneLink' => '+250000000000',   // number used by the call link
    'emailText' => '[school email]',  // text shown on the page
];

// [label, time, days it covers (0 = Sunday ... 6 = Saturday)]
$hours = [
    ['Monday - Friday', '[7:30 AM - 5:00 PM]',  [1, 2, 3, 4, 5]],
    ['Saturday',        '[8:00 AM - 12:00 PM]', [6]],
    ['Sunday',          'Closed',               [0]],
];
date_default_timezone_set('Africa/Kigali');
$today = (int)date('w'); // used to highlight today's office hours

$faqs = [
    ['How do I apply for admission?', '[Describe the steps: collect the form, submit documents, wait for confirmation.]'],
    ['Can I visit the school?', '[Say when visitors are welcome and who to ask for at the gate.]'],
    ['Which programmes can my child join?', '[Mention O-Level, Stream 1, Stream 2, MCB, PCB and ANP.]'],
];

$topics = ['Admissions', 'Programmes (MCB, PCB, PCM)', 'General question', 'Other'];

$mapText = 'We are about ten kilometres from Nyamagabe town, close to Kigeme Cathedral and Kigeme Hospital.';
$mapUrl  = 'https://www.google.com/maps/place/Groupe+Scolaire+de+Kigeme/@-2.4815146,29.5276019,216m/data=!3m1!1e3!4m14!1m7!3m6!1s0x19c31900211fc65f:0x26bedc56755549c0!2sKigeme+TVET+School!8m2!3d-2.4832783!4d29.5284183!16s%2Fg%2F11w386hsx6!3m5!1s0x19c3195b9369d2dd:0x927a71ee5b5bb120!8m2!3d-2.4810353!4d29.5281161!16s%2Fg%2F11c2j3l7d1?authuser=0&entry=ttu&g_ep=EgoyMDI2MTAwNS4wIKXMDSoASAFQAw%3D%3D';

function e($text) { return htmlspecialchars((string)$text, ENT_QUOTES, 'UTF-8'); }

$menu = [
    'index.php'      => 'Home',
    'about.php'      => 'About',
    'discover.php'   => 'Discover',
    'academic.php'   => 'Academic',
    'activities.php' => 'Activities',
    'contact.php'    => 'Contact',
];

/* ---------- Form handling (only when $sendMethod = 'php') ---------- */
$old    = ['name' => '', 'email' => '', 'topic' => $topics[0], 'message' => ''];
$errors = [];
$sent   = false;

if ($sendMethod === 'php' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($old as $key => $unused) {
        $old[$key] = trim((string)($_POST[$key] ?? ''));
    }
    if (!empty($_POST['website'])) {
        $sent = true; // hidden spam trap was filled: pretend success, send nothing
    } else {
        if ($old['name'] === '')                                $errors[] = 'Please enter your name.';
        if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL))  $errors[] = 'Please enter a valid email address.';
        if (!in_array($old['topic'], $topics, true))            $errors[] = 'Please choose a topic.';
        if (mb_strlen($old['message']) < 5)                     $errors[] = 'Please write your message.';

        if (!$errors) {
            $subject = '[' . $old['topic'] . '] Message from ' . str_replace(["\r", "\n"], ' ', $old['name']);
            $body    = "Name: {$old['name']}\nEmail: {$old['email']}\n\n{$old['message']}";
            $headers = 'Reply-To: ' . $old['email'] . "\r\nContent-Type: text/plain; charset=UTF-8";
            if (@mail($schoolEmail, $subject, $body, $headers)) {
                $sent = true;
                $old  = ['name' => '', 'email' => '', 'topic' => $topics[0], 'message' => ''];
            } else {
                $errors[] = 'Sorry, your message could not be sent. Please email us directly.';
            }
        }
    }
}
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
.btn-outline-primary{--bs-btn-color:var(--blue);--bs-btn-border-color:var(--blue);--bs-btn-hover-bg:var(--blue);--bs-btn-hover-border-color:var(--blue);--bs-btn-active-bg:var(--blue)}
.btn-success{--bs-btn-bg:var(--green);--bs-btn-border-color:var(--green);--bs-btn-hover-bg:#17622f;--bs-btn-hover-border-color:#17622f}
.navbar .nav-link.active{font-weight:700;text-decoration:underline;text-underline-offset:8px}
.hero{background:linear-gradient(135deg,var(--blue),var(--green));position:relative;overflow:hidden}
.hero::before{content:"";position:absolute;width:420px;height:420px;border-radius:50%;background:rgba(255,255,255,.07);top:-160px;right:-120px}
.section-title{color:var(--blue)}
.section-title::after{content:"";display:block;width:52px;height:4px;border-radius:4px;background:var(--green);margin-top:10px}
.text-center .section-title::after{margin-inline:auto}
.info-card{transition:transform .25s,box-shadow .25s}
.info-card:hover{transform:translateY(-4px);box-shadow:0 12px 28px rgba(11,61,145,.16)!important}
.icon{flex:0 0 48px;height:48px;border-radius:50%;background:var(--blue);color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.3rem}
.form-control:focus,.form-select:focus{border-color:var(--blue);box-shadow:0 0 0 .25rem rgba(11,61,145,.15)}
.accordion-button:not(.collapsed){color:var(--blue);background:#e8f0fb}
.map-box{background:#e8f0fb}
.hp{position:absolute;left:-9999px}
@media(prefers-reduced-motion:reduce){*{transition:none!important}}
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
    <h1 class="display-5 fw-bold">Contact Us</h1>
    <p class="lead mx-auto" style="max-width:650px">Have a question about admissions, programmes or school life? Send us a message and we will get back to you.</p>
    <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
      <a class="btn btn-light rounded-pill px-4" href="tel:<?= e($school['phoneLink']) ?>">&#128222; Call us</a>
      <a class="btn btn-light rounded-pill px-4" href="mailto:<?= e($schoolEmail) ?>">&#9993; Email us</a>
      <a class="btn btn-light rounded-pill px-4" href="<?= e($mapUrl) ?>" target="_blank" rel="noopener">&#128205; Directions</a>
      <a class="btn btn-outline-light rounded-pill px-4" href="#form">&#9997; Send a message</a>
    </div>
  </div>
</header>

<main>
  <section class="container py-5" id="contact">
    <div class="row g-5">

      <div class="col-lg-5">
        <h2 class="section-title fw-bold mb-4">Get in Touch</h2>

        <div class="card info-card border-0 shadow-sm mb-3">
          <div class="card-body d-flex gap-3">
            <div class="icon">&#128205;</div>
            <div><h3 class="h6 text-success mb-1">Address</h3><p class="mb-0"><?= implode('<br>', array_map('e', $school['address'])) ?></p></div>
          </div>
        </div>
        <div class="card info-card border-0 shadow-sm mb-3">
          <div class="card-body d-flex gap-3">
            <div class="icon">&#128222;</div>
            <div>
              <h3 class="h6 text-success mb-1">Phone</h3>
              <p class="mb-0"><a href="tel:<?= e($school['phoneLink']) ?>"><?= e($school['phone']) ?></a>
                <button type="button" class="btn btn-sm btn-outline-primary rounded-pill ms-2 py-0" data-copy="<?= e($school['phoneLink']) ?>">Copy</button></p>
            </div>
          </div>
        </div>
        <div class="card info-card border-0 shadow-sm mb-3">
          <div class="card-body d-flex gap-3">
            <div class="icon">&#9993;</div>
            <div>
              <h3 class="h6 text-success mb-1">Email</h3>
              <p class="mb-0"><a href="mailto:<?= e($schoolEmail) ?>"><?= e($school['emailText']) ?></a>
                <button type="button" class="btn btn-sm btn-outline-primary rounded-pill ms-2 py-0" data-copy="<?= e($schoolEmail) ?>">Copy</button></p>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm">
          <div class="card-header bg-success-subtle fw-bold text-success">Office Hours</div>
          <ul class="list-group list-group-flush">
            <?php foreach ($hours as [$day, $time, $days]): $isToday = in_array($today, $days, true); ?>
              <li class="list-group-item d-flex justify-content-between gap-2<?= $isToday ? ' list-group-item-success fw-bold' : '' ?>">
                <span><?= e($day) ?><?php if ($isToday): ?> <span class="badge text-bg-success ms-1">Today</span><?php endif; ?></span>
                <span><?= e($time) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div class="col-lg-7" id="form">
        <h2 class="section-title fw-bold mb-4">Send a Message</h2>
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4">
            <form id="contactForm" method="post" action="<?= e($current) ?>#form" class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-md-6 form-floating">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your name" autocomplete="name" required value="<?= e($old['name']) ?>">
                  <label for="name">Full name</label>
                  <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="col-md-6 form-floating">
                  <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" autocomplete="email" required value="<?= e($old['email']) ?>">
                  <label for="email">Email</label>
                  <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="col-12 form-floating">
                  <select class="form-select" id="topic" name="topic">
                    <?php foreach ($topics as $t): ?>
                      <option<?= $old['topic'] === $t ? ' selected' : '' ?>><?= e($t) ?></option>
                    <?php endforeach; ?>
                  </select>
                  <label for="topic">Topic</label>
                </div>
                <div class="col-12 form-floating">
                  <textarea class="form-control" id="message" name="message" placeholder="Message" maxlength="1000" style="height:160px" required><?= e($old['message']) ?></textarea>
                  <label for="message">Message</label>
                  <div class="invalid-feedback">Please write your message.</div>
                </div>
                <div class="col-12 text-end small text-secondary mt-1"><span id="cnt">0</span> / 1000</div>
              </div>

              <div class="hp" aria-hidden="true"><input type="text" name="website" tabindex="-1" autocomplete="off"></div>

              <button type="submit" id="sendBtn" class="btn btn-success btn-lg rounded-pill w-100 mt-3 shadow">Send Message</button>
              <p class="small text-secondary mt-3 mb-0">
                <?= $sendMethod === 'mailto' ? 'This opens your email app with the message ready to send.' : 'Your message will be sent to the school office.' ?>
              </p>

              <?php if ($sent): ?>
                <div class="alert alert-success mt-3 mb-0" role="status">Thank you! Your message has been sent. We will reply soon.</div>
              <?php endif; ?>
              <?php if ($errors): ?>
                <div class="alert alert-danger mt-3 mb-0" role="alert"><ul class="mb-0"><?php foreach ($errors as $err): ?><li><?= e($err) ?></li><?php endforeach; ?></ul></div>
              <?php endif; ?>
              <div class="alert alert-success mt-3 mb-0 d-none" id="status" role="status">
                Your email app should open now. Press Send there to finish.
                <div class="small mt-1">Nothing opened? <button type="button" class="btn btn-sm btn-outline-success rounded-pill py-0" id="copyMsg">Copy message</button> and email it to <strong><?= e($schoolEmail) ?></strong>.</div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="container pb-5">
    <h2 class="section-title fw-bold mb-4">Quick Answers</h2>
    <div class="accordion shadow-sm" id="faq">
      <?php foreach ($faqs as $i => [$q, $a]): ?>
        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>" aria-expanded="false" aria-controls="faq<?= $i ?>"><?= e($q) ?></button>
          </h3>
          <div id="faq<?= $i ?>" class="accordion-collapse collapse" data-bs-parent="#faq">
            <div class="accordion-body text-secondary"><?= e($a) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="container pb-5">
    <div class="map-box rounded-4 text-center p-5">
      <h2 class="section-title fw-bold">Find Us</h2>
      <p class="text-secondary mx-auto mt-3" style="max-width:600px"><?= e($mapText) ?></p>
      <a class="btn btn-primary btn-lg rounded-pill px-5 shadow" href="<?= e($mapUrl) ?>" target="_blank" rel="noopener">Open in Google Maps</a>
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
  var form=document.getElementById('contactForm'),m=document.getElementById('message'),
      cnt=document.getElementById('cnt'),btn=document.getElementById('sendBtn'),up=document.getElementById('up');
  function count(){cnt.textContent=m.value.length;}
  m.addEventListener('input',count);count();

  function copy(text,el){
    var old=el.textContent;
    (navigator.clipboard?navigator.clipboard.writeText(text):Promise.reject()).then(function(){el.textContent='Copied!';},function(){el.textContent='Copy failed';});
    setTimeout(function(){el.textContent=old;},1600);
  }
  document.querySelectorAll('[data-copy]').forEach(function(b){b.addEventListener('click',function(){copy(b.dataset.copy,b);});});
  document.getElementById('copyMsg').addEventListener('click',function(){
    copy('Name: '+document.getElementById('name').value+'\nEmail: '+document.getElementById('email').value+'\n\n'+m.value,this);
  });

  form.addEventListener('submit',function(e){
    if(!form.checkValidity()){e.preventDefault();form.classList.add('was-validated');return;}
<?php if ($sendMethod === 'mailto'): ?>
    e.preventDefault();
    var to=<?= json_encode($schoolEmail) ?>,
        name=document.getElementById('name').value,email=document.getElementById('email').value,
        topic=document.getElementById('topic').value;
    var subject=encodeURIComponent('['+topic+'] Message from '+name);
    var body=encodeURIComponent('Name: '+name+'\nEmail: '+email+'\n\n'+m.value);
    window.location.href='mailto:'+to+'?subject='+subject+'&body='+body;
    document.getElementById('status').classList.remove('d-none');
<?php else: ?>
    btn.disabled=true;btn.textContent='Sending...';
<?php endif; ?>
  });

  addEventListener('scroll',function(){up.classList.toggle('d-none',scrollY<500);},{passive:true});
  up.addEventListener('click',function(){scrollTo({top:0,behavior:'smooth'});});
})();
</script>
</body>
</html>
