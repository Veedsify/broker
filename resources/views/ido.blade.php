@extends('layouts/home', [
    'title' => 'Ido - CoinX',
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

    @endsection
  

