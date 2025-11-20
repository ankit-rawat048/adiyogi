<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .drop-img{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2z-Qg3pe-RY9Lv8kQ4Ik3uFlebhYk4I9R0Q&s');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            min-height: 300px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
  </style>

</head>
<body>
    <?php include('components/header.php'); ?>
    <main>
        <section class="drop-img">
            <h1 class="text-3xl md:text-5xl font-bold capitalize text-center">
                daily online drop-in classes
            </h1>
            <p class="mt-3 text-sm md:text-base opacity-90">
                Home / Daily Online Drop-In Classes
            </p>
        </section>


        <section class="py-16 bg-white">
  <div class="max-w-5xl mx-auto px-4 text-center">
    <h1 class="text-4xl font-bold mb-4">Daily Online Yoga Classes</h1>
    <p class="text-lg text-gray-700 mb-8">
      Join our virtual drop-in sessions from your smartphone or computer. Practice daily, stay consistent, and nourish your body and mind — all from the comfort of your home.
    </p>
    <a href="#enroll" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
      Enroll Now
    </a>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-6">Why Practice With Us?</h2>
    <div class="grid md:grid-cols-2 gap-8">
      <div class="space-y-4">
        <p>Develop balance in body and mind through daily yoga practice.</p>
        <p>Learn foundational principles of yoga and deepen your understanding.</p>
        <p>Receive guidance from experienced instructors for both practice and teaching.</p>
      </div>
      <div class="space-y-4">
        <p>Progress to advanced levels with structured practices.</p>
        <p>Adopt a yogic lifestyle with awareness, balance, and well-being.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-5xl mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-8">Online Private 1-on-1 Yoga Classes</h2>
    <div class="bg-gray-100 p-8 rounded-lg shadow-md">
      <p class="mb-6">
        Customize your yoga journey with live 1:1 sessions tailored to your needs. Starts at <strong>$99 USD / month</strong>.
      </p>
      <ul class="list-disc pl-6 space-y-3 text-gray-700">
        <li>Kids Yoga – playful, flexible, fun</li>
        <li>Fitness Yoga – strength, flexibility, endurance</li>
        <li>Weight Loss Yoga – dynamic practices to support your goals</li>
        <li>Therapeutic Yoga – gentle, healing, mindful</li>
        <li>Advanced Asana Practice – deepen your postures</li>
      </ul>
      <div class="mt-6">
        <a href="#private-signup" class="px-5 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
          Apply Now
        </a>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-8">Class Schedule & Membership</h2>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Beginners / Kids / Weight Loss -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-2xl font-medium mb-4">Yoga for Beginners</h3>
        <ul class="space-y-2 text-gray-600">
          <li>7:00 – 8:00 AM: Weight Loss Yoga</li>
          <li>9:00 – 10:00 AM: Wellness Yoga</li>
          <li>10:30 – 11:30 AM: Practice Yoga</li>
          <li>4:00 – 5:00 PM: Weight Loss Yoga</li>
          <li>6:00 – 6:45 PM: Kids Yoga</li>
        </ul>
        <p class="mt-4 font-semibold">Fee: $12 / month</p>
      </div>

      <!-- Intermediate / Advanced -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-2xl font-medium mb-4">Yoga for Practitioners</h3>
        <ul class="space-y-2 text-gray-600">
          <li>5:00 – 6:00 AM: Early Morning Fitness Yoga</li>
          <li>6:00 – 7:00 AM: Morning Power Yoga</li>
          <li>8:00 – 9:00 AM: Regular Yoga Practice</li>
          <li>5:00 – 6:00 PM: Evening Yoga Practice</li>
          <li>6:00 – 7:00 PM: Evening Power Yoga</li>
          <li>7:00 – 8:00 PM: Advanced Asana Practice</li>
        </ul>
        <p class="mt-4 font-semibold">Fee: $12 / month</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-5xl mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-8">Meet Our Instructors</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="text-center">
        <h3 class="text-xl font-medium">Sateshwar</h3>
        <p class="text-gray-500">Hatha Yoga Teacher</p>
      </div>
      <div class="text-center">
        <h3 class="text-xl font-medium">Mahi Singh Rajput</h3>
        <p class="text-gray-500">Pranayama Teacher</p>
      </div>
      <div class="text-center">
        <h3 class="text-xl font-medium">Priya Thapa</h3>
        <p class="text-gray-500">Meditation Teacher</p>
      </div>
      <!-- Add more teacher cards similarly -->
    </div>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-6">Student Feedback</h2>
    <div class="space-y-8">
      <blockquote class="border-l-4 border-indigo-600 pl-4 italic text-gray-700">
        “Coming from a fast-paced life in New York, the peaceful atmosphere of Adiyogi Gurukul helped me reconnect...”  
        <br><span class="font-semibold">— Michael Thompson</span>
      </blockquote>
      <blockquote class="border-l-4 border-indigo-600 pl-4 italic text-gray-700">
        “A truly magical experience! From the food to the daily practices … inner growth.”  
        <br><span class="font-semibold">— Sofia Lindström</span>
      </blockquote>
      <!-- More quotes -->
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-5xl mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-6">Frequently Asked Questions</h2>
    <div class="space-y-6 text-gray-700">
      <div>
        <h4 class="font-semibold">What are drop-in classes?</h4>
        <p>These are live yoga or wellness classes that you can join flexibly every day — no long-term contract needed.</p>
      </div>
      <div>
        <h4 class="font-semibold">What kind of yoga is offered online?</h4>
        <p>We offer Hatha, Pranayama, Meditation, and gentle stretching — suitable for all levels.</p>
      </div>
      <div>
        <h4 class="font-semibold">How do I enroll?</h4>
        <p>Sign up online or via WhatsApp. Once enrolled, you’ll receive Zoom links for your classes.</p>
      </div>
      <div>
        <h4 class="font-semibold">How long is each class?</h4>
        <p>Each session is about 60 minutes long.</p>
      </div>
      <div>
        <h4 class="font-semibold">Can beginners join?</h4>
        <p>Yes! All levels are welcome, and teachers provide modifications according to your experience.</p>
      </div>
      <div>
        <h4 class="font-semibold">Need help or support?</h4>
        <p>Call / WhatsApp us at <strong>+91 93893 93809</strong>.</p>
      </div>
    </div>
  </div>
</section>
    </main>

    <?php include('components/footer.php'); ?>
</body>
</html>