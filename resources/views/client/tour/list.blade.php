@extends('client.layouts.master2')
@section('content')

<main id="main">

    <section class="breadcumb-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Tour Package v4</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Tour Package</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="{{asset('vitour/assets/images/page/mask-bcrumb.png')}}" alt="">
                </div>
            </div>

        </div>
    </section>

    <!-- Widget Select Form -->
    <div class="mt--82 z-index3 relative">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-widget-slider relative">
                        <form action="https://themesflat.co/" id="search-form-slider">
                            <div class="flex wd-search">
                                <div class="form-group flex">
                                    <i class="icon-18"></i>
                                    <div class="search-bar-group">
                                        <label>Destination</label>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Melborn ,Australia</span>
                                            <ul class="list">
                                                <li data-value class="option selected">Melborn ,Australia
                                                </li>
                                                <li data-value="hanoi" class="option">HaNoi ,Vietnam</li>
                                                <li data-value="tolyo" class="option">Tokyo , Janpan</li>
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
                                                <li data-value="booking" class="option">Booking Type</li>
                                                <li data-value="booking" class="option">Booking Type</li>
                                                <li data-value="booking" class="option">Booking Type</li>
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
                                                <li data-value class="option selected">2-4 days tour</li>
                                                <li data-value="booking" class="option">3-6 days tour</li>
                                                <li data-value="booking" class="option">4-8 days tour</li>
                                                <li data-value="booking" class="option">5-10 days tour</li>
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
                                    <a href="#" class="btn-search"><i class="icon-Vector5"></i>Search</a>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Widget Select Form -->

    <!-- Widget archieve tour -->
    <section class="archieve-tour">
        <div class="tf-container">
            <form action="https://themesflat.co/" class="tf-my-listing1 mb-37">
                <div class="row align-center">
                    <div class="col-md-8">
                        <p class="showing">Showing <span class="text-main">12</span> of 21 Results</p>
                        <div class="flex-three filter-tour-package">
                            <div class="nice-select" tabindex="0">
                                <i class="icon-Vector-41"></i><span class="current">All Filter</span>
                                <ul class="list">
                                    <li data-value="" class="option selected focus">All Filter</li>
                                    <li data-value="all-filter1" class="option">All Filter 1</li>
                                    <li data-value="all-filter2" class="option">All Filter 2</li>
                                </ul>
                            </div>
                            <div class="nice-select" tabindex="0">
                                <span class="current">Dates</span>
                                <ul class="list">
                                    <li data-value="" class="option selected focus">Dates</li>
                                    <li data-value="date" class="option">Dates</li>
                                    <li data-value="date1" class="option">Dates</li>
                                </ul>
                            </div>
                            <div class="nice-select" tabindex="0">
                                <span class="current">Type</span>
                                <ul class="list">
                                    <li data-value="" class="option selected focus">Type</li>
                                    <li data-value="type" class="option">Type</li>
                                    <li data-value="type" class="option">Type</li>
                                </ul>
                            </div>
                            <div class="nice-select" tabindex="0">
                                <span class="current">Price</span>
                                <ul class="list">
                                    <li data-value="" class="option selected focus">Price</li>
                                    <li data-value="new" class="option">New</li>
                                    <li data-value="Recently Added" class="option">Recently Added</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  flex-six">
                        <div class="listing-all-wrap">
                            <div class="group-select-recently">
                                <div class="nice-select" tabindex="0">
                                    <i class="icon-Vector6"></i><span class="current">Price</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">Price</li>
                                        <li data-value="new" class="option">New</li>
                                        <li data-value="Recently Added" class="option">Recently Added</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/16.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/16.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/13.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/17.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/19.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/18.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/24.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
                <div class="col-sm-6 col-xl-3 mb-32">
                    <div class="tour-listing box-sd">
                        <a href="{{route('detail')}}" class="tour-listing-image">
                            <div class="badge-top flex-two">
                                <span class="feature">Featured</span>
                                <div class="badge-media flex-five">
                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                </div>
                            </div>
                            <img src="{{asset('vitour/assets/images/travel-list/32.jpg')}}" alt="Image Listing">

                        </a>
                        <div class="tour-listing-content">
                            <span class="map"><i class="icon-Vector4"></i>United States USA</span>
                            <h3 class="title-tour-list"><a href="{{route('detail')}}">Premium Tour From
                                    214$</a>
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
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                            stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                            stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round"
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
            <div class="row mt-20">
                <div class="col-md-12 ">
                    <ul class="tf-pagination flex-five">
                        <li>
                            <a class="pages-link" href="#"> <i class="icon-29"></i></a>
                        </li>
                        <li>
                            <a class="pages-link" href="#">1</a>
                        </li>
                        <li class="pages-item active" aria-current="page">
                            <a class="pages-link" href="#">2</a>
                        </li>
                        <li><a class="pages-link" href="#">3</a></li>
                        <li>
                            <a class="pages-link" href="#"><i class=" icon--1"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- Widget archieve tour -->

    <section class="mb--93">
        <div class="tf-container">
            <div class="callt-to-action flex-two">
                <div class="callt-to-action-content flex-three">
                    <div class="image">
                        <img src="{{asset('vitour/assets/images/page/ready.png')}}" alt="Image">
                    </div>
                    <div class="content">
                        <h2 class="title-call">Ready to adventure and enjoy natural</h2>
                        <p class="des">Lorem ipsum dolor sit amet, consectetur notted adipisicin</p>
                    </div>
                </div>
                <img src="{{asset('vitour/assets/images/page/vector4.png')}}" alt="" class="shape-ab">
                <div class="callt-to-action-button">
                    <a href="#" class="get-call">Let,s get started</a>
                </div>
            </div>
        </div>

    </section>

</main>

@endsection
