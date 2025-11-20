<div class="hero-container">
    <img src="./adiyogi/DSC01990.webp" alt="hero" class="back-img">


    <div class="hero-content">
        <h1>Awaken Your Inner Energy Through Yoga</h1>
        <p>
            Yoga is not just a practice — it’s a path to discover who you truly are.
            Through mindful movement, breath, and stillness, you reconnect with your body, mind, and soul.
            Begin your inner journey toward balance, awareness, and everlasting peace.
        </p>

        <div class="hero-btn">
            <a href="contact-us.php">Join Us Today</a>
        </div>
    </div>
</div>


<style>
    /* ========== HERO SECTION ========== */
    .hero-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        height: 100vh;
        width: 100%;
        overflow: hidden;
        background-color: #fff;
        /* font-family: 'Poppins', sans-serif; */
    }

    /* ===== BACKGROUND IMAGE ===== */
    .back-img {
        position: absolute;
        right: 0;
        top: 10%;
        width: 45%;
        height: 70%;
        object-fit: cover;
        border-radius: 40% 25% 40% 25%;
        box-shadow: 30px 30px 30px 30px beige, 0 0 30px rgba(245, 245, 220, 0.7);
        transition: transform 8s ease, filter 1s ease;
        animation: morphBorder 12s ease-in-out infinite alternate;
    }

    @keyframes morphBorder {
        0% {
            border-radius: 40% 25% 40% 25%;
            transform: scale(1);
        }

        33% {
            border-radius: 55% 40% 20% 35%;
            transform: scale(1.03);
        }

        66% {
            border-radius: 25% 50% 55% 30%;
            transform: scale(0.97);
        }

        100% {
            border-radius: 40% 25% 40% 25%;
            transform: scale(1);
        }
    }


    /* ===== DARK / GRADIENT OVERLAY ===== */
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 0.95) 40%, rgba(255, 255, 255, 0.2) 80%);
        z-index: 1;
    }

    /* ===== CONTENT ===== */
    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 600px;
        padding-left: 5%;
        text-align: left;
        color: #222;
        animation: fadeIn 1.2s ease-in-out;
    }

    .hero-content h1 {
        font-size: clamp(2.2rem, 5vw, 3.5rem);
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1rem;
        letter-spacing: 0.5px;
    }

    .hero-content p {
        font-size: clamp(1rem, 2vw, 1.25rem);
        margin-bottom: 2rem;
        color: #444;
        max-width: 500px;
    }

    /* ===== BUTTON ===== */
    .hero-btn a {
        display: inline-block;
        background-color: #f7b731;
        color: #000;
        font-weight: 600;
        padding: 0.9rem 2.2rem;
        border-radius: 40px;
        text-transform: uppercase;
        text-decoration: none;
        letter-spacing: 1px;
        box-shadow: 0 4px 12px rgba(247, 183, 49, 0.4);
        transition: all 0.3s ease-in-out;
    }

    .hero-btn a:hover {
        transform: scale(1.07);
        background-color: #ffca3a;
        box-shadow: 0 6px 20px rgba(247, 183, 49, 0.5);
    }


    /* ===== ANIMATIONS ===== */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 900px) {
        .hero-container {
                    flex-direction: column;
        justify-content: flex-start;
        text-align: center;
        background-color: #ffffff;

        }

        .back-img {
            position: relative;
            top: 0;
            width: 100%;
            height: 36%;
            border-radius: 0;
            /* filter: brightness(0.7); */
        }

        .hero-overlay {
          position:relative;
            /* background: rgba(255, 255, 255, 0.85); */
        }

        .hero-content {
            padding: 2rem;
            max-width: 90%;
            color: #1d0000;
        }

        .hero-content h1 {
            font-size: 2rem;
            color: #1d0000;
        }

        .hero-content p {
          font-size: 1rem;
          color: #1d0000;
        }

        .hero-btn a {
          padding: 0.8rem 1.8rem;
        }
    }
</style>