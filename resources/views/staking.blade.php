@extends('layouts/home', [
    'title' => 'Staking Pools',
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

    <!--Common hero Section Starts -->
    <section class="cmn_heros pb-120 pt-120">
        <div class="container">
            <div class="row justify-content-center mt-5 mt-md-8 mt-lg-0">
                <div class="col-xxl-6">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Staking Pools</h1>
                        <p class="roboto wow fadeInUp">Earn passive income easily with just one click!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- What's Trending Section starts -->
    <section class="what_trending bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row categories__header mb-4 mb-md-6">
                <div class="col-xl-7 col-lg-8 col-sm-8">
                    <div class="categories__title">
                        <h2 class="mb-3 mb-md-4 wow fadeInUp">What's Trending</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-sm-4 categories_top_btn mt-6 mt-sm-0">
                    <div class="slider-btn d-center justify-content-start justify-content-sm-end gap-4">
                        <button type="button" aria-label="Slide Prev"
                            class="ara-prev d-center cmn-btn px-2 py-1 rounded-5">
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
                <div class="swiper categories_top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="/assets/images/icon/poolsicon1.png" alt="icon">
                                    <h4 class="mb-1">ETH</h4>
                                    <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">3.7%</span>
                                    <span class="mb-6 mb-md-8 d-block ">Apy</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="/assets/images/icon/poolsicon2.png" alt="icon">
                                    <h4 class="mb-1">DAI</h4>
                                    <span class="mb-5 mb-md-6 d-block ">Maker Dao</span>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.0%</span>
                                    <span class="mb-6 mb-md-8 d-block ">Apy</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="/assets/images/icon/poolsicon3.png" alt="icon">
                                    <h4 class="mb-1">BNB</h4>
                                    <span class="mb-5 mb-md-6 d-block ">BabySwap</span>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.8%</span>
                                    <span class="mb-6 mb-md-8 d-block ">Apy</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="/assets/images/icon/poolsicon4.png" alt="icon">
                                    <h4 class="mb-1">USDC</h4>
                                    <span class="mb-5 mb-md-6 d-block ">Curve</span>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">4.5%</span>
                                    <span class="mb-6 mb-md-8 d-block ">Apy</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="/assets/images/icon/poolsicon1.png" alt="icon">
                                    <h4 class="mb-1">ETH</h4>
                                    <span class="mb-5 mb-md-6 d-block ">Lido Dao</span>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">3.7%</span>
                                    <span class="mb-6 mb-md-8 d-block ">Apy</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="/assets/images/icon/poolsicon2.png" alt="icon">
                                    <h4 class="mb-1">DAI</h4>
                                    <span class="mb-5 mb-md-6 d-block ">Maker Dao</span>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.0%</span>
                                    <span class="mb-6 mb-md-8 d-block ">Apy</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="/assets/images/icon/poolsicon3.png" alt="icon">
                                    <h4 class="mb-1">BNB</h4>
                                    <span class="mb-5 mb-md-6 d-block ">BabySwap</span>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.8%</span>
                                    <span class="mb-6 mb-md-8 d-block ">Apy</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What's Trending Section ends -->
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
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
    <!-- Staking Process starts -->
    <section class="staking_process bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-10 gy-sm-6">
                <div class="staking_process__title text-center mb-md-15">
                    <h2 class="mb-5 mb-md-6 wow fadeInUp">Staking Process</h2>
                    <p class="roboto wow fadeInUp">Earn rewards by participating in our straightforward and rewarding
                        staking
                        process.</p>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="staking_process__item text-center wow fadeInUp position-relative">
                        <img class="mb-6 mb-md-8" src="/assets/images/icon/process1.png" alt="Icon">
                        <h4 class="mb-4">Prepare Funds</h4>
                        <p>Convert assets required for staking</p>
                        <img class="staking_process__item-arrowicon position-absolute d-none d-sm-block"
                            src="/assets/images/icon/processuparrow.png" alt="arrow icon">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="staking_process__item text-center wow fadeInUp position-relative">
                        <img class="mb-6 mb-md-8" src="/assets/images/icon/process2.png" alt="Icon">
                        <h4 class="mb-4">Stake Assets</h4>
                        <p>Invest assets into staking pools</p>
                        <img class="staking_process__item-arrowicontwo position-absolute d-none d-md-block"
                            src="/assets/images/icon/processdownarrow.png" alt="arrow icon">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 position-relative">
                    <div class="staking_process__item text-center wow fadeInUp">
                        <img class="mb-6 mb-md-8" src="/assets/images/icon/process3.png" alt="Icon">
                        <h4 class="mb-4">Earn Yield</h4>
                        <p>Invest assets into staking pools</p>
                        <img class="staking_process__item-arrowicon position-absolute d-none d-sm-block  d-md-none d-xl-block"
                            src="/assets/images/icon/processuparrow.png" alt="arrow icon">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="staking_process__item text-center wow fadeInUp">
                        <img class="mb-6 mb-md-8" src="/assets/images/icon/process4.png" alt="Icon">
                        <h4 class="mb-4">Collect Proceeds</h4>
                        <p>Invest assets into staking pools</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Staking Process ends -->
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
