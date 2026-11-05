
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Team | GS Kigeme A</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:Segoe UI,Arial,sans-serif;color:#1f2937;line-height:1.7;background:#f9fafb}

nav{background:#0b3d91;padding:12px 20px;text-align:center;position:sticky;top:0;z-index:10}
nav a{color:#fff;text-decoration:none;margin:0 10px;font-weight:600;display:inline-block}
nav a:hover,nav a.active{text-decoration:underline}

header{background:linear-gradient(135deg,#0b3d91,#1e7a3c);color:#fff;text-align:center;padding:80px 20px}
header h1{font-size:2.4rem;margin-bottom:10px}
header p{max-width:650px;margin:auto;opacity:.95}
.quick{display:flex;flex-wrap:wrap;justify-content:center;gap:10px;margin-top:24px}
.quick a{background:rgba(255,255,255,.15);color:#fff;text-decoration:none;padding:8px 16px;border-radius:20px;font-size:.9rem}
.quick a:hover{background:rgba(255,255,255,.3)}

section{max-width:1000px;margin:auto;padding:50px 20px}
section.alt{max-width:none;background:#e8f0fb}
section.alt .inner{max-width:1000px;margin:auto}
h2{color:#0b3d91;margin-bottom:8px;font-size:1.7rem}
.lead{color:#475569;margin-bottom:20px}

/* Person cards */
.people{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px;margin-top:20px}
.person{background:#fff;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);padding:26px 20px;text-align:center}
.photo{width:110px;height:110px;border-radius:50%;background:#0b3d91;color:#fff;margin:0 auto 14px;display:flex;align-items:center;justify-content:center;font-size:2.4rem;font-weight:700;overflow:hidden}
.photo img{width:100%;height:100%;object-fit:cover}
.person h3{color:#1e7a3c;font-size:1.1rem;margin-bottom:2px}
.role{font-weight:600;color:#0b3d91}
.bio{font-size:.92rem;color:#475569;margin-top:8px}
.contact-line{font-size:.85rem;margin-top:8px;color:#64748b}
.person.todo{border:2px dashed #e0a800;background:#fff8e1}
.person.todo .photo{background:#e0a800}
.person.todo h3{color:#7a5b00}

/* Featured head teacher */
.featured{display:grid;grid-template-columns:200px 1fr;gap:28px;align-items:center;background:#fff;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);padding:30px;margin-top:20px}
.featured .photo{width:170px;height:170px;font-size:3.6rem;margin:0}
.featured h3{color:#1e7a3c;font-size:1.4rem}
.featured blockquote{margin-top:12px;border-left:4px solid #1e7a3c;padding-left:14px;color:#334155;font-style:italic}

/* Department headings */
.dept{margin-top:34px}
.dept h3{color:#0b3d91;font-size:1.25rem;border-bottom:3px solid #1e7a3c;display:inline-block;padding-bottom:2px}

/* Staff list */
.list{list-style:none;margin-top:20px}
.list li{background:#fff;border-radius:10px;padding:14px 18px;margin-bottom:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap}
.list li span{color:#0b3d91;font-weight:600}
.list li.todo{border:2px dashed #e0a800;background:#fff8e1}

/* Help box */
.help{background:#fff8e1;border:1px dashed #e0a800;border-radius:10px;padding:24px}
.help h2{font-size:1.3rem;color:#7a5b00}
.help ol{margin:10px 0 0 20px}

.contact-box{background:#e6f4ea;border-radius:10px;padding:30px;text-align:center}
.contact-box a{display:inline-block;margin-top:12px;background:#1e7a3c;color:#fff;text-decoration:none;padding:12px 26px;border-radius:8px;font-weight:600}

footer{text-align:center;padding:20px;background:#0b3d91;color:#fff;font-size:.9rem}

@media(max-width:700px){.featured{grid-template-columns:1fr;text-align:center}.featured .photo{margin:0 auto}.featured blockquote{text-align:left}}
@media(max-width:600px){header h1{font-size:1.8rem}nav a{margin:4px 6px}}
</style>
</head>
<body>

<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="mission.php">Mission</a>
  <a href="team.php" class="active">Team</a>
  <a href="academic.php">Academic</a>
  <a href="activities.php">Activities</a>
  <a href="contact.php">Contact</a>
</nav>

<header>
  <h1>Meet Our Team</h1>
  <p>Our leaders and teachers work together to give every learner a quality education, guided by discipline, knowledge and good values.</p>
  <div class="quick">
    <a href="#leadership">Leadership</a>
    <a href="#teachers">Teachers</a>
    <a href="#staff">Support Staff</a>
    <a href="#website">Website Team</a>
    <a href="#join">Join Us</a>
  </div>
</header>

<!-- ================= LEADERSHIP ================= -->
<section id="leadership">
  <h2>School Leadership</h2>
  <p class="lead">The people who lead GS Kigeme A.</p>

  <!-- Head Teacher (featured) -->
  <div class="featured">
    <div class="photo">HE</div> <!-- To add a photo: replace HE with <img src="head-teacher.jpg" alt="Head Teacher"> -->
    <div>
      <h3>HARERIMANA Emmanuel</h3>
      <p class="role">Head Teacher</p>
      <p class="bio">Leads the school, ensures academic excellence and upholds our values. [Add a short biography: qualifications, years of experience.]</p>
      <blockquote>&ldquo;[Add a short welcome message from the Head Teacher.]&rdquo;</blockquote>
    </div>
  </div>

  <div class="people">
    <div class="person">
      <div class="photo">D</div>
      <h3>[Name]</h3>
      <p class="role">Deputy Head Teacher (Studies)</p>
      <p class="bio">Oversees teaching, learning and academic standards.</p>
    </div>
    <div class="person">
      <div class="photo">BA</div>
      <h3>Pastor BIGIRIMANA Alise</h3>
      <p class="role">Dean of Discipline</p>
      <p class="bio">Responsible for discipline and good conduct at the school. [Add more details about the role if you wish.]</p>
    </div>
    <div class="person">
      <div class="photo">HM</div>
      <h3>HAKIZIMANA Michael</h3>
      <p class="role">Dean of Studies</p>
      <p class="bio">Responsible for academic matters at the school. [Add more details about the role if you wish.]</p>
    </div>
    <!-- ADD A LEADER: copy one <div class="person">...</div> block and paste it here -->
  </div>
</section>

<!-- ================= TEACHERS ================= -->
<section id="teachers" class="alt">
  <div class="inner">
    <h2>Our Teachers</h2>
    <p class="lead">Dedicated teachers, grouped by department. Add each teacher slowly.</p>

    <div class="dept">
      <h3>Sciences</h3>
      <div class="people">
        <div class="person todo">
          <div class="photo">M</div>
          <h3>[Name]</h3>
          <p class="role">[Mathematics Teacher]</p>
        </div>
        <div class="person todo">
          <div class="photo">P</div>
          <h3>[Name]</h3>
          <p class="role">[Physics Teacher]</p>
        </div>
        <div class="person todo">
          <div class="photo">C</div>
          <h3>[Name]</h3>
          <p class="role">[Chemistry / Biology Teacher]</p>
        </div>
      </div>
    </div>

    <div class="dept">
      <h3>Languages</h3>
      <div class="people">
        <div class="person todo">
          <div class="photo">E</div>
          <h3>[Name]</h3>
          <p class="role">[English Teacher]</p>
        </div>
        <div class="person todo">
          <div class="photo">K</div>
          <h3>[Name]</h3>
          <p class="role">[Kinyarwanda Teacher]</p>
        </div>
        <div class="person todo">
          <div class="photo">F</div>
          <h3>[Name]</h3>
          <p class="role">[French Teacher]</p>
        </div>
      </div>
    </div>

    <div class="dept">
      <h3>Humanities &amp; Business</h3>
      <div class="people">
        <div class="person todo">
          <div class="photo">G</div>
          <h3>[Name]</h3>
          <p class="role">[Geography Teacher]</p>
        </div>
        <div class="person todo">
          <div class="photo">E</div>
          <h3>[Name]</h3>
          <p class="role">[Economics &amp; Entrepreneurship Teacher]</p>
        </div>
      </div>
    </div>

    <div class="dept">
      <h3>Health &amp; ICT</h3>
      <div class="people">
        <div class="person todo">
          <div class="photo">N</div>
          <h3>[Name]</h3>
          <p class="role">[Nursing (ANP) Teacher]</p>
        </div>
        <div class="person todo">
          <div class="photo">I</div>
          <h3>[Name]</h3>
          <p class="role">[ICT / Computer Science Teacher]</p>
        </div>
      </div>
    </div>

    <!-- ADD A DEPARTMENT: copy one <div class="dept">...</div> block and paste it here -->
  </div>
</section>

<!-- ================= SUPPORT STAFF ================= -->
<section id="staff">
  <h2>Support Staff</h2>
  <p class="lead">The people who keep the school running every day.</p>
  <ul class="list">
    <li class="todo"><b>[Name]</b> <span>[Secretary]</span></li>
    <li class="todo"><b>[Name]</b> <span>[Accountant / Bursar]</span></li>
    <li class="todo"><b>[Name]</b> <span>[Librarian]</span></li>
    <li class="todo"><b>[Name]</b> <span>[Laboratory Technician]</span></li>
    <!-- ADD A STAFF MEMBER: copy one <li>...</li> line and paste it here -->
  </ul>
</section>

<!-- ================= WEBSITE TEAM ================= -->
<section id="website" class="alt">
  <div class="inner">
    <h2>Website Team</h2>
    <p class="lead">Students and developers who build and maintain this website.</p>
    <div class="people">
      <div class="person todo">
        <div class="photo">W</div>
        <h3>[Name]</h3>
        <p class="role">[Lead Developer]</p>
      </div>
      <div class="person todo">
        <div class="photo">W</div>
        <h3>[Name]</h3>
        <p class="role">[Content Editor]</p>
      </div>
      <!-- ADD A MEMBER: copy one <div class="person">...</div> block and paste it here -->
    </div>
  </div>
</section>

<!-- ================= JOIN ================= -->
<section id="join">
  <div class="contact-box">
    <h2>Join Our Team</h2>
    <p>Interested in teaching or working at GS Kigeme A? Get in touch with the school office.</p>
    <a href="contact.html">Contact Us</a>
  </div>
</section>

<!-- ================= HELP BOX ================= -->
<section>
  <div class="help">
    <h2>How to add more, step by step</h2>
    <ol>
      <li>Replace anything in brackets <code>[...]</code> with the real name and role, one person at a time.</li>
      <li>To add a person, copy one <code>&lt;div class="person"&gt; ... &lt;/div&gt;</code> and paste it in the same group.</li>
      <li>To add a photo, upload the picture to your repository, then replace the letter inside <code>&lt;div class="photo"&gt;</code> with <code>&lt;img src="name.jpg" alt="Full name"&gt;</code>.</li>
      <li>To add a department, copy one <code>&lt;div class="dept"&gt; ... &lt;/div&gt;</code> block.</li>
      <li>When a yellow dashed card is complete, remove the word <code>todo</code> from its class. Delete unused cards and this help box when you finish.</li>
    </ol>
  </div>
</section>

<footer>&copy; 2026 GS Kigeme A. All rights reserved.</footer>

</body>
</html>
