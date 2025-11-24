<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adiyogi Gurukul | Yogic Food & Stay</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://adiyogigurukul.com/assets/favicon.png">

  <style>
/* -----------------------------------
   Base Styles
----------------------------------- */
body {
  background-color: #f8f9f4;
  color: #333;
  font-family: "Poppins", sans-serif;
  line-height: 1.7;
}

.main-content {
  padding: 2rem 1rem;
}

/* -----------------------------------
   Section Titles
----------------------------------- */
.section-title {
  text-align: center;
  color: #2e4a3c;
  font-size: 2rem;
  margin: 2rem 0 1rem;
  position: relative;
  font-weight: 600;
}

.section-title::after {
  content: "";
  width: 80px;
  height: 3px;
  background-color: #84a98c;
  margin: 0.5rem auto;
  border-radius: 4px;
  display: block;
}

.section-text {
  max-width: 900px;
  margin: 0.5rem auto;
  color: #555;
  text-align: justify;
}

/* -----------------------------------
   Food Type Box
----------------------------------- */
.food-types {
  max-width: 800px;
  margin: 1.5rem auto;
  background: white;
  padding: 1.5rem;
  border-radius: 12px;
  display: flex;
  gap: 1rem;
  align-items: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.food-types img {
  border-radius: 8px;
  width: 120px;
  height: 120px;
  object-fit: cover;
}

.highlight {
  color: #52796f;
  font-weight: 600;
}

/* -----------------------------------
   Section Images
----------------------------------- */
.section-image {
  margin: 2rem 0;
  display: flex;
  justify-content: center;
}

.section-image img {
  width: 100%;
  max-width: 900px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

/* -----------------------------------
   Feature Cards
----------------------------------- */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
  gap: 1.5rem;
  max-width: 900px;
  margin: 2rem auto;
}

.feature-card {
  background: white;
  padding: 1rem;
  border-radius: 12px;
  text-align: center;
  transition: 0.3s ease;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.feature-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

.feature-card img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-bottom: 0.5rem;
  object-fit: cover;
}

/* -----------------------------------
   Gallery Grid
----------------------------------- */
.gallery-grid {
  max-width: 1000px;
  margin: 2rem auto;
  display: grid;
  gap: 1rem;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
}

.gallery-grid img {
  width: 100%;
  border-radius: 10px;
  transition: 0.3s;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.gallery-grid img:hover {
  transform: scale(1.05);
}

/* -----------------------------------
   FAQ
----------------------------------- */
.faq {
  max-width: 900px;
  margin: 3rem auto;
}

.faq-item {
  background: white;
  padding: 1rem;
  border-radius: 12px;
  margin-bottom: 1rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.faq-question {
  font-weight: 600;
  color: #2e4a3c;
}

.faq-answer {
  background: #f9fafb;
  padding: 1rem;
  margin-top: 0.6rem;
  border-radius: 8px;
  color: #444;
}

/* -----------------------------------
   Responsive
----------------------------------- */
@media (max-width: 768px) {
  .food-types {
    flex-direction: column;
    text-align: center;
  }

  .feature-card{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
}
  </style>
</head>

<body>

<?php include('components/header.php'); ?>

<main class="main-content">

  <!-- Header Section -->
  <div
    class="page-header-food text-center text-white py-20 relative"
    style="background: url('https://www.hindustantimes.com/ht-img/img/2025/09/06/550x309/2150062631_1757133283390_1757133302556.jpg') center/cover no-repeat;"
  >
    <div class="absolute inset-0 bg-black/60"></div>

    <h1 class="relative text-4xl text-white font-bold z-10">
      Food <span class="text-[#a7c957]">& Stay</span>
    </h1>

    <nav class="relative breadcrumb z-10 mt-2 text-gray-200">
      <a href="index.php" class="text-[#a7c957]">Home</a> /
      <span class="text-gray-300">Food & Stay</span>
    </nav>
  </div>

  <!-- Yogic Food Section -->
  <section>
    <h1 class="section-title">Yogic Food at Adiyogi Gurukul</h1>
    <p class="section-text">
      At Adiyogi Gurukul, we believe that food plays a vital role in our physical, emotional, and mental well-being. In yoga, food is not categorized like proteins, carbs, or fats, but rather by its impact on the body and mind. It is classified in three types:
    </p>

    <div class="food-types">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAkQQfemmzCsQ166I_8cgFB4L4sLygb7v9_w&s" alt="Food Types" />
      <div>
        <p><span class="highlight">Sattva</span> — promotes purity, clarity, and balance.</p>
        <p><span class="highlight">Rajas</span> — stimulates activity and restlessness.</p>
        <p><span class="highlight">Tamas</span> — leads to lethargy and dullness.</p>
      </div>
    </div>

    <p class="section-text">
      By choosing sattvic food, we aim to enhance our yoga practice...
    </p>

    <div class="section-image">
      <img src="https://adiyogigurukul.com/assets/image/rishikesh-food-and-stay.webp" alt="Yogic Food" />
    </div>

    <div class="features-grid">
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/pure-nourishment.svg" /><p>Pure Nourishment</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/mental-clarity.svg" /><p>Mental Clarity</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/emotional-balance.svg" /><p>Emotional Balance</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/vital-energy.svg" /><p>Vital Energy</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/calming-energy.svg" /><p>Calming Effect</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/holistic-wellness.svg" /><p>Holistic Wellness</p></div>
    </div>
  </section>

  <!-- Accommodation Section -->
  <section>
    <h1 class="section-title">Accommodation at Adiyogi Gurukul</h1>

    <p class="section-text">
      At Adiyogi Gurukul, we offer a peaceful and comfortable stay...
    </p>

    <div class="section-image">
      <img src="https://adiyogigurukul.com/assets/image/rishikesh-food-and-stay-accomodation.webp" alt="Accommodation" />
    </div>

    <div class="features-grid">
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/spacious-room.svg" /><p>Spacious Rooms</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/daily-cleanliness.svg" /><p>Daily Cleanliness</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/tranquil-ambience.svg" /><p>Tranquil Ambience</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/breathtaking-views.svg" /><p>Breathtaking Views</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/natures-embrance.svg" /><p>Nature’s Embrace</p></div>
      <div class="feature-card"><img src="https://adiyogigurukul.com/assets/icons/peaceful-escape.svg" /><p>Peaceful Escape</p></div>
    </div>
  </section>

  <!-- Gallery -->
  <section>
    <h1 class="section-title">Our Gallery</h1>

    <div class="gallery-grid">
      <img src="https://adiyogigurukul.com/assets/new-images-2/home-gallery-1.png" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-4.webp" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-6.webp" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-12.webp" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-6.webp" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/home-gallery-3.png" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-5.webp" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-8.webp" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-9.webp" />
      <img src="https://adiyogigurukul.com/assets/gallery/home-gallery-10.webp" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/home-gallery-11.png" />
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq">
    <h1 class="section-title">Answers to Common Questions</h1>

    <div class="faq-item">
      <p class="faq-question">What is yogic food?</p>
      <p class="faq-answer">
        Yogic food is categorized into sattvic, rajasic, and tamasic meals...
      </p>
    </div>

    <div class="faq-item">
      <p class="faq-question">Is accommodation provided?</p>
      <p class="faq-answer">
        Yes, Adiyogi Gurukul provides clean, peaceful, and well-maintained rooms...
      </p>
    </div>

    <div class="faq-item">
      <p class="faq-question">Where is Adiyogi Gurukul located?</p>
      <p class="faq-answer">
        It is located in Swargashram, Rishikesh, surrounded by lush forests...
      </p>
    </div>
  </section>

</main>

<?php include('components/footer.php'); ?>

</body>
</html>
