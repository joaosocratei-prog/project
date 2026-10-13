
<?php
/*
  OUR SCHOOL SECTION (PHP version)

  HOW TO USE
  1. Upload this file to the same folder as your home page.
  2. In your home page (it must be saved as index.php), write:
         <?php include 'our-school-section.php'; ?>
     where you want the section to appear.
  3. To change any information, edit only the $school array below.
*/

$school = [
    'name'      => 'GS Kigeme A',
    'district'  => 'Nyamagabe District',
    'province'  => 'Southern Province',
    'country'   => 'Rwanda',
    'intro'     => 'GS Kigeme A is a school in Kigeme, Nyamagabe District, in the Southern Province of Rwanda, run by the Anglican Church of Rwanda, Kigeme Diocese. Here is where you can find us.',
    'directions'=> 'About 300 metres from the main road linking Kigali, Butare, Gikongoro and Cyangugu, and about ten kilometres from Nyamagabe town.',
    'phone'     => '[+250 ...]',
    'email'     => '[school email]',
    'hours'     => '[Monday - Friday, 7:30 AM - 5:00 PM]',
    'map_query' => 'GS Kigeme A Nyamagabe Rwanda',
    'landmarks' => [
        'Kigeme Diocese Cathedral',
        'Kigeme Hospital',
        'Nyamagabe town (about ten kilometres away)',
        // Add more landmarks here, one per line, like: 'Landmark name',
    ],
];

// Helper: safely print text on the page
function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

$mapQuery = urlencode($school['map_query']);
?>

<style>
#our-school{max-width:1000px;margin:auto;padding:50px 20px;font-family:Segoe UI,Arial,sans-serif;color:#1f2937;line-height:1.7}
#our-school h2{color:#0b3d91;margin-bottom:8px;font-size:1.7rem}
#our-school .loc-lead{color:#475569;margin-bottom:24px}

.loc-layout{display:grid;grid-template-columns:1fr 1.3fr;gap:24px;align-items:stretch}

.loc-info{display:grid;gap:14px;align-content:start}
.loc-card{background:#fff;padding:18px 20px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);display:flex;gap:14px;align-items:flex-start}
.loc-icon{flex:0 0 42px;height:42px;border-radius:50%;background:#0b3d91;color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.2rem}
.loc-card h3{color:#1e7a3c;font-size:1.02rem;margin-bottom:2px}
.loc-card p{font-size:.95rem}

.loc-map{border-radius:10px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,.08);background:#e8f0fb;min-height:380px;display:flex;flex-direction:column}
.loc-map iframe{border:0;width:100%;flex:1;min-height:340px}
.loc-map a{display:block;text-align:center;background:#0b3d91;color:#fff;text-decoration:none;padding:12px;font-weight:600}
.loc-map a:hover{background:#082d6b}

.loc-near{margin-top:24px;background:#e6f4ea;border-radius:10px;padding:22px 24px}
.loc-near h3{color:#1e7a3c;margin-bottom:8px}
.loc-near ul{margin-left:20px}

@media(max-width:800px){.loc-layout{grid-template-columns:1fr}}
</style>

<section id="our-school">
  <h2>Our School</h2>
  <p class="loc-lead"><?= e($school['intro']) ?></p>

  <div class="loc-layout">

    <div class="loc-info">
      <div class="loc-card">
        <div class="loc-icon">&#128205;</div>
        <div>
          <h3>Address</h3>
          <p><?= e($school['name']) ?><br>
             Kigeme, <?= e($school['district']) ?><br>
             <?= e($school['province']) ?>, <?= e($school['country']) ?></p>
        </div>
      </div>

      <div class="loc-card">
        <div class="loc-icon">&#128739;</div>
        <div>
          <h3>How to find us</h3>
          <p><?= e($school['directions']) ?></p>
        </div>
      </div>

      <div class="loc-card">
        <div class="loc-icon">&#128222;</div>
        <div>
          <h3>Phone &amp; Email</h3>
          <p><?= e($school['phone']) ?><br><?= e($school['email']) ?></p>
        </div>
      </div>

      <div class="loc-card">
        <div class="loc-icon">&#128339;</div>
        <div>
          <h3>Office hours</h3>
          <p><?= e($school['hours']) ?></p>
        </div>
      </div>
    </div>

    <div class="loc-map">
      <iframe
        title="Map showing <?= e($school['name']) ?>"
        src="https://www.google.com/maps?q=<?= $mapQuery ?>&output=embed"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen></iframe>
      <a href="https://www.google.com/maps/search/?api=1&query=<?= $mapQuery ?>" target="_blank" rel="noopener">Open in Google Maps &rarr;</a>
    </div>

  </div>

  <div class="loc-near">
    <h3>Nearby landmarks</h3>
    <ul>
      <?php foreach ($school['landmarks'] as $landmark): ?>
        <li><?= e($landmark) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
