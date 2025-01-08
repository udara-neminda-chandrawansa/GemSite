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
    <script src="https://cdn.tailwindcss.com"></script>
    <!--scripts for country/state loader-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6883622550208397",
            enable_page_level_ads: true
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!--banner-->
    <div class="h-[70dvh] max-[992px]:h-dvh relative flex flex-col bg-cover bg-center checkout-banner">
        <!--Top layer (backdrop)-->
        <div class="absolute bottom-0 inset-0 bg-gradient-to-bl from-[#1f1f1f] to-transparent"></div>
        <!--nav-->
        <?php
        include "navbar.php";
        ?>
        <div class="flex justify-center items-center flex-grow flex flex-col text-white text-center gap-6"
            style="z-index: 1;">
            <h3 class="marcellus text-[75px] w-3/5 max-[992px]:w-full max-[992px]:px-6 max-md:text-[60px] bh-lh">
                Check Out</h3>
        </div>
    </div>
    <form action="">
        <div class="container mx-auto p-8 max-w-6xl">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Billing Details Section -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-2xl font-normal mb-6 marcellus">Billing details</h2>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="w-1/2">
                                <label class="block mb-1">
                                    First name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" class="w-full border px-3 py-2" required>
                            </div>
                            <div class="w-1/2">
                                <label class="block mb-1">
                                    Last name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" class="w-full border px-3 py-2" required>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-1">Company name (optional)</label>
                            <input type="text" class="w-full border px-3 py-2">
                        </div>

                        <div>
                            <label class="block mb-1">
                                Country / Region <span class="text-red-500">*</span>
                            </label>
                            <select name="country" class="countries w-full border px-3 py-2" id="countryId" required>
                                <option value="">Select a country</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-1">
                                Street address <span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="House number and street name"
                                class="w-full border px-3 py-2 mb-2" required>
                            <input type="text" placeholder="Apartment, suite, unit, etc. (optional)"
                                class="w-full border px-3 py-2">
                        </div>

                        <div>
                            <label class="block mb-1">
                                Suburb <span class="text-red-500">*</span>
                            </label>
                            <input type="text" class="w-full border px-3 py-2" required>
                        </div>

                        <div>
                            <label class="block mb-1">
                                State <span class="text-red-500">*</span>
                            </label>
                            <select name="state" class="states w-full border px-3 py-2" required id="stateId">
                                <option>Select state</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-1">
                                Postcode <span class="text-red-500">*</span>
                            </label>
                            <input type="text" class="w-full border px-3 py-2" required>
                        </div>

                        <div>
                            <label class="block mb-1">
                                Phone <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" class="w-full border px-3 py-2" required>
                        </div>

                        <div>
                            <label class="block mb-1">
                                Email address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" class="w-full border px-3 py-2" required>
                        </div>

                        <h2 class="text-2xl font-normal mb-6 marcellus">Additional Information</h2>

                        <div>
                            <label class="block mb-1">
                                Order Notes (Optional) <span class="text-red-500">*</span>
                            </label>
                            <textarea class="w-full border px-3 py-2"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Section -->
                <div class="w-full md:w-1/2">
                    <div class="bg-gray-50 p-6">
                        <h2 class="text-2xl font-normal mb-6">Your order</h2>

                        <div class="space-y-4">
                            <div class="flex justify-between border-b pb-4">
                                <div class="space-y-1">
                                    <p class="font-medium">Premier Oceanview Villa × 1</p>
                                    <p class="text-sm text-gray-600">Date: 2025-01-07 - 2025-01-08</p>
                                    <p class="text-sm text-gray-600">Details: Rooms: 1, Adults: 1</p>
                                </div>
                                <p class="font-medium">$599.00</p>
                            </div>

                            <div class="flex justify-between border-b pb-4">
                                <div class="space-y-1">
                                    <p class="font-medium">Deluxe Phillips Residence × 1</p>
                                    <p class="text-sm text-gray-600">Date: 2025-01-07 - 2025-01-08</p>
                                    <p class="text-sm text-gray-600">Details: Rooms: 1, Adults: 1, Children: 1</p>
                                    <p class="text-sm text-gray-600">Extra Services: Room Clean ($12 / Night), Massage
                                        ($30
                                        / Person × 1), Day Spa ($45 / Person × 1)</p>
                                </div>
                                <p class="font-medium">$1,086.00</p>
                            </div>

                            <div class="flex justify-between border-b pb-4">
                                <p class="font-medium">Subtotal</p>
                                <p class="font-medium">$1,685.00</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="font-medium">Total</p>
                                <p class="font-medium">$1,685.00</p>
                            </div>
                        </div>

                        <div class="mt-8 space-y-4">
                            <div class="flex items-start gap-2">
                                <input type="radio" name="payment" id="bank" checked class="mt-1">
                                <label for="bank">
                                    <span class="font-medium">Direct bank transfer</span>
                                    <p class="text-sm text-gray-600 mt-1">Make your payment directly into our bank
                                        account.
                                        Please use your Order ID as the payment reference. Your order will not be
                                        shipped
                                        until the funds have cleared in our account.</p>
                                </label>
                            </div>

                            <div class="flex items-start gap-2">
                                <input type="radio" name="payment" id="check" class="mt-1">
                                <label for="check">
                                    <span class="font-medium">Check payments</span>
                                    <p class="text-sm text-gray-600 mt-1">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </label>
                            </div>

                            <div class="flex items-start gap-2">
                                <input type="radio" name="payment" id="cash" class="mt-1">
                                <label for="cash">
                                <span class="font-medium">Cash on delivery</span>
                                    <p class="text-sm text-gray-600 mt-1">Pay with cash upon delivery.</p>
                                </label>
                            </div>
                        </div>

                        <button class="w-full bg-black text-white py-3 mt-6 hover:bg-[#b99d75] transition-colors">
                            Place order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<!-- for country/state loading -->
<script>
    function ajaxCall() {
        this.send = function (data, url, method, success, type) {
            type = 'json';
            var successRes = function (data) {
                success(data);
            }

            var errorRes = function (xhr, ajaxOptions, thrownError) {

                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

            }
            jQuery.ajax({
                url: url,
                type: method,
                data: data,
                success: successRes,
                error: errorRes,
                dataType: type,
                timeout: 60000
            });

        }

    }

    function locationInfo() {
        var rootUrl = "https://geodata.phplift.net/api/index.php";
        var call = new ajaxCall();



        this.getCities = function (id) {
            jQuery(".cities option:gt(0)").remove();
            //get additional fields

            var url = rootUrl + '?type=getCities&countryId=' + '&stateId=' + id;
            var method = "post";
            var data = {};
            jQuery('.cities').find("option:eq(0)").html("Please wait..");
            call.send(data, url, method, function (data) {
                jQuery('.cities').find("option:eq(0)").html("Select City");
                var listlen = Object.keys(data['result']).length;

                if (listlen > 0) {
                    jQuery.each(data['result'], function (key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val.name).text(val.name);
                        jQuery('.cities').append(option);
                    });
                }


                jQuery(".cities").prop("disabled", false);

            });
        };

        this.getStates = function (id) {
            jQuery(".states option:gt(0)").remove();
            jQuery(".cities option:gt(0)").remove();
            //get additional fields
            var stateClasses = jQuery('#stateId').attr('class');


            var url = rootUrl + '?type=getStates&countryId=' + id;
            var method = "post";
            var data = {};
            jQuery('.states').find("option:eq(0)").html("Please wait..");
            call.send(data, url, method, function (data) {
                jQuery('.states').find("option:eq(0)").html("Select State");

                jQuery.each(data['result'], function (key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val.name).text(val.name);
                    option.attr('stateid', val.id);
                    jQuery('.states').append(option);
                });
                jQuery(".states").prop("disabled", false);

            });
        };

        this.getCountries = function () {
            var url = rootUrl + '?type=getCountries';
            var method = "post";
            var data = {};
            jQuery('.countries').find("option:eq(0)").html("Please wait..");
            call.send(data, url, method, function (data) {
                jQuery('.countries').find("option:eq(0)").html("Select Country");

                jQuery.each(data['result'], function (key, val) {
                    var option = jQuery('<option />');

                    option.attr('value', val.name).text(val.name);
                    option.attr('countryid', val.id);

                    jQuery('.countries').append(option);
                });
                // jQuery(".countries").prop("disabled",false);

            });
        };

    }

    jQuery(function () {
        var loc = new locationInfo();
        loc.getCountries();
        jQuery(".countries").on("change", function (ev) {
            var countryId = jQuery("option:selected", this).attr('countryid');
            if (countryId != '') {
                loc.getStates(countryId);
            }
            else {
                jQuery(".states option:gt(0)").remove();
            }
        });
        jQuery(".states").on("change", function (ev) {
            var stateId = jQuery("option:selected", this).attr('stateid');
            if (stateId != '') {
                loc.getCities(stateId);
            }
            else {
                jQuery(".cities option:gt(0)").remove();
            }
        });
    });
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-149371669-1');
</script>

</html>