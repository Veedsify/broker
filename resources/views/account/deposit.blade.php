@extends('../layouts/account/accountlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <!-- ========== Left Sidebar Start ========== -->
    <x-account.sidebar />

    {{-- Header start --}}
    <x-account.header />
    {{-- Header end --}}

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Make
                            Deposits</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Menu
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Deposit</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600 nav-tabs border-b-tabs">
                        <div class=" pb-0 md:py-0 border-b card-body border-gray-50 dark:border-zinc-600">
                            <div class="md:flex items-center justify-between py-3">
                                <h6 class="text-gray-600 text-15 dark:text-gray-100 whitespace-nowrap">Start your creative
                                    project right plans</h6>

                                <ul
                                    class="justify-end flex flex-wrap w-full text-sm font-medium text-center text-gray-500nav dark:border-gray-700 dark:text-gray-400">
                                    {{-- <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-icon-home" class="inline-block p-4 text-green-500  hover:border-gray-300">Monthly</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-icon-Profile" class="inline-block p-4 text-green-500 active ">Yearly</a>
                                </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 card-body">
                            <div id="tab-contents">
                                <div class="tab-pane" id="underline-icon-home">
                                    <div class="grid grid-cols-12 md:gap-4">
                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">Amateur</h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">10% <span
                                                                class="text-base text-gray-500 dark:text-zinc-100/60 "></span>
                                                        </h1>
                                                        <p class="mt-3 text-gray-500 dark:text-zinc-100/60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                0 Days</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $10</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: $3,000</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="order-2 w-full btn border-green-500 text-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500 focus:text-white focus:ring focus:ring-green-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">STARTER
                                                        </h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">25% <span
                                                                class="text-base text-gray-500 dark:text-zinc-100/60 "></span>
                                                        </h1>
                                                        <p class="mt-3 text-gray-500 dark:text-zinc-100/60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                4 Days</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $3,000</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: $7,500</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="order-2 w-full btn border-green-500 text-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500 focus:text-white focus:ring focus:ring-green-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="overflow-hidden rounded card-body bg-green-900">
                                                    <div class="relative p-2">
                                                        <div
                                                            class="absolute top-0 w-48 p-1 font-medium text-center bg-white text-green-500 ltr:rotate-45 rtl:-rotate-45 ltr:-right-20 rtl:-left-20">
                                                            <span>SILVER</span>
                                                        </div>
                                                        <h5 class="text-base text-white">Enterprise</h5>
                                                        <h1 class="mt-3 text-white ">50% <span class="text-base "></span>
                                                        </h1>
                                                        <p class="mt-3 text-white text-15 ">For small teams trying out
                                                            Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-white text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                4 Days</p>
                                                            <p class="mb-4 text-white text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $7,500</p>
                                                            <p class="mb-4 text-white text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: $20,000</p>
                                                            <p class="mb-4 text-white text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="block transition-all duration-300 bg-white border-transparent shadow btn w-100 hover:bg-gray-50/50 shadow-white/30 dark:bg-zinc-700 dark:text-gray-50 dark:shadow-zinc-500">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">GOLD
                                                        </h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">85% <span
                                                                class="text-base text-gray-500 dark:text-zinc-100/60 "></span>
                                                        </h1>
                                                        <p class="mt-3 text-gray-500 dark:text-zinc-100/60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>After
                                                                4 Days</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Minimum
                                                                Amount: $20,000</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Maximum
                                                                Amount: $100,000</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Instant
                                                                Withdraw
                                                            </p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="order-2 w-full btn border-green-500 text-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500 focus:text-white focus:ring focus:ring-green-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class=" tab-pane" id="underline-icon-Profile">
                                    <p class="mb-0 dark:text-gray-300">
                                        denim you probably haven't heard of them jean shorts Austin.
                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                        cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                        butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                        qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                        iphone. Seitan aliquip quis cardigan american apparel, butcher
                                        voluptate nisi qui.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Footer Start -->
                {{-- <footer
                    class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                    <div class="grid grid-cols-2 text-gray-500 dark:text-zinc-100">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Minia
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a href=""
                                class="underline text-green-500">Themesbrand</a></div>

                    </div>
                </footer> --}}
                <!-- end Footer -->
            </div>
        </div>
    </div>

    <div class="fixed z-40 flex flex-col gap-3 ltr:right-5 rtl:left-5 bottom-10 animate-bounce">
        <!-- light-dark mode button -->
        <a href="javascript: void(0);" id="ltr-rtl"
            class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-green-500 hover:bg-green-600 rounded-full font-medium"
            onclick="changeMode(event)">
            <span class="ltr:hidden">LTR</span>
            <span class="rtl:hidden">RTL</span>
        </a>
    </div>
@endsection
