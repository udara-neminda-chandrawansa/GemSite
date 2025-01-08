<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Orbit88 Hotels by AMR | Hotels and Resorts</title>
        <link rel="shortcut icon" href="images/orbit_88_logo.png" type="image/x-icon">
        <link rel="stylesheet" href="styles/common.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet" />
        <!-- AOS Library -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Marcellus&display=swap"
            rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 font-roboto">
    <?php
       include "navbar.php"; 
       ?>

        <section class="text-center bg-cover bg-center relative w-full h-[80vh]"
        style="background-image: url('../images/Landings/carts/bgimage.jpg')">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <!-- Optional overlay for better text visibility -->
    
        <div class="relative z-10 flex flex-col justify-center items-center w-full h-full text-white">
            <p style="font-family: 'Roboto'" class="text-lg font-md mb-4">
                HOME/CART
            </p>
            <h1 style="font-family: 'Marcellus', serif; letter-spacing: 0.1em"
                class="text-4xl md:text-5xl font-bold mb-6">
                Cart
            </h1>
        </div>
    </section>
    

        <section class="flex flex-col items-center justify-center space-y-4 py-12">
            <p style="font-family: 'Marcellus', cursive;" class="text-lg text-gray-700">Your cart is currently empty</p>
            <button style="font-family: 'Marcellus', cursive;" class="bg-[#b99d75] text-white py-2 px-4  hover:bg-[#a28a64] focus:outline-none">
              Return to Shop
            </button>
          </section>

          <?php
       include "Fotter.php"; 
       ?>



    </body>

    </html>