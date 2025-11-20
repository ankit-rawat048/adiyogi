<section class="yogi-section">
  <div class="overlay"></div>
  <div class="yogi-content">
    <h3 class="subtitle">How It Works</h3>
    <h1 class="title">Rishikesh — A Yogi's Paradise</h1>
    <div class="content">
      <p>
        Nicknamed the birthplace of yoga, this serene town is nestled amidst the serene Himalayan
        foothills by the holy Ganga River. It is a haven for spiritual seekers and yoga
        enthusiasts in equal measure. Its sheer mix of ancient philosophy and natural splendor
        makes it the best destination for anyone who wishes to enrich their practice and connect
        with the divine.
      </p>
      <p>
        With peaceful ashrams, sacred chanting, and daily practices like morning meditations and
        evening aarti, all corners of this town invite you to stop and look within. It’s where
        you can step into a transformative quest for self-knowing and soul-enlarging.
      </p>
    </div>
  </div>
</section>

<style>
/* 🌿 Section Base */
.yogi-section {
  position: relative;
  background-image: url("./adiyogi/DSC02022.jpg");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  color: #fff;
  text-align: center;
  padding: 100px 20px;
  border-radius: 20px;
  overflow: hidden;
  /* font-family: "Poppins", sans-serif; */
  animation: fadeIn 1s ease-in;
}

/* Dark overlay for readability */
.yogi-section .overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.55);
  backdrop-filter: blur(2px);
  z-index: 1;
}

/* Content Container */
.yogi-content {
  position: relative;
  z-index: 2;
  max-width: 900px;
  margin: 0 auto;
}

/* Subheading */
.yogi-section .subtitle {
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 14px;
  color: #f5c469;
  margin-bottom: 12px;
}

/* Main Title */
.yogi-section .title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 30px;
  text-transform: capitalize;
  position: relative;
  display: inline-block;
}

.yogi-section .title::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: #f5c469;
  margin: 10px auto 0;
  border-radius: 2px;
}

/* Paragraphs */
.yogi-section .content p {
  line-height: 1.8;
  font-size: 1rem;
  color: #f0f0f0;
  margin-bottom: 20px;
  text-align: justify;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
}

/* Animation */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* 🌿 Responsive */
@media (max-width: 768px) {
  .yogi-section {
    padding: 70px 20px;
    background-attachment: scroll;
  }

  .yogi-section .title {
    font-size: 1.9rem;
  }

  .yogi-section .content p {
    font-size: 0.95rem;
  }
}
</style>
