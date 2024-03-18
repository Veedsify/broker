@extends('layouts/home', [
    'title' => 'Home - CoinX',
])

@section('content')
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->

    {{-- HEADER --}}
    <x-header />
    {{-- HEADER ENDS --}}
    <!-- Hero Section Starts -->
    <section class="hero_area pt-120 pb-16 position-relative">
        <div class="container z-1">
            <div class="row justify-content-center mt-8 mt-sm-13 mt-md-0">
                <div class="col-xl-9">
                    <div class="hero_area__content pt-17 pt-sm-20 pt-lg-0 text-center">
                        <span class="fs-five py-2 px-3 px-sm-5 mb-4 wow fadeInUp">Unlock the potential of crypto. Invest
                            smarter, today.</span>
                        <h1 class="display-three mb-5 mb-md-6 wow fadeInUp">Crypto simplified. Investing empowered.
                        </h1>
                        <p class="mb-8 mb-md-10 wow fadeInUp"> Our user-friendly platform makes buying, selling, and growing
                            your crypto wealth a breeze. Invest with confidence - CoinX prioritizes security to keep your
                            investments safe. Start building your future-proof portfolio today!
                        </p>
                        <div
                            class="d-flex align-items-center justify-content-center flex-wrap gap-4 gap-md-6 mb-10 mb-md-13 wow fadeInUp">
                            <a class="hero_area__content-btnone cmn-btn px-6 px-md-8 py-3 d-center gap-3"
                                href="{{route('register')}}">Get
                                Started
                                <i class="ti ti-chevron-right fs-five px-1 bg4-color p6-color rounded-3 fw-bolder"></i>
                            </a>
                            <a class="hero_area__content-btntwo cmn-btn third-alt px-6 px-md-8 py-3 d-center gap-3"
                                href="{{route("pricingplan")}}">Explore
                                <i class="ti ti-chevron-right fs-five px-1 bg2-color rounded-3 fw-bolder"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="hero_area__thumb wow fadeInUp position-relative">
                        <iframe height="700" class="overflow-hidden rounded-5"
                            src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%5D%2C%22isTransparent%22%3Atrue%2C%22colorTheme%22%3A%22light"
                            frameborder="0"></iframe>
                        <img class="hero_area__thumb-style leftright-animation position-absolute"
                            src="/assets/images/round-image-for-home-page.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_area__shape">
            <img class="position-absolute rotated_animattwo" src="/assets/images/hero-shape.png" alt="Shape">
        </div>
        <div class="hero_area__lishtone">
            <img class="position-absolute opacity-75" src="/assets/images/lightone.png" alt="light">
        </div>
        <div class="hero_area__lishttwo">
            <img class="position-absolute opacity-75" src="/assets/images/lighttwo.png" alt="light">
        </div>
    </section>
    <!-- Hero Section Ends -->
    <!-- Brand Slider Starts -->
    <div class="brand_slider overflow-hidden pb-15 bg9-color">
        <div class="container-fluid pt-120">
            <div class="row">
                <div class="hero_area__sliderarea px-0">
                    <span class="hero_area__backgroundrote d-block"></span>
                    <div class="hero_area__sliders bg4-color">
                        <div class="swiper brad-carousel overflow-visible d-center">
                            <div class="brandslider swiper-wrapper d-flex align-items-center mt-5 mt-md-0">
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/ripple.png" alt="Brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/coinbase.png" alt="Brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/binance.png" alt="Brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/bitfinex.png" alt="Brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/coinbase.png" alt="Brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/steemit.png" alt="Brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/bitfinex.png" alt="Brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="items-wrapper">
                                        <img src="/assets/images/icon/coinbase.png" alt="Brand">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Slider Ends -->
    {{-- Why Choose Us  --}}
    <section class="web3_product how_join bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="how_join__title text-center mb-10 mb-md-15">
                    <h2 class="wow fadeInUp mb-5">Why Choose Us</h2>
                    <p class="w-md-75">Coinx is a United States Based Registered Investment platform for regular
                        Investors. Our experienced team of dedicated developers, traders and analysts who involved in crypto
                        & Forex trading. You can make profit on a daily basis or after the end of investment period.</p>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/subscription.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">Profitable</h4>
                        <p class="mb-6 mb-md-8">Our investment plans are best to generate maximum profits with minimum
                            investment.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/snapshot.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">Fast Withdrawal</h4>
                        <p class="mb-6 mb-md-8">Our all payment type is Instant at any time.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/lottery.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">Advanced Security</h4>
                        <p class="mb-6 mb-md-8">We have secured by SiteLock and anti DDoS protection by Cloudflare. so our
                            online service will be available 24/7.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/redemption.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">Support Service</h4>
                        <p class="mb-6 mb-md-8">Customer support service is available 24/7 and our support team always
                            ready to help you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Why Choose Us --}}
    <section class="bg5-color pt-120 pb-120">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 p-5">
                    <img src="{{ asset('assets/images/crypto.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="p-2 p-md-5 ">
                        <h3 class="mb-5">IT'S AMAZING FINANCIAL PLACE FOR GROW UP YOUR INCOME</h3>
                        <h5 class="mb-5 text-pretty p1-color">We are professionally engaged in finances and trading,
                            and have a large experience of the investment Industry.</h5>
                        <p class="mb-5 lh-lg fw-normal">Apxcrypfield is an investment business platform developed under the
                            control of an
                            experienced team of highly qualified financial experts and professional traders for private
                            highly profitable online investments. We are very proud to state that our clientele base cuts
                            across financial institutions, individuals, and several other corporate institutions. We are
                            determined to provide the best service to our clients and deliver a very lucrative source of
                            income to our investors.</p>
                        <div class="row">
                            <div class="col-md-6 d-flex gap-3">
                                <a href="#" class="btn cmn-btn fourth-alt rounded-1 btn-lg">Read More</a>
                                <a href="" class="btn cmn-btn rounded-1 btn-lg">Signup Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 py-4">
                    <div class="py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/custom/datereactor.gif') }}" alt="">
                            </div>
                            <div class="col-8">
                                <h4 class="mb-4">Registered Company</h4>
                                <p class="text-left">
                                    Coinx Registered by United States Govt. Reg No: #89374372.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-4">
                    <div class="py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/custom/applause.gif') }}" alt="">
                            </div>
                            <div class="col-8">
                                <h4 class="mb-4">Easy To Use</h4>
                                <p class="text-left">
                                    Unlock your earning potential. Our user-friendly website makes profitable investing
                                    simple.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-4">
                    <div class="py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/custom/chart.gif') }}" alt="">
                            </div>
                            <div class="col-8">
                                <h4 class="mb-4">High Profitability</h4>
                                <p class="text-left">
                                    We provide profit you with 10% - 80% interest of your investment capital.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore More -->
    <section class="web3_product how_join bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="how_join__title text-center mb-10 mb-md-15">
                    <h2 class="wow fadeInUp">Explore Coinx Tiers</h2>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="p-6 p-md-8 rounded-20 br2 position-relative wow fadeInUp">
                        <div class="pricing_plan__cards-icon mb-3">
                            <img src="/assets/images/icon/pricing_plan3.png" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6">Amateur plan</h4>
                        <div class="pricing_plan__cards-price d-flex align-items-center gap-3 mb-5 mb-md-6">
                            <h1 class="p1-color">10%</h1>
                            <span>month</span>
                        </div>
                        <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                            <ul class="d-flex flex-column gap-4">
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Full platform access</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Flexible subscription options</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>24/7 customer support</p>
                                </li>
                                <li class="d-flex align-items-center gap-3 opacity-50">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Regular updates & improvements</p>
                                </li>
                                <li class="d-flex align-items-center gap-3 opacity-50">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Premium educational resources</p>
                                </li>
                            </ul>
                        </div>
                        <div class="pricing_plan__cards-btn">
                            <button type="button" class="rounded-2 py-3 px-6 p1-color br4 w-100">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class=" p-6 p-md-8 rounded-20 br2 position-relative wow fadeInUp">
                        <div class="pricing_plan__cards-icon mb-3">
                            <img src="/assets/images/icon/pricing_plan2.png" alt="Icons">
                            <img src="/assets/images/icon/pricing_plan3.png" class="picon" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6">Starter Plan</h4>
                        <div class="pricing_plan__cards-price d-flex align-items-center gap-3 mb-5 mb-md-6">
                            <h1 class="p1-color">25%</h1>
                            <span>month</span>
                        </div>
                        <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                            <ul class="d-flex flex-column gap-4">
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Full platform access</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Flexible subscription options</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>24/7 customer support</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Regular updates & improvements</p>
                                </li>
                                <li class="d-flex align-items-center gap-3 opacity-50">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Premium educational resources</p>
                                </li>
                            </ul>
                        </div>
                        <div class="pricing_plan__cards-btn">
                            <button type="button" class="rounded-2 py-3 px-6 p1-color br4 w-100">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class=" p-6 p-md-8 rounded-20 br2 position-relative wow fadeInUp">
                        <div class="pricing_plan__cards-icon mb-3">
                            <img src="/assets/images/icon/pricing_plan2.png" alt="Icons">
                            <img src="/assets/images/icon/pricing_plan3.png" class="picon" alt="Icons">
                            <img src="/assets/images/icon/pricing_plan4.png" class="picon" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6">Enterprise Plan</h4>
                        <div class="pricing_plan__cards-price d-flex align-items-center gap-3 mb-5 mb-md-6">
                            <h1 class="p1-color">50%</h1>
                            <span>month</span>
                        </div>
                        <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                            <ul class="d-flex flex-column gap-4">
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Full platform access</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Flexible subscription options</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>24/7 customer support</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Regular updates & improvements</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Premium educational resources</p>
                                </li>
                            </ul>
                        </div>
                        <div class="pricing_plan__cards-btn">
                            <button type="button" class="rounded-2 py-3 px-6 p1-color br4 w-100">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="pricing_plan__chooseexpert rounded-20 br2 px-3 px-sm-6 px-md-8 pt-3 pt-sm-6 pt-md-8 pb-0 pb-md-3">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="pricing_plan__choose p-3 p-sm-6 p-md-8 wow fadeInUp">
                                    <h2 class="mb-5 mb-md-6">Choose your plan</h2>
                                    <p class="mb-5 mb-md-6">Trading cryptocurrencies from your phone offers convenience
                                        and flexibility. The rise has opened up opportunities in cryptocurrency world.
                                    </p>
                                    {{-- <div class="pricing_plan__choose-switch d-flex align-items-center gap-3">
                                        <span class="fw-bold roboto pricing_plan__choose-monthly">Monthly</span>
                                        <div class="mb-4">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <span class="fw-bold roboto">Yearly</span>
                                    </div> --}}
                                    <div class="pricing_plan__choose-price d-flex align-items-center gap-2 mb-5 mb-md-6">
                                        <h1 class="mb-4">80%</h1>
                                        <span class="fw-bold roboto">/ month</span>
                                    </div>
                                    <div class="pricing_plan__choose-btn">
                                        <button type="button" class="cmn-btn py-3 px-6 w-100">Get Started</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="pricing_plan__expert py-8 pe-6 pe-md-8 wow fadeInUp">
                                    <h2 class="mb-5 mb-md-6">Gold Plan</h2>
                                    <p class="mb-5 mb-md-6">Trading cryptocurrencies from your phone offers
                                        convenience and flexibility. The rise has opened up opportunities in
                                        cryptocurrency world.</p>
                                    <span class="fs-four fw-bolder mb-5 mb-md-6">Whats Included?</span>
                                    <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                                        <ul class="d-flex flex-column gap-4">
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>Full platform access</p>
                                            </li>
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>Flexible subscription options</p>
                                            </li>
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>24/7 customer support</p>
                                            </li>
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>Regular updates & improvements</p>
                                            </li>
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>Premium educational resources</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center mt-2 mt-md-4">
                        <a href="{{ route('pricingplan') }}"
                            class="cmn-btn py-2 px-5 px-md-6 d-inline-flex justify-content-center align-items-center roboto">VIEW
                            MORE <i class="ti ti-chevron-right fs-four"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Coinx Web3 Products Ends -->
    <!-- How to get started Starts -->
    <section class="get_started pt-120 pb-120 bg2-color">
        <div class="container">
            <div
                class="row justify-content-center justify-content-sm-between align-items-center gy-5 gy-md-6 mb-10 mb-mb-15 pb-8 pb-md-10">
                <div class="col-lg-5 col-lg-5 col-xxl-4">
                    <h2 class="text-center text-sm-start wow fadeInUp">How to get started</h2>
                </div>
                <div class="col-lg-7 col-lg-6 col-xxl-5">
                    <p class="roboto text-center text-sm-start wow fadeInUp">Our comprehensive cybersecurity platform,
                        driven by
                        artificial intelligence, not only safeguards your organization but also educates your workforce.
                    </p>
                </div>
            </div>
            <div class="row bg1-color rounded-4">
                <div class="col-md-6 col-xl-4 col-xxl-3 p-xxl-0">
                    <div class="get_started__item px-5 py-13 text-center position-relative wow fadeInUp">
                        <span class="get_started__item-icn py-3 px-4 rounded-5 bg1-color mb-5 mb-md-6">
                            <i class="ti ti-user fs-four"></i>
                        </span>
                        <h4 class="p1-color mb-5 mb-md-6">Create account</h4>
                        <span class="roboto mb-8 mb-mb-10 d-block">Sign in to Bitco to register a new profile. the
                            verification process.</span>
                        <button class="cmn-btn third-alt py-3 px-5 px-md-6">Register now</button>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3 p-xxl-0">
                    <div class="get_started__item px-5 py-13 text-center position-relative wow fadeInUp">
                        <span class="get_started__item-icn py-3 px-4 rounded-5 bg1-color mb-5 mb-md-6">
                            <i class="ti ti-shield-filled fs-four"></i>
                        </span>
                        <h4 class="p1-color mb-5 mb-md-6">Verify your identity</h4>
                        <span class="roboto mb-8 mb-mb-10 d-block">Spend less than five minutes completing the
                            verification process.</span>
                        <button class="cmn-btn third-alt py-3 px-5 px-md-6">Register now</button>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3 p-xxl-0">
                    <div class="get_started__item px-5 py-13 text-center position-relative wow fadeInUp">
                        <span class="get_started__item-icn py-3 px-4 rounded-5 bg1-color mb-5 mb-md-6">
                            <i class="ti ti-home-dollar fs-four"></i>
                        </span>
                        <h4 class="p1-color mb-5 mb-md-6">Deposit and buy crypto</h4>
                        <span class="roboto mb-8 mb-mb-10 d-block">Spend less than five minutes completing the
                            verification process.</span>
                        <button class="cmn-btn third-alt py-3 px-5 px-md-6">Register now</button>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3 p-xxl-0">
                    <div class="get_started__item px-5 py-13 text-center position-relative wow fadeInUp">
                        <span class="get_started__item-icn py-3 px-4 rounded-5 bg1-color mb-5 mb-md-6">
                            <i class="ti ti-user fs-four"></i>
                        </span>
                        <h4 class="p1-color mb-5 mb-md-6">Start your journey</h4>
                        <span class="roboto mb-8 mb-mb-10 d-block">Spend less than five minutes completing the
                            verification process.</span>
                        <button class="cmn-btn third-alt py-3 px-5 px-md-6">Register now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to get started Ends -->
    <!-- Discover Web3 starts -->
    <section class="discover_web3 pools_tables pt-120 pb-120 bg9-color">
        <div class="container">
            <div class="row">
                <div
                    class="discover_web3__title pools_table__title mb-5 mb-md-6 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap gap-5">
                    <div class="discover_web3__title-left">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">Discover Web3</h2>
                        <p class="roboto wow fadeInUp">Access DApps via the Bybit Wallet extension or the respective
                            mobile app</p>
                    </div>
                    <a href="staking.html" class="cmn-btn py-2 py-md-3 px-5 px-md-6 wow fadeInUp">VIEW ALL</a>
                </div>
                <div class="discover_web3__part pools_table__part">
                    <div class="singletab">
                        <ul
                            class="tablinks d-flex align-items-center gap-5 gap-sm-10 gap-md-15 gap-lg-19 mb-6 mb-md-8 wow fadeInUp">
                            <li class="nav-links">
                                <button class="tablink clickable-active active">Defi</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink clickable-active">GameFi</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink clickable-active">NFT</button>
                            </li>
                        </ul>
                        <div class="tabcontents wow fadeInUp">
                            <div class="tabitem active overflow-auto">
                                <div class="pools_table__totalitem">
                                    <table>
                                        <tr>
                                            <th>Rankings</th>
                                            <th>Blockchain</th>
                                            <th>Token Price</th>
                                            <th>24H Volume</th>
                                            <th>Market Cap</th>
                                            <th>TVL</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>1</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="staking-details.html" class="roboto fw-bold">Milton
                                                            Wagner</a>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$936.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$218 M</td>
                                            <td>$79.5 B</td>
                                            <td>005 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>2</span>
                                                        <img src="/assets/images/icon/cryptocurrency.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Calvin Peters</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$215.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$141 M</td>
                                            <td>$147.5 B</td>
                                            <td>$255 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>3</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Mason Patton</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$912.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$155 M</td>
                                            <td>$28.5 B</td>
                                            <td>392 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>4</span>
                                                        <img src="/assets/images/icon/cryptocurrency.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Alfred Kelley</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$640.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$198 M</td>
                                            <td>$215.5 B</td>
                                            <td>$631 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>5</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Alejandro Hogan</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$198.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$82 M</td>
                                            <td>330.59 B</td>
                                            <td>912 B</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tabitem overflow-auto">
                                <div class="pools_table__totalitem">
                                    <table>
                                        <tr>
                                            <th>Rankings</th>
                                            <th>Blockchain</th>
                                            <th>Token Price</th>
                                            <th>24H Volume</th>
                                            <th>Market Cap</th>
                                            <th>TVL</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>1</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Milton Wagner</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$936.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$218 M</td>
                                            <td>$79.5 B</td>
                                            <td>005 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>2</span>
                                                        <img src="/assets/images/icon/cryptocurrency.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Calvin Peters</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$215.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$141 M</td>
                                            <td>$147.5 B</td>
                                            <td>$255 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>3</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Mason Patton</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$912.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$155 M</td>
                                            <td>$28.5 B</td>
                                            <td>392 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>4</span>
                                                        <img src="/assets/images/icon/cryptocurrency.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Alfred Kelley</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$640.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$198 M</td>
                                            <td>$215.5 B</td>
                                            <td>$631 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>5</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Alejandro Hogan</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$198.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$82 M</td>
                                            <td>330.59 B</td>
                                            <td>912 B</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tabitem overflow-auto">
                                <div class="pools_table__totalitem">
                                    <table>
                                        <tr>
                                            <th>Rankings</th>
                                            <th>Blockchain</th>
                                            <th>Token Price</th>
                                            <th>24H Volume</th>
                                            <th>Market Cap</th>
                                            <th>TVL</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>1</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Milton Wagner</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$936.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$218 M</td>
                                            <td>$79.5 B</td>
                                            <td>005 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>2</span>
                                                        <img src="/assets/images/icon/cryptocurrency.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Calvin Peters</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$215.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$141 M</td>
                                            <td>$147.5 B</td>
                                            <td>$255 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>3</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Mason Patton</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$912.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$155 M</td>
                                            <td>$28.5 B</td>
                                            <td>392 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>4</span>
                                                        <img src="/assets/images/icon/cryptocurrency.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Alfred Kelley</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$640.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$198 M</td>
                                            <td>$215.5 B</td>
                                            <td>$631 B</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <span>5</span>
                                                        <img src="/assets/images/icon/cryptocurrency56304.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Alejandro Hogan</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span>$198.7</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-seven p1-color">+4.65%</span>
                                                    <i class="ti ti-arrow-narrow-up fs-five p1-color"></i>
                                                </div>
                                            </td>
                                            <td>$82 M</td>
                                            <td>330.59 B</td>
                                            <td>912 B</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discover Web3 ends -->
    <!-- Trust and Security Starts -->
    <section class="trust_security pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end justify-content-between gy-5 gy-md-6 mb-10 mb-md-15">
                <div class="col-lg-7 col-xxl-6">
                    <div class="trust_security__title wow fadeInUp">
                        <h2>Trust and Security in Web3</h2>
                        <h2 class="trust_security__title-tstyle">Crypto Exchange</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <p class="wow fadeInUp">Our comprehensive cybersecurity platform, driven by artificial
                        intelligence,
                        not only safeguards
                        your organization.</p>
                </div>
            </div>
            <div class="row gy-5 gy-md-6 justify-content-center">
                <div class="col-lg-8">
                    <div class="row gy-5 gy-md-6 justify-content-center">
                        <div class="col-12">
                            <div class="position-relative wow fadeInUp">
                                <img src="/assets/images/support227.png" alt="Image">
                                <div
                                    class="d-flex align-items-center justify-content-between gap-3  position-absolute bottom-0 start-0 ps-5 ps-md-6 pb-8 pb-md-10 pe-3 pe-md-4 w-100 flex-wrap">
                                    <a href="javascript:void(0)">
                                        <h3>24/7 Support</h3>
                                    </a>
                                    <p>Count on us for round-the-clock support, ensuring help <br> whenever you need it.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative wow fadeInUp">
                                <img src="/assets/images/trade.png" alt="Image">
                                <a href="javascript:void(0)">
                                    <h3
                                        class="d-flex align-items-center justify-content-between gap-3  position-absolute top-0 start-0 ps-5 ps-md-6 pt-8 pt-md-10 pe-3 pe-md-4 w-100">
                                        Trade Algorithm</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative wow fadeInUp">
                                <img src="/assets/images/trustedsecure.png" alt="Image">
                                <a href="javascript:void(0)">
                                    <h3
                                        class="d-flex align-items-center justify-content-between gap-3  position-absolute top-0 start-0 ps-5 ps-md-6 pt-8 pt-md-10 pe-3 pe-md-4 w-100">
                                        Trusted & Secure</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row gy-5 gy-md-6 justify-content-center">
                        <div class="col-md-6 col-lg-12">
                            <div class="position-relative wow fadeInUp">
                                <img src="/assets/images/cardtocrypto.png" alt="Image">
                                <a href="javascript:void(0)">
                                    <h3
                                        class="position-absolute top-0 start-0 ps-5 ps-md-6 pt-8 pt-md-10 pe-3 pe-md-4 w-100">
                                        Card-to-crypto purchases</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="position-relative wow fadeInUp">
                                <img src="/assets/images/automatically.png" alt="Image">
                                <a href="javascript:void(0)">
                                    <h3
                                        class="position-absolute bottom-0 start-0 ps-5 ps-md-6 pb-8 pb-md-10 pe-3 pe-md-4 w-100">
                                        Automatically</h3>
                                </a>
                                <a href="javascript:void(0)"
                                    class="trust_security__button cmn-btn px-3 py-2 position-absolute end-0 top-0 rounded-5 mt-5 mt-md-6 me-5 me-md-6"><i
                                        class="ti ti-arrow-up-right fs-four"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trust and Security Ends -->
    <!-- Your one-step shop for crypto trading starts -->
    <section class="one_stepshop bg4-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6 align-items-end justify-content-between mb-10 mb-md-15">
                <div class="col-md-7 col-lg-6">
                    <h2 class="wow fadeInUp">Certified Trading Experts</h2>
                </div>
                <div class="col-md-4 col-xl-3 col-xxl-2 text-md-end">
                    <a href="pricing-plan.html" class="cmn-btn py-3 px-5 px-md-6">More<i
                            class="ti ti-chevron-right fs-five"></i></a>
                </div>
            </div>
            <div class="row gy-5 gy-md-6 justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="one_stepshop__item br2 rounded-4 py-8 py-md-10 px-6 px-md-8 text-center wow fadeInUp">
                        <img class="mb-4 mb-md-5" src="/assets/images/icon/radeallassets.png" alt="Icon">
                        <h4 class="mb-4 mb-md-5">Trade all the trending assets</h4>
                        <p class="mb-6 mb-md-8">Discover over 400 cryptocurrencies including all the trending new
                            listings.</p>
                        <div class="d-flex align-items-center justify-content-center gap-1">
                            <span class="fs-four">400+</span>
                            <span class="roboto">cryptocurrencies</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="one_stepshop__item br2 rounded-4 py-8 py-md-10 px-6 px-md-7 text-center wow fadeInUp">
                        <img class="mb-4 mb-md-5" src="/assets/images/icon/hedgepoloniex.png" alt="Icon">
                        <h4 class="mb-4 mb-md-5">Hedge with Poloniex Futures</h4>
                        <p class="mb-6 mb-md-8">Discover over 400 cryptocurrencies including all the trending new
                            listings.</p>
                        <div class="d-flex align-items-center justify-content-center gap-1">
                            <span class="fs-four">100x</span>
                            <span class="roboto">Max leverage</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="one_stepshop__item br2 rounded-4 py-8 py-md-10 px-6 px-md-8 text-center wow fadeInUp">
                        <img class="mb-4 mb-md-5" src="/assets/images/icon/crossmargin.png" alt="Icon">
                        <h4 class="mb-4 mb-md-5">Cross Margin Trading</h4>
                        <p class="mb-6 mb-md-8">Discover over 400 cryptocurrencies including all the trending new
                            listings.</p>
                        <div class="d-flex align-items-center justify-content-center gap-1">
                            <span class="roboto">cryptocurrencies</span>
                            <span class="fs-four">1%</span>
                            <span class="roboto">cryptocurrencies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Your one-step shop for crypto trading ends -->
    <!-- Life in the digital world Starts -->
    <section class="life_digital pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center pb-10 pb-sm-15 pb-md-20">
                <div class="col-xl-6">
                    <div class="life_digital__title text-center">
                        <span class="bg1-color rounded-20 py-2 px-5 mb-5 mb-md-6 wow fadeInUp">Blockchain
                            Technology</span>
                        <h2 class="wow fadeInUp">Life in the digital world</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div
                    class="counter_section__area d-flex align-items-center justify-content-center justify-content-lg-between flex-wrap flex-lg-nowrap gap-5 gap-md-10">
                    <div class="counter_section__item">
                        <div
                            class="hero_area__countdown mb-3 mb-md-5 counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number display-three fw_500"
                                data-odometer-final="8327"></span>
                        </div>
                        <h4 class="text-center mb-5 mb-md-6">Market price</h4>
                        <p class="text-center">Claritas est etiam processus dynamicus, sequitur consuetudium lectorum.
                        </p>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-lg-block"></span>
                    <div class="counter_section__item">
                        <div
                            class="hero_area__countdown mb-3 mb-md-5 counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number display-three fw_500"
                                data-odometer-final="16"></span>
                            <span class="display-three fw_500">mb</span>
                        </div>
                        <h4 class="text-center mb-5 mb-md-6">Average block size</h4>
                        <p class="text-center">Claritas est etiam processus dynamicus, sequitur consuetudium lectorum.
                        </p>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-lg-block"></span>
                    <div class="counter_section__item">
                        <div
                            class="hero_area__countdown mb-3 mb-md-5 counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number display-three fw_500"
                                data-odometer-final="8327"></span>
                        </div>
                        <h4 class="text-center mb-5 mb-md-6">Clients worldwide</h4>
                        <p class="text-center">Claritas est etiam processus dynamicus, sequitur consuetudium lectorum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Life in the digital world Ends -->
    <!-- Ready to Exchange Starts -->
    <section class="ready_exhange pt-120 pb-120 bg4-color position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7 col-xxl-6">
                    <div class="ready_exhange__content text-center">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">Ready to Exchange?</h2>
                        <p class="mb-8 mb-md-10 wow fadeInUp">Unlock your Coinx account now to trade crypto
                            seamlessly,
                            without any
                            fees for buying, selling, or exchanging. Get started today!</p>
                        <div
                            class="ready_exhange__changenow d-flex align-items-center justify-content-center gap-4 gap-sm-8 gap-lg-10">
                            <a href="swap.html" class="cmn-btn py-3 px-5 px-6 wow fadeInUp">
                                Exchange Now
                            </a>
                            <div class="ready_exhange__changenow-brand wow fadeInUp">
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-google-play p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-apple p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-pinterest p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-behance p1-color fs-three"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready to Exchange Ends -->
    <!-- Rewards FAQs Starts -->
    <section class="rewards_faq pt-120 pb-120 position-relative">
        <div class="container">
            <div class="row align-items-center justify-content-center gy-8">
                <div class="col-xl-7">
                    <div class="rewards_faq__content">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">FAQs</h2>
                        <p class="roboto mb-8 mb-md-10 wow fadeInUp">Explore our FAQs for fast, informative answers to
                            frequently
                            asked questions and common concerns.</p>
                        <div class="accordion-section">
                            <div class="accordion-single accsingle mb-5 mb-md-6 wow fadeInUp">
                                <h5 class="header-area d-flex align-items-center justify-content-between">
                                    <button
                                        class="accordion-btn d-flex align-items-start position-relative w-100 fs-five fw-bolder text-start"
                                        type="button">
                                        What currencies does the Coinx Exchange support?
                                    </button>

                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>These are traditional online platforms where users <br> create accounts and
                                            trade </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single accsingle mb-5 mb-md-6 wow fadeInUp">
                                <h5 class="header-area d-flex align-items-center justify-content-between">
                                    <button
                                        class="accordion-btn d-flex align-items-start position-relative w-100 fs-five fw-bolder text-start"
                                        type="button">
                                        What is the Coinx Exchange?
                                    </button>

                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>These are traditional online platforms where users <br> create accounts and
                                            trade </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single accsingle mb-5 mb-md-6 wow fadeInUp">
                                <h5 class="header-area d-flex align-items-center justify-content-between">
                                    <button
                                        class="accordion-btn d-flex align-items-start position-relative w-100 fs-five fw-bolder text-start"
                                        type="button">
                                        What currencies does the Coinx Exchange support?
                                    </button>

                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>These are traditional online platforms where users <br> create accounts and
                                            trade </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single accsingle mb-5 mb-md-6 wow fadeInUp">
                                <h5 class="header-area d-flex align-items-center justify-content-between">
                                    <button
                                        class="accordion-btn d-flex align-items-start position-relative w-100 fs-five fw-bolder text-start"
                                        type="button">
                                        What currencies does the Coinx Exchange support?
                                    </button>

                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>These are traditional online platforms where users <br> create accounts and
                                            trade </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single accsingle mb-5 mb-md-6 wow fadeInUp">
                                <h5 class="header-area d-flex align-items-center justify-content-between">
                                    <button
                                        class="accordion-btn d-flex align-items-start position-relative w-100 fs-five fw-bolder text-start"
                                        type="button">
                                        What is the Coinx Exchange?
                                    </button>

                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>These are traditional online platforms where users <br> create accounts and
                                            trade </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single accsingle mb-5 mb-md-6 wow fadeInUp">
                                <h5 class="header-area d-flex align-items-center justify-content-between">
                                    <button
                                        class="accordion-btn d-flex align-items-start position-relative w-100 fs-five fw-bolder text-start"
                                        type="button">
                                        What currencies does the Coinx Exchange support?
                                    </button>

                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>These are traditional online platforms where users <br> create accounts and
                                            trade </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-2 wow fadeInUp">
                            <span>Can't see your question listed above?</span>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-1 p6-color astyle">Visit
                                our Help Center <i class="ti ti-arrow-narrow-right fs-four mt-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="rewards_faq__thumb">
                        <img src="/assets/images/faq-thumb.png" class="max-un leftright-animation" alt="Images">
                    </div>
                </div>
            </div>
        </div>
        <!-- <img class="rewards_faq__light position-absolute top-0 start-0" src="/assets/images/light-faq.png" alt="Icon"> -->
    </section>
    <!-- Rewards FAQs Ends -->
@endsection
