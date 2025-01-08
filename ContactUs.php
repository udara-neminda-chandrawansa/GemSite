<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us </title>
    <link rel="shortcut icon" href="images/glklabweblogo.jpeg" type="image/x-icon">
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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-[70dvh] max-[992px]:h-dvh landing_banner2 relative flex flex-col contact-banner bg-center bg-cover">
        <!--Top layer (backdrop)-->
        <div class="absolute bottom-0 inset-0 bg-gradient-to-bl from-[#1f1f1f] to-transparent"></div>
        <!--nav-->
        <?php
        include "navbar.php";
        ?>
        <div class="flex justify-center items-center flex-grow flex flex-col text-white text-center gap-6"
            style="z-index: 1;">
            <h3 class="marcellus text-[75px] w-3/5 max-[992px]:w-full max-[992px]:px-6 max-md:text-[60px] bh-lh">
                Contact Us</h3>
        </div>
    </div>
    <div class="container mx-auto max-w-7xl">
        <div class="grid md:grid-cols-2">
            <!-- Left Side - Contact Information -->
            <div class="p-20 max-md:p-10 flex items-center">
                <div>
                    <h6 class="text-gray-600 text-xs mb-2">CONTACT INFORMATION</h6>
                    <h2 class="text-3xl font-light text-gray-800 mb-4 marcellus">Gem Laboratory Kandy (Pvt) Ltd.</h2>
                    <div class="space-y-2 text-gray-600">
                        <p>No. 18/2/1, </p>
                        <p>DS Senanayake Veediya</p>
                        <p>Kandy, Sri Lanka</p>
                    </div>
                    <div class="mt-4">
                        <p><span class="font-medium">Phone Number:</span> +94777699933</p>
                        <p><span class="font-medium">Email:</span> gemlab.sl@gmail.com</p>
                    </div>
                </div>
                <!--Spacer (hidden)-->
                <div class="h-12 hidden justify-center items-center">
                    <div class="border-b border-black w-full"></div>
                </div>
                <!--grid (hidden)-->
                <div class="hidden md:grid-cols-2 gap-8">
                    <!-- Accommodation -->
                    <div>
                        <h3 class="text-xl font-light text-gray-800 mb-3 marcellus">Accommodation</h3>
                        <div class="space-y-2 text-gray-600">
                            <p>Enquiries & Bookings</p>
                            <p>Phone: + 9476 363 0369</p>
                            <p>Email: reservations@orbit88.lk</p>
                        </div>
                    </div>

                    <!-- Restaurants -->
                    <div>
                        <h3 class="text-xl font-light text-gray-800 mb-3 marcellus">Restaurants</h3>
                        <div class="space-y-2 text-gray-600">
                            <p>Enquiries & Bookings</p>
                            <p>Phone: + 9476 363 0369</p>
                            <p>Email: reservations@orbit88.lk</p>
                        </div>
                    </div>

                    <!-- Day Spa & Gym -->
                    <div>
                        <h3 class="text-xl font-light text-gray-800 mb-3 marcellus">Day Spa & Gym</h3>
                        <div class="space-y-2 text-gray-600">
                            <p>Enquiries & Bookings</p>
                            <p>Phone: + 9476 363 0369</p>
                            <p>Email: reservations@orbit88.lk</p>
                        </div>
                    </div>

                    <!-- Banquet & Weddings -->
                    <div>
                        <h3 class="text-xl font-light text-gray-800 mb-3 marcellus">Banquet & Weddings</h3>
                        <div class="space-y-2 text-gray-600">
                            <p>Enquiries & Bookings</p>
                            <p>Phone: + 9476 363 0369</p>
                            <p>Email: reservations@orbit88.lk</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div class="bg-white p-20 max-md:p-10 contact-bg bg-center bg-cover text-white">
                <div>
                <h6 class="text-white text-sm mb-2 text-center">CONTACT FORM</h6>
                <h2 class="text-3xl text-center marcellus font-light text-white mb-8">Let's Start A Conversation</h2>
                <form class="space-y-6 text-black">
                    <div>
                        <input type="text" placeholder="Your Name" required
                            class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email" required
                            class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    </div>
                    <div>
                        <input type="text" placeholder="Subject" required
                            class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    </div>
                    <div>
                        <textarea placeholder="Your Message" rows="6" required
                            class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-[#182B4C] text-white py-3 px-6 hover:bg-white hover:text-[#182B4C] transition duration-300">
                        Send Your Message
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <?php
    include 'Fotter.php';
    ?>
</body>
<script src="scripts/common.js"></script>
<!--Flowbite and CoreUI-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/js/coreui.bundle.min.js"
    integrity="sha384-JdRP5GRWP6APhoVS1OM/pOKMWe7q9q8hpl+J2nhCfVJKoS+yzGtELC5REIYKrymn"
    crossorigin="anonymous"></script>

</html>