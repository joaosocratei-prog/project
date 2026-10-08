
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us | GS Kigeme A</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:Segoe UI,Arial,sans-serif;color:#1f2937;line-height:1.7;background:#f9fafb}

nav{background:#0b3d91;padding:12px 20px;text-align:center}
nav a{color:#fff;text-decoration:none;margin:0 12px;font-weight:600}
nav a:hover,nav a.active{text-decoration:underline}

header{background:linear-gradient(135deg,#0b3d91,#1e7a3c);color:#fff;text-align:center;padding:70px 20px}
header h1{font-size:2.3rem;margin-bottom:10px}
header p{max-width:620px;margin:auto;opacity:.95}

main{max-width:1000px;margin:auto;padding:50px 20px}
h2{color:#0b3d91;margin-bottom:15px;font-size:1.6rem}

.layout{display:grid;grid-template-columns:1fr 1.2fr;gap:30px;align-items:start}

.info{display:grid;gap:16px}
.card{background:#fff;padding:22px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);display:flex;gap:16px;align-items:flex-start}
.icon{flex:0 0 46px;height:46px;border-radius:50%;background:#0b3d91;color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.3rem}
.card h3{color:#1e7a3c;margin-bottom:2px;font-size:1.05rem}
.card a{color:#0b3d91;word-break:break-word}

.hours{background:#e6f4ea;border-radius:10px;padding:22px}
.hours h3{color:#1e7a3c;margin-bottom:8px}
.hours p{display:flex;justify-content:space-between;gap:10px;border-bottom:1px solid #cfe6d6;padding:4px 0}
.hours p:last-child{border:none}

form{background:#fff;padding:28px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08)}
label{display:block;font-weight:600;margin:14px 0 6px}
input,select,textarea{width:100%;padding:12px 14px;border:1px solid #cbd5e1;border-radius:8px;font:inherit;background:#fff}
input:focus,select:focus,textarea:focus{outline:3px solid #bcd0f2;border-color:#0b3d91}
textarea{min-height:140px;resize:vertical}
button{margin-top:20px;width:100%;padding:14px;border:none;border-radius:8px;background:#1e7a3c;color:#fff;font:inherit;font-weight:700;cursor:pointer}
button:hover{background:#176130}
.note{font-size:.85rem;color:#64748b;margin-top:10px}
#status{margin-top:14px;padding:12px;border-radius:8px;background:#e6f4ea;color:#14532d;display:none}

.map{margin-top:40px;background:#e8f0fb;border-radius:10px;padding:30px;text-align:center}
.map p{max-width:600px;margin:0 auto 16px}
.map a{display:inline-block;background:#0b3d91;color:#fff;text-decoration:none;padding:12px 24px;border-radius:8px;font-weight:600}
.map a:hover{background:#082d6b}

footer{text-align:center;padding:20px;background:#0b3d91;color:#fff;font-size:.9rem}

@media(max-width:800px){.layout{grid-template-columns:1fr}}
@media(max-width:600px){header h1{font-size:1.8rem}nav a{display:inline-block;margin:4px 8px}}
</style>
</head>
<body>

<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="contact.php" class="active">Contact</a>
</nav>

<header>
  <h1>Contact Us</h1>
  <p>Have a question about admissions, programmes or school life? Send us a message and we will get back to you.</p>
</header>

<main>
  <div class="layout">

    <div>
      <h2>Get in Touch</h2>
      <div class="info">
        <div class="card">
          <div class="icon">&#128205;</div>
          <div>
            <h3>Address</h3>
            <p>GS Kigeme A<br>Kigeme, Nyamagabe District<br>Southern Province, Rwanda</p>
          </div>
        </div>
        <div class="card">
          <div class="icon">&#128222;</div>
          <div>
            <h3>Phone</h3>
            <p><a href="tel:+250000000000">[+250 ...]</a></p>
          </div>
        </div>
        <div class="card">
          <div class="icon">&#9993;</div>
          <div>
            <h3>Email</h3>
            <p><a href="mailto:school@example.com">[school email]</a></p>
          </div>
        </div>
        <div class="hours">
          <h3>Office Hours</h3>
          <p><span>Monday - Friday</span><span>[7:30 AM - 5:00 PM]</span></p>
          <p><span>Saturday</span><span>[8:00 AM - 12:00 PM]</span></p>
          <p><span>Sunday</span><span>Closed</span></p>
        </div>
      </div>
    </div>

    <div>
      <h2>Send a Message</h2>
      <form id="contactForm">
        <label for="name">Full name</label>
        <input type="text" id="name" required placeholder="Your name">

        <label for="email">Email</label>
        <input type="email" id="email" required placeholder="you@example.com">

        <label for="topic">Topic</label>
        <select id="topic">
          <option>Admissions</option>
          <option>Programmes (MCB, PCB, PCM)</option>
          <option>General question</option>
          <option>Other</option>
        </select>

        <label for="message">Message</label>
        <textarea id="message" required placeholder="Write your message here..."></textarea>

        <button type="submit">Send Message</button>
        <p class="note">This opens your email app with the message ready to send.</p>
        <div id="status" role="status">Your email app should open now. Press Send there to finish.</div>
      </form>
    </div>

  </div>

  <div class="map">
    <h2>Find Us</h2>
    <p>We are about ten kilometres from Nyamagabe town, close to Kigeme Cathedral and Kigeme Hospital.</p>
    <a href="https://www.google.com/maps/search/?api=1&query=GS+Kigeme+A+Nyamagabe+Rwanda" target="_blank" rel="noopener">Open in Google Maps</a>
  </div>
</main>

<footer>&copy; 2026 GS Kigeme A. All rights reserved.</footer>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e){
  e.preventDefault();
  var to = 'school@example.com'; // replace with the real school email
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var topic = document.getElementById('topic').value;
  var msg = document.getElementById('message').value;
  var subject = encodeURIComponent('[' + topic + '] Message from ' + name);
  var body = encodeURIComponent('Name: ' + name + '\nEmail: ' + email + '\n\n' + msg);
  window.location.href = 'mailto:' + to + '?subject=' + subject + '&body=' + body;
  document.getElementById('status').style.display = 'block';
});
</script>

</body>
</html>
