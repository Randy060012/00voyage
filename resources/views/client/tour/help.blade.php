@extends('client.layouts.master2')
@section('content')

<main id="main">

<section class="header-search-faq bg-1">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header center">
                    <h1 class="title">Hello, what can we help you find?</h1>
                    <p class="des">Docly is a fully featured knowledge base theme for WordPress.</p>
                    <form action="https://themesflat.co/" class="form-search-faq flex">
                        <input type="search" placeholder="search what you want to know">
                        <button type="button"> <i class="icon-Vector5"></i> Search</button>
                    </form>
                    <div class="flex-five tag-wrap">
                        <span class="popular">Popular:</span>
                        <ul class="tag-popular flex-five">
                            <li>
                                <span>Coding</span>
                            </li>
                            <li>
                                <span>Traveling</span>
                            </li>
                            <li>
                                <span>aeroplane</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="inner-faq">
    <div class="tf-container">
        <div class="row">
            <div class="col-md-6">
                <div class="accordion faq-list" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Identify complex problem & resolve quickly
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse relative show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Support reps often have to write summaries before handing professional
                                guidebooks conversations over to teammates. With the summarization so sp
                                feature, a support rep can now simply click reliable printing enjoy your
                            </div>
                            <div class="icon"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Conversation summarization
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse relative collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Support reps often have to write summaries before handing professional
                                guidebooks conversations over to teammates. With the summarization so sp
                                feature, a support rep can now simply click reliable printing enjoy your
                            </div>
                            <div class="icon"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Identify complex problem & resolve quickly
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse relative collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Support reps often have to write summaries before handing professional
                                guidebooks conversations over to teammates. With the summarization so sp
                                feature, a support rep can now simply click reliable printing enjoy your
                            </div>
                            <div class="icon"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion faq-list" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFore" aria-expanded="true"
                                aria-controls="collapseFore">
                                Identify complex problem & resolve quickly
                            </button>
                        </h2>
                        <div id="collapseFore" class="accordion-collapse collapse relative show"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Support reps often have to write summaries before handing professional
                                guidebooks conversations over to teammates. With the summarization so sp
                                feature, a support rep can now simply click reliable printing enjoy your
                            </div>
                            <div class="icon"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFire"
                                aria-expanded="false" aria-controls="collapseFire">
                                Conversation summarization
                            </button>
                        </h2>
                        <div id="collapseFire" class="accordion-collapse relative collapse"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Support reps often have to write summaries before handing professional
                                guidebooks conversations over to teammates. With the summarization so sp
                                feature, a support rep can now simply click reliable printing enjoy your
                            </div>
                            <div class="icon"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Identify complex problem & resolve quickly
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse relative collapse"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Support reps often have to write summaries before handing professional
                                guidebooks conversations over to teammates. With the summarization so sp
                                feature, a support rep can now simply click reliable printing enjoy your
                            </div>
                            <div class="icon"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="brand-logo-widget bg-1">
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
            <div class="callt-to-action-content flex-Six">
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
