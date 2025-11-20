<section class="short-term-yoga">
  <h1>Our Short-Term Yoga Courses</h1>
  <p>
    Short-term yoga courses are perfect for anyone who wants to experience the true spirit of yoga in a
    short span. Whether you are a visitor, a newcomer, or a person seeking to deepen your practice.
  </p>

  <div class="course-slider">
    <div class="slider-track">

      <!-- Ayurveda Course -->
      <div class="course-card">
        <img src="./adiyogi/DSC02095.jpg" alt="Ayurveda Course">
        <div class="course-info">
          <h3>Ayurveda Courses</h3>
          <p>Learn ancient Ayurvedic principles for holistic healing.</p>
          <a href="./ayurveda-yoga-course.php" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Astrology Course -->
      <div class="course-card">
        <img src="./adiyogi/DSC02096.jpg" alt="Astrology Course">
        <div class="course-info">
          <h3>Astrology for Spirituality</h3>
          <p>Discover Vedic astrology for inner balance and growth.</p>
          <a href="./astrology-for-sprituality-12-days.php" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Sound Healing -->
      <div class="course-card">
        <img src="./adiyogi/DSC02099.jpg" alt="Sound Healing">
        <div class="course-info">
          <h3>Sound Healing</h3>
          <p>Experience vibrational therapy for deep inner healing.</p>
          <a href="./sound-healing-advanced-level.php" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Online TTC -->
      <div class="course-card">
        <img src="./adiyogi/DSC02090.jpg" alt="Online Yoga TTC">
        <div class="course-info">
          <h3>Online Yoga TTC</h3>
          <p>Yoga Alliance-accredited online teacher training program.</p>
          <a href="./online-yoga-ttc.php" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Daily Drop-in -->
      <div class="course-card">
        <img src="./adiyogi/DSC02042.jpg" alt="Daily Yoga">
        <div class="course-info">
          <h3>Daily Drop-in Classes</h3>
          <p>Join daily online yoga sessions to refresh and energize.</p>
          <a href="./daily-online-yoga-classes.php" class="btn-learn">Learn More</a>
        </div>
      </div>

    </div>
  </div>

  <!-- <img src="./adiyogi/pngtree-blue-mandala.png" alt="" class="phool-three"> -->
  <!-- <img src="./adiyogi/pngtree-blue-mandala.png" alt="" class="phool-four"> -->

</section>

<style>
  .short-term-yoga {
  background: linear-gradient(180deg, #fffdf8 0%, #f7f1ea 100%);
  padding: 100px 40px;
  text-align: center;
  color: #333;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

/* Heading */
.short-term-yoga h1 {
  font-size: clamp(2rem, 4vw, 2.8rem);
  color: #1a1a1a;
  margin-bottom: 1.5rem;
  text-transform: capitalize;
}

/* Description */
.short-term-yoga p {
  max-width: 850px;
  margin: 0 auto 70px;
  font-size: 1.08rem;
  color: #555;
  line-height: 1.9;
  text-align: justify;
}

/* =======================================
   🌼 SMOOTH INFINITE SLIDER
   ======================================= */
.course-slider {
  width: 100%;
  max-width: 1269px;
  overflow: hidden;
}

.slider-track {
  display: flex;
  gap: 25px;
  animation: slideLoop 20s linear infinite;
}

@keyframes slideLoop {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

.course-card {
  min-width: 280px;
  
  max-width: 300px;
  border-radius: 8px;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
      display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

/* Image */
.course-card img {
  width: 100%;
  height: 230px;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.course-card:hover img {
  transform: scale(1.07);
}

/* Info */
.course-info {
  padding: 28px 22px 35px;
}

.course-info h3 {
  font-size: 1.35rem;
  color: #c59a44;
  margin-bottom: 12px;
  font-weight: 600;
}

.course-info p {
  font-size: 1rem;
  color: #444;
  line-height: 1.75;
  margin-bottom: 25px;
}

/* Button */
.btn-learn {
  display: inline-block;
  padding: 10px 26px;
  background: #c59a44;
  color: #fff;
  border-radius: 25px;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-decoration: none;
  transition: 0.3s ease;
}

.btn-learn:hover {
  background: #a67f35;
  transform: translateY(-3px);
}

 /* .phool-three {
    position: absolute;
    top: -12%;
    left: 0%;
    animation: rotate 10s linear infinite;
    opacity:0.12;
    width:400px;
}
.phool-four {
    position: absolute;
    top: -12%;
    right: 0%;
    animation: rotate 10s linear infinite;
    opacity:0.12;
    width:400px;
}

@keyframes rotate {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(-360deg);
    }
} */
/* Responsive */
@media (max-width: 768px) {
  .short-term-yoga {
    padding: 70px 20px;
  }
  .short-term-yoga p {
    margin-bottom: 50px;
  }
}

</style>

<script>
const track = document.querySelector(".slider-track");
const cards = [...track.children];

// Duplicate all cards for infinite looping
cards.forEach(card => {
  track.appendChild(card.cloneNode(true));
});
</script>
