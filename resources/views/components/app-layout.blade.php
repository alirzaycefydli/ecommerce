<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords"
          content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <title>Shop</title>

    <!-- Site Favicon -->
    <!-- <link rel="icon" href="assets/img/favicon/favicon.png" type="image/x-icon"> -->
    <link href="{{ asset('img/favicon/favicon.png') }}" rel="icon" type="image/x-icon">


    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-range-ui.css') }}">

    <!-- tailwindcss -->
    <script src="{{ asset('js/vendor/tailwindcss3.4.5.js') }}"></script>

    <!-- Main Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Dark Mode -->
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" id="dark">


</head>

<body>
<!-- Loader -->
<div
    class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
    <img src="{{ asset('img/logo/loader.png') }}" alt="loader" class="absolute">
    <span class="loader w-[60px] h-[60px] relative"></span>
</div>

<!-- Header Start-->
<header class="bb-header relative z-[5] border-b-[1px] border-solid border-[#eee]">
    <div class="bottom-header py-[20px] max-[991px]:py-[15px]">
        <div
            class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="inner-bottom-header flex justify-between max-[767px]:flex-col">
                        <div class="cols bb-logo-detail flex max-[767px]:justify-between">
                            <!-- Header Logo Start -->
                            <div class="header-logo flex items-center max-[575px]:justify-center">
                                <a href="index.html">
                                    <img src="{{asset('img/logo/logo-dark.png')}}" alt="logo"
                                         class="dark w-[125px] max-[991px]:w-[115px] hidden">
                                </a>
                            </div>
                            <!-- Header Logo End -->
                        </div>
                        <!-- Search Bar Start -->
                        <div class="cols flex justify-center">
                            <div
                                class="header-search w-[600px] max-[1399px]:w-[500px] max-[1199px]:w-[400px] max-[991px]:w-full max-[991px]:min-w-[300px] max-[767px]:py-[15px] max-[480px]:min-w-[auto]">
                                <form
                                    class="bb-btn-group-form flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]"
                                    action="#">
                                    <input
                                        class="form-control bb-search-bar bg-[#fff] block w-full min-h-[45px] h-[48px] py-[10px] pr-[10px] pl-[20px] max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#777] rounded-[10px] border-[1px] border-solid border-[#eee] tracking-[0.5px]"
                                        placeholder="Search products..." type="text">
                                    <button
                                        class="submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]"
                                        type="submit">
                                        <i class="ri-search-line text-[18px] leading-[12px] text-[#555]"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- Search Bar End -->
                        <div class="cols bb-icons flex justify-center">
                            <div class="bb-flex-justify max-[575px]:flex max-[575px]:justify-between">
                                <div class="bb-header-buttons h-full flex justify-end items-center">
                                    <div class="bb-acc-drop relative">
                                        <a href="javascript:void(0)"
                                           class="bb-header-btn bb-header-user dropdown-toggle bb-user-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center whitespace-nowrap ml-[30px] max-[1199px]:ml-[20px] max-[767px]:ml-[0]"
                                           title="Account">
                                            <div class="header-icon relative flex">
                                                <svg class="svg-icon w-[30px] h-[30px] max-[1199px]:w-[25px] max-[1199px]:h-[25px] max-[991px]:w-[22px] max-[991px]:h-[22px]"
                                                     viewBox="0 0 1024 1024" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-[#6c7fd8]"
                                                          d="M512.476 648.247c-170.169 0-308.118-136.411-308.118-304.681 0-168.271 137.949-304.681 308.118-304.681 170.169 0 308.119 136.411 308.119 304.681C820.594 511.837 682.645 648.247 512.476 648.247L512.476 648.247zM512.476 100.186c-135.713 0-246.12 109.178-246.12 243.381 0 134.202 110.407 243.381 246.12 243.381 135.719 0 246.126-109.179 246.126-243.381C758.602 209.364 648.195 100.186 512.476 100.186L512.476 100.186zM935.867 985.115l-26.164 0c-9.648 0-17.779-6.941-19.384-16.35-2.646-15.426-6.277-30.52-11.142-44.95-24.769-87.686-81.337-164.13-159.104-214.266-63.232 35.203-134.235 53.64-207.597 53.64-73.555 0-144.73-18.537-208.084-53.922-78 50.131-134.75 126.68-159.564 214.549 0 0-4.893 18.172-11.795 46.4-2.136 8.723-10.035 14.9-19.112 14.9L88.133 985.116c-9.415 0-16.693-8.214-15.47-17.452C91.698 824.084 181.099 702.474 305.51 637.615c58.682 40.472 129.996 64.267 206.966 64.267 76.799 0 147.968-23.684 206.584-63.991 124.123 64.932 213.281 186.403 232.277 329.772C952.56 976.901 945.287 985.115 935.867 985.115L935.867 985.115z" />
                                                </svg>
                                            </div>
                                            <div class="bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden">
                                                    <span
                                                        class="bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap">Account</span>
                                                <span
                                                    class="bb-btn-stitle font-Poppins transition-all duration-[0.3s] ease-in-out text-[14px] leading-[16px] font-semibold text-[#3d4750]  tracking-[0.03rem] whitespace-nowrap">Login</span>
                                            </div>
                                        </a>
                                        <ul
                                            class="bb-dropdown-menu min-w-[150px] py-[10px] px-[5px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute z-[16] text-left opacity-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] block rounded-[10px]">
                                            <li
                                                class="py-[4px] px-[15px] m-[0] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                                <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] hover:text-[#6c7fd8] leading-[22px] block w-full font-normal tracking-[0.03rem]"
                                                   href="register.html">Register</a></li>
                                            <li
                                                class="py-[4px] px-[15px] m-[0] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                                <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] hover:text-[#6c7fd8] leading-[22px] block w-full font-normal tracking-[0.03rem]"
                                                   href="checkout.html">Checkout</a></li>
                                            <li
                                                class="py-[4px] px-[15px] m-[0] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                                <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] hover:text-[#6c7fd8] leading-[22px] block w-full font-normal tracking-[0.03rem]"
                                                   href="login.html">Login</a></li>
                                        </ul>
                                    </div>
                                    <a href="wishlist.html"
                                       class="bb-header-btn bb-wish-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]"
                                       title="Wishlist">
                                        <div class="header-icon relative flex">
                                            <svg class="svg-icon w-[30px] h-[30px] max-[1199px]:w-[25px] max-[1199px]:h-[25px] max-[991px]:w-[22px] max-[991px]:h-[22px]"
                                                 viewBox="0 0 1024 1024" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path class="fill-[#6c7fd8]"
                                                      d="M512 128l121.571556 250.823111 276.366222 39.111111-199.281778 200.504889L756.622222 896 512 769.536 267.377778 896l45.852444-277.617778-199.111111-200.504889 276.366222-39.111111L512 128m0-56.888889a65.962667 65.962667 0 0 0-59.477333 36.807111l-102.940445 213.703111-236.828444 35.214223a65.422222 65.422222 0 0 0-52.366222 42.979555 62.577778 62.577778 0 0 0 15.274666 64.967111l173.511111 173.340445-40.248889 240.355555a63.374222 63.374222 0 0 0 26.993778 62.577778 67.242667 67.242667 0 0 0 69.632 3.726222L512 837.290667l206.478222 107.605333a67.356444 67.356444 0 0 0 69.688889-3.726222 63.374222 63.374222 0 0 0 26.908445-62.577778l-40.277334-240.355556 173.511111-173.340444a62.577778 62.577778 0 0 0 15.246223-64.967111 65.422222 65.422222 0 0 0-52.366223-42.979556l-236.8-35.214222-102.968889-213.703111A65.848889 65.848889 0 0 0 512 71.111111z"
                                                      fill="#364C58" />
                                            </svg>
                                        </div>
                                        <div class="bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden">
                                                <span
                                                    class="bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap"><b
                                                        class="bb-wishlist-count">3</b> items</span>
                                            <span
                                                class="bb-btn-stitle font-Poppins transition-all duration-[0.3s] ease-in-out text-[14px] leading-[16px] font-semibold text-[#3d4750]  tracking-[0.03rem] whitespace-nowrap">Wishlist</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                       class="bb-header-btn bb-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]"
                                       title="Cart">
                                        <div class="header-icon relative flex">
                                            <svg class="svg-icon w-[30px] h-[30px] max-[1199px]:w-[25px] max-[1199px]:h-[25px] max-[991px]:w-[22px] max-[991px]:h-[22px]"
                                                 viewBox="0 0 1024 1024" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path class="fill-[#6c7fd8]"
                                                      d="M351.552 831.424c-35.328 0-63.968 28.64-63.968 63.968 0 35.328 28.64 63.968 63.968 63.968 35.328 0 63.968-28.64 63.968-63.968C415.52 860.064 386.88 831.424 351.552 831.424L351.552 831.424 351.552 831.424zM799.296 831.424c-35.328 0-63.968 28.64-63.968 63.968 0 35.328 28.64 63.968 63.968 63.968 35.328 0 63.968-28.64 63.968-63.968C863.264 860.064 834.624 831.424 799.296 831.424L799.296 831.424 799.296 831.424zM862.752 799.456 343.264 799.456c-46.08 0-86.592-36.448-92.224-83.008L196.8 334.592 165.92 156.128c-1.92-15.584-16.128-28.288-29.984-28.288L95.2 127.84c-17.664 0-32-14.336-32-31.968 0-17.664 14.336-32 32-32l40.736 0c46.656 0 87.616 36.448 93.28 83.008l30.784 177.792 54.464 383.488c1.792 14.848 15.232 27.36 28.768 27.36l519.488 0c17.696 0 32 14.304 32 31.968S880.416 799.456 862.752 799.456L862.752 799.456zM383.232 671.52c-16.608 0-30.624-12.8-31.872-29.632-1.312-17.632 11.936-32.928 29.504-34.208l433.856-31.968c15.936-0.096 29.344-12.608 31.104-26.816l50.368-288.224c1.28-10.752-1.696-22.528-8.128-29.792-4.128-4.672-9.312-7.04-15.36-7.04L319.04 223.84c-17.664 0-32-14.336-32-31.968 0-17.664 14.336-31.968 32-31.968l553.728 0c24.448 0 46.88 10.144 63.232 28.608 18.688 21.088 27.264 50.784 23.52 81.568l-50.4 288.256c-5.44 44.832-45.92 81.28-92 81.28L385.6 671.424C384.8 671.488 384 671.52 383.232 671.52L383.232 671.52zM383.232 671.52" />
                                            </svg>
                                            <span class="main-label-note-new"></span>
                                        </div>
                                        <div class="bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden">
                                                <span
                                                    class="bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap text-transform: lowercase"><b
                                                        class="bb-cart-count">4</b> items</span>
                                            <span
                                                class="bb-btn-stitle font-Poppins transition-all duration-[0.3s] ease-in-out text-[14px] leading-[16px] font-semibold text-[#3d4750]  tracking-[0.03rem] whitespace-nowrap">Cart</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"
                                       class="bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]">
                                        <div class="header-icon">
                                            <i class="ri-menu-3-fill text-[22px] text-[#6c7fd8]"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<x-navigation></x-navigation>

</header>
<!-- Header End-->


<!-- Main Section Starts-->
{{$slot}}
<!-- Main Section Ends-->


<!-- Footer Starts-->
<footer class="bb-footer mt-[50px] max-[1199px]:mt-[35px] text-[#fff]">

    <div class="footer-container border-t-[1px] border-solid border-[#eee]">
        <div class="footer-top py-[50px] max-[1199px]:py-[35px]">
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full max-[991px]:mb-[-30px]" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="200">
                    <div class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-cat">
                        <div class="bb-footer-widget bb-footer-company flex flex-col max-[991px]:mb-[24px]">
                            <img src="{{asset('img/logo/logo-dark.png')}}"
                                 class="bb-footer-dark-logo max-w-[144px] mb-[30px] max-[767px]:max-w-[130px] hidden"
                                 alt="footer logo">
                            <p
                                class="bb-footer-detail max-w-[400px] mb-[30px] p-[0] font-Poppins text-[14px] leading-[27px] font-normal text-[#686e7d] inline-block relative max-[1399px]:text-[15px] max-[1199px]:text-[14px]">
                                BlueBerry is the biggest market of grocery products. Get
                                your daily needs from our store.</p>
                            <div class="bb-app-store m-[-7px] flex flex-wrap">
                                <a href="javascript:void(0)" class="app-img">
                                    <img src="{{asset('img/app/android.png')}}"
                                         class="adroid max-w-[140px] m-[7px] rounded-[5px] max-[1399px]:max-w-[120px]"
                                         alt="apple">
                                </a>
                                <a href="javascript:void(0)" class="app-img">
                                    <img src="{{asset('img/app/apple.png')}}"
                                         class="apple max-w-[140px] m-[7px] rounded-[5px] max-[1399px]:max-w-[120px]"
                                         alt="apple">
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px]bb-footer-info">
                        <div class="bb-footer-widget">
                            <h4
                                class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">
                                Category</h4>
                            <div class="bb-footer-links bb-footer-dropdown max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Dairy
                                            & Milk</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-banner-left-sidebar-col-3.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Snack
                                            & Spice</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-full-width-col-5.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Fast
                                            Food</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-list-left-sidebar.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Juice
                                            & Drinks</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-list-full-col-2.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Bakery</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="shop-banner-right-sidebar-col-4.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Seafood</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div
                        class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-account">
                        <div class="bb-footer-widget">
                            <h4
                                class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">
                                Company</h4>
                            <div class="bb-footer-links bb-footer-dropdown  max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="about-us.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">About
                                            us</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="track-order.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Delivery</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="faq.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Legal
                                            Notice</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="terms.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Terms
                                            & conditions</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="checkout.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Secure
                                            payment</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="contact-us.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Contact
                                            us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-service">
                        <div class="bb-footer-widget">
                            <h4
                                class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">
                                Account</h4>
                            <div class="bb-footer-links bb-footer-dropdown  max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="login.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Sign
                                            In</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="cart.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">View
                                            Cart</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="faq.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Return
                                            Policy</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-left-sidebar-col-3.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Become
                                            a Vendor</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="product-left-sidebar.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Affiliate
                                            Program</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="checkout.html"
                                           class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Payments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-cont-social">
                        <div class="bb-footer-contact mb-[30px]">
                            <div class="bb-footer-widget">
                                <h4
                                    class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">
                                    Contact</h4>
                                <div class="bb-footer-links bb-footer-dropdown max-[991px]:mb-[35px]">
                                    <ul class="align-items-center">
                                        <li
                                            class="bb-footer-link bb-foo-location flex items-start max-[991px]:mb-[15px] mb-[16px]">
                                                <span class="mt-[5px] w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                    <i
                                                        class="ri-map-pin-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                                </span>
                                            <p
                                                class="m-[0] font-Poppins text-[14px] text-[#686e7d] font-normal leading-[28px] tracking-[0.03rem]">
                                                971 Lajamni, Motavarachha, Surat, Gujarat, Bharat 394101.</p>
                                        </li>
                                        <li
                                            class="bb-footer-link bb-foo-call flex items-start max-[991px]:mb-[15px] mb-[16px]">
                                                <span class="w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                    <i
                                                        class="ri-whatsapp-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                                </span>
                                            <a href="tel:+009876543210"
                                               class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">+00
                                                9876543210</a>
                                        </li>
                                        <li class="bb-footer-link bb-foo-mail flex">
                                                <span class="w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                    <i class="ri-mail-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                                </span>
                                            <a href="mailto:example@email.com"
                                               class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">example@email.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb-footer-social">
                            <div class="bb-footer-widget">
                                <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                    <ul class="align-items-center flex flex-wrap items-center">
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                               class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-facebook-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                               class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-twitter-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                               class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-linkedin-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                               class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-instagram-line text-[16px] text-[#fff]"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Start -->
        <div class="footer-bottom py-[10px] border-t-[1px] border-solid border-[#eee] max-[991px]:py-[15px]">
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div
                        class="bb-bottom-info w-full flex flex-row items-center justify-between max-[991px]:flex-col px-[12px]">
                        <div class="footer-copy max-[991px]:mb-[15px]">
                            <div class="footer-bottom-copy max-[991px]:text-center">
                                <div
                                    class="bb-copy text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal leading-[2]">
                                    Copyright © <span
                                        class="text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal"
                                        id="copyright_year"></span>
                                    <a class="site-name transition-all duration-[0.3s] ease-in-out font-medium text-[#6c7fd8] hover:text-[#3d4750] font-Poppins text-[15px] leading-[28px] tracking-[0.03rem]"
                                       href="index.html">BlueBerry</a> all rights reserved.
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom-right">
                            <div class="footer-bottom-payment flex justify-center">
                                <div class="payment-link">
                                    <img src="{{asset('img/payment/payment.png')}}" alt="payment"
                                         class="max-[360px]:w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </div>
</footer>
<!-- Footer Ends-->

<!-- Back to top  -->
<a href="#Top"
   class="back-to-top result-placeholder transition-all duration-[0.3s] ease-in-out w-[38px] h-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#6c7fd8] border-[1px] border-solid border-[#6c7fd8] text-center text-[22px] leading-[1.6]">
    <i class="ri-arrow-up-line text-[20px]"></i>
    <div class="back-to-top-wrap active-progress">
        <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                  class="fill-transparent stroke-[5px] stroke-[#6c7fd8]"></path>
        </svg>
    </div>
</a>

<!-- Plugins -->
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('js/vendor/aos.js') }}"></script>
<script src="{{ asset('js/vendor/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/smoothscroll.min.js') }}"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-range-ui.min.js') }}"></script>
@yield('js')
<!-- main-js -->
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
