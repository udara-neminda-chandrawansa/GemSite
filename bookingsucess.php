<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbit88 Hotels by AMR | Hotels and Resorts</title>
    <link rel="shortcut icon" href="images/orbit_88_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Marcelles&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marcelles&display=swap');

        .custom-bullets li::marker {
            color: #b99d75;
            /* Custom bullet color */
        }
    </style>
</head>

<body>
    <!--banner container-->
    <div class="h-dvh">
        <!--90%-->
        <div class="h-[100%] max-[992px]:h-full landing_banner2 relative flex flex-col"
            style="background-image: url('https://portozante.com/wp-content/uploads/2023/06/royal-infinity-villa-greece-exclusive-two-bedroom-beachfront-villa-porto-zante-villas-spa-3.webp'); background-size: cover; background-position: center;">
            <!--Top layer (backdrop)-->
            <div class="absolute bottom-0 inset-0 bg-gradient-to-bl from-[#1f1f1f] to-transparent"></div>
            <!--nav-->
            <?php
            include "navbar.php";
            ?>
            <div class="flex justify-center items-center flex-grow flex flex-col text-white text-center gap-6"
                style="z-index: 1;">
                <h3 class="marcellus text-[75px] w-3/5 max-[992px]:w-full max-[992px]:px-6 max-md:text-[60px] bh-lh">
                   Bookings Succesfully</h3>

                <button
                    class="px-4 py-3 bg-[#b99d75] hover:bg-white hover:text-black transition-all duration-300 hidden max-[992px]:flex">Book
                    Your Stay</button>
            </div>
        </div>



    </div>
    <!--welcome-->




    <!-- Footer Section -->
    <div class="relative bg-cover bg-center h-fit" style="background: url('images/footer/bg.jpeg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div
            class=" relative z-10 text-white flex flex-col justify-center items-center p-24 max-lg:px-12 max-md:p-4 max-md:py-12 max-w-auto h-fit mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 border-t border-gray-700">
            <div class="text-center md:text-left">
                <h2 class="text-sm font-semibold tracking-wide uppercase text-left">Stay Tuned with Orbit88 Hotels by AMR</h2>
                <p class="text-5xl mt-2 mb-8 text-left marcellus">Sign up for our newsletter to receive our news, deals
                    and special offers.</p>
            </div>
            <form action="">
                <div class="text-center md:text-right ">
                    <div class="relative z-0">
                        <input type="email" id="floating_standard" required
                            class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none placeholder:text-white focus:outline-none focus:ring-0 focus:border-[#b99d75] peer"
                            placeholder="Your email address" />
                        <button class="absolute right-0 top-0 h-full flex gap-3 items-center">
                            Subscribe
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-send" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex gap-3 py-4 items-center">
                        <input type="checkbox" name="agree" id="agree" required>
                        <label for="agree" class="text-sm">I agree to the Privacy Policy</label>
                    </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Footer Section -->
    <?php
    include 'Fotter.php';
    ?>

</body>
<script src="scripts/common.js"></script>
<script> 
    const carousel = document.getElementById('carousel');

    function scrollCarousel(direction) {
        const scrollAmount = carousel.offsetWidth * 0.85; // Scroll by slightly less than full width
        const scrollPosition = direction === 'left' ? -scrollAmount : scrollAmount;

        carousel.scrollBy({
            left: scrollPosition,
            behavior: 'smooth'
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/js/coreui.bundle.min.js"
    integrity="sha384-JdRP5GRWP6APhoVS1OM/pOKMWe7q9q8hpl+J2nhCfVJKoS+yzGtELC5REIYKrymn"
    crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#calendar-1", {
            inline: true, // Inline calendar
        });
        flatpickr("#calendar-2", {
            inline: true, // Inline calendar
        });
    });
</script>


</html>