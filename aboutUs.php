<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about us</title>
    <link rel="shortcut icon" href="images/glklabweblogo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="styles/common.css">
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

<body class="bg-gray-100 overflow-x-hidden">
    <div class="h-[70dvh] max-[992px]:h-dvh landing_banner2 relative flex flex-col"
        style="background-image: url('./images/1.webp'); background-size: cover; background-position: center;">
        <!--Top layer (backdrop)-->
        <div class="absolute bottom-0 inset-0 bg-gradient-to-bl from-[#1f1f1f] to-transparent"></div>
        <!--nav-->
        <?php
        include "navbar.php";
        ?>
        <div class="flex justify-center items-center flex-grow flex flex-col text-white text-center gap-6"
            style="z-index: 1;">
            <h3 class="marcellus text-[75px] w-3/5 max-[992px]:w-full max-[992px]:px-6 max-md:text-[60px] bh-lh">
                About Us</h3>
        </div>
    </div>

    <!-- Welcome Section -->
    <section class="h-fit flex flex-col px-6 sm:px-12 py-12 bg-[#F3F4EF] items-center gap-6 text-[#585B54] relative">
        <p class="text-sm  text-center sm:text-left">
            Discover the Sparkle
        </p>

        <h1 class="text-3xl sm:text-5xl lg:text-6xl text-center marcellus text-[#1a1b1a]">
            Trust, Precision, and Excellence in Gem Testing
        </h1>

        <p class="text-center md:w-3/5 px-6">
            Nestled in the heart of Kandy, just 10 m from the main road, our hotel offers a perfect blend of
            convenience and tranquility. As a newly opened luxury destination, we cater to discerning
            travelers, including international tourists, local elites, business professionals, and families.
            Our commitment is to provide an exceptional experience with world-class amenities, refined
            aesthetics, and personalized service.
        </p>

        <!-- Bottom Image -->
        <div class="w-full mt-6 hidden">
            <img src="images/Aboutus/welocme.jpg" alt="resort-bottom" class="h-[30%] w-full lg:h-[40%] object-cover" />
        </div>
    </section>

    <!-- Member of the Gemmological Association of Great Britain -->
    <section class="py-12 max-md:pt-0 px-6 sm:px-12 bg-[#F3F4EF] text-[#585B54]">
        <div class="grid grid-cols-1 md:grid-cols-2 max-md:h-fit">
            <!-- Left Image Section -->
            <div class="flex justify-center items-center">
                <img src="images/pl1_enhanced.png" alt="Gemstone Laboratory"
                    class="w-full md:w-[80%] h-auto object-cover" data-aos="fade-right" />
            </div>

            <!-- Right Description Section -->
            <div class="md:pl-12 flex flex-col justify-center items-start text-left">
                <h4 class="text-xs uppercase tracking-widest text-[#1a1b1a] mb-2 w-full max-md:pt-6">
                    A Short History of the Laboratory
                </h4>

                <h2 class="text-5xl marcellus text-[#1a1b1a] mb-4 w-full">
                    Member of the Gemmological Association of Great Britain
                </h2>

                <p class="text-md text-gray-600 mb-4">
                    The Gemmological Association of Great Britain (Gem-A) is the world’s longest-established provider of
                    gem education, founded in 1908. Based in London, it offers internationally recognized qualifications
                    in gemmology and diamond grading. Gem-A also supports the gem and jewelry industry through
                    professional training, certification, and resources, fostering a global network of gem enthusiasts
                    and professionals dedicated to the study and integrity of gemstones.
                </p>

                <p class="text-md text-gray-600 mb-4">
                    Additionally, The GLK Gem Laboratory at Kandy proudly provides gemstone certification for all
                    gemstone varieties. Our brief reports and gem certification are ideal for those seeking assurance
                    of authenticity and gemstone type. Reports from our Kandy branch can be obtained at minimal
                    expense, which is why they are highly recommended.
                </p>

                <p class="text-md text-gray-600">
                    Prices for services in our branches in Sri Lanka are much more affordable than in other areas of
                    the country and are also cheaper than costs in Thailand, Asia, Europe, America, and Australia.
                </p>
            </div>
        </div>
    </section>

    <!--gia Alumni-->
    <section class="py-12 max-md:pt-0 px-6 sm:px-12 bg-[#F3F4EF] text-[#585B54]">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Left Description Section -->
            <div class="flex flex-col justify-center items-start text-left md:text-left">
                <h4 class="text-xs uppercase tracking-widest text-[#1a1b1a] mb-2">
                    The GIA Alumni Network
                </h4>

                <h2 class="text-5xl marcellus text-[#1a1b1a] mb-4">
                    Member of the GIA Alumni
                </h2>

                <p class="text-md text-gray-600 mb-4 md:pr-6">
                    The GIA Alumni is a global network of graduates from the Gemological Institute of America (GIA),
                    the world’s foremost authority in gemology and jewelry education. This community connects
                    professionals and enthusiasts in the gem and jewelry industry, offering opportunities for
                    networking,
                    continued education, and industry insights.
                </p>

                <p class="text-md text-gray-600 md:pr-6">
                    GIA Alumni members are recognized for their expertise and commitment to upholding the highest
                    standards of gemological knowledge and ethical practices. By fostering collaboration and sharing
                    knowledge, the network ensures the continued growth and innovation of the gem and jewelry industry.
                </p>
            </div>


            <!-- Right Image Section -->
            <div class="flex justify-center items-center">
                <img src="images/pl2_enhanced.png" alt="Gemstone Laboratory"
                    class="w-full md:w-[80%] h-auto object-cover" data-aos="fade-right" />
            </div>
        </div>
    </section>
    <!--newsletter-->
    <div
        class="min-h-screen bg-center bg-fixed py-12 flex flex-col justify-center items-center about-numbers-banner relative">
        <!-- Top Layer (Backdrop) -->
        <div class="absolute bottom-0 inset-0 bg-gradient-to-bl from-[#000] to-transparent"></div>

        <!-- Newsletter Section -->
        <div class="text-center text-white px-4 sm:px-6 z-10 w-full max-w-4xl">
            <!-- Heading -->
            <p class="text-lg sm:text-2xl md:text-4xl lg:text-5xl mb-4" data-aos="fade-top">
                Join Our Newsletter!
            </p>

            <!-- Subheading -->
            <p class="marcellus text-xl sm:text-3xl md:text-5xl lg:text-6xl font-thin mb-6" data-aos="fade-top">
                Stay updated with our latest tutorials and ideas by joining our newsletter.
            </p>
            <p>Discover the world of gemology with expert insights, tips, and updates delivered straight to your inbox!
                By subscribing to our newsletter, you’ll enjoy:</p>
            <ul>
                <li>Expert Tutorials: Learn how to identify, evaluate, and appreciate gemstones with precision.</li>
                <li>Innovative Ideas: Stay inspired with the latest trends and techniques in gem checking.</li>
                <li>Exclusive Updates: Be the first to know about new services, offers, and gem-related news.</li>
                <li>Don’t miss out on becoming a gemology pro. Sign up now and stay connected with the brilliance of the
                    gem world!</li>
            </ul>
            <!-- Email Input and Button -->
            <div class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-4 w-full">
                <input type="email" placeholder="Enter your email"
                    class="px-4 py-2 rounded-lg text-black w-full sm:w-2/3 focus:outline-none focus:ring-2 focus:ring-[#ffb703]"
                    required />
                <button
                    class="px-6 py-2 bg-[#182B4C] text-white font-bold rounded-lg hover:bg-[#ffa400] transition-all duration-300 w-full sm:w-auto">
                    Subscribe
                </button>
            </div>
        </div>
    </div>

    <!--recent posts-->
    <section class="px-6 py-12">
        <div class="text-center">
            <!-- <h2 class="text-sm text-gray-500  mb-4">Luxury, Comfort & Tailor-Made Service</h2> -->
            <h2 class="marcellus text-6xl mb-4">Recent Posts</h2>
            <p class="text-sm text-gray-500 md:px-12">Stay updated with the latest insights, news, and trends in the
                world of gemology. From expert tips on gem authentication to industry advancements and GLKLab's success
                stories, our Recent Posts section keeps you informed and inspired. Explore the brilliance behind the
                science of gemstones with GLKLab</p>
        </div>

        <!-- Image Cards Section -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 pt-6">
            <div class="bg-white shadow-lg overflow-hidden relative border-4 border-[#b99d75]">
                <div class="relative group">
                    <img src="images/11.webp" alt="Image 1"
                        class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-center h-full flex flex-col justify-center">
                        <h3 class="marcellus mb-2 text-white text-3xl">
                            Ceylon Sapphires are not only prized for their beauty but also for their authenticity
                        </h3>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg overflow-hidden relative border-4 border-[#b99d75]">
                <div class="relative group">
                    <img src="images/12.webp" alt="Image 1"
                        class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-center h-full flex flex-col justify-center">
                        <h3 class="marcellus mb-2 text-white text-3xl">
                            We are Member Of…
                        </h3>
                    </div>
                </div>
            </div>

            <!-- <div class="bg-white shadow-lg  overflow-hidden relative border-4 border-[#b99d75]">
                <div class="relative group">
                    <img src="images/Aboutus/ammenities/convertible twin room.jpg" alt="Image 3"
                        class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-center h-full flex flex-col justify-between">
                        <h3 class="marcellus mb-2 text-white text-xl ">
                            Convertible Twin Rooms</h3>
                        <ul class="text-white text-sm flex flex-col gap-3">
                            <li>Twin rooms can be adjusted to accommodate triple or quadruple
                                occupancy, perfect for families or groups.</li>
                        </ul>
                    </div>
                </div>
            </div> -->

            <!-- <div class="bg-white shadow-lg  overflow-hidden relative border-4 border-[#b99d75]">
                <div class="relative group">
                    <img src="images/Aboutus/ammenities/laundry and ironing.jpg" alt="Image 4"
                        class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-center h-full flex flex-col justify-between">
                        <h3 class="marcellus mb-2 text-white text-xl ">
                            Laundry and Ironing Facilities</h3>
                        <ul class="text-white text-sm flex flex-col gap-3">
                            <li> Available upon request to meet your needs during your stay.</li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Footer Section -->
    <?php
    include 'Fotter.php';
    ?>
    <script>
        AOS.init({
            duration: 1000, // Animation duration in milliseconds
            easing: 'ease-in-out', // Easing function for animation
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.8/dist/countUp.min.js"></script>
    <!--Flowbite and CoreUI-->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/js/coreui.bundle.min.js"
        integrity="sha384-JdRP5GRWP6APhoVS1OM/pOKMWe7q9q8hpl+J2nhCfVJKoS+yzGtELC5REIYKrymn"
        crossorigin="anonymous"></script>

    <script>
        // Initialize AOS
        AOS.init();

        // Trigger number animation once the AOS element is in view
        document.addEventListener('aos:in', (e) => {
            const id = e.target.id;

            if (id === 'premium-rooms' && !e.target.classList.contains('counted')) {
                new CountUp('premium-rooms', 0, 72, 0, 2.5).start();
                e.target.classList.add('counted');
            }
            if (id === 'deluxe-suites' && !e.target.classList.contains('counted')) {
                new CountUp('deluxe-suites', 0, 20, 0, 2.5).start();
                e.target.classList.add('counted');
            }
            if (id === 'private-chalets' && !e.target.classList.contains('counted')) {
                new CountUp('private-chalets', 0, 12, 0, 2.5).start();
                e.target.classList.add('counted');
            }
            if (id === 'restaurants' && !e.target.classList.contains('counted')) {
                new CountUp('restaurants', 0, 6, 0, 2.5).start();
                e.target.classList.add('counted');
            }
        });
    </script>
    <script>
        // Tooltip visibility logic
        document.querySelectorAll('.hs-tooltip-toggle').forEach(button => {
            button.addEventListener('mouseenter', function () {
                const tooltip = button.querySelector('.hs-tooltip-content');
                tooltip.classList.remove('opacity-0', 'invisible');
                tooltip.classList.add('opacity-100', 'visible');
            });
            button.addEventListener('mouseleave', function () {
                const tooltip = button.querySelector('.hs-tooltip-content');
                tooltip.classList.remove('opacity-100', 'visible');
                tooltip.classList.add('opacity-0', 'invisible');
            });
        });
    </script>
</body>

</html>