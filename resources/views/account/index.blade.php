@extends('../layouts/account/accountlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-account.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-account.header />
    {{-- Header end --}}

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">
                            Dashboard</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm text-white  ">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-50 align-middle far fa-angle-right text-13 rtl:rotate-180"></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-50 ltr:ml-2 rtl:mr-2  ltr:md:ml-2 rtl:md:mr-2 ">Dashboard</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @if (session('emailsuccess'))
                    <div class="bg-green-500 text-white px-4 py-2">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="bg-red-500 text-white px-4 py-2">{{ session('error') }}</div>
                @endif
                <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 md:grid-cols-2 2xl:grid-cols-4">
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-50">Total Balance</span>
                                        <h4 class="my-4 font-medium text-gray-50 text-21">
                                            $<span class="counter-value" data-target="865.2">
                                                {{ number_format($user->balance) }}
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart1" data-colors='["#2AB57D"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-1">
                                <span
                                    class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium ">0</span>
                                <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-50 text-13">Since last
                                    week</span>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-50">Total Deposit</span>
                                        <h4 class="my-4 font-medium text-gray-50 text-21">
                                            <span class="counter-value" data-target="865.2">$
                                                {{ number_format($user->deposit) }}</span>
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart2" data-colors='["#2AB57D"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-1">
                                <a href="{{ route('account.orders') }}"
                                    class=" rtl:mr-1 text-13 underline font-bold text-green-500">Deposited
                                    History</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-50">Total Withdrawn</span>
                                        <h4 class="my-4 font-medium text-gray-50 text-21">
                                            $<span class="counter-value" data-target="865.2">
                                                0
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart3" data-colors='["#2AB57D"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-1">
                                <a href="{{ route('account.history') }}"
                                    class=" rtl:mr-1.5 text-13 underline font-bold text-green-500">Withdrawal
                                    History</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-50">Total Profits</span>
                                        <h4 class="my-4 font-medium text-gray-50 text-21">
                                            <span class="counter-value" data-target="865.2">
                                                {{ number_format($user->profits) }}
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium ">+
                                    2.95%</span>
                                <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-50 text-13">Since
                                    yesterday</span>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-50">Total Trade</span>
                                        <h4 class="my-4 font-medium text-gray-50 text-21">
                                            <span class="counter-value" data-target="865.2">
                                                {{ number_format($user->trade) }}
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium ">+
                                    2.95%</span>
                                <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-50 text-13">Since
                                    yesterday</span>
                            </div>
                        </div>
                    </div>
                    <div class="card  ">
                        <x-widgets.btcanalytics />
                    </div>
                    <div class="card  ">
                        <x-widgets.ethanalytics />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 lg:grid-cols-12">
                    <div class="col-span-12 2xl:col-span-5">
                        <div class="card   card-h-100">
                            <div class="card-body">
                                <div class="flex flex-wrap items-center mb-6">
                                    <h5 class="mr-2 font-medium text-gray-50 text-15">Wallet Balance
                                    </h5>
                                    <div class="flex gap-1 ltr:ml-auto rtl:mr-auto">
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-100 border-transparent btn text-[12.25px] bg-lime-700  hover:bg-lime-700 hover:text-white ">ALL</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-100 border-transparent btn text-[12.25px] bg-lime-700  hover:bg-lime-700 hover:text-white ">1M</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-100 border-transparent btn text-[12.25px] bg-lime-700  hover:bg-lime-700 hover:text-white ">6M</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-100 border-transparent btn text-[12.25px] bg-lime-700  hover:bg-lime-700 hover:text-white ">1YR</button>

                                    </div>
                                </div>
                                <div class="grid grid-cols-12 2xl:gap-6 justify-items-stretch">
                                    <div class="items-center col-span-12 mr-2 md:col-span-6 justify-self-center 2xl:mr-0">
                                        <div id="wallet-balance" data-colors='["#aebf27"]' class="apex-charts "></div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6">
                                        <div class="text-center mt-sm-0 md:text-left">
                                            <div>
                                                <p class="mb-2 text-gray-50">
                                                    <i class="mr-2 text-green-500 align-middle mdi mdi-circle "></i>
                                                    Bitcoin
                                                </p>
                                                <h6 class="text-gray-50">BTC =
                                                    <span class="font-normal text-gray-50 text-14">$
                                                        {{ number_format(auth()->user()->balance) }}</span>
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
                                <div class="card card-h-100">
                                    {{-- HEATMAP WIDGETS --}}
                                    <x-widgets.heatmap />
                                    {{-- <div class="card-body">
                                        <div class="flex flex-wrap items-center mb-6">
                                            <h5 class="mr-2 text-gray-50 text-15 ">Invested Overview
                                            </h5>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <select class="py-0 form-select form-select-sm bg-gray-50/20 ">
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
                                                <div id="invested-overview" data-colors='["#aebf27", "#627e19"]'
                                                    class="apex-charts"></div>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <div>
                                                    <p class="mb-1 text-gray-50">Invested Amount</p>
                                                    <h4 class="mb-2 text-gray-50 text-21">$ 6134.39
                                                    </h4>
                                                    <p class="mb-6 text-gray-50"> + 0.0012.23 ( 0.2
                                                        % )
                                                        <i class="ml-1 text-green-500 mdi mdi-arrow-up"></i>
                                                    </p>
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-2 text-gray-100 uppercase text-11 leading-[16.5px]">
                                                                    Income</p>
                                                                <h5 class="mb-2 text-gray-50">$
                                                                    2632.46</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-2 text-gray-100 uppercase text-11 leading-[16.5px]">
                                                                    Expenses</p>
                                                                <h5 class="mb-2 text-gray-50">-$
                                                                    924.38</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <a href="#"
                                                            class="btn py-1.5 px-2.5 text-xs bg-green-500 text-white shadow-md shadow-green-100 border-transparent hover:bg-green-700 focus:bg-green-700 focus:ring focus:ring-green-50/50 ">View
                                                            more
                                                            <i class="mdi mdi-arrow-right ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="col-span-12 2xl:col-span-4">
                                <div
                                    class="relative overflow-hidden border-transparent shadow card card-h-100 bg-[#435821] shadow-green-100 ">
                                    <div class="relative text-center " style="height: 80%;">
                                        <div class="absolute -top-2 -right-2">
                                            <i class="mdi mdi-bitcoin widget-box-1-icon text-7xl text-white/10"></i>
                                        </div>
                                        <x-widgets.btcnews />
                                        {{-- <div dir="ltr" class="swiper login-slider bitcon-news">
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
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- MARQUEE WIDGETS --}}
                <x-widgets.marquee />
                <div class="grid grid-cols-12 gap-6 gap-y-0 2xl:gap-6">
                    <div class="col-span-12 lg:col-span-12">
                        <div class="card   card-h-100">
                            <div class="card-body">
                                <div>
                                    <div class="flex flex-wrap items-center mb-6">
                                        <h5 class="mr-2 text-gray-50 text-15 ">Market Overview</h5>
                                    </div>
                                </div>
                                <div>
                                    <iframe width="100%" height="600"
                                        src="https://s.tradingview.com/widgetembed/?hideideas=1&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en#%7B%22symbol%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22frameElementId%22%3A%22tradingview_60a84%22%2C%22interval%22%3A%22D%22%2C%22hide_side_toolbar%22%3A%220%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22Dark%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22withdateranges%22%3A%221%22%2C%22show_popup_button%22%3A%221%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22crypotraderspro.net%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22page-uri%22%3A%22crypotraderspro.net%2Fexchange-light%22%2C%22backgroundColor%22%3A%22%232c3b1e%22%7D"
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
                                <h5 class="flex-grow mr-2 text-gray-50 text-15">Transactions</h5>
                                <div class="">
                                    <ul class="flex nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium active "
                                                href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="all-tab1"
                                                role="tab">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="buy-tab1" role="tab">Buy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="sell-tab1" role="tab">Sell</a>
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
                                                    @if ($transactions->count() == 0)
                                                        <tr>
                                                            <td class="p-3 text-center" colspan="4">
                                                                <h5 class="text-gray-100">No recent transactions found</h5>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @foreach ($transactions as $transaction)
                                                        <tr>
                                                            <td class="p-3" style="width: 50px;">
                                                                <div
                                                                    class="text-{{ $transaction->type == 'deposit' ? 'green' : 'red' }}-500 text-22">
                                                                    <i
                                                                        class="bx bx-{{ $transaction->type == 'deposit' ? 'up' : 'down' }}-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div>
                                                                    <h5 class="mb-1 text-sm font-medium text-gray-50 ">
                                                                        {{ $transaction->type === 'deposit' ? 'Buy' : 'Sell' }}
                                                                        BTC</h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        {{ $transaction->created_at->format('d M, Y') }}
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="mb-0 text-sm text-gray-50 whitespace-nowrap trbtcvalue"
                                                                        data-amount="{{ $transaction->amount }}">
                                                                    </h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        Coin Value</p>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="mb-0 text-sm text-gray-100 ">
                                                                        ${{ number_format($transaction->amount) }}</h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="hidden tab-pane" id="buy-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar="" style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    @if ($transactions->count() == 0)
                                                        <tr>
                                                            <td class="p-3 text-center" colspan="4">
                                                                <h5 class="text-gray-100">No recent deposit transactions
                                                                    found</h5>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @foreach ($transactions as $transaction)
                                                        @php
                                                            if ($transaction->type !== 'deposit') {
                                                                continue;
                                                            }
                                                        @endphp
                                                        <tr>
                                                            <td class="p-3" style="width: 50px;">
                                                                <div
                                                                    class="text-{{ $transaction->type == 'deposit' ? 'green' : 'red' }}-500 text-22">
                                                                    <i
                                                                        class="bx bx-{{ $transaction->type == 'deposit' ? 'up' : 'down' }}-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div>
                                                                    <h5 class="mb-1 text-sm font-medium text-gray-50 ">
                                                                        {{ $transaction->type === 'deposit' ? 'Buy' : 'Sell' }}
                                                                        BTC</h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        {{ $transaction->created_at->format('d M, Y') }}
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="mb-0 text-sm text-gray-50 whitespace-nowrap trbtcvalue"
                                                                        data-amount="{{ $transaction->amount }}"></h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        Coin Value</p>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="mb-0 text-sm text-gray-100 ">
                                                                        ${{ number_format($transaction->amount) }}</h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="hidden tab-pane" id="sell-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar="" style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    @if ($transactions->count() == 0)
                                                        <tr>
                                                            <td class="p-3 text-center" colspan="4">
                                                                <h5 class="text-gray-100">No recent withdrawal transactions
                                                                    found</h5>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @foreach ($transactions as $transaction)
                                                        @php
                                                            if ($transaction->type == 'deposit') {
                                                                continue;
                                                            }
                                                        @endphp
                                                        <tr>
                                                            <td class="p-3" style="width: 50px;">
                                                                <div
                                                                    class="text-{{ $transaction->type == 'deposit' ? 'green' : 'red' }}-500 text-22">
                                                                    <i
                                                                        class="bx bx-{{ $transaction->type == 'deposit' ? 'up' : 'down' }}-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div>
                                                                    <h5 class="mb-1 text-sm font-medium text-gray-50 ">
                                                                        {{ $transaction->type === 'deposit' ? 'Buy' : 'Sell' }}
                                                                        BTC</h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        {{ $transaction->created_at->format('d M, Y') }}
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="mb-0 text-sm text-gray-50 whitespace-nowrap trbtcvalue"
                                                                        data-amount="{{ $transaction->amount }}"></h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        Coin Value</p>
                                                                </div>
                                                            </td>

                                                            <td class="p-3">
                                                                <div class="text-end">
                                                                    <h5 class="mb-0 text-sm text-gray-100 ">
                                                                        ${{ number_format($transaction->amount) }}</h5>
                                                                    <p
                                                                        class="mb-0 text-xs text-gray-100  whitespace-nowrap">
                                                                        Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
                                <div class="flex flex-col">
                                    <h5 class="text-gray-50 text-15 mb-3">Recent Activity</h5>
                                    <div class="">
                                        <div class="flex gap-3 rounded py-0.5">
                                            <a class="px-2 py-1 rounded-md text-xs {{ $date == 'today' ? 'bg-lime-500 text-white' : 'bg-gray-100 text-black' }}"
                                                href="?date=today">Today</a>
                                            <a class="px-2 py-1 rounded-md text-xs {{ $date == 'yesterday' ? 'bg-lime-500 text-white' : 'bg-gray-100 text-black' }}"
                                                href="?date=yesterday">Yesterday</a>
                                            <a class="px-2 py-1 rounded-md text-xs {{ $date == 'lastweek' ? 'bg-lime-500 text-white' : 'bg-gray-100 text-black' }}"
                                                href="?date=lastweek">Lastweek</a>
                                            <a class="px-2 py-1 rounded-md text-xs {{ $date == 'lastmonth' ? 'bg-lime-500 text-white' : 'bg-gray-100 text-black' }}"
                                                href="?date=lastmonth">Lastmonth</a>
                                            </d>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3 card-body" data-simplebar="" style="max-height: 370px;">
                                    <div class="table w-full">
                                        <ul>
                                            {{-- ACTIVITIES --}}
                                            @foreach ($activities as $activity)
                                                <li class="relative flex">
                                                    <div class="relative pb-7 pl-14 grow">
                                                        <div>
                                                            <div class="absolute top-0 z-40 left-2">
                                                                <div
                                                                    class="w-10 h-10 text-center rounded-full bg-yellow-50  ">
                                                                    <i
                                                                        class="text-2xl leading-relaxed text-yellow-500 bx bxs-network-chart"></i>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                                    <h5 class="mb-1 text-sm font-medium text-gray-50">
                                                                        {{ $activity->created_at->format('d M Y') }}</h5>
                                                                    <p
                                                                        class="overflow-hidden text-gray-100 text-13 text-ellipsis whitespace-nowrap">
                                                                        {{ $activity->description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 ">
                                                        </div>

                                                    </div>


                                                    <div class="shrink-0">
                                                        <div class="w-20 mr-1 shrink-0 text-end">
                                                            <h6 class="mb-1 font-medium text-gray-50">
                                                                {{ $activity->name }}</h6>
                                                            <div class="text-13 text-gray-300">{{ $activity->status }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
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
