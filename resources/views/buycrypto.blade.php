@extends('layouts/home', [
    'title' => 'Buy Crypto - CoinX',
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
                        <a href="/cdn-cgi/l/email-protection#385d40595548545d785f55595154165b5755"
                            class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                            <i class="ti ti-mail-opened-filled fs-four"></i>
                            <span class="__cf_email__"
                                data-cfemail="5c39243d312c30391c3b313d3530723f3331">[email&#160;protected]</span></a>
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
    <!-- Buy Crypto Section Starts Starts -->
    <section class="buy_crypto pt-120 pb-120">
        <div class="container pt-17 pt-sm-20 pt-lg-0">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="buy_crypto__effort">
                        <h2 class="mb-10 mb-md-15 wow fadeInUp">Effortlessly Buy Crypto Your Way, Anytime, Anywhere
                        </h2>
                        <div
                            class="buy_crypto__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4 gap-sm-5 gap-md-6 mb-10 mb-md-15 wow fadeInUp">
                            <div class="buy_crypto__item-thumb">
                                <img src="/assets/images/icon/accessible.png" class="max-un" alt="Icons">
                            </div>
                            <div class="buy_crypto__item-content">
                                <h4 class="mb-5">Accessible</h4>
                                <p>Easily purchase your favorite cryptocurrencies without any hassle</p>
                            </div>
                        </div>
                        <div
                            class="buy_crypto__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4 gap-sm-5 gap-md-6 mb-10 mb-md-15 wow fadeInUp">
                            <div class="buy_crypto__item-thumb">
                                <img src="/assets/images/icon/convenient.png" class="max-un" alt="Icons">
                            </div>
                            <div class="buy_crypto__item-content">
                                <h4 class="mb-5">Convenient</h4>
                                <p>Choose from a wide range of payment options to buy crypto the way you prefer.</p>
                            </div>
                        </div>
                        <div
                            class="buy_crypto__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4 gap-sm-5 gap-md-6 mb-10 mb-md-15 wow fadeInUp">
                            <div class="buy_crypto__item-thumb">
                                <img src="/assets/images/icon/low-cost.png" class="max-un" alt="Icons">
                            </div>
                            <div class="buy_crypto__item-content">
                                <h4 class="mb-5">Low-cost</h4>
                                <p>Delight in advantageous pricing featuring competitive rates, low fees, and steady
                                    conversion rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy_crypto__formarea p-6 p-px-8 rounded-20 bg7-color wow fadeInUp">
                        <h2 class="mb-3">Buy Crypto</h2>
                        <span class="mb-8 mb-md-10">Buy In Seconds</span>
                        <form>
                            <div class="buy_crypto__formarea-group mb-5 mb-md-6">
                                <label class="mb-2">Spend</label>
                                <div class="d-flex align-items-center br2 p-1 rounded-4 bg1-color">
                                    <input type="text" placeholder="2201-650,600">
                                    <div class="text-end">
                                        <div class="apex_section__slider-selector markets_section__rcard-selector">
                                            <div class="f-group">
                                                <select id="select3" class="f-control f-dropdown">
                                                    <option value="1" selected
                                                        data-image="assets/images/icon/tableicon11.png">
                                                        BDT</option>
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
                            </div>
                            <div class="buy_crypto__formarea-group mb-5 mb-md-6">
                                <label class="mb-2">Receive</label>
                                <div class="d-flex align-items-center br2 p-1 rounded-4 mb-2 bg1-color">
                                    <input type="text" placeholder="Enter purchase amount">
                                    <div class="text-end">
                                        <div class="apex_section__slider-selector markets_section__rcard-selector">
                                            <div class="f-group">
                                                <select id="select4" class="f-control f-dropdown">
                                                    <option value="1"
                                                        data-image="assets/images/icon/cryptocurrency56304.png">
                                                        USDT</option>
                                                    <option value="2"
                                                        data-image="assets/images/icon/currencyCategory5333a.png">
                                                        ETH</option>
                                                    <option value="3"
                                                        data-image="assets/images/icon/currencyCategory6bd4a.png">
                                                        LFC</option>
                                                    <option value="4" selected
                                                        data-image="assets/images/icon/currencyCategory71949.png">
                                                        USDT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span>1 USDT = 126 BDT</span>
                            </div>
                            <div class="buy_crypto__formarea-group mb-5 mb-md-6">
                                <label class="mb-2">Network</label>
                                <div class="mb-2 br2 p-1 rounded-4 bg1-color">
                                    <div class="text-end">
                                        <div class="apex_section__slider-selector markets_section__rcard-selector">
                                            <div class="f-group">
                                                <select id="select5" class="f-control f-dropdown">
                                                    <option value="1" selected
                                                        data-image="assets/images/icon/tableicon11.png">
                                                        Ethereum</option>
                                                    <option value="2"
                                                        data-image="assets/images/icon/currencyCategory5333a.png">
                                                        ETH</option>
                                                    <option value="3"
                                                        data-image="assets/images/icon/currencyCategory6bd4a.png">
                                                        LFC</option>
                                                    <option value="4"
                                                        data-image="assets/images/icon/currencyCategory71949.png">
                                                        USDT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Gass fee</span>
                                    <span class="p1-color">5 USDT</span>
                                </div>
                            </div>
                            <div class="buy_crypto__formarea-group mb-6 mb-md-8">
                                <label class="mb-2">Wallet Address</label>
                                <div class="br2 p-1 rounded-4 bg1-color">
                                    <textarea placeholder="Address" cols="15" rows="3"></textarea>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 d-block">Next</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Crypto Section Starts Ends -->
    <!-- Pick Your Preferred Section Starts starts -->
    <section class="buy_Preferred pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row justify-content-between align-items-end mb-10 mb-md-15 gy-5">
                <div class="col-lg-5">
                    <div class="buy_Preferred__title">
                        <h2 class="wow fadeInUp">Pick Your Preferred Top-Up Method</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="buy_Preferred__titledecs text-start text-lg-end">
                        <p class="wow fadeInUp">Our comprehensive cybersecurity platform, driven by artificial
                            intelligence, not only
                            safeguards your organization but</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gy-sm-6">
                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content  pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Visa & Mastercard</h3>
                            </a>
                            <p>Our comprehensive cybersecurity platform, driven by artificial intelligence, not only
                                safeguards </p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="/assets/images/visa-mastercard1.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Apple Pay & Google Pay</h3>
                            </a>
                            <p>Our comprehensive cybersecurity platform, driven by artificial intelligence, not only
                                safeguards </p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="/assets/images/google-pay.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="buy_Preferred__card br2 rounded-20 bg1-color position-relative p-3 p-sm-6 p-lg-10 d-flex align-items-center flex-wrap flex-xl-nowrap gap-5 gap-xl-0 wow fadeInUp">
                        <div class="buy_Preferred__card-content">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Personal EUR Bank Account</h3>
                            </a>
                            <p>Send and receive EUR with SEPA Instant and get immediate access to your funds. Having a
                                personal IBAN on Nexo means you can transfer EUR between your own bank accounts,
                                eliminating any potential for delayed transfers.</p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="/assets/images/sepa.png" class="buy_Preferred__card-bigthumb max-un"
                                alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content  pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Instant GBP Transfers</h3>
                            </a>
                            <p>Benefit from Faster Payment Service (FPS) to top up and withdraw GBP instantly.</p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="/assets/images/instant-gbp.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Apple Pay & Google Pay</h3>
                            </a>
                            <p>Our comprehensive cybersecurity platform, driven by artificial intelligence, not only
                                safeguards </p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="/assets/images/apple-pay.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="buy_Preferred__card br2 rounded-20 bg1-color position-relative p-3 p-sm-6 p-lg-10 d-flex align-items-center flex-wrap flex-xl-nowrap gap-5 gap-xl-0 wow fadeInUp">
                        <div class="buy_Preferred__card-content">
                            <a href="javascript:void(0)">
                                <h4 class="mb-5 mb-md-6">On-Chain Crypto Transfers</h4>
                            </a>
                            <p>Send and receive EUR with SEPA Instant and get immediate access to your funds. Having a
                                personal IBAN on Nexo means you can transfer EUR between your own bank accounts,
                                eliminating any potential for delayed transfers.</p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="/assets/images/on-chain.png" class="buy_Preferred__card-bigthumb max-un"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pick Your Preferred Section Starts ends -->
    <!-- Buy Crypto on CoinX Starts -->
    <section class="buy_crycoinx bg7-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="buy_crycoinx__title mb-10 mb-md-15 text-center">
                    <h2 class="wow fadeInUp">Why Buy Crypto on <span class="text_grdt">CoinX</span></h2>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="/assets/images/icon/cashback1.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Up to 16% Interest</h4>
                        <p>Enjoy up to 0.5% cashback rewards on your purchases, adding value to every transaction you
                            make. Whether shopping, dining, or investing, earn cashback effortlessly and maximize your
                            savings with our rewarding program.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="/assets/images/icon/cashback2.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Up to 0.5% Cashback</h4>
                        <p>Unlock the potential of your assets with our lucrative interest rates of up to 16%. Maximize
                            your returns effortlessly and securely. Join us to earn passive income on your investments
                            today.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="/assets/images/icon/cashback3.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Excellent Market Prices</h4>
                        <p>Benefit from exceptional market prices offering competitive rates and favorable valuations
                            for a diverse range of investment opportunities. Explore our offerings today for the best
                            value in the market.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="/assets/images/icon/cashback4.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Dollar-Cost Average</h4>
                        <p>Dollar-cost averaging is a strategy where you invest a fixed amount regularly, regardless of
                            market fluctuations, aiming to reduce the impact of volatility and build a diversified
                            investment portfolio over time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Crypto on CoinX Ends -->
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
