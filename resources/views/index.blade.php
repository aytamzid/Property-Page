<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Villa Courela in Melides and surroundings</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <script src={{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}></script>
    <script type="module" src={{ asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}></script>
    <script nomodule src={{ asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js') }}></script>
    <script src={{ asset('https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js') }}></script>
    @vite('resources/css/app.css')
    {{-- <script src={{ asset('build/assets/app-0d91dc04.js') }}></script> --}}
    <link rel="stylesheet" href={{ asset('build/assets/app-0028e603.css') }}>
</head>

<body>
    <header class="fixed top-0 z-10 w-full border-b border-gray-200 bg-white transition-[top] duration-[0.5s]">
        <div class="flex w-full justify-between border px-4 py-6">
          <div class="flex w-1/3 lg:w-2/3">
            <a href="#" class="flex items-center xl:mr-5">
              <img src={{ asset('https://cdn.lecollectionist.com/lc/production/assets/images/lecollectionist-luxury-villas-rentals-holidays.svg') }} alt="Logo" />
            </a>
            <div class="hidden xl:flex">
              <a href="#" class="font-inter mx-3 text-base"> Find a house</a>
              <a href="#" class="font-inter mx-3 text-base"> Our destinations</a>
              <a href="#" class="font-inter mx-3 text-base"> Inspirations</a>
              <a href="#" class="font-inter mx-3 text-base">About us</a>
            </div>
          </div>
          <div class="flex w-1/3 items-center justify-end md:w-2/4">
            <div class="hidden md:flex">
              <p class="font-inter text-base text-[#202020] xl:hidden">Call us at</p>
              <a href="tel:+44 20 7131 0270" class="font-inter ml-4 text-base font-bold text-[#976d29] hover:underline">+44 20 7131 0270</a>
            </div>
            <div class="relative mx-2 hidden items-center xl:flex">
              <p>EN</p>
              <span class="mx-2">·</span>
              <p class="mr-3">€</p>
              <p class="nav"></p>
              <div class="font-inter absolute right-0 top-14 mt-2 hidden w-[380px] overflow-hidden rounded-md border bg-white p-6">
                <p class="mb">Language</p>
                <div class="mb-6 flex">
                  <button class="mr-6">English</button>
                  <button>Francais</button>
                </div>
                <p class="mb-4">Currency</p>
                <div class="flex">
                  <button class="w-1/4">CHF</button>
                  <button class="w-1/4">EUR</button>
                  <button class="w-1/4">USD</button>
                  <button class="w-1/4">GBP</button>
                </div>
                <button type="submit" class="font-inter mt-5 w-full bg-[#033d3d] py-3.5 text-xl font-bold text-white">Validate</button>
              </div>
            </div>
            <button type="submit" class="ml-6 w-6"><img src={{ asset('assets/image/2093656_seach_look_search_see_icon.png') }} alt="" srcset="" /></button>
            <button type="submit" class="ml-6 hidden w-6 xl:block"><img src={{ asset('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-heart-outline-512.png') }} alt="" srcset="" /></button>
            <button type="submit" class="ml-6 hidden w-6 xl:block"><img src={{ asset('https://cdn1.iconfinder.com/data/icons/ui-essential-17/32/UI_Essential_Outline_1_essential-app-ui-avatar-profile-user-account-512.png') }} alt="" srcset="" /></button>

            <span class="mx-6 mt-1 block cursor-pointer text-3xl xl:hidden">
              <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
          </div>
        </div>
      </header>

    <!-- Burger Pop up -->
    <div class="fixed top-0 z-[5] hidden w-full bg-white xl:hidden" id="dropdownMenu">
        <div class="flex h-screen flex-col items-center justify-center uppercase">
          <a class="font-inter my-4 text-lg md:my-8" href="#">Find a house</a>
          <a class="font-inter my-4 text-lg md:my-8" href="#">Our destinations</a>
          <a class="font-inter my-4 text-lg md:my-8" href="#">Inspirations</a>
          <a class="font-inter my-4 text-lg md:my-8" href="#">About Us</a>

          <div class="my-8 w-1/3 border-b border-gray-200"></div>
          <a class="font-inter my-8 text-lg" href="#">My account</a>
        </div>

        <div class="fixed bottom-0 left-0 z-[5] w-full items-center justify-center bg-white">
          <div class="flex items-center justify-center">
            <div class="flex w-1/4 items-center justify-center">
              <img class="w-7 py-4" src={{ asset('https://cdn1.iconfinder.com/data/icons/outline-imperial-seo/128/SEO_C_50_09.12.14-1_Artboard_15-256.png') }} alt="" />
            </div>
            <div class="flex w-1/4 items-center justify-center">
              <img class="w-6 py-5" src={{ asset('https://cdn1.iconfinder.com/data/icons/material-design-icons-light/24/phone-256.png') }} alt="" />
            </div>
            <div class="flex w-1/4 items-center justify-center">
              <img class="w-7 py-4" src={{ asset('https://cdn0.iconfinder.com/data/icons/business-office-1-7/55/35-256.png') }} alt="" />
            </div>
            <div class="flex w-1/4 items-center justify-center">
              <img class="w-7 py-4" src={{ asset('https://cdn2.iconfinder.com/data/icons/thin-line-icons-for-seo-and-development-1/64/SEO_international-256.png') }} alt="" />
            </div>
          </div>
        </div>
      </div>

    <!-- Slider -->
    <div class="relative overflow-hidden h-[340px] border bg-cover bg-no-repeat md:h-[560px] lg:h-[720px]">
        <img src="https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/ftWKjxLQjmRqoZWuvKgY_451d5cba-e310-4b06-9e9c-2b72d6f1d189.jpg" class="object-cover absolute w-full h-full  duration-500 transition-all hover:scale-[1.02] z-[6]" alt="">
        <div class="lg:max-w-screen-xl w-full mx-auto relative h-full"><button class="z-[7] font-inter absolute bottom-4 left-4 h-max w-max rounded-md bg-[#202020CC] px-4 py-3.5 text-sm text-white">
            View all photos (29)
          </button></div>
      </div>
      <!-- Heading -->
      <div class="mx-auto mb-12 flex w-full max-w-full justify-between border-b border-gray-200 px-4 pb-12 sm:px-6 lg:max-w-screen-xl">
        <div class="w-full lg:w-[55%] xl:w-[60%]">
          <div class=" ">
            <div class="mt-3.5">
              <div class="mb-2 flex justify-between text-2xl">
                <h2 class="font-leitura text-[#202020]">Villa Courela</h2>
                <div class="flex items-center">
                  <img src={{ asset('assets/image/211754_heart_icon.png') }} alt="heart-white" class="w-6" id="heart-white" />
                  <img src={{ asset('assets/image/211755_heart_icon.png') }} alt="heart-red" class="hidden w-6" id="heart-red" />
                  <img src={{ asset('assets/image/2931143_export_share_upload_up_icon.png') }} alt="Upload" class="mx-4 h-4" />
                </div>
              </div>
              <p class="font-inter mb-2 text-sm text-[#4c4c4c]">Melides and surroundings, Portugal</p>
              <div class="flex w-max justify-between text-sm text-gray-600">
                <span>8 guests</span> <span class="px-4">·</span> <span>4 bedrooms</span>
                <span class="px-4">·</span>
                <span>4 bathrooms</span>
                <span class="px-4">·</span>
                <span>200 sqm</span>
              </div>
            </div>
            <!-- Descriptoin -->
            <div class="mb-9 mt-6 border-b border-gray-200 pb-9">
              <span class="inline" id="short-details">Magnificent property, ideally located in Melides near Comporta for vacations with family or friends. Brand new and air-conditioned, it boasts a swimming pool with breatht...</span>
              <span class="hidden" id="more-details">Magnificent property, ideally located in Melides near Comporta for vacations with family or friends. Brand new and air-conditioned, it boasts a swimming pool with breathtaking views of nature and the sea. It's also the only villa with a climbing wall. Villa Courela can accommodate up to 8 people with its 4 bedrooms and 4 bathrooms. Our local team and concierge will be on hand to help you organize your tailor-made luxury stay. </span>
              <!-- Read More -->
              <div class="mt-4 flex items-center hover:cursor-pointer" id="read-more">
                <p class="font-inter mr-2 text-base font-bold text-[#202020]">Read the whole description</p>
                <img src={{ asset('assets/image/211687_down_arrow_icon.png') }} alt="Down arrow" class="w-5" />
              </div>
              <!-- Read Less -->
              <div class="mt-4 hidden items-center hover:cursor-pointer" id="read-less">
                <p class="font-inter mr-2 text-base font-bold text-[#202020]">Read less</p>
                <img src={{ asset('assets/image/211690_up_arrow_icon.png') }} alt="Down arrow" class="w-5" />
              </div>
            </div>
            <div class="my-9 border-b border-gray-200 pb-9">
              <h2 class="font-inter m-0 mb-5 text-2xl font-semibold">Key features</h2>
              <div class="mb-7 flex flex-wrap items-center">
                <div class="mb-4 w-1/2 pr-2">
                  <p>Swimming pool overflow</p>
                </div>
                <div class="mb-4 w-1/2 pl-2">
                  <p>View mountain, nature</p>
                </div>
                <div class="mb-4 w-1/2 pr-2">
                  <p>Air conditioning</p>
                </div>
                <div class="mb-4 w-1/2 pl-2">
                  <p>Petanque</p>
                </div>
                <div class="mb-4 w-1/2 pr-2">
                  <p>Barbecue</p>
                </div>
                <div class="mb-4 w-1/2 pl-2">
                  <p>Fireplace</p>
                </div>
              </div>
              <button class="font-inter text-md w-full rounded-md border border-gray-700 bg-white px-6 py-3.5 font-bold text-[#033d3d] hover:bg-gray-200 md:w-max">See all the equipments (36)</button>
            </div>
            <div class="my-9 border-b border-gray-200 pb-9">
              <h2 class="font-inter m-0 mb-5 text-2xl font-semibold">Conciergerie service included</h2>
              <div class="mb-6 flex justify-between">
                <h3 class="font-inter text-base font-bold text-[#976D29]">Tailor level</h3>
                <div class="min-w-20 flex justify-between">
                  <p class="mx-1 flex h-[24px] w-[24px] items-center justify-center rounded-full border bg-[#976d29] font-serif font-bold text-white">C</p>
                  <p class="mx-1 flex h-[24px] w-[24px] items-center justify-center rounded-full border bg-[#976d29] font-serif font-bold text-white">C</p>
                  <p class="mx-1 flex h-[24px] w-[24px] items-center justify-center rounded-full border bg-[#f7f2ea] font-serif font-bold text-orange-500">C</p>
                </div>
              </div>

              <div class="mb-8">
                <div class="mb-4 flex items-center">
                  <img src={{ asset('assets/image/9165725_tick_check_mark_icon.png') }} alt="Check Mark" class="mr-4 h-5 w-5" />
                  <p class="text-md font-inter text-[#4c4c4c]">Reservation of your tranfsers</p>
                </div>
                <div class="mb-4 flex items-center">
                  <img src={{ asset('assets/image/9165725_tick_check_mark_icon.png') }} alt="Check Mark" class="mr-4 h-5 w-5" />
                  <p class="text-md font-inter text-[#4c4c4c]">Personalisation of your stay, with possible adjustments before your arrival</p>
                </div>
                <div class="mb-4 flex items-center">
                  <img src={{ asset('assets/image/9165725_tick_check_mark_icon.png') }} alt="Check Mark" class="mr-4 h-5 w-5" />
                  <p class="text-md font-inter text-[#4c4c4c]">A local team will be available during your stay</p>
                </div>
                <div class="mb-4 flex items-center">
                  <img src={{ asset('assets/image/9165725_tick_check_mark_icon.png') }} alt="Check Mark" class="mr-4 h-5 w-5" />
                  <p class="text-md font-inter text-[#4c4c4c]">Cleaning included</p>
                </div>
              </div>

              <div class="mb-9 grid grid-cols-2 gap-2">
                <img src={{ asset('https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/KKoC8Kk3RKWoF9Eqdvpb_641deada-4455-4823-f7b5-9231f0ab1982.jpg') }} alt="Card Image" class="col-span-2 mx-auto h-[180px] w-full object-cover md:h-[240px]" />

                <img src={{ asset('https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/J30gvzXTUywRTRJXmMLr_dc036664-6bde-4dca-b952-e8f7cddaee51.jpg') }} alt="#" class="mx-auto h-[180px] w-full object-cover md:h-[240px]" />

                <img src={{ asset('https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/oazot3mSiaf4LzUEoiQx_282b064d-e895-480b-ecc1-6d700030e254.jpg') }} alt="#" class="mx-auto h-[180px] w-full object-cover md:h-[240px]" />

                <img src={{ asset('https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/SgB8Eh4UTBOncgw16qPr_8a15d784-5233-4baa-fde2-067e135d1642.jpg') }} alt="#" class="mx-auto h-[180px] w-full object-cover md:h-[240px]" />
                <img src={{ asset('https://cdn.lecollectionist.com/__lecollectionist__/production/houses/6499/photos/jdHS06AhQoCsrr3aY8NG_7ec47769-4635-4ae5-baef-e349af980a58.jpg') }} alt="#" class="mx-auto h-[180px] w-full object-cover md:h-[240px]" />
              </div>
              <button type="button" class="text-md font-inter w-full rounded-md border border-gray-700 bg-white px-6 py-3.5 font-bold text-[#033d3d] hover:bg-gray-200 md:w-max">View all photos</button>
            </div>
            <div class="my-9 border-b border-gray-200 pb-9">
              <h2 class="font-inter mb-2 text-2xl font-semibold">The surroundings</h2>
              <a href="#" class="font-inter mb-2 text-sm text-[#4c4c4c]">Melides and surroundings</a>

              <div class="mx-auto my-6">
                <iframe class="h-[500px] w-full lg:h-[300px]" src="https://www.openstreetmap.org/export/embed.html?bbox=90.38615226745607%2C23.833598964091145%2C90.43065547943115%2C23.867275934131968&amp;layer=mapnik&amp;marker=23.85043854301341%2C90.4084038734436"></iframe>
              </div>

              <!-- Mobile div -->
              <div class="md:hidden">
                <div class="flew-nowrap mb-9 flex border-b border-gray-200">
                  <div id="setting-mb" class="mr-9 border-b border-gray-700 pb-2 text-base font-bold text-gray-700 hover:cursor-pointer">Setting</div>
                  <div id="nearby-mb" class="mr-9 pb-2 text-base font-bold text-gray-500 hover:cursor-pointer">Nearby</div>
                </div>
                <!-- Setting-info -->
                <div id="setting-info-mb" class="flex flex-wrap">
                  <p class="font-inter mb-2 w-1/2 pb-2 text-base">Out of town</p>
                  <p class="font-inter mb-2 w-1/2 pb-2 text-base">Without neighbours</p>
                  <p class="font-inter mb-2 w-1/2 pb-2 text-base">Surrounded by fields</p>
                </div>
                <!-- Nearby info -->
                <div id="nearby-info-mb" class="hidden">
                  <p class="font-inter text-base text-[#202020]">Beach</p>
                  <p class="font-inter mt-2 text-sm text-[#757575]">10 minutes by car</p>
                </div>
              </div>

              <!-- Create Desktop Setting Nearby Here -->
              <div class="hidden md:block">
                <div class="mr-9 pb-2 text-base font-bold text-gray-700 hover:cursor-pointer">Setting</div>

                <!-- Setting-info -->
                <div class="mb-4 flex flex-wrap">
                  <p class="font-inter mb-2 w-1/2 pb-2 text-base">Out of town</p>
                  <p class="font-inter mb-2 w-1/2 pb-2 text-base">Without neighbours</p>
                  <p class="font-inter mb-2 w-1/2 pb-2 text-base">Surrounded by fields</p>
                </div>

                <!-- Nearby info -->
                <div class="mr-9 pb-2 text-base font-bold text-gray-700 hover:cursor-pointer">Nearby</div>
                <div>
                  <p class="font-inter text-base text-[#202020]">Beach</p>
                  <p class="font-inter mt-2 text-sm text-[#757575]">10 minutes by car</p>
                </div>
              </div>
            </div>
            <div class="my-9 border-b border-gray-200 pb-9">
              <h2 class="font-inter m-0 mb-5 text-2xl font-semibold">Additional information</h2>
              <div class="mb-6 flex justify-between md:justify-start">
                <div class="flex items-center md:mr-16">
                  <img src={{ asset('assets/image/1642849_check_hotel_out_icon.png') }} alt="Check In" class="mr-4 h-7 w-7" />
                  <div class="">
                    <p class="font-inter text-base font-semibold text-[#202020]">Check-in</p>
                    <p class="font-inter pt-2 text-sm text-[#202020]">16:00</p>
                  </div>
                </div>
                <div class="mr-2 flex items-center">
                  <img src={{ asset('assets/image/1642849_check_hotel_out_icon.png') }} alt="Check Out" class="mr-4 h-7 w-7" />
                  <div class="">
                    <p class="font-inter text-base font-semibold text-[#202020]">Check-out</p>
                    <p class="font-inter pt-2 text-sm text-[#202020]">10:00</p>
                  </div>
                </div>
              </div>

              <div class="mb-8">
                <div class="mb-4 flex items-center">
                  <img src={{ asset('assets/image/9165725_tick_check_mark_icon.png') }} alt="Check Mark" class="mr-4 h-5 w-5" />
                  <p class="text-md font-inter text-[#4c4c4c]">Suitable for children</p>
                </div>
                <div class="mb-4 flex items-center">
                  <img src={{ asset('assets/image/9165725_tick_check_mark_icon.png') }} alt="Check Mark" class="mr-4 h-5 w-5" />
                  <p class="text-md font-inter text-[#4c4c4c]">Cleaning service included</p>
                </div>
              </div>
            </div>
            <div class="">
              <h2 class="font-inter m-0 mb-5 text-2xl font-semibold">Booking conditions</h2>
              <button class="accordion font-inter mb-4 border-b border-gray-200 py-4 text-base font-semibold">How do I pay for my stay?</button>
              <div class="panel">
                <p class="font-inter mb-2 text-sm">In order to confirm your booking, you will need to pay a depoisit up to 3 business days after signing your contract.</p>
                <p class="font-inter mb-2 text-sm">You will then have until one month before the start of your rental period to pay the remaining balance.</p>
              </div>
              <div class="mb-4 border-b border-gray-200"></div>

              <button class="accordion font-inter mb-4 border-b border-gray-200 py-4 text-base font-semibold">Will I be asked for a security deposit?</button>
              <div class="panel">
                <p class="font-inter mb-2 text-sm">Before your stay, we will ask you for a security deposit to cover any damage that may occur. The amount will be quoted prior to your booking and in your contract.</p>
                <p class="font-inter mb-2 text-sm">Any specific rental conditions for the property will be outlined by your advisor and detailed in your rental contract.</p>
              </div>
              <div class="mb-4 border-b border-gray-200"></div>
            </div>

            <!-- Slider part start -->
            <div class="mb-8 mt-9 bg-red-50 p-2">
              <h1 class="my-5 font-serif text-2xl font-bold">They travelled with us</h1>
              <div class="glide-01 relative w-full">
                <!-- Slides -->
                <div class="overflow-hidden" data-glide-el="track">
                  <ul class="flex-no-wrap relative flex w-full overflow-hidden p-0 pl-2">
                    <li>
                      <div>
                        <img class="h-5 w-6" src={{ asset('https://cdn-icons-png.flaticon.com/128/1/1098.png') }} alt="" />
                        <p class="mb-2 py-5 text-base font-normal">Heaven: there's no other word to describe holidays with Le Collectionist. An extraordinary team, showing great kindness and professionalism.</p>
                      </div>
                    </li>
                    <li>
                      <div>
                        <img class="h-5 w-6" src={{ asset('https://cdn-icons-png.flaticon.com/128/1/1098.png') }} alt="" />
                        <p class="mb-2 py-5 text-base font-normal">The Le Collectionist team is vibrant, you breathe new life into the profession. Thanks to your insights, we were able to discover our holiday destination like insiders.</p>
                      </div>
                    </li>
                    <li>
                      <div>
                        <img class="h-5 w-6" src={{ asset('https://cdn-icons-png.flaticon.com/128/1/1098.png') }} alt="" />
                        <p class="mb-2 py-5 text-base font-normal">Sad to return home after such extraordinary holidays, a magnificent home, incredible chefs. Thank you very much and see you soon for our next holidays.</p>
                      </div>
                    </li>
                    <li>
                      <div>
                        <img class="h-5 w-6" src={{ asset('https://cdn-icons-png.flaticon.com/128/1/1098.png') }} alt="" />
                        <p class="mb-2 py-5 text-base font-normal">Two wonderful weeks celebrating our parents' 60 year wedding anniversary. The team was very attentive. We were delighted by the surprise concert waiting for us after our return from the boat on Sunday.</p>
                      </div>
                    </li>
                    <li>
                      <div>
                        <img class="h-5 w-6" src={{ asset('https://cdn-icons-png.flaticon.com/128/1/1098.png') }} alt="" />
                        <p class="mb-2 py-5 text-base font-normal">Thank you for your excellent organisation of our stay. The location was magical and our whole family fell in love with it. The staff on site were lovely, flexible, and very attentive.</p>
                      </div>
                    </li>
                    <li>
                      <div>
                        <img class="h-5 w-6" src={{ asset('https://cdn-icons-png.flaticon.com/128/1/1098.png') }} alt="" />
                        <p class="mb-2 py-5 text-base font-normal">We had a wonderful stay. We've been renting beautiful villas as gifts for our children for 5 years now, but we had never before received such a warm welcome and so much attention.</p>
                      </div>
                    </li>
                  </ul>
                </div>

                <!-- Indicators -->
                <div class="mb-8 flex w-full items-center justify-center gap-2" data-glide-el="controls[nav]">
                  <button  data-glide-dir="=0" aria-label="goto slide 1"><span class="block h-1 w-1 rounded-full bg-white/20 ring-1 ring-slate-700 transition-colors duration-300 focus:outline-none"></span></button>
                  <button  data-glide-dir="=1" aria-label="goto slide 2"><span class="block h-1 w-1 rounded-full bg-white/20 ring-1 ring-slate-700 transition-colors duration-300 focus:outline-none"></span></button>
                  <button  data-glide-dir="=2" aria-label="goto slide 3"><span class="block h-1 w-1 rounded-full bg-white/20 ring-1 ring-slate-700 transition-colors duration-300 focus:outline-none"></span></button>
                  <button  data-glide-dir="=3" aria-label="goto slide 4"><span class="block h-1 w-1 rounded-full bg-white/20 ring-1 ring-slate-700 transition-colors duration-300 focus:outline-none"></span></button>
                  <button  data-glide-dir="=3" aria-label="goto slide 4"><span class="block h-1 w-1 rounded-full bg-white/20 ring-1 ring-slate-700 transition-colors duration-300 focus:outline-none"></span></button>
                  <button  data-glide-dir="=3" aria-label="goto slide 4"><span class="block h-1 w-1 rounded-full bg-white/20 ring-1 ring-slate-700 transition-colors duration-300 focus:outline-none"></span></button>
                </div>
              </div>
            </div>
            <!-- Slider part end -->
          </div>
        </div>
        <div class="relative hidden h-max -translate-y-[40%] z-[8] border bg-white p-6 lg:block lg:w-[40%] xl:w-[35%]">
          <h2 class="font-leitura mb-2 text-2xl font-semibold text-[#202020]">Villa Courela</h2>
          <p class="font-inter mb-8 text-base font-semibold text-[#202020]">From €5,995 to €12,495 per week</p>
          <p class="text-sm">Dates</p>
          <div class="mt-2 flex w-full border border-gray-500 py-3">
            <img src={{ asset('https://cdn.iconfinder.com/stored_data/1201978/128/png?token=1691744037-WLheHqrByixkUH1pVGww7MJ5v7rvLs%2BrNYfHQ9y9uwQ%3D') }} alt="Calender" class="ml-5 w-6" />
            <p class="font-inter mx-3 text-[#757575]">Check-in</p>
            <img src={{ asset('https://cdn3.iconfinder.com/data/icons/arrow-outline-8/32/right_2-512.png') }} alt="Calender" class="w-6" />
            <p class="font-inter mx-3 pr-10 text-[#757575]">Check-out</p>
          </div>
          <button type="submit" class="font-inter my-4 w-full bg-[#033d3d] px-4 py-3.5 text-base text-white">Make a request</button>

          <div class="mt-6 flex flex-col items-center border-t border-gray-200 pt-6">
            <p class="font-inter text-center">Our advisors are available from Monday to Friday between 9:30am and 6:30pm (UTC +2)</p>
            <a href="tel: +44 20 7131 0270" class="font-inter font-semibold text-[#033d3d]">+44 20 7131 0270</a>
          </div>
        </div>
      </div>
      <!--container div -->


      <div class="h-30 fixed bottom-0 z-[2] w-full border-t border-gray-200 bg-white p-4 md:px-6 lg:hidden">
        <div class="flex flex-wrap">
          <div class="w-[45%]">
            <p class="font-inter pr-3 text-sm font-semibold text-[#202020]">From €5,995 to €12,495</p>
            <p class="text-small">per week</p>
          </div>
          <button class="flex w-[55%] flex-row flex-wrap items-center justify-center rounded-sm bg-[#033d3d]">
            <p class="font-inter font-bold text-white">Select dates</p>
          </button>
        </div>
      </div>
      <div class="mx-auto px-4 pb-20 md:px-6 lg:max-w-screen-xl">
        <h2 class="font-leitura mb-10 text-2xl font-semibold text-[#202020]">Our top destinations</h2>

        <div class="lg:hidden">
          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Austria</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200 md:px-6"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Caribbean</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Croatiie</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Espagne</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">France</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Greece</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Italy</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Maroc</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Portugal</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Switzerland</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>

          <button class="accordion font-inter py-4 text-base font-semibold uppercase">Souoth Africa</button>
          <div class="panel">
            <a href="#" class="font-inter mb-2 pb-2 text-base font-semibold">Austrian alps</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">Lech</a>
            <a href="#" class="font-inter mb-2 pb-2 text-base">St Anton</a>
          </div>
          <div class="mb-4 border-b border-gray-200"></div>
        </div>

        <div class="hidden lg:block">
          <div class="mb-9 flex">
            <p id="frace-xl" class="mr-4 rounded-full bg-[#1c5050] px-4 py-1 text-xl text-white hover:cursor-pointer">France</p>
            <p id="europe-xl" class="mr-4 rounded-full border border-[#cacaca] px-4 py-1 text-xl text-[#cacaca] hover:cursor-pointer">Europe</p>
            <p id="other-xl" class="mr-4 rounded-full border border-[#cacaca] px-4 py-1 text-xl text-[#cacaca] hover:cursor-pointer">Other destinations</p>
          </div>
          <div id="frace-xl-div" class="flex max-h-[500px] flex-col flex-wrap">
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
          </div>
          <div id="europe-xl-div" class="hidden max-h-[500px] flex-col flex-wrap">
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
          </div>
          <div id="other-xl-div" class="hidden max-h-[500px] flex-col flex-wrap">
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Caribbean</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
              <p class="font-inter mt-2 text-sm text-[#757575]">St Barts</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">France</h2>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">Maroc</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
            <h2 class="mb-4 text-xl font-bold uppercase text-[#1c5050]">South Africa</h2>
            <div class="mb-9 border-l border-gray-200 pl-4">
              <p class="font-inter mt-2 text-sm text-[#757575]">Dominican Republic</p>
            </div>
          </div>
        </div>
      </div>



      <footer id="footer" class="w-full bg-[#202020]">
        <div class="flex w-full flex-col py-16 pb-24 md:flex-row lg:mx-auto lg:max-w-screen-xl">
          <div class="mb-9 lg:w-1/4">
            <div class="mx-4 mb-2 flex items-center justify-start">
              <img src={{ asset('assets/image/7853765_globe_kashifarif_world_earth_country_icon.png') }} alt="Earth" class="mx-2 h-4 w-4" />
              <a href="#" class="font-inter mx-2 text-sm text-[#ccad7b]">FR</a>
              <a href="#" class="font-inter mx-2 text-sm text-[#ccad7b]">EN</a>
            </div>
            <div class="mb-9 ml-4 flex w-28 items-center justify-around rounded-sm border border-white py-2 md:w-24">
              <img src={{ asset('assets/image/4634995_coin_coins_financial_money_icon.png') }} alt="Coins" class="h-6 w-6" />
              <h3 class="font-inter py-1 text-[#ccad7b]">EUR</h3>
            </div>
            <div class="flex justify-evenly md:pl-2 xl:justify-start">
              <img src={{ asset('assets/image/7853765_globe_kashifarif_world_earth_country_icon.png') }} class="w-28 md:w-8 xl:mr-4" alt="" />
              <img src={{ asset('assets/image/7853765_globe_kashifarif_world_earth_country_icon.png') }} class="w-28 md:w-8 xl:mr-4" alt="" />
              <img src={{ asset('assets/image/7853765_globe_kashifarif_world_earth_country_icon.png') }} class="w-28 md:w-8 xl:mr-4" alt="" />
            </div>
          </div>
          <div class="mb-9 flex px-4 lg:w-[37%]">
            <div class="flex w-1/2 flex-col">
              <h3 class="font-inter mb-6 text-base text-[#ccad7b]">Discover</h3>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">How it works</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Our event service</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Our Conciergerie</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">How is Le Collectionist different?</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Get inspired</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Travel partners</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Owners</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Buy a house</a>
            </div>
            <div class="flex w-1/2 flex-col pl-3">
              <h3 class="font-inter mb-6 text-base text-[#ccad7b]">Get Informed</h3>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Careers</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Privacy policy</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Manage cookies</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Terms of use</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">FAQ</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Contact us</a>
              <a href="#" class="font-inter mb-2 text-xs text-[#eaeaea]">Sitemap</a>
            </div>
          </div>
          <div class="px-4">
            <h2 class="font-leitura text-3xl text-white">Sign up for the newsletter</h2>
            <p class="font-inter mb-4 text-xs text-[#eaeaea]">Subscribe to our newsletter to get curated travel inspirations.</p>
            <div class="mb-9 flex">
              <input name="email" placeholder="Email" type="email" class=" w-3/4 md:w-1/2 text-gray-700 font-normal text-base leading-normal py-1.5 px-4 bg-white rounded-sm rounded-r-none overflow-hidden>

              <button type=" submit" class="w-1/4 md:w-1/2"><span class="font-inter rounded-sm rounded-l-none bg-[#c29c61] px-7 py-3 text-base font-semibold text-white md:px-12">Send</span></button>
            </div>
            <div class="flex justify-normal">
              <img src={{ asset('assets/image/4552607_facebook_logo_icon.png') }} alt="Facebook" class="mx-2 w-6 md:ml-0 md:w-8" />
              <img src={{ asset('assets/image/1161953_instagram_icon.png') }} alt="Instagram" class="mx-2 w-6 md:w-8" />
              <img src={{ asset('assets/image/1820440_brand_logo_network_social_twitter_icon.png') }} alt="twitter" class="mx-2 w-6 md:w-8" />
              <img src={{ asset('assets/image/2959747_employment_business_linkedin_work_icon.png') }} alt="linkedin" class="mx-2 w-6 md:w-8" />
            </div>
            <p class="font-inter mb-4 mt-6 text-sm text-[#eaeaea]">2023 All right reserved</p>
          </div>
        </div>
      </footer>



    <script src={{ asset('js/script.js') }} ></script>
</body>

</html>
