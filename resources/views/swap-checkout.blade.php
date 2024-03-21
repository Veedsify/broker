@extends('layouts/home', [
    'title' => 'Swap Checkout - Cryptotraderspro',
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
                <div class="col-xxl-8">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Swap & Hold to Share</h1>
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
                        <h3 class="p4-color mb-5 mb-md-6 wow fadeInUp">CTP Web3 USDC Odyssey - Swap & Hold</h3>
                        <a class="cmn-btn fifth-alt fw-bold py-3 px-5 px-md-6 d-inline-flex align-items-center gap-2 "
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
    <!-- To Participate Starts -->
    <section class="participate how_join event_rules pt-120 pb-120 bg7-color position-relative">
        <div class="container">
            <div class="row mb-10 mb-md-15 gy-5 gy-md-6">
                <div class="completed_project__title mb-8 mb-md-10">
                    <h2 class="wow fadeInUp">To Participate</h2>
                </div>
                <div class="col-xl-6">
                    <div
                        class="completed_project__item participate__item br2 rounded-20 bg1-color p-6 p-md-8 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-5 mb-md-6 d-flex align-items-center">
                            <h5 class="fw-normal ">Task 1</h5>
                            <a href="javascript:void(0)" class="cmn-btn py-1 px-2"><i class="ti ti-gift"></i> Connect
                                Wallet</a>
                        </div>
                        <h4 class="mb-6 mb-md-8">Swap at least 200 USDC for a 2X gas refund</h4>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-10 mb-md-15 flex-wrap">
                            <div class="text-start">
                                <span class="mb-5 mb-md-6 d-block ">Max. USDC amount per swap</span>
                                <span class="dash-style"></span>
                            </div>
                            <div class="text-md-end">
                                <span class="mb-5 mb-md-6 d-block ">Max. USDC amount per swap</span>
                                <span class="dash-style"></span>
                            </div>
                        </div>
                        <p class="roboto mb-2 mb-md-3">Total assigned Gas Fee amount</p>
                        <div class="completed_project__ccard">
                            <div class="progress-bar__wrapper mb-3">
                                <progress id="progress-bar" value="40" max="100"></progress>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span>976.12 USDC</span>
                                <span>10,000 USDC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div
                        class="completed_project__item participate__item br2 rounded-20 bg1-color p-6 p-md-8 h-100 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-5 mb-md-6 d-flex align-items-center">
                            <h5 class="fw-normal ">Task 2</h5>
                            <a href="javascript:void(0)" class="cmn-btn py-1 px-2"><i class="ti ti-gift"></i>
                                $22,000</a>
                        </div>
                        <h4 class="mb-6 mb-md-8">Swap at least 200 USDC for a 2X gas refund</h4>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-10 mb-md-15 flex-wrap">
                            <div class="text-start">
                                <span class="mb-5 mb-md-6 d-block ">Total valid swap amount</span>
                                <span class="dash-style"></span>
                            </div>
                            <div class="text-md-end">
                                <span class="mb-5 mb-md-6 d-block ">Valid hold period</span>
                                <span class="dash-style"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gy-md-6 mb-10 mb-md-15">
                <div class="completed_project__title mb-5 mb-md-4">
                    <h2 class="wow fadeInUp">Swap for USDC</h2>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-4">
                    <div
                        class="how_join__item bg1-color py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative text-center wow fadeInUp">
                        <div class="how_join__item-thumb mb-6 mb-md-8 text-center  rounded-item d-inline-block">
                            <img src="/assets/images/icon/ethereum_eth.png" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6 text-center">Ethereum</h4>
                        <p class="text-center mb-7 mb-md-8">Discover over 400 cryptocurrencies including all the
                            trending new listings.</p>
                        <a href="javascript:void(0)"
                            class="d-flex align-items-center justify-content-center gap-2 cmn-btn p4-color py-3 px-6">Swap
                            <i class="ti ti-chevron-right mt-1"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-4">
                    <div
                        class="how_join__item bg1-color py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative text-center wow fadeInUp">
                        <div class="how_join__item-thumb mb-6 mb-md-8 text-center  rounded-item d-inline-block">
                            <img src="/assets/images/icon/bnb.png" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6 text-center">BNB Chain</h4>
                        <p class="text-center mb-7 mb-md-8">Discover over 400 cryptocurrencies including all the
                            trending new listings.</p>
                        <a href="javascript:void(0)"
                            class="d-flex align-items-center justify-content-center gap-2 cmn-btn p4-color py-3 px-6">Swap
                            <i class="ti ti-chevron-right mt-1"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-4">
                    <div
                        class="how_join__item bg1-color py-7 py-md-10 px-6 px-md-8 rounded-3 br2 position-relative text-center wow fadeInUp">
                        <div class="how_join__item-thumb mb-6 mb-md-8 text-center  rounded-item d-inline-block">
                            <img src="/assets/images/icon/near_protocol.png" alt="Icons">
                        </div>
                        <h4 class="mb-5 mb-md-6 text-center">BNB Chain</h4>
                        <p class="text-center mb-7 mb-md-8">Discover over 400 cryptocurrencies including all the
                            trending new listings.</p>
                        <a href="javascript:void(0)"
                            class="d-flex align-items-center justify-content-center gap-2 cmn-btn p4-color py-3 px-6">Swap
                            <i class="ti ti-chevron-right mt-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event_rules__card p-7 p-md-8 br2 bg1-color rounded-20">
                    <div class="event_rules__card-title wow fadeInUp">
                        <h4 class="mb-8 mb-md-10">Event Rules</h4>
                        <div class="event_rules__card-content d-flex flex-column gap-5 gap-md-6 mb-8 mb-md-10">
                            <p class="roboto">Event Period: 2024-11-02 10:00:00 - 2024-11-15 10:00:00 UTC</p>
                            <p>How to participate: Register or log in to CTP <a href="sign-up.html"
                                    class="p1-color">link to sign-up,</a> and create your CTP Wallet <a
                                    href="javascript:void(0)" class="p1-color">link to CTP Wallet</a> if you don’t
                                have one.</p>
                            <div class="d-flex flex-wrap flex-xxl-nowrap gap-3 gap-sm-5 gap-md-6">
                                <h5 class="fw-normal">Task 1:</h5>
                                <p class="roboto">Swap at least 200 USDC on supported chains (Ethereum, BNB Chain,
                                    Arbitrum One) during the Swap Period to be eligible for a 2X gas fee refund.Only
                                    $10,000 in gas fee refunds will be distributed on a first-come, first-served basis.
                                    Each address can receive a maximum 2X gas fee refund of up to $20. Get started now!
                                </p>
                            </div>
                            <div class="d-flex flex-wrap flex-xxl-nowrap gap-3 gap-sm-5 gap-md-6">
                                <h5 class="fw-normal">Task 2:</h5>
                                <p class="roboto">Hold your Swapped USDC for 7 days in a row to share 20,000 USDC
                                    tokens.Hourly snapshots will capture participants' USDC assets in their Bybit
                                    Wallet. Falling below the originally swapped assets due to trading or transfers
                                    disqualifies users from getting the rewards.</p>
                            </div>
                        </div>
                        <p class="roboto">Note: For Task 1 and 2, you need to Swap for a minimum of 200 USDC to be
                            eligible for rewards.</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="/assets/images/bgmusts.png" class="participate__shapeadd position-absolute" alt="shpae">
    </section>
    <!-- To Participate Ends -->
    <!-- Swap for USDC Starts -->
    <!-- <section class="bg7-color pb-10 pb-md-15">
        <div class="container">

        </div>
    </section> -->
    <!-- Swap for USDC Ends -->
    <!-- Event Rules Section Starts -->
    <!-- <section class="event_rules bg7-color pb-120">
        <div class="container">

        </div>
    </section> -->
    <!-- Event Rules Section Ends -->
  @endsection
