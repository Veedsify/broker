<div
    class="fixed bottom-0 z-10 h-screen ltr:border-r rtl:border-l vertical-menu rtl:right-0 ltr:left-0 top-[70px] bg-bgprimary border-gray-50 print:hidden  dark:border-neutral-700">

    <div data-simplebar="" class="h-full">
        <!--- Sidemenu -->
        <div class="metismenu pb-10 pt-2.5" id="sidebar-menu">
            <!-- Left Menu Start -->
            <div>
                <div class="">
                    <div class="flex items-center">
                        <h2 href="{{ route('admin') }}"
                            class="flex items-center px-4 py-3 text-sm font-medium transition-all duration-150 ease-linear text-green-500 hover:text-green-500 dark:text-gray-300 dark:active:text-white ">
                            <span class="text-lg font-bold ml-2"> Super Admin</span>
                        </h2>
                    </div>
                </div>
            </div>
            <ul id="side-menu">
                <li class="px-5 py-3 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden block"
                    data-key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('admin') }}"
                        class="block py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear">
                        <i data-feather="home" fill="#545a6d33"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.mails') }}"
                        class="block py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear ">
                        <i data-feather="mail" fill="#545a6d33"></i>
                        <span data-key="t-dashboard">Send Mail</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users') }}"
                        class="block py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear ">
                        <i data-feather="users" fill="#545a6d33"></i>
                        <span data-key="t-dashboard">Users</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear nav-menu hover:text-green-500 dark:text-gray-300 dark:active:text-white ">
                        <i data-feather="book" fill="#545a6d33"></i>
                        <span data-key="t-auth">Blogs</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">New
                                Article</a>
                        </li>
                        <li>
                            <a href="register.html"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">All
                                Articles</a>
                        </li>
                        <li>
                            <a href="register.html"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Categories</a>
                        </li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear nav-menu">
                        <i data-feather="user" fill="#545a6d33"></i>
                        <span data-key="t-auth">My Account</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.profile') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.security') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Security</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear nav-menu hover:text-green-500 dark:text-gray-300 dark:active:text-white ">
                        <i data-feather="credit-card" fill="#545a6d33"></i>
                        <span data-key="t-auth">Wallets</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.btc') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Bitcoin
                                Addresses</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.eth') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Etherium
                                Addresses</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.eth') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Solana
                                Addresses</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.eth') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">BNB
                                Addresses</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.eth') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Doge
                                Addresses</a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear nav-menu hover:text-green-500 dark:text-gray-300 dark:active:text-white ">
                        <i data-feather="tool" fill="#545a6d33"></i>
                        <span data-key="t-auth">Configurations</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.btc') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Pricing
                                Plan</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.eth') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear ">Update
                                Page Data</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.eth') }}"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-white transition-all duration-150 ease-linear "></a>
                        </li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear ">
                        <i data-feather="share-2" fill="#545a6d33"></i>
                        <span data-key="t-auth">Affiliate Program</span>
                    </a>
                </li> --}}
                <li>
                    <a href="javascript: void(0);"
                        class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-white transition-all duration-150 ease-linear ">
                        <i data-feather="log-out" fill="#545a6d33"></i>
                        <span data-key="t-auth">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
