<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://adiyogigurukul.com/assets/favicon.png">

    <style>
        input,
        textarea {
            border: 1px solid black;
            width: 100%;
            padding: 20px;
            border-radius: 8px;
        }

        .aligning {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .social-links img {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .social-links img:hover {
            transform: scale(1.1);
        }

        .div-style{
            /* border:1px solid; */
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            height:200px;
            width:300px;

            img{
                width: 100px;
                height:50%;
            }
        }

        
        .main-div {
            display:flex;
            align-items: stretch;
            justify-content:center;
        }
    </style>
</head>

<body class="bg-gray-50">
    <?php include('components/header.php'); ?>

    <main class="flex flex-col items-center justify-center py-10">

        <!-- CONTACT FORM -->
        <div class="flex flex-col justify-center items-center w-full max-w-3xl bg-white shadow-lg p-10 rounded-xl">
            <h1 class="text-[30px] font-bold">Contact Us</h1>
            <p class="mt-4 text-gray-600">Any Questions or remarks? Just write us a message.</p>

            <form class="flex flex-col justify-center items-center w-full mt-10 space-y-6">

                <!-- Row 1: First Name + Last Name -->
                <div class="flex justify-between items-center gap-6 w-full">
                    <div class="aligning w-[50%]">
                        <label for="first_name" class="font-medium">First Name:</label>
                        <input type="text" name="first_name" placeholder="First Name" class="p-4">
                    </div>

                    <div class="aligning w-[50%]">
                        <label for="last_name" class="font-medium">Last Name:</label>
                        <input type="text" name="last_name" placeholder="Last Name" class="p-4">
                    </div>
                </div>

                <!-- Row 2: Email + Phone -->
                <div class="flex justify-between items-center gap-6 w-full">
                    <div class="aligning w-[50%]">
                        <label for="email" class="font-medium">Email:</label>
                        <input type="email" name="email" placeholder="Email" class="p-4">
                    </div>

                    <div class="aligning w-[50%]">
                        <label for="phone" class="font-medium">Phone:</label>
                        <input type="number" name="phone" placeholder="Phone Number" class="p-4">
                    </div>
                </div>

                <!-- Row 3: Message full width -->
                <div class="aligning w-full">
                    <label for="message" class="font-medium">Message:</label>
                    <textarea name="message" placeholder="Type your message" rows="4"></textarea>
                </div>

                <!-- Submit Button -->
                <button
                    class="bg-black w-[250px] h-[60px] text-white rounded-lg text-lg mt-4 hover:bg-gray-800 transition">
                    Submit
                </button>

            </form>

        </div>

        <!-- CONTACT DETAILS SECTION -->
        <div class="main-div p-10 bg-[#6d5ec9] text-white w-full flex-col md:flex-row gap-12 mt-12">

            <!-- Phone -->
            <div class="div-style">
                <img src="https://adiyogigurukul.com/images/icon-phone.svg" class="the-imgs" alt="">
                <div class="text-center">
                    <h1 class="text-lg font-semibold">Contact Us</h1>
                    <p class="text-gray-200">+91 93893 93809</p>
                </div>
            </div>

            <!-- Location -->
            <div class="div-style">
                <img src="https://adiyogigurukul.com/images/icon-location.svg" class="the-imgs" alt="">
                <div class="text-center">
                    <h1 class="text-lg font-semibold">Location</h1>
                    <p class="text-gray-200">Adiyogi Gurukul, Tapovan, Rishikesh</p>
                </div>
            </div>

            <!-- Open Hours -->
            <div class="div-style">
                <img src="https://adiyogigurukul.com/images/icon-clock.svg" class="the-imgs" alt="">
                <div class="text-center">
                    <h1 class="text-lg font-semibold">Open</h1>
                    <p class="text-gray-200">Monday – Saturday</p>
                    <p class="text-gray-200">09:00 – 21:00</p>
                </div>
            </div>

            <!-- Email -->
            <div class="div-style">
                <img src="https://adiyogigurukul.com/images/icon-phone.svg" class="the-imgs" alt="">
                <div class="text-center">
                    <h1 class="text-lg font-semibold">Email Us</h1>
                    <p class="text-gray-200">gurukuladiyogi@gmail.com</p>
                </div>
            </div>

        </div>

        <!-- SOCIAL LINKS -->
        <div class="mt-10 bg-white p-8 rounded-2xl max-w-md shadow flex flex-col justify-center items-center">

            <h1 class="text-xl font-semibold text-gray-800 mb-4">Follow us on:</h1>

            <div class="social-links">
                <ul class="flex gap-4">
                    <li><a href="#"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiXN9xSEe8unzPBEQOeAKXd9Q55efGHGB9BA&s"
                                alt=""></a></li>
                    <li><a href="#"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_dbOUeCrOBe-mkfGD-fEjQNECJrkromWTYg&s"
                                alt=""></a></li>
                    <li><a href="#"><img
                                src="https://lookaside.fbsbx.com/elementpath/media/?media_id=1515764255735341&version=1723113684"
                                alt=""></a></li>
                    <li><a href="#"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png"
                                alt=""></a></li>
                </ul>
            </div>

        </div>

    </main>

    <?php include('components/footer.php'); ?>
</body>

</html>