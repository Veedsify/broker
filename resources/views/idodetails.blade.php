@extends('layouts/home', [
    'title' => 'Idodetails - CoinX',
])

@section('content')
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->

    <!-- start preloader -->
    <div id="preloader" class="pre-item d-center">
        <div class="loaderall"></div>
    </div>
    <!-- end preloader -->

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
    <!-- Cyber Arena Starts -->
    <section class="cyber_arena pt-120 pb-120 bg5-color">
        <div class="container pt-17 pt-sm-20 pt-lg-0">
            <div class="row ">
                <div class="col-12">
                    <div
                        class="cyber_arena__tophead d-flex align-items-center justify-content-between flex-wrap gap-4 mb-10 mb-md-15 wow fadeInUp">
                        <div class="cyber_arena__tphead d-flex align-items-center gap-3 flex-wrap">
                            <div
                                class="cyber_arena__tphead-itemone d-flex align-items-center gap-3 gap-sm-6 flex-wrap">
                                <div class="cyber_arena__tphead-icon">
                                    <img src="/assets/images/icon/cyber-arenaone.png" alt="Icon">
                                </div>
                                <a href="javascript:void(0)" class="cyber_arena__tphead-name">
                                    <h2>Pop Social</h2>
                                </a>
                            </div>
                            <div class="cyber_arena__tphead-itemtwo d-flex align-items-center gap-3">
                                <i class="ti ti-share fs-four"></i>
                                <button type="button" class="px-5 py-2 fs-four bg1-color rounded-1">
                                    Ended
                                </button>
                            </div>
                        </div>
                        <div class="cyber_arena__tophead-viewbtn">
                            <a href="javascript:void(0)"
                                class="d-inline-flex align-items-center rounded-2 gap-2 roboto py-3 px-5 px-md-6 bg8-color p7-color fw-bold">View
                                Result <i class="ti ti-chevron-right fs-five fw-bold"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="cyber_arena__webcnct d-flex align-items-center gap-3 gap-sm-5 gap-md-6 flex-wrap mb-8 mb-md-10 wow fadeInUp">
                        <a href="javascript:void(0)"
                            class="d-flex align-items-center gap-2 py-2 px-3 px-md-4 fs-ten bg1-color br2 rounded-2"><i
                                class="ti ti-world-www fs-five p2-color"></i> Official Website</a>

                        <a href="javascript:void(0)"
                            class="d-flex align-items-center gap-2 py-2 px-3 px-md-4 fs-ten bg1-color br2 rounded-2"><i
                                class="ti ti-wallpaper fs-five p2-color"></i>Whitepaper</a>

                        <a href="javascript:void(0)"
                            class="d-flex align-items-center gap-2 py-2 px-3 px-md-4 fs-ten bg1-color br2 rounded-2"><i
                                class="ti ti-copy fs-five p2-color"></i>Contact Address</a>
                    </div>
                    <p class="roboto mb-6 mb-md-8 wow fadeInUp">CyberArena AR/VR is a project that integrates AR/VR
                        features and
                        crypto economics. It provides 30+ million gamers in Imperium ecosystem and 2+ billion gamers
                        worldwide with a unique opportunity to monetize their skills beyond just streaming. By
                        transcending the limitations of Web2 gaming, CyberArena opens up new possibilities for immersive
                        experiences and value-staked skill games.</p>
                    <div
                        class="cyber_arena__social d-flex align-items-center gap-3 flex-wrap mb-8 mb-md-10 wow fadeInUp">
                        <a href="javascript:void(0)" class="br5 px-3 py-2 d-center rounded-item">
                            <i class="ti ti-brand-facebook-filled p2-color fs-four fw-normal"></i>
                        </a>
                        <a href="javascript:void(0)" class="br5 px-3 py-2 d-center rounded-item">
                            <i class="ti ti-brand-linkedin p2-color fs-four fw-normal"></i>
                        </a>
                        <a href="javascript:void(0)" class="br5 px-3 py-2 d-center rounded-item">
                            <i class="ti ti-brand-instagram p2-color fs-four fw-normal"></i>
                        </a>
                        <a href="javascript:void(0)" class="br5 px-3 py-2 d-center rounded-item">
                            <i class="ti ti-brand-twitter-filled p2-color fs-four fw-normal"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div
                    class="counter_section__area d-flex align-items-center justify-content-center justify-content-sm-evenly flex-wrap gap-5 br2 p-3 p-sm-6 p-md-8 rounded-20 bg1-color mb-10 mb-md-15">
                    <div class="cyber_arena__item text-center">
                        <div class="cyber_arena__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-three fw_500"
                                data-odometer-final="4390.13"></span>
                            <span class="fs-three fw_500">%</span>
                        </div>
                        <span class="text-center fs-ten">Peak ROI</span>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-md-block"></span>
                    <div class="cyber_arena__item text-center">
                        <div class="cyber_arena__countdown counters d-flex align-items-center justify-content-center">
                            <span class="fs-three fw_500">$</span>
                            <span class="odometer hero_area__countdown-number fs-three fw_500"
                                data-odometer-final="47,600"></span>
                            <span class="fs-three fw_500">/</span>
                            <span class="fs-three fw_500">$</span>
                            <span class="odometer hero_area__countdown-number fs-three fw_500"
                                data-odometer-final="50,000"></span>
                        </div>
                        <span class="text-center fs-ten">Total Raised</span>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-md-block"></span>
                    <div class="cyber_arena__item">
                        <div class="cyber_arena__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-three fw_500"
                                data-odometer-final="28,751"></span>
                        </div>
                        <span class="text-center fs-ten">Total Participants</span>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gy-sm-6 mb-10 mb-md-15">
                <div class="col-12">
                    <h3 class="cyber_arena__tstyle mb-5 mb-md-6 wow fadeInUp">IDO Details</h3>
                    <p class="roboto mb-3 mb-md-5 wow fadeInUp">All participants will have an equal chance to win the
                        token
                        allocation lottery. Holders of winning tickets may redeem their allocations (denominated in
                        USDT) of IDO tokens with USDT from their Bybit Wallets.</p>
                </div>
                <div class="col-md-8 col-xl-9">
                    <div class="cyber_arena__totalcard p-6 p-md-8 br2 bg1-color rounded-20 h-100">
                        <div
                            class="d-flex align-items-center justify-content-between mb-6 mb-md-8 gap-4 flex-wrap flex-sm-nowrap">
                            <div class="cyber_arena__totalcard-title">
                                <span class="mb-3 fs-ten">Total Amount</span>
                                <div class="d-flex align-items-end gap-2">
                                    <span class="fs-four p1-color fw-bold">50,000</span>
                                    <span class="fs-ten">USDT</span>
                                </div>
                            </div>
                            <div class="cyber_arena__totalcard-title text-sm-end">
                                <span class="mb-3 fs-ten">Total Issued</span>
                                <div class="d-flex align-items-end gap-2">
                                    <span class="fs-four p1-color fw-bold">3,472,222</span>
                                    <span class="fs-ten">CAT</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="cyber_arena__nastcard p-5 p-md-6 rounded-20 bg1-color d-flex flex-column gap-4 gap-md-6 br2">
                            <div
                                class="d-flex align-items-center justify-content-between gap-4 flex-wrap flex-sm-nowrap">
                                <span>Total Winning Tickets</span>
                                <span>250 Tickets</span>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-between gap-4 flex-wrap flex-sm-nowrap">
                                <span>Redemption Amount</span>
                                <span>200 USDT per Ticket</span>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-between gap-4 flex-wrap flex-sm-nowrap">
                                <span>Total ParticipantsV</span>
                                <span>28,751</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3">
                    <div
                        class="cyber_arena__totalcardtwo bg1-color rounded-20 br2 py-7 py-md-9 px-5 px-md-6 br2 text-center">
                        <div class="d-flex align-items-center justify-content-center gap-2 gap-sm-3 mb-3">
                            <img src="/assets/images/icon/tstart.png" alt="icon">
                            <span class="fs-five">USDT</span>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-6">
                            <hr class="w-100 ">
                            <i class="ti ti-arrow-down fs-four br2 px-1 rounded-5"></i>
                            <hr class="w-100">
                        </div>
                        <span class="mb-3 mb-md-4 d-block ">Launch Price</span>
                        <span class="fs-four d-block p1-color fw-bold mb-6 mb-md-8">0.0144 USDT</span>
                        <div class="d-flex align-items-center mb-3 mb-md-6">
                            <hr class="w-100 ">
                            <i class="ti ti-arrow-down fs-four br2 px-1 rounded-5"></i>
                            <hr class="w-100">
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-2 gap-sm-3 mb-3">
                            <img src="/assets/images/icon/tstart.png" alt="icon">
                            <span class="fs-five">USDT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cyber_arena__decs mb-8 mb-md-10">
                    <h3 class="mb-5 mb-md-6 wow fadeInUp">IDO Timeline</h3>
                    <p class="roboto mb-8 mb-md-10 wow fadeInUp">All participants will have an equal chance to win the
                        token
                        allocation lottery. Holders of winning tickets may redeem their allocations (denominated in
                        USDT) of IDO tokens with USDT from their Bybit Wallets.</p>
                    <div class="cyber_arena__decs-card p-4 p-sm-6 p-md-8 rounded-20 mb-5 mb-md-6 wow fadeInUp">
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-5 mb-md-6 gap-3">
                            <h4>Subscription Period</h4>
                            <span class="roboto">09-25 10:00 - 10-05 10:00 UTC</span>
                        </div>
                        <p class="mb-6 mb-md-8">The Subscription Period refers to the duration during which a service
                            or
                            product subscription remains active, offering access to features, benefits, or content as
                            per the subscribed plan's terms and conditions.</p>
                        <a href="javascript:void(0)"
                            class="d-inline-flex align-items-center cmn-btn rounded-2 gap-2 roboto py-3 px-5 px-md-6 p7-color fw-bold">How
                            It Works<i class="ti ti-chevron-right fs-five fw-bold"></i>
                        </a>
                    </div>
                    <div class="cyber_arena__decs-card p-4 p-sm-6 p-md-8 rounded-20 mb-5 mb-md-6 wow fadeInUp">
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-5 mb-md-6 gap-3">
                            <h4>Snapshot Period</h4>
                            <span class="roboto">09-25 10:00 - 10-05 10:00 UTC</span>
                        </div>
                        <p class="mb-6 mb-md-8">Snapshot Period refers to the specific timeframe during which data or
                            information is captured for analysis, typically used in blockchain governance to record
                            holders' balances or voting rights for decision-making processes.</p>
                        <a href="javascript:void(0)"
                            class="d-inline-flex align-items-center cmn-btn rounded-2 gap-2 roboto py-3 px-5 px-md-6 p7-color fw-bold">How
                            It Works<i class="ti ti-chevron-right fs-five fw-bold"></i>
                        </a>
                    </div>
                    <div class="cyber_arena__decs-card p-4 p-sm-6 p-md-8 rounded-20 mb-5 mb-md-6 wow fadeInUp">
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-5 mb-md-6 gap-3">
                            <h4>Lottery Period</h4>
                            <span class="roboto">09-25 10:00 - 10-05 10:00 UTC</span>
                        </div>
                        <p class="mb-6 mb-md-8">During the Lottery Period, participants have the opportunity to enter
                            for a chance to win exciting rewards, fostering anticipation and engagement within the
                            community. Join now and be part of the thrill!</p>
                        <a href="javascript:void(0)"
                            class="d-inline-flex align-items-center cmn-btn rounded-2 gap-2 roboto py-3 px-5 px-md-6 p7-color fw-bold">How
                            It Works<i class="ti ti-chevron-right fs-five fw-bold"></i>
                        </a>
                    </div>
                    <div class="cyber_arena__decs-card p-4 p-sm-6 p-md-8 rounded-20 mb-5 mb-md-6 wow fadeInUp">
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-5 mb-md-6 gap-3">
                            <h4>Redemption Period</h4>
                            <span class="roboto">09-25 10:00 - 10-05 10:00 UTC</span>
                        </div>
                        <p class="mb-6 mb-md-8">The Redemption Period refers to the timeframe after a foreclosure sale
                            when the homeowner may reclaim their property by paying off the outstanding debts and
                            associated costs, typically within a specific legal timeframe.</p>
                        <a href="javascript:void(0)"
                            class="d-inline-flex align-items-center cmn-btn rounded-2 gap-2 roboto py-3 px-5 px-md-6 p7-color fw-bold">How
                            It Works<i class="ti ti-chevron-right fs-five fw-bold"></i>
                        </a>
                    </div>
                    <p class="roboto wow fadeInUp">
                        All participants will have an equal chance to win the token allocation lottery. Holders of
                        winning tickets may redeem their allocations (denominated in USDT) of IDO tokens with USDT from
                        their CoinX Wallets.
                    </p>
                </div>
                <div class="cyber_arena__table wow fadeInUp">
                    <table class="table">
                        <thead>
                            <tr class="rounded-20">
                                <th scope="col">Vesting Time (UTC)</th>
                                <th scope="col">Release Percentage</th>
                                <th scope="col">Amount (CAT)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2024-10-05 10:10</td>
                                <td>25%</td>
                                <td>36,231</td>
                            </tr>
                            <tr>
                                <td>2024-01-05 10:00</td>
                                <td>5%</td>
                                <td>7,246</td>
                            </tr>
                            <tr>
                                <td>2024-02-05 10:00</td>
                                <td>5%</td>
                                <td>7,246</td>
                            </tr>
                            <tr>
                                <td>2024-03-05 10:00</td>
                                <td>5%</td>
                                <td>7,246</td>
                            </tr>
                            <tr>
                                <td>2024-04-05 10:00</td>
                                <td>5%</td>
                                <td>7,246</td>
                            </tr>
                            <tr class="last-footer">
                                <td class="fs-four fw-normal p1-color">Total</td>
                                <td class="fs-four fw-normal p1-color">100%</td>
                                <td class="fs-four fw-normal p1-color">65,215</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Cyber Arena Ends -->
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
