@extends('layouts/home', [
    'title' => 'Staking - Stacking Details',
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
    <!-- stETH-NG section starts -->
    <section class="staking_details markets_section pb-120 pt-120 bg9-color">
        <div class="container pt-6 pt-sm-10 pt-lg-0">
            <div class="row">
                <div class="col-xl-8 mb-10 mb-xl-0">
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="staking_details__head d-flex align-items-center justify-content-between mb-8 mb-md-10 wow fadeInUp">
                                <div
                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <img src="/assets/images/icon/steth-ngicon.png" alt="Icons">
                                        <img class="pools_table__totalitem-img"
                                            src="/assets/images/icon/tableicon1.png" alt="Icons">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="javascript:void(0)" class="roboto fs-four">stETH-NG</a>
                                        <span class="roboto">curve</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end gap-2">
                                    <h2 class="fw_500 p1-color">3.40%</h2>
                                    <span class="fs-four fw-normal">APY</span>
                                </div>
                            </div>

                            <div class="staking_details__chartsitem bg7-color rounded-20 mb-8 mb-md-10 wow fadeInUp">
                                <div id="chart-timelinetwo">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row mb-10 mb-15">
                        <div class="col-12">
                            <div class="wow fadeInUp">
                                <div
                                    class="staking_details__tableone p-3 p-sm-5 p-md-6 rounded-20 br1 position-relative overflow-hidden">
                                    <h4 class="mb-6 mb-md-8">Current Investment in Pool</h4>
                                    <div class="staking_details__tableone-scol overflow-auto">
                                        <div class="staking_details__tableone-part p-3 p-sm-5 p-md-6 rounded-20">
                                            <table class="w-100">
                                                <tr>
                                                    <th class="p1-color">Investment</th>
                                                    <th class="p1-color">Portfolio PnL</th>
                                                    <th class="p1-color">LP Quantity</th>
                                                    <th class="p1-color">Portfolio Value</th>
                                                    <th class="p1-color">Accumulated Unclaimed</th>
                                                </tr>
                                                <tr>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10 mb-15">
                        <div class="col-12">
                            <div class="overflow-auto wow fadeInUp">
                                <div
                                    class="staking_details__tableone p-3 p-sm-5 p-md-6 rounded-20 br1 position-relative overflow-hidden">
                                    <h4 class="mb-6 mb-md-8">Pool Information</h4>
                                    <div class="staking_details__tableone-scol overflow-auto">
                                        <div class="staking_details__tableone-part p-3 p-sm-5 p-md-6 rounded-20 ">
                                            <table class="w-100">
                                                <tr>
                                                    <th class="p1-color">TVL</th>
                                                    <th class="p1-color">Pool Composition</th>
                                                    <th class="p1-color">Network</th>
                                                </tr>
                                                <tr>
                                                    <td>$ 106.45 M</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-15 gap-md-20 mb-3">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <img src="/assets/images/icon/stethtwo.png"
                                                                    alt="Icon">
                                                                <span class="roboto">STETH</span>
                                                            </div>
                                                            <span class="roboto">17.92 K</span>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-15 gap-md-20">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <img src="/assets/images/icon/stethone.png"
                                                                    alt="Icon">
                                                                <span class="roboto">STETH</span>
                                                            </div>
                                                            <span class="roboto">33.92 K</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="/assets/images/icon/stethtwo.png"
                                                                alt="Icon">
                                                            <span class="roboto">Ethereum</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="overflow-auto wow fadeInUp">
                                <div
                                    class="staking_details__tableone p-3 p-sm-5 p-md-6 rounded-20 br1 position-relative overflow-hidden">
                                    <h4 class="mb-6 mb-md-8">Smart Contracts</h4>
                                    <div class="staking_details__tableone-scol overflow-auto">
                                        <div class="staking_details__tableone-part p-3 p-sm-5 p-md-6 rounded-20 ">
                                            <table class="w-100">
                                                <tr>
                                                    <th class="p1-color">Pool</th>
                                                    <th class="p1-color">Token</th>
                                                    <th class="p1-color">Gauge</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="copy-text">
                                                            <input type="text" class="text w-50"
                                                                value="0xe2...843a">
                                                            <button><i class="ti ti-copy"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="copy-text">
                                                            <input type="text" class="text w-50"
                                                                value="0xe2...843a">
                                                            <button><i class="ti ti-copy"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="copy-text">
                                                            <input type="text" class="text w-50"
                                                                value="0xe2...843a">
                                                            <button><i class="ti ti-copy"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div
                        class="staking_details__aside py-6 py-md-8 px-5 px-md-6 bg7-color br2 rounded-20 wow fadeInUp">
                        <div
                            class="staking_details__aside-title d-flex align-items-center justify-content-between mb-5 mb-md-6">
                            <span class="p1-color fs-four">Invest</span>
                            <span class="fs-four">Redeem</span>
                        </div>
                        <div class="apex_section__slider-selector markets_section__rcard-selector mb-6 w-50">
                            <div class="f-group">
                                <select id="select5" class="f-control f-dropdown">
                                    <option value="1" selected data-image="assets/images/icon/tableicon11.png">
                                        Bitcoin (BTC)</option>
                                    <option value="2" data-image="assets/images/icon/currencyCategory5333a.png">
                                        ETH</option>
                                    <option value="3" data-image="assets/images/icon/currencyCategory6bd4a.png">
                                        LFC</option>
                                    <option value="4" data-image="assets/images/icon/currencyCategory71949.png">
                                        USDT</option>
                                </select>
                            </div>
                        </div>
                        <div class="markets_section__rcard-card p-4 p-sm-5 p-md-6 bg1-color rounded-20 mb-4">
                            <div class="d-flex align-items-center gap-3 justify-content-between mb-3">
                                <span class="roboto">Pay</span>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="ti ti-wallet fs-five"></i>
                                    <span class="opacity-50">---</span>
                                    <span>ETH</span>
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
                                </div>
                                <span class="fs-four opacity-50">0.00</span>
                            </div>
                        </div>
                        <div
                            class="staking_details__aside-inputarea d-flex align-items-center justify-content-between gap-3 py-3 px-3 px-md-4 rounded-3 br2">
                            <span>Estimated Cost</span>
                            <span>---</span>
                        </div>
                        <div class="staking_details__aside-dropdown text-center">
                            <button id="asidecard" class="cmn-btn px-2 py-1 rounded-5">
                                <i class="ti ti-chevron-down fs-five"></i>
                            </button>
                            <div id="asidecardpanel" class="staking_details__aside-dropdownitem">
                                <div
                                    class="staking_details__aside-inputarea d-flex align-items-center justify-content-between gap-3 py-3 px-3 px-md-4 rounded-3 br2 mb-4">
                                    <span>Estimated Daily Yield</span>
                                    <span>---</span>
                                </div>
                                <div
                                    class="staking_details__aside-inputarea d-flex align-items-center justify-content-between gap-3 py-3 px-3 px-md-4 rounded-3 br2 mb-5 mb-md-6">
                                    <span>Estimated Cost</span>
                                    <span>---</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="staking_details__aside-inputarea d-flex align-items-center justify-content-between gap-3 py-3 px-3 px-md-4 rounded-3 br2 mb-4">
                            <span>Estimated Daily Yield</span>
                            <span>---</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-5 mb-md-6">
                            <input type="checkbox" id="order" name="order" value="order">
                            <label for="order">Stake Protect Order</label>
                        </div>
                        <button class="cmn-btn py-3 px-6 w-100">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stETH-NG section ends -->

@endsection