@extends('client.layouts.master')
@section('content')

<main id="main">

<!-- Widget Slider -->
<section class=" relative overflow-hidden">
    <div class="slider-home2-image">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-home2">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('vitour/assets/images/slide/slide2.jpg')}}"
                                    class="image-slider-home2 relative" alt="Image slider">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('vitour/assets/images/slide/slide2.jpg')}}"
                                    class="image-slider-home2 relative" alt="Image slider">
                            </div>
                        </div>
                        <div class="swiper-button-next next-slider2"></div>
                        <div class="swiper-button-prev prev-slider2"></div>
                    </div>
                </div>
            </div>
            <!-- /.main-banner-wrapper -->
        </div>
    </div>
    <div class="slider-home2-content">
        <img src="{{asset('vitour/assets/images/slide/mask-slide2.png')}}" alt="Image" class="mask-slide2">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center relative z-index3">
                    <img src="{{asset('vitour/assets/images/page/mask-bcrumb.png')}}" alt="Image"
                        class="mask-slide2-flan">
                    <span class="sub-title text-main font-yes fs-28-46 wow fadeInUp animated">Explore
                        the world</span>
                    <h1 class="banner-text title-slide text-white mb-45 wow fadeInUp animated">Tour
                        <span class="animationtext clip text-main font-yes text-main">
                            <span class="cd-words-wrapper">
                                <span class="item-text is-visible">Travel</span>
                                <span class="item-text is-hidden">Travel</span>
                            </span>
                        </span>
                        & <br>adventure camping
                    </h1>
                    <div class="search-form-widget-slider relative wow fadeInUp animated">
                        <form action="https://themesflat.co/" id="search-form-slider">
                            <div class="flex wd-search">
                                <div class="form-group flex">
                                    <i class="icon-18"></i>
                                    <div class="search-bar-group">
                                        <label>Destination</label>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Melborn ,Australia</span>
                                            <ul class="list">
                                                <li data-value class="option selected">Melborn
                                                    ,Australia
                                                </li>
                                                <li data-value="hanoi" class="option">HaNoi ,Vietnam
                                                </li>
                                                <li data-value="tolyo" class="option">Tokyo , Janpan
                                                </li>
                                                <li data-value="korea" class="option">Seoul , Korea</li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>
                                <div class="form-group flex">
                                    <i class="icon-hiking-1-1 "></i>
                                    <div class="search-bar-group">
                                        <label>Type</label>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Booking Type</span>
                                            <ul class="list">
                                                <li data-value class="option selected">Booking Type</li>
                                                <li data-value="booking" class="option">Booking Type
                                                </li>
                                                <li data-value="booking" class="option">Booking Type
                                                </li>
                                                <li data-value="booking" class="option">Booking Type
                                                </li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>
                                <div class="form-group flex">
                                    <i class=" icon-time-left "></i>
                                    <div class="search-bar-group">
                                        <label>Duration</label>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">2-4 days tour</span>
                                            <ul class="list">
                                                <li data-value class="option selected">2-4 days tour
                                                </li>
                                                <li data-value="booking" class="option">3-6 days tour
                                                </li>
                                                <li data-value="booking" class="option">4-8 days tour
                                                </li>
                                                <li data-value="booking" class="option">5-10 days tour
                                                </li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>
                                <div class="form-group flex">
                                    <i class="icon-user"></i>
                                    <div class="search-bar-group">
                                        <label>Guests</label>
                                        <input type="text" value="0">
                                    </div>
                                </div>
                                <div class="form-group flex-two">
                                    <div class="icon-icon-filter">
                                        <i class="icon-14"></i>
                                    </div>
                                    <a href="#" class="btn-search"><i
                                            class="icon-Vector5"></i>Search</a>
                                </div>
                            </div>
                            <div class="wd-search-form">
                                <div class="input-group-grid">
                                    <fieldset class="group-select relative ">
                                        <label>Filter By Price</label>
                                        <div class="widget widget-price ">
                                            <div id="slider-range"></div>
                                            <div class="slider-labels">
                                                <div>
                                                    <input type="hidden" name="min-value" value="">
                                                    <input type="hidden" name="max-value" value="">
                                                </div>
                                                <div class="caption flex-three">
                                                    <p class="price-range">Price: </p>
                                                    <div class="number-range">
                                                        <span id="slider-range-value1"></span>
                                                        <span id="slider-range-value2"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- /.widget_price -->
                                    </fieldset>
                                    <fieldset class="group-select relative input-npd ">
                                        <div class="search-bar-group relative">
                                            <label>0</label>
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">English</span>
                                                <ul class="list">
                                                    <li data-value="" class="option selected focus">Language</li>
                                                    <li data-value="language1" class="option">Japan</li>
                                                    <li data-value="language2" class="option">Vietnames</li>
                                                    <li data-value="language3" class="option">Korea</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="group-select relative input-npd ">
                                        <div class="search-bar-group relative">
                                            <label>Any</label>
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Month</span>
                                                <ul class="list">
                                                    <li data-value="" class="option selected focus">Month</li>
                                                    <li data-value="month1" class="option">1 Month</li>
                                                    <li data-value="month2" class="option">2 Month</li>
                                                    <li data-value="month3" class="option">3 Month</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="group-select relative input-npd">
                                        <div class="search-bar-group relative">
                                            <label>Any</label>
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Duration</span>
                                                <ul class="list">
                                                    <li data-value="" class="option selected focus">Duration</li>
                                                    <li data-value="duration1" class="option">10-15 day</li>
                                                    <li data-value="duration2" class="option">15-30 day</li>
                                                    <li data-value="duration3" class="option">20-30 day</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="group-check-box-wrap">
                                        <div class="checkbox">
                                            <input id="check4" type="checkbox" name="check" value="check">
                                            <label for="check4">Accepts Credit Cards</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="check5" type="checkbox" name="check" value="check">
                                            <label for="check5">Car Parking</label>
                                        </div>
                                    </div>
                                    <div class="group-check-box-wrap">
                                        <div class="checkbox">
                                            <input id="check6" type="checkbox" name="check" value="check">
                                            <label for="check6">Free Coupons</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="check7" type="checkbox" name="check" value="check">
                                            <label for="check7">Laundry Service</label>
                                        </div>
                                    </div>
                                    <div class="group-check-box-wrap">
                                        <div class="checkbox">
                                            <input id="check8" type="checkbox" name="check" value="check">
                                            <label for="check8">Outdoor Seating</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="check9" type="checkbox" name="check" value="check">
                                            <label for="check9">Reservations</label>
                                        </div>
                                    </div>
                                    <div class="group-check-box-wrap">
                                        <div class="checkbox">
                                            <input id="check10" type="checkbox" name="check" value="check">
                                            <label for="check10">Restaurant</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="check11" type="checkbox" name="check" value="check">
                                            <label for="check11">Smoking Allowed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="tour-list wow fadeInUp animated">
                        <ul class="flex-five ">
                            <li>
                                <i class="icon-Vector-5"></i>
                                <span>Easy & Fast - Book a Car in 120 minutes</span>
                            </li>
                            <li>
                                <i class="icon-Vector-5"></i>
                                <span>Best Price with Quality Service </span>
                            </li>
                            <li>
                                <i class="icon-Vector-5"></i>
                                <span>Choose from a Wide Variety of Cars</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Widget Slider -->

<!-- Widget Brand logo -->
<section class="relative mt-53">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12 relative center line-brand-logo mt-20 wow fadeInUp animated">
                <div class="line"></div>
                <p class="line-text">We’ve been mentioned in Below Brands</p>
            </div>
            <div class="col-lg-12 widget-brand-logo">
                <div class="swiper brand-logo overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('vitour/assets/images/page/brand-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('vitour/assets/images/page/brand-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('vitour/assets/images/page/brand-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('vitour/assets/images/page/brand-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('vitour/assets/images/page/brand-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('vitour/assets/images/page/brand-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Widget Brand logo -->

<!-- Widget Banner Part -->
<section class="banner-part">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30 center">
                    <span
                        class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">Explore
                        the
                        world</span>
                    <h2 class="title-heading wow fadeInUp animated">Offer package for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.1s">
                <div class="banner-part-item booking-style-1 relative bg-part-gray overflow-hidden">
                    <div class="content relative z-index3">
                        <span class="text-main sale-up mb-10">Save up to 25%</span>
                        <a href="#" class="font-yes title"> Special <br> Offer</a>
                        <a href="#" class="tour1 btn-booking mt-27">Booking Now <i
                                class="icon-arrow-right"></i></a>
                    </div>

                    <img src="{{asset('vitour/assets/images/explore/ex-pl-1.png')}}" alt="image" class="mask-banner-part">
                    <span class="price-banner-part flex-five center">From 99$</span>
                    <img src="{{asset('vitour/assets/images/explore/mask-banner-part.png')}}" alt="image"
                        class="mask-banner-bottom">
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.2s">
                <div class="banner-part-item booking-style-2 relative bg-part-gray overflow-hidden">
                    <div class="content relative z-index3">
                        <span class="text-main sale-up font-yes">This Week only</span>
                        <a href="#" class="title"> Enjoy 50% Off</a>
                        <p class="text-main mb-30">& Free cancelation</p>
                        <a href="#" class="tour1 btn-booking ">Booking Now <i
                                class="icon-arrow-right"></i></a>
                    </div>

                    <img src="{{asset('vitour/assets/images/explore/ex-pl2.jpg')}}" alt="image" class="mask-banner-part">
                    <img src="{{asset('vitour/assets/images/explore/shape1.png')}}" alt="image"
                        class="banner-part-shape1">
                    <img src="{{asset('vitour/assets/images/explore/shape2.png')}}" alt="image"
                        class="banner-part-shape2">
                    <img src="{{asset('vitour/assets/images/explore/mask-banner-part.png')}}" alt="image"
                        class="mask-banner-bottom">
                    <div class="video-wrap">
                        <a href="https://www.youtube.com/watch?v=n9LgeoJE4EI"
                            class="widget-icon-video widget-videos flex-five z-index3">
                            <i class="icon-Polygon-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.3s">
                <div class="banner-part-item booking-style-3 relative bg-part-blue overflow-hidden">
                    <div class="content z-index3 relative">
                        <span class="text-main sale-up ">Australia Attraction</span>
                        <a href="#" class="title"> The best, for less!</a>
                        <p class="text-main mb-30">10% Off today</p>
                        <a href="#" class="tour1 btn-booking ">Booking Now <i
                                class="icon-arrow-right"></i></a>
                    </div>

                    <img src="{{asset('vitour/assets/images/explore/ex-pl-3.jpg')}}" alt="image" class="mask-banner-part">
                    <img src="{{asset('vitour/assets/images/explore/shape3.png')}}" alt="image"
                        class="banner-part-shape1">
                    <img src="{{asset('vitour/assets/images/explore/mask-banner-part.png')}}" alt="image"
                        class="mask-banner-bottom">
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Widget Banner Part -->

<!-- Widget About Us -->
<section class="about-us-h2 pd-main relative">
    <img src="{{asset('vitour/assets/images/page/mask-ex.png')}}" alt="image" class="mask1-about">
    <img src="{{asset('vitour/assets/images/page/fly4.png')}}" alt="image" class="mask2-about">
    <div class="tf-container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-about-us relative">
                    <img src="{{asset('vitour/assets/images/page/vector3.png')}}" alt="image" class="mask1">
                    <img src="{{asset('vitour/assets/images/page/fly3.png')}}" alt="image" class="mask2">
                    <img src="{{asset('vitour/assets/images/about-us/ewewe2.png')}}" alt="image" class="image-main">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-about-us">
                    <div class="mb-50 pl-about">
                        <span class="sub-title-heading text-main font-yes fs-28-46">Explore the
                            world</span>
                        <h2 class="title-heading mb-18 wow fadeInUp animated">Great opportunity for
                            <span class="text-gray font-yes">adventure</span> & travels
                        </h2>
                        <p class="des-heading wow fadeInUp animated">Welcome to our Print 128 website!
                            We are a professional
                            and reliable printing
                            company that offers a wide range of printing services to</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box-style-4 flex">
                                <div class="icon flex-five">
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_95_95" style="mask-type:luminance"
                                            maskUnits="userSpaceOnUse" x="0" y="0" width="33"
                                            height="33">
                                            <path d="M0 0H33V33H0V0Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_95_95)">
                                            <path d="M16.5 19.0781V32.0332H32.0332V10.1191H28.166"
                                                stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M4.83398 10.1191H0.966797V32.0332H16.5V19.1426"
                                                stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M22.2419 7.54102H28.166V28.166H21.8654C19.4311 28.166 17.2698 29.7237 16.5 32.0332"
                                                stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10.7581 7.54102H4.83398V28.166H11.1346C13.5689 28.166 15.7302 29.7237 16.5 32.0332"
                                                stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M16.4988 0.966797C12.1241 0.966797 9.33045 5.63275 11.3962 9.48892L16.4988 19.0137L21.6014 9.48892C23.6672 5.63275 20.8735 0.966797 16.4988 0.966797Z"
                                                stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M18.4336 6.76758C18.4336 7.83544 17.5679 8.70117 16.5 8.70117C15.4321 8.70117 14.5664 7.83544 14.5664 6.76758C14.5664 5.69972 15.4321 4.83398 16.5 4.83398C17.5679 4.83398 18.4336 5.69972 18.4336 6.76758Z"
                                                stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6 class="title mb-15 wow fadeInUp animated"><a href="#">Safety first always</a>
                                    </h6>
                                    <p class="des wow fadeInUp animated">Welcome to our Print 128 web
                                        company that offers a wide </p>
                                </div>

                            </div>
                            <div class="icon-box-style-4 flex">
                                <div class="icon flex-five">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_549_1112)">
                                            <path
                                                d="M25.7703 6.22184C25.7703 3.96049 23.9306 2.12073 21.6692 2.12073C19.4079 2.12073 17.5681 3.96049 17.5681 6.22184C17.5681 8.4832 19.4079 10.323 21.6692 10.323C23.9306 10.323 25.7703 8.4832 25.7703 6.22184ZM21.6692 8.2724C20.5386 8.2724 19.6187 7.35252 19.6187 6.22184C19.6187 5.09116 20.5386 4.17128 21.6692 4.17128C22.7999 4.17128 23.7198 5.09116 23.7198 6.22184C23.7198 7.35252 22.7999 8.2724 21.6692 8.2724Z"
                                                fill="currentColor" />
                                            <path
                                                d="M34.516 7.44586C33.6732 6.15353 31.9523 5.72052 30.5983 6.46009L23.5248 10.3233C22.8587 10.3233 11.1104 10.3233 10.4254 10.3233V1.02748C10.4254 0.461249 9.96639 0.00219727 9.40016 0.00219727H1.02528C0.459051 0.00219727 0 0.461249 0 1.02748V7.2475C0 7.81373 0.459051 8.27278 1.02528 8.27278H8.37482V33.9731C8.37482 34.5393 8.83387 34.9984 9.40009 34.9984C9.96632 34.9984 10.4254 34.5393 10.4254 33.9731V16.475H16.577V31.9225C16.577 34.5883 19.7404 35.9722 21.7034 34.2133C23.6645 35.9705 26.8298 34.5922 26.8298 31.9225V16.0054L33.648 11.5636C35.0261 10.6658 35.4146 8.82376 34.516 7.44586ZM2.05056 6.22215V2.05269H8.37482V6.22215H2.05056ZM23.754 32.9477C23.1887 32.9477 22.7287 32.4878 22.7287 31.9225C22.7287 31.1273 22.7287 26.4465 22.7287 25.7024C22.7287 25.1362 22.2697 24.6772 21.7034 24.6772C21.1372 24.6772 20.6782 25.1362 20.6782 25.7024V31.9225C20.6782 32.4878 20.2182 32.9477 19.6529 32.9477C19.0875 32.9477 18.6276 32.4878 18.6276 31.9225V22.6266H24.7793V31.9225C24.7793 32.4878 24.3193 32.9477 23.754 32.9477ZM32.5287 9.84542L25.2449 14.5906C24.9545 14.7799 24.7793 15.103 24.7793 15.4497V20.5761H18.6276V15.4497C18.6276 14.8834 18.1686 14.4244 17.6023 14.4244H10.4254V12.3738C24.3876 12.3299 23.8524 12.4809 24.2779 12.2484L31.5811 8.25972C32.0018 8.02992 32.5365 8.16444 32.7984 8.56601C33.0776 8.99403 32.957 9.56647 32.5287 9.84542Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_549_1112">
                                                <rect width="35" height="35" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6 class="title mb-15 wow fadeInUp animated"><a href="#">Trusted travel guide</a>
                                    </h6>
                                    <p class="des wow fadeInUp animated">Welcome to our Print 128 web
                                        company that offers a wide </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="about-us-list">
                                <li class="flex-three wow fadeInUp animated">
                                    <span class="number">05+</span>
                                    <span class="experience">Years of experience</span>
                                </li>
                                <li class="flex-three wow fadeInUp animated">
                                    <span class="number">10+</span>
                                    <span class="experience">Team Members</span>
                                </li>
                                <li class="flex-three wow fadeInUp animated">
                                    <span class="number">05+</span>
                                    <span class="experience">Years of experience</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Widget Brand Part -->

<!-- Widget activities -->
<section class="our-activities relative">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30">
                    <span
                        class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">Explore
                        the world</span>
                    <h2 class="title-heading text-white wow fadeInUp animated">Offer package for you
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="activities-wrap">
                    <ul class="activities-list mb-25">
                        <li>
                            <a href="#" class="flex-three wow fadeInUp animated">
                                <div class="icon">
                                    <i class="icon-river-1"></i>
                                </div>
                                <span class="activities-text">Music & Relaxings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex-three wow fadeInUp animated">
                                <div class="icon">
                                    <i class="icon-tent-1"></i>
                                </div>
                                <span class="activities-text">Couple camping</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex-three wow fadeInUp animated">
                                <div class="icon">
                                    <i class="icon-fishing-1-1"></i>
                                </div>
                                <span class="activities-text">Fishing & Swimming</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex-three wow fadeInUp animated">
                                <div class="icon">
                                    <i class="icon-hiking-1-1"></i>
                                </div>
                                <span class="activities-text">Mountain & Hill Hiking</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex-three wow fadeInUp animated">
                                <div class="icon">
                                    <svg width="47" height="47" viewBox="0 0 47 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M34.1875 24.8125H29.4375M34.1875 24.8125C34.1875 26.779 35.7835 28.375 37.75 28.375C39.7165 28.375 41.3125 26.779 41.3125 24.8125M34.1875 24.8125C34.1875 22.846 35.7835 21.25 37.75 21.25C39.7165 21.25 41.3125 22.846 41.3125 24.8125M29.4375 24.8125H12.8125M29.4375 24.8125V8.1875M29.4375 24.8125H22.3125V8.1875H29.4375M29.4375 8.1875H36.5625L40.125 15.3125M29.4375 8.1875H38.016C39.6381 8.1875 40.7829 6.59862 40.2723 5.062L39.479 2.687C39.156 1.71562 38.2488 1.0625 37.2251 1.0625H0.9375V24.8125H5.6875M40.125 15.3125L44.5686 17.0914C45.4711 17.45 46.0625 18.3264 46.0625 19.2954V22.4375C46.0625 23.7509 45.0009 24.8125 43.6875 24.8125H41.3125M40.125 15.3125H29.4375H22.3125M12.8125 24.8125C12.8125 26.779 11.2165 28.375 9.25 28.375C7.2835 28.375 5.6875 26.779 5.6875 24.8125M12.8125 24.8125C12.8125 22.846 11.2165 21.25 9.25 21.25C7.2835 21.25 5.6875 22.846 5.6875 24.8125M5.6875 15.3125H17.5625V8.1875H5.6875V15.3125Z"
                                            stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="activities-text">Trailers & RV Sports</span>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="more-place center">More Place </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="right-side">
                    <div class="image-activities mb-10">
                        <img src="{{asset('vitour/assets/images/page/explore.jpg')}}" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box-style5">
                                <div class="flex-three wow fadeInUp animated">
                                    <div class="icon">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_100_178" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="37"
                                                height="37">
                                                <path d="M0 0H37V37H0V0Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_100_178)">
                                                <path d="M18.5 21.3906V35.916H35.916V11.3457H31.5801"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.41992 11.3457H1.08398V35.916H18.5V21.4629"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M24.9379 8.45508H31.5801V31.5801H24.5158C21.7864 31.5801 19.3631 33.3266 18.5 35.916"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.0621 8.45508H5.41992V31.5801H12.4842C15.2136 31.5801 17.6369 33.3266 18.5 35.916"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M18.4998 1.08398C13.5948 1.08398 10.4625 6.31551 12.7787 10.6391L18.4998 21.3184L24.2208 10.6391C26.537 6.31551 23.4047 1.08398 18.4998 1.08398Z"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M20.668 7.58789C20.668 8.78519 19.6973 9.75586 18.5 9.75586C17.3027 9.75586 16.332 8.78519 16.332 7.58789C16.332 6.39059 17.3027 5.41992 18.5 5.41992C19.6973 5.41992 20.668 6.39059 20.668 7.58789Z"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text">Real adventure Feel</span>
                                </div>
                                <p class="des wow fadeInUp animated">Welcome to our Print 128 wesit!
                                    company that offers a
                                    wide r</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box-style5">
                                <div class="flex-three wow fadeInUp animated">
                                    <div class="icon">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_100_178" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="37"
                                                height="37">
                                                <path d="M0 0H37V37H0V0Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_100_178)">
                                                <path d="M18.5 21.3906V35.916H35.916V11.3457H31.5801"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.41992 11.3457H1.08398V35.916H18.5V21.4629"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M24.9379 8.45508H31.5801V31.5801H24.5158C21.7864 31.5801 19.3631 33.3266 18.5 35.916"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.0621 8.45508H5.41992V31.5801H12.4842C15.2136 31.5801 17.6369 33.3266 18.5 35.916"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M18.4998 1.08398C13.5948 1.08398 10.4625 6.31551 12.7787 10.6391L18.4998 21.3184L24.2208 10.6391C26.537 6.31551 23.4047 1.08398 18.4998 1.08398Z"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M20.668 7.58789C20.668 8.78519 19.6973 9.75586 18.5 9.75586C17.3027 9.75586 16.332 8.78519 16.332 7.58789C16.332 6.39059 17.3027 5.41992 18.5 5.41992C19.6973 5.41992 20.668 6.39059 20.668 7.58789Z"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text">Comfort & Secure trip</span>
                                </div>
                                <p class="des wow fadeInUp animated">Welcome to our Print 128 wesit!
                                    company that offers a
                                    wide r</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Widget activities -->

<!-- Widget Feature -->
<section class="widget-feature overflow-hidden pd-main relative">
    <div class="bg-ab-feature bg-1">
        <img src="{{asset('vitour/assets/images/page/bg-feature.png')}}" alt="">
    </div>
    <div class="tf-container w-1456 z-index3 relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="center m0-auto w-text-heading mb-40">
                    <span
                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Explore
                        the world</span>
                    <h2 class="title-heading wow fadeInUp animated">Amazing Featured Tour <span
                            class="text-gray font-yes">Package</span> the world</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav justify-content-center tab-list mb-37" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="new-york-tab" data-bs-toggle="tab"
                            data-bs-target="#new-york-tab-pane" type="button" role="tab"
                            aria-controls="new-york-tab-pane" aria-selected="true">New York</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="london-tab" data-bs-toggle="tab"
                            data-bs-target="#london-tab-pane" type="button" role="tab"
                            aria-controls="london-tab-pane" aria-selected="false">London</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tokyo-tab" data-bs-toggle="tab"
                            data-bs-target="#tokyo-tab-pane" type="button" role="tab"
                            aria-controls="tokyo-tab-pane" aria-selected="false">Tokyo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="los-angelas-tab" data-bs-toggle="tab"
                            data-bs-target="#los-angelas-tab-pane" type="button" role="tab"
                            aria-controls="los-angelas-tab-pane" aria-selected="false">Los
                            Angelas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="manila-tab" data-bs-toggle="tab"
                            data-bs-target="#manila-tab-pane" type="button" role="tab"
                            aria-controls="manila-tab-pane" aria-selected="false">Manila</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-york-tab-pane" role="tabpanel"
                        aria-labelledby="new-york-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.1s">
                                <div class="tour-listing box-sd">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/1.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.2s">
                                <div class="tour-listing box-sd">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/2.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Trending</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.3s">
                                <div class="tour-listing box-sd">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/3.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Hot sell</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.4s">
                                <div class="tour-listing box-sd">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/4.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 center mt-44">
                                <a href="archieve-tour.html" class="btn-main">
                                    <p class="btn-main-text">View all tour</p>
                                    <p class="iconer">
                                        <i class="icon-13"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="london-tab-pane" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/1.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/2.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Trending</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/3.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Hot sell</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/4.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 center mt-44">
                                <a href="archieve-tour.html" class="btn-main">
                                    <p class="btn-main-text">View all tour</p>
                                    <p class="iconer">
                                        <i class="icon-13"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tokyo-tab-pane" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/1.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/2.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Trending</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/3.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Hot sell</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/4.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 center mt-44">
                                <a href="archieve-tour.html" class="btn-main">
                                    <p class="btn-main-text">View all tour</p>
                                    <p class="iconer">
                                        <i class="icon-13"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="los-angelas-tab-pane" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/1.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/2.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Trending</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/3.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Hot sell</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/4.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 center mt-44">
                                <a href="archieve-tour.html" class="btn-main">
                                    <p class="btn-main-text">View all tour</p>
                                    <p class="iconer">
                                        <i class="icon-13"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="manila-tab-pane" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/1.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/2.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Trending</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/3.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Hot sell</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From
                                                Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="currentColor" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="tour-listing">
                                    <a href="tour-single.html" class="tour-listing-image">
                                        <div class="badge-top flex-two">
                                            <span class="feature">Featured</span>
                                            <div class="badge-media flex-five">
                                                <span class="media"><i
                                                        class="icon-Group-1000002909"></i>5</span>
                                                <span class="media"><i
                                                        class="icon-Group-1000002910"></i>2</span>
                                            </div>
                                        </div>
                                        <img src="{{asset('vitour/assets/images/travel-list/4.jpg')}}"
                                            alt="Image Listing">

                                    </a>
                                    <div class="tour-listing-content">
                                        <span class="tag-listing">Bestseller</span>
                                        <span class="map"><i class="icon-Vector4"></i>United States
                                            USA</span>
                                        <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                6 nights From Moscow</a>
                                        </h3>
                                        <div class="review">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <span>(1 Review)</span>
                                        </div>
                                        <div class="icon-box flex-three">
                                            <div class="icons flex-three">
                                                <i class="icon-time-left"></i>
                                                <span>5 days</span>
                                            </div>
                                            <div class="icons flex-three">
                                                <svg width="21" height="16" viewBox="0 0 21 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                        stroke="#4DA528" stroke-width="1.7"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17.1035 15.1797V9.02734" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M20.1797 12.1035H14.0273" stroke="#4DA528"
                                                        stroke-width="1.7" stroke-miterlimit="10"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>12 Person</span>
                                            </div>
                                        </div>
                                        <div class="flex-two">
                                            <div class="price-box flex-three">
                                                <p>From <span class="price-sale">$169.00</span></p>
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="icon-bookmark">
                                                <i class="icon-Vector-151"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 center mt-44">
                                <a href="archieve-tour.html" class="btn-main">
                                    <p class="btn-main-text">View all tour</p>
                                    <p class="iconer">
                                        <i class="icon-13"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Widget Feature -->

<!-- Widget destination -->
<section class="widget-destination1 pd-main relative">
    <img src="{{asset('vitour/assets/images/page/shape2.png')}}" alt="image" class="shape-destination">
    <div class="tf-container">
        <div class="row mb-50 z-index3 relative">
            <div class="col-md-8">
                <div class="">
                    <span
                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Explore
                        the world</span>
                    <h2 class="title-heading wow fadeInUp animated">We Provide Top <span
                            class="text-gray font-yes">Destination</span></h2>
                </div>
            </div>
            <div class="col-md-4 flex-five view-all-wrap">
                <a href="tour-destination-v1.html" class="view-all wow fadeInUp animated">View all
                    destination <i class="icon-Group-13"></i></a>
            </div>
        </div>
        <div class="destination-grid z-index3 relative">
            <div class="destination-tour center wow fadeInUp animated " data-wow-delay="0.1s">
                <a href="tour-destination-v1.html" class="destination-image">
                    <img src="{{asset('vitour/assets/images/tour/tourh5.jpg')}}" alt="">
                </a>
                <div class="destination-tour-list">
                    <div class="tour1">
                        <svg width="91" height="32" viewBox="0 0 91 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M90.3999 8.08807C90.2523 7.94617 90.1785 7.80427 90.031 7.66238C89.8834 7.59143 89.662 7.59143 89.4406 7.59143C89.3668 7.59143 89.3668 7.52048 89.293 7.52048C89.3668 7.44954 89.4406 7.37859 89.5144 7.37859C89.5882 7.30764 89.662 7.30764 89.7358 7.23669C89.662 7.16574 89.662 7.09479 89.5882 7.02385C89.5144 6.9529 89.4406 6.74006 89.2192 6.88195C88.9978 7.02385 88.7764 7.0948 88.555 7.16574C88.0385 7.37859 87.6695 7.37859 87.4481 6.88195C87.3005 6.52721 87.0791 6.24342 87.0053 5.88868C87.0053 5.46299 86.6363 5.3211 86.1198 5.3211C85.8984 5.3211 85.677 5.3211 85.4556 5.53394C85.308 5.67584 85.0866 5.60489 84.939 5.46299C84.8652 5.39205 84.7914 5.3211 84.7177 5.25015C84.5701 5.03731 84.4225 5.1792 84.2749 5.25015C83.9797 5.3211 84.1273 4.96636 83.9797 4.89541C83.9059 4.82446 83.8321 4.82446 83.6845 4.82446C83.2417 4.82446 82.9465 4.75351 82.5776 4.54067C82.2086 4.25688 81.692 4.32783 81.3968 4.11498C81.0279 3.83119 80.6589 3.68929 80.2899 3.47645C79.7733 3.90214 79.6257 3.05076 79.183 3.12171C79.1092 3.12171 79.0354 3.05076 78.9616 2.97982C78.6664 2.76697 78.3712 2.76697 78.1498 2.97982C77.8546 3.19266 77.6332 2.69602 77.4118 3.05076C77.4118 3.05076 77.1905 2.97982 77.0429 2.90887C76.6001 2.76697 76.2311 2.55413 75.7883 2.55413C75.3456 2.55413 74.9028 2.27034 74.3862 2.27034C74.091 2.27034 73.7959 2.27034 73.5007 2.27034C73.1317 2.27034 72.8365 2.12844 72.8365 1.84465C72.6889 1.34801 72.5413 1.56086 72.2461 1.70275C72.0985 1.7737 71.8772 1.84465 71.7296 1.9156C71.6558 1.9156 71.5082 1.98654 71.4344 1.9156C71.2868 1.6318 70.5488 1.56086 70.844 0.993273C71.213 0.851377 70.844 0.709481 70.844 0.780429C70.4012 1.48991 69.6633 1.34801 68.9991 1.27706C68.6301 1.20612 68.2612 1.06422 67.966 0.851377C67.7446 0.709482 67.597 0.780429 67.4494 0.851377C67.3018 0.993273 67.0804 0.993273 66.9328 0.851377C66.7114 0.709482 66.4901 0.638534 66.2687 0.638534C65.7521 0.638534 65.3093 0.638534 64.7928 0.638534C64.6452 0.638534 64.5714 0.567586 64.4976 0.42569C64.2024 0.42569 64.0548 0.780429 63.6858 0.709481C63.4644 0.638534 63.1692 0.638534 62.9479 0.709481C62.4313 1.13517 62.0623 0.709481 61.6195 0.709481C61.5457 0.709481 61.5457 0.567586 61.4719 0.496638C61.3981 0.354742 61.3981 0.212846 61.1768 0.354742C61.103 0.42569 60.9554 0.567586 60.8816 0.638534C60.734 0.780429 60.6602 0.638534 60.5864 0.496638C60.5864 0.42569 60.5864 0.283794 60.5864 0.212846C60.5864 0.141898 60.5864 -0.141894 60.365 0.0709501C60.1436 0.212846 59.996 0.354742 59.8484 0.567586C59.5532 0.780429 59.3319 0.709481 59.0367 0.638534C58.4463 0.496638 57.9297 0.354742 57.3394 0.212846C56.749 0.0709501 56.1586 0.567586 55.5683 0.212846C54.9041 0.567586 54.1661 0.496638 53.4282 0.496638C53.2806 0.496638 53.133 0.496638 52.9854 0.567586C52.764 0.780429 52.4688 0.709481 52.1736 0.780429C51.8047 0.780429 51.3619 0.638534 51.0667 0.922325C50.9191 1.06422 50.8453 0.851377 50.6977 0.780429C50.5501 0.638534 50.3288 0.42569 50.1074 0.709481C49.6646 0.354742 49.148 0.496638 48.7052 0.496638C48.1149 0.496638 47.5245 0.354742 47.0079 0.709481C46.8603 0.780429 46.639 0.709481 46.4914 0.638534C46.27 0.496638 46.0486 0.42569 45.8272 0.638534C45.6058 0.780429 45.3844 0.851377 45.163 0.922325C44.9417 1.06422 44.7941 0.993273 44.6465 0.851377C44.4989 0.709482 44.4251 0.851377 44.2775 0.851377C42.9492 1.27707 42.7278 1.27706 41.547 1.27706C41.3257 1.27706 41.1781 1.20612 41.0305 1.13517C40.7353 1.06422 40.5877 1.41896 40.3663 1.34801C40.2187 1.27706 40.0711 1.27706 39.9235 1.27706C39.7759 1.20612 39.7021 1.06422 39.5546 1.20612C39.2594 1.41896 38.8904 1.34801 38.5952 1.48991C38.2262 1.70275 37.7834 1.84465 37.3407 1.84465C36.8241 1.9156 36.2337 1.84465 35.7172 1.84465C35.5696 1.84465 35.3482 1.6318 35.2006 1.70275C34.9792 1.7737 34.7578 1.9156 34.5364 1.9156C34.2412 1.9156 34.0199 2.27034 33.7247 2.19939C33.5033 2.12844 33.3557 2.55413 33.0605 2.34128C32.7653 2.12844 32.5439 2.55413 32.2488 2.48318C32.0274 2.41223 31.7322 2.48318 31.5108 2.48318C31.2156 2.48318 30.9942 2.76697 30.699 2.76697C30.1087 2.69602 29.5921 3.12171 29.0017 3.05076C28.559 2.97982 28.2638 3.12171 27.9686 3.47645C27.9686 3.5474 27.7472 3.61835 27.6734 3.5474C27.1568 3.19266 26.7879 3.68929 26.2713 3.61835C25.8285 3.5474 25.3119 3.61835 24.7954 3.61835C24.5002 3.61835 24.205 3.68929 23.9836 3.90214C23.6884 4.25688 23.467 4.18593 23.0981 3.97309C22.9505 3.90214 22.6553 3.90214 22.5815 3.97309C22.1387 4.32783 21.6221 4.18593 21.1794 4.18593C21.0318 4.18593 20.958 4.04403 20.958 3.90214C20.958 3.76024 20.958 3.61835 20.8842 3.47645C20.8842 3.33456 20.8104 3.33456 20.6628 3.4055C20.5152 3.5474 20.2938 3.61835 20.5152 3.97309C20.6628 4.25688 20.589 4.39877 20.2938 4.46972C20.22 4.46972 20.0724 4.46972 19.9986 4.46972C19.6297 4.46972 19.6297 4.46972 19.4821 3.97309C19.4821 3.90214 19.4821 3.90214 19.4821 3.83119C19.3345 3.5474 19.1131 3.33455 18.8179 3.33455C18.5965 3.33455 18.5227 3.68929 18.6703 4.04403C18.6703 4.11498 18.7441 4.11498 18.7441 4.18593C18.8179 4.39877 18.6703 4.61162 18.4489 4.68257C18.3013 4.75351 18.1537 4.75351 18.0799 4.61162C18.0061 4.46972 18.0061 4.32783 17.9323 4.25688C17.6372 3.90214 17.4896 3.90214 17.1206 4.32783C16.973 4.46972 16.8254 4.54067 16.604 4.39877C16.3088 4.11498 15.9399 4.18593 15.6447 4.25688C15.3495 4.32783 15.1281 4.54067 15.0543 4.82446C14.9805 4.82446 14.9067 4.75351 14.8329 4.75351C14.3163 4.46972 13.7998 4.32783 13.5046 5.03731L13.4308 5.10825C13.2832 5.03731 13.1356 4.89541 12.9142 5.10825C12.619 5.39205 12.3977 5.67584 11.9549 5.25015C11.5859 5.25015 11.0693 4.89541 10.8479 5.53394C10.8479 5.60489 10.6266 5.67584 10.479 5.67584C10.1838 5.67584 9.8886 5.74678 9.59341 5.67584C9.22443 5.67584 8.92925 6.03058 8.48647 5.95963C8.26509 5.95963 8.11749 6.17247 7.89611 6.38532C7.30574 6.811 6.78917 6.9529 5.82982 6.74006C5.68223 6.74006 5.53464 6.74006 5.38705 6.74006C5.01807 6.74006 4.87047 6.9529 4.94427 7.30764C5.01807 7.44953 5.09186 7.52048 5.16566 7.66238C5.23945 7.87522 5.23945 8.01712 5.01807 8.08807C4.13252 8.51375 3.54215 9.43608 2.43521 9.57797C2.36141 9.57797 2.28762 9.71987 2.28762 9.79082C2.21382 10.1456 1.40207 10.1456 1.62345 10.7841C1.62345 10.7841 1.40207 10.926 1.25447 10.9969C0.959291 11.2098 0.664107 11.4936 0.442719 11.7774C0.0737399 12.4159 0.221332 12.7706 0.959291 12.9125C1.25447 12.9835 1.54966 12.9125 1.84484 12.8416C2.21382 12.7706 2.43521 12.6997 2.73039 12.6997C3.09937 12.6997 3.39456 12.6287 3.68974 12.4159C3.91113 12.274 4.13251 12.203 4.3539 12.1321C4.4277 12.1321 4.50149 12.203 4.57529 12.203C4.57529 12.274 4.50149 12.274 4.50149 12.3449C4.3539 12.5578 4.13252 12.6287 3.91113 12.6997C3.61594 12.8416 3.91113 12.9125 3.98492 12.9125C4.13251 12.9125 4.28011 12.9835 4.28011 13.1254C4.3539 13.2673 4.20631 13.4801 3.91113 13.4801C3.39456 13.4092 3.09937 13.7639 2.6566 13.7639C2.36141 13.7639 2.28762 13.9058 2.14003 14.1896C2.06623 14.4024 1.91864 14.5443 2.14003 14.7572C2.28762 14.8991 2.28762 15.1119 2.36141 15.2538C2.5828 15.6085 2.36141 15.5376 2.28762 15.6085C2.21382 15.6795 2.06623 15.6795 2.06623 15.7504C1.99243 16.1052 1.84484 16.389 1.77105 16.6728C1.69725 17.0275 1.77105 17.4532 1.77105 17.8079C1.77105 18.0208 1.91864 18.1627 2.06623 18.3046C2.21382 18.5174 2.21382 18.5174 1.84484 18.7303C1.69725 18.8012 1.69725 19.014 1.77105 19.085C1.91864 19.2978 2.06623 19.4397 2.28762 19.5107C2.6566 19.5816 2.5828 19.7945 2.43521 20.0073C2.36141 20.1492 2.28762 20.2911 2.509 20.2911C2.73039 20.3621 2.87798 20.433 2.87798 20.6459C2.87798 20.8587 2.87798 21.0006 3.02558 21.1425C3.24696 21.3553 3.46835 21.5682 3.68974 21.7101C3.91113 21.9229 3.91113 21.9229 4.28011 21.6391C4.3539 21.5682 4.50149 21.3553 4.57529 21.4972C4.72288 21.781 4.87047 21.9229 5.16566 22.0648C5.23945 22.0648 5.23945 22.2067 5.09186 22.2777C4.72288 22.3486 4.57529 22.4905 4.79668 22.8452C4.94427 23.0581 4.72288 23.129 4.64909 23.3419C4.64909 23.5547 4.64909 23.6966 4.64909 23.9095C4.50149 24.6189 4.87047 25.1156 5.46084 25.3994C5.82982 25.5413 5.97741 25.8251 6.2726 25.9669C6.49398 26.0379 6.86296 25.896 7.01056 25.6832C7.08435 25.6122 7.08435 25.3994 7.30574 25.5413C7.52713 25.8251 7.74851 26.1798 7.9699 26.4636C8.26509 26.7474 8.33888 26.8183 8.70786 26.4636C8.92925 26.3217 9.00304 26.3926 9.15064 26.4636C9.37202 26.6055 9.59341 26.6055 9.8148 26.4636C9.96239 26.3217 10.1838 26.2507 10.1838 26.5345C10.11 27.1021 10.5528 27.315 10.8479 27.5278C11.0693 27.6697 11.2169 27.315 11.5121 27.3859C11.8073 27.3859 12.1025 27.3859 12.3239 27.5988C12.3977 27.6697 12.4715 27.6697 12.619 27.6697C13.357 27.7406 13.4308 27.7406 13.6522 28.0244C13.7998 28.1663 13.7998 28.3792 13.9474 28.5211C14.095 28.663 14.2426 28.7339 14.4639 28.7339C14.5377 28.7339 14.6853 28.663 14.8329 28.592C14.9805 28.5211 15.0543 28.3082 15.2019 28.3082C15.6447 28.2373 15.5709 27.9535 15.6447 27.6697C15.6447 27.5987 15.7185 27.5278 15.7923 27.5278C15.7923 27.5278 15.8661 27.5988 15.9399 27.5988C16.0137 27.5988 16.0137 27.6697 16.0137 27.6697C16.1612 28.0244 16.3088 28.3792 16.5302 28.663C16.8254 29.0177 17.4158 28.663 17.711 29.0177C17.7848 29.1596 18.0061 29.1596 18.0799 29.0177C18.3013 28.7339 18.7441 28.8758 18.8179 28.4501C18.8917 28.1663 19.2607 28.2373 19.4821 28.3082C19.6297 28.3082 19.851 28.5211 19.9986 28.592C20.3676 28.663 20.22 28.9468 20.2938 29.1596C20.5152 29.2306 20.6628 29.3724 20.8104 29.5853C20.5152 29.8691 20.6628 30.011 21.0318 30.0819C21.4008 30.5076 21.6959 30.1529 22.0649 30.0819C22.1387 30.1529 22.1387 30.2948 22.2125 30.2948C22.5077 30.3657 22.8029 30.3657 23.0981 30.3657C23.3932 30.3657 23.5408 30.2238 23.6146 30.011C23.6884 29.7981 23.9098 29.7981 24.1312 29.94C24.4264 30.2238 24.7954 30.5076 25.3119 30.5076C25.6071 30.8624 25.8285 30.3657 26.0499 30.4367C26.3451 30.5786 26.5665 30.6495 26.7879 30.3657C27.0092 30.0819 27.2306 30.0819 27.5258 30.2948C27.6734 30.4367 27.8948 30.4367 28.0424 30.5786C28.19 30.7205 28.3376 30.9333 28.4852 30.9333C28.6328 30.9333 28.7803 30.7205 28.9279 30.5786C29.0755 30.4367 29.2231 30.5786 29.2969 30.5786C29.6659 30.5076 30.0349 30.3657 30.3301 30.2948C30.3301 29.94 30.6252 29.8691 30.9204 29.7981C30.9942 29.7981 31.1418 29.6562 31.1418 29.6562C31.2894 29.7272 31.437 29.7981 31.437 29.94C31.5846 30.3657 31.806 30.5786 32.2488 30.5076C32.7653 30.3657 33.0605 30.7914 33.5033 30.7914C33.9461 30.7914 34.3888 30.6495 34.7578 30.9333C34.8316 31.0042 34.9054 31.0752 34.9792 30.9333C35.2744 30.6495 35.6434 30.7914 35.9386 30.7205C36.3813 30.7205 37.3407 30.5076 37.7097 30.2948C37.7834 30.2238 37.8572 30.2238 37.931 30.2948L38.7428 30.5076C39.038 30.7205 39.407 30.8624 39.7759 31.0043C39.9973 31.0752 40.2187 31.0043 40.2925 30.7914C40.3663 30.5786 40.4401 30.4367 40.6615 30.4367C41.0305 30.5076 41.2519 30.1529 41.6208 30.0819C41.8422 30.0819 41.9898 29.7981 42.285 29.7981C42.7278 29.7981 42.654 30.1529 42.8754 30.3657C43.1705 30.5786 43.5395 30.7914 43.8347 31.0043C44.1299 31.2171 44.2775 31.2171 44.5727 31.0752C44.8679 30.8624 45.3844 31.0042 45.6058 30.5786C45.6796 30.4367 45.6796 30.2948 45.8272 30.2238C46.0486 30.1529 46.1224 30.3657 46.27 30.4367C46.4914 30.6495 46.7865 30.9333 47.0079 31.1461C47.0817 31.2171 47.2293 31.2171 47.3031 31.2171C47.4507 31.1461 47.5245 31.0043 47.6721 31.0043C47.8197 31.0043 47.8935 31.2171 48.1887 31.0752C48.5577 30.8624 48.9266 30.7914 49.2956 31.0043C49.517 31.1461 49.6646 31.0752 49.7384 30.9333C49.886 30.7914 50.0336 30.6495 50.3288 30.7914C50.5501 30.9333 50.8453 30.9333 51.1405 30.7205C51.5095 30.5076 51.9523 30.4367 52.0261 29.8691C52.0261 29.7272 52.395 29.7272 52.5426 29.8691C52.6902 30.011 52.764 30.1529 52.9116 30.2948C53.133 30.7205 53.502 31.0043 53.871 31.359C53.9448 31.4299 54.0186 31.359 54.0923 31.2171C54.0923 31.1461 54.1661 30.9333 54.1661 31.0043C54.3875 31.0043 54.6827 31.2171 54.7565 30.7205C54.7565 30.5786 54.9041 30.3657 55.0517 30.2238C55.1993 30.011 55.5683 29.94 55.7896 30.0819C55.9372 30.1529 56.011 30.2238 56.1586 30.3657C56.38 30.6495 56.6014 30.5786 56.8966 30.3657C57.2656 30.1529 57.487 30.2238 57.7083 30.5786C57.8559 30.7914 57.9297 30.8624 58.1511 30.7914C58.4463 30.6495 58.7415 30.4367 59.0367 30.2948C59.2581 30.2238 59.4794 30.2238 59.7008 30.3657C59.8484 30.5076 59.996 30.6495 60.1436 30.7205C60.2912 30.7914 60.4388 30.4367 60.5864 30.6495C60.734 30.7914 60.9554 30.8624 61.103 30.7205C61.3981 30.3657 61.8409 30.2238 62.2099 30.0819C62.6527 29.94 63.1692 30.011 63.612 29.7272C63.6858 29.6562 63.9072 29.7272 64.0548 29.7981C64.35 29.94 64.5714 30.011 64.7928 30.1529C65.0879 30.2948 65.2355 30.2238 65.4569 30.0819C65.8259 29.5853 66.3425 29.3724 67.0066 29.4434C67.3756 29.4434 67.5232 29.6562 67.7446 29.8691C67.8184 30.011 67.8922 30.0819 67.966 30.2238C68.1874 30.1529 68.1136 29.94 68.1136 29.7272C68.1136 29.5853 68.1136 29.4434 68.1136 29.3015C68.1874 29.1596 68.335 29.0887 68.4088 29.0177C68.5563 28.8758 68.6301 29.0177 68.7777 29.0887C68.9253 29.1596 69.0729 29.1596 69.2205 29.0887C69.3681 29.0177 69.3681 28.8758 69.5895 29.0177C70.0323 29.3015 70.4012 29.3015 70.6226 28.7339C70.6226 28.663 70.7702 28.663 70.844 28.592C70.9916 28.5211 71.0654 28.4501 70.9178 28.3082C70.7702 28.1663 70.6226 28.0954 70.4012 28.0244C70.1061 27.8116 70.1061 27.5987 70.4012 27.3859C70.7702 27.0312 71.2868 27.315 71.582 26.9602C71.7296 27.0312 71.951 27.1021 72.0985 27.1731C72.2461 27.244 72.5413 27.244 72.6889 27.1731C72.9841 26.8893 73.2055 27.1731 73.4269 27.244C73.5007 27.315 73.5007 27.4569 73.5745 27.4569C73.8696 27.4569 74.1648 27.5278 74.46 27.4569C74.6076 27.4569 74.6076 27.3859 74.5338 27.244C74.3124 26.9602 74.091 26.6055 73.7959 26.3926C73.5007 26.1798 73.1317 26.0379 72.6889 26.0379C72.5413 26.0379 72.4675 25.896 72.3199 25.7541C72.2461 25.6832 72.2461 25.6122 72.3199 25.5413C72.4675 25.4703 72.9103 25.3994 73.3531 25.4703C73.5007 25.4703 73.7221 25.5413 73.7959 25.4703C74.091 25.1865 74.5338 25.1865 74.9028 25.2575C75.3456 25.2575 75.7883 25.2575 76.2311 25.2575C76.3787 25.2575 76.5263 25.1865 76.6001 25.1156C76.4525 25.0446 76.3787 24.9737 76.2311 24.9737C76.1573 24.9737 76.1573 24.9027 76.1573 24.9027L76.2311 24.8318C76.7477 24.8318 77.2643 24.6189 77.7808 24.477C77.8546 24.477 77.8546 24.477 77.9284 24.477C78.1498 24.477 78.3712 24.477 78.445 24.6189C78.5188 24.7608 78.5188 24.9027 78.5188 24.9737C78.9616 24.9737 79.0354 24.9737 79.0354 24.6189C79.0354 24.3351 79.183 24.1223 79.3305 24.0514C79.9209 23.8385 80.2899 23.3419 80.8065 22.9162C81.2492 22.5614 81.692 21.9939 82.43 22.4195C83.3155 22.0648 84.3487 22.2067 85.0866 21.4263C85.5294 21.2844 85.8246 21.0006 86.1198 20.7168C86.4887 20.2911 87.0791 20.6458 87.5219 20.433C87.7433 20.2911 88.0385 20.2911 88.1861 20.0073C87.9647 19.7235 88.0385 19.6526 88.4074 19.5816C89.0716 19.5107 89.5882 19.1559 89.9572 18.6593C90.031 18.5884 90.031 18.4465 90.031 18.3755C89.9572 18.1627 89.8834 17.9498 89.7358 17.737C89.5882 17.5241 89.4406 17.3822 89.293 17.1694C89.1454 17.0275 89.5882 16.8147 89.293 16.6018C88.8502 16.389 89.293 15.9633 88.9978 15.6795C88.924 15.6085 88.924 15.3957 88.9978 15.2538C89.293 14.7572 89.3668 14.1896 88.9978 13.693C88.8502 13.4801 88.9978 13.3382 89.0716 13.1963C89.2192 12.9835 89.293 12.6997 89.3668 12.4868C89.1454 12.3449 88.924 12.274 88.7026 12.1321C88.6288 12.0612 88.4812 12.0612 88.4074 12.0612C88.2598 11.9902 88.2598 11.9193 88.4074 11.8483C88.8502 11.6355 89.3668 11.4226 89.8096 11.2098C90.031 11.0679 89.8834 10.9969 89.7358 10.926C89.5144 10.855 89.4406 10.7131 89.4406 10.5003C89.4406 10.3584 89.5144 10.2165 89.5882 10.1456C89.662 10.2165 89.7358 10.2165 89.8096 10.2875C89.9572 10.2875 90.2523 10.0746 90.2523 10.0037C90.2523 9.93271 90.1785 9.86176 90.1047 9.86176C89.7358 9.57797 89.662 9.50702 89.9572 9.22323C90.1048 9.08134 90.3261 8.86849 90.4737 8.7266C90.5475 8.5847 90.1048 8.22996 90.3999 8.08807ZM15.2019 4.96636C15.1281 4.96636 15.0543 4.96636 15.0543 4.89541C15.0543 4.89541 15.0543 4.82446 15.0543 4.75351C15.0543 4.75351 15.0543 4.75351 15.0543 4.82446C15.1281 4.82446 15.2019 4.89541 15.2757 4.89541C15.2019 4.89541 15.2019 4.96636 15.2019 4.96636ZM16.8992 4.96636L16.8254 4.89541C16.8254 4.89541 16.8254 4.89541 16.8254 4.82446C16.8254 4.82446 16.8254 4.82446 16.8254 4.75351H16.8992C17.0468 4.89541 17.0468 4.96636 16.8992 4.96636ZM22.2863 30.011C22.2863 30.0819 22.2125 30.0819 22.1387 30.0819C22.1387 30.0819 22.1387 30.0819 22.0649 30.0819C22.0649 30.0819 22.0649 30.0819 22.1387 30.0819C22.1387 30.011 22.2125 29.94 22.2125 29.8691H22.2863C22.3601 29.94 22.2863 29.94 22.2863 30.011ZM71.2868 25.4703C71.1392 25.4703 71.0654 25.4703 71.0654 25.3284C71.0654 25.2575 71.213 25.2575 71.2868 25.2575C71.3606 25.2575 71.4344 25.3284 71.5082 25.3994C71.4344 25.3994 71.3606 25.4703 71.2868 25.4703ZM73.4269 27.0312C73.5007 26.9602 73.5745 27.0312 73.5007 27.1021C73.4269 27.1731 73.3531 27.1731 73.2793 27.1731C73.3531 27.1731 73.3531 27.0312 73.4269 27.0312Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="tour">3 Tour</span>
                </div>
                <div class="title-tour"><a href="tour-destination-v1.html">Cost rica</a></div>
            </div>
            <div class="destination-tour center wow fadeInUp animated " data-wow-delay="0.2s">
                <a href="tour-destination-v2.html" class="destination-image">
                    <img src="{{asset('vitour/assets/images/tour/tour5.1.jpg')}}" alt="">
                </a>
                <div class="destination-tour-list">
                    <div class="tour2">
                        <svg width="91" height="32" viewBox="0 0 91 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M90.3999 8.08807C90.2523 7.94617 90.1785 7.80427 90.031 7.66238C89.8834 7.59143 89.662 7.59143 89.4406 7.59143C89.3668 7.59143 89.3668 7.52048 89.293 7.52048C89.3668 7.44954 89.4406 7.37859 89.5144 7.37859C89.5882 7.30764 89.662 7.30764 89.7358 7.23669C89.662 7.16574 89.662 7.09479 89.5882 7.02385C89.5144 6.9529 89.4406 6.74006 89.2192 6.88195C88.9978 7.02385 88.7764 7.0948 88.555 7.16574C88.0385 7.37859 87.6695 7.37859 87.4481 6.88195C87.3005 6.52721 87.0791 6.24342 87.0053 5.88868C87.0053 5.46299 86.6363 5.3211 86.1198 5.3211C85.8984 5.3211 85.677 5.3211 85.4556 5.53394C85.308 5.67584 85.0866 5.60489 84.939 5.46299C84.8652 5.39205 84.7914 5.3211 84.7177 5.25015C84.5701 5.03731 84.4225 5.1792 84.2749 5.25015C83.9797 5.3211 84.1273 4.96636 83.9797 4.89541C83.9059 4.82446 83.8321 4.82446 83.6845 4.82446C83.2417 4.82446 82.9465 4.75351 82.5776 4.54067C82.2086 4.25688 81.692 4.32783 81.3968 4.11498C81.0279 3.83119 80.6589 3.68929 80.2899 3.47645C79.7733 3.90214 79.6257 3.05076 79.183 3.12171C79.1092 3.12171 79.0354 3.05076 78.9616 2.97982C78.6664 2.76697 78.3712 2.76697 78.1498 2.97982C77.8546 3.19266 77.6332 2.69602 77.4118 3.05076C77.4118 3.05076 77.1905 2.97982 77.0429 2.90887C76.6001 2.76697 76.2311 2.55413 75.7883 2.55413C75.3456 2.55413 74.9028 2.27034 74.3862 2.27034C74.091 2.27034 73.7959 2.27034 73.5007 2.27034C73.1317 2.27034 72.8365 2.12844 72.8365 1.84465C72.6889 1.34801 72.5413 1.56086 72.2461 1.70275C72.0985 1.7737 71.8772 1.84465 71.7296 1.9156C71.6558 1.9156 71.5082 1.98654 71.4344 1.9156C71.2868 1.6318 70.5488 1.56086 70.844 0.993273C71.213 0.851377 70.844 0.709481 70.844 0.780429C70.4012 1.48991 69.6633 1.34801 68.9991 1.27706C68.6301 1.20612 68.2612 1.06422 67.966 0.851377C67.7446 0.709482 67.597 0.780429 67.4494 0.851377C67.3018 0.993273 67.0804 0.993273 66.9328 0.851377C66.7114 0.709482 66.4901 0.638534 66.2687 0.638534C65.7521 0.638534 65.3093 0.638534 64.7928 0.638534C64.6452 0.638534 64.5714 0.567586 64.4976 0.42569C64.2024 0.42569 64.0548 0.780429 63.6858 0.709481C63.4644 0.638534 63.1692 0.638534 62.9479 0.709481C62.4313 1.13517 62.0623 0.709481 61.6195 0.709481C61.5457 0.709481 61.5457 0.567586 61.4719 0.496638C61.3981 0.354742 61.3981 0.212846 61.1768 0.354742C61.103 0.42569 60.9554 0.567586 60.8816 0.638534C60.734 0.780429 60.6602 0.638534 60.5864 0.496638C60.5864 0.42569 60.5864 0.283794 60.5864 0.212846C60.5864 0.141898 60.5864 -0.141894 60.365 0.0709501C60.1436 0.212846 59.996 0.354742 59.8484 0.567586C59.5532 0.780429 59.3319 0.709481 59.0367 0.638534C58.4463 0.496638 57.9297 0.354742 57.3394 0.212846C56.749 0.0709501 56.1586 0.567586 55.5683 0.212846C54.9041 0.567586 54.1661 0.496638 53.4282 0.496638C53.2806 0.496638 53.133 0.496638 52.9854 0.567586C52.764 0.780429 52.4688 0.709481 52.1736 0.780429C51.8047 0.780429 51.3619 0.638534 51.0667 0.922325C50.9191 1.06422 50.8453 0.851377 50.6977 0.780429C50.5501 0.638534 50.3288 0.42569 50.1074 0.709481C49.6646 0.354742 49.148 0.496638 48.7052 0.496638C48.1149 0.496638 47.5245 0.354742 47.0079 0.709481C46.8603 0.780429 46.639 0.709481 46.4914 0.638534C46.27 0.496638 46.0486 0.42569 45.8272 0.638534C45.6058 0.780429 45.3844 0.851377 45.163 0.922325C44.9417 1.06422 44.7941 0.993273 44.6465 0.851377C44.4989 0.709482 44.4251 0.851377 44.2775 0.851377C42.9492 1.27707 42.7278 1.27706 41.547 1.27706C41.3257 1.27706 41.1781 1.20612 41.0305 1.13517C40.7353 1.06422 40.5877 1.41896 40.3663 1.34801C40.2187 1.27706 40.0711 1.27706 39.9235 1.27706C39.7759 1.20612 39.7021 1.06422 39.5546 1.20612C39.2594 1.41896 38.8904 1.34801 38.5952 1.48991C38.2262 1.70275 37.7834 1.84465 37.3407 1.84465C36.8241 1.9156 36.2337 1.84465 35.7172 1.84465C35.5696 1.84465 35.3482 1.6318 35.2006 1.70275C34.9792 1.7737 34.7578 1.9156 34.5364 1.9156C34.2412 1.9156 34.0199 2.27034 33.7247 2.19939C33.5033 2.12844 33.3557 2.55413 33.0605 2.34128C32.7653 2.12844 32.5439 2.55413 32.2488 2.48318C32.0274 2.41223 31.7322 2.48318 31.5108 2.48318C31.2156 2.48318 30.9942 2.76697 30.699 2.76697C30.1087 2.69602 29.5921 3.12171 29.0017 3.05076C28.559 2.97982 28.2638 3.12171 27.9686 3.47645C27.9686 3.5474 27.7472 3.61835 27.6734 3.5474C27.1568 3.19266 26.7879 3.68929 26.2713 3.61835C25.8285 3.5474 25.3119 3.61835 24.7954 3.61835C24.5002 3.61835 24.205 3.68929 23.9836 3.90214C23.6884 4.25688 23.467 4.18593 23.0981 3.97309C22.9505 3.90214 22.6553 3.90214 22.5815 3.97309C22.1387 4.32783 21.6221 4.18593 21.1794 4.18593C21.0318 4.18593 20.958 4.04403 20.958 3.90214C20.958 3.76024 20.958 3.61835 20.8842 3.47645C20.8842 3.33456 20.8104 3.33456 20.6628 3.4055C20.5152 3.5474 20.2938 3.61835 20.5152 3.97309C20.6628 4.25688 20.589 4.39877 20.2938 4.46972C20.22 4.46972 20.0724 4.46972 19.9986 4.46972C19.6297 4.46972 19.6297 4.46972 19.4821 3.97309C19.4821 3.90214 19.4821 3.90214 19.4821 3.83119C19.3345 3.5474 19.1131 3.33455 18.8179 3.33455C18.5965 3.33455 18.5227 3.68929 18.6703 4.04403C18.6703 4.11498 18.7441 4.11498 18.7441 4.18593C18.8179 4.39877 18.6703 4.61162 18.4489 4.68257C18.3013 4.75351 18.1537 4.75351 18.0799 4.61162C18.0061 4.46972 18.0061 4.32783 17.9323 4.25688C17.6372 3.90214 17.4896 3.90214 17.1206 4.32783C16.973 4.46972 16.8254 4.54067 16.604 4.39877C16.3088 4.11498 15.9399 4.18593 15.6447 4.25688C15.3495 4.32783 15.1281 4.54067 15.0543 4.82446C14.9805 4.82446 14.9067 4.75351 14.8329 4.75351C14.3163 4.46972 13.7998 4.32783 13.5046 5.03731L13.4308 5.10825C13.2832 5.03731 13.1356 4.89541 12.9142 5.10825C12.619 5.39205 12.3977 5.67584 11.9549 5.25015C11.5859 5.25015 11.0693 4.89541 10.8479 5.53394C10.8479 5.60489 10.6266 5.67584 10.479 5.67584C10.1838 5.67584 9.8886 5.74678 9.59341 5.67584C9.22443 5.67584 8.92925 6.03058 8.48647 5.95963C8.26509 5.95963 8.11749 6.17247 7.89611 6.38532C7.30574 6.811 6.78917 6.9529 5.82982 6.74006C5.68223 6.74006 5.53464 6.74006 5.38705 6.74006C5.01807 6.74006 4.87047 6.9529 4.94427 7.30764C5.01807 7.44953 5.09186 7.52048 5.16566 7.66238C5.23945 7.87522 5.23945 8.01712 5.01807 8.08807C4.13252 8.51375 3.54215 9.43608 2.43521 9.57797C2.36141 9.57797 2.28762 9.71987 2.28762 9.79082C2.21382 10.1456 1.40207 10.1456 1.62345 10.7841C1.62345 10.7841 1.40207 10.926 1.25447 10.9969C0.959291 11.2098 0.664107 11.4936 0.442719 11.7774C0.0737399 12.4159 0.221332 12.7706 0.959291 12.9125C1.25447 12.9835 1.54966 12.9125 1.84484 12.8416C2.21382 12.7706 2.43521 12.6997 2.73039 12.6997C3.09937 12.6997 3.39456 12.6287 3.68974 12.4159C3.91113 12.274 4.13251 12.203 4.3539 12.1321C4.4277 12.1321 4.50149 12.203 4.57529 12.203C4.57529 12.274 4.50149 12.274 4.50149 12.3449C4.3539 12.5578 4.13252 12.6287 3.91113 12.6997C3.61594 12.8416 3.91113 12.9125 3.98492 12.9125C4.13251 12.9125 4.28011 12.9835 4.28011 13.1254C4.3539 13.2673 4.20631 13.4801 3.91113 13.4801C3.39456 13.4092 3.09937 13.7639 2.6566 13.7639C2.36141 13.7639 2.28762 13.9058 2.14003 14.1896C2.06623 14.4024 1.91864 14.5443 2.14003 14.7572C2.28762 14.8991 2.28762 15.1119 2.36141 15.2538C2.5828 15.6085 2.36141 15.5376 2.28762 15.6085C2.21382 15.6795 2.06623 15.6795 2.06623 15.7504C1.99243 16.1052 1.84484 16.389 1.77105 16.6728C1.69725 17.0275 1.77105 17.4532 1.77105 17.8079C1.77105 18.0208 1.91864 18.1627 2.06623 18.3046C2.21382 18.5174 2.21382 18.5174 1.84484 18.7303C1.69725 18.8012 1.69725 19.014 1.77105 19.085C1.91864 19.2978 2.06623 19.4397 2.28762 19.5107C2.6566 19.5816 2.5828 19.7945 2.43521 20.0073C2.36141 20.1492 2.28762 20.2911 2.509 20.2911C2.73039 20.3621 2.87798 20.433 2.87798 20.6459C2.87798 20.8587 2.87798 21.0006 3.02558 21.1425C3.24696 21.3553 3.46835 21.5682 3.68974 21.7101C3.91113 21.9229 3.91113 21.9229 4.28011 21.6391C4.3539 21.5682 4.50149 21.3553 4.57529 21.4972C4.72288 21.781 4.87047 21.9229 5.16566 22.0648C5.23945 22.0648 5.23945 22.2067 5.09186 22.2777C4.72288 22.3486 4.57529 22.4905 4.79668 22.8452C4.94427 23.0581 4.72288 23.129 4.64909 23.3419C4.64909 23.5547 4.64909 23.6966 4.64909 23.9095C4.50149 24.6189 4.87047 25.1156 5.46084 25.3994C5.82982 25.5413 5.97741 25.8251 6.2726 25.9669C6.49398 26.0379 6.86296 25.896 7.01056 25.6832C7.08435 25.6122 7.08435 25.3994 7.30574 25.5413C7.52713 25.8251 7.74851 26.1798 7.9699 26.4636C8.26509 26.7474 8.33888 26.8183 8.70786 26.4636C8.92925 26.3217 9.00304 26.3926 9.15064 26.4636C9.37202 26.6055 9.59341 26.6055 9.8148 26.4636C9.96239 26.3217 10.1838 26.2507 10.1838 26.5345C10.11 27.1021 10.5528 27.315 10.8479 27.5278C11.0693 27.6697 11.2169 27.315 11.5121 27.3859C11.8073 27.3859 12.1025 27.3859 12.3239 27.5988C12.3977 27.6697 12.4715 27.6697 12.619 27.6697C13.357 27.7406 13.4308 27.7406 13.6522 28.0244C13.7998 28.1663 13.7998 28.3792 13.9474 28.5211C14.095 28.663 14.2426 28.7339 14.4639 28.7339C14.5377 28.7339 14.6853 28.663 14.8329 28.592C14.9805 28.5211 15.0543 28.3082 15.2019 28.3082C15.6447 28.2373 15.5709 27.9535 15.6447 27.6697C15.6447 27.5987 15.7185 27.5278 15.7923 27.5278C15.7923 27.5278 15.8661 27.5988 15.9399 27.5988C16.0137 27.5988 16.0137 27.6697 16.0137 27.6697C16.1612 28.0244 16.3088 28.3792 16.5302 28.663C16.8254 29.0177 17.4158 28.663 17.711 29.0177C17.7848 29.1596 18.0061 29.1596 18.0799 29.0177C18.3013 28.7339 18.7441 28.8758 18.8179 28.4501C18.8917 28.1663 19.2607 28.2373 19.4821 28.3082C19.6297 28.3082 19.851 28.5211 19.9986 28.592C20.3676 28.663 20.22 28.9468 20.2938 29.1596C20.5152 29.2306 20.6628 29.3724 20.8104 29.5853C20.5152 29.8691 20.6628 30.011 21.0318 30.0819C21.4008 30.5076 21.6959 30.1529 22.0649 30.0819C22.1387 30.1529 22.1387 30.2948 22.2125 30.2948C22.5077 30.3657 22.8029 30.3657 23.0981 30.3657C23.3932 30.3657 23.5408 30.2238 23.6146 30.011C23.6884 29.7981 23.9098 29.7981 24.1312 29.94C24.4264 30.2238 24.7954 30.5076 25.3119 30.5076C25.6071 30.8624 25.8285 30.3657 26.0499 30.4367C26.3451 30.5786 26.5665 30.6495 26.7879 30.3657C27.0092 30.0819 27.2306 30.0819 27.5258 30.2948C27.6734 30.4367 27.8948 30.4367 28.0424 30.5786C28.19 30.7205 28.3376 30.9333 28.4852 30.9333C28.6328 30.9333 28.7803 30.7205 28.9279 30.5786C29.0755 30.4367 29.2231 30.5786 29.2969 30.5786C29.6659 30.5076 30.0349 30.3657 30.3301 30.2948C30.3301 29.94 30.6252 29.8691 30.9204 29.7981C30.9942 29.7981 31.1418 29.6562 31.1418 29.6562C31.2894 29.7272 31.437 29.7981 31.437 29.94C31.5846 30.3657 31.806 30.5786 32.2488 30.5076C32.7653 30.3657 33.0605 30.7914 33.5033 30.7914C33.9461 30.7914 34.3888 30.6495 34.7578 30.9333C34.8316 31.0042 34.9054 31.0752 34.9792 30.9333C35.2744 30.6495 35.6434 30.7914 35.9386 30.7205C36.3813 30.7205 37.3407 30.5076 37.7097 30.2948C37.7834 30.2238 37.8572 30.2238 37.931 30.2948L38.7428 30.5076C39.038 30.7205 39.407 30.8624 39.7759 31.0043C39.9973 31.0752 40.2187 31.0043 40.2925 30.7914C40.3663 30.5786 40.4401 30.4367 40.6615 30.4367C41.0305 30.5076 41.2519 30.1529 41.6208 30.0819C41.8422 30.0819 41.9898 29.7981 42.285 29.7981C42.7278 29.7981 42.654 30.1529 42.8754 30.3657C43.1705 30.5786 43.5395 30.7914 43.8347 31.0043C44.1299 31.2171 44.2775 31.2171 44.5727 31.0752C44.8679 30.8624 45.3844 31.0042 45.6058 30.5786C45.6796 30.4367 45.6796 30.2948 45.8272 30.2238C46.0486 30.1529 46.1224 30.3657 46.27 30.4367C46.4914 30.6495 46.7865 30.9333 47.0079 31.1461C47.0817 31.2171 47.2293 31.2171 47.3031 31.2171C47.4507 31.1461 47.5245 31.0043 47.6721 31.0043C47.8197 31.0043 47.8935 31.2171 48.1887 31.0752C48.5577 30.8624 48.9266 30.7914 49.2956 31.0043C49.517 31.1461 49.6646 31.0752 49.7384 30.9333C49.886 30.7914 50.0336 30.6495 50.3288 30.7914C50.5501 30.9333 50.8453 30.9333 51.1405 30.7205C51.5095 30.5076 51.9523 30.4367 52.0261 29.8691C52.0261 29.7272 52.395 29.7272 52.5426 29.8691C52.6902 30.011 52.764 30.1529 52.9116 30.2948C53.133 30.7205 53.502 31.0043 53.871 31.359C53.9448 31.4299 54.0186 31.359 54.0923 31.2171C54.0923 31.1461 54.1661 30.9333 54.1661 31.0043C54.3875 31.0043 54.6827 31.2171 54.7565 30.7205C54.7565 30.5786 54.9041 30.3657 55.0517 30.2238C55.1993 30.011 55.5683 29.94 55.7896 30.0819C55.9372 30.1529 56.011 30.2238 56.1586 30.3657C56.38 30.6495 56.6014 30.5786 56.8966 30.3657C57.2656 30.1529 57.487 30.2238 57.7083 30.5786C57.8559 30.7914 57.9297 30.8624 58.1511 30.7914C58.4463 30.6495 58.7415 30.4367 59.0367 30.2948C59.2581 30.2238 59.4794 30.2238 59.7008 30.3657C59.8484 30.5076 59.996 30.6495 60.1436 30.7205C60.2912 30.7914 60.4388 30.4367 60.5864 30.6495C60.734 30.7914 60.9554 30.8624 61.103 30.7205C61.3981 30.3657 61.8409 30.2238 62.2099 30.0819C62.6527 29.94 63.1692 30.011 63.612 29.7272C63.6858 29.6562 63.9072 29.7272 64.0548 29.7981C64.35 29.94 64.5714 30.011 64.7928 30.1529C65.0879 30.2948 65.2355 30.2238 65.4569 30.0819C65.8259 29.5853 66.3425 29.3724 67.0066 29.4434C67.3756 29.4434 67.5232 29.6562 67.7446 29.8691C67.8184 30.011 67.8922 30.0819 67.966 30.2238C68.1874 30.1529 68.1136 29.94 68.1136 29.7272C68.1136 29.5853 68.1136 29.4434 68.1136 29.3015C68.1874 29.1596 68.335 29.0887 68.4088 29.0177C68.5563 28.8758 68.6301 29.0177 68.7777 29.0887C68.9253 29.1596 69.0729 29.1596 69.2205 29.0887C69.3681 29.0177 69.3681 28.8758 69.5895 29.0177C70.0323 29.3015 70.4012 29.3015 70.6226 28.7339C70.6226 28.663 70.7702 28.663 70.844 28.592C70.9916 28.5211 71.0654 28.4501 70.9178 28.3082C70.7702 28.1663 70.6226 28.0954 70.4012 28.0244C70.1061 27.8116 70.1061 27.5987 70.4012 27.3859C70.7702 27.0312 71.2868 27.315 71.582 26.9602C71.7296 27.0312 71.951 27.1021 72.0985 27.1731C72.2461 27.244 72.5413 27.244 72.6889 27.1731C72.9841 26.8893 73.2055 27.1731 73.4269 27.244C73.5007 27.315 73.5007 27.4569 73.5745 27.4569C73.8696 27.4569 74.1648 27.5278 74.46 27.4569C74.6076 27.4569 74.6076 27.3859 74.5338 27.244C74.3124 26.9602 74.091 26.6055 73.7959 26.3926C73.5007 26.1798 73.1317 26.0379 72.6889 26.0379C72.5413 26.0379 72.4675 25.896 72.3199 25.7541C72.2461 25.6832 72.2461 25.6122 72.3199 25.5413C72.4675 25.4703 72.9103 25.3994 73.3531 25.4703C73.5007 25.4703 73.7221 25.5413 73.7959 25.4703C74.091 25.1865 74.5338 25.1865 74.9028 25.2575C75.3456 25.2575 75.7883 25.2575 76.2311 25.2575C76.3787 25.2575 76.5263 25.1865 76.6001 25.1156C76.4525 25.0446 76.3787 24.9737 76.2311 24.9737C76.1573 24.9737 76.1573 24.9027 76.1573 24.9027L76.2311 24.8318C76.7477 24.8318 77.2643 24.6189 77.7808 24.477C77.8546 24.477 77.8546 24.477 77.9284 24.477C78.1498 24.477 78.3712 24.477 78.445 24.6189C78.5188 24.7608 78.5188 24.9027 78.5188 24.9737C78.9616 24.9737 79.0354 24.9737 79.0354 24.6189C79.0354 24.3351 79.183 24.1223 79.3305 24.0514C79.9209 23.8385 80.2899 23.3419 80.8065 22.9162C81.2492 22.5614 81.692 21.9939 82.43 22.4195C83.3155 22.0648 84.3487 22.2067 85.0866 21.4263C85.5294 21.2844 85.8246 21.0006 86.1198 20.7168C86.4887 20.2911 87.0791 20.6458 87.5219 20.433C87.7433 20.2911 88.0385 20.2911 88.1861 20.0073C87.9647 19.7235 88.0385 19.6526 88.4074 19.5816C89.0716 19.5107 89.5882 19.1559 89.9572 18.6593C90.031 18.5884 90.031 18.4465 90.031 18.3755C89.9572 18.1627 89.8834 17.9498 89.7358 17.737C89.5882 17.5241 89.4406 17.3822 89.293 17.1694C89.1454 17.0275 89.5882 16.8147 89.293 16.6018C88.8502 16.389 89.293 15.9633 88.9978 15.6795C88.924 15.6085 88.924 15.3957 88.9978 15.2538C89.293 14.7572 89.3668 14.1896 88.9978 13.693C88.8502 13.4801 88.9978 13.3382 89.0716 13.1963C89.2192 12.9835 89.293 12.6997 89.3668 12.4868C89.1454 12.3449 88.924 12.274 88.7026 12.1321C88.6288 12.0612 88.4812 12.0612 88.4074 12.0612C88.2598 11.9902 88.2598 11.9193 88.4074 11.8483C88.8502 11.6355 89.3668 11.4226 89.8096 11.2098C90.031 11.0679 89.8834 10.9969 89.7358 10.926C89.5144 10.855 89.4406 10.7131 89.4406 10.5003C89.4406 10.3584 89.5144 10.2165 89.5882 10.1456C89.662 10.2165 89.7358 10.2165 89.8096 10.2875C89.9572 10.2875 90.2523 10.0746 90.2523 10.0037C90.2523 9.93271 90.1785 9.86176 90.1047 9.86176C89.7358 9.57797 89.662 9.50702 89.9572 9.22323C90.1048 9.08134 90.3261 8.86849 90.4737 8.7266C90.5475 8.5847 90.1048 8.22996 90.3999 8.08807ZM15.2019 4.96636C15.1281 4.96636 15.0543 4.96636 15.0543 4.89541C15.0543 4.89541 15.0543 4.82446 15.0543 4.75351C15.0543 4.75351 15.0543 4.75351 15.0543 4.82446C15.1281 4.82446 15.2019 4.89541 15.2757 4.89541C15.2019 4.89541 15.2019 4.96636 15.2019 4.96636ZM16.8992 4.96636L16.8254 4.89541C16.8254 4.89541 16.8254 4.89541 16.8254 4.82446C16.8254 4.82446 16.8254 4.82446 16.8254 4.75351H16.8992C17.0468 4.89541 17.0468 4.96636 16.8992 4.96636ZM22.2863 30.011C22.2863 30.0819 22.2125 30.0819 22.1387 30.0819C22.1387 30.0819 22.1387 30.0819 22.0649 30.0819C22.0649 30.0819 22.0649 30.0819 22.1387 30.0819C22.1387 30.011 22.2125 29.94 22.2125 29.8691H22.2863C22.3601 29.94 22.2863 29.94 22.2863 30.011ZM71.2868 25.4703C71.1392 25.4703 71.0654 25.4703 71.0654 25.3284C71.0654 25.2575 71.213 25.2575 71.2868 25.2575C71.3606 25.2575 71.4344 25.3284 71.5082 25.3994C71.4344 25.3994 71.3606 25.4703 71.2868 25.4703ZM73.4269 27.0312C73.5007 26.9602 73.5745 27.0312 73.5007 27.1021C73.4269 27.1731 73.3531 27.1731 73.2793 27.1731C73.3531 27.1731 73.3531 27.0312 73.4269 27.0312Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="tour">3 Tour</span>
                </div>
                <div class="title-tour"><a href="tour-destination-v2.html">United Kingdom</a></div>
            </div>
            <div class="destination-tour center wow fadeInUp animated " data-wow-delay="0.3s">
                <a href="tour-destination-v3.html" class="destination-image">
                    <img src="{{asset('vitour/assets/images/tour/tour5.2.jpg')}}" alt="">
                </a>
                <div class="destination-tour-list">
                    <div class="tour3">
                        <svg width="91" height="32" viewBox="0 0 91 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M90.3999 8.08807C90.2523 7.94617 90.1785 7.80427 90.031 7.66238C89.8834 7.59143 89.662 7.59143 89.4406 7.59143C89.3668 7.59143 89.3668 7.52048 89.293 7.52048C89.3668 7.44954 89.4406 7.37859 89.5144 7.37859C89.5882 7.30764 89.662 7.30764 89.7358 7.23669C89.662 7.16574 89.662 7.09479 89.5882 7.02385C89.5144 6.9529 89.4406 6.74006 89.2192 6.88195C88.9978 7.02385 88.7764 7.0948 88.555 7.16574C88.0385 7.37859 87.6695 7.37859 87.4481 6.88195C87.3005 6.52721 87.0791 6.24342 87.0053 5.88868C87.0053 5.46299 86.6363 5.3211 86.1198 5.3211C85.8984 5.3211 85.677 5.3211 85.4556 5.53394C85.308 5.67584 85.0866 5.60489 84.939 5.46299C84.8652 5.39205 84.7914 5.3211 84.7177 5.25015C84.5701 5.03731 84.4225 5.1792 84.2749 5.25015C83.9797 5.3211 84.1273 4.96636 83.9797 4.89541C83.9059 4.82446 83.8321 4.82446 83.6845 4.82446C83.2417 4.82446 82.9465 4.75351 82.5776 4.54067C82.2086 4.25688 81.692 4.32783 81.3968 4.11498C81.0279 3.83119 80.6589 3.68929 80.2899 3.47645C79.7733 3.90214 79.6257 3.05076 79.183 3.12171C79.1092 3.12171 79.0354 3.05076 78.9616 2.97982C78.6664 2.76697 78.3712 2.76697 78.1498 2.97982C77.8546 3.19266 77.6332 2.69602 77.4118 3.05076C77.4118 3.05076 77.1905 2.97982 77.0429 2.90887C76.6001 2.76697 76.2311 2.55413 75.7883 2.55413C75.3456 2.55413 74.9028 2.27034 74.3862 2.27034C74.091 2.27034 73.7959 2.27034 73.5007 2.27034C73.1317 2.27034 72.8365 2.12844 72.8365 1.84465C72.6889 1.34801 72.5413 1.56086 72.2461 1.70275C72.0985 1.7737 71.8772 1.84465 71.7296 1.9156C71.6558 1.9156 71.5082 1.98654 71.4344 1.9156C71.2868 1.6318 70.5488 1.56086 70.844 0.993273C71.213 0.851377 70.844 0.709481 70.844 0.780429C70.4012 1.48991 69.6633 1.34801 68.9991 1.27706C68.6301 1.20612 68.2612 1.06422 67.966 0.851377C67.7446 0.709482 67.597 0.780429 67.4494 0.851377C67.3018 0.993273 67.0804 0.993273 66.9328 0.851377C66.7114 0.709482 66.4901 0.638534 66.2687 0.638534C65.7521 0.638534 65.3093 0.638534 64.7928 0.638534C64.6452 0.638534 64.5714 0.567586 64.4976 0.42569C64.2024 0.42569 64.0548 0.780429 63.6858 0.709481C63.4644 0.638534 63.1692 0.638534 62.9479 0.709481C62.4313 1.13517 62.0623 0.709481 61.6195 0.709481C61.5457 0.709481 61.5457 0.567586 61.4719 0.496638C61.3981 0.354742 61.3981 0.212846 61.1768 0.354742C61.103 0.42569 60.9554 0.567586 60.8816 0.638534C60.734 0.780429 60.6602 0.638534 60.5864 0.496638C60.5864 0.42569 60.5864 0.283794 60.5864 0.212846C60.5864 0.141898 60.5864 -0.141894 60.365 0.0709501C60.1436 0.212846 59.996 0.354742 59.8484 0.567586C59.5532 0.780429 59.3319 0.709481 59.0367 0.638534C58.4463 0.496638 57.9297 0.354742 57.3394 0.212846C56.749 0.0709501 56.1586 0.567586 55.5683 0.212846C54.9041 0.567586 54.1661 0.496638 53.4282 0.496638C53.2806 0.496638 53.133 0.496638 52.9854 0.567586C52.764 0.780429 52.4688 0.709481 52.1736 0.780429C51.8047 0.780429 51.3619 0.638534 51.0667 0.922325C50.9191 1.06422 50.8453 0.851377 50.6977 0.780429C50.5501 0.638534 50.3288 0.42569 50.1074 0.709481C49.6646 0.354742 49.148 0.496638 48.7052 0.496638C48.1149 0.496638 47.5245 0.354742 47.0079 0.709481C46.8603 0.780429 46.639 0.709481 46.4914 0.638534C46.27 0.496638 46.0486 0.42569 45.8272 0.638534C45.6058 0.780429 45.3844 0.851377 45.163 0.922325C44.9417 1.06422 44.7941 0.993273 44.6465 0.851377C44.4989 0.709482 44.4251 0.851377 44.2775 0.851377C42.9492 1.27707 42.7278 1.27706 41.547 1.27706C41.3257 1.27706 41.1781 1.20612 41.0305 1.13517C40.7353 1.06422 40.5877 1.41896 40.3663 1.34801C40.2187 1.27706 40.0711 1.27706 39.9235 1.27706C39.7759 1.20612 39.7021 1.06422 39.5546 1.20612C39.2594 1.41896 38.8904 1.34801 38.5952 1.48991C38.2262 1.70275 37.7834 1.84465 37.3407 1.84465C36.8241 1.9156 36.2337 1.84465 35.7172 1.84465C35.5696 1.84465 35.3482 1.6318 35.2006 1.70275C34.9792 1.7737 34.7578 1.9156 34.5364 1.9156C34.2412 1.9156 34.0199 2.27034 33.7247 2.19939C33.5033 2.12844 33.3557 2.55413 33.0605 2.34128C32.7653 2.12844 32.5439 2.55413 32.2488 2.48318C32.0274 2.41223 31.7322 2.48318 31.5108 2.48318C31.2156 2.48318 30.9942 2.76697 30.699 2.76697C30.1087 2.69602 29.5921 3.12171 29.0017 3.05076C28.559 2.97982 28.2638 3.12171 27.9686 3.47645C27.9686 3.5474 27.7472 3.61835 27.6734 3.5474C27.1568 3.19266 26.7879 3.68929 26.2713 3.61835C25.8285 3.5474 25.3119 3.61835 24.7954 3.61835C24.5002 3.61835 24.205 3.68929 23.9836 3.90214C23.6884 4.25688 23.467 4.18593 23.0981 3.97309C22.9505 3.90214 22.6553 3.90214 22.5815 3.97309C22.1387 4.32783 21.6221 4.18593 21.1794 4.18593C21.0318 4.18593 20.958 4.04403 20.958 3.90214C20.958 3.76024 20.958 3.61835 20.8842 3.47645C20.8842 3.33456 20.8104 3.33456 20.6628 3.4055C20.5152 3.5474 20.2938 3.61835 20.5152 3.97309C20.6628 4.25688 20.589 4.39877 20.2938 4.46972C20.22 4.46972 20.0724 4.46972 19.9986 4.46972C19.6297 4.46972 19.6297 4.46972 19.4821 3.97309C19.4821 3.90214 19.4821 3.90214 19.4821 3.83119C19.3345 3.5474 19.1131 3.33455 18.8179 3.33455C18.5965 3.33455 18.5227 3.68929 18.6703 4.04403C18.6703 4.11498 18.7441 4.11498 18.7441 4.18593C18.8179 4.39877 18.6703 4.61162 18.4489 4.68257C18.3013 4.75351 18.1537 4.75351 18.0799 4.61162C18.0061 4.46972 18.0061 4.32783 17.9323 4.25688C17.6372 3.90214 17.4896 3.90214 17.1206 4.32783C16.973 4.46972 16.8254 4.54067 16.604 4.39877C16.3088 4.11498 15.9399 4.18593 15.6447 4.25688C15.3495 4.32783 15.1281 4.54067 15.0543 4.82446C14.9805 4.82446 14.9067 4.75351 14.8329 4.75351C14.3163 4.46972 13.7998 4.32783 13.5046 5.03731L13.4308 5.10825C13.2832 5.03731 13.1356 4.89541 12.9142 5.10825C12.619 5.39205 12.3977 5.67584 11.9549 5.25015C11.5859 5.25015 11.0693 4.89541 10.8479 5.53394C10.8479 5.60489 10.6266 5.67584 10.479 5.67584C10.1838 5.67584 9.8886 5.74678 9.59341 5.67584C9.22443 5.67584 8.92925 6.03058 8.48647 5.95963C8.26509 5.95963 8.11749 6.17247 7.89611 6.38532C7.30574 6.811 6.78917 6.9529 5.82982 6.74006C5.68223 6.74006 5.53464 6.74006 5.38705 6.74006C5.01807 6.74006 4.87047 6.9529 4.94427 7.30764C5.01807 7.44953 5.09186 7.52048 5.16566 7.66238C5.23945 7.87522 5.23945 8.01712 5.01807 8.08807C4.13252 8.51375 3.54215 9.43608 2.43521 9.57797C2.36141 9.57797 2.28762 9.71987 2.28762 9.79082C2.21382 10.1456 1.40207 10.1456 1.62345 10.7841C1.62345 10.7841 1.40207 10.926 1.25447 10.9969C0.959291 11.2098 0.664107 11.4936 0.442719 11.7774C0.0737399 12.4159 0.221332 12.7706 0.959291 12.9125C1.25447 12.9835 1.54966 12.9125 1.84484 12.8416C2.21382 12.7706 2.43521 12.6997 2.73039 12.6997C3.09937 12.6997 3.39456 12.6287 3.68974 12.4159C3.91113 12.274 4.13251 12.203 4.3539 12.1321C4.4277 12.1321 4.50149 12.203 4.57529 12.203C4.57529 12.274 4.50149 12.274 4.50149 12.3449C4.3539 12.5578 4.13252 12.6287 3.91113 12.6997C3.61594 12.8416 3.91113 12.9125 3.98492 12.9125C4.13251 12.9125 4.28011 12.9835 4.28011 13.1254C4.3539 13.2673 4.20631 13.4801 3.91113 13.4801C3.39456 13.4092 3.09937 13.7639 2.6566 13.7639C2.36141 13.7639 2.28762 13.9058 2.14003 14.1896C2.06623 14.4024 1.91864 14.5443 2.14003 14.7572C2.28762 14.8991 2.28762 15.1119 2.36141 15.2538C2.5828 15.6085 2.36141 15.5376 2.28762 15.6085C2.21382 15.6795 2.06623 15.6795 2.06623 15.7504C1.99243 16.1052 1.84484 16.389 1.77105 16.6728C1.69725 17.0275 1.77105 17.4532 1.77105 17.8079C1.77105 18.0208 1.91864 18.1627 2.06623 18.3046C2.21382 18.5174 2.21382 18.5174 1.84484 18.7303C1.69725 18.8012 1.69725 19.014 1.77105 19.085C1.91864 19.2978 2.06623 19.4397 2.28762 19.5107C2.6566 19.5816 2.5828 19.7945 2.43521 20.0073C2.36141 20.1492 2.28762 20.2911 2.509 20.2911C2.73039 20.3621 2.87798 20.433 2.87798 20.6459C2.87798 20.8587 2.87798 21.0006 3.02558 21.1425C3.24696 21.3553 3.46835 21.5682 3.68974 21.7101C3.91113 21.9229 3.91113 21.9229 4.28011 21.6391C4.3539 21.5682 4.50149 21.3553 4.57529 21.4972C4.72288 21.781 4.87047 21.9229 5.16566 22.0648C5.23945 22.0648 5.23945 22.2067 5.09186 22.2777C4.72288 22.3486 4.57529 22.4905 4.79668 22.8452C4.94427 23.0581 4.72288 23.129 4.64909 23.3419C4.64909 23.5547 4.64909 23.6966 4.64909 23.9095C4.50149 24.6189 4.87047 25.1156 5.46084 25.3994C5.82982 25.5413 5.97741 25.8251 6.2726 25.9669C6.49398 26.0379 6.86296 25.896 7.01056 25.6832C7.08435 25.6122 7.08435 25.3994 7.30574 25.5413C7.52713 25.8251 7.74851 26.1798 7.9699 26.4636C8.26509 26.7474 8.33888 26.8183 8.70786 26.4636C8.92925 26.3217 9.00304 26.3926 9.15064 26.4636C9.37202 26.6055 9.59341 26.6055 9.8148 26.4636C9.96239 26.3217 10.1838 26.2507 10.1838 26.5345C10.11 27.1021 10.5528 27.315 10.8479 27.5278C11.0693 27.6697 11.2169 27.315 11.5121 27.3859C11.8073 27.3859 12.1025 27.3859 12.3239 27.5988C12.3977 27.6697 12.4715 27.6697 12.619 27.6697C13.357 27.7406 13.4308 27.7406 13.6522 28.0244C13.7998 28.1663 13.7998 28.3792 13.9474 28.5211C14.095 28.663 14.2426 28.7339 14.4639 28.7339C14.5377 28.7339 14.6853 28.663 14.8329 28.592C14.9805 28.5211 15.0543 28.3082 15.2019 28.3082C15.6447 28.2373 15.5709 27.9535 15.6447 27.6697C15.6447 27.5987 15.7185 27.5278 15.7923 27.5278C15.7923 27.5278 15.8661 27.5988 15.9399 27.5988C16.0137 27.5988 16.0137 27.6697 16.0137 27.6697C16.1612 28.0244 16.3088 28.3792 16.5302 28.663C16.8254 29.0177 17.4158 28.663 17.711 29.0177C17.7848 29.1596 18.0061 29.1596 18.0799 29.0177C18.3013 28.7339 18.7441 28.8758 18.8179 28.4501C18.8917 28.1663 19.2607 28.2373 19.4821 28.3082C19.6297 28.3082 19.851 28.5211 19.9986 28.592C20.3676 28.663 20.22 28.9468 20.2938 29.1596C20.5152 29.2306 20.6628 29.3724 20.8104 29.5853C20.5152 29.8691 20.6628 30.011 21.0318 30.0819C21.4008 30.5076 21.6959 30.1529 22.0649 30.0819C22.1387 30.1529 22.1387 30.2948 22.2125 30.2948C22.5077 30.3657 22.8029 30.3657 23.0981 30.3657C23.3932 30.3657 23.5408 30.2238 23.6146 30.011C23.6884 29.7981 23.9098 29.7981 24.1312 29.94C24.4264 30.2238 24.7954 30.5076 25.3119 30.5076C25.6071 30.8624 25.8285 30.3657 26.0499 30.4367C26.3451 30.5786 26.5665 30.6495 26.7879 30.3657C27.0092 30.0819 27.2306 30.0819 27.5258 30.2948C27.6734 30.4367 27.8948 30.4367 28.0424 30.5786C28.19 30.7205 28.3376 30.9333 28.4852 30.9333C28.6328 30.9333 28.7803 30.7205 28.9279 30.5786C29.0755 30.4367 29.2231 30.5786 29.2969 30.5786C29.6659 30.5076 30.0349 30.3657 30.3301 30.2948C30.3301 29.94 30.6252 29.8691 30.9204 29.7981C30.9942 29.7981 31.1418 29.6562 31.1418 29.6562C31.2894 29.7272 31.437 29.7981 31.437 29.94C31.5846 30.3657 31.806 30.5786 32.2488 30.5076C32.7653 30.3657 33.0605 30.7914 33.5033 30.7914C33.9461 30.7914 34.3888 30.6495 34.7578 30.9333C34.8316 31.0042 34.9054 31.0752 34.9792 30.9333C35.2744 30.6495 35.6434 30.7914 35.9386 30.7205C36.3813 30.7205 37.3407 30.5076 37.7097 30.2948C37.7834 30.2238 37.8572 30.2238 37.931 30.2948L38.7428 30.5076C39.038 30.7205 39.407 30.8624 39.7759 31.0043C39.9973 31.0752 40.2187 31.0043 40.2925 30.7914C40.3663 30.5786 40.4401 30.4367 40.6615 30.4367C41.0305 30.5076 41.2519 30.1529 41.6208 30.0819C41.8422 30.0819 41.9898 29.7981 42.285 29.7981C42.7278 29.7981 42.654 30.1529 42.8754 30.3657C43.1705 30.5786 43.5395 30.7914 43.8347 31.0043C44.1299 31.2171 44.2775 31.2171 44.5727 31.0752C44.8679 30.8624 45.3844 31.0042 45.6058 30.5786C45.6796 30.4367 45.6796 30.2948 45.8272 30.2238C46.0486 30.1529 46.1224 30.3657 46.27 30.4367C46.4914 30.6495 46.7865 30.9333 47.0079 31.1461C47.0817 31.2171 47.2293 31.2171 47.3031 31.2171C47.4507 31.1461 47.5245 31.0043 47.6721 31.0043C47.8197 31.0043 47.8935 31.2171 48.1887 31.0752C48.5577 30.8624 48.9266 30.7914 49.2956 31.0043C49.517 31.1461 49.6646 31.0752 49.7384 30.9333C49.886 30.7914 50.0336 30.6495 50.3288 30.7914C50.5501 30.9333 50.8453 30.9333 51.1405 30.7205C51.5095 30.5076 51.9523 30.4367 52.0261 29.8691C52.0261 29.7272 52.395 29.7272 52.5426 29.8691C52.6902 30.011 52.764 30.1529 52.9116 30.2948C53.133 30.7205 53.502 31.0043 53.871 31.359C53.9448 31.4299 54.0186 31.359 54.0923 31.2171C54.0923 31.1461 54.1661 30.9333 54.1661 31.0043C54.3875 31.0043 54.6827 31.2171 54.7565 30.7205C54.7565 30.5786 54.9041 30.3657 55.0517 30.2238C55.1993 30.011 55.5683 29.94 55.7896 30.0819C55.9372 30.1529 56.011 30.2238 56.1586 30.3657C56.38 30.6495 56.6014 30.5786 56.8966 30.3657C57.2656 30.1529 57.487 30.2238 57.7083 30.5786C57.8559 30.7914 57.9297 30.8624 58.1511 30.7914C58.4463 30.6495 58.7415 30.4367 59.0367 30.2948C59.2581 30.2238 59.4794 30.2238 59.7008 30.3657C59.8484 30.5076 59.996 30.6495 60.1436 30.7205C60.2912 30.7914 60.4388 30.4367 60.5864 30.6495C60.734 30.7914 60.9554 30.8624 61.103 30.7205C61.3981 30.3657 61.8409 30.2238 62.2099 30.0819C62.6527 29.94 63.1692 30.011 63.612 29.7272C63.6858 29.6562 63.9072 29.7272 64.0548 29.7981C64.35 29.94 64.5714 30.011 64.7928 30.1529C65.0879 30.2948 65.2355 30.2238 65.4569 30.0819C65.8259 29.5853 66.3425 29.3724 67.0066 29.4434C67.3756 29.4434 67.5232 29.6562 67.7446 29.8691C67.8184 30.011 67.8922 30.0819 67.966 30.2238C68.1874 30.1529 68.1136 29.94 68.1136 29.7272C68.1136 29.5853 68.1136 29.4434 68.1136 29.3015C68.1874 29.1596 68.335 29.0887 68.4088 29.0177C68.5563 28.8758 68.6301 29.0177 68.7777 29.0887C68.9253 29.1596 69.0729 29.1596 69.2205 29.0887C69.3681 29.0177 69.3681 28.8758 69.5895 29.0177C70.0323 29.3015 70.4012 29.3015 70.6226 28.7339C70.6226 28.663 70.7702 28.663 70.844 28.592C70.9916 28.5211 71.0654 28.4501 70.9178 28.3082C70.7702 28.1663 70.6226 28.0954 70.4012 28.0244C70.1061 27.8116 70.1061 27.5987 70.4012 27.3859C70.7702 27.0312 71.2868 27.315 71.582 26.9602C71.7296 27.0312 71.951 27.1021 72.0985 27.1731C72.2461 27.244 72.5413 27.244 72.6889 27.1731C72.9841 26.8893 73.2055 27.1731 73.4269 27.244C73.5007 27.315 73.5007 27.4569 73.5745 27.4569C73.8696 27.4569 74.1648 27.5278 74.46 27.4569C74.6076 27.4569 74.6076 27.3859 74.5338 27.244C74.3124 26.9602 74.091 26.6055 73.7959 26.3926C73.5007 26.1798 73.1317 26.0379 72.6889 26.0379C72.5413 26.0379 72.4675 25.896 72.3199 25.7541C72.2461 25.6832 72.2461 25.6122 72.3199 25.5413C72.4675 25.4703 72.9103 25.3994 73.3531 25.4703C73.5007 25.4703 73.7221 25.5413 73.7959 25.4703C74.091 25.1865 74.5338 25.1865 74.9028 25.2575C75.3456 25.2575 75.7883 25.2575 76.2311 25.2575C76.3787 25.2575 76.5263 25.1865 76.6001 25.1156C76.4525 25.0446 76.3787 24.9737 76.2311 24.9737C76.1573 24.9737 76.1573 24.9027 76.1573 24.9027L76.2311 24.8318C76.7477 24.8318 77.2643 24.6189 77.7808 24.477C77.8546 24.477 77.8546 24.477 77.9284 24.477C78.1498 24.477 78.3712 24.477 78.445 24.6189C78.5188 24.7608 78.5188 24.9027 78.5188 24.9737C78.9616 24.9737 79.0354 24.9737 79.0354 24.6189C79.0354 24.3351 79.183 24.1223 79.3305 24.0514C79.9209 23.8385 80.2899 23.3419 80.8065 22.9162C81.2492 22.5614 81.692 21.9939 82.43 22.4195C83.3155 22.0648 84.3487 22.2067 85.0866 21.4263C85.5294 21.2844 85.8246 21.0006 86.1198 20.7168C86.4887 20.2911 87.0791 20.6458 87.5219 20.433C87.7433 20.2911 88.0385 20.2911 88.1861 20.0073C87.9647 19.7235 88.0385 19.6526 88.4074 19.5816C89.0716 19.5107 89.5882 19.1559 89.9572 18.6593C90.031 18.5884 90.031 18.4465 90.031 18.3755C89.9572 18.1627 89.8834 17.9498 89.7358 17.737C89.5882 17.5241 89.4406 17.3822 89.293 17.1694C89.1454 17.0275 89.5882 16.8147 89.293 16.6018C88.8502 16.389 89.293 15.9633 88.9978 15.6795C88.924 15.6085 88.924 15.3957 88.9978 15.2538C89.293 14.7572 89.3668 14.1896 88.9978 13.693C88.8502 13.4801 88.9978 13.3382 89.0716 13.1963C89.2192 12.9835 89.293 12.6997 89.3668 12.4868C89.1454 12.3449 88.924 12.274 88.7026 12.1321C88.6288 12.0612 88.4812 12.0612 88.4074 12.0612C88.2598 11.9902 88.2598 11.9193 88.4074 11.8483C88.8502 11.6355 89.3668 11.4226 89.8096 11.2098C90.031 11.0679 89.8834 10.9969 89.7358 10.926C89.5144 10.855 89.4406 10.7131 89.4406 10.5003C89.4406 10.3584 89.5144 10.2165 89.5882 10.1456C89.662 10.2165 89.7358 10.2165 89.8096 10.2875C89.9572 10.2875 90.2523 10.0746 90.2523 10.0037C90.2523 9.93271 90.1785 9.86176 90.1047 9.86176C89.7358 9.57797 89.662 9.50702 89.9572 9.22323C90.1048 9.08134 90.3261 8.86849 90.4737 8.7266C90.5475 8.5847 90.1048 8.22996 90.3999 8.08807ZM15.2019 4.96636C15.1281 4.96636 15.0543 4.96636 15.0543 4.89541C15.0543 4.89541 15.0543 4.82446 15.0543 4.75351C15.0543 4.75351 15.0543 4.75351 15.0543 4.82446C15.1281 4.82446 15.2019 4.89541 15.2757 4.89541C15.2019 4.89541 15.2019 4.96636 15.2019 4.96636ZM16.8992 4.96636L16.8254 4.89541C16.8254 4.89541 16.8254 4.89541 16.8254 4.82446C16.8254 4.82446 16.8254 4.82446 16.8254 4.75351H16.8992C17.0468 4.89541 17.0468 4.96636 16.8992 4.96636ZM22.2863 30.011C22.2863 30.0819 22.2125 30.0819 22.1387 30.0819C22.1387 30.0819 22.1387 30.0819 22.0649 30.0819C22.0649 30.0819 22.0649 30.0819 22.1387 30.0819C22.1387 30.011 22.2125 29.94 22.2125 29.8691H22.2863C22.3601 29.94 22.2863 29.94 22.2863 30.011ZM71.2868 25.4703C71.1392 25.4703 71.0654 25.4703 71.0654 25.3284C71.0654 25.2575 71.213 25.2575 71.2868 25.2575C71.3606 25.2575 71.4344 25.3284 71.5082 25.3994C71.4344 25.3994 71.3606 25.4703 71.2868 25.4703ZM73.4269 27.0312C73.5007 26.9602 73.5745 27.0312 73.5007 27.1021C73.4269 27.1731 73.3531 27.1731 73.2793 27.1731C73.3531 27.1731 73.3531 27.0312 73.4269 27.0312Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="tour">3 Tour</span>
                </div>
                <div class="title-tour"><a href="tour-destination-v3.html">Africa</a></div>
            </div>
            <div class="destination-tour center wow fadeInUp animated " data-wow-delay="0.4s">
                <a href="tour-destination-v3.html" class="destination-image">
                    <img src="{{asset('vitour/assets/images/tour/tour5.3.jpg')}}" alt="">
                </a>
                <div class="destination-tour-list">
                    <div class="tour4">
                        <svg width="91" height="32" viewBox="0 0 91 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M90.3999 8.08807C90.2523 7.94617 90.1785 7.80427 90.031 7.66238C89.8834 7.59143 89.662 7.59143 89.4406 7.59143C89.3668 7.59143 89.3668 7.52048 89.293 7.52048C89.3668 7.44954 89.4406 7.37859 89.5144 7.37859C89.5882 7.30764 89.662 7.30764 89.7358 7.23669C89.662 7.16574 89.662 7.09479 89.5882 7.02385C89.5144 6.9529 89.4406 6.74006 89.2192 6.88195C88.9978 7.02385 88.7764 7.0948 88.555 7.16574C88.0385 7.37859 87.6695 7.37859 87.4481 6.88195C87.3005 6.52721 87.0791 6.24342 87.0053 5.88868C87.0053 5.46299 86.6363 5.3211 86.1198 5.3211C85.8984 5.3211 85.677 5.3211 85.4556 5.53394C85.308 5.67584 85.0866 5.60489 84.939 5.46299C84.8652 5.39205 84.7914 5.3211 84.7177 5.25015C84.5701 5.03731 84.4225 5.1792 84.2749 5.25015C83.9797 5.3211 84.1273 4.96636 83.9797 4.89541C83.9059 4.82446 83.8321 4.82446 83.6845 4.82446C83.2417 4.82446 82.9465 4.75351 82.5776 4.54067C82.2086 4.25688 81.692 4.32783 81.3968 4.11498C81.0279 3.83119 80.6589 3.68929 80.2899 3.47645C79.7733 3.90214 79.6257 3.05076 79.183 3.12171C79.1092 3.12171 79.0354 3.05076 78.9616 2.97982C78.6664 2.76697 78.3712 2.76697 78.1498 2.97982C77.8546 3.19266 77.6332 2.69602 77.4118 3.05076C77.4118 3.05076 77.1905 2.97982 77.0429 2.90887C76.6001 2.76697 76.2311 2.55413 75.7883 2.55413C75.3456 2.55413 74.9028 2.27034 74.3862 2.27034C74.091 2.27034 73.7959 2.27034 73.5007 2.27034C73.1317 2.27034 72.8365 2.12844 72.8365 1.84465C72.6889 1.34801 72.5413 1.56086 72.2461 1.70275C72.0985 1.7737 71.8772 1.84465 71.7296 1.9156C71.6558 1.9156 71.5082 1.98654 71.4344 1.9156C71.2868 1.6318 70.5488 1.56086 70.844 0.993273C71.213 0.851377 70.844 0.709481 70.844 0.780429C70.4012 1.48991 69.6633 1.34801 68.9991 1.27706C68.6301 1.20612 68.2612 1.06422 67.966 0.851377C67.7446 0.709482 67.597 0.780429 67.4494 0.851377C67.3018 0.993273 67.0804 0.993273 66.9328 0.851377C66.7114 0.709482 66.4901 0.638534 66.2687 0.638534C65.7521 0.638534 65.3093 0.638534 64.7928 0.638534C64.6452 0.638534 64.5714 0.567586 64.4976 0.42569C64.2024 0.42569 64.0548 0.780429 63.6858 0.709481C63.4644 0.638534 63.1692 0.638534 62.9479 0.709481C62.4313 1.13517 62.0623 0.709481 61.6195 0.709481C61.5457 0.709481 61.5457 0.567586 61.4719 0.496638C61.3981 0.354742 61.3981 0.212846 61.1768 0.354742C61.103 0.42569 60.9554 0.567586 60.8816 0.638534C60.734 0.780429 60.6602 0.638534 60.5864 0.496638C60.5864 0.42569 60.5864 0.283794 60.5864 0.212846C60.5864 0.141898 60.5864 -0.141894 60.365 0.0709501C60.1436 0.212846 59.996 0.354742 59.8484 0.567586C59.5532 0.780429 59.3319 0.709481 59.0367 0.638534C58.4463 0.496638 57.9297 0.354742 57.3394 0.212846C56.749 0.0709501 56.1586 0.567586 55.5683 0.212846C54.9041 0.567586 54.1661 0.496638 53.4282 0.496638C53.2806 0.496638 53.133 0.496638 52.9854 0.567586C52.764 0.780429 52.4688 0.709481 52.1736 0.780429C51.8047 0.780429 51.3619 0.638534 51.0667 0.922325C50.9191 1.06422 50.8453 0.851377 50.6977 0.780429C50.5501 0.638534 50.3288 0.42569 50.1074 0.709481C49.6646 0.354742 49.148 0.496638 48.7052 0.496638C48.1149 0.496638 47.5245 0.354742 47.0079 0.709481C46.8603 0.780429 46.639 0.709481 46.4914 0.638534C46.27 0.496638 46.0486 0.42569 45.8272 0.638534C45.6058 0.780429 45.3844 0.851377 45.163 0.922325C44.9417 1.06422 44.7941 0.993273 44.6465 0.851377C44.4989 0.709482 44.4251 0.851377 44.2775 0.851377C42.9492 1.27707 42.7278 1.27706 41.547 1.27706C41.3257 1.27706 41.1781 1.20612 41.0305 1.13517C40.7353 1.06422 40.5877 1.41896 40.3663 1.34801C40.2187 1.27706 40.0711 1.27706 39.9235 1.27706C39.7759 1.20612 39.7021 1.06422 39.5546 1.20612C39.2594 1.41896 38.8904 1.34801 38.5952 1.48991C38.2262 1.70275 37.7834 1.84465 37.3407 1.84465C36.8241 1.9156 36.2337 1.84465 35.7172 1.84465C35.5696 1.84465 35.3482 1.6318 35.2006 1.70275C34.9792 1.7737 34.7578 1.9156 34.5364 1.9156C34.2412 1.9156 34.0199 2.27034 33.7247 2.19939C33.5033 2.12844 33.3557 2.55413 33.0605 2.34128C32.7653 2.12844 32.5439 2.55413 32.2488 2.48318C32.0274 2.41223 31.7322 2.48318 31.5108 2.48318C31.2156 2.48318 30.9942 2.76697 30.699 2.76697C30.1087 2.69602 29.5921 3.12171 29.0017 3.05076C28.559 2.97982 28.2638 3.12171 27.9686 3.47645C27.9686 3.5474 27.7472 3.61835 27.6734 3.5474C27.1568 3.19266 26.7879 3.68929 26.2713 3.61835C25.8285 3.5474 25.3119 3.61835 24.7954 3.61835C24.5002 3.61835 24.205 3.68929 23.9836 3.90214C23.6884 4.25688 23.467 4.18593 23.0981 3.97309C22.9505 3.90214 22.6553 3.90214 22.5815 3.97309C22.1387 4.32783 21.6221 4.18593 21.1794 4.18593C21.0318 4.18593 20.958 4.04403 20.958 3.90214C20.958 3.76024 20.958 3.61835 20.8842 3.47645C20.8842 3.33456 20.8104 3.33456 20.6628 3.4055C20.5152 3.5474 20.2938 3.61835 20.5152 3.97309C20.6628 4.25688 20.589 4.39877 20.2938 4.46972C20.22 4.46972 20.0724 4.46972 19.9986 4.46972C19.6297 4.46972 19.6297 4.46972 19.4821 3.97309C19.4821 3.90214 19.4821 3.90214 19.4821 3.83119C19.3345 3.5474 19.1131 3.33455 18.8179 3.33455C18.5965 3.33455 18.5227 3.68929 18.6703 4.04403C18.6703 4.11498 18.7441 4.11498 18.7441 4.18593C18.8179 4.39877 18.6703 4.61162 18.4489 4.68257C18.3013 4.75351 18.1537 4.75351 18.0799 4.61162C18.0061 4.46972 18.0061 4.32783 17.9323 4.25688C17.6372 3.90214 17.4896 3.90214 17.1206 4.32783C16.973 4.46972 16.8254 4.54067 16.604 4.39877C16.3088 4.11498 15.9399 4.18593 15.6447 4.25688C15.3495 4.32783 15.1281 4.54067 15.0543 4.82446C14.9805 4.82446 14.9067 4.75351 14.8329 4.75351C14.3163 4.46972 13.7998 4.32783 13.5046 5.03731L13.4308 5.10825C13.2832 5.03731 13.1356 4.89541 12.9142 5.10825C12.619 5.39205 12.3977 5.67584 11.9549 5.25015C11.5859 5.25015 11.0693 4.89541 10.8479 5.53394C10.8479 5.60489 10.6266 5.67584 10.479 5.67584C10.1838 5.67584 9.8886 5.74678 9.59341 5.67584C9.22443 5.67584 8.92925 6.03058 8.48647 5.95963C8.26509 5.95963 8.11749 6.17247 7.89611 6.38532C7.30574 6.811 6.78917 6.9529 5.82982 6.74006C5.68223 6.74006 5.53464 6.74006 5.38705 6.74006C5.01807 6.74006 4.87047 6.9529 4.94427 7.30764C5.01807 7.44953 5.09186 7.52048 5.16566 7.66238C5.23945 7.87522 5.23945 8.01712 5.01807 8.08807C4.13252 8.51375 3.54215 9.43608 2.43521 9.57797C2.36141 9.57797 2.28762 9.71987 2.28762 9.79082C2.21382 10.1456 1.40207 10.1456 1.62345 10.7841C1.62345 10.7841 1.40207 10.926 1.25447 10.9969C0.959291 11.2098 0.664107 11.4936 0.442719 11.7774C0.0737399 12.4159 0.221332 12.7706 0.959291 12.9125C1.25447 12.9835 1.54966 12.9125 1.84484 12.8416C2.21382 12.7706 2.43521 12.6997 2.73039 12.6997C3.09937 12.6997 3.39456 12.6287 3.68974 12.4159C3.91113 12.274 4.13251 12.203 4.3539 12.1321C4.4277 12.1321 4.50149 12.203 4.57529 12.203C4.57529 12.274 4.50149 12.274 4.50149 12.3449C4.3539 12.5578 4.13252 12.6287 3.91113 12.6997C3.61594 12.8416 3.91113 12.9125 3.98492 12.9125C4.13251 12.9125 4.28011 12.9835 4.28011 13.1254C4.3539 13.2673 4.20631 13.4801 3.91113 13.4801C3.39456 13.4092 3.09937 13.7639 2.6566 13.7639C2.36141 13.7639 2.28762 13.9058 2.14003 14.1896C2.06623 14.4024 1.91864 14.5443 2.14003 14.7572C2.28762 14.8991 2.28762 15.1119 2.36141 15.2538C2.5828 15.6085 2.36141 15.5376 2.28762 15.6085C2.21382 15.6795 2.06623 15.6795 2.06623 15.7504C1.99243 16.1052 1.84484 16.389 1.77105 16.6728C1.69725 17.0275 1.77105 17.4532 1.77105 17.8079C1.77105 18.0208 1.91864 18.1627 2.06623 18.3046C2.21382 18.5174 2.21382 18.5174 1.84484 18.7303C1.69725 18.8012 1.69725 19.014 1.77105 19.085C1.91864 19.2978 2.06623 19.4397 2.28762 19.5107C2.6566 19.5816 2.5828 19.7945 2.43521 20.0073C2.36141 20.1492 2.28762 20.2911 2.509 20.2911C2.73039 20.3621 2.87798 20.433 2.87798 20.6459C2.87798 20.8587 2.87798 21.0006 3.02558 21.1425C3.24696 21.3553 3.46835 21.5682 3.68974 21.7101C3.91113 21.9229 3.91113 21.9229 4.28011 21.6391C4.3539 21.5682 4.50149 21.3553 4.57529 21.4972C4.72288 21.781 4.87047 21.9229 5.16566 22.0648C5.23945 22.0648 5.23945 22.2067 5.09186 22.2777C4.72288 22.3486 4.57529 22.4905 4.79668 22.8452C4.94427 23.0581 4.72288 23.129 4.64909 23.3419C4.64909 23.5547 4.64909 23.6966 4.64909 23.9095C4.50149 24.6189 4.87047 25.1156 5.46084 25.3994C5.82982 25.5413 5.97741 25.8251 6.2726 25.9669C6.49398 26.0379 6.86296 25.896 7.01056 25.6832C7.08435 25.6122 7.08435 25.3994 7.30574 25.5413C7.52713 25.8251 7.74851 26.1798 7.9699 26.4636C8.26509 26.7474 8.33888 26.8183 8.70786 26.4636C8.92925 26.3217 9.00304 26.3926 9.15064 26.4636C9.37202 26.6055 9.59341 26.6055 9.8148 26.4636C9.96239 26.3217 10.1838 26.2507 10.1838 26.5345C10.11 27.1021 10.5528 27.315 10.8479 27.5278C11.0693 27.6697 11.2169 27.315 11.5121 27.3859C11.8073 27.3859 12.1025 27.3859 12.3239 27.5988C12.3977 27.6697 12.4715 27.6697 12.619 27.6697C13.357 27.7406 13.4308 27.7406 13.6522 28.0244C13.7998 28.1663 13.7998 28.3792 13.9474 28.5211C14.095 28.663 14.2426 28.7339 14.4639 28.7339C14.5377 28.7339 14.6853 28.663 14.8329 28.592C14.9805 28.5211 15.0543 28.3082 15.2019 28.3082C15.6447 28.2373 15.5709 27.9535 15.6447 27.6697C15.6447 27.5987 15.7185 27.5278 15.7923 27.5278C15.7923 27.5278 15.8661 27.5988 15.9399 27.5988C16.0137 27.5988 16.0137 27.6697 16.0137 27.6697C16.1612 28.0244 16.3088 28.3792 16.5302 28.663C16.8254 29.0177 17.4158 28.663 17.711 29.0177C17.7848 29.1596 18.0061 29.1596 18.0799 29.0177C18.3013 28.7339 18.7441 28.8758 18.8179 28.4501C18.8917 28.1663 19.2607 28.2373 19.4821 28.3082C19.6297 28.3082 19.851 28.5211 19.9986 28.592C20.3676 28.663 20.22 28.9468 20.2938 29.1596C20.5152 29.2306 20.6628 29.3724 20.8104 29.5853C20.5152 29.8691 20.6628 30.011 21.0318 30.0819C21.4008 30.5076 21.6959 30.1529 22.0649 30.0819C22.1387 30.1529 22.1387 30.2948 22.2125 30.2948C22.5077 30.3657 22.8029 30.3657 23.0981 30.3657C23.3932 30.3657 23.5408 30.2238 23.6146 30.011C23.6884 29.7981 23.9098 29.7981 24.1312 29.94C24.4264 30.2238 24.7954 30.5076 25.3119 30.5076C25.6071 30.8624 25.8285 30.3657 26.0499 30.4367C26.3451 30.5786 26.5665 30.6495 26.7879 30.3657C27.0092 30.0819 27.2306 30.0819 27.5258 30.2948C27.6734 30.4367 27.8948 30.4367 28.0424 30.5786C28.19 30.7205 28.3376 30.9333 28.4852 30.9333C28.6328 30.9333 28.7803 30.7205 28.9279 30.5786C29.0755 30.4367 29.2231 30.5786 29.2969 30.5786C29.6659 30.5076 30.0349 30.3657 30.3301 30.2948C30.3301 29.94 30.6252 29.8691 30.9204 29.7981C30.9942 29.7981 31.1418 29.6562 31.1418 29.6562C31.2894 29.7272 31.437 29.7981 31.437 29.94C31.5846 30.3657 31.806 30.5786 32.2488 30.5076C32.7653 30.3657 33.0605 30.7914 33.5033 30.7914C33.9461 30.7914 34.3888 30.6495 34.7578 30.9333C34.8316 31.0042 34.9054 31.0752 34.9792 30.9333C35.2744 30.6495 35.6434 30.7914 35.9386 30.7205C36.3813 30.7205 37.3407 30.5076 37.7097 30.2948C37.7834 30.2238 37.8572 30.2238 37.931 30.2948L38.7428 30.5076C39.038 30.7205 39.407 30.8624 39.7759 31.0043C39.9973 31.0752 40.2187 31.0043 40.2925 30.7914C40.3663 30.5786 40.4401 30.4367 40.6615 30.4367C41.0305 30.5076 41.2519 30.1529 41.6208 30.0819C41.8422 30.0819 41.9898 29.7981 42.285 29.7981C42.7278 29.7981 42.654 30.1529 42.8754 30.3657C43.1705 30.5786 43.5395 30.7914 43.8347 31.0043C44.1299 31.2171 44.2775 31.2171 44.5727 31.0752C44.8679 30.8624 45.3844 31.0042 45.6058 30.5786C45.6796 30.4367 45.6796 30.2948 45.8272 30.2238C46.0486 30.1529 46.1224 30.3657 46.27 30.4367C46.4914 30.6495 46.7865 30.9333 47.0079 31.1461C47.0817 31.2171 47.2293 31.2171 47.3031 31.2171C47.4507 31.1461 47.5245 31.0043 47.6721 31.0043C47.8197 31.0043 47.8935 31.2171 48.1887 31.0752C48.5577 30.8624 48.9266 30.7914 49.2956 31.0043C49.517 31.1461 49.6646 31.0752 49.7384 30.9333C49.886 30.7914 50.0336 30.6495 50.3288 30.7914C50.5501 30.9333 50.8453 30.9333 51.1405 30.7205C51.5095 30.5076 51.9523 30.4367 52.0261 29.8691C52.0261 29.7272 52.395 29.7272 52.5426 29.8691C52.6902 30.011 52.764 30.1529 52.9116 30.2948C53.133 30.7205 53.502 31.0043 53.871 31.359C53.9448 31.4299 54.0186 31.359 54.0923 31.2171C54.0923 31.1461 54.1661 30.9333 54.1661 31.0043C54.3875 31.0043 54.6827 31.2171 54.7565 30.7205C54.7565 30.5786 54.9041 30.3657 55.0517 30.2238C55.1993 30.011 55.5683 29.94 55.7896 30.0819C55.9372 30.1529 56.011 30.2238 56.1586 30.3657C56.38 30.6495 56.6014 30.5786 56.8966 30.3657C57.2656 30.1529 57.487 30.2238 57.7083 30.5786C57.8559 30.7914 57.9297 30.8624 58.1511 30.7914C58.4463 30.6495 58.7415 30.4367 59.0367 30.2948C59.2581 30.2238 59.4794 30.2238 59.7008 30.3657C59.8484 30.5076 59.996 30.6495 60.1436 30.7205C60.2912 30.7914 60.4388 30.4367 60.5864 30.6495C60.734 30.7914 60.9554 30.8624 61.103 30.7205C61.3981 30.3657 61.8409 30.2238 62.2099 30.0819C62.6527 29.94 63.1692 30.011 63.612 29.7272C63.6858 29.6562 63.9072 29.7272 64.0548 29.7981C64.35 29.94 64.5714 30.011 64.7928 30.1529C65.0879 30.2948 65.2355 30.2238 65.4569 30.0819C65.8259 29.5853 66.3425 29.3724 67.0066 29.4434C67.3756 29.4434 67.5232 29.6562 67.7446 29.8691C67.8184 30.011 67.8922 30.0819 67.966 30.2238C68.1874 30.1529 68.1136 29.94 68.1136 29.7272C68.1136 29.5853 68.1136 29.4434 68.1136 29.3015C68.1874 29.1596 68.335 29.0887 68.4088 29.0177C68.5563 28.8758 68.6301 29.0177 68.7777 29.0887C68.9253 29.1596 69.0729 29.1596 69.2205 29.0887C69.3681 29.0177 69.3681 28.8758 69.5895 29.0177C70.0323 29.3015 70.4012 29.3015 70.6226 28.7339C70.6226 28.663 70.7702 28.663 70.844 28.592C70.9916 28.5211 71.0654 28.4501 70.9178 28.3082C70.7702 28.1663 70.6226 28.0954 70.4012 28.0244C70.1061 27.8116 70.1061 27.5987 70.4012 27.3859C70.7702 27.0312 71.2868 27.315 71.582 26.9602C71.7296 27.0312 71.951 27.1021 72.0985 27.1731C72.2461 27.244 72.5413 27.244 72.6889 27.1731C72.9841 26.8893 73.2055 27.1731 73.4269 27.244C73.5007 27.315 73.5007 27.4569 73.5745 27.4569C73.8696 27.4569 74.1648 27.5278 74.46 27.4569C74.6076 27.4569 74.6076 27.3859 74.5338 27.244C74.3124 26.9602 74.091 26.6055 73.7959 26.3926C73.5007 26.1798 73.1317 26.0379 72.6889 26.0379C72.5413 26.0379 72.4675 25.896 72.3199 25.7541C72.2461 25.6832 72.2461 25.6122 72.3199 25.5413C72.4675 25.4703 72.9103 25.3994 73.3531 25.4703C73.5007 25.4703 73.7221 25.5413 73.7959 25.4703C74.091 25.1865 74.5338 25.1865 74.9028 25.2575C75.3456 25.2575 75.7883 25.2575 76.2311 25.2575C76.3787 25.2575 76.5263 25.1865 76.6001 25.1156C76.4525 25.0446 76.3787 24.9737 76.2311 24.9737C76.1573 24.9737 76.1573 24.9027 76.1573 24.9027L76.2311 24.8318C76.7477 24.8318 77.2643 24.6189 77.7808 24.477C77.8546 24.477 77.8546 24.477 77.9284 24.477C78.1498 24.477 78.3712 24.477 78.445 24.6189C78.5188 24.7608 78.5188 24.9027 78.5188 24.9737C78.9616 24.9737 79.0354 24.9737 79.0354 24.6189C79.0354 24.3351 79.183 24.1223 79.3305 24.0514C79.9209 23.8385 80.2899 23.3419 80.8065 22.9162C81.2492 22.5614 81.692 21.9939 82.43 22.4195C83.3155 22.0648 84.3487 22.2067 85.0866 21.4263C85.5294 21.2844 85.8246 21.0006 86.1198 20.7168C86.4887 20.2911 87.0791 20.6458 87.5219 20.433C87.7433 20.2911 88.0385 20.2911 88.1861 20.0073C87.9647 19.7235 88.0385 19.6526 88.4074 19.5816C89.0716 19.5107 89.5882 19.1559 89.9572 18.6593C90.031 18.5884 90.031 18.4465 90.031 18.3755C89.9572 18.1627 89.8834 17.9498 89.7358 17.737C89.5882 17.5241 89.4406 17.3822 89.293 17.1694C89.1454 17.0275 89.5882 16.8147 89.293 16.6018C88.8502 16.389 89.293 15.9633 88.9978 15.6795C88.924 15.6085 88.924 15.3957 88.9978 15.2538C89.293 14.7572 89.3668 14.1896 88.9978 13.693C88.8502 13.4801 88.9978 13.3382 89.0716 13.1963C89.2192 12.9835 89.293 12.6997 89.3668 12.4868C89.1454 12.3449 88.924 12.274 88.7026 12.1321C88.6288 12.0612 88.4812 12.0612 88.4074 12.0612C88.2598 11.9902 88.2598 11.9193 88.4074 11.8483C88.8502 11.6355 89.3668 11.4226 89.8096 11.2098C90.031 11.0679 89.8834 10.9969 89.7358 10.926C89.5144 10.855 89.4406 10.7131 89.4406 10.5003C89.4406 10.3584 89.5144 10.2165 89.5882 10.1456C89.662 10.2165 89.7358 10.2165 89.8096 10.2875C89.9572 10.2875 90.2523 10.0746 90.2523 10.0037C90.2523 9.93271 90.1785 9.86176 90.1047 9.86176C89.7358 9.57797 89.662 9.50702 89.9572 9.22323C90.1048 9.08134 90.3261 8.86849 90.4737 8.7266C90.5475 8.5847 90.1048 8.22996 90.3999 8.08807ZM15.2019 4.96636C15.1281 4.96636 15.0543 4.96636 15.0543 4.89541C15.0543 4.89541 15.0543 4.82446 15.0543 4.75351C15.0543 4.75351 15.0543 4.75351 15.0543 4.82446C15.1281 4.82446 15.2019 4.89541 15.2757 4.89541C15.2019 4.89541 15.2019 4.96636 15.2019 4.96636ZM16.8992 4.96636L16.8254 4.89541C16.8254 4.89541 16.8254 4.89541 16.8254 4.82446C16.8254 4.82446 16.8254 4.82446 16.8254 4.75351H16.8992C17.0468 4.89541 17.0468 4.96636 16.8992 4.96636ZM22.2863 30.011C22.2863 30.0819 22.2125 30.0819 22.1387 30.0819C22.1387 30.0819 22.1387 30.0819 22.0649 30.0819C22.0649 30.0819 22.0649 30.0819 22.1387 30.0819C22.1387 30.011 22.2125 29.94 22.2125 29.8691H22.2863C22.3601 29.94 22.2863 29.94 22.2863 30.011ZM71.2868 25.4703C71.1392 25.4703 71.0654 25.4703 71.0654 25.3284C71.0654 25.2575 71.213 25.2575 71.2868 25.2575C71.3606 25.2575 71.4344 25.3284 71.5082 25.3994C71.4344 25.3994 71.3606 25.4703 71.2868 25.4703ZM73.4269 27.0312C73.5007 26.9602 73.5745 27.0312 73.5007 27.1021C73.4269 27.1731 73.3531 27.1731 73.2793 27.1731C73.3531 27.1731 73.3531 27.0312 73.4269 27.0312Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="tour">3 Tour</span>
                </div>
                <div class="title-tour"> <a href="tour-destination-v3.html">Swizerland</a></div>
            </div>
            <div class="destination-tour center wow fadeInUp animated " data-wow-delay="0.5s">
                <a href="tour-destination-v3.html" class="destination-image">
                    <img src="{{asset('vitour/assets/images/tour/tour5.4.jpg')}}" alt="">
                </a>
                <div class="destination-tour-list">
                    <div class="tour5 ">
                        <svg width="91" height="32" viewBox="0 0 91 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M90.3999 8.08807C90.2523 7.94617 90.1785 7.80427 90.031 7.66238C89.8834 7.59143 89.662 7.59143 89.4406 7.59143C89.3668 7.59143 89.3668 7.52048 89.293 7.52048C89.3668 7.44954 89.4406 7.37859 89.5144 7.37859C89.5882 7.30764 89.662 7.30764 89.7358 7.23669C89.662 7.16574 89.662 7.09479 89.5882 7.02385C89.5144 6.9529 89.4406 6.74006 89.2192 6.88195C88.9978 7.02385 88.7764 7.0948 88.555 7.16574C88.0385 7.37859 87.6695 7.37859 87.4481 6.88195C87.3005 6.52721 87.0791 6.24342 87.0053 5.88868C87.0053 5.46299 86.6363 5.3211 86.1198 5.3211C85.8984 5.3211 85.677 5.3211 85.4556 5.53394C85.308 5.67584 85.0866 5.60489 84.939 5.46299C84.8652 5.39205 84.7914 5.3211 84.7177 5.25015C84.5701 5.03731 84.4225 5.1792 84.2749 5.25015C83.9797 5.3211 84.1273 4.96636 83.9797 4.89541C83.9059 4.82446 83.8321 4.82446 83.6845 4.82446C83.2417 4.82446 82.9465 4.75351 82.5776 4.54067C82.2086 4.25688 81.692 4.32783 81.3968 4.11498C81.0279 3.83119 80.6589 3.68929 80.2899 3.47645C79.7733 3.90214 79.6257 3.05076 79.183 3.12171C79.1092 3.12171 79.0354 3.05076 78.9616 2.97982C78.6664 2.76697 78.3712 2.76697 78.1498 2.97982C77.8546 3.19266 77.6332 2.69602 77.4118 3.05076C77.4118 3.05076 77.1905 2.97982 77.0429 2.90887C76.6001 2.76697 76.2311 2.55413 75.7883 2.55413C75.3456 2.55413 74.9028 2.27034 74.3862 2.27034C74.091 2.27034 73.7959 2.27034 73.5007 2.27034C73.1317 2.27034 72.8365 2.12844 72.8365 1.84465C72.6889 1.34801 72.5413 1.56086 72.2461 1.70275C72.0985 1.7737 71.8772 1.84465 71.7296 1.9156C71.6558 1.9156 71.5082 1.98654 71.4344 1.9156C71.2868 1.6318 70.5488 1.56086 70.844 0.993273C71.213 0.851377 70.844 0.709481 70.844 0.780429C70.4012 1.48991 69.6633 1.34801 68.9991 1.27706C68.6301 1.20612 68.2612 1.06422 67.966 0.851377C67.7446 0.709482 67.597 0.780429 67.4494 0.851377C67.3018 0.993273 67.0804 0.993273 66.9328 0.851377C66.7114 0.709482 66.4901 0.638534 66.2687 0.638534C65.7521 0.638534 65.3093 0.638534 64.7928 0.638534C64.6452 0.638534 64.5714 0.567586 64.4976 0.42569C64.2024 0.42569 64.0548 0.780429 63.6858 0.709481C63.4644 0.638534 63.1692 0.638534 62.9479 0.709481C62.4313 1.13517 62.0623 0.709481 61.6195 0.709481C61.5457 0.709481 61.5457 0.567586 61.4719 0.496638C61.3981 0.354742 61.3981 0.212846 61.1768 0.354742C61.103 0.42569 60.9554 0.567586 60.8816 0.638534C60.734 0.780429 60.6602 0.638534 60.5864 0.496638C60.5864 0.42569 60.5864 0.283794 60.5864 0.212846C60.5864 0.141898 60.5864 -0.141894 60.365 0.0709501C60.1436 0.212846 59.996 0.354742 59.8484 0.567586C59.5532 0.780429 59.3319 0.709481 59.0367 0.638534C58.4463 0.496638 57.9297 0.354742 57.3394 0.212846C56.749 0.0709501 56.1586 0.567586 55.5683 0.212846C54.9041 0.567586 54.1661 0.496638 53.4282 0.496638C53.2806 0.496638 53.133 0.496638 52.9854 0.567586C52.764 0.780429 52.4688 0.709481 52.1736 0.780429C51.8047 0.780429 51.3619 0.638534 51.0667 0.922325C50.9191 1.06422 50.8453 0.851377 50.6977 0.780429C50.5501 0.638534 50.3288 0.42569 50.1074 0.709481C49.6646 0.354742 49.148 0.496638 48.7052 0.496638C48.1149 0.496638 47.5245 0.354742 47.0079 0.709481C46.8603 0.780429 46.639 0.709481 46.4914 0.638534C46.27 0.496638 46.0486 0.42569 45.8272 0.638534C45.6058 0.780429 45.3844 0.851377 45.163 0.922325C44.9417 1.06422 44.7941 0.993273 44.6465 0.851377C44.4989 0.709482 44.4251 0.851377 44.2775 0.851377C42.9492 1.27707 42.7278 1.27706 41.547 1.27706C41.3257 1.27706 41.1781 1.20612 41.0305 1.13517C40.7353 1.06422 40.5877 1.41896 40.3663 1.34801C40.2187 1.27706 40.0711 1.27706 39.9235 1.27706C39.7759 1.20612 39.7021 1.06422 39.5546 1.20612C39.2594 1.41896 38.8904 1.34801 38.5952 1.48991C38.2262 1.70275 37.7834 1.84465 37.3407 1.84465C36.8241 1.9156 36.2337 1.84465 35.7172 1.84465C35.5696 1.84465 35.3482 1.6318 35.2006 1.70275C34.9792 1.7737 34.7578 1.9156 34.5364 1.9156C34.2412 1.9156 34.0199 2.27034 33.7247 2.19939C33.5033 2.12844 33.3557 2.55413 33.0605 2.34128C32.7653 2.12844 32.5439 2.55413 32.2488 2.48318C32.0274 2.41223 31.7322 2.48318 31.5108 2.48318C31.2156 2.48318 30.9942 2.76697 30.699 2.76697C30.1087 2.69602 29.5921 3.12171 29.0017 3.05076C28.559 2.97982 28.2638 3.12171 27.9686 3.47645C27.9686 3.5474 27.7472 3.61835 27.6734 3.5474C27.1568 3.19266 26.7879 3.68929 26.2713 3.61835C25.8285 3.5474 25.3119 3.61835 24.7954 3.61835C24.5002 3.61835 24.205 3.68929 23.9836 3.90214C23.6884 4.25688 23.467 4.18593 23.0981 3.97309C22.9505 3.90214 22.6553 3.90214 22.5815 3.97309C22.1387 4.32783 21.6221 4.18593 21.1794 4.18593C21.0318 4.18593 20.958 4.04403 20.958 3.90214C20.958 3.76024 20.958 3.61835 20.8842 3.47645C20.8842 3.33456 20.8104 3.33456 20.6628 3.4055C20.5152 3.5474 20.2938 3.61835 20.5152 3.97309C20.6628 4.25688 20.589 4.39877 20.2938 4.46972C20.22 4.46972 20.0724 4.46972 19.9986 4.46972C19.6297 4.46972 19.6297 4.46972 19.4821 3.97309C19.4821 3.90214 19.4821 3.90214 19.4821 3.83119C19.3345 3.5474 19.1131 3.33455 18.8179 3.33455C18.5965 3.33455 18.5227 3.68929 18.6703 4.04403C18.6703 4.11498 18.7441 4.11498 18.7441 4.18593C18.8179 4.39877 18.6703 4.61162 18.4489 4.68257C18.3013 4.75351 18.1537 4.75351 18.0799 4.61162C18.0061 4.46972 18.0061 4.32783 17.9323 4.25688C17.6372 3.90214 17.4896 3.90214 17.1206 4.32783C16.973 4.46972 16.8254 4.54067 16.604 4.39877C16.3088 4.11498 15.9399 4.18593 15.6447 4.25688C15.3495 4.32783 15.1281 4.54067 15.0543 4.82446C14.9805 4.82446 14.9067 4.75351 14.8329 4.75351C14.3163 4.46972 13.7998 4.32783 13.5046 5.03731L13.4308 5.10825C13.2832 5.03731 13.1356 4.89541 12.9142 5.10825C12.619 5.39205 12.3977 5.67584 11.9549 5.25015C11.5859 5.25015 11.0693 4.89541 10.8479 5.53394C10.8479 5.60489 10.6266 5.67584 10.479 5.67584C10.1838 5.67584 9.8886 5.74678 9.59341 5.67584C9.22443 5.67584 8.92925 6.03058 8.48647 5.95963C8.26509 5.95963 8.11749 6.17247 7.89611 6.38532C7.30574 6.811 6.78917 6.9529 5.82982 6.74006C5.68223 6.74006 5.53464 6.74006 5.38705 6.74006C5.01807 6.74006 4.87047 6.9529 4.94427 7.30764C5.01807 7.44953 5.09186 7.52048 5.16566 7.66238C5.23945 7.87522 5.23945 8.01712 5.01807 8.08807C4.13252 8.51375 3.54215 9.43608 2.43521 9.57797C2.36141 9.57797 2.28762 9.71987 2.28762 9.79082C2.21382 10.1456 1.40207 10.1456 1.62345 10.7841C1.62345 10.7841 1.40207 10.926 1.25447 10.9969C0.959291 11.2098 0.664107 11.4936 0.442719 11.7774C0.0737399 12.4159 0.221332 12.7706 0.959291 12.9125C1.25447 12.9835 1.54966 12.9125 1.84484 12.8416C2.21382 12.7706 2.43521 12.6997 2.73039 12.6997C3.09937 12.6997 3.39456 12.6287 3.68974 12.4159C3.91113 12.274 4.13251 12.203 4.3539 12.1321C4.4277 12.1321 4.50149 12.203 4.57529 12.203C4.57529 12.274 4.50149 12.274 4.50149 12.3449C4.3539 12.5578 4.13252 12.6287 3.91113 12.6997C3.61594 12.8416 3.91113 12.9125 3.98492 12.9125C4.13251 12.9125 4.28011 12.9835 4.28011 13.1254C4.3539 13.2673 4.20631 13.4801 3.91113 13.4801C3.39456 13.4092 3.09937 13.7639 2.6566 13.7639C2.36141 13.7639 2.28762 13.9058 2.14003 14.1896C2.06623 14.4024 1.91864 14.5443 2.14003 14.7572C2.28762 14.8991 2.28762 15.1119 2.36141 15.2538C2.5828 15.6085 2.36141 15.5376 2.28762 15.6085C2.21382 15.6795 2.06623 15.6795 2.06623 15.7504C1.99243 16.1052 1.84484 16.389 1.77105 16.6728C1.69725 17.0275 1.77105 17.4532 1.77105 17.8079C1.77105 18.0208 1.91864 18.1627 2.06623 18.3046C2.21382 18.5174 2.21382 18.5174 1.84484 18.7303C1.69725 18.8012 1.69725 19.014 1.77105 19.085C1.91864 19.2978 2.06623 19.4397 2.28762 19.5107C2.6566 19.5816 2.5828 19.7945 2.43521 20.0073C2.36141 20.1492 2.28762 20.2911 2.509 20.2911C2.73039 20.3621 2.87798 20.433 2.87798 20.6459C2.87798 20.8587 2.87798 21.0006 3.02558 21.1425C3.24696 21.3553 3.46835 21.5682 3.68974 21.7101C3.91113 21.9229 3.91113 21.9229 4.28011 21.6391C4.3539 21.5682 4.50149 21.3553 4.57529 21.4972C4.72288 21.781 4.87047 21.9229 5.16566 22.0648C5.23945 22.0648 5.23945 22.2067 5.09186 22.2777C4.72288 22.3486 4.57529 22.4905 4.79668 22.8452C4.94427 23.0581 4.72288 23.129 4.64909 23.3419C4.64909 23.5547 4.64909 23.6966 4.64909 23.9095C4.50149 24.6189 4.87047 25.1156 5.46084 25.3994C5.82982 25.5413 5.97741 25.8251 6.2726 25.9669C6.49398 26.0379 6.86296 25.896 7.01056 25.6832C7.08435 25.6122 7.08435 25.3994 7.30574 25.5413C7.52713 25.8251 7.74851 26.1798 7.9699 26.4636C8.26509 26.7474 8.33888 26.8183 8.70786 26.4636C8.92925 26.3217 9.00304 26.3926 9.15064 26.4636C9.37202 26.6055 9.59341 26.6055 9.8148 26.4636C9.96239 26.3217 10.1838 26.2507 10.1838 26.5345C10.11 27.1021 10.5528 27.315 10.8479 27.5278C11.0693 27.6697 11.2169 27.315 11.5121 27.3859C11.8073 27.3859 12.1025 27.3859 12.3239 27.5988C12.3977 27.6697 12.4715 27.6697 12.619 27.6697C13.357 27.7406 13.4308 27.7406 13.6522 28.0244C13.7998 28.1663 13.7998 28.3792 13.9474 28.5211C14.095 28.663 14.2426 28.7339 14.4639 28.7339C14.5377 28.7339 14.6853 28.663 14.8329 28.592C14.9805 28.5211 15.0543 28.3082 15.2019 28.3082C15.6447 28.2373 15.5709 27.9535 15.6447 27.6697C15.6447 27.5987 15.7185 27.5278 15.7923 27.5278C15.7923 27.5278 15.8661 27.5988 15.9399 27.5988C16.0137 27.5988 16.0137 27.6697 16.0137 27.6697C16.1612 28.0244 16.3088 28.3792 16.5302 28.663C16.8254 29.0177 17.4158 28.663 17.711 29.0177C17.7848 29.1596 18.0061 29.1596 18.0799 29.0177C18.3013 28.7339 18.7441 28.8758 18.8179 28.4501C18.8917 28.1663 19.2607 28.2373 19.4821 28.3082C19.6297 28.3082 19.851 28.5211 19.9986 28.592C20.3676 28.663 20.22 28.9468 20.2938 29.1596C20.5152 29.2306 20.6628 29.3724 20.8104 29.5853C20.5152 29.8691 20.6628 30.011 21.0318 30.0819C21.4008 30.5076 21.6959 30.1529 22.0649 30.0819C22.1387 30.1529 22.1387 30.2948 22.2125 30.2948C22.5077 30.3657 22.8029 30.3657 23.0981 30.3657C23.3932 30.3657 23.5408 30.2238 23.6146 30.011C23.6884 29.7981 23.9098 29.7981 24.1312 29.94C24.4264 30.2238 24.7954 30.5076 25.3119 30.5076C25.6071 30.8624 25.8285 30.3657 26.0499 30.4367C26.3451 30.5786 26.5665 30.6495 26.7879 30.3657C27.0092 30.0819 27.2306 30.0819 27.5258 30.2948C27.6734 30.4367 27.8948 30.4367 28.0424 30.5786C28.19 30.7205 28.3376 30.9333 28.4852 30.9333C28.6328 30.9333 28.7803 30.7205 28.9279 30.5786C29.0755 30.4367 29.2231 30.5786 29.2969 30.5786C29.6659 30.5076 30.0349 30.3657 30.3301 30.2948C30.3301 29.94 30.6252 29.8691 30.9204 29.7981C30.9942 29.7981 31.1418 29.6562 31.1418 29.6562C31.2894 29.7272 31.437 29.7981 31.437 29.94C31.5846 30.3657 31.806 30.5786 32.2488 30.5076C32.7653 30.3657 33.0605 30.7914 33.5033 30.7914C33.9461 30.7914 34.3888 30.6495 34.7578 30.9333C34.8316 31.0042 34.9054 31.0752 34.9792 30.9333C35.2744 30.6495 35.6434 30.7914 35.9386 30.7205C36.3813 30.7205 37.3407 30.5076 37.7097 30.2948C37.7834 30.2238 37.8572 30.2238 37.931 30.2948L38.7428 30.5076C39.038 30.7205 39.407 30.8624 39.7759 31.0043C39.9973 31.0752 40.2187 31.0043 40.2925 30.7914C40.3663 30.5786 40.4401 30.4367 40.6615 30.4367C41.0305 30.5076 41.2519 30.1529 41.6208 30.0819C41.8422 30.0819 41.9898 29.7981 42.285 29.7981C42.7278 29.7981 42.654 30.1529 42.8754 30.3657C43.1705 30.5786 43.5395 30.7914 43.8347 31.0043C44.1299 31.2171 44.2775 31.2171 44.5727 31.0752C44.8679 30.8624 45.3844 31.0042 45.6058 30.5786C45.6796 30.4367 45.6796 30.2948 45.8272 30.2238C46.0486 30.1529 46.1224 30.3657 46.27 30.4367C46.4914 30.6495 46.7865 30.9333 47.0079 31.1461C47.0817 31.2171 47.2293 31.2171 47.3031 31.2171C47.4507 31.1461 47.5245 31.0043 47.6721 31.0043C47.8197 31.0043 47.8935 31.2171 48.1887 31.0752C48.5577 30.8624 48.9266 30.7914 49.2956 31.0043C49.517 31.1461 49.6646 31.0752 49.7384 30.9333C49.886 30.7914 50.0336 30.6495 50.3288 30.7914C50.5501 30.9333 50.8453 30.9333 51.1405 30.7205C51.5095 30.5076 51.9523 30.4367 52.0261 29.8691C52.0261 29.7272 52.395 29.7272 52.5426 29.8691C52.6902 30.011 52.764 30.1529 52.9116 30.2948C53.133 30.7205 53.502 31.0043 53.871 31.359C53.9448 31.4299 54.0186 31.359 54.0923 31.2171C54.0923 31.1461 54.1661 30.9333 54.1661 31.0043C54.3875 31.0043 54.6827 31.2171 54.7565 30.7205C54.7565 30.5786 54.9041 30.3657 55.0517 30.2238C55.1993 30.011 55.5683 29.94 55.7896 30.0819C55.9372 30.1529 56.011 30.2238 56.1586 30.3657C56.38 30.6495 56.6014 30.5786 56.8966 30.3657C57.2656 30.1529 57.487 30.2238 57.7083 30.5786C57.8559 30.7914 57.9297 30.8624 58.1511 30.7914C58.4463 30.6495 58.7415 30.4367 59.0367 30.2948C59.2581 30.2238 59.4794 30.2238 59.7008 30.3657C59.8484 30.5076 59.996 30.6495 60.1436 30.7205C60.2912 30.7914 60.4388 30.4367 60.5864 30.6495C60.734 30.7914 60.9554 30.8624 61.103 30.7205C61.3981 30.3657 61.8409 30.2238 62.2099 30.0819C62.6527 29.94 63.1692 30.011 63.612 29.7272C63.6858 29.6562 63.9072 29.7272 64.0548 29.7981C64.35 29.94 64.5714 30.011 64.7928 30.1529C65.0879 30.2948 65.2355 30.2238 65.4569 30.0819C65.8259 29.5853 66.3425 29.3724 67.0066 29.4434C67.3756 29.4434 67.5232 29.6562 67.7446 29.8691C67.8184 30.011 67.8922 30.0819 67.966 30.2238C68.1874 30.1529 68.1136 29.94 68.1136 29.7272C68.1136 29.5853 68.1136 29.4434 68.1136 29.3015C68.1874 29.1596 68.335 29.0887 68.4088 29.0177C68.5563 28.8758 68.6301 29.0177 68.7777 29.0887C68.9253 29.1596 69.0729 29.1596 69.2205 29.0887C69.3681 29.0177 69.3681 28.8758 69.5895 29.0177C70.0323 29.3015 70.4012 29.3015 70.6226 28.7339C70.6226 28.663 70.7702 28.663 70.844 28.592C70.9916 28.5211 71.0654 28.4501 70.9178 28.3082C70.7702 28.1663 70.6226 28.0954 70.4012 28.0244C70.1061 27.8116 70.1061 27.5987 70.4012 27.3859C70.7702 27.0312 71.2868 27.315 71.582 26.9602C71.7296 27.0312 71.951 27.1021 72.0985 27.1731C72.2461 27.244 72.5413 27.244 72.6889 27.1731C72.9841 26.8893 73.2055 27.1731 73.4269 27.244C73.5007 27.315 73.5007 27.4569 73.5745 27.4569C73.8696 27.4569 74.1648 27.5278 74.46 27.4569C74.6076 27.4569 74.6076 27.3859 74.5338 27.244C74.3124 26.9602 74.091 26.6055 73.7959 26.3926C73.5007 26.1798 73.1317 26.0379 72.6889 26.0379C72.5413 26.0379 72.4675 25.896 72.3199 25.7541C72.2461 25.6832 72.2461 25.6122 72.3199 25.5413C72.4675 25.4703 72.9103 25.3994 73.3531 25.4703C73.5007 25.4703 73.7221 25.5413 73.7959 25.4703C74.091 25.1865 74.5338 25.1865 74.9028 25.2575C75.3456 25.2575 75.7883 25.2575 76.2311 25.2575C76.3787 25.2575 76.5263 25.1865 76.6001 25.1156C76.4525 25.0446 76.3787 24.9737 76.2311 24.9737C76.1573 24.9737 76.1573 24.9027 76.1573 24.9027L76.2311 24.8318C76.7477 24.8318 77.2643 24.6189 77.7808 24.477C77.8546 24.477 77.8546 24.477 77.9284 24.477C78.1498 24.477 78.3712 24.477 78.445 24.6189C78.5188 24.7608 78.5188 24.9027 78.5188 24.9737C78.9616 24.9737 79.0354 24.9737 79.0354 24.6189C79.0354 24.3351 79.183 24.1223 79.3305 24.0514C79.9209 23.8385 80.2899 23.3419 80.8065 22.9162C81.2492 22.5614 81.692 21.9939 82.43 22.4195C83.3155 22.0648 84.3487 22.2067 85.0866 21.4263C85.5294 21.2844 85.8246 21.0006 86.1198 20.7168C86.4887 20.2911 87.0791 20.6458 87.5219 20.433C87.7433 20.2911 88.0385 20.2911 88.1861 20.0073C87.9647 19.7235 88.0385 19.6526 88.4074 19.5816C89.0716 19.5107 89.5882 19.1559 89.9572 18.6593C90.031 18.5884 90.031 18.4465 90.031 18.3755C89.9572 18.1627 89.8834 17.9498 89.7358 17.737C89.5882 17.5241 89.4406 17.3822 89.293 17.1694C89.1454 17.0275 89.5882 16.8147 89.293 16.6018C88.8502 16.389 89.293 15.9633 88.9978 15.6795C88.924 15.6085 88.924 15.3957 88.9978 15.2538C89.293 14.7572 89.3668 14.1896 88.9978 13.693C88.8502 13.4801 88.9978 13.3382 89.0716 13.1963C89.2192 12.9835 89.293 12.6997 89.3668 12.4868C89.1454 12.3449 88.924 12.274 88.7026 12.1321C88.6288 12.0612 88.4812 12.0612 88.4074 12.0612C88.2598 11.9902 88.2598 11.9193 88.4074 11.8483C88.8502 11.6355 89.3668 11.4226 89.8096 11.2098C90.031 11.0679 89.8834 10.9969 89.7358 10.926C89.5144 10.855 89.4406 10.7131 89.4406 10.5003C89.4406 10.3584 89.5144 10.2165 89.5882 10.1456C89.662 10.2165 89.7358 10.2165 89.8096 10.2875C89.9572 10.2875 90.2523 10.0746 90.2523 10.0037C90.2523 9.93271 90.1785 9.86176 90.1047 9.86176C89.7358 9.57797 89.662 9.50702 89.9572 9.22323C90.1048 9.08134 90.3261 8.86849 90.4737 8.7266C90.5475 8.5847 90.1048 8.22996 90.3999 8.08807ZM15.2019 4.96636C15.1281 4.96636 15.0543 4.96636 15.0543 4.89541C15.0543 4.89541 15.0543 4.82446 15.0543 4.75351C15.0543 4.75351 15.0543 4.75351 15.0543 4.82446C15.1281 4.82446 15.2019 4.89541 15.2757 4.89541C15.2019 4.89541 15.2019 4.96636 15.2019 4.96636ZM16.8992 4.96636L16.8254 4.89541C16.8254 4.89541 16.8254 4.89541 16.8254 4.82446C16.8254 4.82446 16.8254 4.82446 16.8254 4.75351H16.8992C17.0468 4.89541 17.0468 4.96636 16.8992 4.96636ZM22.2863 30.011C22.2863 30.0819 22.2125 30.0819 22.1387 30.0819C22.1387 30.0819 22.1387 30.0819 22.0649 30.0819C22.0649 30.0819 22.0649 30.0819 22.1387 30.0819C22.1387 30.011 22.2125 29.94 22.2125 29.8691H22.2863C22.3601 29.94 22.2863 29.94 22.2863 30.011ZM71.2868 25.4703C71.1392 25.4703 71.0654 25.4703 71.0654 25.3284C71.0654 25.2575 71.213 25.2575 71.2868 25.2575C71.3606 25.2575 71.4344 25.3284 71.5082 25.3994C71.4344 25.3994 71.3606 25.4703 71.2868 25.4703ZM73.4269 27.0312C73.5007 26.9602 73.5745 27.0312 73.5007 27.1021C73.4269 27.1731 73.3531 27.1731 73.2793 27.1731C73.3531 27.1731 73.3531 27.0312 73.4269 27.0312Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="tour">3 Tour</span>
                </div>
                <div class="title-tour"> <a href="tour-destination-v3.html">Eurupe</a></div>
            </div>
            <div class="destination-tour center wow fadeInUp animated " data-wow-delay="0.6s">
                <a href="tour-destination-v3.html" class="destination-image">
                    <img src="{{asset('vitour/assets/images/tour/tour5.5.jpg')}}" alt="">
                </a>
                <div class="destination-tour-list">
                    <div class="tour6">
                        <svg width="91" height="32" viewBox="0 0 91 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M90.3999 8.08807C90.2523 7.94617 90.1785 7.80427 90.031 7.66238C89.8834 7.59143 89.662 7.59143 89.4406 7.59143C89.3668 7.59143 89.3668 7.52048 89.293 7.52048C89.3668 7.44954 89.4406 7.37859 89.5144 7.37859C89.5882 7.30764 89.662 7.30764 89.7358 7.23669C89.662 7.16574 89.662 7.09479 89.5882 7.02385C89.5144 6.9529 89.4406 6.74006 89.2192 6.88195C88.9978 7.02385 88.7764 7.0948 88.555 7.16574C88.0385 7.37859 87.6695 7.37859 87.4481 6.88195C87.3005 6.52721 87.0791 6.24342 87.0053 5.88868C87.0053 5.46299 86.6363 5.3211 86.1198 5.3211C85.8984 5.3211 85.677 5.3211 85.4556 5.53394C85.308 5.67584 85.0866 5.60489 84.939 5.46299C84.8652 5.39205 84.7914 5.3211 84.7177 5.25015C84.5701 5.03731 84.4225 5.1792 84.2749 5.25015C83.9797 5.3211 84.1273 4.96636 83.9797 4.89541C83.9059 4.82446 83.8321 4.82446 83.6845 4.82446C83.2417 4.82446 82.9465 4.75351 82.5776 4.54067C82.2086 4.25688 81.692 4.32783 81.3968 4.11498C81.0279 3.83119 80.6589 3.68929 80.2899 3.47645C79.7733 3.90214 79.6257 3.05076 79.183 3.12171C79.1092 3.12171 79.0354 3.05076 78.9616 2.97982C78.6664 2.76697 78.3712 2.76697 78.1498 2.97982C77.8546 3.19266 77.6332 2.69602 77.4118 3.05076C77.4118 3.05076 77.1905 2.97982 77.0429 2.90887C76.6001 2.76697 76.2311 2.55413 75.7883 2.55413C75.3456 2.55413 74.9028 2.27034 74.3862 2.27034C74.091 2.27034 73.7959 2.27034 73.5007 2.27034C73.1317 2.27034 72.8365 2.12844 72.8365 1.84465C72.6889 1.34801 72.5413 1.56086 72.2461 1.70275C72.0985 1.7737 71.8772 1.84465 71.7296 1.9156C71.6558 1.9156 71.5082 1.98654 71.4344 1.9156C71.2868 1.6318 70.5488 1.56086 70.844 0.993273C71.213 0.851377 70.844 0.709481 70.844 0.780429C70.4012 1.48991 69.6633 1.34801 68.9991 1.27706C68.6301 1.20612 68.2612 1.06422 67.966 0.851377C67.7446 0.709482 67.597 0.780429 67.4494 0.851377C67.3018 0.993273 67.0804 0.993273 66.9328 0.851377C66.7114 0.709482 66.4901 0.638534 66.2687 0.638534C65.7521 0.638534 65.3093 0.638534 64.7928 0.638534C64.6452 0.638534 64.5714 0.567586 64.4976 0.42569C64.2024 0.42569 64.0548 0.780429 63.6858 0.709481C63.4644 0.638534 63.1692 0.638534 62.9479 0.709481C62.4313 1.13517 62.0623 0.709481 61.6195 0.709481C61.5457 0.709481 61.5457 0.567586 61.4719 0.496638C61.3981 0.354742 61.3981 0.212846 61.1768 0.354742C61.103 0.42569 60.9554 0.567586 60.8816 0.638534C60.734 0.780429 60.6602 0.638534 60.5864 0.496638C60.5864 0.42569 60.5864 0.283794 60.5864 0.212846C60.5864 0.141898 60.5864 -0.141894 60.365 0.0709501C60.1436 0.212846 59.996 0.354742 59.8484 0.567586C59.5532 0.780429 59.3319 0.709481 59.0367 0.638534C58.4463 0.496638 57.9297 0.354742 57.3394 0.212846C56.749 0.0709501 56.1586 0.567586 55.5683 0.212846C54.9041 0.567586 54.1661 0.496638 53.4282 0.496638C53.2806 0.496638 53.133 0.496638 52.9854 0.567586C52.764 0.780429 52.4688 0.709481 52.1736 0.780429C51.8047 0.780429 51.3619 0.638534 51.0667 0.922325C50.9191 1.06422 50.8453 0.851377 50.6977 0.780429C50.5501 0.638534 50.3288 0.42569 50.1074 0.709481C49.6646 0.354742 49.148 0.496638 48.7052 0.496638C48.1149 0.496638 47.5245 0.354742 47.0079 0.709481C46.8603 0.780429 46.639 0.709481 46.4914 0.638534C46.27 0.496638 46.0486 0.42569 45.8272 0.638534C45.6058 0.780429 45.3844 0.851377 45.163 0.922325C44.9417 1.06422 44.7941 0.993273 44.6465 0.851377C44.4989 0.709482 44.4251 0.851377 44.2775 0.851377C42.9492 1.27707 42.7278 1.27706 41.547 1.27706C41.3257 1.27706 41.1781 1.20612 41.0305 1.13517C40.7353 1.06422 40.5877 1.41896 40.3663 1.34801C40.2187 1.27706 40.0711 1.27706 39.9235 1.27706C39.7759 1.20612 39.7021 1.06422 39.5546 1.20612C39.2594 1.41896 38.8904 1.34801 38.5952 1.48991C38.2262 1.70275 37.7834 1.84465 37.3407 1.84465C36.8241 1.9156 36.2337 1.84465 35.7172 1.84465C35.5696 1.84465 35.3482 1.6318 35.2006 1.70275C34.9792 1.7737 34.7578 1.9156 34.5364 1.9156C34.2412 1.9156 34.0199 2.27034 33.7247 2.19939C33.5033 2.12844 33.3557 2.55413 33.0605 2.34128C32.7653 2.12844 32.5439 2.55413 32.2488 2.48318C32.0274 2.41223 31.7322 2.48318 31.5108 2.48318C31.2156 2.48318 30.9942 2.76697 30.699 2.76697C30.1087 2.69602 29.5921 3.12171 29.0017 3.05076C28.559 2.97982 28.2638 3.12171 27.9686 3.47645C27.9686 3.5474 27.7472 3.61835 27.6734 3.5474C27.1568 3.19266 26.7879 3.68929 26.2713 3.61835C25.8285 3.5474 25.3119 3.61835 24.7954 3.61835C24.5002 3.61835 24.205 3.68929 23.9836 3.90214C23.6884 4.25688 23.467 4.18593 23.0981 3.97309C22.9505 3.90214 22.6553 3.90214 22.5815 3.97309C22.1387 4.32783 21.6221 4.18593 21.1794 4.18593C21.0318 4.18593 20.958 4.04403 20.958 3.90214C20.958 3.76024 20.958 3.61835 20.8842 3.47645C20.8842 3.33456 20.8104 3.33456 20.6628 3.4055C20.5152 3.5474 20.2938 3.61835 20.5152 3.97309C20.6628 4.25688 20.589 4.39877 20.2938 4.46972C20.22 4.46972 20.0724 4.46972 19.9986 4.46972C19.6297 4.46972 19.6297 4.46972 19.4821 3.97309C19.4821 3.90214 19.4821 3.90214 19.4821 3.83119C19.3345 3.5474 19.1131 3.33455 18.8179 3.33455C18.5965 3.33455 18.5227 3.68929 18.6703 4.04403C18.6703 4.11498 18.7441 4.11498 18.7441 4.18593C18.8179 4.39877 18.6703 4.61162 18.4489 4.68257C18.3013 4.75351 18.1537 4.75351 18.0799 4.61162C18.0061 4.46972 18.0061 4.32783 17.9323 4.25688C17.6372 3.90214 17.4896 3.90214 17.1206 4.32783C16.973 4.46972 16.8254 4.54067 16.604 4.39877C16.3088 4.11498 15.9399 4.18593 15.6447 4.25688C15.3495 4.32783 15.1281 4.54067 15.0543 4.82446C14.9805 4.82446 14.9067 4.75351 14.8329 4.75351C14.3163 4.46972 13.7998 4.32783 13.5046 5.03731L13.4308 5.10825C13.2832 5.03731 13.1356 4.89541 12.9142 5.10825C12.619 5.39205 12.3977 5.67584 11.9549 5.25015C11.5859 5.25015 11.0693 4.89541 10.8479 5.53394C10.8479 5.60489 10.6266 5.67584 10.479 5.67584C10.1838 5.67584 9.8886 5.74678 9.59341 5.67584C9.22443 5.67584 8.92925 6.03058 8.48647 5.95963C8.26509 5.95963 8.11749 6.17247 7.89611 6.38532C7.30574 6.811 6.78917 6.9529 5.82982 6.74006C5.68223 6.74006 5.53464 6.74006 5.38705 6.74006C5.01807 6.74006 4.87047 6.9529 4.94427 7.30764C5.01807 7.44953 5.09186 7.52048 5.16566 7.66238C5.23945 7.87522 5.23945 8.01712 5.01807 8.08807C4.13252 8.51375 3.54215 9.43608 2.43521 9.57797C2.36141 9.57797 2.28762 9.71987 2.28762 9.79082C2.21382 10.1456 1.40207 10.1456 1.62345 10.7841C1.62345 10.7841 1.40207 10.926 1.25447 10.9969C0.959291 11.2098 0.664107 11.4936 0.442719 11.7774C0.0737399 12.4159 0.221332 12.7706 0.959291 12.9125C1.25447 12.9835 1.54966 12.9125 1.84484 12.8416C2.21382 12.7706 2.43521 12.6997 2.73039 12.6997C3.09937 12.6997 3.39456 12.6287 3.68974 12.4159C3.91113 12.274 4.13251 12.203 4.3539 12.1321C4.4277 12.1321 4.50149 12.203 4.57529 12.203C4.57529 12.274 4.50149 12.274 4.50149 12.3449C4.3539 12.5578 4.13252 12.6287 3.91113 12.6997C3.61594 12.8416 3.91113 12.9125 3.98492 12.9125C4.13251 12.9125 4.28011 12.9835 4.28011 13.1254C4.3539 13.2673 4.20631 13.4801 3.91113 13.4801C3.39456 13.4092 3.09937 13.7639 2.6566 13.7639C2.36141 13.7639 2.28762 13.9058 2.14003 14.1896C2.06623 14.4024 1.91864 14.5443 2.14003 14.7572C2.28762 14.8991 2.28762 15.1119 2.36141 15.2538C2.5828 15.6085 2.36141 15.5376 2.28762 15.6085C2.21382 15.6795 2.06623 15.6795 2.06623 15.7504C1.99243 16.1052 1.84484 16.389 1.77105 16.6728C1.69725 17.0275 1.77105 17.4532 1.77105 17.8079C1.77105 18.0208 1.91864 18.1627 2.06623 18.3046C2.21382 18.5174 2.21382 18.5174 1.84484 18.7303C1.69725 18.8012 1.69725 19.014 1.77105 19.085C1.91864 19.2978 2.06623 19.4397 2.28762 19.5107C2.6566 19.5816 2.5828 19.7945 2.43521 20.0073C2.36141 20.1492 2.28762 20.2911 2.509 20.2911C2.73039 20.3621 2.87798 20.433 2.87798 20.6459C2.87798 20.8587 2.87798 21.0006 3.02558 21.1425C3.24696 21.3553 3.46835 21.5682 3.68974 21.7101C3.91113 21.9229 3.91113 21.9229 4.28011 21.6391C4.3539 21.5682 4.50149 21.3553 4.57529 21.4972C4.72288 21.781 4.87047 21.9229 5.16566 22.0648C5.23945 22.0648 5.23945 22.2067 5.09186 22.2777C4.72288 22.3486 4.57529 22.4905 4.79668 22.8452C4.94427 23.0581 4.72288 23.129 4.64909 23.3419C4.64909 23.5547 4.64909 23.6966 4.64909 23.9095C4.50149 24.6189 4.87047 25.1156 5.46084 25.3994C5.82982 25.5413 5.97741 25.8251 6.2726 25.9669C6.49398 26.0379 6.86296 25.896 7.01056 25.6832C7.08435 25.6122 7.08435 25.3994 7.30574 25.5413C7.52713 25.8251 7.74851 26.1798 7.9699 26.4636C8.26509 26.7474 8.33888 26.8183 8.70786 26.4636C8.92925 26.3217 9.00304 26.3926 9.15064 26.4636C9.37202 26.6055 9.59341 26.6055 9.8148 26.4636C9.96239 26.3217 10.1838 26.2507 10.1838 26.5345C10.11 27.1021 10.5528 27.315 10.8479 27.5278C11.0693 27.6697 11.2169 27.315 11.5121 27.3859C11.8073 27.3859 12.1025 27.3859 12.3239 27.5988C12.3977 27.6697 12.4715 27.6697 12.619 27.6697C13.357 27.7406 13.4308 27.7406 13.6522 28.0244C13.7998 28.1663 13.7998 28.3792 13.9474 28.5211C14.095 28.663 14.2426 28.7339 14.4639 28.7339C14.5377 28.7339 14.6853 28.663 14.8329 28.592C14.9805 28.5211 15.0543 28.3082 15.2019 28.3082C15.6447 28.2373 15.5709 27.9535 15.6447 27.6697C15.6447 27.5987 15.7185 27.5278 15.7923 27.5278C15.7923 27.5278 15.8661 27.5988 15.9399 27.5988C16.0137 27.5988 16.0137 27.6697 16.0137 27.6697C16.1612 28.0244 16.3088 28.3792 16.5302 28.663C16.8254 29.0177 17.4158 28.663 17.711 29.0177C17.7848 29.1596 18.0061 29.1596 18.0799 29.0177C18.3013 28.7339 18.7441 28.8758 18.8179 28.4501C18.8917 28.1663 19.2607 28.2373 19.4821 28.3082C19.6297 28.3082 19.851 28.5211 19.9986 28.592C20.3676 28.663 20.22 28.9468 20.2938 29.1596C20.5152 29.2306 20.6628 29.3724 20.8104 29.5853C20.5152 29.8691 20.6628 30.011 21.0318 30.0819C21.4008 30.5076 21.6959 30.1529 22.0649 30.0819C22.1387 30.1529 22.1387 30.2948 22.2125 30.2948C22.5077 30.3657 22.8029 30.3657 23.0981 30.3657C23.3932 30.3657 23.5408 30.2238 23.6146 30.011C23.6884 29.7981 23.9098 29.7981 24.1312 29.94C24.4264 30.2238 24.7954 30.5076 25.3119 30.5076C25.6071 30.8624 25.8285 30.3657 26.0499 30.4367C26.3451 30.5786 26.5665 30.6495 26.7879 30.3657C27.0092 30.0819 27.2306 30.0819 27.5258 30.2948C27.6734 30.4367 27.8948 30.4367 28.0424 30.5786C28.19 30.7205 28.3376 30.9333 28.4852 30.9333C28.6328 30.9333 28.7803 30.7205 28.9279 30.5786C29.0755 30.4367 29.2231 30.5786 29.2969 30.5786C29.6659 30.5076 30.0349 30.3657 30.3301 30.2948C30.3301 29.94 30.6252 29.8691 30.9204 29.7981C30.9942 29.7981 31.1418 29.6562 31.1418 29.6562C31.2894 29.7272 31.437 29.7981 31.437 29.94C31.5846 30.3657 31.806 30.5786 32.2488 30.5076C32.7653 30.3657 33.0605 30.7914 33.5033 30.7914C33.9461 30.7914 34.3888 30.6495 34.7578 30.9333C34.8316 31.0042 34.9054 31.0752 34.9792 30.9333C35.2744 30.6495 35.6434 30.7914 35.9386 30.7205C36.3813 30.7205 37.3407 30.5076 37.7097 30.2948C37.7834 30.2238 37.8572 30.2238 37.931 30.2948L38.7428 30.5076C39.038 30.7205 39.407 30.8624 39.7759 31.0043C39.9973 31.0752 40.2187 31.0043 40.2925 30.7914C40.3663 30.5786 40.4401 30.4367 40.6615 30.4367C41.0305 30.5076 41.2519 30.1529 41.6208 30.0819C41.8422 30.0819 41.9898 29.7981 42.285 29.7981C42.7278 29.7981 42.654 30.1529 42.8754 30.3657C43.1705 30.5786 43.5395 30.7914 43.8347 31.0043C44.1299 31.2171 44.2775 31.2171 44.5727 31.0752C44.8679 30.8624 45.3844 31.0042 45.6058 30.5786C45.6796 30.4367 45.6796 30.2948 45.8272 30.2238C46.0486 30.1529 46.1224 30.3657 46.27 30.4367C46.4914 30.6495 46.7865 30.9333 47.0079 31.1461C47.0817 31.2171 47.2293 31.2171 47.3031 31.2171C47.4507 31.1461 47.5245 31.0043 47.6721 31.0043C47.8197 31.0043 47.8935 31.2171 48.1887 31.0752C48.5577 30.8624 48.9266 30.7914 49.2956 31.0043C49.517 31.1461 49.6646 31.0752 49.7384 30.9333C49.886 30.7914 50.0336 30.6495 50.3288 30.7914C50.5501 30.9333 50.8453 30.9333 51.1405 30.7205C51.5095 30.5076 51.9523 30.4367 52.0261 29.8691C52.0261 29.7272 52.395 29.7272 52.5426 29.8691C52.6902 30.011 52.764 30.1529 52.9116 30.2948C53.133 30.7205 53.502 31.0043 53.871 31.359C53.9448 31.4299 54.0186 31.359 54.0923 31.2171C54.0923 31.1461 54.1661 30.9333 54.1661 31.0043C54.3875 31.0043 54.6827 31.2171 54.7565 30.7205C54.7565 30.5786 54.9041 30.3657 55.0517 30.2238C55.1993 30.011 55.5683 29.94 55.7896 30.0819C55.9372 30.1529 56.011 30.2238 56.1586 30.3657C56.38 30.6495 56.6014 30.5786 56.8966 30.3657C57.2656 30.1529 57.487 30.2238 57.7083 30.5786C57.8559 30.7914 57.9297 30.8624 58.1511 30.7914C58.4463 30.6495 58.7415 30.4367 59.0367 30.2948C59.2581 30.2238 59.4794 30.2238 59.7008 30.3657C59.8484 30.5076 59.996 30.6495 60.1436 30.7205C60.2912 30.7914 60.4388 30.4367 60.5864 30.6495C60.734 30.7914 60.9554 30.8624 61.103 30.7205C61.3981 30.3657 61.8409 30.2238 62.2099 30.0819C62.6527 29.94 63.1692 30.011 63.612 29.7272C63.6858 29.6562 63.9072 29.7272 64.0548 29.7981C64.35 29.94 64.5714 30.011 64.7928 30.1529C65.0879 30.2948 65.2355 30.2238 65.4569 30.0819C65.8259 29.5853 66.3425 29.3724 67.0066 29.4434C67.3756 29.4434 67.5232 29.6562 67.7446 29.8691C67.8184 30.011 67.8922 30.0819 67.966 30.2238C68.1874 30.1529 68.1136 29.94 68.1136 29.7272C68.1136 29.5853 68.1136 29.4434 68.1136 29.3015C68.1874 29.1596 68.335 29.0887 68.4088 29.0177C68.5563 28.8758 68.6301 29.0177 68.7777 29.0887C68.9253 29.1596 69.0729 29.1596 69.2205 29.0887C69.3681 29.0177 69.3681 28.8758 69.5895 29.0177C70.0323 29.3015 70.4012 29.3015 70.6226 28.7339C70.6226 28.663 70.7702 28.663 70.844 28.592C70.9916 28.5211 71.0654 28.4501 70.9178 28.3082C70.7702 28.1663 70.6226 28.0954 70.4012 28.0244C70.1061 27.8116 70.1061 27.5987 70.4012 27.3859C70.7702 27.0312 71.2868 27.315 71.582 26.9602C71.7296 27.0312 71.951 27.1021 72.0985 27.1731C72.2461 27.244 72.5413 27.244 72.6889 27.1731C72.9841 26.8893 73.2055 27.1731 73.4269 27.244C73.5007 27.315 73.5007 27.4569 73.5745 27.4569C73.8696 27.4569 74.1648 27.5278 74.46 27.4569C74.6076 27.4569 74.6076 27.3859 74.5338 27.244C74.3124 26.9602 74.091 26.6055 73.7959 26.3926C73.5007 26.1798 73.1317 26.0379 72.6889 26.0379C72.5413 26.0379 72.4675 25.896 72.3199 25.7541C72.2461 25.6832 72.2461 25.6122 72.3199 25.5413C72.4675 25.4703 72.9103 25.3994 73.3531 25.4703C73.5007 25.4703 73.7221 25.5413 73.7959 25.4703C74.091 25.1865 74.5338 25.1865 74.9028 25.2575C75.3456 25.2575 75.7883 25.2575 76.2311 25.2575C76.3787 25.2575 76.5263 25.1865 76.6001 25.1156C76.4525 25.0446 76.3787 24.9737 76.2311 24.9737C76.1573 24.9737 76.1573 24.9027 76.1573 24.9027L76.2311 24.8318C76.7477 24.8318 77.2643 24.6189 77.7808 24.477C77.8546 24.477 77.8546 24.477 77.9284 24.477C78.1498 24.477 78.3712 24.477 78.445 24.6189C78.5188 24.7608 78.5188 24.9027 78.5188 24.9737C78.9616 24.9737 79.0354 24.9737 79.0354 24.6189C79.0354 24.3351 79.183 24.1223 79.3305 24.0514C79.9209 23.8385 80.2899 23.3419 80.8065 22.9162C81.2492 22.5614 81.692 21.9939 82.43 22.4195C83.3155 22.0648 84.3487 22.2067 85.0866 21.4263C85.5294 21.2844 85.8246 21.0006 86.1198 20.7168C86.4887 20.2911 87.0791 20.6458 87.5219 20.433C87.7433 20.2911 88.0385 20.2911 88.1861 20.0073C87.9647 19.7235 88.0385 19.6526 88.4074 19.5816C89.0716 19.5107 89.5882 19.1559 89.9572 18.6593C90.031 18.5884 90.031 18.4465 90.031 18.3755C89.9572 18.1627 89.8834 17.9498 89.7358 17.737C89.5882 17.5241 89.4406 17.3822 89.293 17.1694C89.1454 17.0275 89.5882 16.8147 89.293 16.6018C88.8502 16.389 89.293 15.9633 88.9978 15.6795C88.924 15.6085 88.924 15.3957 88.9978 15.2538C89.293 14.7572 89.3668 14.1896 88.9978 13.693C88.8502 13.4801 88.9978 13.3382 89.0716 13.1963C89.2192 12.9835 89.293 12.6997 89.3668 12.4868C89.1454 12.3449 88.924 12.274 88.7026 12.1321C88.6288 12.0612 88.4812 12.0612 88.4074 12.0612C88.2598 11.9902 88.2598 11.9193 88.4074 11.8483C88.8502 11.6355 89.3668 11.4226 89.8096 11.2098C90.031 11.0679 89.8834 10.9969 89.7358 10.926C89.5144 10.855 89.4406 10.7131 89.4406 10.5003C89.4406 10.3584 89.5144 10.2165 89.5882 10.1456C89.662 10.2165 89.7358 10.2165 89.8096 10.2875C89.9572 10.2875 90.2523 10.0746 90.2523 10.0037C90.2523 9.93271 90.1785 9.86176 90.1047 9.86176C89.7358 9.57797 89.662 9.50702 89.9572 9.22323C90.1048 9.08134 90.3261 8.86849 90.4737 8.7266C90.5475 8.5847 90.1048 8.22996 90.3999 8.08807ZM15.2019 4.96636C15.1281 4.96636 15.0543 4.96636 15.0543 4.89541C15.0543 4.89541 15.0543 4.82446 15.0543 4.75351C15.0543 4.75351 15.0543 4.75351 15.0543 4.82446C15.1281 4.82446 15.2019 4.89541 15.2757 4.89541C15.2019 4.89541 15.2019 4.96636 15.2019 4.96636ZM16.8992 4.96636L16.8254 4.89541C16.8254 4.89541 16.8254 4.89541 16.8254 4.82446C16.8254 4.82446 16.8254 4.82446 16.8254 4.75351H16.8992C17.0468 4.89541 17.0468 4.96636 16.8992 4.96636ZM22.2863 30.011C22.2863 30.0819 22.2125 30.0819 22.1387 30.0819C22.1387 30.0819 22.1387 30.0819 22.0649 30.0819C22.0649 30.0819 22.0649 30.0819 22.1387 30.0819C22.1387 30.011 22.2125 29.94 22.2125 29.8691H22.2863C22.3601 29.94 22.2863 29.94 22.2863 30.011ZM71.2868 25.4703C71.1392 25.4703 71.0654 25.4703 71.0654 25.3284C71.0654 25.2575 71.213 25.2575 71.2868 25.2575C71.3606 25.2575 71.4344 25.3284 71.5082 25.3994C71.4344 25.3994 71.3606 25.4703 71.2868 25.4703ZM73.4269 27.0312C73.5007 26.9602 73.5745 27.0312 73.5007 27.1021C73.4269 27.1731 73.3531 27.1731 73.2793 27.1731C73.3531 27.1731 73.3531 27.0312 73.4269 27.0312Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="tour">3 Tour</span>
                </div>
                <div class="title-tour"><a href="tour-destination-v3.html">United state</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="center destination-explore wow fadeInUp animated">Explore our top destinations
                    voted by more than
                    <span class="text-main">100,000+</span> customers around the world.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Widget destination -->

<section class="mb--93 z-index3 relative">
    <div class="tf-container">
        <div class="callt-to-action flex-two">
            <div class="callt-to-action-content flex-three">
                <div class="image wow fadeInLeft animated ">
                    <img src="{{asset('vitour/assets/images/page/ready.png')}}" alt="Image">
                </div>
                <div class="content">
                    <h2 class="title-call wow fadeInUp animated ">Ready to adventure and enjoy natural
                    </h2>
                    <p class="des  wow fadeInUp animated">Lorem ipsum dolor sit amet, consectetur notted
                        adipisicin</p>
                </div>
            </div>
            <img src="{{asset('vitour/assets/images/page/vector4.png')}}" alt="" class="shape-ab">
            <div class="callt-to-action-button">
                <a href="#" class="get-call  wow fadeInRight animated">Let,s get started</a>
            </div>
        </div>
    </div>

</section>

<!-- Widget Video -->
<section class="widget-video relative">
    <div class="tf-container">
        <div class="row z-index3 relative">
            <div class="col-lg-12">
                <div class="video-wrap">
                    <a href="https://www.youtube.com/watch?v=n9LgeoJE4EI" class="widget-videos">
                        <h2 class="title-video center text-white font-yes">PLay the <span
                                class="text-main">video</span></h2>
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- Widget Video -->

<!-- Widget Service -->
<section class="widget-service">
    <div class="tf-container">
        <div class="row al-i-end mb-40">
            <div class="col-md-7">
                <div class="">
                    <span
                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Explore
                        the world</span>
                    <h2 class="title-heading wow fadeInUp animated">Great opportunity for <br><span
                            class="text-gray font-yes">adventure</span> & travels</h2>
                </div>
            </div>
            <div class="col-md-5">
                <p class="wow fadeInUp animated">Pellentesque habitant morbi tristique senectus netus et
                    malesuada
                    fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit
                    enim feugiat mattis.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-ld-12 relative ">
                <div class="swiper serviceSwiper relative overflow-hidden pb-60">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <i class="icon-adventures-1"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Adventure Plan</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <i class="icon-fire-2"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Secure Camping</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <svg width="69" height="55" viewBox="0 0 69 42" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M49.7274 35.8052H42.7663M49.7274 35.8052C49.7274 38.6871 52.0663 41.026 54.9482 41.026C57.83 41.026 60.1689 38.6871 60.1689 35.8052M49.7274 35.8052C49.7274 32.9234 52.0663 30.5845 54.9482 30.5845C57.83 30.5845 60.1689 32.9234 60.1689 35.8052M42.7663 35.8052H18.4026M42.7663 35.8052V11.4416M42.7663 35.8052H32.3247V11.4416H42.7663M42.7663 11.4416H53.2079L58.4287 21.8831M42.7663 11.4416H55.338C57.7152 11.4416 59.3928 9.1131 58.6445 6.8612L57.482 3.38068C57.0086 1.95714 55.6791 1 54.179 1H1V35.8052H7.96105M58.4287 21.8831L64.9407 24.4901C66.2633 25.0156 67.13 26.2999 67.13 27.72V32.3247C67.13 34.2494 65.5742 35.8052 63.6495 35.8052H60.1689M58.4287 21.8831H42.7663H32.3247M18.4026 35.8052C18.4026 38.6871 16.0637 41.026 13.1818 41.026C10.3 41.026 7.96105 38.6871 7.96105 35.8052M18.4026 35.8052C18.4026 32.9234 16.0637 30.5845 13.1818 30.5845C10.3 30.5845 7.96105 32.9234 7.96105 35.8052M7.96105 21.8831H25.3637V11.4416H7.96105V21.8831Z"
                                            stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Trailers & RV Sports</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <i class="icon-cabin-1"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Luxury cabin</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <i class="icon-adventures-1"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Adventure Plan</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <i class="icon-fire-2"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Secure Camping</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <svg width="69" height="55" viewBox="0 0 69 42" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M49.7274 35.8052H42.7663M49.7274 35.8052C49.7274 38.6871 52.0663 41.026 54.9482 41.026C57.83 41.026 60.1689 38.6871 60.1689 35.8052M49.7274 35.8052C49.7274 32.9234 52.0663 30.5845 54.9482 30.5845C57.83 30.5845 60.1689 32.9234 60.1689 35.8052M42.7663 35.8052H18.4026M42.7663 35.8052V11.4416M42.7663 35.8052H32.3247V11.4416H42.7663M42.7663 11.4416H53.2079L58.4287 21.8831M42.7663 11.4416H55.338C57.7152 11.4416 59.3928 9.1131 58.6445 6.8612L57.482 3.38068C57.0086 1.95714 55.6791 1 54.179 1H1V35.8052H7.96105M58.4287 21.8831L64.9407 24.4901C66.2633 25.0156 67.13 26.2999 67.13 27.72V32.3247C67.13 34.2494 65.5742 35.8052 63.6495 35.8052H60.1689M58.4287 21.8831H42.7663H32.3247M18.4026 35.8052C18.4026 38.6871 16.0637 41.026 13.1818 41.026C10.3 41.026 7.96105 38.6871 7.96105 35.8052M18.4026 35.8052C18.4026 32.9234 16.0637 30.5845 13.1818 30.5845C10.3 30.5845 7.96105 32.9234 7.96105 35.8052M7.96105 21.8831H25.3637V11.4416H7.96105V21.8831Z"
                                            stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Trailers & RV Sports</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tf-icon-box icon-box-style1 relative">
                                <div class="icon">
                                    <i class="icon-cabin-1"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title-icon"><a href="#">Luxury cabin</a></h4>
                                    <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                        netus et
                                        malesuada fames ac</p>
                                    <a href="#" class="icons-link">Booking Now <i
                                            class="icon-Path-77287-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Widget Service -->

<!-- Widget Feature -->
<section class="widget-feature pd-main relative">
    <img src="{{asset('vitour/assets/images/page/shape5.png')}}" alt="image" class="feature-shape">
    <div class="tf-container">
        <div class="row z-index3 relative">
            <div class="col-md-5">
                <div class="image-feature-wrap relative ">
                    <div class="image-feature relative overflow-hidden">
                        <img src="{{asset('vitour/assets/images/page/explore2.jpg')}}" alt="image" class="image">
                        <img src="{{asset('vitour/assets/images/page/shape5.1.png')}}" alt="image" class="shape-image">
                    </div>
                    <div class="exploring flex-five center">
                        <span class="font-yes text-white ">Never stop
                            Exploring</span>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="content-feature-wrap">
                    <div class="mb-40">
                        <span
                            class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">Explore
                            the
                            world</span>
                        <h2 class="title-heading mb-18 wow fadeInUp animated">Great opportunity for <br>
                            <span class="text-gray font-yes">adventure</span> & travels
                        </h2>
                        <p class="des-heading wow fadeInUp animated">Welcome to our Print 128 website!
                            We are a professional
                            and reliable printing
                            company that offers a wide range of printing services to</p>
                    </div>
                    <div class="feature-list-wrap">
                        <div class="feature-list">
                            <div class="feature-list-iteam flex-three">
                                <div class="icon flex-five">
                                    <i class="icon-fire-2"></i>
                                </div>
                                <h6><a href="#">Family Camping</a></h6>
                            </div>

                            <div class="feature-list-iteam flex-three">
                                <div class="icon flex-five">
                                    <i class="icon-Group-21"></i>
                                </div>
                                <h6><a href="#">Luxury Cabin</a></h6>
                            </div>
                            <div class="feature-list-iteam flex-three">
                                <div class="icon flex-five">
                                    <i class="icon-Group-3"></i>
                                </div>
                                <h6><a href="#">Excellent support</a></h6>
                            </div>

                            <div class="feature-list-iteam flex-three">
                                <div class="icon flex-five">
                                    <i class="icon-flexibility-1-1"></i>
                                </div>
                                <h6><a href="#">Ultimate flexibility</a></h6>
                            </div>

                            <div class="feature-list-iteam flex-three">
                                <div class="icon flex-five">
                                    <i class="icon-high-quality-1"></i>
                                </div>
                                <h6><a href="#">Quality at our core</a></h6>
                            </div>

                            <div class="feature-list-iteam flex-three">
                                <div class="icon flex-five">
                                    <i class="icon-coins-1"></i>
                                </div>
                                <h6><a href="#">Cost Friendly Tour</a></h6>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- Widget Feature -->

<!-- Widget testimonial -->
<section class="pd-main bg-1">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center m0-auto w-text-heading mb-40">
                    <span
                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Explore
                        the world</span>
                    <h2 class="title-heading wow fadeInUp animated">Amazing Featured Tour <span
                            class="text-gray font-yes">Package</span> the world</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 relative">
                <div class="swiper testimonialSwiper overflow-hidden pb-60">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="widget-testimonial-style2 relative">
                                <div class="flex-two mb-25">
                                    <div class="flex-three">
                                        <div class="image">
                                            <img src="{{asset('vitour/assets/images/testimonial/avata.jpg')}}"
                                                alt="Image Testimonial">
                                        </div>
                                        <div class="profile">
                                            <h5 class="name">Cameron Williamson</h5>
                                            <span class="job">Ceo & Founder</span>
                                        </div>
                                    </div>
                                    <div class="icon-tes flex-five">
                                        <i class="icon-Layer_x0020_1"></i>
                                    </div>
                                </div>
                                <p class="des">The most advanced revenue than this. Iwill refer everyone
                                    I like Level more and more each day because it makes my
                                    easier. It really saves me time and effort. Level is exactly
                                    business has been lacking.
                                </p>
                                <img src="{{asset('vitour/assets/images/testimonial/mask.png')}}" class="mask-tes"
                                    alt="Mask">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="widget-testimonial-style2 relative">
                                <div class="flex-two mb-25">
                                    <div class="flex-three">
                                        <div class="image">
                                            <img src="{{asset('vitour/assets/images/testimonial/avata.jpg')}}"
                                                alt="Image Testimonial">
                                        </div>
                                        <div class="profile">
                                            <h5 class="name">Cameron Williamson</h5>
                                            <span class="job">Ceo & Founder</span>
                                        </div>
                                    </div>
                                    <div class="icon-tes flex-five">
                                        <i class="icon-Layer_x0020_1"></i>
                                    </div>
                                </div>
                                <p class="des">The most advanced revenue than this. Iwill refer everyone
                                    I like Level more and more each day because it makes my
                                    easier. It really saves me time and effort. Level is exactly
                                    business has been lacking.
                                </p>
                                <img src="{{asset('vitour/assets/images/testimonial/mask.png')}}" class="mask-tes"
                                    alt="Mask">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="widget-testimonial-style2 relative">
                                <div class="flex-two mb-25">
                                    <div class="flex-three">
                                        <div class="image">
                                            <img src="{{asset('vitour/assets/images/testimonial/avata.jpg')}}"
                                                alt="Image Testimonial">
                                        </div>
                                        <div class="profile">
                                            <h5 class="name">Cameron Williamson</h5>
                                            <span class="job">Ceo & Founder</span>
                                        </div>
                                    </div>
                                    <div class="icon-tes flex-five">
                                        <i class="icon-Layer_x0020_1"></i>
                                    </div>
                                </div>
                                <p class="des">The most advanced revenue than this. Iwill refer everyone
                                    I like Level more and more each day because it makes my
                                    easier. It really saves me time and effort. Level is exactly
                                    business has been lacking.
                                </p>
                                <img src="{{asset('vitour/assets/images/testimonial/mask.png')}}" class="mask-tes"
                                    alt="Mask">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Widget testimonial -->

<!-- Widget Blog -->
<section class="pd-main">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center mb-40">
                    <span
                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Explore
                        the world</span>
                    <h2 class="title-heading wow fadeInUp animated">Updated News & Blogs</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.1s">
                <div class="tf-widget-blog blog-style1 mb-30">
                    <a href="blog-details.html" class="blog-image">
                        <img src="{{asset('vitour/assets/images/blog/bl4.jpg')}}" alt="">
                        <div class="admin flex-three">
                            <img src="{{asset('vitour/assets/images/avata/2.jpg')}}" alt="">
                            <span>By: <span class="text-main">Rasalina</span></span>
                        </div>
                    </a>
                    <div class="blog-content center">
                        <ul class="meta-list flex-five">
                            <li>
                                <i class="icon-4"></i>
                                <a href="blog-details.html"><span>02 Apr 2021</span></a>
                            </li>
                            <li>
                                <i class="icon-7"></i>
                                <a href="blog-details.html"><span>Coments (03)</span></a>
                            </li>
                        </ul>
                        <h3 class="entry-title"><a href="blog-details.html">Facebook design is dedicated
                                our
                                customers</a>
                        </h3>
                        <a href="blog-details.html" class="icon-link flex-five"><i
                                class="icon-Vector-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.2s">
                <div class="tf-widget-blog blog-style1 mb-30">
                    <a href="blog-details.html" class="blog-image">
                        <img src="{{asset('vitour/assets/images/blog/bl5.jpg')}}" alt="">
                        <div class="admin flex-three">
                            <img src="{{asset('vitour/assets/images/avata/2.jpg')}}" alt="">
                            <span>By: <span class="text-main">Rasalina</span></span>
                        </div>
                    </a>
                    <div class="blog-content center">
                        <ul class="meta-list flex-five">
                            <li>
                                <i class="icon-4"></i>
                                <a href="blog-details.html"><span>02 Apr 2021</span></a>
                            </li>
                            <li>
                                <i class="icon-7"></i>
                                <a href="blog-details.html"><span>Coments (03)</span></a>
                            </li>
                        </ul>
                        <h3 class="entry-title"><a href="blog-details.html">Facebook design is dedicated
                                our
                                customers</a>
                        </h3>
                        <a href="blog-details.html" class="icon-link flex-five"><i
                                class="icon-Vector-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.3s">
                <div class="tf-widget-blog blog-style1 mb-30">
                    <a href="blog-details.html" class="blog-image">
                        <img src="{{asset('vitour/assets/images/blog/bl6.jpg')}}" alt="">
                        <div class="admin flex-three">
                            <img src="{{asset('vitour/assets/images/avata/2.jpg')}}" alt="">
                            <span>By: <span class="text-main">Rasalina</span></span>
                        </div>
                    </a>
                    <div class="blog-content center">
                        <ul class="meta-list flex-five">
                            <li>
                                <i class="icon-4"></i>
                                <a href="blog-details.html"><span>02 Apr 2021</span></a>
                            </li>
                            <li>
                                <i class="icon-7"></i>
                                <a href="blog-details.html"><span>Coments (03)</span></a>
                            </li>
                        </ul>
                        <h3 class="entry-title"><a href="blog-details.html">Facebook design is dedicated
                                our
                                customers</a>
                        </h3>
                        <a href="blog-details.html" class="icon-link flex-five"><i
                                class="icon-Vector-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Widget Blog -->

<!-- Widget Mobie app -->
<section class="widget-mobie-app">
    <div class="tf-container">
        <div class="mobie-app overflow-hidden">
            <div class="row">
                <div class="col-md-6">
                    <div class="mobie-app-image relative">
                        <div class="mb-32">
                            <span
                                class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated ">Explore
                                the
                                world</span>
                            <h2 class="title-heading text-white wow fadeInUp animated">20% offer for
                                online 1st app booking
                            </h2>
                            <p class="des text-white wow fadeInUp animated">Welcome to our Print 128
                                website! company that</p>
                        </div>
                        <div class="flex-three mobie-wrap wow fadeInUp animated">
                            <a href="#"><img src="{{asset('vitour/assets/images/page/apple.png')}}" alt="image"></a>
                            <a href="#"><img src="{{asset('vitour/assets/images/page/adroid.png')}}" alt="image"></a>
                        </div>
                        <div class="qr-code">
                            <span class="mb-10">Or scan QR Code</span>
                            <img src="{{asset('vitour/assets/images/page/qr.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mobie-app-content relative text-end">
                        <img src="{{asset('vitour/assets/images/page/mask-mobie.png')}}" alt="image" class="mask-mobie">
                        <img src="{{asset('vitour/assets/images/page/phone.png')}}" alt="image" class="phone">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Widget Mobie app -->

</main>

@endsection
