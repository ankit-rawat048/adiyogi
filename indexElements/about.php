<!-- ABOUT SECTION -->
<section class="about-section">
  <div class="about-container">
    <div class="about-image">
      <img src="./adiyogi/DSC01923.jpg" alt="Adiyogi Gurukul Rishikesh">
    </div>

    <div class="about-text">
      <h3>About Us</h3>
      <h1>Welcome to Adiyogi Gurukul</h1>

      <div class="about-content">
        <p>
          Adiyogi, the first yogi, nourishes us with his teachings, which is why we follow
          the Indian tradition when it comes to yoga. Our programs include a 200-hour
          teacher’s training course, 100-hour short course, Hatha Yoga, Ashtanga Yoga,
          Pranayama, as well as Meditation and Yoga Philosophy. Adiyogi Gurukul is also an
          accredited center of Yoga Alliance.
        </p>

        <p>
          With great balance, Adiyogi Gurukul Yoga School integrates timeless yogic truths
          with today’s world. Located in the yoga capital of the world — Rishikesh, our
          peaceful environment allows you to undergo deep self-introspection and
          transformation.
        </p>

        <p>
          Every master with us has years of experience, and each session they lead is a
          dive into the incredible world of yoga. Additionally, we provide cleansing yoga,
          kriya, controlled breathing, and mantras that calm the mind and enable holistic
          healing.
        </p>

        <p>
          Your yoga journey begins when you step into the serene world of Rishikesh, India.
          Adiyogi Gurukul is where yoga becomes a way of life, guiding you toward becoming
          an internationally certified yoga instructor.
        </p>
      </div>

      <!-- <div class="hero-btn">
        <a href="contact-us.php">Join Us Today</a>
      </div> -->
    </div>
  </div>

<!-- <img src="./adiyogi/pngtree-blue-mandala.png" alt="" class="phool"> -->

</section>

<style>
/* ==== ABOUT SECTION ==== */
.about-section {
  /* background: linear-gradient(to bottom right, #0f0f0f, #1c1c1c); */
  /* color: #fff; */
  padding: 5rem 2rem;
  /* font-family: "Poppins", sans-serif; */
  position: relative;
  overflow: hidden;
}

.about-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: url("https://www.transparenttextures.com/patterns/dark-mosaic.png");
  opacity: 0.08;
  z-index: 0;
}

/* Layout */
.about-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
  gap: 3rem;
  position: relative;
  z-index: 1;
}

.about-image {
  flex: 1 1 400px;
  text-align: center;
}

.about-image img {
  width: 100%;
  max-width: 480px;
  border-radius: 20px;
  object-fit: cover;
  transition: transform 0.5s ease, box-shadow 0.3s ease;
}

.about-image img:hover {
  transform: scale(1.03);
  box-shadow: 0 20px 40px rgba(255, 255, 255, 0.15);
}

.about-text {
  flex: 1 1 500px;
  text-align: left;
}

.about-text h3 {
  font-size: 1.1rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 0.5rem;
}

.about-text h1 {
  font-size: 2.4rem;
  margin-bottom: 1.8rem;
  position: relative;
}

.about-content {
  
  line-height: 1.8;
  font-size: 1rem;
  margin-bottom: 2rem;
}

.about-content p {
  margin-bottom: 1.3rem;
}



/* Animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.about-section {
  animation: fadeInUp 1.2s ease-out;
}
/* 

    .phool {
    position: absolute;
    top:70%;
    right: 0%;
    animation: rotate 7s linear infinite;
    opacity:0.12;
    width:200px;
}

@keyframes rotate {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
} */


/* Responsive */
@media (max-width: 992px) {
  .about-container {
    flex-direction: column;
    text-align: center;
  }

  .about-text {
    text-align: center;
  }

  .about-text h1 {
    font-size: 2rem;
  }

  .about-image{
        width: 100%;
        flex: 1;
  }

  .about-image img {
    max-width: 100%;
    height: 200px;
    background-size: cover;
    background-position: bottom;
  }
}
</style>
