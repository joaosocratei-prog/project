<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Activities | GS Kigeme A</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:Segoe UI,Arial,sans-serif;color:#1f2937;line-height:1.7;background:#f9fafb}

nav{background:#0b3d91;padding:12px 20px;text-align:center;position:sticky;top:0;z-index:10}
nav a{color:#fff;text-decoration:none;margin:0 10px;font-weight:600;display:inline-block}
nav a:hover,nav a.active{text-decoration:underline}

header{background:linear-gradient(135deg,#0b3d91,#1e7a3c);color:#fff;text-align:center;padding:70px 20px}
header h1{font-size:2.3rem;margin-bottom:10px}
header p{max-width:650px;margin:auto;opacity:.95}

main{max-width:1000px;margin:auto;padding:50px 20px}
h2{color:#0b3d91;margin-bottom:8px;font-size:1.7rem}
.lead{color:#475569;margin-bottom:20px}

/* Filter buttons */
.filters{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:10px}
.filters button{border:2px solid #0b3d91;background:#fff;color:#0b3d91;padding:8px 18px;border-radius:20px;font:inherit;font-weight:600;cursor:pointer}
.filters button:hover{background:#e8f0fb}
.filters button.on{background:#0b3d91;color:#fff}

/* Activity cards */
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:22px;margin-top:20px}
.activity{background:#fff;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);overflow:hidden;display:flex;flex-direction:column}
.activity .pic{height:150px;background:#cbd5e1;display:flex;align-items:center;justify-content:center;color:#475569;font-weight:600;font-size:.9rem;text-align:center;padding:10px}
.activity .pic img{width:100%;height:100%;object-fit:cover}
.activity .body{padding:20px;flex:1}
.cat{display:inline-block;background:#e6f4ea;color:#1e7a3c;font-weight:700;font-size:.78rem;border-radius:6px;padding:2px 10px;margin-bottom:8px;text-transform:uppercase}
.activity h3{color:#0b3d91;margin-bottom:6px}
.meta{font-size:.88rem;color:#64748b;margin-top:10px}
.todo{border:2px dashed #e0a800;background:#fff8e1}
.todo h3{color:#7a5b00}

.empty{display:none;text-align:center;padding:30px;color:#64748b}

.help{margin-top:40px;background:#e8f0fb;border-radius:10px;padding:26px}
.help h2{font-size:1.3rem}
.help ol{margin:10px 0 0 20px}

.join{margin-top:40px;background:#e6f4ea;border-radius:10px;padding:30px;text-align:center}
.join a{display:inline-block;margin-top:12px;background:#1e7a3c;color:#fff;text-decoration:none;padding:12px 26px;border-radius:8px;font-weight:600}

footer{text-align:center;padding:20px;background:#0b3d91;color:#fff;font-size:.9rem}

@media(max-width:600px){header h1{font-size:1.8rem}nav a{margin:4px 6px}}
</style>
</head>
<body>

<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="discover.php">Discover</a>
  <a href="activities.php" class="active">Activities</a>
  <a href="contact.php">Contact</a>
</nav>

<header>
  <h1>School Activities</h1>
  <p>Learning at GS Kigeme A goes beyond the classroom. Discover the clubs, sports and programmes that help our students grow.</p>
</header>

<main>
  <h2>What We Do</h2>
  <p class="lead">Choose a category to see the activities.</p>

  <div class="filters" id="filters">
    <button class="on" data-cat="all">All</button>
    <button data-cat="clubs">Clubs</button>
    <button data-cat="sports">Sports</button>
    <button data-cat="culture">Music &amp; Culture</button>
    <button data-cat="academic">Academic</button>
    <button data-cat="community">Community &amp; Environment</button>
  </div>

  <div class="grid" id="grid">

    <!-- ===== CLUBS ===== -->
    <div class="activity" data-cat="clubs">
      <div class="pic">Photo: Science Club</div>
      <div class="body">
        <span class="cat">Clubs</span>
        <h3>Science &amp; Innovation Club</h3>
        <p>Students design projects and simple inventions that solve real problems in our community.</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Patron: [teacher name]</p>
      </div>
    </div>

    <div class="activity" data-cat="clubs">
      <div class="pic">Photo: ICT Club</div>
      <div class="body">
        <span class="cat">Clubs</span>
        <h3>ICT &amp; Digital Learning</h3>
        <p>Use of computers and ICT tools to make lessons more practical and interesting.</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Patron: [teacher name]</p>
      </div>
    </div>

    <!-- ===== SPORTS ===== -->
    <div class="activity todo" data-cat="sports">
      <div class="pic">Photo: Football</div>
      <div class="body">
        <span class="cat">Sports</span>
        <h3>[Football]</h3>
        <p>[Describe the team, training days and competitions.]</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Coach: [name]</p>
      </div>
    </div>

    <div class="activity todo" data-cat="sports">
      <div class="pic">Photo: Volleyball</div>
      <div class="body">
        <span class="cat">Sports</span>
        <h3>[Volleyball]</h3>
        <p>[Describe the team and achievements.]</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Coach: [name]</p>
      </div>
    </div>

    <!-- ===== MUSIC & CULTURE ===== -->
    <div class="activity todo" data-cat="culture">
      <div class="pic">Photo: Choir</div>
      <div class="body">
        <span class="cat">Music &amp; Culture</span>
        <h3>[School Choir]</h3>
        <p>[Describe the choir and where it performs.]</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Leader: [name]</p>
      </div>
    </div>

    <div class="activity todo" data-cat="culture">
      <div class="pic">Photo: Traditional dance</div>
      <div class="body">
        <span class="cat">Music &amp; Culture</span>
        <h3>[Traditional Dance &amp; Drama]</h3>
        <p>[Describe performances and events.]</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Leader: [name]</p>
      </div>
    </div>

    <!-- ===== ACADEMIC ===== -->
    <div class="activity" data-cat="academic">
      <div class="pic">Photo: Classroom</div>
      <div class="body">
        <span class="cat">Academic</span>
        <h3>Competence-Based Learning</h3>
        <p>Students discuss, research and present their own ideas in class.</p>
        <p class="meta">Who: [classes] &nbsp;|&nbsp; Teacher: [name]</p>
      </div>
    </div>

    <div class="activity todo" data-cat="academic">
      <div class="pic">Photo: Debate</div>
      <div class="body">
        <span class="cat">Academic</span>
        <h3>[Debate &amp; Reading Club]</h3>
        <p>[Describe how students practise speaking and reading.]</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Patron: [name]</p>
      </div>
    </div>

    <!-- ===== COMMUNITY & ENVIRONMENT ===== -->
    <div class="activity" data-cat="community">
      <div class="pic">Photo: Tree planting</div>
      <div class="body">
        <span class="cat">Community</span>
        <h3>Green School</h3>
        <p>Tree planting, gardens and clean environment activities led by students.</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Patron: [teacher name]</p>
      </div>
    </div>

    <div class="activity todo" data-cat="community">
      <div class="pic">Photo: Umuganda</div>
      <div class="body">
        <span class="cat">Community</span>
        <h3>[Umuganda &amp; Community Service]</h3>
        <p>[Describe how students help the neighbouring community.]</p>
        <p class="meta">When: [day and time] &nbsp;|&nbsp; Leader: [name]</p>
      </div>
    </div>

    <!-- ADD NEW ACTIVITIES ABOVE THIS LINE (see the template in the box at the bottom) -->

  </div>

  <p class="empty" id="empty">No activities in this category yet. Add one below.</p>

  <div class="help">
    <h2>How to add a new activity</h2>
    <ol>
      <li>Copy a whole <code>&lt;div class="activity"&gt; ... &lt;/div&gt;</code> block from this page.</li>
      <li>Paste it above the comment "ADD NEW ACTIVITIES ABOVE THIS LINE".</li>
      <li>Change <code>data-cat="..."</code> to one of: <code>clubs</code>, <code>sports</code>, <code>culture</code>, <code>academic</code>, <code>community</code>.</li>
      <li>Change the title, description, day, time and teacher name.</li>
      <li>For a photo, replace the text inside <code>&lt;div class="pic"&gt;</code> with <code>&lt;img src="photo.jpg" alt="description"&gt;</code>.</li>
      <li>Remove the word <code>todo</code> from <code>class="activity todo"</code> once the card is complete (the yellow dashed border disappears).</li>
    </ol>
  </div>

  <div class="join">
    <h2>Want to take part?</h2>
    <p>Ask about any activity and we will tell you how to join.</p>
    <a href="contact.html">Contact Us</a>
  </div>
</main>

<footer>&copy; 2026 GS Kigeme A. All rights reserved.</footer>

<script>
var buttons = document.querySelectorAll('#filters button');
var cards = document.querySelectorAll('#grid .activity');
var empty = document.getElementById('empty');

buttons.forEach(function(btn){
  btn.addEventListener('click', function(){
    buttons.forEach(function(b){ b.classList.remove('on'); });
    btn.classList.add('on');
    var cat = btn.getAttribute('data-cat');
    var shown = 0;
    cards.forEach(function(card){
      var match = (cat === 'all' || card.getAttribute('data-cat') === cat);
      card.style.display = match ? 'flex' : 'none';
      if (match) shown++;
    });
    empty.style.display = shown === 0 ? 'block' : 'none';
  });
});
</script>

</body>
</html>
