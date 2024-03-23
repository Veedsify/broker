@extends('../layouts/account/accountlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <!-- ========== Left Sidebar Start ========== -->
    <x-account.sidebar />

    {{-- Header start --}}
    <x-account.header />
    {{-- Header end --}}

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content ">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow  mb-2 md:mb-0">Make
                            Deposits</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm text-white  ">
                                        Menu
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-100 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-100 ltr:ml-2 rtl:mr-2  ltr:md:ml-2 rtl:md:mr-2  ">Deposit</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="card   nav-tabs border-b-tabs">
                        <div class=" pb-0 md:py-0 border-b card-body border-bgborder ">
                            <div class="md:flex items-center justify-between py-3">
                                <h6 class="text-white text-15  whitespace-nowrap">Start your
                                    trade with the right plans</h6>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 card-body">
                            <div id="tab-contents">
                                <div class="tab-pane" id="underline-icon-home">
                                    <div class="grid grid-cols-12 md:gap-4">
                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card  ">
                                                <div class="card-body  bg-bgprimary rounded">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-white ">Amateur</h5>
                                                        <h1 class="mt-3 text-white ">10% <span
                                                                class="text-base text-white /60 "></span>
                                                        </h1>
                                                        <p class="mt-3 text-white /60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                0 Days</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $1000</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: $5,000</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href="{{ route('account.tiers', 'amateur') }}"
                                                                class="order-2 w-full btn border-lime-500 text-lime-500 hover:bg-lime-500 hover:text-white focus:bg-lime-500 focus:text-white focus:ring focus:ring-green-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card bg-bgprimary">
                                                <div class="card-body bg-bgprimary rounded">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-white ">STARTER
                                                        </h5>
                                                        <h1 class="mt-3 text-white ">25% <span
                                                                class="text-base text-white /60 "></span>
                                                        </h1>
                                                        <p class="mt-3 text-white /60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                4 Days</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $5,000</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: $10,000</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href="{{ route('account.tiers', 'starter') }}"
                                                                class="order-2 w-full btn border-lime-500 text-lime-500 hover:bg-lime-500 hover:text-white focus:bg-lime-500 focus:text-white focus:ring focus:ring-green-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card  ">
                                                <div class="overflow-hidden rounded card-body bg-green-900">
                                                    <div class="relative p-2">
                                                        <div
                                                            class="absolute top-0 w-48 p-1 font-medium text-center bg-white text-black ltr:rotate-45 rtl:-rotate-45 ltr:-right-20 rtl:-left-20">
                                                            <span>SILVER</span>
                                                        </div>
                                                        <h5 class="text-base text-white">Enterprise</h5>
                                                        <h1 class="mt-3 text-white ">50% <span class="text-base "></span>
                                                        </h1>
                                                        <p class="mt-3 text-white text-15 ">For small teams trying out
                                                            Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                4 Days</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $10,000</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: $50,000</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href="{{ route('account.tiers', 'enterprise') }}"
                                                                class="block transition-all duration-300 bg-white border-transparent shadow btn w-100 hover:bg-gray-50/50 shadow-white/30   dark:shadow-zinc-500">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card  ">
                                                <div class="card-body bg-bgprimary rounded">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-white ">GOLD
                                                        </h5>
                                                        <h1 class="mt-3 text-white ">85% <span
                                                                class="text-base text-white /60 "></span>
                                                        </h1>
                                                        <p class="mt-3 text-white /60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                4 Days</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $50,000</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: Unlimited</p>
                                                            <p class="mb-4 text-white text-15 /60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href="{{ route('account.tiers', 'gold') }}"
                                                                class="order-2 w-full btn border-lime-500 text-lime-500 hover:bg-lime-500 hover:text-white focus:bg-lime-500 focus:text-white focus:ring focus:ring-green-200">Choose
                                                                Plan</a>
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


                <!-- Footer Start -->
                {{-- <footer
                    class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50   dark:text-gray-200">
                    <div class="grid grid-cols-2 text-white ">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Minia
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a href=""
                                class="underline text-lime-500">Themesbrand</a></div>

                    </div>
                </footer> --}}
                <!-- end Footer -->
            </div>
        </div>
    </div>
@endsection
