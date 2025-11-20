<!-- ===== CAREER SECTION ===== -->
<section class="career-section">
  <h1>Build Your Yoga Teaching Career with Adiyogi Gurukul</h1>
  <p>
    Begin your journey toward becoming a confident and certified Yoga Instructor with Adiyogi Gurukul Yoga School.
    Our Yoga Alliance–Certified Teacher Training Programs blend the eternal wisdom of traditional Indian yoga with
    modern teaching practices. Designed to empower both your personal and professional growth, our courses help you
    gain the awareness, skills, and confidence to share authentic yoga across the world.
  </p>

  <div class="career-container">
    <div class="career-image">
      <img src="./adiyogi/DSC01898.jpg" alt="Adiyogi Yoga Teacher Training" class="career-img" />
    </div>

    <div class="cards">
      <div class="card">
        <h3>Authentic Training</h3>
        <p>
          Immerse yourself in the true yogic way of life with a curriculum rooted in India’s ancient
          traditions. From satvik meals and Ayurvedic therapies to mantra chanting and Kirtan, every 
          aspect of your stay is designed to align your body, mind, and spirit. Students experience
          personalized guidance from seasoned masters, ensuring deep learning beyond the physical postures.
          At Adiyogi Gurukul, you don’t just learn yoga — you live it every moment.
        </p>
      </div>

      <div class="card">
        <h3>Supportive Environment</h3>
        <p>
          We believe that growth blossoms in a compassionate and supportive atmosphere. Our experienced
          teachers and spiritual mentors guide you through every stage of your transformation with
          patience and care. You’ll practice amidst a like-minded community that shares your dedication
          to mindfulness and self-discovery. Every session encourages balance, positivity, and authentic
          connection with yourself and others.
        </p>
      </div>

      <div class="card">
        <h3>Global Certificate & Growth</h3>
        <p>
          Train in the divine surroundings of Rishikesh — the world’s yoga capital — and earn a Yoga 
          Alliance–recognized certification that opens global opportunities. Our programs are crafted
          to prepare you for both teaching and personal mastery, equipping you with universal yoga
          principles adaptable to any culture or setting. Graduates of Adiyogi Gurukul walk away with
          confidence, clarity, and the ability to inspire others through true yogic wisdom.
        </p>
      </div>
    </div>
  </div>

<!-- <img src="./adiyogi/pngtree-blue-mandala.png" alt="" class="phool-two"> -->

</section>

<style>
/* ===== CAREER SECTION ===== */
.career-section {
  background: #ffffff;
  color: #333;
  padding: 6rem 2rem;
  /* font-family: "Poppins", sans-serif; */
  text-align: center;
  position: relative;
  overflow: hidden;
}

.career-section h1 {
  font-size: 2.6rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
  color: #1a1a1a;
}

.career-section p {
  max-width: 850px;
  margin: 0 auto 4rem;
  line-height: 1.8;
  font-size: 1.05rem;
  color: #555;
  opacity: 0.95;
}

/* ===== CONTAINER LAYOUT ===== */
.career-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  gap: 2rem;
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
}

/* ===== IMAGE ===== */
.career-image {
  flex: 1 1 45%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.career-img {
  width: 100%;
  /* max-width: 500px; */
  border-top-left-radius: 30%;
  border-bottom-right-radius: 30%;
  object-fit: cover;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
  transition: transform 0.5s ease;
}

.career-img:hover {
  transform: scale(1.03);
}

/* ===== CARDS ===== */
.cards {
  flex: 1 1 50%;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.card {
  text-align: left;
  border-bottom: 1px solid #e6e6e6;
  /* padding-bottom: 1.5rem; */
}

.card h3 {
  font-size: 1.4rem;
  margin-bottom: 0.8rem;
  color: #222;
}

/* .card p {
  color: #444;
  line-height: 1.8;
  font-size: 1rem;
} */

/* ===== ANIMATION (Optional subtle fade) ===== */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.career-section {
  animation: fadeInUp 1.2s ease-out;
}

 /* .phool-two {
    position: absolute;
    top: 36%;
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
        transform: rotate(360deg);
    }
} */
/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
  .career-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .career-img {
    max-width: 90%;
    border-radius: 20px;
  }

  .cards {
    flex: 1 1 100%;
    text-align: center;
  }

  .card {
    text-align: center;
    padding-bottom: 1.2rem;
  }

  .career-section h1 {
    font-size: 2.2rem;
  }
}
</style>
