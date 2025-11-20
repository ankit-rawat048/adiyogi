<section class="meal-section">
  <h1>Meal Highlights</h1>

  <div class="swiper meal-slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="meal-item">
          <img src="./adiyogi/satvik-food.webp" alt="Satvic Diet">
          <h4>Satvic Diet</h4>
          <p>Plant-based meals promoting clarity, health, and balance based on Ayurveda.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="meal-item">
          <img src="./adiyogi/fresh-ingredients.webp" alt="Fresh Ingredients">
          <h4>Fresh Ingredients</h4>
          <p>Locally sourced, seasonal ingredients ensuring freshness, flavor, and nutritional value.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="meal-item">
          <img src="./adiyogi/customizable-option.webp" alt="Customizable Options">
          <h4>Customizable Options</h4>
          <p>Vegetarian, gluten-free, and dairy-free options cater to all dietary needs.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="meal-item">
          <img src="./adiyogi/fresh-juices.webp" alt="Daily Fresh Juices">
          <h4>Daily Fresh Juices</h4>
          <p>Fresh fruit and vegetable juices prepared daily to energize your mornings.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="meal-item">
          <img src="./adiyogi/cultural-flavours.webp" alt="Cultural Flavors">
          <h4>Cultural Flavors</h4>
          <p>Enjoy authentic Indian dishes blending traditional flavors with nutritious ingredients.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="meal-item">
          <img src="./adiyogi/balance-nutitiion.webp" alt="Balanced Nutrition">
          <h4>Balanced Nutrition</h4>
          <p>Meals designed to provide nutrients, boosting energy, vitality, and health.</p>
        </div>
      </div>

    </div>

    <!-- Pagination & Navigation -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

  </div>
</section>


<style>
.meal-section {
  background: #f9f7f2;
  padding: 80px 10%;
  text-align: center;
  /* font-family: "Poppins", sans-serif; */
}

.meal-section h1 {
  font-size: 2.5rem;
  color: #2c3e50;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 50px;
  position: relative;
}

.meal-section h1::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: #c8a97e;
  margin: 10px auto 0;
  border-radius: 5px;
}

.meal-slider {
  padding: 20px 0 50px;
}

.meal-item {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: #fff;
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: 0.3s ease;
}

.meal-item:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.meal-item img {
  height: 80px;
  object-fit: cover;
  border-radius: 12px;
  margin-bottom: 15px;
}

.meal-item h4 {
  font-size: 1.2rem;
  color: #2e3d34;
  margin-bottom: 10px;
  font-weight: 600;
}

.meal-item p {
  font-size: 0.95rem;
  color: #555;
  line-height: 1.6;
}

/* Slider Buttons */
.swiper-button-next,
.swiper-button-prev {
  color: #c8a97e;
}

.swiper-pagination-bullet {
  background: #c8a97e;
}

@media (max-width: 768px) {
  .meal-section {
    padding: 60px 6%;
  }

  .meal-section h1 {
    font-size: 2rem;
  }

  .meal-item img {
    height: 150px;
  }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
new Swiper(".meal-slider", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  breakpoints: {
    0:   { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024:{ slidesPerView: 3 }
  }
});
</script>
