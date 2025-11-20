<section class="yoga-courses">
  <h1>Our Yoga Teacher Training Courses</h1>
  <p>
    Enter the realm of true yogic learning with our Yoga Teacher Training Courses, carefully
    designed to provide depth and transformation. Accredited by Yoga Alliance, our courses blend
    the spirit of classical yoga with contemporary teaching techniques. You will learn Asanas,
    Pranayama, Meditation, and Yoga Philosophy in a supportive and immersive setting.
  </p>
  <p>
    Whether you’re beginning your journey or refining your skills, our 200-hour and short-term
    programs help you grow with confidence. Guided by experienced teachers, you’ll gain the
    tools, knowledge, and certification needed to teach yoga globally and inspire others through
    your practice.
  </p>

  <div class="courses-grid">
    <div class="course-card">
      <img src="./images/course1.jpg" alt="300 Hour Yoga Course">
      <div class="course-content">
        <h3>300 Hr Yoga Teacher Training Course <br>(Master Course)</h3>
        <p>The 300 Hour YTTC is an advanced program enhancing Teaching Skills, Deepening
          Yoga Knowledge, and Refining Personal Practice and Discipline.</p>
        <a href="./300-hour-multistyle-yoga-course-india.php" class="btn-learn">Learn More</a>
      </div>
    </div>

    <div class="course-card">
      <img src="./images/course2.jpg" alt="200 Hour Yoga Course">
      <div class="course-content">
        <h3>200 Hr Yoga Teacher Training Course</h3>
        <p>Perfect for beginners seeking foundational knowledge of Yoga Philosophy, Asanas,
          and Meditation in an immersive environment.</p>
        <a href="./200-hour-multistyle-yoga-course-india.php" class="btn-learn">Learn More</a>
      </div>
    </div>

    <div class="course-card">
      <img src="./images/course3.jpg" alt="100 Hour Yoga Course">
      <div class="course-content">
        <h3>100 Hr Yoga Teacher Training Course</h3>
        <p>Short-term program for practitioners who want to deepen their practice
          and understanding of the yogic lifestyle.</p>
        <a href="./100-hour-yoga-course-india.php" class="btn-learn">Learn More</a>
      </div>
    </div>
  </div>
</section>


<style>
    .yoga-courses {
  max-width: 1200px;
  margin: 80px auto;
  padding: 40px 20px;
  text-align: center;
  /* font-family: 'Poppins', sans-serif; */
  color: #333;
  background: linear-gradient(180deg, #fefcfb 0%, #f3e9dd 100%);
  border-radius: 20px;
  box-shadow: 0 5px 30px rgba(0, 0, 0, 0.05);
  animation: fadeIn 1s ease-in-out;
}

.yoga-courses h1 {
  font-size: 36px;
  text-transform: capitalize;
  margin-bottom: 20px;
  color: #2e2e2e;
  position: relative;
}

.yoga-courses h1::after {
  content: '';
  display: block;
  width: 80px;
  height: 3px;
  background: #c59a44;
  margin: 10px auto 0;
  border-radius: 2px;
}

.yoga-courses p {
  font-size: 16px;
  line-height: 1.8;
  color: #555;
  margin-bottom: 25px;
  max-width: 900px;
  margin-left: auto;
  margin-right: auto;
  text-align: justify;
}

/* 🧘 Course Grid */
.courses-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
  gap: 30px;
  margin-top: 50px;
}

.course-card {
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.course-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

.course-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

.course-content {
  padding: 25px;
}

.course-content h3 {
  font-size: 20px;
  color: #222;
  margin-bottom: 15px;
  line-height: 1.4;
}

.course-content p {
  font-size: 15px;
  color: #555;
  margin-bottom: 20px;
}

.btn-learn {
  display: inline-block;
  padding: 10px 20px;
  background: #c59a44;
  color: #fff;
  text-decoration: none;
  border-radius: 25px;
  font-size: 15px;
  transition: background 0.3s ease, transform 0.3s ease;
}

.btn-learn:hover {
  background: #a37f35;
  transform: scale(1.05);
}

/* ✨ Animation */
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
  .yoga-courses h1 {
    font-size: 28px;
  }

  .yoga-courses p {
    font-size: 15px;
  }

  .btn-learn {
    font-size: 14px;
  }
}

</style>