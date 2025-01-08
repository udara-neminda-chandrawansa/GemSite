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
  <div>
    <!--90%-->
    <div class="h-[70dvh] max-[992px]:h-dvh landing_banner2 relative flex flex-col"
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
          Room Bookings</h3>

        <button
          class="px-6 py-3 bg-[#b99d75] hover:bg-white hover:text-black transition-all duration-300 hidden max-[992px]:flex">Book
          Your Stay</button>
      </div>
    </div>



  </div>
  <!--welcome-->
  <div class="max-w-7xl mx-auto px-6 py-6">
    <!-- Main Content -->
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Left Column - w-full on small screens, w-8/12 on large screens -->
      <div class="lg:w-8/12 space-y-6">
        <h1 class="text-4xl md:text-4xl font-medium text-gray-800 marcellus">Deluxe Suite</h1>

        <!-- Features -->
        <p class="text-gray-600">Garden View / Private Pool / Beachfront Access</p>

        <!-- Room Details -->
        <div class="flex flex-wrap gap-6 marcellus">
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-ruler-combined fa-lg text-[#c3a378]"></i>
            <span>60 m²</span>
          </div>
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-user-group fa-lg text-[#c3a378]"></i>
            <span>2 Guests</span>
          </div>
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-bed fa-lg text-[#c3a378]"></i>
            <span>1 King Bed</span>
          </div>
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-bath fa-lg text-[#c3a378]"></i>
            <span>1 Bathroom</span>
          </div>
        </div>

        <!-- Description -->
        <p class="text-gray-600">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
          sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>

        <!-- Family-friendly Amenities -->
        <div class="space-y-6">
          <h2 class="text-2xl font-medium text-gray-800 marcellus">Family-friendly Amenities</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-[#faf7f4] shadow-sm flex items-center gap-3">
              <i class="fa-solid fa-person-swimming text-[#b99d75]"></i>
              <span class="font-medium">Kids Swimming Pool</span>
            </div>
            <div class="p-6 bg-[#faf7f4] shadow-sm flex items-center gap-3">
              <i class="fa-solid fa-bed text-[#b99d75]"></i>
              <span class="font-medium">Extra Beds/Baby Crib</span>
            </div>
            <div class="p-6 bg-[#faf7f4] shadow-sm flex items-center gap-3">
              <i class="fa-solid fa-newspaper text-[#b99d75]"></i>
              <span class="font-medium">Washing Machine</span>
            </div>
          </div>
        </div>

        <!-- Room Amenities -->
        <div class="space-y-6">
          <h2 class="text-2xl font-medium text-gray-800 marcellus">Room Amenities</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <ul class="space-y-6">
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-wind fa-lg text-[#b99d75]"></i>
                <span>Air Conditioner</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-wifi fa-lg text-[#b99d75]"></i>
                <span>Wifi & Internet</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-shoe-prints fa-lg text-[#b99d75]"></i>
                <span>Slippers</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-shower fa-lg text-[#b99d75]"></i>
                <span>Shampoo</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-box fa-lg text-[#b99d75]"></i>
                <span>Safe Box</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-dog fa-lg text-[#b99d75]"></i>
                <span>Pet Friendly</span>
              </li>
            </ul>
            <ul class="space-y-6">
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-tv fa-lg text-[#b99d75]"></i>
                <span>Cable TV</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-toilet-paper fa-lg text-[#b99d75]"></i>
                <span>Towels</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-tv fa-lg text-[#b99d75]"></i>
                <span>Hair Dryer</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-box fa-lg text-[#b99d75]"></i>
                <span>Safe Box</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-mug-hot fa-lg text-[#b99d75]"></i>
                <span>Welcome Drinks</span>
              </li>
              <li class="flex items-center gap-6">
                <i class="fa-solid fa-tv fa-lg text-[#b99d75]"></i>
                <span>In-room Refrigerator</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="space-y-6">
          <h2 class="text-xl sm:text-2xl font-medium text-gray-800 marcellus text-left sm:text-left">
            What’s included in this suite?
          </h2>
          <ul
            class="sm:max-w-md md:max-w-lg lg:max-w-xl list-disc list-inside text-gray-700 custom-bullets mx-auto sm:mx-0">
            <li class="py-2 sm:py-3 text-sm sm:text-base font-medium">
              Private balcony
            </li>
            <li class="py-2 sm:py-3 text-sm sm:text-base font-medium">
              140x200 cm Elite bed
            </li>
            <li class="py-2 sm:py-3 text-sm sm:text-base font-medium">
              TV-UHD screen for watching mountaineering films
            </li>
            <li class="py-2 sm:py-3 text-sm sm:text-base font-medium">
              Writing desk with USB ports for documenting your adventures
            </li>
            <li class="py-2 sm:py-3 text-sm sm:text-base font-medium">
              Room safe for your top mountain photos
            </li>
            <li class="py-2 sm:py-3 text-sm sm:text-base font-medium">
              Service station with Lavazza coffee machine, kettle and tea
            </li>
          </ul>
        </div>

        <div class="hidden flex-col justify-center items-center">
          <h2 class="text-2xl font-medium text-gray-800 pb-2 marcellus w-full">Availability</h2>

          <div class="flex justify-between w-full mt-6 max-md:flex-col max-md:items-center max-md:gap-6">
            <div id="datepicker-inline" inline-datepicker data-date="02/25/2024"></div>
            <div id="datepicker-inline2" inline-datepicker data-date="02/25/2024" data-theme="light"></div>

          </div>
          <div class="flex justify-end gap-2 mt-6 w-full">
            <button class="px-6 py-2 text-sm font-medium text-gray-700 bg-gray-200 hover:bg-gray-300">
              Cancel
            </button>
            <button class="px-6 py-2 text-sm font-medium text-white bg-gray-900 hover:bg-gray-700">
              Apply
            </button>
          </div>
        </div>

      </div>

      <!-- Right Column - w-full on small screens, w-4/12 on large screens -->
      <div class="lg:w-4/12">
        <div class="bg-white p-6 shadow-lg space-y-6 sticky top-6">
          <div class="flex justify-between items-center">
            <h2 class="text-3xl marcellus">RESERVE:</h2>
            <p class="text-lg">From <span class="font-medium">$299</span>/night</p>
          </div>

          <!-- Booking Form -->
          <form class="space-y-6">
            <div class="space-y-6">
              <div class="relative">
                <input datepicker id="start-datepicker" type="text"
                  class="h-full placeholder:text-black bg-transparent border border-[#b99d75] text-black text-sm focus:ring-[#b99d75] focus:border-[#b99d75] block w-full p-3"
                  placeholder="Check In">
              </div>

              <div class="relative">
                <input datepicker id="end-datepicker" type="text"
                  class="h-full placeholder:text-black bg-transparent border border-[#b99d75] text-black text-sm focus:ring-[#b99d75] focus:border-[#b99d75] block w-full p-3"
                  placeholder="Check Out">
              </div>

              <div class="flex items-center text-black border border-[#b99d75] p-3">
                <div class="w-full flex justify-between" data-dropdown-toggle="rooms_dropdown">
                  <p>Rooms</p>
                  <p class="flex gap-3 items-center">1 Room <svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                    </svg></p>
                </div>
                <div id="rooms_dropdown" class="relative hidden bg-white text-white shadow-xl h-fit w-full">
                  <div class="px-6 w-full flex justify-end">
                    <div
                      class="h-fit z-50 bg-white absolute flex items-center p-3 gap-6 top-3 border-[1px] border-[#b99d75]">
                      <p class="text-black h-full w-fit flex justify-center items-center">Rooms</p>
                      <div class="flex-grow"></div>
                      <div class="relative flex items-center">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input-1"
                          class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                          <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 1h16" />
                          </svg>
                        </button>
                        <input type="text" id="counter-input-1" data-input-counter
                          class="flex-shrink-0 text-black  border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center"
                          placeholder="" value="1" required data-input-counter data-input-counter-min="1"
                          data-input-counter-max="10" />
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input-1"
                          class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                          <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 1v16M1 9h16" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="grid grid-cols-2 gap-6">

                <div class="flex items-center text-black border border-[#b99d75] p-3">
                  <div class="w-full flex justify-between" data-dropdown-toggle="adults_dropdown">
                    <p>Adults</p>
                    <p class="flex gap-3 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                      </svg></p>
                  </div>
                  <div id="adults_dropdown" class="relative hidden bg-white text-white shadow-xl h-fit w-1/2">
                    <div class="px-5 w-full flex justify-end">
                      <div
                        class="h-fit z-50 bg-white absolute flex items-center p-3 gap-6 top-3 border-[1px] border-[#b99d75]">
                        <div class="relative flex items-center">
                          <button type="button" id="decrement-button" data-input-counter-decrement="counter-input-2"
                            class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h16" />
                            </svg>
                          </button>
                          <input type="text" id="counter-input-2" data-input-counter
                            class="flex-shrink-0 text-black  border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center"
                            placeholder="" value="1" required data-input-counter data-input-counter-min="1"
                            data-input-counter-max="10" />
                          <button type="button" id="increment-button" data-input-counter-increment="counter-input-2"
                            class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
                <div class="flex items-center text-black border border-[#b99d75] p-3">
                  <div class="w-full flex justify-between" data-dropdown-toggle="children_dropdown">
                    <p>Children</p>
                    <p class="flex gap-3 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                      </svg></p>
                  </div>
                  <div id="children_dropdown" class="relative hidden bg-white text-white shadow-xl h-fit w-1/2">
                    <div class="px-5 w-full flex justify-end">
                      <div
                        class="h-fit z-50 bg-white absolute flex items-center p-3 gap-6 top-3 border-[1px] border-[#b99d75]">
                        <div class="relative flex items-center">
                          <button type="button" id="decrement-button" data-input-counter-decrement="counter-input-3"
                            class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h16" />
                            </svg>
                          </button>
                          <input type="text" id="counter-input-3" data-input-counter
                            class="flex-shrink-0 text-black  border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center"
                            placeholder="" value="1" required data-input-counter data-input-counter-min="1"
                            data-input-counter-max="10" />
                          <button type="button" id="increment-button" data-input-counter-increment="counter-input-3"
                            class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

              </div>
            </div>

            <!-- Extra Services -->
            <div class="space-y-6">
              <h3 class="text-xl marcellus">Extra Services</h3>
              <div class="space-y-3">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2">
                    <input type="checkbox" class="border-[#b99d75]">
                    <span>Room Clean</span>
                  </div>
                  <span class="py-3">$12 / Night</span>
                </div>

                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2">
                    <input type="checkbox" class="border-[#b99d75]">
                    <span>Massage</span>
                  </div>
                  <div class="flex items-center gap-3">
                    <p>$30 / Person</p>
                    <div class="flex items-center text-black border border-[#b99d75] p-3">
                      <div class="w-full flex justify-between" data-dropdown-toggle="massage_dropdown">
                        <p class="px-3">1</p>
                        <p class="flex gap-3 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                              d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                          </svg></p>
                      </div>
                      <div id="massage_dropdown" class="relative hidden bg-white text-white shadow-xl h-fit w-full">
                        <div class="w-full flex justify-end pr-12">
                          <div
                            class="h-fit z-50 bg-white absolute flex items-center p-3 gap-6 top-3 border-[1px] border-[#b99d75]">
                            <div class="relative flex items-center">
                              <button type="button" id="decrement-button" data-input-counter-decrement="counter-input-4"
                                class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                                <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                                </svg>
                              </button>
                              <input type="text" id="counter-input-4" data-input-counter
                                class="flex-shrink-0 text-black  border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center"
                                placeholder="" value="1" required data-input-counter data-input-counter-min="1"
                                data-input-counter-max="10" />
                              <button type="button" id="increment-button" data-input-counter-increment="counter-input-4"
                                class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                                <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                              </button>
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>

                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2">
                    <input type="checkbox" class="border-[#b99d75]">
                    <span>Day Spa</span>
                  </div>
                  <div class="flex items-center gap-3">
                    <p>$45 / Person</p>
                    <div class="flex items-center text-black border border-[#b99d75] p-3">
                      <div class="w-full flex justify-between" data-dropdown-toggle="spa_dropdown">
                        <p class="px-3">1</p>
                        <p class="flex gap-3 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                              d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                          </svg></p>
                      </div>
                      <div id="spa_dropdown" class="relative hidden bg-white text-white shadow-xl h-fit w-full">
                        <div class="w-full flex justify-end pr-12">
                          <div
                            class="h-fit z-50 bg-white absolute flex items-center p-3 gap-6 top-3 border-[1px] border-[#b99d75]">
                            <div class="relative flex items-center">
                              <button type="button" id="decrement-button" data-input-counter-decrement="counter-input-5"
                                class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                                <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                                </svg>
                              </button>
                              <input type="text" id="counter-input-5" data-input-counter
                                class="flex-shrink-0 text-black  border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center"
                                placeholder="" value="1" required data-input-counter data-input-counter-min="1"
                                data-input-counter-max="10" />
                              <button type="button" id="increment-button" data-input-counter-increment="counter-input-5"
                                class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                                <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true"
                                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                              </button>
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex justify-between items-center text-lg">
              <span class="marcellus">Total Cost</span>
              <span>$299</span>
            </div>


          </form>
          <a href="CheckOut.php">
            <button class="w-full bg-black text-white py-3 hover:bg-gray-700 transition-colors mt-6">
              Book Your Stay Now
            </button>
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="p-8 max-w-7xl mx-auto">
    <!-- Heading -->
    <h2 class="text-3xl font-medium text-left mb-6 marcellus">Similar Rooms</h2>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="relative group">
        <img src="images/landing/accomodations/acc1.jpg" alt="Deluxe Suite"
          class="w-full h-auto object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
        </div>
        <div class="absolute inset-0 flex flex-col justify-between p-6 text-white transition duration-300">
          <!-- Always Visible -->
          <div>
            <span class="bg-white text-black text-sm px-2 py-1">$100</span>
            <h3 class="text-xl mt-2">Deluxe Suite</h3>
          </div>
          <!-- Hover Details -->
          <div class="opacity-0 group-hover:opacity-100 transition duration-300">
            <p class="text-sm">Private Pool / Ocean View / Single Level</p>
            <button class="mt-6 px-6 py-2 bg-white text-black text-sm hover:bg-gray-200">
              Discover More
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="relative group">
        <img src="images/landing/accomodations/acc2.jpg" alt="Executive Suite" class="w-full h-auto object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
        </div>
        <div class="absolute inset-0 flex flex-col justify-between p-6 text-white transition duration-300">
          <!-- Always Visible -->
          <div>
            <span class="bg-white text-black text-sm px-2 py-1">$130</span>
            <h3 class="text-xl mt-2">Executive Suite</h3>
          </div>
          <!-- Hover Details -->
          <div class="opacity-0 group-hover:opacity-100 transition duration-300">
            <p class="text-sm">
              Stunning beachfront location with 60 square meters / 646 square feet of interior space.
            </p>
            <button class="mt-6 px-6 py-2 bg-white text-black text-sm hover:bg-gray-200">
              Discover More
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="relative group">
        <img src="images/landing/accomodations/acc3.jpg" alt="Family Suite"
          class="w-full h-auto object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
        </div>
        <div class="absolute inset-0 flex flex-col justify-between p-6 text-white transition duration-300">
          <!-- Always Visible -->
          <div>
            <span class="bg-white text-black text-sm px-2 py-1">$160</span>
            <h3 class="text-xl mt-2">Family Suite</h3>
          </div>
          <!-- Hover Details -->
          <div class="opacity-0 group-hover:opacity-100 transition duration-300">
            <p class="text-sm">Two Levels / Three Pools / Two Sunset Balconies</p>
            <button class="mt-6 px-6 py-2 bg-white text-black text-sm hover:bg-gray-200">
              Discover More
            </button>
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
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/js/coreui.bundle.min.js"
  integrity="sha384-JdRP5GRWP6APhoVS1OM/pOKMWe7q9q8hpl+J2nhCfVJKoS+yzGtELC5REIYKrymn" crossorigin="anonymous"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#calendar-1", {
      inline: true, // Inline calendar
    });
    flatpickr("#calendar-2", {
      inline: true, // Inline calendar
    });
  });
</script>


</html>