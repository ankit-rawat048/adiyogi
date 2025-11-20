<footer class="footer-main">
  <div class="footer-container">

    <!-- Header Section -->
    <div class="footer-header">
      <div class="footer-about">
        <div class="about-footer-content">
          <h3>About</h3>
          <p>
            Adiyogi Gurukul in Rishikesh offers traditional yoga training rooted in
            Vedic and Himalayan traditions, focusing on discipline, spiritual growth,
            and authentic yogic wisdom.
          </p>
        </div>
      </div>

      <div class="footer-social-links">
        <ul>
          <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>

    <!-- Footer Grid Section -->
    <div class="footer-grid">

      <!-- Contact -->
      <div class="footer-links link-three footer-contact-links">
        <h3>Contact</h3>
        <ul>
          <li><i class="fa-solid fa-location-crosshairs"></i> Adiyogi Gurukul, Tapovan, Rishikesh</li>
          <li><i class="fa-solid fa-phone"></i> <a href="tel:+919389393809">+91 93893 93809</a></li>
          <li><i class="fa-solid fa-envelope"></i> <a href="mailto:gurukuladiyogi@gmail.com">gurukuladiyogi@gmail.com</a></li>
        </ul>
      </div>

      <!-- Quick Links -->
      <div class="footer-links link-two">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="./about-us.php">About Us</a></li>
          <li><a href="./rishikesh-yoga-photos-gallery.php">Gallery</a></li>
          <li><a href="./yogic-food-and-ashram-stay.php">Food &amp; Stay</a></li>
          <!-- <li><a href="./our-teachers.php">Yoga Teachers</a></li> -->
          <!-- <li><a href="./payment-policy.php">Payment Policy</a></li> -->
          <li><a href="#">Blog</a></li>
          <li><a href="./contact-us.php">Contact Us</a></li>
          <!-- <li><a href="https://faqyoga.in/">FAQs</a></li> -->
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-links link-three">
        <h3>Our Services</h3>
        <ul>
          <li><a href="./yogaretreat.php">Yoga Retreat</a></li>
          <li><a href="./online-yoga-ttc.php">Online Yoga TTC</a></li>
          <li><a href="./daily-online-yoga-classes.php">Daily Drop-In</a></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- Copyright Section -->
  <div class="footer-bottom">
    <p>© 2025 Adiyogi Gurukul. All Rights Reserved.</p>

    <ul class="footer-bottom-links">
      <li><a href="./privacy-policy.php">Privacy Policy</a></li>
      <li><a href="./terms-conditions.php">Terms &amp; Conditions</a></li>
      <li><a href="#">Sitemap</a></li>
    </ul>
  </div>
</footer>


<style>
  /* ===== FOOTER BASE ===== */
.footer-main {
  background: linear-gradient(to top right, #0d1b1e, #1c2e2c);
  color: #e6e6e6;
  padding: 80px 20px 40px;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
}

/* ===== HEADER SECTION ===== */
.footer-header {
  text-align: center;
  margin-bottom: 50px;
}

.footer-about h3 {
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #f1f1f1;
  margin-bottom: 10px;
}

.footer-about p {
  color: #dcdcdc;
  font-size: 0.95rem;
  line-height: 1.7;
  max-width: 700px;
  margin: 0 auto 20px;
}

/* ===== SOCIAL LINKS ===== */
.footer-social-links ul {
  list-style: none;
  display: flex;
  justify-content: center;
  gap: 15px;
  padding: 0;
}

.footer-social-links a {
  color: #c8a97e;
  font-size: 1.3rem;
  transition: color 0.3s ease;
}

.footer-social-links a:hover {
  color: #f4e3b2;
}

/* ===== GRID SECTION ===== */
.footer-grid {
  display:flex;
  /* justify-content:space-between; */
  align-items:center;
  margin-bottom: 40px;
}

/* ===== LINKS & TITLES ===== */
.footer-links {
  width:33.33%;
}

.link-one{
  display:flex;
  flex-direction:column;
  justify-content:start;
  align-items:center;
}

.link-two{
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
}

.link-three{
  display:flex;
  flex-direction:column;
  justify-content:end;
  align-items:center;
}

.footer-links h3 {
  color: #f3f3f3;
  font-size: 1.2rem;
  margin-bottom: 15px;
  position: relative;
}

.footer-links h3::after {
  content: "";
  display: block;
  width: 50px;
  height: 2px;
  background: #c8a97e;
  margin-top: 8px;
  border-radius: 3px;
}

.footer-links ul {
  list-style: none;
  padding: 0;
}

.footer-links ul li {
  margin-bottom: 8px;
  color: #ccc;
}

.footer-links ul li a {
  color: #ccc;
  text-decoration: none;
  font-size: 0.95rem;
  transition: color 0.3s ease;
}

.footer-links ul li a:hover {
  color: #c8a97e;
}

.footer-contact-links i {
  color: #c8a97e;
  margin-right: 10px;
}

/* ===== BOTTOM COPYRIGHT SECTION ===== */
.footer-bottom {
  border-top: 1px solid rgba(255, 255, 255, 0.15);
  padding-top: 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  font-size: 0.9rem;
  color: #bbb;
  gap: 10px;
}

.footer-bottom p {
  margin: 0;
}

/* Bottom Links */
.footer-bottom-links {
  list-style: none;
  display: flex;
  gap: 18px;
  margin: 0;
  padding: 0;
}

.footer-bottom-links a {
  color: #ccc;
  text-decoration: none;
  font-size: 0.9rem;
  transition: color 0.3s ease;
}

.footer-bottom-links a:hover {
  color: #c8a97e;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .footer-bottom {
    flex-direction: column;
    text-align: center;
  }
  
  .footer-bottom-links {
    justify-content: center;
  }

  .footer-grid{
   flex-direction:column;
   justify-content:start;
   align-items:start;
  }

  .footer-links{
    width:100%;
        align-items: flex-start;

  }
}

</style>