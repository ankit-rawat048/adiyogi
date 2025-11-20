<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Gallery - Adiyogi Gurukul</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    /* ---- Image Hover ---- */
    .gallery-img {
      transition: all 0.3s ease;
      border-radius: 0.75rem;
    }

    .gallery-img:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    /* ---- Page Header ---- */
    .page-header-gallery {
      background: url('https://adiyogigurukul.com/assets/new-images-2/gallery-banner.png') center/cover no-repeat;
      position: relative;
      color: white;
      text-align: center;
      padding: 6rem 1rem;
    }

    .page-header-gallery::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
      z-index: 0;
    }

    .page-header-gallery h1,
    .page-header-gallery nav {
      position: relative;
      z-index: 1;
    }

    .page-header-gallery h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }

    .page-header-gallery span {
      color: #a7c957;
    }

    .breadcrumb {
      font-size: 0.95rem;
      margin-top: 0.75rem;
      color: #e7e7e7;
    }

    .breadcrumb a {
      color: #a7c957;
      transition: 0.3s;
    }

    .breadcrumb a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body class="bg-[#f9faf6] text-gray-800 font-sans">

  <!-- HEADER -->
  <?php include('components/header.php'); ?>

  <main>
    
  <!-- PAGE HEADER -->
  <div class="page-header-gallery">
    <h1 class="text-anime-style-2">
      Our <span>Gallery</span>
    </h1>
    <nav class="breadcrumb">
      <a href="index.php">Home</a> / <span class="text-gray-300">Our Gallery</span>
    </nav>
  </div>

  <!-- 🖼️ GALLERY SECTION -->
  <section class="max-w-6xl mx-auto mt-10 px-4 pb-20">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">

      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-1.png" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/gallery/gallery-2.webp" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/gallery/gallery-3.webp" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-4.png" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/gallery/gallery-5.webp" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-6.png" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-7.png" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/gallery/gallery-8.webp" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-9.png" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-10.png" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-12.png" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/gallery/gallery-13.webp" class="gallery-img w-full" alt="Gallery Image" />
      <img src="https://adiyogigurukul.com/assets/new-images-2/gallery-15.png" class="gallery-img w-full" alt="Gallery Image" />

    </div>
  </section>
  
  </main>

  <?php include('components/footer.php'); ?>
</body>

</html>
