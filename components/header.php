<header>
    <div class="logo">
        <img src="https://adiyogigurukul.com/images/new-images/logo.webp" alt="logo-img">
    </div>

    <button class="md:hidden px-[30px] text-[20px] text-white" id="togglebar">clickme</button>

    <nav class="nav flex justify-between items-center">
        <div>
            <ul class="nav-ul">
                <li><a href="index.php">Home</a></li>

                <li>
                    <span>About Us</span>
                    <div class="abs-container">
                        <ul>
                            <li><a href="food&stay.php">Food and Stay</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="for-indian.php">Yoga Courses for Indian</a></li>
                <li><a href="retreat.php">Yoga Retreat</a></li>

                <li class="hoverthings"><span>
                        Other Yoga Courses
                    </span>
                    <div class="abs-container">
                        <ul>
                            <li>
                                <span>Ayurveda Courses</span>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="astrology-for-sprituality-7-days.php">Ayurveda Massage &
                                                Wellness</a></li>
                                        <li><a href="ayurveda-yoga-treatment.php">Ayurveda Treatment</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>Astrology for Spirituality</span>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="astrology-for-sprituality-7-days.php">Basic Level (7 Days)</a></li>
                                        <li><a href="astrology-for-sprituality-12-days.php">Intermediate Level (12
                                                Days)</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>Sound Healing</span>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="sound-healing-basic-level.php">Basic Level (7 Days)</a></li>
                                        <li><a href="sound-healing-advanced-level.php">Intermediate Level (12 Days)</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li><a href="online-yoga-ttc.php">Online Yoga (TTC)</a></li>
                            <li><a href="daily-drop-in.php">Daily Drop-in</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div>
            <ul class="flex">
                <li><a href="https://www.faqyoga.in/">FAQs</a></li>
                <li>
                    <button class="contact-btn"><a href="#">Contact Us</a></button>
                </li>
            </ul>
        </div>
    </nav>


    <!-- !-- ========== MOBILE NAV (FULL DESKTOP MENU) =========== -->
    <nav class="mobile-nav overflow-x-auto max-h-[100vh]" id="mobileNav">
        <ul>

            <!-- MAIN LINKS -->
            <li><a href="index.php">Home</a></li>

            <!-- ABOUT US -->
            <li><a href="food&stay.php">Food and Stay</a></li>
            <li><a href="gallery.php">Gallery</a></li>

            <li><a href="for-indian.php">Yoga Courses for Indian</a></li>
            <li><a href="retreat.php">Yoga Retreat</a></li>

            <!-- Ayurveda -->
            <li><a href="ayurveda-massage.php">Ayurveda Massage & Wellness</a></li>
            <li><a href="ayurveda-yoga-treatment.php">Ayurveda Treatment</a></li>


            <!-- Astrology -->

            <li><a href="astrology-for-sprituality-7-days.php">Basic Level (7 Days)</a></li>
            <li><a href="astrology-for-sprituality-12-days.php">Intermediate Level (12 Days)</a></li>


            <!-- Sound Healing -->
            <li><a href="sound-healing-basic-level.php">Basic Level (7 Days)</a></li>
            <li><a href="sound-healing-advanced-level.php">Intermediate Level (12 Days)</a></li>


            <li><a href="online-yoga-ttc.php">Online Yoga (TTC)</a></li>
            <li><a href="daily-drop-in.php">Daily Drop-in</a></li>

            <li><a href="https://www.faqyoga.in/">FAQs</a></li>
            <li><a class="contact-btn" href="#">Contact Us</a></li>
        </ul>
    </nav>

</header>

<style>
    /* ============================================
   HEADER BASE
============================================ */
    header {
        width: 100%;
        padding: 15px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 100;
        background: linear-gradient(rgb(191 20 101 / 90%), rgb(220 50 133 / 45%));
        backdrop-filter: blur(6px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        transition: background 0.3s ease-in-out;
    }

    /* ============================================
   LOGO
============================================ */
    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 160px;
        transition: transform 0.3s ease;
    }

    .logo:hover img {
        transform: scale(1.03);
    }

    /* ============================================
   DESKTOP NAVIGATION
============================================ */
    .nav-ul {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .nav-ul li {
        list-style: none;
        position: relative;
        cursor: pointer;
    }

    .nav-ul li a,
    .nav-ul li span {
        font-size: 15px;
        color: #fefefe;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.25s ease;
    }

    .nav-ul li:hover>a,
    .nav-ul li:hover>span {
        color: #ff7b00;
    }

    /* --------------------------------------------
   DROPDOWN MAIN (LEVEL 1)
-------------------------------------------- */
    .abs-container {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 260px;

        background: linear-gradient(rgb(191 20 101 / 90%), rgb(220 50 133 / 45%));
        backdrop-filter: blur(6px);

        border-radius: 10px;
        padding: 20px 25px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);

        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(10px);
        transition: 0.25s ease;
    }

    .nav-ul li:hover>.abs-container {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0);
    }

    .abs-container ul>li {
        padding: 10px 0;
        color: #fff;
        font-weight: 600;
        position: relative;
        /* Important for submenu positioning */
    }

    /* --------------------------------------------
   SUBMENU (LEVEL 2)
-------------------------------------------- */
    .submenu {
        position: absolute;
        top: 0;
        right: 100%;
        /* Moves fully outside */
        min-width: 230px;

        background: linear-gradient(rgb(191 20 101 / 90%), rgb(220 50 133 / 45%));
        backdrop-filter: blur(6px);

        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.20);

        padding: 15px;
        display: none;

        opacity: 0;
        transform: translateX(10px);
        transition: 0.25s ease;
    }

    /* Show submenu */
    .abs-container ul>li:hover>.submenu {
        display: block;
        opacity: 1;
        transform: translateX(0);
    }

    .submenu ul li a {
        font-size: 14px;
        color: #ffffffd9;
        transition: 0.25s ease;
        line-height: 1.7;
    }

    .submenu ul li a:hover {
        color: #ff7b00;
    }

    /* ============================================
   RIGHT SIDE LINKS
============================================ */
    .flex {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .flex a {
        font-size: 15px;
        color: #fff;
        text-decoration: none;
        transition: color 0.25s ease;
    }

    .flex a:hover {
        color: #ff7b00;
    }

    .contact-btn a {
        display: inline-block;
        background-color: #ff09aa;
        color: #fff;
        font-weight: 600;
        padding: .5rem 1.2rem;
        border-radius: 40px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .contact-btn a:hover {
        background-color: #ff59c5ff;
        color: #ffffffff;
        transform: scale(1.07);
    }

    /* ============================================
   MOBILE NAVIGATION
============================================ */
    .mobile-nav {
        display: none;
        width: 100%;
        background: #fff;
        position: absolute;
        top: 100%;
        left: 0;
        padding: 20px 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);

        transform: translateY(-20px);
        opacity: 0;
        transition: 0.35s ease;
    }

    .mobile-nav.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .mobile-nav ul {
        list-style: none;
        padding: 0;
    }

    .mobile-nav ul li {
        border-bottom: 1px solid #eee;
        padding: 14px 0;
    }

    .mobile-nav ul li a {
        font-size: 16px;
        font-weight: 500;
        color: #000;
    }

    .mobile-nav ul li a:hover {
        color: #ff7b00;
    }

    .mobile-nav .contact-btn {
        display: inline-block;
        margin-top: 10px;
    }

    /* ============================================
   RESPONSIVE
============================================ */
    @media (max-width: 992px) {
        nav {
            display: none;
        }

        .flex {
            display: none;
        }

        header {
            padding: 15px 12px;
        }
    }
</style>

<script>const btn = document.getElementById("togglebar");
    const mobNav = document.getElementById("mobileNav");

    // Default icon setup
    function updateIcon(isOpen) {
        btn.textContent = isOpen ? "✖" : "☰";
    }

    updateIcon(false);

    // Toggle menu
    btn.addEventListener("click", () => {
        const isOpen = mobNav.classList.toggle("active");
        updateIcon(isOpen);
    });

    // Auto-close mobile menu when a link is clicked
    mobNav.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", () => {
            mobNav.classList.remove("active");
            updateIcon(false);
        });
    });

</script>