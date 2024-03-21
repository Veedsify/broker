@extends('layouts/home', [
    'title' => 'Rewards - Cryptotraderspro',
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
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Rewards</h1>
                        <p class="roboto wow fadeInUp">Earn passive income easily with just one click!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->

    <!-- Rewards Section Starts Starts -->
    <section class="rewards_section bg5-color pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="rewards_section__content">
                    <div class="rewards_section__tabs">
                        <div class="singletab">
                            <ul
                                class="tablinks d-flex align-items-center flex-wrap flex-sm-nowrap gap-4 gap-sm-8 gap-md-10 mb-10 mb-md-15 wow fadeInUp">
                                <li class="nav-links position-relative">
                                    <button
                                        class="tablink active d-flex align-items-center gap-2 gap-md-3 clickable-active fs-four">
                                        <span class="bg2-color px-1 rounded-5">
                                            <i class="ti ti-coin p4-color"></i>
                                        </span>Tasks</button>
                                </li>
                                <li class="nav-links position-relative">
                                    <button
                                        class="tablink d-flex align-items-center gap-2 gap-md-3 clickable-active fs-four">
                                        <span class="bg2-color px-1 rounded-5">
                                            <i class="ti ti-coin p4-color"></i>
                                        </span>Airdrops</button>
                                </li>
                                <li class="nav-links position-relative">
                                    <button
                                        class="tablink d-flex align-items-center gap-2 gap-md-3 clickable-active fs-four">
                                        <span class="bg2-color px-1 rounded-5">
                                            <i class="ti ti-coin p4-color"></i>
                                        </span>My Rewards</button>
                                </li>
                            </ul>

                            <div class="tabcontents">
                                <div class="tabitem active">
                                    <div class="rewards_section__tabone">
                                        <div
                                            class="rewards_section__ongoing p-6 p-md-8 rounded-20 bg9-color br2 mb-10 mb-md-15 wow fadeInUp">
                                            <h3 class="mb-6 mb-md-8">Ongoing Tasks</h3>
                                            <div
                                                class="rewards_section__cards d-flex align-items-center flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                <div class="rewards_section__cards-thumb">
                                                    <img src="/assets/images/swapcard.png" class="rounded-4"
                                                        alt="Icons">
                                                </div>
                                                <div class="rewards_section__cards-decs me-xl-10 me-xxl-20">
                                                    <h4 class="mb-5 mb-md-6">Swap & Hold to Share 30,000 USDC</h4>
                                                    <ul class="d-flex flex-column gap-1">
                                                        <li>Swap at least 200 USDC on Bybit Web3 to be eligible a 2X gas
                                                            fee refund.</li>
                                                        <li>Hold your C for a consecutive 7 days to share a 20,000 USDC
                                                            prize pool.</li>
                                                        <li>Please refer to the event landing page for terms &
                                                            conditions.</li>
                                                    </ul>
                                                </div>
                                                <div class="rewards_section__cards-btn">
                                                    <a href="login.html" class="py-3 px-6 cmn-btn">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="rewards_section__upcomming p-6 p-md-8 rounded-20 br2 bg1-color mb-10 mb-md-15">
                                            <div class="rewards_section__upcomming-one mb-8 mb-md-6 wow fadeInUp">
                                                <h3 class="mb-6 mb-md-8">Upcoming Tasks</h3>
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard1.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">Trade USDC on CTP to Share a 20K
                                                            USDC
                                                            Prize Pool</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>To qualify for the trading competition, participants
                                                                must maintain a total equity of at least 200 USDC.</li>
                                                            <li>Trading Volume = Buy Volume + Sell Volume.</li>
                                                            <li>Only USDC trading volume will be included in the trading
                                                                volume statistics in the trading competition.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Upcoming</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two wow fadeInUp">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard2.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">Staking Bonuses</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Provide liquidity a 2X gas
                                                                fee refund to Web3 Staking Pools to earn bonuses!</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Upcoming</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rewards_section__upcomming p-6 p-md-8 rounded-20 br2 bg1-color">
                                            <div class="rewards_section__upcomming-one mb-8 mb-md-6">
                                                <h3 class="mb-6 mb-md-8 wow fadeInUp">Previous Tasks</h3>
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6 wow fadeInUp">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/swapcardtwo.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">Mantle x Bybit Web3 MNT Event</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Visit the Mantle Journey page and connect with your
                                                                CTP Wallet.</li>
                                                            <li>Mint a Mantle Journey Soulbound Token (MJSBT) using your
                                                                CTP Wallet.</li>
                                                            <li>The rewards airdrop is scheduled for 2024-09-14 10:00
                                                                UTC and 2024-09-21 10:00 UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6 wow fadeInUp">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard4.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Pro Deposit Bash</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6 wow fadeInUp">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard5.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Web3 IDO Exclusive Rewards</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6 wow fadeInUp">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard6.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Deposit Bonus</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6 wow fadeInUp">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard7.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Pro Exclusive Bonus</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="rewards_section__tabone">
                                        <div
                                            class="rewards_section__upcomming p-6 p-md-8 rounded-20 br2 bg1-color mb-10 mb-md-15">
                                            <div class="rewards_section__upcomming-one mb-8 mb-md-6">
                                                <h3 class="mb-6 mb-md-8">Upcoming Tasks</h3>
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard1.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">Trade USDC on CTP to Share a 20K
                                                            USDC
                                                            Prize Pool</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>To qualify for the trading competition, participants
                                                                must maintain a total equity of at least 200 USDC.</li>
                                                            <li>Trading Volume = Buy Volume + Sell Volume.</li>
                                                            <li>Only USDC trading volume will be included in the trading
                                                                volume statistics in the trading competition.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Upcoming</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard2.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">Staking Bonuses</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Provide liquidity a 2X gas
                                                                fee refund to Web3 Staking Pools to earn bonuses!</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Upcoming</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rewards_section__upcomming p-6 p-md-8 rounded-20 br2 bg1-color">
                                            <div class="rewards_section__upcomming-one mb-8 mb-md-6">
                                                <h3 class="mb-6 mb-md-8">Previous Tasks</h3>
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/swapcard.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">Mantle x Bybit Web3 MNT Event</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Visit the Mantle Journey page and connect with your
                                                                CTP Wallet.</li>
                                                            <li>Mint a Mantle Journey Soulbound Token (MJSBT) using your
                                                                CTP Wallet.</li>
                                                            <li>The rewards airdrop is scheduled for 2024-09-14 10:00
                                                                UTC and 2024-09-21 10:00 UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard4.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Pro Deposit Bash</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard5.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Web3 IDO Exclusive Rewards</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard6.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Deposit Bonus</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard7.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Pro Exclusive Bonus</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="rewards_section__tabone">
                                        <div class="rewards_section__upcomming p-6 p-md-8 rounded-20 br2 bg1-color">
                                            <div class="rewards_section__upcomming-one mb-8 mb-md-6">
                                                <h3 class="mb-6 mb-md-8">Previous Tasks</h3>
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/swapcard.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">Mantle x Bybit Web3 MNT Event</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Visit the Mantle Journey page and connect with your
                                                                CTP Wallet.</li>
                                                            <li>Mint a Mantle Journey Soulbound Token (MJSBT) using your
                                                                CTP Wallet.</li>
                                                            <li>The rewards airdrop is scheduled for 2024-09-14 10:00
                                                                UTC and 2024-09-21 10:00 UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard4.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Pro Deposit Bash</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard5.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Web3 IDO Exclusive Rewards</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard6.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Deposit Bonus</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rewards_section__upcomming-two mb-8 mb-md-6">
                                                <div
                                                    class="rewards_section__card d-flex flex-wrap flex-xxl-nowrap gap-5 gap-md-6">
                                                    <div class="rewards_section__card-thumb">
                                                        <img src="/assets/images/upcomingcard7.png" class="rounded-4"
                                                            alt="Icons">
                                                    </div>
                                                    <div class="rewards_section__card-decs me-xl-10 me-xxl-20">
                                                        <h4 class="mb-5 mb-md-6">CTP Pro Exclusive Bonus</h4>
                                                        <ul class="d-flex flex-column gap-1">
                                                            <li>Deposit on CTP via your CTP Wallet or CTP Funding
                                                                Account to win up to 500 $ARB.</li>
                                                            <li>Campaign Period: 2024-07-17 12:00 PM UTC - 2024-08-14
                                                                12:00 PM UTC.</li>
                                                            <li>Click the Claim button in the CTP activity page to
                                                                confirm claim from 2024-08-14 12:00 PM UTC to 2024-08-24
                                                                12:00 PM UTC.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="rewards_section__card-btn">
                                                        <button class="py-3 px-6 cmn-btn">Ended</button>
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
            </div>
        </div>
    </section>
    <!-- Rewards Section Starts Ends -->
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
                                        What currencies does the CTP Exchange support?
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
                                        What is the CTP Exchange?
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
                                        What currencies does the CTP Exchange support?
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
                                        What currencies does the CTP Exchange support?
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
                                        What is the CTP Exchange?
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
                                        What currencies does the CTP Exchange support?
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
