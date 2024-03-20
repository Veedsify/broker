<div
    class="fixed bottom-0 z-10 h-screen ltr:border-r rtl:border-l vertical-menu rtl:right-0 ltr:left-0 top-[70px] bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700">

    <div data-simplebar="" class="h-full">
        <!--- Sidemenu -->
        <div class="metismenu pb-10 pt-2.5" id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul id="side-menu">
                <li class="px-5 py-3 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden block"
                    data-key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('account.index') }}"
                        class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home" fill="#545a6d33"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="users" fill="#545a6d33"></i>
                        <span data-key="t-auth">Account</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route ('account.profile')}}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="register.html"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Security</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route ('account.deposit')}}"
                        class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="dollar-sign" fill="#545a6d33"></i>
                        <span data-key="t-dashboard">Make Deposit</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/deposit"
                        class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="briefcase" fill="#545a6d33"></i>
                        <span data-key="t-dashboard">Wallets</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="credit-card" fill="#545a6d33"></i>
                        <span data-key="t-auth">Withdraw</span>
                    </a>
                    <ul>
                        <li>
                            <a href="login.html"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Make
                                Withdrawal</a>
                        </li>
                        <li>
                            <a href="{{route ('account.history')}}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Withdrawal
                                History</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="shopping-cart" fill="#545a6d33"></i>
                        <span data-key="t-auth">Orders</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route ('account.orders')}}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Your
                                Orders</a>
                        </li>
                        <li>
                            <a href="{{route ('account.earnings')}}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Earnings</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="share-2" fill="#545a6d33"></i>
                        <span data-key="t-auth">Affiliate Programm</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="log-out" fill="#545a6d33"></i>
                        <span data-key="t-auth">Logout</span>
                    </a>
                </li>
            </ul>

            <div class="mx-6 my-12 text-center sidebar-alert">
                <div class="rounded card-body bg-primary bg-violet-50/50 dark:bg-zinc-700/60">
                    <img src="data:image/png;base64,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"
                        alt="" class="block mx-auto">
                    <div class="mt-4">
                        <h5 class="mb-3 text-16 font-medium text-violet-500">Unlimited Access</h5>
                        <p class="text-slate-600 text-13 dark:text-gray-50">Upgrade your plan from a Free trial, to
                            select ‘Business Plan’.</p>
                        <a href="#!" class="mt-6 text-white border-transparent btn bg-violet-500">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
