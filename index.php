<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gem Laboratory Kandy (pvt) Ltd.</title>
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
    <!--banner container (udara branch test)-->
    <div class="h-dvh">
        <!--90%-->
        <div class="h-[90%] max-[992px]:h-full landing_banner relative flex flex-col">
            <!--Top layer (backdrop)-->
            <div class="absolute bottom-0 inset-0 bg-gradient-to-bl from-[#1f1f1f] to-transparent"></div>
            <!--nav-->
            <?php
            include "navbar.php";
            ?>
            <div class="flex justify-center items-center flex-grow flex flex-col text-white text-center gap-6"
                style="z-index: 1;">
                <h1 class="marcellus text-[100px] w-3/5 max-[992px]:w-full max-[992px]:px-8 max-md:text-[60px] bh-lh">
                    Gem Laboratory Kandy (Pvt) Ltd.</h1>
            </div>
        </div>

        <!-- Welcome Section -->
        <div
            class="h-fit flex flex-col px-12 max-md:px-6 py-12 bg-[#F3F4EF] items-center gap-6 text-[#585B54] relative">
            <img src="images/landing/resort.jpg" alt="axs" class="w-fit">
            <p class="text-sm font-semibold">Welcome to Gem Laboratory Kandy (Pvt) Ltd.</p>
            <h1 class="text-6xl max-md:text-3xl text-center marcellus text-[#1a1b1a]">
                Welcome to Kandy - Where Science Meets the Sparkle of Gems
            </h1>

            <!-- Dynamic Paragraph -->
            <p id="dynamicContent" class="text-center md:w-3/5 px-6 mt-2 text-xl">
                Our vision is to revolutionize the gem industry with scientific precision and sustainability,
                ensuring every gemstone tells its true story and serves the future responsibly.
            </p>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button id="visionButton"
                    class="px-10 py-2 bg-[#182B4C] border border-[#182B4C] text-white rounded hover:bg-[#182B4C]">
                    Vision
                </button>
                <button id="missionButton" class="px-10 py-2 bg-[#182B4C] border border-[#182B4C] text-white rounded">
                    Mission
                </button>
            </div>
        </div>

        <!--carousel is here-->
        <div class="flex flex-col h-[330px] bg-[#F3F4EF]">
            <div class="flex items-center justify-center p-8 w-full z-10">
                <div class="relative w-full max-w-[90vw] mx-auto z-10">
                    <!-- Main carousel container -->
                    <div id="carousel"
                        class="overflow-x-scroll hide-scrollbar snap-x snap-mandatory flex gap-4 scroll-smooth">
                        <img src="images/home/image1.jpg" alt="Image 01"
                            class="h-[600px] w-[500px] object-cover  flex-shrink-0 snap-center">
                        <img src="images/home/holding-green-gemstone-stockcake.webp" alt="Image 01"
                            class="h-[600px] w-[500px] object-cover  flex-shrink-0 snap-center">
                        <img src="images/home/image3.jpg" alt="Image 01"
                            class="h-[600px] w-[500px] object-cover  flex-shrink-0 snap-center">
                        <img src="images/home/aboutusbanner.webp" alt="Image 01"
                            class="h-[600px] w-[500px] object-cover  flex-shrink-0 snap-center">
                    </div>

                    <!-- Navigation buttons -->
                    <button onclick="scrollCarousel('left')"
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow-lg transition-colors z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button onclick="scrollCarousel('right')"
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow-lg transition-colors z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-14 py-6">
                <p class="belle text-3xl max-sm:text-2xl sm:w-2/3 max-sm:text-center text-[#585B54]">Inspired by our
                    "Rooted in Expertise, Shaped by Innovation, Crafted to Ensure Authenticity"</p>
            </div>
        </div>
        <!--spacer div-->
        <div class="h-[460px] max-xl:h-[500px] max-[550px]:h-[550px] py-12"></div>
        <!--Orbit88 Hotels by AMR: A Perfect Blend of Comfort, Culture, and Luxury-->
        <div
            class="h-fit flex flex-col px-12 max-md:px-6 py-12 bg-[#F3F4EF] items-center gap-6 text-[#585B54] relative">
            <h1 class="text-6xl max-md:text-3xl text-center marcellus text-[#1a1b1a]">
                "A Perfect Blend of Precision, Trust, and Expertise"
            </h1>
            <p class="text-center md:w-3/5 text-xl px-6 text-[#585B54]">
                Whether you're a gem enthusiast, a jewelry professional, or a collector, GLKLab offers
                a comprehensive range of services to meet your gemological needs. From advanced
                gemstone identification and grading to precise authenticity testing, we ensure accuracy
                and reliability. Backed by cutting-edge technology and expert gemologists, GLKLab is
                your trusted partner in unlocking the true brilliance of every gem.
            </p>

        </div>
        <!--video-->
        <!-- Video Section -->
        <div class="h-[80dvh] vid_banner bg-center bg-cover relative">
            <!-- Placeholder Image -->
            <img src="./images/home/Ceylon-Gems.jpg" alt="Video Placeholder" class="w-full h-full object-cover"
                id="videoPlaceholder">

            <!-- Play Button -->
            <button id="playButton" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="w-20 h-20 text-white border border-white hover:text-[#182B4C] hover:border-[#182B4C]">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </button>
        </div>
        <!--Services-->
        <div class="md:p-[100px] flex flex-col p-12 gap-6">
            <div class="flex flex-col justify-center items-center gap-6 text-center">
                <h1 class="text-5xl marcellus text-center max-[992px]:text-3xl">
                    Why Choose Gem Laboratory Kandy (Pvt) Ltd?
                </h1>
                <p class="text-lg max-[600px]:text-base">
                    The GLK Gem Laboratory in Kandy offers expert gemstone analysis and certification, ensuring
                    authenticity and accuracy.
                    Our services are affordable, with pricing significantly lower than those in Thailand, Asia, Europe,
                    America, and Australia. We provide concise reports, fostering trust and sustainability in the
                    gemstone industry. Key services include:
                </p>
            </div>
            <div class="container mx-auto px-1 py-12 max-8x1">
                <!-- Slider container -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Gem Identification -->
                    <div class="bg-white  overflow-hidden">
                        <div class="relative">
                            <img src="./images/home/hq720.jpg" alt="Gem identifier" class="w-full h-64 object-cover" />
                        </div>

                        <div class="py-6">
                            <h3 class="text-2xl font-medium mb-4 marcellus">Gem Identification</h3>

                            <p class="text-gray-600 mb-6 text-justify mt-10">
                                Gem identification is the process of analyzing and determining the nature of a gemstone
                                using scientific methods and advanced gemological tools.
                                This involves evaluating the gem's optical, physical, and chemical properties to
                                distinguish natural gems from synthetic counterparts or imitations.
                            </p>

                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Gem Identification -->
                    <div class="bg-white  overflow-hidden">
                        <div class="relative">
                            <img src="./images/home/WhatsApp-Image-2024-01-19-at-23.12.36_9848ca0c.jpg"
                                alt="Deluxe Suite" class="w-full h-64 object-cover" />
                        </div>

                        <div class="py-6">
                            <h3 class="text-xl font-medium mb-4 marcellus">Issuing Internationally Valid Certificates
                                with Photos</h3>

                            <p class="text-gray-600 mb-6 text-justify">
                                At GLKLab, we provide internationally recognized certificates for gemstones, ensuring
                                accuracy and authenticity. Our certificates
                                come with detailed descriptions of the gemstone’s key characteristics, including its
                                type, origin, dimensions, weight, color,
                                clarity, and cut.
                            </p>

                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Treatment Analysis -->
                    <div class="bg-white  overflow-hidden">
                        <div class="relative">
                            <img src="./images/home/3.jpg" alt="Deluxe Suite" class="w-full h-64 object-cover" />
                        </div>

                        <div class="py-6">
                            <h3 class="text-2xl font-medium mb-4 marcellus">Treatment Analysis</h3>

                            <p class="text-gray-600 mb-6 text-justify mt-10">
                                Treatment analysis is the process of determining whether a gemstone has undergone any
                                enhancements or treatments to improve its appearance or durability. Many gemstones are
                                treated to
                                enhance their color, clarity, or overall visual appeal, but it's crucial to disclose
                                these treatments to ensure transparency in the market.
                            </p>

                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>


                    <!-- Consultation Analysis -->
                    <div class="bg-white  overflow-hidden">
                        <div class="relative">
                            <img src="images/chain-784422_1280.jpg" alt="Deluxe Suite"
                                class="w-full h-64 object-cover" />
                        </div>

                        <div class="py-6">
                            <h3 class="text-2xl font-medium mb-4 marcellus">Consultation</h3>

                            <p class="text-gray-600 mb-6 text-justify mt-10">
                                At GLKLab, we offer expert gemological consultation to help you make informed decisions
                                about gemstones. Whether you're a
                                collector, investor, jewelry designer, or retailer, our team of experienced gemologists
                                provides personalized guidance to address your specific needs.
                            </p>

                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800 mt-5">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Pagination dots -->
                    <div class="hidden justify-center mt-8 gap-2">
                        <button class="w-2 h-2 rounded-full bg-blue-600"></button>
                        <button class="w-2 h-2 rounded-full bg-gray-300"></button>
                        <button class="w-2 h-2 rounded-full bg-gray-300"></button>
                        <button class="w-2 h-2 rounded-full bg-gray-300"></button>
                    </div>
                </div>
            </div>
        </div>
        <!--desirable locations-->
        <div class="relative">
            <!-- Content Container -->
            <div class="pt-20 pb-32 px-4 text-center text-white desire_bg bg-cover bg-center w-full bg-fixed">
                <!--Top layer (backdrop)-->
                <div class="absolute bottom-0 h-full inset-0 bg-gradient-to-bl from-[#1f1f1f] to-transparent"></div>
                <div class="z-10 flex flex-col">
                    <!-- Logo -->
                    <div class="mb-8 z-10 flex justify-center">
                        <img src="images/glklabweblogo.jpeg" alt="logo" class="w-20">
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-5xl md:text-6xl marcellus mb-6 max-w-4xl mx-auto z-10">
                        Gem Laboratory Kandy (Pvt) Ltd.
                    </h1>

                </div>
                <!-- Three Column Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Exceptional Sri Lankan Hospitality -->
                    <div class="group z-10">
                        <div class="relative mb-6 overflow-hidden">
                            <img src="./images/home/a.jpg" alt="Exceptional Sri Lankan Hospitality"
                                class="w-full h-[400px] object-cover border-4 border-[#182B4C]" />
                        </div>
                        <div>
                            <h1 class="text-3xl marcellus">Visual Inspection</h1>
                            <p>A thorough examination of the gem's external features, including color, clarity, and
                                surface characteristics, to identify visible flaws or unique properties.</p>
                        </div>
                    </div>

                    <!-- Mix of Modern Luxury and Cultural Authenticity -->
                    <div class="group z-10 lg:mt-10">
                        <div class="relative mb-6 overflow-hidden">
                            <img src="./images/home/b.jpeg" alt="Mix of Modern Luxury and Cultural Authenticity"
                                class="w-full h-[400px] object-cover border-4 border-[#182B4C]" />
                        </div>
                        <div>
                            <h1 class="text-3xl marcellus">Magnification Analysis</h1>
                            <p>Using a jeweler’s loupe or microscope to inspect inclusions, growth patterns, and other
                                internal features that help determine the gem’s authenticity and quality.
                            </p>
                        </div>
                    </div>

                    <!-- Breathtaking Natural Surroundings -->
                    <div class="group z-10">
                        <div class="relative mb-6 overflow-hidden">
                            <img src="./images/home/c.webp" alt="Breathtaking Natural Surroundings"
                                class="w-full h-[400px] object-cover border-4 border-[#182B4C]" />
                        </div>
                        <div>
                            <h1 class="text-3xl marcellus">Refractive Index Testing
                            </h1>
                            <p>Measuring the gem's refractive index to identify its type and detect possible treatments
                                or enhancements.
                            </p>
                        </div>
                    </div>
                    <!-- Variety of Accommodations -->
                    <div class="group z-10 lg:mt-10">
                        <div class="relative mb-6 overflow-hidden">
                            <img src="./images/home/d.jpg" alt="Variety of Accommodations"
                                class="w-full h-[400px] object-cover border-4 border-[#182B4C]" />
                        </div>
                        <div>
                            <h1 class="text-3xl marcellus">Advanced Testing</h1>
                            <p>Utilizing specialized tools like spectroscopes or UV light to analyze fluorescence,
                                absorption patterns, and other properties for a conclusive identification.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--discover-->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left image -->
                <div class="lg:col-span-1 lg:h-full">
                    <img src="./images/home/d.jpg" alt="Outdoor Space" class="shadow-lg w-full lg:h-5/6 object-cover">
                    <p class="italic text-2xl max-md:text-sm text-end belle mt-4">
                        "Driven by Expertise, Surrounded by Precision, Designed for Authenticity"
                    </p>
                </div>

                <!-- Todo list -->
                <div class="lg:col-span-2">
                    <h3 class="text-xs font-semibold text-gray-500 uppercase mb-2">
                        ANALYSIS & GRADING -REPORT CHECK
                    </h3>
                    <h2 class="text-5xl marcellus">
                        REPORT CHECK
                    </h2>

                    <!-- Paragraph for description -->
                    <p class="mt-4 text-gray-700 text-base">
                        We are pleased to introduce the GLK Report Check, a new feature accessible for all GLK
                        reports that offers an enhanced level of assurance. This tool allows you to verify promptly
                        and effortlessly that the information presented in your report is consistent with the data
                        archived in the GLK report database.
                    </p>

                    <!-- Paragraph for report lookup -->
                    <p class="mt-4 text-gray-700 text-base">
                        <strong>Look Up A Report:</strong> Link to Database:
                    </p>

                    <!-- Check Now Button -->
                    <div class="mt-5">
                        <a href="http://glklabintl.com/" target="_blank"
                            class="mt-4 px-6 py-2 bg-[#182B4C] text-white font-semibold rounded hover:bg-[#182B4C] transition-all duration-300">
                            Check Now
                        </a>
                    </div>

                    <!-- Share This Section -->
                    <div class="mt-6 text-gray-500 flex items-center space-x-4">
                        <span class="text-sm uppercase font-semibold">Share this:</span>
                        <a href="#" class="text-blue-500 hover:text-blue-700 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M22.675 0h-21.35C.601 0 0 .601 0 1.337v21.326c0 .735.601 1.337 1.337 1.337h11.491v-9.294H9.691v-3.622h3.137V7.845c0-3.1 1.893-4.788 4.658-4.788 1.325 0 2.462.099 2.794.143v3.24h-1.916c-1.504 0-1.795.715-1.795 1.764v2.311h3.586l-.467 3.622h-3.119V24h6.116c.735 0 1.337-.601 1.337-1.337V1.337C24 .601 23.408 0 22.675 0z" />
                            </svg>
                            Facebook
                        </a>
                        <a href="#" class="text-blue-500 hover:text-blue-700 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M24 4.557a9.835 9.835 0 01-2.828.775 4.939 4.939 0 002.165-2.724 9.865 9.865 0 01-3.127 1.194 4.92 4.92 0 00-8.384 4.482A13.965 13.965 0 011.671 3.149a4.92 4.92 0 001.523 6.573 4.904 4.904 0 01-2.229-.616v.062a4.924 4.924 0 003.946 4.827 4.937 4.937 0 01-2.224.084 4.928 4.928 0 004.6 3.417A9.867 9.867 0 010 21.539a13.934 13.934 0 007.548 2.212c9.056 0 14.007-7.512 14.007-14.007 0-.213-.004-.425-.014-.637A10.025 10.025 0 0024 4.557z" />
                            </svg>
                            Twitter
                        </a>
                    </div>

                    <!-- Right image -->
                    <div class="mt-6">
                        <img src="./images/home/image3.jpg" alt="Swimming Pool" class="shadow-lg w-full object-cover">
                    </div>


                </div>


            </div>
        </section>
        <!-- Footer Section -->
        <?php
        include 'Fotter.php';
        ?>
</body>
<script src="scripts/common.js"></script>
<!--For Image Carousel (unique to this page)-->
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
<!-- JavaScript for Welcome Section -->
<script>
    // Get buttons and content container
    const visionButton = document.getElementById('visionButton');
    const missionButton = document.getElementById('missionButton');
    const dynamicContent = document.getElementById('dynamicContent');

    // Vision and Mission content
    const visionText = `
    To provide quality services that exceeds the expectations of our esteemed customers by 
    analysis and interpretation of the scientific characteristics of gemstones. We will 
    committed to contributing to and maintaining a healthy and sustainable gemstone industry 
    and jewellery sector
    `;
    const missionText = `
    ”The Gem laboratory Kandy ” mission is to build long term relationships with our customers 
    and clients and provide exceptional customer services by pursuing business through 
    innovation and advanced technology for gem testing and for make and sell high quality 
    gemstones. We exist to attract and maintain customers through our unique combination of 
    lab facility, quality, and customer service
    `;

    // Function to update button styles
    function updateButtonStyles(activeButton, inactiveButton) {
        // Highlight the active button
        activeButton.style.backgroundColor = "#a48963"; // Active color
        activeButton.style.color = "black";

        // Reset the inactive button to default
        inactiveButton.style.backgroundColor = "#b99d75"; // Default color
        inactiveButton.style.color = "white";
    }

    // Display Vision content by default
    dynamicContent.textContent = visionText;

    // Function to handle button color and content update
    function handleButtonClick(button, content, otherButton) {
        // Update content
        dynamicContent.textContent = content;
        // Reset the other button's style
        otherButton.style.backgroundColor = "#182B4C";
        otherButton.style.color = "white";
        // Highlight the clicked button
        button.style.backgroundColor = "white";
        button.style.color = "#182B4C";
    }

    // Event listeners for buttons
    visionButton.addEventListener('click', () => {
        handleButtonClick(visionButton, visionText, missionButton);
    });

    missionButton.addEventListener('click', () => {
        handleButtonClick(missionButton, missionText, visionButton);
    });

    // Set default highlighted button
    visionButton.style.backgroundColor = "white";
    visionButton.style.color = "#182B4C";
</script>
<!--Flowbite and CoreUI-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/js/coreui.bundle.min.js"
    integrity="sha384-JdRP5GRWP6APhoVS1OM/pOKMWe7q9q8hpl+J2nhCfVJKoS+yzGtELC5REIYKrymn"
    crossorigin="anonymous"></script>

</html>