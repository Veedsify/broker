@extends('layouts/home', [
    'title' => 'About - Cryptotraderspro',
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
    <section class="cmn_heros pb-120 pt-120">
        <div class="container">
            <div class="row justify-content-center mt-5 mt-md-8 mt-lg-0">
                <div class="col-xxl-6">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">ABOUT US</h1>
                        <p class="wow fadeInUp"> Discover our unbeatable pricing plan, offering the perfect
                            balance of value
                            and features, tailored to meet your unique needs in Coiner Website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->
    <!-- Brand Slider Starts -->

    <!-- Brand Slider Ends -->
    {{-- Why Choose Us  --}}
    <section class="web3_product how_join bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="how_join__title text-center mb-10 mb-md-15">
                    <h2 class="wow fadeInUp mb-5">Why Choose Us</h2>
                    <p class="w-md-75"> Crypto Traders Pro is a United States Based Registered Investment platform for regular
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
                                    CTP Registered by United States Govt. Reg No: #89374372.
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
                    <h2 class="wow fadeInUp">Explore CTP Tiers</h2>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="p-6 p-md-8 rounded-20 br2 position-relative wow fadeInUp">
                        <div class="pricing_plan__cards-icon mb-3">
                            <img src="/assets/images/icon/pricing_plan3.png" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6">Amateur plan</h4>
                        <div class="pricing_plan__cards-price d-flex align-items-center gap-3 mb-5 mb-md-6">
                            <h1 class="p1-color">10%</h1>
                        </div>
                        <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                            <ul class="d-flex flex-column gap-4">
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>After 0 Days</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Minimum Amount: $1000</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Maximum Amount: $5,000</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Instant Withdraw

                                    </p>
                                </li>


                            </ul>
                        </div>
                        <div class="pricing_plan__cards-btn">
                            <button  type="button" class="rounded-2 py-3 px-6 p1-color br4 w-100" onclick="location.href = '/account/deposit'">Apply Now</button>
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
                        </div>
                        <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                            <ul class="d-flex flex-column gap-4">
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>After 4 Days</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Minimum Amount: $5,000</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Maximum Amount: $10,000</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Instant Withdraw</p>
                                </li>

                            </ul>
                        </div>
                        <div class="pricing_plan__cards-btn">
                            <button type="button" class="rounded-2 py-3 px-6 p1-color br4 w-100" onclick="location.href = '/account/deposit'">Apply Now</button>
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
                        </div>
                        <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                            <ul class="d-flex flex-column gap-4">
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>After 4 Days</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Minimum Amount: $10,000</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Maximum Amount: $50,000</p>
                                </li>
                                <li class="d-flex align-items-center gap-3">
                                    <span class="bg1-color px-1 rounded-item">
                                        <i class="ti ti-check p1-color"></i>
                                    </span>
                                    <p>Instant Withdraw</p>
                                </li>

                            </ul>
                        </div>
                        <div class="pricing_plan__cards-btn">
                            <button type="button" class="rounded-2 py-3 px-6 p1-color br4 w-100" onclick="location.href = '/account/deposit'">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="pricing_plan__chooseexpert rounded-20 br2 px-3 px-sm-6 px-md-8 pt-3 pt-sm-6 pt-md-8 pb-0 pb-md-3">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="pricing_plan__choose p-3 p-sm-6 p-md-8 wow fadeInUp">
                                    <h2 class="mb-5 mb-md-6">Gold plan</h2>
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
                                        <h1 class="mb-4">85%</h1>

                                    </div>
                                    <div class="pricing_plan__choose-btn">
                                        <button type="button" class="cmn-btn py-3 px-6 w-100" onclick="location.href = '/account/deposit'">Get Started</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="pricing_plan__expert py-8 pe-6 pe-md-8 wow fadeInUp">
                                    <h2 class="mb-5 mb-md-6">Gold Plan</h2>
                                    <p class="mb-5 mb-md-6">For small teams trying out cryptocurrencies  for an unlimited period of time.</p>
                                    <span class="fs-four fw-bolder mb-5 mb-md-6">Whats Included?</span>
                                    <div class="pricing_plan__cards-befit mb-5 mb-md-6">
                                        <ul class="d-flex flex-column gap-4">
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>After 4 Days

                                                </p>
                                            </li>
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>Minimum Amount: $50,000</p>
                                            </li>
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>Maximum Amount: Unlimited

                                                </p>
                                            </li>
                                            <li class="d-flex align-items-center gap-3">
                                                <span class="bg1-color px-1 rounded-item">
                                                    <i class="ti ti-check p1-color"></i>
                                                </span>
                                                <p>Instant Withdraw

                                                </p>
                                            </li>

                                        </ul>
                                    </div>
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
    <!-- Explore CTP Web3 Products Ends -->


    <!-- Your one-step shop for crypto trading starts -->
    <section class="one_stepshop bg4-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6 align-items-end justify-content-between mb-10 mb-md-15">
                <div class="col-md-7 col-lg-6">
                    <h2 class="wow fadeInUp">Certified Trading Experts</h2>
                </div>
                {{-- <div class="col-md-4 col-xl-3 col-xxl-2 text-md-end">
                    <a href="pricing-plan.html" class="cmn-btn py-3 px-5 px-md-6">More<i
                            class="ti ti-chevron-right fs-five"></i></a>
                </div> --}}
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

    <!-- Ready to Exchange Starts -->
    <section class="ready_exhange pt-120 pb-120 bg4-color position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7 col-xxl-6">
                    <div class="ready_exhange__content text-center">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">Ready to Exchange?</h2>
                        <p class="mb-8 mb-md-10 wow fadeInUp">Unlock your  Crypto Traders Pro account now to investing in crypto
                            seamlessly,
                            without any
                            fees for buying, selling, or exchanging. Get started today!</p>
                        <div
                            class="ready_exhange__changenow d-flex align-items-center justify-content-center gap-4 gap-sm-8 gap-lg-10">
                            <a href="swap.html" class="cmn-btn py-3 px-6 wow fadeInUp">
                                Join Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready to Exchange Ends -->

@endsection
