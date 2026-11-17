
<?php
// includes/footer.php
?>

<style>
.school-footer {
    background: #082e19;
    color: #d7e8dc;
    padding: 45px 7% 20px;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: auto;
}

.footer-title {
    color: #e0b32e;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 18px;
}

.footer-text {
    line-height: 1.8;
    font-size: 14px;
}

.social-links {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.social-btn {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 11px 17px;
    border-radius: 25px;
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 13px;
    transition: .3s;
}

.social-btn:hover {
    transform: translateY(-4px);
    filter: brightness(1.12);
    color: white;
}

.whatsapp { background: #25D366; }
.instagram {
    background: linear-gradient(45deg,#feda75,#d62976,#962fbf,#4f5bd5);
}
.facebook { background: #1877F2; }
.youtube { background: #FF0000; }

.subscribe-form input {
    width: 100%;
    padding: 12px;
    border: 1px solid #557b62;
    border-radius: 7px;
    margin-bottom: 12px;
    outline: none;
}

.subscribe-form input:focus {
    border-color: #e0b32e;
}

.subscribe-form button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 7px;
    background: #e0b32e;
    color: #082e19;
    font-weight: bold;
    cursor: pointer;
    transition: .3s;
}

.subscribe-form button:hover {
    background: #f5ca4b;
    transform: translateY(-2px);
}

.footer-message {
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 12px;
    font-size: 13px;
}

.footer-success {
    background: #d1fae5;
    color: #065f46;
}

.footer-error {
    background: #fee2e2;
    color: #991b1b;
}

.footer-bottom {
    border-top: 1px solid #31583e;
    margin-top: 35px;
    padding-top: 20px;
    text-align: center;
    font-size: 13px;
}

.footer-bottom a {
    color: #e0b32e;
    text-decoration: none;
}

.whatsapp-float {
    position: fixed;
    right: 22px;
    bottom: 22px;
    width: 58px;
    height: 58px;
    border-radius: 50%;
    background: #25D366;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 29px;
    text-decoration: none;
    box-shadow: 0 5px 18px #0005;
    z-index: 999;
    transition: .3s;
}

.whatsapp-float:hover {
    transform: scale(1.1);
    color: white;
}

@media(max-width:600px) {
    .school-footer { padding: 35px 6% 20px; }
    .social-btn { font-size: 12px; }
}
</style>

<footer class="school-footer">
    <div class="footer-container">

        <!-- SCHOOL INFORMATION -->
        <div>
            <h3 class="footer-title">GS KIGEME-A</h3>
            <p class="footer-text">
                An Anglican Church secondary school managed by
                the Anglican Church of Rwanda, Diocese of Kigeme.
            </p>
            <p class="footer-text">
                <strong>Our Motto:</strong><br>
                Learning Today, Leading Tomorrow.
            </p>
        </div>

        <!-- LOCATION -->
        <div>
            <h3 class="footer-title">Our Location</h3>
            <p class="footer-text">
                <i class="bi bi-geo-alt-fill"></i>
                Kigeme Cell, Gasaka Sector,<br>
                Nyamagabe District,<br>
                Southern Province, Rwanda.
            </p>
            <p class="footer-text">
                <i class="bi bi-envelope-fill"></i>
                Visit our school for more information.
            </p>
        </div>

        <!-- SOCIAL MEDIA -->
        <div>
            <h3 class="footer-title">Follow Our School</h3>

            <div class="social-links">
                <a class="social-btn whatsapp"
                   href="https://wa.me/250788600587"
                   target="_blank" rel="noopener">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>

                <a class="social-btn instagram"
                   href="https://www.instagram.com/YOUR_INSTAGRAM_USERNAME/"
                   target="_blank" rel="noopener">
                    <i class="bi bi-instagram"></i> Instagram
                </a>

                <a class="social-btn facebook"
                   href="https://www.facebook.com/YOUR_FACEBOOK_PAGE/"
                   target="_blank" rel="noopener">
                    <i class="bi bi-facebook"></i> Facebook
                </a>

                <a class="social-btn youtube"
                   href="https://www.youtube.com/@YOUR_CHANNEL"
                   target="_blank" rel="noopener">
                    <i class="bi bi-youtube"></i> YouTube
                </a>
            </div>
        </div>

        <!-- SUBSCRIBE -->
        <div>
            <h3 class="footer-title">Subscribe Us</h3>
            <p class="footer-text">
                Subscribe to receive school news and announcements.
            </p>

            <?php if (!empty($_SESSION['subscribe_success'])): ?>
                <div class="footer-message footer-success">
                    <?= htmlspecialchars($_SESSION['subscribe_success']) ?>
                </div>
                <?php unset($_SESSION['subscribe_success']); ?>
            <?php endif; ?>

            <?php if (!empty($_SESSION['subscribe_error'])): ?>
                <div class="footer-message footer-error">
                    <?= htmlspecialchars($_SESSION['subscribe_error']) ?>
                </div>
                <?php unset($_SESSION['subscribe_error']); ?>
            <?php endif; ?>

            <form class="subscribe-form"
                  method="POST"
                  action="/project/subscribe.php">

                <input type="hidden" name="csrf_token"
                       value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '') ?>">

                <input type="text"
                       name="username"
                       placeholder="Your full name"
                       maxlength="100"
                       required>

                <input type="email"
                       name="email"
                       placeholder="Your email address"
                       maxlength="190"
                       required>

                <button type="submit" name="subscribe">
                    <i class="bi bi-envelope-check"></i>
                    Subscribe Now
                </button>
            </form>
        </div>

    </div>

    <div class="footer-bottom">
        &copy; <?= date('Y') ?> GS KIGEME-A.
        All Rights Reserved.
        <br>
        <span>Learning Today, Leading Tomorrow.</span>
    </div>
</footer>

<a href="https://wa.me/250788600587"
   class="whatsapp-float"
   target="_blank" rel="noopener"
   aria-label="Contact GS Kigeme A on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>
