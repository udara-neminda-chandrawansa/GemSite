<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbit88 Hotels by AMR | Hotels and Resorts</title>
    <link rel="stylesheet" href="styles/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/orbit_88_logo.png" type="image/x-icon">
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
    <!--banner container-->
    <div class="h-dvh">
        <!--90%-->
        <div class="h-[60%] max-[992px]:h-full landing_banner2 relative flex flex-col"
            style="background-image: url('https://www.hilton.com/im/en/NoHotel/15621541/1252-corp-connecting-rooms-ohw-room.jpg?impolicy=crop&cw=4500&ch=3000&gravity=NorthWest&xposition=0&yposition=0&rw=1280&rh=856'); background-size: cover; background-position: center;">
            <!--Top layer (backdrop)-->
            <div class="absolute bottom-0 inset-0 bg-gradient-to-bl from-[#1f1f1f] to-transparent"></div>
            <!--nav-->
            <?php
            include "navbar.php";
            ?>
            <div class="flex justify-center items-center flex-grow flex flex-col text-white text-center gap-6"
                style="z-index: 1;">
                <h3 class="marcellus text-[75px] w-3/5 max-[992px]:w-full max-[992px]:px-6 max-md:text-[60px] bh-lh">
                    Room Search Results</h3>

                <button
                    class="px-4 py-3 bg-[#b99d75] hover:bg-white hover:text-black transition-all duration-300 hidden max-[992px]:flex">Book
                    Your Stay</button>
            </div>
        </div>

        <br>
        <div class="container mx-auto px-6 py-12">
            <!-- Availability Form and Accommodations -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Availability Form -->
                <div class="col-span-1 bg-white p-8 order-2 lg:order-1">
                    <div class="relative">
                        <input datepicker id="start-datepicker" type="text"
                            class="h-full placeholder:text-black bg-transparent border border-[#b99d75] text-black text-sm focus:ring-[#b99d75] focus:border-[#b99d75] block w-full p-2.5"
                            placeholder="Check In">
                    </div>
                    <br>
                    <div class="relative">
                        <input datepicker id="end-datepicker" type="text"
                            class="h-full placeholder:text-black bg-transparent border border-[#b99d75] text-black text-sm focus:ring-[#b99d75] focus:border-[#b99d75] block w-full p-2.5"
                            placeholder="Check out">
                    </div>
                    <br>
                    <!-- Rooms Dropdown -->
                    <div class="relative">
                        <!-- Dropdown Toggle -->
                        <div
                            id="rooms-dropdown-toggle"
                            class="flex justify-between items-center px-4 py-2 border border-[#b99d75] cursor-pointer bg-white text-black">
                            <p>Rooms</p>
                            <p id="rooms-display" class="flex items-center">
                                1 Room
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </div>

                        <!-- Dropdown Content -->
                        <div
                            id="rooms-dropdown"
                            class="absolute left-0 mt-1 w-64 bg-[#e8e4df] border border-[#b99d75] shadow-md hidden z-10">
                            <div class="p-4">
                                <div class="flex justify-between items-center">
                                    <p class="text-black">Rooms</p>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            id="decrement-rooms"
                                            class="px-3 py-1 border border-gray-300 rounded-md bg-gray-100 text-black hover:bg-gray-200">
                                            -
                                        </button>
                                        <span id="rooms-count" class="text-black font-bold">1</span>
                                        <button
                                            id="increment-rooms"
                                            class="px-3 py-1 border border-gray-300 rounded-md bg-gray-100 text-black hover:bg-gray-200">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Guests Dropdown -->
                    <div class="relative mt-4">
                        <div
                            id="guests-dropdown-toggle"
                            class="flex justify-between items-center px-4 py-2 border border-[#b99d75] cursor-pointer bg-white text-black">
                            <p>Guests</p>
                            <p id="guests-display" class="flex items-center">
                                1 Adult, 0 Children
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 ml-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </div>

                        <div
                            id="guests-dropdown"
                            class="absolute left-0 mt-1 w-64 bg-[#e8e4df] border border-[#b99d75] shadow-md hidden z-10">
                            <div class="p-4 space-y-4">
                                <div class="flex justify-between items-center">
                                    <p class="text-black">Adults</p>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            id="decrement-adults"
                                            class="px-3 py-1 border border-gray-300 rounded-md bg-gray-100 text-black hover:bg-gray-200">
                                            -
                                        </button>
                                        <span id="adults-count" class="text-black font-bold">1</span>
                                        <button
                                            id="increment-adults"
                                            class="px-3 py-1 border border-gray-300 rounded-md bg-gray-100 text-black hover:bg-gray-200">
                                            +
                                        </button>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <p class="text-black">Children</p>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            id="decrement-children"
                                            class="px-3 py-1 border border-gray-300 rounded-md bg-gray-100 text-black hover:bg-gray-200">
                                            -
                                        </button>
                                        <span id="children-count" class="text-black font-bold">0</span>
                                        <button
                                            id="increment-children"
                                            class="px-3 py-1 border border-gray-300 rounded-md bg-gray-100 text-black hover:bg-gray-200">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="relative mt-4">
                        <a href="hoteldetails.php">
                            <button
                                class="w-full px-4 py-3 bg-[#b99d75] text-white font-semibold  hover:bg-[#ab8f68] hover:text-white transition-all duration-300">
                                Check Availability
                            </button>
                        </a>
                    </div>


                </div>



                <!-- Accommodation List -->
         <!-- Accommodation List -->
         <div class="col-span-2 space-y-8 order-1 lg:order-2">
                    <!-- Accommodation Item 1 -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 bg-white  overflow-hidden ">
                        <div class="relative">
                            <img src="images/landing/accomodations/acc1.jpg" alt="Premier Oceanview Villa"
                                class="w-full h-60 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white text-gray-800 font-medium px-3 py-1 rounded-md shadow">
                                FROM $100
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Deluxe Suite</h3>
                            <!-- <p class="text-sm text-gray-500 mb-4">Private Pool / Ocean View / Single Level</p> -->
                            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                                Indulge in unparalleled luxury with our Deluxe Suite, designed to offer a perfect blend
                                of comfort and sophistication. Featuring elegantly curated interiors, this suite
                                provides a spacious bedroom with a plush king-size bed, a separate living area, and an
                                en-suite bathroom equipped with premium amenities.
                            </p>
                            <a href="hoteldetails.php"
                                class="text-[#b99d75] hover:text-[#a6845b] font-semibold text-sm flex items-center gap-1">
                                Discover More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Accommodation Item 2 -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 bg-white overflow-hidden">
                        <div class="relative">
                            <img src="images/landing/accomodations/acc2.jpg" alt="Premier Beachfront Suite"
                                class="w-full h-60 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white text-gray-800 font-medium px-3 py-1 rounded-md shadow">
                                FROM $130
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Executive Suite</h3>
                            <!-- <p class="text-sm text-gray-500 mb-4">Beachfront Access / Private Pool</p> -->
                            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                                Experience the pinnacle of productivity and style with our Executive Suite, tailored for
                                discerning business and leisure travelers. This suite offers a contemporary design with
                                a luxurious bedroom, a dedicated workspace equipped with high-speed internet, and a
                                stylish lounge area perfect for meetings or unwinding.
                            </p>
                            <a href="hoteldetails.php"
                                class="text-[#b99d75] hover:text-[#a6845b] font-semibold text-sm flex items-center gap-1">
                                Discover More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Accommodation Item 3 -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 bg-white overflow-hidden">
                        <div class="relative">
                            <img src="images/landing/accomodations/acc3.jpg" alt="Premier Garden Suite"
                                class="w-full h-60 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white text-gray-800 font-medium px-3 py-1 rounded-md shadow">
                                FROM $160
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Family Suite</h3>
                            <!-- <p class="text-sm text-gray-500 mb-4">Garden View / Private Pool / Beachfront Access</p> -->
                            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                                Create unforgettable memories with your loved ones in our Family Suite, thoughtfully
                                designed for spaciousness and togetherness. Featuring multiple bedrooms, a cozy living
                                area, and child-friendly amenities, this suite ensures the perfect setting for families
                                to relax and bond.
                            </p>
                            <a href="hoteldetails.php"
                                class="text-[#b99d75] hover:text-[#a6845b] font-semibold text-sm flex items-center gap-1">
                                Discover More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
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

    // Rooms Dropdown Functionality
    const roomsDropdownToggle = document.getElementById("rooms-dropdown-toggle");
    const roomsDropdown = document.getElementById("rooms-dropdown");
    const roomsDisplay = document.getElementById("rooms-display");
    const roomsCountElement = document.getElementById("rooms-count");

    let roomsCount = 1;

    roomsDropdownToggle.addEventListener("click", () => {
        roomsDropdown.classList.toggle("hidden");
    });

    document.getElementById("increment-rooms").addEventListener("click", () => {
        roomsCount++;
        roomsCountElement.textContent = roomsCount;
        roomsDisplay.textContent = `${roomsCount} Room${roomsCount > 1 ? "s" : ""}`;
    });

    document.getElementById("decrement-rooms").addEventListener("click", () => {
        if (roomsCount > 1) {
            roomsCount--;
            roomsCountElement.textContent = roomsCount;
            roomsDisplay.textContent = `${roomsCount} Room${roomsCount > 1 ? "s" : ""}`;
        }
    });

    // Guests Dropdown Functionality
    const guestsDropdownToggle = document.getElementById("guests-dropdown-toggle");
    const guestsDropdown = document.getElementById("guests-dropdown");
    const guestsDisplay = document.getElementById("guests-display");
    const adultsCountElement = document.getElementById("adults-count");
    const childrenCountElement = document.getElementById("children-count");

    let adultsCount = 1;
    let childrenCount = 0;

    guestsDropdownToggle.addEventListener("click", () => {
        guestsDropdown.classList.toggle("hidden");
    });

    document.getElementById("increment-adults").addEventListener("click", () => {
        adultsCount++;
        adultsCountElement.textContent = adultsCount;
        updateGuestsDisplay();
    });

    document.getElementById("decrement-adults").addEventListener("click", () => {
        if (adultsCount > 1) {
            adultsCount--;
            adultsCountElement.textContent = adultsCount;
            updateGuestsDisplay();
        }
    });

    document.getElementById("increment-children").addEventListener("click", () => {
        childrenCount++;
        childrenCountElement.textContent = childrenCount;
        updateGuestsDisplay();
    });

    document.getElementById("decrement-children").addEventListener("click", () => {
        if (childrenCount > 0) {
            childrenCount--;
            childrenCountElement.textContent = childrenCount;
            updateGuestsDisplay();
        }
    });

    function updateGuestsDisplay() {
        guestsDisplay.textContent = `${adultsCount} Adult${adultsCount > 1 ? "s" : ""}, ${childrenCount} Child${childrenCount > 1 ? "ren" : ""}`;
    }

    // Close dropdowns on outside click
    document.addEventListener("click", (e) => {
        if (!roomsDropdownToggle.contains(e.target) && !roomsDropdown.contains(e.target)) {
            roomsDropdown.classList.add("hidden");
        }
        if (!guestsDropdownToggle.contains(e.target) && !guestsDropdown.contains(e.target)) {
            guestsDropdown.classList.add("hidden");
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/js/coreui.bundle.min.js"
    integrity="sha384-JdRP5GRWP6APhoVS1OM/pOKMWe7q9q8hpl+J2nhCfVJKoS+yzGtELC5REIYKrymn"
    crossorigin="anonymous"></script>



</html>