@extends('layouts/home', [
    'title' => 'Ido - CoinX',
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
                        <a href="/cdn-cgi/l/email-protection#24415c4549544841644349454d480a474b49"
                            class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                            <i class="ti ti-mail-opened-filled fs-four"></i>
                            <span class="__cf_email__"
                                data-cfemail="aecbd6cfc3dec2cbeec9c3cfc7c280cdc1c3">[email&#160;protected]</span></a>
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
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">IDO</h1>
                        <p class="roboto wow fadeInUp">Earn passive income easily with just one click!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- Odometer Section Starts -->
    <section class="counter_section pb-120 pt-120 bg5-color">
        <div class="container">
            <div class="row">
                <div
                    class="counter_section__area d-flex align-items-center justify-content-center justify-content-sm-between flex-wrap gap-5">
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="fs-one fw_500">$</span>
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="498.7"></span>
                            <span class="fs-one fw_500">K</span>
                        </div>
                        <h4 class="text-center">Total Raised</h4>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-md-block"></span>
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="245.91"></span>
                            <span class="fs-one fw_500">K</span>
                        </div>
                        <h4 class="text-center">Total Participants</h4>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-md-block"></span>
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="1700.84"></span>
                            <span class="fs-one fw_500">%</span>
                        </div>
                        <h4 class="text-center">Average ROI</h4>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-xl-block"></span>
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="12"></span>
                        </div>
                        <h4 class="text-center">Number of Projects</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Odometer Section Ends -->
    <!-- Completed Projects Starts -->
    <section class="completed_project pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="completed_project__title mb-10 mb-md-15
                ">
                    <h2 class="wow fadeInUp">Completed Projects</h2>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div
                        class="completed_project__item br2 rounded-3 bg1-color px-5 px-md-6 py-3 py-sm-6 py-lg-10 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-7 mb-md-10">
                            <div class="completed_project__itemhead-icon">
                                <img src="/assets/images/icon/pop-social.png" alt="Icon">
                            </div>
                            <div class="completed_project__itemhead-content">
                                <a href="javascript:void(0)">
                                    <h3 class="mb-1">Pop Social</h3>
                                </a>
                                <span class="fs-five">Ppt</span>
                            </div>
                        </div>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-5 mb-md-6">
                            <div class="text-start">
                                <span class="fs-five mb-1">Peak ROI</span>
                                <h3 class="p2-color">716.8%</h3>
                            </div>
                            <div class="text-end">
                                <span class="fs-five mb-1">Total Participants</span>
                                <h3>24,194</h3>
                            </div>
                        </div>
                        <p class="roboto mb-7 mb-md-10">Connect, share, and engage with our vibrant Pop Social
                            community.</p>
                        <div class="completed_project__ccard p-2 p-sm-3 p-lg-4 rounded-2 bg1-color br2">
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Raised</span>
                                <span class="roboto">$48,200/$50,000</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Issued</span>
                                <span class="roboto">500,000 PPT</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <span class="roboto">Completed At</span>
                                <span class="roboto">2024-10-25 10:00:00 UTC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div
                        class="completed_project__item br2 rounded-3 bg1-color px-5 px-md-6 py-3 py-sm-6 py-lg-10 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-7 mb-md-10">
                            <div class="completed_project__itemhead-icon">
                                <img src="/assets/images/icon/cyber-arena.png" alt="Icon">
                            </div>
                            <div class="completed_project__itemhead-content">
                                <a href="javascript:void(0)">
                                    <h3 class="mb-1">Cyber Arena</h3>
                                </a>
                                <span class="fs-five">CAT</span>
                            </div>
                        </div>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-5 mb-md-6">
                            <div class="text-start">
                                <span class="fs-five mb-1">Peak ROI</span>
                                <h3 class="p2-color">716.8%</h3>
                            </div>
                            <div class="text-end">
                                <span class="fs-five mb-1">Total Participants</span>
                                <h3>24,194</h3>
                            </div>
                        </div>
                        <p class="roboto mb-7 mb-md-10">Immerse in the ultimate digital battleground - welcome to Cyber
                            Arena.</p>
                        <div class="completed_project__ccard p-2 p-sm-3 p-lg-4 rounded-2 bg1-color br2">
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Raised</span>
                                <span class="roboto">$53,800/$100,000</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Issued</span>
                                <span class="roboto">72,463,769 CAT</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <span class="roboto">Completed At</span>
                                <span class="roboto">2024-10-06 10:00:00 UTC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div
                        class="completed_project__item br2 rounded-3 bg1-color px-5 px-md-6 py-3 py-sm-6 py-lg-10 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-7 mb-md-10">
                            <div class="completed_project__itemhead-icon">
                                <img src="/assets/images/icon/virtual-version.png" alt="Icon">
                            </div>
                            <div class="completed_project__itemhead-content">
                                <a href="javascript:void(0)">
                                    <h3 class="mb-1">Virtual Versions</h3>
                                </a>
                                <span class="fs-five">VV</span>
                            </div>
                        </div>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-5 mb-md-6">
                            <div class="text-start">
                                <span class="fs-five mb-1">Peak ROI</span>
                                <h3 class="p2-color">716.8%</h3>
                            </div>
                            <div class="text-end">
                                <span class="fs-five mb-1">Total Participants</span>
                                <h3>24,194</h3>
                            </div>
                        </div>
                        <p class="roboto mb-7 mb-md-10">Digital incarnations offering versatile and immersive
                            experiences for users.</p>
                        <div class="completed_project__ccard p-2 p-sm-3 p-lg-4 rounded-2 bg1-color br2">
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Raised</span>
                                <span class="roboto">$92,800/$100,000</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Issued</span>
                                <span class="roboto">17,142,845 VV</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <span class="roboto">Completed At</span>
                                <span class="roboto">2024-08-23 12:00:00 UTC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div
                        class="completed_project__item br2 rounded-3 bg1-color px-5 px-md-6 py-3 py-sm-6 py-lg-10 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-7 mb-md-10">
                            <div class="completed_project__itemhead-icon">
                                <img src="/assets/images/icon/berby-stars.png" alt="Icon">
                            </div>
                            <div class="completed_project__itemhead-content">
                                <a href="javascript:void(0)">
                                    <h3 class="mb-1">Derby Stars</h3>
                                </a>
                                <span class="fs-five">DSRUN</span>
                            </div>
                        </div>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-5 mb-md-6">
                            <div class="text-start">
                                <span class="fs-five mb-1">Peak ROI</span>
                                <h3 class="p2-color">399.99%</h3>
                            </div>
                            <div class="text-end">
                                <span class="fs-five mb-1">Total Participants</span>
                                <h3>2,865</h3>
                            </div>
                        </div>
                        <p class="roboto mb-7 mb-md-10">Experience the thrill of Derby Stars' competitive gaming
                            excitement and wins.</p>
                        <div class="completed_project__ccard p-2 p-sm-3 p-lg-4 rounded-2 bg1-color br2">
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Raised</span>
                                <span class="roboto">$28,500/$30,000</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Issued</span>
                                <span class="roboto">3,000,000 DSRUN</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <span class="roboto">Completed At</span>
                                <span class="roboto">2024-08-03 08:00:00 UTC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div
                        class="completed_project__item br2 rounded-3 bg1-color px-5 px-md-6 py-3 py-sm-6 py-lg-10 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-7 mb-md-10">
                            <div class="completed_project__itemhead-icon">
                                <img src="/assets/images/icon/cyber-arena.png" alt="Icon">
                            </div>
                            <div class="completed_project__itemhead-content">
                                <a href="javascript:void(0)">
                                    <h3 class="mb-1">GameSwift</h3>
                                </a>
                                <span class="fs-five">GSWIFT</span>
                            </div>
                        </div>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-5 mb-md-6">
                            <div class="text-start">
                                <span class="fs-five mb-1">Peak ROI</span>
                                <h3 class="p2-color">490.13%</h3>
                            </div>
                            <div class="text-end">
                                <span class="fs-five mb-1">Total Participants</span>
                                <h3>21,194</h3>
                            </div>
                        </div>
                        <p class="roboto mb-7 mb-md-10">Enhance gaming performance effortlessly with the powerful
                            optimization tool, GameSwift.</p>
                        <div class="completed_project__ccard p-2 p-sm-3 p-lg-4 rounded-2 bg1-color br2">
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Raised</span>
                                <span class="roboto">$47,600/$50,000</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Issued</span>
                                <span class="roboto">3,472,222 GSWIFT</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <span class="roboto">Completed At</span>
                                <span class="roboto">2024-10-06 10:00:00 UTC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div
                        class="completed_project__item br2 rounded-3 bg1-color px-5 px-md-6 py-3 py-sm-6 py-lg-10 wow fadeInUp">
                        <div class="completed_project__itemhead d-flex gap-3 mb-7 mb-md-10">
                            <div class="completed_project__itemhead-icon">
                                <img src="/assets/images/icon/eldarune.png" alt="Icon">
                            </div>
                            <div class="completed_project__itemhead-content">
                                <a href="javascript:void(0)">
                                    <h3 class="mb-1">Eldarune</h3>
                                </a>
                                <span class="fs-five">ELDA</span>
                            </div>
                        </div>
                        <div
                            class="completed_project__roitotal d-flex align-items-center justify-content-between gap-2 mb-5 mb-md-6">
                            <div class="text-start">
                                <span class="fs-five mb-1">Peak ROI</span>
                                <h3 class="p2-color">533.3%</h3>
                            </div>
                            <div class="text-end">
                                <span class="fs-five mb-1">Total Participants</span>
                                <h3>24,194</h3>
                            </div>
                        </div>
                        <p class="roboto mb-7 mb-md-10">Digital incarnations offering versatile and immersive
                            experiences for users.</p>
                        <div class="completed_project__ccard p-2 p-sm-3 p-lg-4 rounded-2 bg1-color br2">
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Raised</span>
                                <span class="roboto">$47,300/$50,000</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between mb-3">
                                <span class="roboto">Total Issued</span>
                                <span class="roboto">ELDA</span>
                            </div>
                            <div
                                class="completed_project__ccard-citem d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <span class="roboto">Completed At</span>
                                <span class="roboto">2024-05-29 10:00:00 UTC</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="completed_project__btn text-center mt-3 mt-md-4">
                        <a href="javascript:void(0)" class="cmn-btn py-2 py-md-3 px-3 px-md-4 rounded-2">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Completed Projects Ends -->
    <!-- How to Join Starts -->
    <section class="how_join bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div
                    class="how_join__title d-flex align-items-center justify-content-between gap-4 flex-wrap mb-8 mb-md-12">
                    <h2 class="wow fadeInUp">How to Join</h2>
                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 d-center roboto wow fadeInUp">VIEW
                        MORE <i class="ti ti-chevron-right fs-four"></i></a>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/subscription.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Subscription</h4>
                        <p class="text-center">Please ensure your wallet balance meets the requirements for
                            participation.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/snapshot.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Snapshot</h4>
                        <p class="text-center">Commit the required tokens for a chance to win the project's token
                            allocation.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/lottery.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Lottery</h4>
                        <p class="text-center">Participate in our exciting lottery games for a chance to win big
                            prizes!</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div
                        class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div
                            class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="/assets/images/icon/redemption.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Redemption</h4>
                        <p class="text-center">Complete the process for redemption to access exclusive rewards
                            effortlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to Join Ends -->
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
  

