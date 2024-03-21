@extends('layouts/home', [
    'title' => 'swap - Cryptotraderspro',
])

@section('content')
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->

    {{-- HEADER --}}
    <x-header />

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
                                                <a class="cmn-btn py-2 px-6 px-md-8 p1-color" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8 p1-color" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8 p1-color" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="/account">Stack</a>
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
