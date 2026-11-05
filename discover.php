
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Discover GS Kigeme A</title>
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
.lead{margin-bottom:20px;color:#475569}

.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:20px;margin-top:20px}
.card{background:#fff;padding:24px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.card h3{color:#1e7a3c;margin-bottom:6px}
.tag{display:inline-block;background:#0b3d91;color:#fff;border-radius:6px;padding:2px 10px;font-weight:700;font-size:.85rem;margin-bottom:8px}

/* Timeline */
.timeline{position:relative;margin-top:25px;padding-left:30px;border-left:4px solid #1e7a3c}
.event{position:relative;background:#fff;padding:20px 22px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);margin-bottom:22px}
.event::before{content:"";position:absolute;left:-41px;top:24px;width:16px;height:16px;border-radius:50%;background:#0b3d91;border:3px solid #f9fafb}
.event .year{color:#0b3d91;font-weight:800;font-size:1.2rem}
.event h3{color:#1e7a3c;margin:2px 0 4px}
.todo{background:#fff8e1;border:1px dashed #e0a800;color:#7a5b00}

/* Numbers */
.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:16px;margin-top:20px}
.stat{background:#fff;border-radius:10px;padding:22px;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.stat b{display:block;font-size:2rem;color:#0b3d91}

/* Gallery */
.photo{height:160px;border-radius:10px;background:#cbd5e1;display:flex;align-items:center;justify-content:center;color:#475569;font-weight:600;text-align:center;padding:10px}

.contact-box{background:#e6f4ea;border-radius:10px;padding:30px;text-align:center}
.contact-box a{display:inline-block;margin-top:12px;background:#1e7a3c;color:#fff;text-decoration:none;padding:12px 26px;border-radius:8px;font-weight:600}

footer{text-align:center;padding:20px;background:#0b3d91;color:#fff;font-size:.9rem}

@media(max-width:600px){header h1{font-size:1.8rem}nav a{margin:4px 6px}.timeline{padding-left:22px}.event::before{left:-33px}}
</style>
</head>
<body>

<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="discover.html" class="active">Discover</a>
  <a href="contact.php">Contact</a>
</nav>

<header>
  <h1>Discover GS Kigeme A</h1>
  <p>Explore our history, programmes, life at school and the community we are proud of.</p>
  <div class="quick">
    <a href="#history">History</a>
    <a href="#programmes">Programmes</a>
    <a href="#numbers">Our Numbers</a>
    <a href="#facilities">Facilities</a>
    <a href="#life">School Life</a>
    <a href="#achievements">Achievements</a>
    <a href="#gallery">Gallery</a>
    <a href="#visit">Visit Us</a>
  </div>
</header>

<!-- ================= HISTORY ================= -->
<section id="history">
  <h2>Our History</h2>
  <p class="lead">From a small training programme in 1965 to the school we are today.</p>

  <div class="timeline">

    <div class="event">
      <div class="year">1965</div>
      <h3>The beginning</h3>
      <p>The school started as an auxiliary instructor programme, run by the Anglican Church of Rwanda, Kigeme Diocese.</p>
    </div>

    <div class="event">
      <div class="year">1967</div>
      <h3>Ordinary level</h3>
      <p>The school became an ordinary-level school.</p>
    </div>

    <div class="event">
      <div class="year">1970</div>
      <h3>Inferior Teacher Training Centre</h3>
      <p>It became a teacher training centre for lower-level teachers. The first group graduated in 1972.</p>
    </div>

    <div class="event">
      <div class="year">1981</div>
      <h3>Teacher Training Centre</h3>
      <p>The school grew into a full Teacher Training Centre.</p>
    </div>

    <div class="event">
      <div class="year">1990</div>
      <h3>Groupe Scolaire Kigeme</h3>
      <p>The school took the name Groupe Scolaire Kigeme. It started with girls only and later welcomed boys, becoming co-educational.</p>
    </div>

    <!-- HOW TO ADD A NEW EVENT: copy one block below, paste it above this comment, then change the year, title and text. -->
    <div class="event todo">
      <div class="year">[Year]</div>
      <h3>[Add an important event]</h3>
      <p>[Write what happened: a new building, a new programme, a visit, a change of leadership...]</p>
    </div>

    <div class="event todo">
      <div class="year">[Year]</div>
      <h3>[Add another event]</h3>
      <p>[Write the details here.]</p>
    </div>

  </div>
</section>

<!-- ================= PROGRAMMES ================= -->
<section id="programmes" class="alt">
  <div class="inner">
    <h2>Our Programmes</h2>
    <p class="lead">Combinations offered at advanced level, and the ordinary level.</p>
    <div class="grid">
      <div class="card">
        <span class="tag">MCB</span>
        <h3>Mathematics - Chemistry - Biology</h3>
        <p>[Add: careers this prepares for, e.g. medicine, nursing, agriculture.]</p>
      </div>
      <div class="card">
        <span class="tag">PCB</span>
        <h3>Physics - Chemistry - Biology</h3>
        <p>[Add: careers and description.]</p>
      </div>
      <div class="card">
        <span class="tag">PCM</span>
        <h3>Physics - Chemistry - Mathematics</h3>
        <p>[Add: careers, e.g. engineering, ICT, architecture.]</p>
      </div>
      <div class="card">
        <span class="tag">O-Level</span>
        <h3>Senior 1 to Senior 3</h3>
        <p>[Add: subjects taught and how students are guided to choose a combination.]</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= NUMBERS ================= -->
<section id="numbers">
  <h2>Our Numbers</h2>
  <p class="lead">Replace the brackets with the current figures from the school office.</p>
  <div class="stats">
    <div class="stat"><b>[000]</b>Students</div>
    <div class="stat"><b>[00]</b>Teachers</div>
    <div class="stat"><b>[00]</b>Staff</div>
    <div class="stat"><b>[00]</b>Classrooms</div>
    <div class="stat"><b>1965</b>Year we began</div>
  </div>
</section>

<!-- ================= FACILITIES ================= -->
<section id="facilities" class="alt">
  <div class="inner">
    <h2>Our Facilities</h2>
    <p class="lead">Places where our students learn and grow.</p>
    <div class="grid">
      <div class="card"><h3>Library</h3><p>[Describe the library and number of books.]</p></div>
      <div class="card"><h3>Science Laboratories</h3><p>[Describe the labs for Physics, Chemistry and Biology.]</p></div>
      <div class="card"><h3>ICT / Computer Lab</h3><p>[Number of computers and how they are used.]</p></div>
      <div class="card"><h3>Dormitories</h3><p>[Boarding information, if available.]</p></div>
      <div class="card"><h3>Sports Grounds</h3><p>[Football, volleyball, basketball...]</p></div>
      <div class="card"><h3>Dining Hall</h3><p>[Meals and services.]</p></div>
    </div>
  </div>
</section>

<!-- ================= SCHOOL LIFE ================= -->
<section id="life">
  <h2>School Life</h2>
  <p class="lead">Learning goes beyond the classroom.</p>
  <div class="grid">
    <div class="card"><h3>Clubs</h3><p>[List clubs: Science, Anti-AIDS, Environment, Debate...]</p></div>
    <div class="card"><h3>Sports</h3><p>[Teams and competitions.]</p></div>
    <div class="card"><h3>Music &amp; Culture</h3><p>[Choir, traditional dance, drama.]</p></div>
    <div class="card"><h3>Faith &amp; Values</h3><p>[Chapel, Anglican Church of Rwanda, Kigeme Diocese.]</p></div>
  </div>
</section>

<!-- ================= ACHIEVEMENTS ================= -->
<section id="achievements" class="alt">
  <div class="inner">
    <h2>Our Achievements</h2>
    <p class="lead">Add results, awards and success stories.</p>
    <div class="grid">
      <div class="card"><h3>[Exam results]</h3><p>[Pass rate in national exams, with the year.]</p></div>
      <div class="card"><h3>[Awards]</h3><p>[Competitions or prizes the school has won.]</p></div>
      <div class="card"><h3>[Former students]</h3><p>[Famous or successful alumni.]</p></div>
    </div>
  </div>
</section>

<!-- ================= GALLERY ================= -->
<section id="gallery">
  <h2>Gallery</h2>
  <p class="lead">To add a photo, replace a grey box with &lt;img src="photo1.jpg" alt="description" style="width:100%;border-radius:10px"&gt;</p>
  <div class="grid">
    <div class="photo">Photo 1<br>School entrance</div>
    <div class="photo">Photo 2<br>Classroom</div>
    <div class="photo">Photo 3<br>Students</div>
    <div class="photo">Photo 4<br>Sports</div>
  </div>
</section>

<!-- ================= VISIT ================= -->
<section id="visit">
  <div class="contact-box">
    <h2>Visit Us</h2>
    <p>GS Kigeme A, Kigeme, Nyamagabe District, Southern Province, Rwanda.<br>
    About ten kilometres from Nyamagabe town, close to Kigeme Cathedral and Kigeme Hospital.</p>
    <a href="contact.html">Contact Us</a>
  </div>
</section>

<footer>&copy; 2026 GS Kigeme A. All rights reserved.</footer>

</body>
</html>
