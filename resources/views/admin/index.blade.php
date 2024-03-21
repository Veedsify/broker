@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-admin.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-admin.header />
    {{-- Header end --}}

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content ">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow mb-2 md:mb-0">
                            Dashboard</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900  ">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 ">Dashboard</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 md:grid-cols-2 2xl:grid-cols-4">
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 ">My Wallet</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 ">
                                            $<span class="counter-value" data-target="865.2">865.2</span>
                                            k
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart1" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-1">
                                <span
                                    class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium ">+
                                    $20.9k</span>
                                <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 ">Since last
                                    week</span>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 ">Deposited</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 ">
                                            <span class="counter-value" data-target="865.2">6258</span>
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-1">
                                <a href=""
                                    class=" rtl:mr-1.5 text-gray-700 text-13  underline font-bold text-green-500">Deposited
                                    History</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 ">Withdrawn</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 ">
                                            $<span class="counter-value" data-target="865.2">4.32</span>M
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart3" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-1">
                                <a href=""
                                    class=" rtl:mr-1.5 text-gray-700 text-13  underline font-bold text-green-500">Withdrawal
                                    History</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 ">Profit Ration</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 ">
                                            <span class="counter-value" data-target="865.2">12.57%</span>
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart4" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium ">+
                                    2.95%</span>
                                <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 ">Since last
                                    week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 lg:grid-cols-12">
                    <div class="col-span-12 2xl:col-span-5">
                        <div class="card   card-h-100">
                            <div class="card-body">
                                <div class="flex flex-wrap items-center mb-6">
                                    <h5 class="mr-2 font-medium text-gray-800 text-15 ">Wallet Balance
                                    </h5>
                                    <div class="flex gap-1 ltr:ml-auto rtl:mr-auto">
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 0 hover:text-white focus:bg-gray-500 focus:text-white   hover:bg-gray-500  ">ALL</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium border-transparent btn text-[12.25px] bg-violet-50/50 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white   ">1M</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 0 hover:text-white focus:bg-gray-500 focus:text-white   hover:bg-gray-500  ">6M</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 0 hover:text-white focus:bg-gray-500 focus:text-white   hover:bg-gray-500  ">1Y</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 2xl:gap-6 justify-items-stretch">
                                    <div class="items-center col-span-12 mr-2 md:col-span-6 justify-self-center 2xl:mr-0">
                                        <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]'
                                            class="apex-charts"></div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6">
                                        <div class="text-center mt-sm-0 md:text-left">
                                            <div>
                                                <p class="mb-2 ">
                                                    <i
                                                        class="mr-2 text-green-500 align-middle mdi mdi-circle text-10 "></i>
                                                    Bitcoin
                                                </p>
                                                <h6 class="text-gray-800 ">0.4412 BTC =
                                                    <span class="font-normal text-gray-700  text-14">$
                                                        4025.32</span>
                                                </h6>
                                            </div>
                                            <div class="pt-2 mt-6">
                                                <p class="mb-2 ">
                                                    <i
                                                        class="mr-2 align-middle mdi mdi-circle text-10 text-violet-500 "></i>
                                                    Ethereum
                                                </p>
                                                <h6 class="text-gray-800 ">4.5701 ETH =
                                                    <span class="font-normal text-gray-700  text-14">$
                                                        1123.64</span>
                                                </h6>
                                            </div>
                                            <div class="pt-2 mt-6">
                                                <p class="mb-2 ">
                                                    <i class="mr-2 align-middle mdi mdi-circle text-10 text-sky-500"></i>
                                                    Litecoin
                                                </p>
                                                <h6 class="text-gray-800 ">35.3811 LTC =
                                                    <span class="font-normal text-gray-700  text-14">$
                                                        2263.09</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 2xl:col-span-7">
                        <div class="grid grid-cols-12 2xl:gap-6">
                            <div class="col-span-12 2xl:col-span-8">
                                <div class="card   card-h-100">
                                    <div class="card-body">
                                        <div class="flex flex-wrap items-center mb-6">
                                            <h5 class="mr-2 text-gray-800 text-15 ">Invested Overview
                                            </h5>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <select
                                                    class="py-0 form-select form-select-sm ltr:pl-4 rtl:pr-4 border-gray-50 bg-gray-50/20  ">
                                                    <option value="MAY" selected="">May</option>
                                                    <option value="AP">April</option>
                                                    <option value="MA">March</option>
                                                    <option value="FE">February</option>
                                                    <option value="JA">January</option>
                                                    <option value="DE">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12 2xl:gap-6">
                                            <div class="col-span-12 mr-3 md:col-span-6 2xl:mr-0 justify-self-center">
                                                <div id="invested-overview" data-colors='["#5156be", "#34c38f"]'
                                                    class="apex-charts"></div>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <div>
                                                    <p class="mb-1 text-gray-700 ">Invested Amount</p>
                                                    <h4 class="mb-2 text-gray-800 text-21 ">$ 6134.39
                                                    </h4>
                                                    <p class="mb-6 text-gray-700 "> + 0.0012.23 ( 0.2
                                                        % )
                                                        <i class="ml-1 text-green-500 mdi mdi-arrow-up"></i>
                                                    </p>
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-2 text-gray-600  uppercase text-11 leading-[16.5px]">
                                                                    Income</p>
                                                                <h5 class="mb-2 text-gray-800 ">$
                                                                    2632.46</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-2 text-gray-600  uppercase text-11 leading-[16.5px]">
                                                                    Expenses</p>
                                                                <h5 class="mb-2 text-gray-800 ">-$
                                                                    924.38</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <a href="#"
                                                            class="btn py-1.5 px-2.5 text-xs bg-violet-500 text-white shadow-md shadow-violet-100 border-transparent hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 ">View
                                                            more
                                                            <i class="mdi mdi-arrow-right ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 2xl:col-span-4">
                                <div
                                    class="relative overflow-hidden border-transparent shadow card card-h-100 bg-violet-500 shadow-violet-100 ">
                                    <div class="relative text-center card-body">
                                        <div class="absolute -top-2 -right-2">
                                            <i class="mdi mdi-bitcoin widget-box-1-icon text-7xl text-white/10"></i>
                                        </div>
                                        <div dir="ltr" class="swiper login-slider bitcon-news">
                                            <div class="swiper-wrapper">
                                                <div class="mb-8 swiper-slide">
                                                    <div class="w-12 h-12 mx-auto text-center rounded-full bg-white/30">
                                                        <span class="text-2xl text-white">
                                                            <i class="leading-loose mdi mdi-currency-btc"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="mt-4 text-white lh-base fw-normal text-21">
                                                        <span>Bitcoin</span>
                                                        <span class="font-normal">News</span>
                                                    </h4>
                                                    <p class="mt-2 mb-4 text-white/50 text-13 ">
                                                        Bitcoin prices fell sharply amid the global sell-off in
                                                        equities. Negative news
                                                        over the Bitcoin past week has dampened Bitcoin basics
                                                        sentiment for bitcoin.
                                                    </p>

                                                    <button type="button" href="apps-invoices-list.html"
                                                        class="btn py-1.5 px-2.5 text-xs border-transparent bg-white  shadow shadow-white/20"><i
                                                            class="ml-1 mdi mdi-arrow-right"></i> View details</button>
                                                </div>
                                                <div class="mb-8 swiper-slide">
                                                    <div class="w-12 h-12 mx-auto text-center rounded-full bg-white/30">
                                                        <span class="text-2xl text-white">
                                                            <i class="leading-loose mdi mdi-currency-btc"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="mt-4 text-white lh-base fw-normal text-21">
                                                        <span>ETH</span>
                                                        <span class="font-normal">News</span>
                                                    </h4>
                                                    <p class="mt-2 mb-4 text-white/50 text-13 ">
                                                        Bitcoin prices fell sharply amid the global sell-off in
                                                        equities. Negative news
                                                        over the Bitcoin past week has dampened Bitcoin basics
                                                        sentiment for bitcoin.
                                                    </p>

                                                    <button type="button" href="apps-invoices-list.html"
                                                        class="btn py-1.5 px-2.5 text-xs border-transparent bg-white  shadow shadow-white/20">
                                                        <i class="ml-1 mdi mdi-arrow-right"></i> View details</button>
                                                </div>
                                                <div class="mb-8 swiper-slide">
                                                    <div class="w-12 h-12 mx-auto text-center rounded-full bg-white/30">
                                                        <span class="text-2xl text-white">
                                                            <i class="leading-loose mdi mdi-currency-btc"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="mt-4 text-white lh-base fw-normal text-21">
                                                        <span>Bitcoin</span>
                                                        <span class="font-normal">News</span>
                                                    </h4>
                                                    <p class="mt-2 mb-4 text-white/50 text-13 ">
                                                        Bitcoin prices fell sharply amid the global sell-off in
                                                        equities. Negative news
                                                        over the Bitcoin past week has dampened Bitcoin basics
                                                        sentiment for bitcoin.
                                                    </p>

                                                    <button type="button" href="apps-invoices-list.html"
                                                        class="btn py-1.5 px-2.5 text-xs border-transparent bg-white  shadow shadow-white/20"><i
                                                            class="ml-1 mdi mdi-arrow-right"></i> View details </button>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-6 gap-y-0 2xl:gap-6">
                    <div class="col-span-12 lg:col-span-12">
                        <div class="card   card-h-100">
                            <div class="card-body">
                                <div>
                                    <div class="flex flex-wrap items-center mb-6">
                                        <h5 class="mr-2 text-gray-800 text-15 ">Market Overview</h5>
                                    </div>
                                </div>
                                <div>
                                    <iframe width="100%" height="600"
                                        src="https://s.tradingview.com/widgetembed/?hideideas=1&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en#%7B%22symbol%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22frameElementId%22%3A%22tradingview_60a84%22%2C%22interval%22%3A%22D%22%2C%22hide_side_toolbar%22%3A%220%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22Light%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22withdateranges%22%3A%221%22%2C%22show_popup_button%22%3A%221%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22crypo.netlify.app%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22page-uri%22%3A%22crypo.netlify.app%2Fexchange-light%22%7D"
                                        frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mb-3 gap-y-0 2xl:gap-6 lg:grid-cols-2 2xl:grid-cols-3">
                    <div class="card  ">
                        <div class="nav-tabs border-b-tabs">
                            <div class="flex pb-0 border-b card-body border-gray-50 ">
                                <h5 class="flex-grow mr-2 text-gray-800 text-15 ">Trading</h5>
                                <div class="">
                                    <ul class="flex nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium active"
                                                href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="buy-tab"
                                                role="tab">Buy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium " href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="sell-tab" role="tab">Sell</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="block tab-pane" id="buy-tab" role="tabpanel">
                                        <div class="ltr:float-right rtl:float-left ms-2">
                                            <h5 class="text-sm text-gray-700 "><i
                                                    class="mr-1 align-middle bx bx-wallet text-violet-500 text-16"></i>
                                                <a href="#!"
                                                    class="underline text-reset underline-offset-2">$4335.23</a>
                                            </h5>
                                        </div>
                                        <h5 class="mb-6 text-sm text-gray-700 ">Buy Coins</h5>
                                        <div>
                                            <div class="mb-3 form-group">
                                                <label class="block mb-2 font-medium text-gray-700 ">Payment
                                                    method :</label>
                                                <select
                                                    class="w-full border-gray-100 rounded rtl:pr-3 selection:text-10 py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/50    ">
                                                    <option>Direct Bank Payment</option>
                                                    <option>Credit / Debit Card</option>
                                                    <option>Paypal</option>
                                                    <option>Payoneer</option>
                                                    <option>Stripe</option>
                                                </select>
                                            </div>

                                            <div class="mt-4">
                                                <label class="block mb-2 font-medium ">Add Amount
                                                    :</label>
                                                <div class="flex mb-3 border border-gray-100 rounded   ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l  ">Amount</label>
                                                    <select
                                                        class="border-0 ltr:pl-1.5 rtl:pr-1.5 overflow-hidden focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40    "
                                                        style="max-width: 90px;">
                                                        <option value="BT" selected="">BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text"
                                                        class=" border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40   "
                                                        placeholder="0.00121255">
                                                </div>

                                                <div class="flex mb-3 border border-gray-100 rounded   ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l  ">Price</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40    "
                                                        placeholder="$58,245">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-l rtl:border-r  ">$</label>
                                                </div>

                                                <div class="flex mb-3 border border-gray-100 rounded   ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l  ">Total</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40    "
                                                        placeholder="$36,854.25">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button"
                                                    class="px-6 text-white bg-green-500 border-transparent shadow-md btn shadow-green-100 hover:bg-green-600 focus:bg-green-600 focus:ring focus:ring-green-50 ">Buy
                                                    Coin</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hidden tab-pane" id="sell-tab" role="tabpanel">
                                        <div class="ltr:float-right rtl:float-left ltr:ml-2 rtl:mr-2">
                                            <h5 class="text-sm text-gray-700 "><i
                                                    class="mr-1 align-middle bx bx-wallet text-violet-500 text-16"></i>
                                                <a href="#!"
                                                    class="underline text-reset underline-offset-2">$4335.23</a>
                                            </h5>
                                        </div>
                                        <h5 class="mb-6 text-sm text-gray-700 ">Sell Coins</h5>

                                        <div>
                                            <div class="mb-3 form-group">
                                                <label class="block mb-2 font-medium text-gray-700 ">Wallet
                                                    ID :</label>
                                                <input type="email"
                                                    class="w-full placeholder:text-sm py-1.5 border-gray-100 rounded     focus:ring focus:ring-violet-50/60  focus:ring-offset-0"
                                                    placeholder="1cvb254ugxvfcd280ki">
                                            </div>

                                            <div class="mt-4">
                                                <label class="block mb-2 font-medium ">Add Amount
                                                    :</label>
                                                <div class="flex mb-3 border border-gray-100 rounded   ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l  ">Amount</label>
                                                    <select
                                                        class=" border-0  ltr:pl-1.5 rtl:pr-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40    "
                                                        style="max-width: 90px;">
                                                        <option value="BT" selected="">BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text"
                                                        class=" border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40   "
                                                        placeholder="0.00121255">
                                                </div>

                                                <div class="flex mb-3 border border-gray-100 rounded   ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l  ">Price</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40    "
                                                        placeholder="$58,245">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-l rtl:border-r  ">$</label>
                                                </div>

                                                <div class="flex mb-3 border border-gray-100 rounded   ">
                                                    <label class="px-3 py-2 border-r border-gray-100  ">Total</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40    "
                                                        placeholder="$36,854.25">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button"
                                                    class="px-6 text-white bg-red-500 border-transparent shadow-md btn shadow-red-100 hover:bg-red-600 focus:bg-red-600 focus:ring focus:ring-red-50 ">Sell
                                                    Coin</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card  ">
                        <div class="nav-tabs border-b-tabs">
                            <div class="flex pb-0 border-b card-body border-gray-50 ">
                                <h5 class="flex-grow mr-2 text-gray-800 text-15 ">Transactions</h5>
                                <div class="">
                                    <ul class="flex nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium active "
                                                href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="all-tab1"
                                                role="tab">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="buy-tab1" role="tab">Sell</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="sell-tab1" role="tab">Buy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="tab-content">
                                    <div class="block tab-pane" id="all-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar="" style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    {{-- @foreach ($transactions as $transaction)
                                                    <tr>
                                                        <td class="p-3" style="width: 50px;">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $125.20</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="hidden tab-pane" id="buy-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar="" style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-3" style="width: 50px;">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $125.20</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.018 BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $145.80</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy LTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    1.88 LTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $94.22</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $112.34</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.42 ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $84.32</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $112.34</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Buy BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $125.20</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="hidden tab-pane" id="sell-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar="" style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-3" style="width: 50px;">
                                                            <div class="text-red-500 text-22">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Sell ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $112.34</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-red-500 text-22">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Sell BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $125.20</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-red-500 text-22">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Sell BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.018 BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $145.80</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-red-500 text-22">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Sell ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $112.34</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-red-500 text-22">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Sell LTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    1.88 LTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $94.22</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-red-500 text-22">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Sell ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.42 ETH</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $84.32</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-red-500 text-22">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                                    Sell BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-700 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 ">
                                                                    $125.20</h5>
                                                                <p class="mb-0 text-xs text-gray-600  whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card  ">
                        <div>
                            <div class="border-b border-gray-50 card-body ">
                                <div class="flex flex-wrap items-center">
                                    <h5 class="mr-2 text-gray-800 text-15 ">Recent Activity</h5>
                                    <div class="ltr:ml-auto rtl:mr-auto">
                                        <select
                                            class="form-select form-select-md rounded py-0.5 ltr:pl-3 rtl:pr-3 border-gray-50 bg-gray-50/20  ">
                                            <option value="Today" selected="">Today</option>
                                            <option value="Yesterday">Yesterday</option>
                                            <option value="Last Week">Last Week</option>
                                            <option value="Last Month">Last Month</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 card-body" data-simplebar="" style="max-height: 370px;">
                                <div class="table w-full">
                                    <ul>
                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div class="w-10 h-10 text-center rounded-full bg-yellow-50  ">
                                                        <i
                                                            class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap ">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 ">
                                                </div>

                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 ">+0.5
                                                        BTC</h6>
                                                    <div class="text-13 ">$178.53</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 "
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto   bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 ">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div class="w-10 h-10 text-center rounded-full bg-violet-50 ">
                                                        <i
                                                            class="text-2xl leading-relaxed mdi mdi-ethereum text-violet-500"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap ">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 ">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 ">-20.5
                                                        ETH</h6>
                                                    <div class="text-13 ">$3541.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 "
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto   bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 ">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div class="w-10 h-10 text-center rounded-full bg-yellow-50  ">
                                                        <i
                                                            class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap ">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 ">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 ">+0.5
                                                        BTC</h6>
                                                    <div class="text-13 ">$5791.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 "
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto   bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 ">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div class="w-10 h-10 text-center rounded-full bg-violet-50 ">
                                                        <i
                                                            class="text-2xl leading-relaxed mdi mdi-litecoin text-violet-500"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap ">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 ">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 ">-1.5
                                                        LTC</h6>
                                                    <div class="text-13 ">$5791.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 "
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto   bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 ">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div class="w-10 h-10 text-center rounded-full bg-yellow-50   ">
                                                        <i
                                                            class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap ">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 ">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 ">+0.5
                                                        BTC</h6>
                                                    <div class="text-13 ">$5791.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 "
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto   bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 ">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div class="w-10 h-10 text-center rounded-full bg-violet-50 ">
                                                        <i
                                                            class="text-2xl leading-relaxed mdi mdi-litecoin text-violet-500"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5 class="mb-1 text-sm font-medium text-gray-700 ">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap ">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 ">+.55
                                                        LTC</h6>
                                                    <div class="text-13 ">$91.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 "
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto   bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 ">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
