@extends('layouts/home', [
    'title' => 'Home - CoinX',
])

@section('content')
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <div class="navbar_top bg2-color py-4 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-xxl-5">
                    <div class="navbar_top__left d-flex align-items-center gap-2 gap-xl-6">
                        <div class="navbar_top__location d-flex align-items-center gap-1 gap-xl-3">
                            <i class="ti ti-map-pin-filled fs-four p7-color"></i>
                            <span class="roboto p7-color">102/B New Market, Sandigo-USA</span>
                        </div>
                        <span class="v-line mb-9"></span>
                        <a href="/cdn-cgi/l/email-protection#bcd9c4ddd1ccd0d9fcdbd1ddd5d092dfd3d1"
                            class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                            <i class="ti ti-mail-opened-filled fs-four"></i>
                            <span class="__cf_email__"
                                data-cfemail="d9bca1b8b4a9b5bc99beb4b8b0b5f7bab6b4">[email&#160;protected]</span></a>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-6">
                    <div class="navbar_top__right d-flex align-items-center justify-content-end gap-2 gap-xl-6">
                        <div class="navbar_top__call d-flex align-items-center gap-3">
                            <span class="bg6-color py-2 px-3 rounded-item">
                                <i class="ti ti-phone-call fs-four p7-color "></i>
                            </span>
                            <div>
                                <span class="p7-color fw-bolder d-block">Contact Us:</span>
                                <a href="tel:+9802344567" class="d-block p7-color">+980 234 4567</a>
                            </div>
                        </div>
                        <span class="v-line mb-9"></span>
                        <div class="navbar_top__social d-flex align-items-center gap-2 gap-xl-3">
                            <span class="p7-color fw-bolder">Follow Us:</span>
                            <div class="navbar_top__social-icon d-flex align-items-center  gap-1 gap-xl-2">
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-facebook fs-four p7-color "></i>
                                </a>
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-instagram fs-four p7-color "></i>
                                </a>
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-twitter fs-four p7-color "></i>
                                </a>
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-linkedin fs-four p7-color "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- HEADER --}}
    <x-header />
    {{-- HEADER ENDS --}}
    <div class="modal_areastyle">
        <!-- Modal -->
        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content px-2 px-md-6 pt-md-3 pb-2 pb-md-6">
                    <div class="modal-header border-0">
                        <h3 class="modal-title p1-color" id="exampleModalLabel">Connect Your Wallet</h3>
                        <button type="button" class="btn-close p7-color" data-bs-dismiss="modal" aria-label="Close"><i
                                class="ti ti-xbox-x p6-color fs-three fw-normal"></i></button>
                    </div>
                    <div class="modal-body">
                        <a href="javascript:void(0)"
                            class="modal_areastyle__item rounded-3 br2 px-3 px-md-4 py-2 py-md-3 d-flex align-items-center justify-content-between mb-5 mb-md-6">
                            <span class="fw_500">Conntect with Metamask</span>
                            <img src="/assets/images/icon/dog.png" alt="Icon">
                        </a>
                        <a href="javascript:void(0)"
                            class="modal_areastyle__item rounded-3 br2 px-3 px-md-4 py-2 py-md-3 d-flex align-items-center justify-content-between">
                            <span class="fw_500">Conntect with Metamask</span>
                            <img src="/assets/images/icon/wallet-connect.png" alt="Icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section end -->
    <!-- Hero Section Starts -->
    <section class="hero_area pt-120 pb-16 position-relative">
        <div class="container z-1">
            <div class="row justify-content-center mt-8 mt-sm-13 mt-md-0">
                <div class="col-xl-9">
                    <div class="hero_area__content pt-17 pt-sm-20 pt-lg-0 text-center">
                        <span class="fs-five py-2 px-3 px-sm-5 mb-4 wow fadeInUp">Trust and Security in Web3 Crypto
                            Exchange</span>
                        <h1 class="display-three mb-5 mb-md-6 wow fadeInUp">Trust and Security in Web3 Crypto Exchange
                        </h1>
                        <p class="mb-8 mb-md-10 wow fadeInUp">Our comprehensive cybersecurity platform, driven by
                            artificial
                            intelligence, not only <br> safeguards your organization but also educates your workforce.
                        </p>
                        <div
                            class="d-flex align-items-center justify-content-center flex-wrap gap-4 gap-md-6 mb-10 mb-md-13 wow fadeInUp">
                            <a class="hero_area__content-btnone cmn-btn px-6 px-md-8 py-3 d-center gap-3"
                                href="buycrypto.html">Get
                                Started
                                <i class="ti ti-chevron-right fs-five px-1 bg4-color p6-color rounded-3 fw-bolder"></i>
                            </a>
                            <a class="hero_area__content-btntwo cmn-btn third-alt px-6 px-md-8 py-3 d-center gap-3"
                                href="staking.html">Explore
                                <i class="ti ti-chevron-right fs-five px-1 bg2-color rounded-3 fw-bolder"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="hero_area__thumb wow fadeInUp position-relative">
                        <img class="rounded-5" src="/assets/images/hero-banner.png" alt="Hero Banner">
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
    <!-- Explore Coinx Web3 Products Starts -->
    <section class="web3_product how_join bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="how_join__title text-center mb-10 mb-md-15">
                    <h2 class="wow fadeInUp">Explore Coinx Web3 Products</h2>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/subscription.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">Staking</h4>
                        <p class="mb-6 mb-md-8">Unlock passive profits with just one click!</p>
                        <div class="web3_product__item-btn">
                            <a class="cmn-btn third-alt px-3 py-2 rounded-5" href="swap.html"><i
                                    class="ti ti-arrow-up-right fs-four"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/snapshot.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">IDO</h4>
                        <p class="mb-6 mb-md-8">Be the first to enjoy exclusive token discounts</p>
                        <div class="web3_product__item-btn">
                            <a class="cmn-btn third-alt px-3 py-2 rounded-5" href="swap.html"><i
                                    class="ti ti-arrow-up-right fs-four"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/lottery.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">Lottery</h4>
                        <p class="mb-6 mb-md-8">Participate in our exciting lottery to win big
                            prizes!</p>
                        <div class="web3_product__item-btn">
                            <a class="cmn-btn third-alt px-3 py-2 rounded-5" href="swap.html"><i
                                    class="ti ti-arrow-up-right fs-four"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="web3_product__item how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/redemption.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5">Buy Crypto</h4>
                        <p class="mb-6 mb-md-8">Buy Crypto Anytime, Anywhere, Easily.</p>
                        <div class="web3_product__item-btn">
                            <a class="cmn-btn third-alt px-3 py-2 rounded-5" href="swap.html"><i
                                    class="ti ti-arrow-up-right fs-four"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center mt-2 mt-md-4">
                        <a href="swap.html"
                            class="cmn-btn py-2 px-5 px-md-6 d-inline-flex justify-content-center align-items-center roboto">VIEW
                            MORE <i class="ti ti-chevron-right fs-four"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Coinx Web3 Products Ends -->
    <!-- Markets Section starts -->
    <section class="market_more what_trending bg5-color pt-120 pb-120">
        <div class="container">
            <div class="row categories__header mb-4 mb-md-6">
                <div class="col-xl-7 col-lg-8 col-sm-8">
                    <div class="categories__title d-flex align-items-center gap-5 gap-md-6 wow fadeInUp">
                        <h2 class="mb-3 mb-md-4">Markets</h2>
                        <a href="javascript:void(0)" class="roboto d-flex align-items-center gap-2 p1-color">More
                            Market
                            <i class="ti ti-chevron-right p1-color"></i></a>
                    </div>
                </div>
                <div
                    class="col-xl-5 col-lg-4 col-sm-4 categories_top_btn categories_top_btntwo categories_top_btnthree categories_top_btnfour mt-6 mt-sm-0">
                    <div class="slider-btn d-center justify-content-start justify-content-sm-end gap-4">
                        <button type="button" aria-label="Slide Prev"
                            class="ara-prev d-center cmn-btn third-alt px-2 py-1 rounded-5">
                            <i class="ti ti-chevron-left fs-four"></i>
                        </button>
                        <button type="button" aria-label="Slide Next"
                            class="ara-next d-center cmn-btn px-2 py-1 rounded-5">
                            <i class="ti ti-chevron-right fs-four"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="singletab">
                    <ul class="tablinks d-flex align-items-center gap-3 flex-wrap mb-10 mb-md-15 wow fadeInUp">
                        <li class="nav-links">
                            <button
                                class="tablink clickable-active active  py-3 px-5 px-md-6 rounded-2 br2">Staking</button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink clickable-active  py-3 px-5 px-md-6 rounded-2 br2">IDO</button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink clickable-active py-3 px-5 px-md-6 rounded-2 br2">Swap</button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink clickable-active py-3 px-5 px-md-6 rounded-2 br2">Buy
                                Crypto</button>
                        </li>
                    </ul>
                    <div class="tabcontents">
                        <div class="tabitem active">
                            <div class="swiper categories_top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon2.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon3.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon4.png"
                                                            alt="icon">

                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">cvxeth</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">curve</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">9.71%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$16.66 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon5.png"
                                                            alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">GLP</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">gmx</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">7.79%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon3.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon6.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$43.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="swiper categories_toptwo">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon2.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon3.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon4.png"
                                                            alt="icon">

                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">cvxeth</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">curve</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">9.71%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$16.66 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon5.png"
                                                            alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">GLP</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">gmx</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">7.79%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon3.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon6.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$43.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="swiper categories_topthree">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon2.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon3.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon4.png"
                                                            alt="icon">

                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">cvxeth</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">curve</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">9.71%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$16.66 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon5.png"
                                                            alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">GLP</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">gmx</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">7.79%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon3.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon6.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$43.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="swiper categories_topfour">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon2.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon3.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon4.png"
                                                            alt="icon">

                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">cvxeth</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">curve</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">9.71%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$16.66 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon5.png"
                                                            alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">GLP</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">gmx</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">7.79%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$4.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="items-wrapper">
                                            <div
                                                class="market_more__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color rounded-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-3 mb-8 mb-md-10">
                                                    <div class="d-flex align-items-center">
                                                        <img class="mb-3 mb-md-4" src="/assets/images/icon/homeicon3.png"
                                                            alt="icon">
                                                        <img class="imgstyle mb-3 mb-md-4"
                                                            src="/assets/images/icon/homeicon6.png" alt="icon">
                                                    </div>
                                                    <div class="text-start">
                                                        <h3 class="mb-1">yCRV</h3>
                                                        <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                                    </div>
                                                </div>
                                                <span class="fs-one p1-color fw_500 mb-1 d-block ">11.31%</span>
                                                <span class="mb-8 mb-md-10 d-block fs-five">Apy</span>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TVL</span>
                                                    <span>$43.96 M</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mb-9 mb-md-12">
                                                    <span>Network</span>
                                                    <span>Ethereum</span>
                                                </div>
                                                <a href="staking-details.html"
                                                    class="cmn-btn third-alt py-3 px-5 px-md-6 w-100 ">Stack</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Markets Section ends -->
    <!-- How to get started Starts -->
    <section class="get_started pt-120 pb-120 bg7-colo">
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
    <!-- Earn crypto flexibly Starts -->
    <section class="earn_crypto pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="col-12">
                    <div class="earn_crypto__title text-sm-center mb-7 mb-md-11 wow fadeInUp">
                        <h2>Earn crypto flexibly with <span class="p1-color">Bitco</span></h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="earn_crypto__cardone bg7-color br2 rounded-4 p-6 p-md-8 h-100 wow fadeInUp">
                        <div
                            class="d-flex align-items-start justify-content-between flex-wrap gap-3 mb-8 mb-sm-10 mb-md-15">
                            <div>
                                <h2 class="mb-3">Staking</h2>
                                <span>Calculate my earnings</span>
                            </div>
                            <div class="text-end bg1-color br2 rounded-3 ps-1 pe-2">
                                <div class="apex_section__slider-selector markets_section__rcard-selector">
                                    <div class="f-group">
                                        <select id="select3" class="f-control f-dropdown">
                                            <option value="1" selected
                                                data-image="assets/images/icon/solanalogo.png">
                                                SOL</option>
                                            <option value="2"
                                                data-image="assets/images/icon/currencyCategory5333a.png">
                                                ETH</option>
                                            <option value="3"
                                                data-image="assets/images/icon/currencyCategory6bd4a.png">
                                                LFC</option>
                                            <option value="4"
                                                data-image="assets/images/icon/currencyCategory71949.png">
                                                TLP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="d-flex align-items-center gap-3 justify-content-between flex-wrap mb-5 mb-md-6">
                                            <div>
                                                <span class="mb-3">How many coins do you hold?</span>
                                                <div class="d-flex align-items-end gap-2">
                                                    <h1 class="fw_500">18166</h1>
                                                    <span class="mb-2">SOL</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="mb-3">Estimate Annual Reward</span>
                                                <h1 class="fw_500 p1-color text-sm-end">41.12%</h1>
                                            </div>
                                        </div> -->
                        <!-- <div class="earn_crypto__wrapper mb-8 mb-md-10 w-100">
                                            <progress class="w-100" id="progress-bar" value="40" max="100"></progress>
                                        </div> -->
                        <div class="earn_crypto__rangeslider">
                            <div class="slidecontainer">
                                <div
                                    class="d-flex align-items-center gap-3 justify-content-between flex-wrap mb-5 mb-md-6">
                                    <div>
                                        <span class="mb-3">How many coins do you hold?</span>
                                        <div class="d-flex align-items-end gap-2">
                                            <h1 class="fw_500">18166</h1>
                                            <span class="mb-2">SOL</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="mb-3">Estimate Annual Reward</span>
                                        <h1 class="fw_500 p1-color text-sm-end"><span id="demo"></span>%</h1>
                                        <h1></h1>
                                    </div>
                                </div>
                                <div class="range-style overflow-hidden position-relative w-100">
                                    <input type="range" min="1" max="100" value="50"
                                        class="slider w-100 rounded-5" id="myRange">

                                </div>
                                <!-- <div>
                                                    <input type="range" class="win10-thumb" min="0" max="100" value="25" />
                                                </div> -->
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1 mb-5 mb-md-6 justify-content-between flex-wrap">
                            <span>Daily Earnings:</span>
                            <span>0.019178 SOL 0.74 USD</span>
                        </div>
                        <div class="d-flex align-items-center gap-1 mb-5 mb-md-6 justify-content-between flex-wrap">
                            <span>Monthly Earnings:</span>
                            <span>0.583333 SOL 22 USD</span>
                        </div>
                        <div class="d-flex align-items-center gap-1 mb-9 mb-md-11 justify-content-between flex-wrap">
                            <span>Yearly Earnings:</span>
                            <span>7 SOL 270 USD</span>
                        </div>
                        <a href="staking-details.html" class="cmn-btn py-3 px-5 px-md-6 d-block ">Start saving</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="earn_crypto__cardtwo bg7-color br2 rounded-4 p-6 p-md-8 h-100 wow fadeInUp">
                        <h2 class="mb-3">Savings</h2>
                        <span class="mb-8 mb-md-10">Earn daily rewards</span>
                        <div
                            class="d-flex align-items-center justify-content-between flex-wrap flex-xl-nowrap gap-5 gap-md-6 mb-5 mb-md-6">
                            <div class="bg1-color p-5 p-md-6 br2 rounded-3 w-100 ">
                                <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                    <img src="/assets/images/icon/ethereum5053.png" alt="Icon">
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-1">Tether USDT</h5>
                                        <span>USDC</span>
                                    </div>
                                </div>
                                <span class="fs-ten">Annual reward 3%</span>
                            </div>
                            <div class="bg1-color p-5 p-md-6 br2 rounded-3 w-100 ">
                                <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                    <img src="/assets/images/icon/ethereum5050.png" alt="Icon">
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-1">Ethereum</h5>
                                        <span>USDC</span>
                                    </div>
                                </div>
                                <span class="fs-ten">Annual reward 1%</span>
                            </div>
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between flex-wrap flex-xl-nowrap gap-5 gap-md-6 mb-9 mb-md-13">
                            <div class="bg1-color p-5 p-md-6 br2 rounded-3 w-100 ">
                                <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                    <img src="/assets/images/icon/ethereum5052.png" alt="Icon">
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-1">Bitcoin</h5>
                                        <span>BTC</span>
                                    </div>
                                </div>
                                <span class="fs-ten">Annual reward 0.5%</span>
                            </div>
                            <div class="bg1-color p-5 p-md-6 br2 rounded-3 w-100 ">
                                <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                                    <img src="/assets/images/icon/ethereum5051.png" alt="Icon">
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-1">USD Coin</h5>
                                        <span>USDC</span>
                                    </div>
                                </div>
                                <span class="fs-ten">Annual reward 3%</span>
                            </div>
                        </div>
                        <a href="staking-details.html" class="cmn-btn py-3 px-5 px-md-6 d-block ">Start saving</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Earn crypto flexibly Ends -->
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
                    <h2 class="wow fadeInUp">Your one-step shop for crypto trading</h2>
                </div>
                <div class="col-md-4 col-xl-3 col-xxl-2 text-md-end">
                    <a href="pricing-plan.html" class="cmn-btn py-3 px-5 px-md-6">VIEW MORE <i
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

    <!-- Footer Section Starts -->
    <footer class="footer pt-120 bg5-color">
        <div class="container">
            <div class="row gy-8 pb-120 justify-content-between">
                <div class="col-md-12 col-lg-6 col-xxl-5">
                    <div class="footer__decs wow fadeInUp">
                        <a href="index.html">
                            <h2>Coinx Wallet</h2>
                        </a>
                        <p class="mt-5 mt-md-6 mb-8 mb-md-10 wow fadeInUp">Welcome to Coinx, your gateway to the
                            world of Web3 trading! Our user-friendly platform empowers you to explore a wide range of
                            popular cryptocurrencies</p>
                        <div class="footer__decs-subscribe mb-9 mb-md-12 wow fadeInUp">
                            <form class="d-flex align-items-center rounded-1 py-2 pe-2">
                                <input type="email" placeholder="Enter your email">
                                <button class="cmn-btn py-3  px-8 rounded-1 d-center gap-2">Subscribe<i
                                        class="ti ti-send fs-five d-none d-md-block"></i></button>
                            </form>
                        </div>
                        <div
                            class="contact_info__card-social d-flex align-items-center justify-content-start gap-2 gap-md-3 wow fadeInUp">
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-facebook-filled p4-color fs-four fw-normal p-2"></i>
                            </a>
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-linkedin p4-color fs-four fw-normal p-2"></i>
                            </a>
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-instagram p4-color fs-four fw-normal p-2"></i>
                            </a>
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-twitter-filled p4-color fs-four fw-normal p-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xxl-2 ms-xxl-20">
                    <div class="footer__discover">
                        <h4 class="mb-6 mb-sm-8 mb-md-10 wow fadeInUp">Company</h4>
                        <div class="footer__discover-nav">
                            <ul class="d-flex flex-column gap-4 gap-md-5">
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">About Coinx Wallet</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">Join Us</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">Blog</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">Academy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xxl-2">
                    <div class="footer__community">
                        <h4 class="mb-6 mb-sm-8 mb-md-10 wow fadeInUp">Security</h4>
                        <div class="footer__community-item">
                            <ul class="d-flex flex-column gap-4 gap-md-5">
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">Contact Validator</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">Protection fund</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">Security</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xxl-2">
                    <div class="footer__community">
                        <h4 class="mb-6 mb-sm-8 mb-md-10 wow fadeInUp">Assets</h4>
                        <div class="footer__community-item">
                            <ul class="d-flex flex-column gap-4 gap-md-5">
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">BNB Chain</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">Ethereum</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)">ERC20</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="row align-items-center justify-content-center py-3 py-sm-4 py-lg-6 bg2-color">
                <div class="col-sm-10 col-xxl-8 order-2 order-sm-1">
                    <div
                        class="footer__copyright text-center d-flex align-items-center justify-content-center justify-content-md-between flex-wrap flex-md-nowrap">
                        <div class="coyp-rightarea">
                            <span class="p4-color roboto text-center text-md-start">Copyright 2024 -
                                <a href="index.html" class="p4-color">ConiX</a>
                                All Rights Reserved <span class="p4-color fs-five mx-2">|</span> Design By
                                <a href="https://themeforest.net/user/uiaxis" class="p4-color roboto">UIAXIS</a>
                            </span>
                        </div>


                        <div class="privacy-policay d-flex align-items-center gap-3">
                            <a href="javascript:void(0)" class="p4-color roboto ps-4 ps-sm-6">
                                Privacy Policy</a>
                            <span class="p4-color fs-five">|</span>
                            <a href="javascript:void(0)" class="p4-color roboto">
                                Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends -->
@endsection
