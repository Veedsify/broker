@extends('layouts/home', [
    'title' => 'swap - CoinX',
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
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Swap</h1>
                        <p class="roboto wow fadeInUp">Earn passive income easily with just one click!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- Count Down Starts-->
    <section class="countdwon_event pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-5">
                    <div class="countdwon_event__title">
                        <h3 class="p4-color mb-5 mb-md-6 wow fadeInUp">Coinx Web3 USDC Odyssey - Swap & Hold</h3>
                        <a class="cmn-btn fifth-alt fw-bold py-3 px-5 px-md-6 d-inline-flex align-items-center gap-2 wow fadeInUp"
                            href="javascript:void(0)">Check Out <i class="ti ti-arrow-right fs-five"></i></a>
                    </div>
                </div>
                <div class="col-xxl-5">
                    <div class="countdwon_event__part">
                        <span class="fs-ten p4-color text-end d-block mb-5 mb-mb-6">The event will end in</span>
                        <div class="coundown-container d-flex align-items-center gap-4">
                            <div class="countdown-el days-container d-flex align-items-center gap-4">
                                <h3 class="big-text p4-color py-3 px-5 px-md-6 bg6-color rounded-2" id="days">0
                                </h3>
                                <span class="p4-color fs-five">d</span>
                            </div>

                            <div class="countdown-el hours-container d-flex align-items-center gap-4">
                                <h3 class="big-text p4-color py-3 px-5 px-md-6 bg6-color rounded-2" id="hours">0
                                </h3>
                                <span class="p4-color fs-five">h</span>
                            </div>

                            <div class="countdown-el minutes-container d-flex align-items-center gap-4">
                                <h3 class="big-text p4-color p4-color py-3 px-5 px-md-6 bg6-color rounded-2"
                                    id="minutes">0</h3>
                                <span class="p4-color fs-five">m</span>
                            </div>

                            <div class="countdown-el seconds-container d-flex align-items-center gap-4">
                                <h3 class="big-text p4-color p4-color py-3 px-5 px-md-6 bg6-color rounded-2"
                                    id="seconds">0</h3>
                                <span class="p4-color fs-five">s</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Count Down Ends-->
    <!-- Markets Section Starts -->
    <section class="markets_section pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row gy-6">
                <div class="markets_section__title mb-6 mb-md-9">
                    <h2 class="wow fadeInUp">Markets</h2>
                </div>
                <div class="col-xxl-8">
                    <div class="row gy-6">
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="/assets/images/icon/bticoin505.png" alt="icon">
                                    <h4>Bitcoin</h4>
                                    <span class="fs-ten">BTC/USD</span>
                                </div>
                                <div class="markets_section__card-chart mb-4 mb-md-5">
                                    <div id="crm-total-customers2">

                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four">USD</span>
                                        <span class="fs-four p1-color">19251.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.35%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="/assets/images/icon/cryptocurrency.png" alt="icon">
                                    <h4>ETH</h4>
                                    <span class="fs-ten">ETH/USD</span>
                                </div>
                                <div class="markets_section__card-chart mb-4 mb-md-5">
                                    <div id="crm-total-customers">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four">USD</span>
                                        <span class="fs-four p1-color">5600.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.40%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="/assets/images/icon/litecoin_ltc.png" alt="icon">
                                    <h4>LFC</h4>
                                    <span class="fs-ten">LFC/USD</span>
                                </div>
                                <div class="markets_section__card-chart mb-4 mb-md-5">
                                    <div id="crm-total-customers3">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four">USD</span>
                                        <span class="fs-four p1-color">4922.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.31%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="/assets/images/icon/tether.png" alt="icon">
                                    <h4>TLP</h4>
                                    <span class="fs-ten">TLP/USD</span>
                                </div>
                                <div class="markets_section__card-chart mb-4 mb-md-5">
                                    <div id="crm-total-customers4">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four">USD</span>
                                        <span class="fs-four p1-color">19251.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.29%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="markets_section__tetherusd mt-6 mt-md-9 p-5 p-md-6 br2 rounded-20 bg1-color wow fadeInUp">
                                <div
                                    class="markets_section__tetherusd-head d-flex align-items-center justify-content-between gap-4 flex-wrap mb-6 mb-md-8">
                                    <div class="d-flex align-items-center gap-4 gap-sm-5 gap-md-6 flex-wrap ">
                                        <img src="/assets/images/icon/usd-coin.png" alt="Icon">
                                        <div class="d-flex align-items-center gap-1">
                                            <h2>Tether USD</h2>
                                            <span class="p1-color py-1 px-2 bg1-color rounded-1 fs-seven">USDT</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end gap-1">
                                        <span class="fs-four">$1.0010</span>
                                        <span class="p1-color">0.01%</span>
                                    </div>
                                </div>
                                <div class="markets_section__tetherusd-chartarea">
                                    <div id="chart-timeline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4">
                    <div class="row gy-5 gy-md-6 justify-content-center">
                        <div class="col-lg-6 col-xxl-12">
                            <div
                                class="markets_section__rcard px-3 px-sm-5 px-md-6 py-6 py-sm-7 py-md-8 br2 bg7-color rounded-20 wow fadeInUp">
                                <div
                                    class="markets_section__rcard-head d-flex align-items-center justify-content-between mb-5 mb-md-6">
                                    <h4 class="d-block ">Tether USD</h4>
                                    <div class="apex_section__slider-selector markets_section__rcard-selector">
                                        <div class="f-group">
                                            <select id="select2" class="f-control f-dropdown">
                                                <option value="1" selected
                                                    data-image="assets/images/icon/cryptocurrency56304.png">
                                                    Ethereum</option>
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
                                <div class="markets_section__rcard-card p-4 p-sm-5 p-md-6 bg1-color rounded-20">
                                    <div class="d-flex align-items-center gap-3 justify-content-between mb-3">
                                        <span class="roboto">Pay</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-wallet fs-five"></i>
                                            <span class="opacity-50">---</span>
                                            <span>USDT</span>
                                            <span class="p1-color">Max</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <div class="text-end">
                                            <div class="apex_section__slider-selector markets_section__rcard-selector">
                                                <div class="f-group">
                                                    <select id="select3" class="f-control f-dropdown">
                                                        <option value="1" selected
                                                            data-image="assets/images/icon/cryptocurrency56304.png">
                                                            USDT</option>
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
                                            <span class="me-2">Ethereum</span>
                                        </div>
                                        <span class="fs-four opacity-50">0.00</span>
                                    </div>
                                </div>
                                <div class="markets_section__middleicon d-center">
                                    <div class="markets_section__middleicon-box px-2 py-3 rounded-5 bg7-color cpoint">
                                        <i class="ti ti-exchange fs-five p-2 rounded-5 bg2-color p4-color"></i>
                                    </div>
                                </div>
                                <div
                                    class="markets_section__rcard-card p-4 p-sm-5 p-md-6 bg1-color rounded-20 mb-5 mb-md-6">
                                    <div class="d-flex align-items-center gap-3 justify-content-between mb-3">
                                        <span class="roboto">Receive</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-wallet fs-five"></i>
                                            <span class="opacity-50">---</span>
                                            <span>USDT</span>
                                            <span class="p1-color">Max</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <div class="text-end">
                                            <div class="apex_section__slider-selector markets_section__rcard-selector">
                                                <div class="f-group">
                                                    <select id="select4" class="f-control f-dropdown">
                                                        <option value="1" selected
                                                            data-image="assets/images/icon/cryptocurrency56304.png">
                                                            USDT</option>
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
                                            <span class="me-2">Ethereum</span>
                                        </div>
                                        <span class="fs-four opacity-50">--</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3 mb-md-4">
                                    <span>Swap Fee</span>
                                    <span>---</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3 mb-md-4">
                                    <span>Gas Fees</span>
                                    <span>---</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-5 mb-md-6">
                                    <span>Min. Amount Received</span>
                                    <span>---</span>
                                </div>
                                <a class="cmn-btn py-3 px-6 w-100" data-bs-toggle="modal" href="#exampleModalToggle"
                                    role="button">Log In</a>
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content bg7-color rounded-20">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-5" id="exampleModalToggleLabel">Welcome to
                                                    CoinX
                                                </h5>
                                                <button type="button" class="p6-color" data-bs-dismiss="modal"
                                                    aria-label="Close"><i class="ti ti-x fs-four"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <div
                                                    class="apex_section__aside-logintop d-flex align-items-center gap-3">
                                                    <span>New to Bybit?</span> <i
                                                        class="ti ti-arrows-exchange-2 fs-four p1-color"></i>
                                                    <button class="d-flex align-items-center gap-3 p1-color"
                                                        data-bs-target="#exampleModalToggle2"
                                                        data-bs-toggle="modal">Sign up
                                                    </button>
                                                </div>
                                                <div class="apex_section__aside-tabs mt-4">
                                                    <div class="singletab mb-5 mb-md-6">
                                                        <ul
                                                            class="tablinks d-flex align-items-center gap-5 gap-md-6 mb-5 mb-md-6">
                                                            <li class="nav-links position-relative">
                                                                <button class="tablink fw-bold">Email</button>
                                                            </li>
                                                            <li class="nav-links position-relative">
                                                                <button class="tablink fw-bold">Mobile</button>
                                                            </li>
                                                            <li class="nav-links position-relative">
                                                                <button class="tablink fw-bold">QR Code</button>
                                                            </li>
                                                        </ul>
                                                        <div class="tabcontents">
                                                            <div class="tabitem active">
                                                                <div class="apex_section__forms">
                                                                    <form>
                                                                        <input class="br2 mb-3 mb-md-4" type="email"
                                                                            placeholder="Email">
                                                                        <input class="br2 mb-3 mb-md-4"
                                                                            type="password" placeholder="Swap Fee">
                                                                        <a class="d-block text-end p1-color"
                                                                            href="javascript:void(0)">Forgot
                                                                            password</a>
                                                                        <button
                                                                            class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tabitem">
                                                                <div class="apex_section__forms">
                                                                    <form>
                                                                        <input class="br2 mb-3 mb-md-4" type="tel"
                                                                            placeholder="Phone">
                                                                        <input class="br2 mb-3 mb-md-4"
                                                                            type="password" placeholder="Swap Fee">
                                                                        <a class="d-block "
                                                                            href="javascript:void(0)">Forgot
                                                                            password</a>
                                                                        <button
                                                                            class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tabitem">
                                                                <div class="apex_section__qrcode">
                                                                    <img src="/assets/images/qrcode.png"
                                                                        alt="rqcode">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3 mb-md-4">
                                                        <hr class="w-100 br2">
                                                        <span class="w-100">or log in with</span>
                                                        <hr class="w-100 br2">
                                                    </div>
                                                    <div class="d-flex align-items-center gap-5 gap-md-6 mb-3">
                                                        <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                                            href="javascript:void(0)">
                                                            <img src="/assets/images/icon/google-icon.png"
                                                                alt="icons">Google</a>
                                                        <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                                            href="javascript:void(0)">
                                                            <img src="/assets/images/icon/apple-icon.png"
                                                                alt="icons">Google</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer d-center">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 p1-color">Log in with
                                                    Subaccount
                                                    <i class="ti ti-arrow-right fs-four p1-color"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content bg7-color rounded-20">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-5" id="exampleModalToggleLabel3">Create
                                                    Account
                                                </h5>
                                                <button type="button" class="p6-color" data-bs-dismiss="modal"
                                                    aria-label="Close"><i class="ti ti-x fs-four"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <div
                                                    class="apex_section__aside-logintop d-flex align-items-center gap-3 flex-wrap">
                                                    <span>Already have an account ?</span> <i
                                                        class="ti ti-arrows-exchange-2 fs-four p1-color"></i>
                                                    <button class="d-flex align-items-center gap-3 p1-color"
                                                        data-bs-target="#exampleModalToggle2"
                                                        data-bs-toggle="modal">Log In
                                                    </button>
                                                </div>
                                                <div class="apex_section__aside-tabs mt-4">
                                                    <div class="singletab mb-5 mb-md-6">
                                                        <ul
                                                            class="tablinks d-flex align-items-center gap-5 gap-md-6 mb-5 mb-md-6">
                                                            <li class="nav-links position-relative">
                                                                <button class="tablink fw-bold">Email</button>
                                                            </li>
                                                            <li class="nav-links position-relative">
                                                                <button class="tablink fw-bold">Mobile</button>
                                                            </li>
                                                        </ul>
                                                        <div class="tabcontents">
                                                            <div class="tabitem active">
                                                                <div class="apex_section__forms">
                                                                    <form class="d-flex flex-column ">
                                                                        <input class="br2 mb-3 mb-md-4" type="email"
                                                                            placeholder="Email">
                                                                        <input class="br2 mb-3 mb-md-4"
                                                                            type="password" placeholder="Swap Fee">
                                                                        <span class="mb-3 mb-md-4 text-start">Referral
                                                                            Code
                                                                            (Optional)</span>
                                                                        <input class="br2 mb-3 mb-md-4"
                                                                            type="text">
                                                                        <div class="d-flex align-items-center gap-3">
                                                                            <input type="checkbox" id="rcode"
                                                                                name="vehicle1" value="rcode">
                                                                            <label class="i-aggres text-start"
                                                                                for="rcode">Agree to Terms of
                                                                                Service and
                                                                                Privacy Policy</label>
                                                                        </div>
                                                                        <button
                                                                            class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Create
                                                                            Account</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tabitem">
                                                                <div class="apex_section__forms">
                                                                    <form>
                                                                        <input class="br2 mb-3 mb-md-4" type="tel"
                                                                            placeholder="Phone">
                                                                        <input class="br2 mb-3 mb-md-4"
                                                                            type="password" placeholder="Swap Fee">
                                                                        <a class="d-block "
                                                                            href="javascript:void(0)">Forgot
                                                                            password</a>
                                                                        <button
                                                                            class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3 mb-md-4">
                                                        <hr class="w-100 br2">
                                                        <span class="w-100">or log in with</span>
                                                        <hr class="w-100 br2">
                                                    </div>
                                                    <div class="d-flex align-items-center gap-5 gap-md-6 mb-3">
                                                        <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                                            href="javascript:void(0)">
                                                            <img src="/assets/images/icon/google-icon.png"
                                                                alt="icons">Google</a>
                                                        <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                                            href="javascript:void(0)">
                                                            <img src="/assets/images/icon/apple-icon.png"
                                                                alt="icons">Google</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-12">
                            <div
                                class="markets_section__roundchart px-3 px-sm-5 px-md-6 py-3 py-sm-5 py-md-10 bg1-color br2 rounded-20 wow fadeInUp">
                                <div id="roundedchart" class="d-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Markets Section Ends -->
    <!-- Pools section starts -->
    <section class="pools_table pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="pools_table__title mb-5 mb-md-6">
                    <h2 class="mb-5 mb-md-6 wow fadeInUp">Pools</h2>
                    <p class="roboto wow fadeInUp">Access DApps via the Bybit Wallet extension or the respective mobile
                        app</p>
                </div>
                <div class="pools_table__part">
                    <div class="singletab">
                        <ul
                            class="tablinks d-flex align-items-center gap-5 gap-sm-10 gap-md-15 gap-lg-19 mb-6 mb-md-8 wow fadeInUp">
                            <li class="nav-links clickable-active active">
                                <button class="tablink ">All</button>
                            </li>
                            <li class="nav-links clickable-active">
                                <button class="tablink ">Events</button>
                            </li>
                            <li class="nav-links clickable-active">
                                <button class="tablink ">Single Asset</button>
                            </li>
                        </ul>
                        <div class="tabcontents">
                            <div class="tabitem active wow fadeInUp">
                                <div class="pools_table__totalitem overflow-auto">
                                    <table>
                                        <th>Pool Name</th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>Current APY</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i
                                                        class="ti ti-caret-up-filled fs-nine cpoint pools_table__totalitem-ticonone"></i>
                                                    <i
                                                        class="ti ti-caret-down-filled fs-nine cpoint pools_table__totalitem-ticontwo"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>CNetwork</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i
                                                        class="ti ti-caret-up-filled fs-nine cpoint pools_table__totalitem-ticonone"></i>
                                                    <i
                                                        class="ti ti-caret-down-filled fs-nine cpoint pools_table__totalitem-ticontwo"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>TVL</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i
                                                        class="ti ti-caret-up-filled fs-nine cpoint pools_table__totalitem-ticonone"></i>
                                                    <i
                                                        class="ti ti-caret-down-filled fs-nine cpoint pools_table__totalitem-ticontwo"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Type</th>
                                        <th>Action</th>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon1.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">USDC</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">26.80%</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                </div>
                                            </td>
                                            <td>$181.48 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8 p1-color"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon4.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto">stETH-ng</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.15%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$ 96.88 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon7.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon4.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon10.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">cvxeth</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">8.72%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">ironback</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">10.09%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$6.85 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon7.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="pools_table__pagination mt-6 mt-md-8">
                                    <nav>
                                        <ul class="d-flex align-items-center gap-3 gap-md-5">
                                            <li class="px-3 py-2 br1 rounded-5 d-center">
                                                <i class="ti ti-chevron-left fs-four p1-color"></i>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">1</span>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">2</span>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">3</span>
                                            </li>
                                            <li class="px-3 py-2 br1 rounded-5 d-center">
                                                <i class="ti ti-chevron-right fs-four p1-color"></i>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tabitem wow fadeInUp">
                                <div class="pools_table__totalitem overflow-auto">
                                    <table>
                                        <th>Pool Name</th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>Current APY</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i class="ti ti-caret-up-filled fs-nine cpoint"></i>
                                                    <i class="ti ti-caret-down-filled fs-nine cpoint"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>CNetwork</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i class="ti ti-caret-up-filled fs-nine cpoint"></i>
                                                    <i class="ti ti-caret-down-filled fs-nine cpoint"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>TVL</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i class="ti ti-caret-up-filled fs-nine cpoint"></i>
                                                    <i class="ti ti-caret-down-filled fs-nine cpoint"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Type</th>
                                        <th>Action</th>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon1.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">USDC</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">26.80%</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                </div>
                                            </td>
                                            <td>$181.48 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8 p1-color"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon4.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto">stETH-ng</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.15%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$ 96.88 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon7.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon4.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon10.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">cvxeth</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">8.72%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">ironback</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">10.09%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$6.85 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon7.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="pools_table__pagination mt-6 mt-md-8">
                                    <nav>
                                        <ul class="d-flex align-items-center gap-3 gap-md-5">
                                            <li class="px-3 py-2 br1 rounded-5 d-center">
                                                <i class="ti ti-chevron-left fs-four p1-color"></i>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">1</span>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">2</span>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">3</span>
                                            </li>
                                            <li class="px-3 py-2 br1 rounded-5 d-center">
                                                <i class="ti ti-chevron-right fs-four p1-color"></i>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tabitem wow fadeInUp">
                                <div class="pools_table__totalitem overflow-auto">
                                    <table>
                                        <th>Pool Name</th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>Current APY</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i class="ti ti-caret-up-filled fs-nine cpoint"></i>
                                                    <i class="ti ti-caret-down-filled fs-nine cpoint"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>CNetwork</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i class="ti ti-caret-up-filled fs-nine cpoint"></i>
                                                    <i class="ti ti-caret-down-filled fs-nine cpoint"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex align-items-center gap-1">
                                                <span>TVL</span>
                                                <div class="d-flex flex-column gap-0">
                                                    <i class="ti ti-caret-up-filled fs-nine cpoint"></i>
                                                    <i class="ti ti-caret-down-filled fs-nine cpoint"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Type</th>
                                        <th>Action</th>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon1.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">USDC</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">26.80%</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="/assets/images/icon/tableicon12.png" alt="Icons">
                                                </div>
                                            </td>
                                            <td>$181.48 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8 p1-color"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon4.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto">stETH-ng</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.15%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$ 96.88 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon7.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon4.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon10.png"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">cvxeth</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">8.72%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">ironback</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">10.09%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$6.85 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon7.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon5.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon2.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="/assets/images/icon/tableicon5.png"
                                                            alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8"
                                                    href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="pools_table__pagination mt-6 mt-md-8">
                                    <nav>
                                        <ul class="d-flex align-items-center gap-3 gap-md-5">
                                            <li class="px-3 py-2 br1 rounded-5 d-center">
                                                <i class="ti ti-chevron-left fs-four p1-color"></i>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">1</span>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">2</span>
                                            </li>
                                            <li class="px-5 py-3 br1 rounded-5 d-center">
                                                <span class="p1-color fs-five">3</span>
                                            </li>
                                            <li class="px-3 py-2 br1 rounded-5 d-center">
                                                <i class="ti ti-chevron-right fs-four p1-color"></i>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pools section ends -->
 @endsection
