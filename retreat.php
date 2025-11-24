<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yoga Retreat - Adiyogi Gurukul</title>
    <link rel="shortcut icon" href="https://adiyogigurukul.com/assets/favicon.png">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* ================= HEADER BACKGROUND =================== */
        .page-header-retreat {
            background-image: url('https://www.trexova.com/2/wp-content/uploads/2025/06/Rishikesh-Banner.jpg');
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 330px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-bottom: 40px;
        }

        .page-header-retreat::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
        }

        .page-header-retreat h1,
        .page-header-retreat nav {
            position: relative;
            z-index: 2;
        }

        /* ================= LIST ICON STYLE =================== */
        .icon-li img {
            width: 22px;
        }

        .icon-li {
            padding: 10px 12px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(172, 28, 91, 0.07);
            transition: 0.2s;
            /* border-left: 4px solid #AC1C5B; */
        }

        .icon-li:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 16px rgba(172, 28, 91, 0.15);
        }
    </style>

</head>

<body class="bg-gray-50 text-gray-800">

    <?php include('components/header.php'); ?>

    <main>

        <!-- ========================= PAGE HEADER ========================= -->
        <div class="page-header-retreat text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold drop-shadow-lg mb-2">
                Yoga <span class="text-[#FFDEEA]">Retreat</span>
            </h1>

            <nav class="breadcrumb text-sm mt-1 text-gray-200">
                <a href="index.php" class="hover:text-white">Home</a> /
                <span class="text-gray-300">Yoga Retreat</span>
            </nav>
        </div>

        <!-- ========================= ABOUT SECTION ========================= -->
        <section class="about-us py-16">
            <div class="max-w-6xl mx-auto px-4 text-center">

                <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">
                    Yoga Retreat in <span class="text-[#AC1C5B]">Rishikesh, India</span>
                </h2>

                <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Step away from noise, stress, and responsibilities — and step into peace.
                    At Adiyogi Gurukul, our retreat allows you to <b>slow down, breathe, heal,</b> and reconnect with your inner
                    self in the yoga capital of the world.
                </p>

                <!-- ================= LIST WITH NEW ICONS + CONTENT ================ -->
                <ul class="mt-8 space-y-3 max-w-lg mx-auto text-left">

                    <li class="flex gap-3 icon-li items-center">
                        <img src="https://www.svgrepo.com/show/500714/sunrise.svg" alt="">
                        Begin your day with soulful morning yoga & pranayama by the river.
                    </li>

                    <li class="flex gap-3 icon-li items-center">
                        <img src="https://www.svgrepo.com/show/487538/lotus.svg" alt="">
                        Dive into deep relaxation sessions that rejuvenate mind & body.
                    </li>

                    <li class="flex gap-3 icon-li items-center">
                        <img src="https://www.svgrepo.com/show/322503/healing.svg" alt="">
                        Experience a natural healing environment surrounded by mountains.
                    </li>

                    <li class="flex gap-3 icon-li items-center">
                        <img src="https://www.svgrepo.com/show/470661/nature-conservation.svg" alt="">
                        Reconnect with nature through forest walks & Ganga-side meditations.
                    </li>

                    <li class="flex gap-3 icon-li items-center">
                        <img src="https://www.svgrepo.com/show/455978/peace.svg" alt="">
                        Find mental clarity through guided mindfulness practices.
                    </li>

                    <li class="flex gap-3 icon-li items-center">
                        <img src="https://www.svgrepo.com/show/264245/chakra.svg" alt="">
                        Rebalance your emotional & spiritual energy with ancient yogic tools.
                    </li>
                </ul>

                <p class="mt-6 text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    You don’t need to be flexible or experienced — our retreat welcomes everyone
                    who wants to relax, transform, and feel grounded again.
                </p>
            </div>
        </section>

        <!-- ========================= RECONNECT SECTION ========================= -->
        <section class="py-16 bg-white text-center">
            <div class="max-w-4xl mx-auto px-4">

                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Reconnect with Your Inner Self
                    <span class="text-[#AC1C5B]">Through Yoga</span>
                </h2>

                <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Bathe in the serenity of the Himalayas, meditate by the holy Ganga,
                    and rediscover the joy of simple living — even if it’s just for a weekend.
                </p>

            </div>
        </section>

        <!-- ========================= 03 DAYS RETREAT ========================= -->
        <section class="py-16">
            <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                <!-- Text -->
                <div>
                    <h2 class="text-3xl font-bold mb-3 text-gray-900">03 Days Yoga Retreat</h2>

                    <p class="text-gray-600 mb-4">
                        A short but powerful getaway designed to refresh your mind,
                        energize your body, and help you reconnect with your peaceful self.
                    </p>

                    <h5 class="font-semibold text-lg mt-4 mb-2">Retreat Overview</h5>
                    <ul class="space-y-2 text-gray-700">
                        <li class="icon-li flex items-center"><img src="https://www.svgrepo.com/show/533389/calendar-days.svg"><b>Duration:</b> 03 Days</li>
                        <li class="icon-li flex items-center"><img src="https://www.svgrepo.com/show/488144/date.svg"><b>Date:</b> Flexible</li>
                        <li class="icon-li flex items-center"><img src="https://www.svgrepo.com/show/483856/yoga.svg"><b>Style:</b> Multi-style Yoga</li>
                        <li class="icon-li flex items-center"><img src="https://www.svgrepo.com/show/535482/location-arrow.svg"><b>Location:</b> Adiyogi Gurukul, Tapovan</li>
                        <li class="icon-li flex items-center"><img src="https://www.svgrepo.com/show/532241/certificate-check.svg"><b>Certification:</b> Participation</li>
                    </ul>

                    <h5 class="font-semibold text-lg mt-6 mb-2">Course Fees</h5>
                    <ul class="space-y-2 text-gray-700">
                        <li class="icon-li flex items-center"><img src="https://www.svgrepo.com/show/535504/money.svg"><b>Double Shared:</b> $199 USD</li>
                        <li class="icon-li flex items-center"><img src="https://www.svgrepo.com/show/535504/money.svg"><b>Private Room:</b> $249 USD</li>
                    </ul>

                    <a href="./registration.php"
                        class="inline-block bg-[#AC1C5B] text-white px-6 py-2 rounded-md mt-5 shadow hover:shadow-lg hover:bg-[#921648] transition">
                        Enroll Now
                    </a>
                </div>

                <!-- Images -->
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://sanskritiyogpeeth.org/assets/img/retreat/3-days-retreat-rishikesh_1.webp"
                        class="rounded-lg shadow-md hover:shadow-xl transition">
                    <img src="https://sanskritiyogpeeth.org/assets/img/retreat/5-days-yoga-retreat-in-rishikesh.webp"
                        class="rounded-lg shadow-md hover:shadow-xl transition">
                </div>

            </div>
        </section>

    </main>

    <?php include('components/footer.php'); ?>

</body>

</html>
