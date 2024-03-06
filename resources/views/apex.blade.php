@extends('layouts/home', [
    'title' => 'Apex - CoinX',
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
                        <a href="/cdn-cgi/l/email-protection#f7928f969a879b92b7909a969e9bd994989a"
                            class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                            <i class="ti ti-mail-opened-filled fs-four"></i>
                            <span class="__cf_email__"
                                data-cfemail="cfaab7aea2bfa3aa8fa8a2aea6a3e1aca0a2">[email&#160;protected]</span></a>
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
    <!-- Apex Section Starts -->
    <section class="apex_section pt-120 pb-120 bg7-color">
        <div class="container-fluid pt-17 pt-sm-20 pt-lg-0">
            <div class="row gap-6 gap-xxl-0 mb-6 mb-md-8">
                <div class="col-xxl-7">
                    <div class="row justify-content-center gap-5 gap-xxl-15">
                        <div class="col-xxl-3">
                            <div class="apex_section__slider d-inline-flex align-items-center gap-3">
                                <div class="apex_section__slider-selector">
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
                                <span class="v-line smx mb-4"></span>
                                <div class="apex_section__slider-total">
                                    <h5>$40,108.8</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 apex_section__respon">
                            <div class="apex_section__slideritem position-relative">
                                <div class="apex_section_sliders_btn position-absolute w-100 start-0">
                                    <div
                                        class="slider-btn d-flex align-items-center justify-content-between gap-4 me-7 me-xxl-0">
                                        <button type="button" aria-label="Slide Prev"
                                            class="ara-prev slide-buttonpart box_styleone">
                                            <i class="ti ti-chevron-left fs-four p6-color"></i>
                                        </button>
                                        <button type="button" aria-label="Slide Next" class="ara-next box_styletwo">
                                            <i class="ti ti-chevron-right fs-four p6-color"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="swiper apex_section_sliders ms-sm-8 me-3 me-sm-8 me-xxl-0">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="items-wrapper">
                                                <span class="apex_section__slideritem-text mb-1 d-block fs-seven">Index
                                                    Price</span>
                                                <span class="fs-ten">$40,108.8</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="items-wrapper">
                                                <span class="apex_section__slideritem-text mb-1 d-block fs-seven">Oracle
                                                    Price</span>
                                                <span class="fs-ten">$35,563.1</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="items-wrapper">
                                                <span class="apex_section__slideritem-text mb-1 d-block fs-seven">24H
                                                    Change</span>
                                                <span class="fs-ten h24">-2.71%</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="items-wrapper">
                                                <span class="apex_section__slideritem-text mb-1 d-block fs-seven">24H
                                                    Low</span>
                                                <span class="fs-ten">$34,823.5</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="items-wrapper">
                                                <span class="apex_section__slideritem-text mb-1 d-block fs-seven">24H
                                                    Low</span>
                                                <span class="fs-ten">$34,823.5</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="items-wrapper">
                                                <span class="apex_section__slideritem-text mb-1 d-block fs-seven">Funding
                                                    Rate</span>
                                                <span class="fs-ten p1-color">+0.001250%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5">
                    <div class="row justify-content-xxl-between gap-5">
                        <div class="col-md-6 col-xxl-8">
                            <div class="apex_section__groupbtn d-flex align-items-center gap-2 gap-md-4 ms-sm-4">
                                <button class="cmn-btn fourth-alt py-3 px-5 px-md-6 d-flex align-items-center gap-1"><i
                                        class="ti ti-brand-binance"></i>Dashboards</button>
                                <button class="cmn-btn py-3 px-5 px-md-6 d-flex align-items-center gap-1"><i
                                        class="ti ti-brand-binance"></i>Apex x ARB</button>
                            </div>
                        </div>
                        <div class="col-md-5 col-xxl-3">
                            <div class="apex_section__settingchat d-flex align-items-center justify-content-end gap-2 ">
                                <button class="p-1"><i class="ti ti-settings fs-four"></i></button>
                                <button class="p-1"><i class="ti ti-message-dots fs-four"></i></button>
                                <button class="px-1 br2 rounded-item"><i class="ti ti-question-mark fs-four"></i></button>
                                <a href="index.html" class="fw-bold p-1">CoinX</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-6">
                <div class="col-xxl-9">
                    <div class="row gy-5 gy-md-6">
                        <div class="col-lg-7 col-xxl-8">
                            <div class="apex_section__chartarea br2 rounded-20 bg1-color overflow-hidden h-100">
                                <div
                                    class="apex_section__chartheader p-5 p-md-6 d-flex align-items-center gap-3 gap-sm-5 gap-md-6 flex-wrap">
                                    <a href="javascript:void(0)">Price</a>
                                    <a href="javascript:void(0)">Depth</a>
                                    <a href="javascript:void(0)">Funding Rate</a>
                                    <a href="javascript:void(0)">Details</a>
                                    <a href="javascript:void(0)">Risk Limit</a>
                                </div>
                                <div class="apex_section__chartitem p-5 p-md-6">
                                    <div
                                        class="apex_section__chartitem-min d-flex align-items-center gap-3 gap-sm-5 gap-md-6 mb-5 mb-md-6 flex-wrap">
                                        <span>1m</span>
                                        <span>5m</span>
                                        <span>15m</span>
                                        <span>30m</span>
                                        <span>1h</span>
                                        <span>4h</span>
                                        <span>D</span>
                                        <span>W</span>
                                        <span>M</span>
                                        <span>Y</span>
                                        <span>|</span>
                                        <span>M</span>
                                        <span>|</span>
                                        <span>M</span>
                                        <span>|</span>
                                        <span>M</span>

                                    </div>
                                    <div class="apex_section__chartitem-title d-flex align-items-center gap-2">
                                        <p>036989.5 H37120.5 L36973,5 C37082.0 +92.5 (+0.25%)</p>
                                        <span class="p1-color fw_500 cpoint">$223K</span>
                                    </div>
                                    <div id="bigchart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xxl-4">
                            <div class="apex_section__spcialx overflow-auto">
                                <div
                                    class="custom-singletab apex_section__parttable br2 rounded-20 bg1-color overflow-hidden h-100 position-relative">
                                    <ul
                                        class="apex_section__heads apex_section__chartheader custom-tabs d-flex align-items-center gap-4 p-4 p-md-6">
                                        <li class="custom-nav-links ">
                                            <button class="tablinktwo activetwo clickable-active active">Order
                                                Book</button>
                                        </li>
                                        <li class="custom-nav-links">
                                            <button class="tablinktwo clickable-active">Recent Trades</button>
                                        </li>
                                    </ul>
                                    <div class="tabcontentstwo px-5 px-md-6 py-5 py-md-6">
                                        <div class="apex_section__orderbook custom-tabitem active">
                                            <div class="apex_section__tabletop mb-5 mb-md-6">
                                                <div
                                                    class="apex_section__tabletop-up d-flex align-items-center justify-content-between">
                                                    <!-- <div class="d-flex align-items-center gap-2">
                                                            <img class="cpoint" src="/assets/images/icon/cryptocurrencytab.png"
                                                                alt="Icon">
                                                            <img class="cpoint" src="/assets/images/icon/cryptocurrencytab.png"
                                                                alt="Icon">
                                                            <img class="cpoint" src="/assets/images/icon/cryptocurrencytab.png"
                                                                alt="Icon">
                                                        </div> -->
                                                    <div class="singletab w-100 ">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between gap-2 w-100">
                                                            <ul class="tablinks d-flex gap-1 mb-5">
                                                                <li class="nav-links">
                                                                    <button class="tablink active"><img class="cpoint"
                                                                            src="/assets/images/icon/taboneimag1.png"
                                                                            alt="Icon"></button>
                                                                </li>
                                                                <li class="nav-links">
                                                                    <button class="tablink"><img class="cpoint"
                                                                            src="/assets/images/icon/taboneimag2.png"
                                                                            alt="Icon"></button>
                                                                </li>
                                                                <li class="nav-links">
                                                                    <button class="tablink"><img class="cpoint"
                                                                            src="/assets/images/icon/taboneimag3.png"
                                                                            alt="Icon"></button>
                                                                </li>
                                                            </ul>
                                                            <select
                                                                class="apex_section__selects bg1-color p6-color py-2 rounded-2 mb-2"
                                                                name="state">
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                            </select>
                                                        </div>
                                                        <div class="tabcontents">
                                                            <div class="tabitem active">
                                                                <div class="apex_section__orderbook-table">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            <th>Price(USD)</th>
                                                                            <th class="text-end">Amount(BTC)</th>
                                                                            <th class="text-end">Total(BTC)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,163.0</td>
                                                                            <td class="text-end">13.920</td>
                                                                            <td class="text-end">45.769</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,162,5</td>
                                                                            <td class="text-end">7.624</td>
                                                                            <td class="text-end">31.849</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,128.5</td>
                                                                            <td class="text-end">7.912</td>
                                                                            <td class="text-end">93.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color fs-ten">36,828.5 <i
                                                                                    class="ti ti-arrow-narrow-up fs-five"></i>
                                                                            </td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end fs-ten"><i
                                                                                    class="ti ti-flag-filled fs-five"></i>
                                                                                61.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tabitem">
                                                                <div class="apex_section__orderbook-table">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            <th>Price(USD)</th>
                                                                            <th class="text-end">Amount(BTC)</th>
                                                                            <th class="text-end">Total(BTC)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color fs-ten">36,828.5 <i
                                                                                    class="ti ti-arrow-narrow-up fs-five"></i>
                                                                            </td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="p1-color text-end fs-ten"><i
                                                                                    class="ti ti-flag-filled fs-five"></i>
                                                                                61.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,163.0</td>
                                                                            <td class="text-end">13.920</td>
                                                                            <td class="p1-color text-end">45.769</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,162,5</td>
                                                                            <td class="text-end">7.624</td>
                                                                            <td class="p1-color text-end">31.849</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="p1-color text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="p1-color text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,128.5</td>
                                                                            <td class="text-end">7.912</td>
                                                                            <td class="p1-color text-end">93.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tabitem">
                                                                <div class="apex_section__orderbook-table">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            <th>Price(USD)</th>
                                                                            <th class="text-end">Amount(BTC)</th>
                                                                            <th class="text-end">Total(BTC)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,163.0</td>
                                                                            <td class="text-end">13.920</td>
                                                                            <td class="text-end">45.769</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,162,5</td>
                                                                            <td class="text-end">7.624</td>
                                                                            <td class="text-end">31.849</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,128.5</td>
                                                                            <td class="text-end">7.912</td>
                                                                            <td class="text-end">93.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="apex_section__orderbook custom-tabitem">
                                            <div class="apex_section__tabletop mb-5 mb-md-6">
                                                <div
                                                    class="apex_section__tabletop-up d-flex align-items-center justify-content-between">
                                                    <div class="singletab w-100 ">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between gap-2 w-100">
                                                            <ul class="tablinks d-flex gap-1 mb-5">
                                                                <li class="nav-links">
                                                                    <button class="tablink active"><img class="cpoint"
                                                                            src="/assets/images/icon/taboneimag1.png"
                                                                            alt="Icon"></button>
                                                                </li>
                                                                <li class="nav-links">
                                                                    <button class="tablink"><img class="cpoint"
                                                                            src="/assets/images/icon/taboneimag2.png"
                                                                            alt="Icon"></button>
                                                                </li>
                                                                <li class="nav-links">
                                                                    <button class="tablink"><img class="cpoint"
                                                                            src="/assets/images/icon/taboneimag3.png"
                                                                            alt="Icon"></button>
                                                                </li>
                                                            </ul>
                                                            <select
                                                                class="apex_section__selects bg1-color p6-color py-2 rounded-2 mb-2"
                                                                name="state">
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                            </select>
                                                        </div>
                                                        <div class="tabcontents">
                                                            <div class="tabitem ">
                                                                <div class="apex_section__orderbook-table">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            <th>Price(USD)</th>
                                                                            <th class="text-end">Amount(BTC)</th>
                                                                            <th class="text-end">Total(BTC)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,163.0</td>
                                                                            <td class="text-end">13.920</td>
                                                                            <td class="text-end">45.769</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,162,5</td>
                                                                            <td class="text-end">7.624</td>
                                                                            <td class="text-end">31.849</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p6-color">37,128.5</td>
                                                                            <td class="text-end">7.912</td>
                                                                            <td class="text-end">93.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color fs-ten">36,828.5 <i
                                                                                    class="ti ti-arrow-narrow-up fs-five"></i>
                                                                            </td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end fs-ten"><i
                                                                                    class="ti ti-flag-filled fs-five"></i>
                                                                                61.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tabitem active">
                                                                <div class="apex_section__orderbook-table">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            <th>Price(USD)</th>
                                                                            <th class="text-end">Amount(BTC)</th>
                                                                            <th class="text-end">Total(BTC)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color fs-ten">36,828.5 <i
                                                                                    class="ti ti-arrow-narrow-up fs-five"></i>
                                                                            </td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="p1-color text-end fs-ten"><i
                                                                                    class="ti ti-flag-filled fs-five"></i>
                                                                                61.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,163.0</td>
                                                                            <td class="text-end">13.920</td>
                                                                            <td class="p1-color text-end">45.769</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,162,5</td>
                                                                            <td class="text-end">7.624</td>
                                                                            <td class="p1-color text-end">31.849</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="p1-color text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="p1-color text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">37,128.5</td>
                                                                            <td class="text-end">7.912</td>
                                                                            <td class="p1-color text-end">93.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p1-color">32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="p1-color text-end">36,828.5</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tabitem">
                                                                <div class="apex_section__orderbook-table">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            <th>Price(USD)</th>
                                                                            <th class="text-end">Amount(BTC)</th>
                                                                            <th class="text-end">Total(BTC)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,163.0</td>
                                                                            <td class="text-end">13.920</td>
                                                                            <td class="text-end">45.769</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,162,5</td>
                                                                            <td class="text-end">7.624</td>
                                                                            <td class="text-end">31.849</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,152.5</td>
                                                                            <td class="text-end">3.912</td>
                                                                            <td class="text-end">24.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37,128.5</td>
                                                                            <td class="text-end">7.912</td>
                                                                            <td class="text-end">93.225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32,118.5</td>
                                                                            <td class="text-end">6.912</td>
                                                                            <td class="text-end">36,828.5</td>
                                                                        </tr>
                                                                    </table>
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
                        <div class="col-12">
                            <div class="apex_section__tablearea br2 rounded-20 bg1-color overflow-auto mt-5 mt-md-6">
                                <div
                                    class="apex_section__tablearea-header p-5 p-md-6 d-flex gap-4 align-items-center justify-content-between">
                                    <div
                                        class="apex_section__tablearea-hitem d-flex align-items-center gap-2 gap-sm-5 gap-md-6">
                                        <a href="javascript:void(0)">Position</a>
                                        <a href="javascript:void(0)">Closed P&L</a>
                                        <a href="javascript:void(0)">Active</a>
                                        <a href="javascript:void(0)">Conditional </a>
                                        <a href="javascript:void(0)">Fillod</a>
                                        <a href="javascript:void(0)">Order</a>
                                        <a href="javascript:void(0)">History</a>
                                    </div>
                                    <div
                                        class="apex_section__tablearea-hitemtwo d-flex align-items-center justify-content-end gap-2">
                                        <i class="ti ti-arrow-bear-right-2 p-1 bg2-color p4-color"></i>
                                        <a href="javascript:void(0)">Show All Position</a>
                                    </div>
                                </div>
                                <div class="apex_section__tablechart">
                                    <table>
                                        <tr class="text-center">
                                            <th class="fs-ten">Market</th>
                                            <th class="fs-ten">Qty</th>
                                            <th class="fs-ten">Value</th>
                                            <th class="fs-ten">Entry Price</th>
                                            <th class="fs-ten">Oracle Price</th>
                                            <th class="fs-ten">Liq. Price</th>
                                            <th class="fs-ten">TP/SL</th>
                                            <th class="fs-ten">Close By</th>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>0.027</td>
                                            <td>$810.8010</td>
                                            <td>$30,016.6</td>
                                            <td>$30,017.7</td>
                                            <td>5532565</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3  px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>0.03</td>
                                            <td>$42.7980</td>
                                            <td>$1426.70</td>
                                            <td>$1.426.70</td>
                                            <td>$0.05</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3 px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>1000</td>
                                            <td>$19.9980</td>
                                            <td>$0.0662</td>
                                            <td>$0.0658</td>
                                            <td>$0.06953</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3 px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>1000</td>
                                            <td>$19.9980</td>
                                            <td>$0.0662</td>
                                            <td>$0.0658</td>
                                            <td>$0.06953</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3 px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>1000</td>
                                            <td>$19.9980</td>
                                            <td>$0.0662</td>
                                            <td>$0.0658</td>
                                            <td>$0.06953</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3 px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>1000</td>
                                            <td>$19.9980</td>
                                            <td>$0.0662</td>
                                            <td>$0.0658</td>
                                            <td>$0.06953</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3 px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>1000</td>
                                            <td>$19.9980</td>
                                            <td>$0.0662</td>
                                            <td>$0.0658</td>
                                            <td>$0.06953</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3 px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>
                                        <tr class="text-center tablehover">
                                            <td>3.15%</td>
                                            <td>1000</td>
                                            <td>$19.9980</td>
                                            <td>$0.0662</td>
                                            <td>$0.0658</td>
                                            <td>$0.06953</td>
                                            <td>
                                                <button class="roboto addbtn fw-bold px-3 px-md-4 py-1 rounded-1"><i
                                                        class="ti ti-plus"></i>
                                                    Add</button>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center gap-3">
                                                <button
                                                    class="roboto fw-bold px-3 px-md-4 py-1 rounded-1 addbtn">Limit</button>
                                                <button
                                                    class="roboto fw-bold px-3 py-1 rounded-1 bg2-color p4-color">Market</button>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3">
                    <div class="apex_section__aside rounded-20 bg1-color h-100">
                        <div class="apex_section__aside-login pt-120 pb-120 px-7 px-md-13 text-center">
                            <img src="/assets/images/icon/chartlogin.png" class="mb-4 mb-md-5" alt="Icons">
                            <p class="roboto mb-4 mb-md-5">Connect your CoinX Web3 Wallet and enter the gateways to
                                Web3
                                derivatives trading.</p>
                            <a class="cmn-btn px-10 px-md-15 py-3" data-bs-toggle="modal" href="#exampleModalToggle"
                                role="button">CoinX Login</a>
                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg7-color rounded-20">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="exampleModalToggleLabel">Welcome to CoinX
                                            </h5>
                                            <button type="button" class="p6-color" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="ti ti-x fs-four"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="apex_section__aside-logintop d-flex align-items-center gap-3">
                                                <span>New to Bybit?</span> <i
                                                    class="ti ti-arrows-exchange-2 fs-four p1-color"></i>
                                                <button class="d-flex align-items-center gap-3 p1-color"
                                                    data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Sign
                                                    up
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
                                                                    <input class="br2 mb-3 mb-md-4" type="password"
                                                                        placeholder="Swap Fee">
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
                                                                    <input class="br2 mb-3 mb-md-4" type="password"
                                                                        placeholder="Swap Fee">
                                                                    <a class="d-block " href="javascript:void(0)">Forgot
                                                                        password</a>
                                                                    <button
                                                                        class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tabitem">
                                                            <div class="apex_section__qrcode">
                                                                <img src="/assets/images/qrcode.png" alt="rqcode">
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
                                            <h5 class="modal-title fs-5" id="exampleModalToggleLabel3">Create Account
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
                                                    data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Log
                                                    In
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
                                                                    <input class="br2 mb-3 mb-md-4" type="password"
                                                                        placeholder="Swap Fee">
                                                                    <span class="mb-3 mb-md-4 text-start">Referral Code
                                                                        (Optional)</span>
                                                                    <input class="br2 mb-3 mb-md-4" type="text">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <input type="checkbox" id="rcode"
                                                                            name="vehicle1" value="rcode">
                                                                        <label class="i-aggres text-start"
                                                                            for="rcode">Agree to Terms of Service
                                                                            and
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
                                                                    <input class="br2 mb-3 mb-md-4" type="password"
                                                                        placeholder="Swap Fee">
                                                                    <a class="d-block " href="javascript:void(0)">Forgot
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
                </div>
            </div>
        </div>
    </section>
    <!-- Apex Section Ends -->
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
