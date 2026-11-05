<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Mission | GS Kigeme A</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:Segoe UI,Arial,sans-serif;color:#1f2937;line-height:1.7;background:#f9fafb}

nav{background:#0b3d91;padding:12px 20px;text-align:center;position:sticky;top:0;z-index:10}
nav a{color:#fff;text-decoration:none;margin:0 10px;font-weight:600;display:inline-block}
nav a:hover,nav a.active{text-decoration:underline}

header{background:linear-gradient(135deg,#0b3d91,#1e7a3c);color:#fff;text-align:center;padding:80px 20px}
header h1{font-size:2.4rem;margin-bottom:10px}
header p{max-width:650px;margin:auto;opacity:.95;font-style:italic}
.quick{display:flex;flex-wrap:wrap;justify-content:center;gap:10px;margin-top:24px}
.quick a{background:rgba(255,255,255,.15);color:#fff;text-decoration:none;padding:8px 16px;border-radius:20px;font-size:.9rem;font-style:normal}
.quick a:hover{background:rgba(255,255,255,.3)}

section{max-width:1000px;margin:auto;padding:50px 20px}
section.alt{max-width:none;background:#e8f0fb}
section.alt .inner{max-width:1000px;margin:auto}
h2{color:#0b3d91;margin-bottom:8px;font-size:1.7rem}
.lead{color:#475569;margin-bottom:20px}

/* Big statement boxes */
.statement{background:#fff;border-left:6px solid #1e7a3c;border-radius:10px;padding:28px 30px;box-shadow:0 2px 8px rgba(0,0,0,.08);font-size:1.15rem}
.statement + .statement{border-left-color:#0b3d91;margin-top:20px}
.statement small{display:block;text-transform:uppercase;letter-spacing:.06em;font-weight:700;color:#1e7a3c;margin-bottom:6px;font-size:.8rem}
.statement + .statement small{color:#0b3d91}

/* Cards */
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:20px;margin-top:20px}
.card{background:#fff;padding:24px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.card h3{color:#1e7a3c;margin-bottom:6px}
.num{display:inline-flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:50%;background:#0b3d91;color:#fff;font-weight:700;margin-bottom:10px}
.todo{border:2px dashed #e0a800;background:#fff8e1}
.todo h3{color:#7a5b00}

/* Commitments list */
.commit{list-style:none;margin-top:20px}
.commit li{background:#fff;border-radius:10px;padding:16px 20px 16px 56px;margin-bottom:12px;position:relative;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.commit li::before{content:"\2713";position:absolute;left:18px;top:14px;width:26px;height:26px;border-radius:50%;background:#1e7a3c;color:#fff;font-weight:700;display:flex;align-items:center;justify-content:center;font-size:.9rem}
.commit li.todo{border:2px dashed #e0a800;background:#fff8e1}
.commit li.todo::before{background:#e0a800}

/* Quote */
.quote{text-align:center;max-width:760px;margin:auto}
.quote blockquote{font-size:1.5rem;color:#0b3d91;font-weight:600;line-height:1.5}
.quote cite{display:block;margin-top:10px;color:#475569;font-style:normal;font-size:.95rem}

/* Help box */
.help{background:#fff8e1;border:1px dashed #e0a800;border-radius:10px;padding:24px}
.help h2{font-size:1.3rem;color:#7a5b00}
.help ol{margin:10px 0 0 20px}

.contact-box{background:#e6f4ea;border-radius:10px;padding:30px;text-align:center}
.contact-box a{display:inline-block;margin-top:12px;background:#1e7a3c;color:#fff;text-decoration:none;padding:12px 26px;border-radius:8px;font-weight:600}

footer{text-align:center;padding:20px;background:#0b3d91;color:#fff;font-size:.9rem}

@media(max-width:600px){header h1{font-size:1.8rem}nav a{margin:4px 6px}.statement{padding:22px}}
</style>
</head>
<body>

<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="mission.php" class="active">Mission</a>
  <a href="discover.php">Discover</a>
  <a href="academic.php">Academic</a>
  <a href="activities.php">Activities</a>
  <a href="contact.php">Contact</a>
</nav>

<header>
  <h1>Our Mission</h1>
  <p>Educating today's learners to lead tomorrow.</p>
  <div class="quick">
    <a href="#statement">Mission &amp; Vision</a>
    <a href="#values">Core Values</a>
    <a href="#goals">Our Goals</a>
    <a href="#commitments">Our Commitments</a>
    <a href="#motto">Our Motto</a>
  </div>
</header>

<!-- ================= MISSION & VISION ================= -->
<section id="statement">
  <h2>Mission &amp; Vision</h2>
  <p class="lead">Why we exist and where we are going.</p>

  <div class="statement">
    <small>Our Mission</small>
    To provide quality, inclusive and competence-based education that equips every learner with the knowledge, practical skills and moral values needed to succeed in life and contribute to the development of their community and nation.
  </div>

  <div class="statement">
    <small>Our Vision</small>
    To be a leading centre of academic excellence in Nyamagabe District, nurturing responsible, innovative and patriotic citizens who are ready to lead tomorrow.
  </div>
</section>

<!-- ================= CORE VALUES ================= -->
<section id="values" class="alt">
  <div class="inner">
    <h2>Our Core Values</h2>
    <p class="lead">The principles that guide every decision and every lesson.</p>
    <div class="grid">
      <div class="card">
        <h3>Discipline</h3>
        <p>We uphold order, responsibility and self-control.</p>
      </div>
      <div class="card">
        <h3>Respect</h3>
        <p>We value every person and every opinion.</p>
      </div>
      <div class="card">
        <h3>Hard Work</h3>
        <p>We pursue excellence through effort and perseverance.</p>
      </div>
      <div class="card">
        <h3>Integrity</h3>
        <p>We act with honesty and fairness.</p>
      </div>
      <div class="card">
        <h3>Patriotism</h3>
        <p>We love our country and serve it with pride.</p>
      </div>
      <!-- ADD A VALUE: copy one <div class="card">...</div> block and paste it here -->
      <div class="card todo">
        <h3>[Add another value]</h3>
        <p>[Example: Innovation, Teamwork, Care for the environment. Explain it in one sentence.]</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= GOALS ================= -->
<section id="goals">
  <h2>Our Goals</h2>
  <p class="lead">What we work to achieve. Add or change goals as the school decides.</p>
  <div class="grid">
    <div class="card">
      <span class="num">1</span>
      <h3>Academic Excellence</h3>
      <p>[Describe the goal, for example improving national exam results in every stream and combination.]</p>
    </div>
    <div class="card">
      <span class="num">2</span>
      <h3>Innovation &amp; Technology</h3>
      <p>Encourage creativity, ICT and problem solving in every classroom.</p>
    </div>
    <div class="card">
      <span class="num">3</span>
      <h3>Character &amp; Values</h3>
      <p>[Describe how the school builds discipline, respect and integrity.]</p>
    </div>
    <!-- ADD A GOAL: copy one block, paste it here, and change the number -->
    <div class="card todo">
      <span class="num">4</span>
      <h3>[Add another goal]</h3>
      <p>[Describe it here.]</p>
    </div>
  </div>
</section>

<!-- ================= COMMITMENTS ================= -->
<section id="commitments" class="alt">
  <div class="inner">
    <h2>Our Commitments</h2>
    <p class="lead">What students, parents and the community can expect from us.</p>
    <ul class="commit">
      <li><b>To our students:</b> a safe, inclusive school where every learner is supported to reach their potential.</li>
      <li><b>To parents:</b> [Describe the commitment, for example regular communication about progress.]</li>
      <li><b>To the community:</b> [Describe the commitment, for example environmental and community activities.]</li>
      <!-- ADD A COMMITMENT: copy one <li>...</li> line and paste it here -->
      <li class="todo"><b>[To another group]:</b> [Describe the commitment.]</li>
    </ul>
  </div>
</section>

<!-- ================= MOTTO ================= -->
<section id="motto">
  <div class="quote">
    <blockquote>&ldquo;Educating today's learners to lead tomorrow.&rdquo;</blockquote>
    <cite>GS Kigeme A</cite>
  </div>
</section>

<!-- ================= HELP BOX ================= -->
<section>
  <div class="help">
    <h2>How to add more, step by step</h2>
    <ol>
      <li>Replace anything in brackets <code>[...]</code> with real information, one section at a time.</li>
      <li>To add a card, copy one <code>&lt;div class="card"&gt; ... &lt;/div&gt;</code> and paste it inside the same <code>grid</code>.</li>
      <li>To add a commitment, copy one <code>&lt;li&gt; ... &lt;/li&gt;</code> line.</li>
      <li>To change the mission or vision, edit the text inside <code>&lt;div class="statement"&gt;</code>.</li>
      <li>When a yellow dashed box is complete, remove the word <code>todo</code> from its class. Delete this help box when you finish.</li>
    </ol>
  </div>
</section>

<section>
  <div class="contact-box">
    <h2>Share our mission</h2>
    <p>Want to learn more about GS Kigeme A, or join our community?</p>
    <a href="contact.html">Contact Us</a>
  </div>
</section>

<footer>&copy; 2026 GS Kigeme A. All rights reserved.</footer>

</body>
</html>

