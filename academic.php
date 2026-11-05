<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Academic | GS Kigeme A</title>
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

.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:20px;margin-top:20px}
.card{background:#fff;padding:24px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.card h3{color:#1e7a3c;margin-bottom:6px}
.tag{display:inline-block;background:#0b3d91;color:#fff;border-radius:6px;padding:2px 10px;font-weight:700;font-size:.85rem;margin-bottom:8px}
.card ul{margin:8px 0 0 18px}
.todo{border:2px dashed #e0a800;background:#fff8e1}
.todo h3{color:#7a5b00}

.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:16px;margin-top:20px}
.stat{background:#fff;border-radius:10px;padding:22px;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.stat b{display:block;font-size:2rem;color:#0b3d91}

.table-wrap{overflow-x:auto;margin-top:20px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08)}
table{width:100%;border-collapse:collapse;background:#fff;min-width:520px}
th{background:#0b3d91;color:#fff;text-align:left;padding:12px 14px}
td{padding:12px 14px;border-bottom:1px solid #e2e8f0}
tr:last-child td{border:none}
tr:nth-child(even) td{background:#f8fafc}

.steps{counter-reset:s;list-style:none;margin-top:20px}
.steps li{counter-increment:s;background:#fff;border-radius:10px;padding:16px 16px 16px 60px;margin-bottom:12px;position:relative;box-shadow:0 2px 8px rgba(0,0,0,.08)}
.steps li::before{content:counter(s);position:absolute;left:16px;top:14px;width:32px;height:32px;border-radius:50%;background:#1e7a3c;color:#fff;font-weight:700;display:flex;align-items:center;justify-content:center}

.help{background:#fff8e1;border:1px dashed #e0a800;border-radius:10px;padding:24px;margin-top:10px}
.help h2{font-size:1.3rem;color:#7a5b00}
.help ol{margin:10px 0 0 20px}

.contact-box{background:#e6f4ea;border-radius:10px;padding:30px;text-align:center}
.contact-box a{display:inline-block;margin-top:12px;background:#1e7a3c;color:#fff;text-decoration:none;padding:12px 26px;border-radius:8px;font-weight:600}

footer{text-align:center;padding:20px;background:#0b3d91;color:#fff;font-size:.9rem}

@media(max-width:600px){header h1{font-size:1.8rem}nav a{margin:4px 6px}}
</style>
</head>
<body>

<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="discover.php">Discover</a>
  <a href="academic.php" class="active">Academic</a>
  <a href="activities.php">Activities</a>
  <a href="contact.php">Contact</a>
</nav>

<header>
  <h1>Academic Life</h1>
  <p>Quality education built on discipline, knowledge and good values, from Senior 1 to Senior 6.</p>
  <div class="quick">
    <a href="#approach">Our Approach</a>
    <a href="#programmes">Programmes</a>
    <a href="#subjects">Subjects</a>
    <a href="#timetable">Timetable</a>
    <a href="#results">Results</a>
    <a href="#teachers">Teachers</a>
    <a href="#calendar">Calendar</a>
    <a href="#join">How to Join</a>
  </div>
</header>

<!-- ================= APPROACH ================= -->
<section id="approach">
  <h2>Our Approach to Learning</h2>
  <p class="lead">How we teach and how our students learn.</p>
  <div class="grid">
    <div class="card">
      <h3>Competence-Based Learning</h3>
      <p>Students discuss, research and present their own ideas, so they learn by doing.</p>
    </div>
    <div class="card">
      <h3>Digital Learning</h3>
      <p>Computers and ICT tools make lessons more practical and interesting.</p>
    </div>
    <div class="card">
      <h3>Discipline &amp; Values</h3>
      <p>Respect, hard work and integrity are part of every lesson.</p>
    </div>
    <div class="card todo">
      <h3>[Add another point]</h3>
      <p>[Describe another strength of your teaching, e.g. small groups, guidance and counselling.]</p>
    </div>
  </div>
</section>

<!-- ================= PROGRAMMES ================= -->
<section id="programmes" class="alt">
  <div class="inner">
    <h2>Programmes</h2>
    <p class="lead">Senior 1 to 3 general studies, Senior 4 and 5 streams, and Senior 6 combinations.</p>
    <div class="grid">
      <div class="card">
        <span class="tag">O-Level</span>
        <h3>Senior 1 to Senior 3</h3>
        <p>[Describe the general subjects and how students are guided to choose a stream.]</p>
      </div>
      <div class="card">
        <span class="tag">Stream 1</span>
        <h3>Senior 4 and Senior 5</h3>
        <p>[Describe Stream 1: subjects studied and who it is for.]</p>
      </div>
      <div class="card">
        <span class="tag">Stream 2</span>
        <h3>Senior 4 and Senior 5</h3>
        <p>[Describe Stream 2: subjects studied and who it is for.]</p>
      </div>
      <div class="card">
        <span class="tag">MCB</span>
        <h3>Mathematics - Chemistry - Biology</h3>
        <p><b>Senior 6 only.</b> [Careers: e.g. medicine, nursing, agriculture.]</p>
      </div>
      <div class="card">
        <span class="tag">PCB</span>
        <h3>Physics - Chemistry - Biology</h3>
        <p><b>Senior 6 only.</b> [Careers and description.]</p>
      </div>
      <div class="card">
        <span class="tag">ANP</span>
        <h3>Associate Nursing Programme</h3>
        <p><b>Senior 6 only.</b> Prepares students for a career in nursing and health care. [Add: duration, practical training at Kigeme Hospital, and what graduates can do.]</p>
      </div>
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
        <tr><td>Senior 1 - 3</td><td>[Kinyarwanda, English, Mathematics, Biology, Chemistry, Physics, ...]</td></tr>
        <tr><td>Senior 4 - 5 (Stream 1)</td><td>[List the subjects of Stream 1]</td></tr>
        <tr><td>Senior 4 - 5 (Stream 2)</td><td>[List the subjects of Stream 2]</td></tr>
        <tr><td>Senior 6 - MCB</td><td>[Mathematics, Chemistry, Biology, General Studies, ...]</td></tr>
        <tr><td>Senior 6 - PCB</td><td>[Physics, Chemistry, Biology, General Studies, ...]</td></tr>
        <tr><td>Senior 6 - ANP (Associate Nursing)</td><td>[Anatomy, Physiology, Nursing Fundamentals, Community Health, Clinical Practice, ...]</td></tr>
        <!-- ADD A NEW ROW: copy one <tr>...</tr> line and paste it here -->
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
          <tr><td>[7:30 - 8:00]</td><td>[Morning assembly]</td></tr>
          <tr><td>[8:00 - 10:00]</td><td>[Lessons]</td></tr>
          <tr><td>[10:00 - 10:20]</td><td>[Break]</td></tr>
          <tr><td>[10:20 - 12:30]</td><td>[Lessons]</td></tr>
          <tr><td>[12:30 - 2:00]</td><td>[Lunch]</td></tr>
          <tr><td>[2:00 - 4:00]</td><td>[Lessons / clubs]</td></tr>
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
    <div class="stat"><b>[00%]</b>National exam pass rate</div>
    <div class="stat"><b>[00]</b>Students finishing each year</div>
    <div class="stat"><b>[00]</b>Students joining university</div>
    <div class="stat"><b>[Year]</b>Latest results</div>
  </div>
</section>

<!-- ================= TEACHERS ================= -->
<section id="teachers" class="alt">
  <div class="inner">
    <h2>Our Academic Team</h2>
    <p class="lead">The teachers and leaders behind our students' success.</p>
    <div class="grid">
      <div class="card todo"><h3>[Name]</h3><p>Head Teacher</p></div>
      <div class="card todo"><h3>[Name]</h3><p>Deputy Head Teacher (Studies)</p></div>
      <div class="card todo"><h3>[Name]</h3><p>[Head of Science Department]</p></div>
      <div class="card todo"><h3>[Name]</h3><p>[Head of Languages Department]</p></div>
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
        <tr><td>Term 1</td><td>[date]</td><td>[date]</td></tr>
        <tr><td>Term 2</td><td>[date]</td><td>[date]</td></tr>
        <tr><td>Term 3</td><td>[date]</td><td>[date]</td></tr>
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
      <li>[Step 1: Collect or download the application form.]</li>
      <li>[Step 2: Prepare the documents needed, e.g. previous results and ID.]</li>
      <li>[Step 3: Submit the form to the school office.]</li>
      <li>[Step 4: Wait for the admission confirmation.]</li>
    </ol>
  </div>
</section>

<!-- ================= HELP BOX ================= -->
<section>
  <div class="help">
    <h2>How to add more, step by step</h2>
    <ol>
      <li>Fill the brackets <code>[...]</code> with real information, one section at a time.</li>
      <li>To add a card, copy one <code>&lt;div class="card"&gt; ... &lt;/div&gt;</code> and paste it inside the same <code>grid</code>.</li>
      <li>To add a table row, copy one <code>&lt;tr&gt; ... &lt;/tr&gt;</code> line and paste it below.</li>
      <li>To add a whole new section, copy a full <code>&lt;section&gt; ... &lt;/section&gt;</code> and give it a new <code>id</code>.</li>
      <li>When a yellow dashed card is complete, remove the word <code>todo</code> from its class. Delete this help box when you finish.</li>
    </ol>
  </div>
</section>

<section>
  <div class="contact-box">
    <h2>Have a question about studies?</h2>
    <p>Our academic team will be happy to help.</p>
    <a href="contact.html">Contact Us</a>
  </div>
</section>

<footer>&copy; 2026 GS Kigeme A. All rights reserved.</footer>

</body>
</html>
