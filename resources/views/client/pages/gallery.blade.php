@extends('client.layouts.master2')
@section('content')
    <main id="main">

        <section class="breadcumb-section">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12 center z-index1">
                        <h1 class="title">Gallery</h1>
                        <ul class="breadcumb-list flex-five">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><span>Gallery</span></li>
                        </ul>
                        <img class="bcrumb-ab" src="{{asset('vitour/assets/images/page/mask-bcrumb.png')}}" alt="">
                    </div>
                </div>

            </div>
        </section>

        <section class="gallery-page pd-main">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid-gallery">
                            <div class="item-1">
                                <div class="tf-gallery">
                                    <img src="{{asset('vitour/assets/images/gallery/gallery7.jpg')}}" alt="">
                                    <a href="{{asset('vitour/assets/images/gallery/gallery7.jpg')}}" class="btn-gallery flex-five"
                                        data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title text-white mb-10">Discovery Island</h4>
                                        <p class="sub-title">Art , Direction</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-2">
                                <div class="tf-gallery">
                                    <img src="{{asset('vitour/assets/images/gallery/gallery9.jpg')}}" alt="">
                                    <a href="{{asset('vitour/assets/images/gallery/gallery9.jpg')}}" data-fancybox="gallery"
                                        class="btn-gallery flex-five">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title text-white mb-10">Discovery Island</h4>
                                        <p class="sub-title">Art , Direction</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-3">
                                <div class="tf-gallery">
                                    <img src="{{asset('vitour/assets/images/gallery/gallery11.jpg')}}" alt="">
                                    <a href="{{asset('vitour/assets/images/gallery/gallery11.jpg')}}" class="btn-gallery flex-five "
                                        data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title text-white mb-10">Discovery Island</h4>
                                        <p class="sub-title">Art , Direction</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-4">
                                <div class="tf-gallery">
                                    <img src="{{asset('vitour/assets/images/gallery/gallery8.jpg')}}" alt="">
                                    <a href="{{asset('vitour/assets/images/gallery/gallery8.jpg')}}" class="btn-gallery flex-five"
                                        data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                    <div class="gallery-content ">
                                        <h4 class="gallery-title text-white mb-10">Discovery Island</h4>
                                        <p class="sub-title">Art , Direction</p>
                                    </div>
                                </div>

                            </div>
                            <div class="item-5">
                                <div class="tf-gallery">
                                    <img src="{{asset('vitour/assets/images/gallery/gallery10.jpg')}}" alt="">
                                    <a href="{{asset('vitour/assets/images/gallery/gallery10.jpg')}}" class="btn-gallery flex-five"
                                        data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title text-white mb-10">Discovery Island</h4>
                                        <p class="sub-title">Art , Direction</p>
                                    </div>
                                </div>

                            </div>
                            <div class="item-6">
                                <div class="tf-gallery">
                                    <img src="{{asset('vitour/assets/images/gallery/gallery12.jpg')}}" alt="">
                                    <a href="{{asset('vitour/assets/images/gallery/gallery12.jpg')}}" class="btn-gallery flex-five"
                                        data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title text-white mb-10">Discovery Island</h4>
                                        <p class="sub-title">Art , Direction</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="brand-logo-widget bg-4">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
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


        <section class="mb--93 bg-1">
            <div class="tf-container">
                <div class="callt-to-action flex-two z-index3 relative">
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
