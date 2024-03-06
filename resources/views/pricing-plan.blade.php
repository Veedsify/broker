@extends('layouts/home', [
    'title' => 'pricinig Plan - CoinX',
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
                        <a href="/cdn-cgi/l/email-protection#dabfa2bbb7aab6bf9abdb7bbb3b6f4b9b5b7"
                            class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                            <i class="ti ti-mail-opened-filled fs-four"></i>
                            <span class="__cf_email__"
                                data-cfemail="25405d4448554940654248444c490b464a48">[email&#160;protected]</span></a>
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
        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content px-2 px-md-6 pt-md-3 pb-2 pb-md-6">
                    <div class="modal-header border-0">
                        <h3 class="modal-title p1-color" id="exampleModalLabel">Connect Your Wallet</h3>
                        <button type="button" class="btn-close p7-color" data-bs-dismiss="modal"
                            aria-label="Close"><i class="ti ti-xbox-x p6-color fs-three fw-normal"></i></button>
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

    <!--Common hero Section Starts -->
    <section class="cmn_heros pb-120 pt-120">
        <div class="container">
            <div class="row justify-content-center mt-5 mt-md-8 mt-lg-0">
                <div class="col-xxl-6">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Our Pricing Plan</h1>
                        <p class="roboto wow fadeInUp"> Discover our unbeatable pricing plan, offering the perfect
                            balance of value
                            and features, tailored to meet your unique needs in Coiner Website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- Pricing Plan Section Starts Starts -->
    <section class="pricing_plan pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row gy-6">
                <div class="pricing_plan__title mb-md-4">
                    <h2 class="mb-4 wow fadeInUp">Pricing Plan</h2>
                    <p class="roboto wow fadeInUp">Explainability features and deep model. Specialized consectetur
                        adipiscing sed do
                        eiusmod.Explainability features and deep model.</p>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="pricing_plan__cards p-6 p-md-8 rounded-20 br2 position-relative wow fadeInUp">
                        <div class="pricing_plan__cards-icon mb-3">
                            <img src="/assets/images/icon/pricing_plan3.png" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6">Basic plan</h4>
                        <div class="pricing_plan__cards-price d-flex align-items-center gap-3 mb-5 mb-md-6">
                            <h1 class="p1-color">$19.99_</h1>
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
                    <div class="pricing_plan__cards p-6 p-md-8 rounded-20 br2 position-relative wow fadeInUp">
                        <div class="pricing_plan__cards-icon mb-3">
                            <img src="/assets/images/icon/pricing_plan2.png" alt="Icons">
                            <img src="/assets/images/icon/pricing_plan3.png" class="picon" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6">Pro Plan</h4>
                        <div class="pricing_plan__cards-price d-flex align-items-center gap-3 mb-5 mb-md-6">
                            <h1 class="p1-color">$29.99_</h1>
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
                    <div class="pricing_plan__cards p-6 p-md-8 rounded-20 br2 position-relative wow fadeInUp">
                        <div class="pricing_plan__cards-icon mb-3">
                            <img src="/assets/images/icon/pricing_plan2.png" alt="Icons">
                            <img src="/assets/images/icon/pricing_plan3.png" class="picon" alt="Icons">
                            <img src="/assets/images/icon/pricing_plan4.png" class="picon" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6">Expert Plan</h4>
                        <div class="pricing_plan__cards-price d-flex align-items-center gap-3 mb-5 mb-md-6">
                            <h1 class="p1-color">$39.99_</h1>
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
                                    <div class="pricing_plan__choose-switch d-flex align-items-center gap-3">
                                        <span class="fw-bold roboto pricing_plan__choose-monthly">Monthly</span>
                                        <div class="mb-4">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <span class="fw-bold roboto">Yearly</span>
                                    </div>
                                    <div
                                        class="pricing_plan__choose-price d-flex align-items-center gap-2 mb-5 mb-md-6">
                                        <h1 class="mb-4">$19.99</h1>
                                        <span class="fw-bold roboto">/ month</span>
                                    </div>
                                    <div class="pricing_plan__choose-btn">
                                        <button type="button" class="cmn-btn py-3 px-6 w-100">Get Started</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="pricing_plan__expert py-6 py-8 pe-6 pe-md-8 wow fadeInUp">
                                    <h2 class="mb-5 mb-md-6">Expert Plan</h2>
                                    <p class="roboto mb-5 mb-md-6">Trading cryptocurrencies from your phone offers
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
            </div>
        </div>
    </section>
    <!-- Pricing Plan Section Starts Ends -->
    <!-- Ready to Exchange Starts -->
    <section class="ready_exhange pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7 col-xxl-6">
                    <div class="ready_exhange__content text-center">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">Ready to Exchange?</h2>
                        <p class="mb-8 mb-md-10 wow fadeInUp">Unlock your Coinx account now to trade crypto seamlessly,
                            without any
                            fees for buying, selling, or exchanging. Get started today!</p>
                        <div
                            class="ready_exhange__changenow d-flex align-items-center justify-content-center gap-4 gap-sm-8 gap-lg-10 wow fadeInUp">
                            <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-6">
                                Exchange Now
                            </a>
                            <div class="ready_exhange__changenow-brand">
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
                        <p class="fs-ten mt-5 mt-md-6 mb-8 mb-md-10 wow fadeInUp">Welcome to Coinx, your gateway to the
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
                                    <a href="javascript:void(0)" class="fs-ten">About Coinx Wallet</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Join Us</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Blog</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Academy</a>
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
                                    <a href="javascript:void(0)" class="fs-ten">Contact Validator</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Protection fund</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Security</a>
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
                                    <a href="javascript:void(0)" class="fs-ten">BNB Chain</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Ethereum</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">ERC20</a>
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
                                <a href="https://themeforest.net/user/uiaxis" class="p4-color roboto"> UIAXIS</a>
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
