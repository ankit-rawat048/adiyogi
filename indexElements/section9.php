<section class="course-features">
  <h1>course highlights & key features</h1>
  <p>
    Adiyogi Gurukul has earned a reputation as one of the most respected yoga schools in Rishikesh, and for
    good reason. Our commitment to excellence, combined with our passion for yoga, makes us the preferred
    choice for students from around the world.
  </p>

  <div class="feature-grid">
    <div class="feature-box">
      <h2>course syllabus</h2>
      <ul>
        <li>shatkarmas (kriyas)</li>
        <li>pranayama</li>
        <li>morning hatha yoga practice</li>
        <li>yoga philosophy</li>
        <li>ayurveda & nutrition diet</li>
        <li>yoga anatomy & physiology</li>
        <li>adjustment & alignment</li>
        <li>evening ashtanga vinyasa session</li>
        <li>meditation</li>
        <li>mudras & bandhas</li>
        <li>teaching methodology</li>
        <li>introduction to astrology</li>
      </ul>
    </div>

    <div class="feature-box">
      <h2>cost includes</h2>
      <ul>
        <li>free taxi pick-up</li>
        <li>accommodation</li>
        <li>3 meals a day during the course</li>
        <li>special dietary (raw, vegan, gluten-free)</li>
        <li>airy room with balcony</li>
        <li>attached bathroom with hot water</li>
        <li>24*7 free wi-fi</li>
        <li>2 times tea a day</li>
        <li>24*7 filtered drinking water</li>
        <li>teaching materials & modules</li>
        <li>ayurvedic body massage</li>
        <li>yoga alliance certificate</li>
      </ul>
    </div>

    <div class="feature-box">
      <h2>courses & excursions</h2>
      <ul>
        <li>opening hawan</li>
        <li>wellness retreat in the himalayas</li>
        <li>parmarth niketan ashram</li>
        <li>kunjapuri temple tour</li>
        <li>outdoor yoga by the ganges</li>
        <li>meditation cave tour</li>
        <li>13th floor bhoothnath temple</li>
        <li>classical music concert</li>
        <li>dance class</li>
        <li>satsang retreat by the ganges</li>
        <li>outdoor play in the garden</li>
      </ul>
    </div>
  </div>
</section>


<style>
    .course-features {
  max-width: 1100px;
  margin: 100px auto;
  padding: 60px 40px;
  background: #fffef9;
  border-radius: 20px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.06);
  text-align: center;
  /* font-family: "Poppins", sans-serif; */
}

.course-features h1 {
  font-size: 36px;
  color: #3a3a3a;
  text-transform: capitalize;
  font-weight: 700;
  margin-bottom: 20px;
  position: relative;
}

.course-features h1::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: #b5832e;
  margin: 14px auto 0;
  border-radius: 2px;
}

.course-features p {
  color: #555;
  font-size: 16px;
  line-height: 1.8;
  margin-bottom: 60px;
  max-width: 850px;
  margin-left: auto;
  margin-right: auto;
}

/* 🌸 Feature grid */
.feature-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
  gap: 30px;
  text-align: left;
}

.feature-box {
  background: #fffaf3;
  padding: 30px 25px;
  border-radius: 15px;
  box-shadow: 0 2px 15px rgba(181, 131, 46, 0.1);
  transition: all 0.3s ease;
}

.feature-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(181, 131, 46, 0.15);
}

.feature-box h2 {
  color: #9c6b2f;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 15px;
  position: relative;
}

.feature-box h2::after {
  content: "";
  display: block;
  width: 50px;
  height: 2px;
  background: #d4a373;
  margin-top: 8px;
  border-radius: 2px;
}

.feature-box ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.feature-box ul li {
  font-size: 15px;
  color: #444;
  margin: 10px 0;
  padding-left: 25px;
  position: relative;
  line-height: 1.6;
}

.feature-box ul li::before {
  content: "☀️";
  position: absolute;
  left: 0;
  top: 0;
  font-size: 16px;
  color: #b5832e;
}

/* 🌱 Responsive Design */
@media (max-width: 768px) {
  .course-features {
    padding: 40px 20px;
  }
  .course-features h1 {
    font-size: 28px;
  }
  .feature-box h2 {
    font-size: 18px;
  }
  .feature-box ul li {
    font-size: 14px;
  }
}

</style>