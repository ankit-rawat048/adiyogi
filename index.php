<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adiyogi Gurukul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://adiyogigurukul.com/assets/favicon.png">

    <style>
        .one {
            position: absolute;
            top: 120%;
            left: 68%;
            animation: rotate 10s linear infinite;
            opacity: 0.12;
            width: 307px;
        }

        .two {
            position: absolute;
            top: 250%;
            left: -3%;
            animation: rotate 10s linear infinite;
            opacity: 0.12;
            width: 307px;
        }

        .three {
            position: absolute;
            top: 622%;
            left: 6%;
            animation: rotate 10s linear infinite;
            opacity: 0.12;
            width: 307px;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(-360deg);
            }
        }

        /* -------------------------
           RESPONSIVE FIX FOR MOBILE
        --------------------------*/
        @media (max-width: 768px) {

            .one,
            .two,
            .three {
                width: 120px;     /* scaled down */
                opacity: 0.10;
            }

            .one {
                top: 150%;
                left: 50%;
                transform: translateX(-50%);
            }

            .two {
                top: 300%;
                left: 10%;
            }

            .three {
                top: 650%;
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include('components/header.php'); ?>

    <main>
        <?php include('./indexElements/hero.php'); ?>
        <?php include('./indexElements/about.php'); ?>
        <?php include('./indexElements/section3.php'); ?>
        <?php include('./indexElements/section4.php'); ?>
        <?php include('./indexElements/section7.php'); ?>
        <?php include('./indexELements/section8.php'); ?>
        <?php include('./indexElements/section10.php'); ?>
        <?php include('./indexElements/section11.php'); ?>
        <?php include('./indexElements/section12.php'); ?>

        <!-- ABSOLUTE IMAGES -->
        <img src="./adiyogi/pngtree-blue-mandala.png" alt="" class="one">
        <img src="./adiyogi/pngtree-blue-mandala.png" alt="" class="two">
        <img src="./adiyogi/pngtree-blue-mandala.png" alt="" class="three">

    </main>

    <?php include('components/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
