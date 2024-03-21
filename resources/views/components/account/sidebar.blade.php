<div
    class="fixed bottom-0 z-10 h-screen ltr:border-r rtl:border-l vertical-menu rtl:right-0 ltr:left-0 top-[70px] bg-slate-50 border-gray-50 print:hidden  dark:border-neutral-700">

    <div data-simplebar="" class="h-full">
        <!--- Sidemenu -->
        <div class="metismenu pb-10 pt-2.5" id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul id="side-menu">
                <li class="px-5 py-3 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden block"
                    data-key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('account.index') }}"
                        class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">
                        <i data-feather="home" fill="#545a6d33"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-green-400">
                        <i data-feather="users" fill="#545a6d33"></i>
                        <span data-key="t-auth">Account</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('account.profile') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('account.security') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">Security</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('account.deposit') }}"
                        class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">
                        <i data-feather="dollar-sign" fill="#545a6d33"></i>
                        <span data-key="t-dashboard">Make Deposit</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-green-400">
                        <i data-feather="credit-card" fill="#545a6d33"></i>
                        <span data-key="t-auth">Withdraw</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('account.withdrawal') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">Make
                                Withdrawal</a>
                        </li>
                        <li>
                            <a href="{{ route('account.history') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">Withdrawal
                                History</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-green-400">
                        <i data-feather="shopping-cart" fill="#545a6d33"></i>
                        <span data-key="t-auth">Orders</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('account.orders') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">Your
                                Orders</a>
                        </li>
                        <li>
                            <a href="{{ route('account.earnings') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">Earnings</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('account.affiliate') }}"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">
                        <i data-feather="share-2" fill="#545a6d33"></i>
                        <span data-key="t-auth">Affiliate Programm</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-green-400">
                        <i data-feather="log-out" fill="#545a6d33"></i>
                        <span data-key="t-auth">Logout</span>
                    </a>
                </li>
            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
