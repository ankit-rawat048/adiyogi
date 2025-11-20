<section class="facilities-section">
  <h1>Our Yoga School Facilities</h1>

  <div class="swiper facilities-slider">
    <div class="swiper-wrapper" id="facilitiesWrapper"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</section>

<style>
  /* 🌸 Overall Section */
.facilities-section {
  background: #fffdf8;
  padding: 90px 40px;
  text-align: center;
}

/* Heading */
.facilities-section h1 {
  font-size: 38px;
  color: #3a3a3a;
  font-weight: 700;
  margin-bottom: 20px;
}

.facilities-section h1::after {
  content: "";
  width: 80px;
  height: 3px;
  background: #b5832e;
  display: block;
  margin: 15px auto 40px;
}

/* Swiper Container */
.facilities-slider {
  width: 100%;
  padding: 30px 10px 50px;
}

/* Slide */
.swiper-slide {
  display: flex;
  justify-content: center;
}

/* Card */
.peace-slide-item {
  background: #fffaf3;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(181, 131, 46, 0.1);
  padding: 30px 20px;
  width: 100%;
  max-width: 350px;
  transition: 0.3s;
  text-align: center;
}

.peace-slide-item:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 25px rgba(181, 131, 46, 0.15);
}

/* Icon Box */
.icon-box {
  width: 80px;
  height: 80px;
  background: #fff;
  border-radius: 50%;
  margin: 0 auto 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(181, 131, 46, 0.1);
}

.icon-box img {
  width: 45px;
  height: 45px;
}

/* Text */
.peace-slide-item-content h3 {
  font-size: 20px;
  color: #9c6b2f;
  margin-bottom: 10px;
  font-weight: 600;
}

.peace-slide-item-content p {
  font-size: 15px;
  color: #555;
  line-height: 1.7;
}

/* Pagination */
.swiper-pagination-bullet {
  background: #b5832e;
  opacity: 0.3;
}

.swiper-pagination-bullet-active {
  opacity: 1;
  transform: scale(1.2);
}

/* Responsive */
@media (max-width: 768px) {
  .facilities-section {
    padding: 60px 20px;
  }
  .facilities-section h1 {
    font-size: 28px;
  }
}

</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const facilities = [
  {
    title: "Accommodation",
    desc: "Clean and cozy rooms with peaceful environments, ideal for rest.",
    icon: "https://adiyogigurukul.com/assets/icons/accommodation.svg",
  },
  {
    title: "Yoga Halls",
    desc: "Spacious halls with Himalayan views for calm yoga practice.",
    icon: "https://adiyogigurukul.com/assets/icons/yoga-halls.svg",
  },
  {
    title: "Library",
    desc: "Books on yoga, Ayurveda, spirituality and philosophy.",
    icon: "https://adiyogigurukul.com/assets/icons/library.svg",
  },
  {
    title: "Wi-Fi",
    desc: "Reliable Wi-Fi across the entire campus.",
    icon: "https://adiyogigurukul.com/assets/icons/wifi.svg",
  },
  {
    title: "Sattvic Meals",
    desc: "Pure vegetarian meals promoting health and balance.",
    icon: "https://adiyogigurukul.com/assets/icons/satvik-meals.svg",
  },
  {
    title: "Ayurveda Center",
    desc: "Authentic Ayurvedic therapies to detox and relax.",
    icon: "https://adiyogigurukul.com/assets/icons/ayurveda-center.svg",
  },
];

// Insert Slides
const wrapper = document.getElementById("facilitiesWrapper");

facilities.forEach((f) => {
  wrapper.innerHTML += `
    <div class="swiper-slide">
      <div class="peace-slide-item">
        <div class="icon-box">
          <img src="${f.icon}" alt="${f.title}">
        </div>
        <div class="peace-slide-item-content">
          <h3>${f.title}</h3>
          <p>${f.desc}</p>
        </div>
      </div>
    </div>
  `;
});

// Initialize Swiper
new Swiper(".facilities-slider", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 1800,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});
</script>
