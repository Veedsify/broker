@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
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
                        <a href="{{route("admin")}}"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home" fill="#545a6d33"></i>
                            <span data-key="t-dashboard"> Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="grid" class="align-middle" fill="#545a6d33"></i>
                            <span data-key="t-apps"> Apps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="app-calendar.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                            </li>
                            <li>
                                <a href="app-chat.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Email</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-email-inbox.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read
                                            Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Invoices</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-invoices-list.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-invoices-detail.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Contacts</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-contacts-grid.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-list.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-profile.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="flex items-center justify-between py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear  pl-[52.8px] pr-6 hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Blog</span>
                                    <span
                                        class="px-2 py-0.5 font-medium text-red-400 rounded-full bg-red-50 text-10 badge text-end group-data-[sidebar-size=sm]:hidden">New</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-blog-grid.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-list.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-detail.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            Details</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="users" fill="#545a6d33"></i>
                            <span data-key="t-auth">Authentication</span>
                        </a>
                        <ul>
                            <li>
                                <a href="login.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                            </li>
                            <li>
                                <a href="register.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Register</a>
                            </li>
                            <li>
                                <a href="recoverpw.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Recover
                                    Password</a>
                            </li>
                            <li>
                                <a href="lock-screen.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lock
                                    Screen</a>
                            </li>
                            <li>
                                <a href="logout.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Log
                                    Out</a>
                            </li>
                            <li>
                                <a href="confirm-mail.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Confirm
                                    Mail</a>
                            </li>
                            <li>
                                <a href="email-verification.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Email
                                    Verification</a>
                            </li>
                            <li>
                                <a href="two-step-verification.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Two
                                    Step Verification</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase" fill="#545a6d33"></i><span data-key="t-pages">Pages</span>
                        </a>
                        <ul>
                            <li>
                                <a href="starter.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter
                                    Page</a>
                            </li>
                            <li>
                                <a href="maintenance.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Maintenance</a>
                            </li>
                            <li>
                                <a href="coming-soon.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Coming
                                    Soon</a>
                            </li>
                            <li>
                                <a href="timeline.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Timeline</a>
                            </li>
                            <li>
                                <a href="faqs.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">FAQs</a>
                            </li>
                            <li>
                                <a href="pricing.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Pricing</a>
                            </li>
                            <li>
                                <a href="404.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error
                                    404</a>
                            </li>
                            <li>
                                <a href="500.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error
                                    500</a>
                            </li>
                        </ul>
                    </li>

                    <li class="px-5 py-3 mt-2 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden"
                        data-key="t-elements">Elements</li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase" fill="#545a6d33"></i>
                            <span data-key="t-compo">Components</span>
                        </a>
                        <ul>
                            <li>
                                <a href="alerts.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Alerts</a>
                            </li>
                            <li>
                                <a href="buttons.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Buttons</a>
                            </li>
                            <li>
                                <a href="cards.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Cards</a>
                            </li>
                            <li>
                                <a href="dropdown.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dropdown</a>
                            </li>
                            <li>
                                <a href="flexbox%26grid.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Flexbox
                                    & Grid</a>
                            </li>
                            <li>
                                <a href="sizing.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sizing</a>
                            </li>
                            <li>
                                <a href="avatars.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Avatar</a>
                            </li>
                            <li>
                                <a href="modals.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Modals</a>
                            </li>
                            <li>
                                <a href="progress.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Progress</a>
                            </li>
                            <li>
                                <a href="tabs%26accordions.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Tabs
                                    & Accordions</a>
                            </li>
                            <li>
                                <a href="typography.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Typography</a>
                            </li>
                            <li>
                                <a href="toasts.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Toasts</a>
                            </li>
                            <li>
                                <a href="general.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">General</a>
                            </li>
                            <li>
                                <a href="colors.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Colors</a>
                            </li>
                            <li>
                                <a href="utilities.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Utilities</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="gift" fill="#545a6d33"></i>
                            <span data-key="t-extend">Extended</span>
                        </a>
                        <ul>
                            <li>
                                <a href="extended-lightbox.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lightbox</a>
                            </li>
                            <li>
                                <a href="extended-rangeslider.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                            </li>
                            <li>
                                <a href="extended-sweet-alert.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert
                                    2</a>
                            </li>
                            <li>
                                <a href="extended-rating.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rating</a>
                            </li>
                            <li>
                                <a href="extended-notifications.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Notifications</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <span
                                class="badge bg-red-50 dark:bg-red-500/10 text-danger ltr:float-right rtl:float-left z-50 px-1.5 rounded-full text-11 text-red-500"
                                data-toggle="collapse">7</span>
                            <i data-feather="box" fill="#545a6d33"></i>
                            <span data-key="t-forms">Forms</span>
                        </a>
                        <ul>
                            <li>
                                <a href="form-elements.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic
                                    Elements</a>
                            </li>
                            <li>
                                <a href="form-validation.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                            </li>
                            <li>
                                <a href="form-advanced.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert
                                    2</a>
                            </li>
                            <li>
                                <a href="form-editors.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editors</a>
                            </li>
                            <li>
                                <a href="file-uploads.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">File
                                    Upload</a>
                            </li>
                            <li>
                                <a href="form-wizard.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Wizard</a>
                            </li>
                            <li>
                                <a href="form-mask.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Mask</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="sliders" fill="#545a6d33"></i>
                            <span data-key="t-charts">Tables</span>
                        </a>
                        <ul>
                            <li>
                                <a href="tables-basic.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic
                                    Elements</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">DataTables</a>
                            </li>
                            <li>
                                <a href="tables-responsive.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Responsive</a>
                            </li>
                            <li>
                                <a href="tables-editable.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editable
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="pie-chart" fill="#545a6d33"></i>
                            <span data-key="t-charts">Charts</span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts-apex.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Apexcharts</a>
                            </li>
                            <li>
                                <a href="charts-echart.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Echarts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chartjs</a>
                            </li>
                            <li>
                                <a href="charts-knob.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Jquery
                                    Knob</a>
                            </li>
                            <li>
                                <a href="charts-sparkline.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sparkline
                                    Chart</a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="cpu" fill="#545a6d33"></i>
                            <span data-key="t-icons">Icons</span>
                        </a>
                        <ul>
                            <li>
                                <a href="icons-boxicons.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Boxicons</a>
                            </li>
                            <li>
                                <a href="icons-materialdesign.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Material
                                    Design</a>
                            </li>
                            <li>
                                <a href="icons-dripicons.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dripicons</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="map" fill="#545a6d33"></i>
                            <span data-key="t-maps"> Maps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps-google.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Google</a>
                            </li>
                            <li>
                                <a href="maps-vector.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Vector</a>
                            </li>
                            <li>
                                <a href="maps-leaflet.html"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Leaflet</a>
                            </li>
                        </ul>
                    </li>

                    <li class="w-full menu__item ">
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="share-2" fill="#545a6d33"></i>
                            <span data-key="t-level">Multi Level</span>
                        </a>
                        <div>
                            <ul>
                                <li>
                                    <a href="index.html"
                                        class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level
                                        1.1</a>
                                </li>
                                <li>
                                    <a href="#!" data-toggle="collapse" data-target=".Level1.2-menu"
                                        class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                        <span data-key="t-level">Level 1.2</span>
                                    </a>
                                    <ul class="collapse Level1.2-menu">
                                        <li>
                                            <a href="#"
                                                class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level
                                                2.1</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level
                                                2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </li>

                </ul>

                <div class="mx-6 my-12 text-center sidebar-alert">
                    <div class="rounded card-body bg-primary bg-violet-50/50 dark:bg-zinc-700/60">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF4AAABBCAYAAABYUhMgAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAkKSURBVHgB7ZxrTBzXFcf/d2YXMDgwS1SbFGyN6SNSXbsgOy0QWharUls1ckkiIitOFdxH1A+peLR1+qks7pfYrcwmsVQlTWNw1aY2lY3TV1LHZZHNI3EMOFiVojZmHYNNTIDluSy7O7f3jg0CdmZ3Fu8yrjw/adjZO2fvDP85c+69Z+YOwRoy6CwpIFTopUQpzPN09uEeRsAaEkSKV6FoEKH4YGFhBgR3CbRXkoIzkAmFZFuPPlLou+OrglL2p4/VO8vqVRJXbyIwXfjgOckJG6lnh+JcvoV6CIQmW/FoM+KE0nqEOl5wQtSst42KtC7lyz5T2xhThQ++k10PBa5oNuwAm1ib0ECKfV7E4JaHOxyhOZyMFHy5KVtc9uKxA9r1UHh3OaU0GpAe8HR7kQTWtHFdyny3VK0netf76Xir6z5c+9jOFaoKQ2ijXZIcrT4u+ly3Y0twjvRw0SdnBLS8Lal1acAdzjXXmV2jtfHizp3EFg67FGrrQZIwxeP9TESRicl2Lq/c1viHT+EwWxao2zuCWrYw+mxpSrlWjFY9vdfhCAa46JAPvJKDV1uzF7e7nhnG9yvGtA5lnNWZv7JO7vHD5SVyCKK8yXPegyRgiseLYdGpJTrnze7MZd/5Sag7/Gm+WhDyC/WaFV7cQULz5BdsTf4Js10qOud3b9wPHVjDK1asLCSE4AFPlzdZonPMCTUCLdDbNDUdeUg8ZPArgV2fNWpjvILg3IcFLCbVuJkNt40DAkK/BBMwRXgWGXTVydsQ1Cznnq/Ga7UHtBwiksOdl9KXhailbJX90EMgyIIJmNa46lG796buNtXrWcO51OuDXZKTUuL8qTtX8zcsaqDmqRHdOtlIegImYJLHK7p96OLtswuNaQRd/Rmq11NRWIzLlApVLWcltQekRc2TI9iaH4DeoQiiYkp/Xld4ntBCkkgNoCnadt6Tqfx65ABza/4cJmdE7sVPh7qyj/KFgH4nMyOMTRsjQxQ/gXV7R6LtCiJFO0xAtzs5VPbVAYXQfclq2YOd2W629+poNjxmN96O23kb5/HWkSvIzFA0bSemRZTs+6x6YjhGRGeXntteMlYLE4jw+AGnU7rhLJL5Og0r8sJ6orEFFBcF9Uaz4cLVsz44p3jbrK7onMz1YXyjeArc+/lvYonOrpQB2zqlASYR4fFDZaU0wkohFbnnzp1Ggrk1kCJsIEXkaHaDLH63nMlC7VOfRDNT++9cfK2wsxQuukjoLlIUOw2RLEwLNQuo4lPBxeM21gTaZkujjyUtS8lGvXJfrdpd9ha6dfdxR8KfaaFOlm9xIg7kzOexOfNXEeWfzFU+7Q9ukQ1UgSBz6KEPgVAQcWG3+/tKH3op4srtubwHf/7bSzAKF02gQt+hv5DWxcJbgjsQSGUJukVNTjHrOm/R896Vddj0Kp8nYuEWj0f3jJ09QatY43Q0nmzPxozXIUuRol+dfA5XJ/bDKO2tFP4ZrAJaIIrzBQ/vfHlZ6c7tx+G9Voqe/j3GayKU7t9N9x16g6hp6x0XXyGjwZRG1uUaR+qc4/7w7MTovKORnaHX2OZdK3+v252MJjpnNaFhY/rrmuWjs9+CUbjgqxOdQ9B54RmNcoovfP4fiBN2z4YujidGp26wEmE3hPABHmIu7niZIhDgjbdT68d3xcg1SE0ZtS8jLTX+ASxdkm6w5fHEHPUhLKjxvZ5nvDPsMjPSdOC7LmXw/0re4BjrDdIX2UX1mtz1c2fzu/5HoQg83r+oZW+DRULwlLtQSU+4L3T3MA9XGtV7XKAveIsPurXsLeETSAt5gn803V6iYoUak1i18CydeglxMhP8omZ5mngNRrGxJKQtBavGkaW9r/GJTYgX1qOMW4MFVh1qRDtc4XlIrBtfNs8+gwEa89bPv6f3IyBNIEf6O9LXTS6WP5j9LD4YO4LrIyUwQv5W4L/v07gGUOvSJpGb04/Hv/3jZeWz/kxc/3gb/vrPX0JRaMx62P/rIwLxMcuBkCCsOteTkJvdPyzxVxFBPGrU/rtPVKPooeMR5e7fnMR/rhgTP14+95kO1Pzo8Yjy7gt78PsTboO1qPfBv/fbjpQm3CFWjDcJS3iTSEh38pt702BPix0fF8jN0T7fpY+IeHDK+CHxnI1R0tdr79OeSnCfQ4RRKIzvMxoJEV5SbxIZby5SUrXLuQgZcdQjxHG9CoJOvSzppLtNCyUxwluhxiQs4U3CNvy10uqQoLTf61Nj1gL1KeTycnW8I4QJqkTFZspjbPca6lPISsiVQkNXbLnt5wthsSbseO89Olxe7A7C7rGyk2sIfwqZ4eWL1biahCW8SVjCm4QlvElYwpuEJbxJWMInGFpZSYbKSv816Hw46vyCmMLLvTVxzea655meZn+ITEGi6qY7gJK7n6tmqWcXApDYupetl3uLD3phocll5unZN2+cvDE7xQXfIlA0Ms8fp4TW5Xk6IvJgmh4vd/2sin3wWc+PeosOEiZ6M0uTt1nerw+7/05DBM0KUY6xrz6m12kQekxEOJ5H+Ph7ANSnoDz8G/t0sdSaD0G7DAtNSEsLNnvOt+auy2pi38YVwJPr6WjSexeCfoynKx7XICxm3X4g0yIKfj9VKD1mQ8gbzUwnxpMmtpyS39k/AIW0L0wSW7gCLPQhHg//cMWy0/R4VWCB7oPC4jyL7eAzsVnjCouEodur8X7lEJ9m0gqLpGANoEzCEt4kLOFNwhLeJCzhTcIS3iSspwySBEsPY3BkuCIE0aM1Z3jR41n+uOZ6WekpWERFsInjsWxofT2GRq4XCpSeZKkDzbz8ovAKBK9C6KpemiPY4xtoTevMhVpv70c8ZG8wbitpzn0iGPioGPFADMz9Ig0NyG073yuQUL7euyAS9t7Js3+iNew0NhqxtQkT2L5hNxP68rLyudBmXLp5GoHwZiPVqFPr3z0T+70Gjqyr+MGTFRETz658VIpX/2jMZygwzlQ/8OtW0fC8nWgk9IWfbUepFEqD4VdqOWUHaFiUV5b3jrztm5wrMPxakzePhzTL+T+Xt6FfeuyRZ6Wc7A+WbRsa2eY70nzG0D4EUF8Qdq+7lSTsVSv/A/EvTjnQqf38AAAAAElFTkSuQmCC"
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
    <!-- Left Sidebar End -->
    <nav
        class="fixed top-0 left-0 right-0 z-10 flex items-center bg-white  dark:bg-zinc-800 print:hidden dark:border-zinc-700 ltr:pr-6 rtl:pl-6">

        <div class="flex justify-between w-full">
            <div class="flex items-center topbar-brand">
                <div
                    class="hidden lg:flex navbar-brand items-center justify-between shrink px-6 h-[70px]  ltr:border-r rtl:border-l bg-[#fbfaff] border-gray-50 dark:border-zinc-700 dark:bg-zinc-800 shadow-none">
                    <a href="#"
                        class="flex items-center text-lg flex-shrink-0 font-bold dark:text-white leading-[69px]">
                        <img src="/admins/images/logo-sm.svg" alt=""
                            class="inline-block w-6 h-6 align-middle ltr:xl:mr-2 rtl:xl:ml-2">
                        <span
                            class="hidden font-bold text-gray-700 align-middle xl:block dark:text-gray-100 leading-[69px]">Minia</span>
                    </a>
                </div>
                <button type="button"
                    class="group-data-[sidebar-size=sm]:border-b border-b border-[#e9e9ef] dark:border-zinc-600 dark:lg:border-transparent lg:border-transparent  group-data-[sidebar-size=sm]:border-[#e9e9ef] group-data-[sidebar-size=sm]:dark:border-zinc-600 text-gray-800 dark:text-white h-[70px] px-4 ltr:-ml-[52px] rtl:-mr-14 py-1 vertical-menu-btn text-16"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            </div>
            <div
                class="flex justify-between w-full items-center border-b border-[#e9e9ef] dark:border-zinc-600 ltr:pl-6 rtl:pr-6">
                <div>
                    <form class="hidden app-search xl:block">
                        <div class="relative inline-block">
                            <input type="text"
                                class="pl-4 pr-[40px] border-0 rounded bg-[#f8f9fa] dark:bg-[#363a38] focus:ring-0 text-13 placeholder:text-13 dark:placeholder:text-gray-200 dark:text-gray-100  max-w-[223px]"
                                placeholder="Search...">
                            <button
                                class="py-1.5 px-2.5 w-9 h-[34px] text-white bg-violet-500 inline-block absolute ltr:right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto"
                                type="button"><i class="align-middle bx bx-search-alt"></i></button>
                        </div>
                    </form>
                </div>
                <div class="flex">
                    <div>
                        <div class="relative block dropdown sm:hidden">
                            <button type="button"
                                class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle"
                                data-dropdown-toggle="navNotifications">
                                <i data-feather="search" class="w-5 h-5"></i>
                            </button>

                            <div class="absolute top-0 z-50 hidden px-4 mx-4 list-none bg-white border rounded shadow  dropdown-menu -left-36 w-72 border-gray-50 dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300"
                                id="navNotifications">
                                <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                    <div class="m-0 form-group">
                                        <div class="flex w-full">
                                            <input type="text"
                                                class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit"
                                                placeholder="Search ..." aria-label="Search Result">
                                            <button
                                                class="text-white border-l-0 border-transparent rounded-l-none btn btn-primary bg-violet-500"
                                                type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="relative hidden dropdown language sm:block">
                        <button class="btn border-0 py-0 dropdown-toggle px-3 h-[70px]" type="button"
                            aria-expanded="false" data-dropdown-toggle="navNotifications">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAcDBgEEBQj/xAA1EAABAgIHBwIFAwUAAAAAAAABAgQAAwUGBxESFlYTFBVRk6HTMVciI5GS0hdBYiElRVKC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAYBBQcDBP/EADERAAAEAwMKBQUAAAAAAAAAAAABAgMEBRESIZETFBUWUVRWkpPSBjIzZoExQVNk0f/aAAwDAQACEQMRAD8AoRouTPo5m9mKnNJ0yS7nrcOydi8VLWAJbYpQSV88X7x0zV9nxZcnc6RwCcuVwr/KACRtNqRgw4L+0RtEhtQzadMG6hwwfoTOegOJLoiYkYGyMB2MwemOO0W39wNF7k62ofTF8Mxp4okbpftN6wXGX++CNHU4ojWRKOlFl8VFeK23oNotqsrcmbj3A7/JxFoz3kkLQ6vReFD+MWWqNDUPx+r8mlHDpk0cSX22fkjd5+xKwhTclIOH+lxjUbqQuXIfCdLmIbIohK3siQENGhxH4XkjB89Q/wBo6lW10QxrDVt/TlFOXFGzUUkpSpaxu7n4lpC20v5eySk+qY8UzWapfHktRWci5W15fTreLCUm4U0lxtG7lM5as5EiNytovJauqHXlazfWk76p/CDK1m+tJ31T+EGYbK9KPPtHlgzDZXpR59o8sZRRjZCYrG1VnXuTkhAZWs31pO+qfwjKas2cJIUmuk4KBvBBSCCP+IxmGyvSjz7R5YMw2V6UefaPLBRj9TFYKzo7j1k5IQI9FS6/MWqGrGpdJSXCpLhs8nYDOTPlzFAgJSQQjliTG2aqVzLhUn9P6T4Nty4Sw+PGJhlbPFt8OP8AlHpHglrOp2HbwwcEtZ1Ow7eGHHWmIP6y06/P9GZaswnEkr6jnYPNMuq9ooSifOqdSUykWwaJYuRKwiQlqSQlSAnDNv5qixVQoGu9DViomnBUN4HTdDsuVzQrZz1uMVygj0Rdf6CHpwS1nU7Dt4YOCWs6nYdvDHJ/xJEPsvM6PUjKINFpJXlUqbR2h/DsEw+y8ufyp1KFpUaFuu2VU+x0QIs0V90IjprgzRX3QiOmuJeCWs6nYdvDBwS1nU7Dt4YW6vbYrlQGazKPbvXihFmivuhEdNcGaK+6ER01xLwS1nU7Dt4YOCWs6nYdvDBV7bFcqAWZR7d68UK1lep3uIrrIgyvU73EV1kQqXqEIeukIQAkTZgAAuAuMa1w5RW5w3uyMVB/TI5goiPWOLvL8THYG/lep3uIrrIgyvU73EV1kQoLhyguHKDOW92RioToGYcRxfSY7A38r1O9xFdZEGV6ne4iusiFBcOUFw5QZy3uyMVA0DMOI4vpMdgb+V6ne4iusiDK9TvcRXWRCguHKNlkhC3rVC0ApM2WCCLwbzBnDe7IxUIVI5glJnrHF3FX0mOwf//Z"
                                alt="" class="h-4" id="header-lang-img">
                        </button>
                        <div class="absolute z-50 hidden w-40 list-none bg-white rounded shadow dropdown-menu -left-24 dark:bg-zinc-800"
                            id="navNotifications">
                            <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAcDBgEEBQj/xAA1EAABAgIHBwIFAwUAAAAAAAABAgQAAwUGBxESFlYTFBVRk6HTMVciI5GS0hdBYiElRVKC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAYBBQcDBP/EADERAAAEAwMKBQUAAAAAAAAAAAABAgMEBRESIZETFBUWUVRWkpPSBjIzZoExQVNk0f/aAAwDAQACEQMRAD8AoRouTPo5m9mKnNJ0yS7nrcOydi8VLWAJbYpQSV88X7x0zV9nxZcnc6RwCcuVwr/KACRtNqRgw4L+0RtEhtQzadMG6hwwfoTOegOJLoiYkYGyMB2MwemOO0W39wNF7k62ofTF8Mxp4okbpftN6wXGX++CNHU4ojWRKOlFl8VFeK23oNotqsrcmbj3A7/JxFoz3kkLQ6vReFD+MWWqNDUPx+r8mlHDpk0cSX22fkjd5+xKwhTclIOH+lxjUbqQuXIfCdLmIbIohK3siQENGhxH4XkjB89Q/wBo6lW10QxrDVt/TlFOXFGzUUkpSpaxu7n4lpC20v5eySk+qY8UzWapfHktRWci5W15fTreLCUm4U0lxtG7lM5as5EiNytovJauqHXlazfWk76p/CDK1m+tJ31T+EGYbK9KPPtHlgzDZXpR59o8sZRRjZCYrG1VnXuTkhAZWs31pO+qfwjKas2cJIUmuk4KBvBBSCCP+IxmGyvSjz7R5YMw2V6UefaPLBRj9TFYKzo7j1k5IQI9FS6/MWqGrGpdJSXCpLhs8nYDOTPlzFAgJSQQjliTG2aqVzLhUn9P6T4Nty4Sw+PGJhlbPFt8OP8AlHpHglrOp2HbwwcEtZ1Ow7eGHHWmIP6y06/P9GZaswnEkr6jnYPNMuq9ooSifOqdSUykWwaJYuRKwiQlqSQlSAnDNv5qixVQoGu9DViomnBUN4HTdDsuVzQrZz1uMVygj0Rdf6CHpwS1nU7Dt4YOCWs6nYdvDHJ/xJEPsvM6PUjKINFpJXlUqbR2h/DsEw+y8ufyp1KFpUaFuu2VU+x0QIs0V90IjprgzRX3QiOmuJeCWs6nYdvDBwS1nU7Dt4YW6vbYrlQGazKPbvXihFmivuhEdNcGaK+6ER01xLwS1nU7Dt4YOCWs6nYdvDBV7bFcqAWZR7d68UK1lep3uIrrIgyvU73EV1kQqXqEIeukIQAkTZgAAuAuMa1w5RW5w3uyMVB/TI5goiPWOLvL8THYG/lep3uIrrIgyvU73EV1kQoLhyguHKDOW92RioToGYcRxfSY7A38r1O9xFdZEGV6ne4iusiFBcOUFw5QZy3uyMVA0DMOI4vpMdgb+V6ne4iusiDK9TvcRXWRCguHKNlkhC3rVC0ApM2WCCLwbzBnDe7IxUIVI5glJnrHF3FX0mOwf//Z"
                                            alt="user-image" class="inline-block h-3 mr-1"> <span
                                            class="align-middle">English</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGgAAAwEBAQEAAAAAAAAAAAAAAAUIBgQBAv/EACkQAAIBAgQFBAMBAAAAAAAAAAECAwAEBQYREhUWVZTRExRRUiIxQXH/xAAaAQACAwEBAAAAAAAAAAAAAAAABgEDBwQC/8QAKREAAgEDAgUDBQEAAAAAAAAAAQIDAAQRIVQFEhMUkhWRkwYWNFNxgf/aAAwDAQACEQMRAD8AyzSSSMWZ2ZmbVmJJJJ/przc32aq04BgXRrDtk8V8PguW4Y5JrrDcNggiR3eR7eMKqqNST+NZfH9WxSukcdhKzuQqgMNSa2b1+ID8Z/epO3N9mo3N9mqlbC7yLiF/Lh8WHwRS+pshe5w4QpK2u3buK/idw0Aan/AMC6NYdsniui6+omsigueHSLzZ5SJFIOP5Xo8dVTyvZyqcA4bTQ/0VJe5vs1G5vs1VpwDAujWHbJ4o4BgXRrDtk8VyfeFvspPIVHr8W3f3qS9zfZq9WSSNgyuysraqwJBBH9FVnwDAujWHbJ4o4BgXRrDtk8UfeFvspPIUevRbZ/enFYLMM/D0ZbLD8QtPd3UbX07e3kUxsCm5VjaRwGAGm5K3tZWe1fFbO4w9cCTCgzBzcL6Tes4kDEuI2JJPyaW+ENbIl7JcdPRY+UO4U5LjUAnXFLkcqxTwBwSjNhsAkf7iluRsTytMbuC6ksPd2uIMDLd7bZxbFQFKkiMFtQdRWlshavcXN9Dhl5BLcNtmmlkt2icwnaoURO5BA+wFZmfIqJbotpiVuXnhMd0TAwOpZ9HTQjcdH0/KtLbPuugnLiWuxHT32sReZQw2hthLf5rTJxm74XcWkkNrFbo8VmoEglQu7FkY5xy5Oh0ql2w5m7h5WmkcEBHVUQEkDBNOKKKKQKsooooooqT+aMx9cv8AuH80c0Zj65f9w/mubEY40v75ERVVbiVVAGgAB/Qrl2r8Cto7S120PxrT6IoSAehH4LTPmjMfXL/uH80c0Zj65f8AcP5pZtX4FG1fgUdpa7aH41qejD+mPwWmfNGY+uX/AHD+aOaMx9cv+4fzSzavwKNq/Ao7S120PxrR0Yf0x+C0z5ozH1y/7h/NHNGY+uX/AHD+aWbV+BXVh0cb39ijorK1xErAjUEE/o0dna7aH41qDFCBnoR+C1//2Q=="
                                            alt="user-image" class="inline-block h-3 mr-1"> <span
                                            class="align-middle">Spanish</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGAABAQEBAQAAAAAAAAAAAAAAAAcCBQH/xAAlEAABAgILAQEAAAAAAAAAAAABAAIDUQUREhYXVFWjpNLiITL/xAAYAQEBAQEBAAAAAAAAAAAAAAAABwEDBf/EACURAAACCQUBAQAAAAAAAAAAAAABAgMEBREVVKPRFBZVkpTSUf/aAAwDAQACEQMRAD8AiL4sWI98SJFe57nEucSSST9JJK8tOmV3bs03kdyH2S7NN5Hch9l31bLVKe5D1JA/eEb/ADLMDhWnTKWnTK7t2abyO5D7Jdmm8juQ+yaxlqlPcgkD94Rv8yzA4Vp0ylp0yu7dmm8juQ+yXZpvI7kPsmsZapT3IJA/eEb/ADLMDhWnTK9ZFiw3siQ4r2va4FrgSCCPoIIXcuzTeR3IfZLs03kdyH2TVstUp7kEgfvCN/mWYFWRVjC8a5xfaYXjXOL7UunzqqraeBft0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkSdFWMLxrnF9pheNc4vtJ86qq2ngN0uKutLPkVpFt/wC3iRSoSU5SRgZlER+Iwi3UJJUJLIBEYRbqEkqEkgERhFuoSRn7YJlaSMTIv0wiP//Z"
                                            alt="user-image" class="inline-block h-3 mr-1"> <span
                                            class="align-middle">German</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/2wBDAQQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFz/wAARCAAqAEADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAgCBwEDBAX/xAAjEAACAQMEAgMBAAAAAAAAAAABAgADBzYEEXSxUbISIUQW/8QAFwEBAQEBAAAAAAAAAAAAAAAABwYFCP/EACcRAAIAAgkEAwAAAAAAAAAAAAABAgMEBQYHETM0dII1NrHBEiEx/9oADAMBAAIRAxEAPwD1mdmYu7sWLbkk7kkyO58yMJzKT5ZtqSf6at9/gre6xi4ulqcmrcCr7rGLjRYXoS3Ez0atDyeTCLPdnKl+/wAVLtozEWa7OVrwqPbShrPTc4RGu77he1m+UVlufMyrupDK5UqdwQdiCJiEnh2aT+mjuhCEFzi4s21OTVuBV91jFxdLU5NW4FX3WMXGiwnQluJno1aFk8mEWa7OVrwqPbRmYs12crXhUe2lDWem5wiNd33C9rN8orKEISeHc7oT0NaiJrdWiIFUVXAAGwABmj4r4EGYocG1icWliWpyatwKvusYuLvazJq3Cq+yxiozWF6EtxM9GrQsnkyMWa7OVrwqPbRm4tF18qXhUu2lDWem5wiNd33A9rN8oq6E27DxOnRIj63So6AqatMEEbg7mTw6RR/GFvD8WJ//2Q=="
                                            alt="user-image" class="inline-block h-3 mr-1"> <span
                                            class="align-middle">Italian</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <button type="button"
                            class="light-dark-mode text-xl px-3 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                            <i data-feather="moon" class="block w-5 h-5 dark:hidden"></i>
                            <i data-feather="sun" class="hidden w-5 h-5 dark:block"></i>
                        </button>
                    </div>
                    <div>
                        <div class="relative hidden text-gray-600 dropdown sm:block">
                            <button type="button"
                                class="btn border-0 h-[70px] text-xl px-3 dropdown-toggle dark:text-gray-100"
                                data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                <i data-feather="grid" class="w-5 h-5"></i>
                            </button>
                            <div class="absolute z-50 hidden list-none bg-white border rounded shadow dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto w-72 border-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-300"
                                aria-labelledby="dropdownMenuButton1">
                                <div class="p-2">
                                    <div class="grid grid-cols-3">
                                        <a class="py-4 text-center dropdown-item hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                            href="#">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAeCAMAAACR41cYAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAJ/UExURUdwTCEgIB8fHyAfHyAfHyAfHyAfHx8eHiAfHx8eHiAfHyAfHyAfHx8eHiAfH5jU5h8eHiAfHyAfHyAfHx8eHh8eHiAfHyAfIAQBAxgWFiEhISEgIAwCACAgIB0bGi40NhkVFCAfH5za8FBncENVXKTm95vZ8Jza8J7c8R0bGhMTEx0cHCAfHyEgH73//yEgIJ7c8QAAAIfF6TM7PwwJCh4cHHm45SAfHyAfH5za8CAfH5za8Jza8Jza8Jza8CAfH5za8G6VokRVWxIKCJza8JvY7pza8DtITTlFSZ3b8AMHCgAABJza8ElBPDA4PFVLRK3z/zEvLRcXGEVBPTA5PJza8AADB5vZ74XD6QIAAIrJ67T+/4HA6BAIByAfH4zK7IrI6zE4O7D5/yAfHwEAACIgIJza8BUWGAACBhoaGvXLsQ0PEZ/g957c8RATFf/oy1p4hfzRticqLIC+6Jrm///jxiMiIvDEq//Xu/bHq//fxG5eVRgXF////P/z0P/22lNHQv/gv//877H5/xcTEhUOC76cicyolCcjIf/avdivlpvY7mZaUQMHC1lNRfrNsPTJr//o0v/cwf3WuHtnXIshF4VuYvTEqfrcyM+oqOrW1PTm4v716zM7PqHf8v/t1SkpJsD//1RueGebxaPn/IXK/TVIV3OapbmXheK0mNuymv/GrdWZhu/Tx+u7pI54adymkf/658+dlMifn+S1mafq+7uhizYvLeLCufLs7/rk1mNVTf/NrtOskqeHd8aXlXFgVv/kwZU1LNW1neK9tJAuJsCMirJwa+nKv9zFx2CRtVuKronG6naszSUnKUZaZG+TmUFPU3agr3GkxIu8xSfH+3sAAABzdFJOUwD97RwqJTMat/4VL6DlCwmSOh2qV77yhGEIms8njIj9+xEk6wESA6CMcwRtUGQlwnjIs9iu9u3fsS5e3hvwhB66hguP9eJfotdT9nPf4o7mPNW62Kc/5MnTMeRzzcTG3/LkYv////////////////////54WQMpAAACTklEQVQYGXXABVMiYRgA4BdYdhkExa5TR8Xuvu7u7v5g2V06XFGxO7C72+vu7s74Qaczd87sIg/85yeUJMMCsUK+FFzIEEISvwSZxF8iSwpEczyBT4L4xMAXhniE4CIQ8QRgwCMWID458PgipEYag0ZD07TGYHCgOcuBI1GIWA3lqEcOrVbrUNdXUzSLfIHDB7EG7fXGi411tRdq6y7dedrl1KjTgGMNop3PSm+WGO35+fkNHSUlpT0U8geO4ABneUX7w9tXWxmGKXzU/7HyyX2tBLhCVT0vh/q7b7W3MW1Fb169H6p4TIXAP1IRQfiIMV/qRUXl8+4HHUwnY//w9l1lZ7kzHBP7EIRICpg3juMemLd2zGwcHOjrLbjB9PYNDI72sgYc88Bx3BsDQiSN9FQCpFDFxrKyVvO1KwXmwtGy0i4qBUDpGSkVEbDA73D5vYIGo/2y3Vhkfl28PQl4NoQABAdl79vV0lzc3LLnwP4dBPB4rbNkwbwM1byMRHAVk7qe3gIAyWpWIBCwKAgWFTS8dfdBQY5cIMsRsv6wuARLhIU+rUBhKCQgFNwIPrYkTR6uVqjD80LBvWxhIFKgsLxT4IYy9XyWJbo6ujo64tyJvbGwiM1H9OM/kalmosb0bXhct2m1F/DExpG6KZPqxy/Vd9XsrGriro5cEQVcUSSp05s+T0XU/HGM6T6Z9DqSjAcur7Vkk77KNjnzu+rrzKStSt9ErloGfOk7yRGr1Tb9ZdpmtY6QG+NWgivlofTMk2dyz+YeP5oZvy0GFvwFlSbPVswTomsAAAAASUVORK5CYII="
                                                class="h-6 mx-auto mb-2" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                        <a class="py-4 text-center dropdown-item hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                            href="#">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAdCAMAAABopjdHAAAAwFBMVEVHcEwAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4MAT4Mri5Y4AAAAP3RSTlMAIwhydxy28hIWIc+je6u9P/b9BUziKJcMxKdZAjyMXjfXu8Hm1eou2t0z+rKRRq+A7my6Qp/M34PrU1YPiL7YsJ9AAAABbUlEQVQYGW3Bh3aiQAAF0EedoSMiYu+isdcka7Lv//9qYTib3eR4LwB9b9yilWBtefeN2NFR6h3WJOfeLIqizn3REiQXgdaEMSdb5uiaWTLXc+mOH5+XOSlGaJDJDN+NSJ7QILn0zcegcJ2SpWUvaZcleFROk44d+jf/MF1sWHlHl895OPI5GyM+10bML97US/iXiazB2jIo8uJtzlqSQptQWZ6hxzoMQaU1gGVTCfUsbPnaR0hllkG2WUkCmCQDmFRuEk2TlcSESdJAQCVoAj0q4YfWXrRduaXyC0BKRQRAARwFK5sxAGdL5X0YW/HniUrkomQNWVt11lQ2swFq4+GK/7RsA7XrzkKWGu3Q/h3Z4c7YQw5yVHpiYTpAX1quJZuATKO1hsqLR+H556smc6mNH0c74dZBxbFZEuv77DLtTARLZx2Vvs+f4j6UIX+yUCte+V03R60/PvA/ouvii7N/m742yESsLrtejsofWqVrkBSdwYAAAAAASUVORK5CYII="
                                                class="h-6 mx-auto mb-2" alt="Github">
                                            <span>Bitbucket</span>
                                        </a>
                                        <a class="py-4 text-center dropdown-item hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                            href="#">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAA0lBMVEVHcEzEI2HDI2HDI2HEI2HDI2HDI2HEI2HDImHDI2HDI2HDImDDI2HEI2HDI2HDI2HDI2HEI2HDI2HDI2HDI2HDI2HDI2HDI2HDI2HDI2HDI2HEJGLDI2HDI2HDI2HqTInxU5C9HFq7GlnyVJHEI2HpS4jwUY/BIV/tTou3FlTCImDzVZK6GVfUNXPfP32+HVziQ4DaOnjrTYrFJWO/Hl3MLGrKKmjAH17uUI3cPXrXN3XSMnC1FFLoSYf1V5T4WpfPLm3mR4TIKGbQMG7wU5DqS4gW3fYwAAAAH3RSTlMAlnPA0mVNzNyLQuQo7zUfxPFVXWx6pPMCRX/1A3yvLDJKvgAAAk1JREFUGBllwIV2GmkUAOAbIUD8bCrp2v1dx10ZBmbf/5WW0DZtTz/44X518fzwef3pwyP87uZKiJhRSlns1iv41f2Vpk73bdumYVUwff0FfvKS07rUNJz4wrlJwpqJj/Dug2D5vNsHrPUS0Sx+rgqxhW/+EKxsuMpEoKWSiCj5rqTiTzh7EqzkSkof0WBPMkRpfORYIW7hzZrmjZKIGd8HrPUSCe8Cmx7pA5zcOpp4iYhSSRfkxvOxtDacUNeXALBmR45n0reUhSaMh7jlxnfsAeDJ0YRjZoxaiG8OsXBDsB95JtWs9S2s4spz1Rg5R+mxcrWu99Gi8ETt6RYu6qrr92WV18wOVuSFyHYZZojIU/YMVzkdBmstK0QVtpgUQTepE0KmhG5go8uwD8M0SkZD/LQrg7zrj8c+TJO0voMNjSa1ELIoY3jT9rlzwWCtHQZbizu4oinHN7LhyYENTNeHtG3bri+F28AFCwmeyKXpmaWHJAxytVsIX3YpfYZVcTAGUfLxYIND1ExzwVqOJ7ynW3hycUJQ8lnbuGu8yZrSlipDbEanvwCsWe8lH7XViTcSkXc2Hw1Kn7LPrwA3ukimLB/c6PGNSmIaEakyV/wDJ9e08v2gR49nBnPbEeP37K9XOLkX9UHTyP+HXy29LdWuY+4Gzl5EHKQTfsfTIDcp01v46vVSFOXsVYZnZK5FVegLeLcStAjnhpNlIZwkoo7dFn7yuNasLrs2itq0dE5sbuBXL2tHGY1jyqjeXP4Nv3m8/LS+u7v+9+MtvPsfo0R0DDqUOxMAAAAASUVORK5CYII="
                                                class="h-6 mx-auto mb-2" alt="Github">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                    <div class="grid grid-cols-3">
                                        <a class="py-4 text-center dropdown-item hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                            href="#">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAhCAMAAABkz+JgAAAAxlBMVEVHcEwAfuYAfuYAfuYAfuYAfecAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuUAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAf+UAfuYAfuYAfuYAfuYAfuYAfuYAfuYAf+YAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuYAfuUAfuYAgOcAfuYAfeYAf+YAfuYAfuZXV9ysAAAAQXRSTlMACxEy+QLr/PX+2xgHGh58vjZgQeTHDu1k6RWMKIbTudej4Jipy0cFcPPvL3MkTBNn0HfFVq5Q6LVrOh8GnFk8kkQ6JVUAAAGsSURBVBgZfcEHgppAAAXQjw4Mgi5iD/Yu9o6uW/Lvf6kgiowmm/cQq3y1G0g0hvMKXuTaksESMdei2LhQaWuTIbOQxZW+9xnyJys8NMqCEVHXAYybPiNyOMNNZW3wYWBjVZeMmVsPocVOMiE3bl4yITdpYFSlShyKXZ8qs4ZcmYrSKIvxd4+KzQXQ+oJ31X4OV5VmlXdyYCM0rklGrLSOG/0tz4jcZnGz7JEMnCwS2sQiWSroiHlDnlY6nngDGjMo3tseXun9dyi8jiyn8MzeyamLh31A0ndSSKQmPZJBLYuI7kheZaouYpcWI7KJK+9T8M7sL3CVq5uMHS5ArkOFudeB4pSK0gWjElXiMOoKqn6tgVReMpEZvuUzTMjWBSGt1mMs8zmrp+uCselcw01uJxkRzqXDanouGJFlGw/jQsCQUThaJIPC0WAoOKeg0k6SRnHpM+I0LMrWAs/m6a/urCl4I7ru6ewV8KxtLO0uE3m7OG3j2dmXFlWdKZt44bYEVZlOEX/RagYTxsTGv1S6Pm/MfAM/+CiWeWUds/jZh1Oi8VvDf+mLbVrHsz8x4n90MIcLhQAAAABJRU5ErkJggg=="
                                                class="h-6 mx-auto mb-2" alt="Github">
                                            <span>Dropbox</span>
                                        </a>
                                        <a class="py-4 text-center dropdown-item hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                            href="#">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAMAAADCMPhoAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAJAUExURUdwTGVPRGVPRHVeUGVPRGVPRGRPRWVPRGVPRGVPRGRQRWVPRWVPRGVPRGVPRGRPRWVPRGVPRGVPRGVPRGVPRGBVUmVPRGVPRGtUR2VPRGVPRGVPRGVPRGVPRGVPRGVPRF9LQ3NZSZ6IdmVPRGNVT3poX2VPRGVPRHlhRl9gZIFnR2VPRJBpTP3rzvTSqxIgNEme1yyDwhUiNY5oTGZQRGlSRfzoyf3qzffbuPXixZpzVfTVsGBMQ/PQqXpbSIRiSnFWRvjlyP///39fSW1URrKUeIhkSkM8Pe/Np4tmSyx8tvrgvv37+ZRtT5ZwUuPDn1VHQ595WnNYR5FqTVKCo2NOQ/vlxdrBpCEpN9y7mPXUrj1IWZV7ZzWKxqqTfunIo/PRq7mafsm/ubipoP338LispLyrmKWNeFtlcPzy55yBa/PNo9e2lCcsOO3AkO7Gm1lZXhUpQi6CvsilgzA8TaeCY0SZ05yDbysuOTExOvbYs/HdwaqHaeDBnc62nGJqeOXQtBspPLKch8ytj/327fjz7sO3r35sWb+yqbOObk5jdmNdXzR7sPHJnfDbvUVujVd1inhxcVJgb7+aeerXvDZ5qo2Aeyg0Rh9PdkhphShzq/fixBxFaRk1UZ97XjpznjZCUzQzO15LQydrnq6Vf829sPnn06GGcIRlTy4+UqCeoPLv7s7Hw+Hd2+zp546UnqCjpc62e7uoayhfiqmRSHWAjlBTROa+T9KxTFKFqe/HTp+XXllwgsW4a5e0njlHS3QagBcAAAArdFJOUwChif0QVMAFATnZ3hjoM8j3bbLSKPesC/SV9JpILoBY8Pz9kf3wgnaT/pqvGFBIAAACu0lEQVQ4y3WU5VsiURTGCZFBxcCu7ebOXBiQRgQBRbBwLbCwde3uWN1Ht7u7w+3u/df23mGYhcf1/fp776k5Z3i8CIklObm8rZWbndr9c+2QmCeOF22P34Tj+Ae/KX79/vHlQObeK+dPViRERWBCtOewQqH48/3rx3cvFmkIYX90RPLMbgVWyef3b/0Qc0hLw3hUwjmGN3741A1Z0bFhPBaHV0w8fP5mGdJI2DCV/Y/HMLzx1r1Fum7qvslkKuqH9A4xlz/67ATiI8P+MXraJA9quiiJC7DthFKJyoP+5TqM1XmWQq9dncZxyZBSqWwsgWN0EcJ5hSqA5eSaJGJOIUMJfRVWIOwCQVWV7UxnDaILiI8M05h7ASg1GEqrQFm9r1bGGmSXkeEahCi+HQCDdYbCMg8MxrCGVMRvQFiH8qPsZ3ynB44wluJww21IV6MCAHAYzYMMpuqbk1kD/7ry7oNqxOX5ACxQ6HlfOXovLE/gxjTkRbFdankhAKP4ce8kpXMbizNEoTkUoNpG51AEFSgzI4Oj13jJMa/R7+IHDfssoNJMNaARokDHWyjKWKMlrVqS1DYJgkW4QMBnRgacA1T21ZAh6RrisEFgAXMa3Roy2F2gcl4TwtqZZmEcW0NVYCmAP6HTUBziGl1LoC24MsRu1B9QMX1e1CGm17h1LStd6683pESw0aSMAm8eM8nxmyT56HFra+vLVx6bzXY0NCyxgFkSFSidJa0rT3ra23t6PDbPuj6LuwnWAGpJsulY++qqx7bR0WntEnFLkYYNFgDGSXK2s62jo61zQe+eD9/rRLxNTgD0bBc1bl+zMCXsMiQ4hN0JHCGHtl64P+L2RNihtqju1FoxXuqSC4jI442XYoe6IP/Z06ZJoTwradN5E/xEOafolP/9INIFyYxHKpNs+RMhUnIk4T+Gv3cNvzi99G5fAAAAAElFTkSuQmCC"
                                                class="h-6 mx-auto mb-2" alt="Github">
                                            <span>Mail Chimp</span>
                                        </a>
                                        <a class="py-4 text-center dropdown-item hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                            href="#">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAACplBMVEVHcEz////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////60uX///////////////////////////////9uytzmmQDpqCA+uZHgFWPkkQAWjnjODgjIAQNVwdYarX3XADfcAEj5/f3cAE7L7PN/1e7ppAuw49I2t42G1bjjFnJkyuXsqyX22qE8uJDyn75zzN70qcViegRUgh/ZAT245ddB2aIzACb34LAFgmbMAgpFsrj//vTS7/QVqnr+/PrppxwwvIzvw2Puu1BKvdT+8PXI7OEOqHaS1+XfA15cw9f96r7E6vFcz/pLdARCvZTw+fbfDV9lhhv/ryHpU4zhGmj2vtH7AlgdtIEYDjGm3+oKlG8bk3zrtwmd2+ggl4FSwpoIimozpJrIkgDe9PrPJQB12v/rtiT8//8rpoR/0N6v4/LtwBxSwtvlO3vI6+pgxqVGu9MLp3NzzLC95++Zkxzwibb/GW0bfWb33qvumwD+c6cUACE3ADAvs4k5UVo3EDnvzCxsxK/kfUb96vnSNgD+rBznnh81r4zUEil7ysTpf4H384miwZjWOxfcag395/cPjW714Hn3ynT6nABVvc9gx+D44rVkx9rbWhfkjxzmS4V3ih1Lj03fFV7TDCJmnV5staHhK2njMHNuxc0nn4Jv0e+wVX9dqo3sFmem6P9Eu9JtAC/IvG1Jfhxym1BsgQqh5/9AEjyoAErufqr01pXrsDYoDjQ4Gj0cy47Alw5wLFTuAVp6z7PYJWp43rueFVRmEkb0ZprVAEUgt4QsiG94nZYsIT9Gx5y9/+uQ18Ci3coAom6/ICZyAAAAKXRSTlMAP9pMoGFRR+eup71y+9DzuF0xoyLgFQKyWWadV4P2w5b+kQivDFtcxZCJTt8AAAKlSURBVBgZdcCDU2QBGADwrxXaai/76oTvvbdmNnezbetqsjHZOtu2bdvGf3K1u9NMN9cPFmPzOOtZsBQ6jiX5IxP+z5bjLxKJnprCP+wtGSwAsMJnpB9J4Vq2I8MeFliiZziuBLDBZJKixrNR5eaGxmBgrupNTx9ANoDj2HhxMXn3YZAsJUNlDno8z/4Ar7g0S1sWL4Z6NfQgtNuXIPpyeKC3zFMuEMR5861Vsbfu590LDbnYQpxIcbMDPXqBl1d+Yl1sZ5As90ZIUVHIhdxuWRUagZ4Test3tB+M9s0irl0pCgnNC+3obEIT0FlHw6Zd9WJxZIM7QRC5Z/PODDVmc5wtQIeNg0G+R8XianEt4SvLatnb6Fd85LA1GJjl9GUR7g311eLIaPeq2LaYbR6Uh1+8EVhZrAIA04yUIMI9OlJcu2ETzksiKYrMNuMickwAaDm3ZbJjxNV2QWIdzosgqdaaQwcCT196gubAxsGODDeVd0V+gDwN522s2b5/X6laqVYMcwCYNOQzzMLlAkGcN87ZsnmrRCoN8xGWhpWYwhwrG3AqCJgWJGowNbjERyGNkkh2+hQqFYE0MOC/f6kJGL0+olRmnpNIJNIodWZPMNJBh+7KDx+deTF5p1woFPqcl0qjmnevQBc66Lhi2ad3Wu3U80fCm4XqTEXzyVMee0wtQI8VXxKmLP9YOTtb+bhcfXm4rLWry8Mvxgj0lgUrCoUjHyqntJOvJ8qQtjyJpCgywhj0eIEKofDNZ+33ma8/2rhGsPq4KCFBFMEFPYfUnjBl6cS3Co3mS5ozAAuTRaLkeBYY2GFgcCr+rBAI5G/5awCM0d8fGbCAacxgmxR4TefLe9EGAJhcLhMWs8Vff9L7Pa1hCSb4eyAc2bAUBzOOCx0W+QuvxroExNCXxAAAAABJRU5ErkJggg=="
                                                class="h-6 mx-auto mb-2" alt="Github">
                                            <span>Slack</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="relative dropdown text-gray-600">
                            <div class="relative">
                                <button type="button"
                                    class="btn border-0 h-[70px] dropdown-toggle px-4  dark:text-gray-100 ltr:mr-2 rtl:ml-2"
                                    aria-expanded="false" data-dropdown-toggle="notification">
                                    <i data-feather="bell" class="w-5 h-5"></i>
                                </button>
                                <span
                                    class="absolute text-xs px-1 bg-red-500 text-white font-medium rounded-full left-6 top-2.5">5</span>
                            </div>
                            <div class="absolute z-50 hidden list-none bg-white rounded shadow dropdown-menu w-80 dark:bg-zinc-800 "
                                id="notification">
                                <div class="border rounded border-gray-50 dark:border-gray-700"
                                    aria-labelledby="notification">
                                    <div class="grid grid-cols-12 p-4">
                                        <div class="col-span-6">
                                            <h6 class="m-0 text-gray-700 dark:text-gray-100"> Notifications </h6>
                                        </div>
                                        <div class="col-span-6 justify-self-end">
                                            <a href="#!" class="text-xs underline dark:text-gray-400"> Unread (3)</a>
                                        </div>
                                    </div>
                                    <div class="max-h-56" data-simplebar="">
                                        <div>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                    <div class=" ltr:mr-3 rtl:ml-3">
                                                        <img src="/admins/images/avatar-3.jpg"
                                                            class="w-8 h-8 rounded-full" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-gray-700 dark:text-gray-100">James Lemire
                                                        </h6>
                                                        <div class="text-gray-600 text-13">
                                                            <p class="mb-1 dark:text-gray-400">It will seem like
                                                                simplified English.</p>
                                                            <p class="mb-0"><i
                                                                    class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                                <span>1 hour ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                    <div class=" ltr:mr-3 rtl:ml-3">
                                                        <div class="w-8 h-8 text-center rounded-full bg-violet-500">
                                                            <i class="text-xl leading-relaxed text-white bx bx-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your order is
                                                            placed</h6>
                                                        <div class="text-gray-600 text-13">
                                                            <p class="mb-1 dark:text-gray-400">If several languages
                                                                coalesce the grammar</p>
                                                            <p class="mb-0"><i
                                                                    class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                                <span>3 min ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                    <div class=" ltr:mr-3 rtl:ml-3">
                                                        <div class="w-8 h-8 text-center bg-green-500 rounded-full">
                                                            <i
                                                                class="text-xl leading-relaxed text-white bx bx-badge-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your item is
                                                            shipped</h6>
                                                        <div class="text-gray-600 text-13">
                                                            <p class="mb-1 dark:text-gray-400">If several languages
                                                                coalesce the grammar</p>
                                                            <p class="mb-0"><i
                                                                    class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                                <span>3 min ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                    <div class=" ltr:mr-3 rtl:ml-3">
                                                        <img src="/admins/images/avatar-6.jpg"
                                                            class="w-8 h-8 rounded-full" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-gray-700 dark:text-gray-100">Salena
                                                            Layfield</h6>
                                                        <div class="text-gray-600 text-13">
                                                            <p class="mb-1 dark:text-gray-400">As a skeptical Cambridge
                                                                friend of mine occidental.</p>
                                                            <p class="mb-0"><i
                                                                    class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                                <span>1 hour ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="grid p-1 border-t border-gray-50 dark:border-zinc-600 justify-items-center">
                                        <a class="border-0 btn text-violet-500" href="javascript:void(0)">
                                            <i class="mr-1 mdi mdi-arrow-right-circle"></i> <span>View More..</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="relative dropdown">
                            <button type="button"
                                class="flex items-center px-3 py-2 h-[70px] border-x border-gray-50 bg-gray-50/30  dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                                id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true">
                                <img class="border-[3px] border-gray-700 dark:border-zinc-400 rounded-full w-9 h-9 ltr:xl:mr-2 rtl:xl:ml-2"
                                    src="/admins/images/avatar-1.jpg" alt="Header Avatar">
                                <span class="hidden font-medium xl:block">Shawn L.</span>
                                <i class="hidden align-bottom mdi mdi-chevron-down xl:block"></i>
                            </button>
                            <div class="absolute top-0 z-50 hidden w-40 list-none bg-white dropdown-menu dropdown-animation rounded shadow  dark:bg-zinc-800"
                                id="profile/log">
                                <div class="border border-gray-50 dark:border-zinc-600"
                                    aria-labelledby="navNotifications">
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="block px-3 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                            href="apps-contacts-profile.html">
                                            <i class="mr-1 align-middle mdi mdi-face-man text-16"></i> Profile
                                        </a>
                                    </div>
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="block px-3 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                            href="lock-screen.html">
                                            <i class="mr-1 align-middle mdi mdi-lock text-16"></i> Lock Screen
                                        </a>
                                    </div>
                                    <hr class="border-gray-50 dark:border-gray-700">
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="block p-3 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                            href="logout.html">
                                            <i class="mr-1 align-middle mdi mdi-logout text-16"></i> Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hidden">
        <div class="fixed inset-0 z-40 transition-opacity bg-black/40"></div>
        <div class="fixed right-0 z-50 h-screen bg-white w-80" data-simplebar="">
            <div class="flex items-center p-4 border-b border-gray-100">
                <h5 class="m-0 mr-2">Theme Customizer</h5>
                <a href="javascript:void(0);" class="w-6 h-6 ml-auto text-center bg-gray-700 rounded-full">
                    <i class="leading-relaxed text-white align-middle mdi mdi-close text-15"></i>
                </a>
            </div>
            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout" id="layout-vertical"
                            value="vertical">
                        <label class="align-middle" for="layout-vertical">Vertical</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal"
                            value="horizontal">
                        <label class="align-middle" for="layout-horizontal">Horizontal</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Layout Mode</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark"
                            value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Layout Width</h6>

                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild"
                            onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed"
                            value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Layout Position</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed"
                            onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable"
                            onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Topbar Color</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light"
                            onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark"
                            value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked="" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default"
                            onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact"
                            value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small"
                            value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3 sidebar-setting">Sidebar Color</h6>
                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked="" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light"
                            onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark"
                            value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand"
                            value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Direction</h6>
                <div class="space-y-1">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl"
                            value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">
                            Dashboard</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Dashboard</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 md:grid-cols-2 2xl:grid-cols-4">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">My Wallet</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
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
                                    class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">+
                                    $20.9k</span>
                                <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last
                                    week</span>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">Deposited</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                            <span class="counter-value" data-target="865.2">6258</span>
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-1">
                                <a href="" class=" rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100 underline font-bold text-green-500">Deposited History</a>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">Withdrawn</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                            $<span class="counter-value" data-target="865.2">4.32</span>M
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart3" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                              <div class="flex items-center mt-1">
                                <a href="" class=" rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100 underline font-bold text-green-500">Withdrawal History</a>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">Profit Ration</span>
                                        <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
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
                                    class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">+
                                    2.95%</span>
                                <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last
                                    week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 lg:grid-cols-12">
                    <div class="col-span-12 2xl:col-span-5">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                            <div class="card-body">
                                <div class="flex flex-wrap items-center mb-6">
                                    <h5 class="mr-2 font-medium text-gray-800 text-15 dark:text-gray-100">Wallet Balance
                                    </h5>
                                    <div class="flex gap-1 ltr:ml-auto rtl:mr-auto">
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800">ALL</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium border-transparent btn text-[12.25px] bg-violet-50/50 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white dark:bg-violet-500/20 dark:text-violet-300 dark:hover:bg-violet-500 dark:hover:text-white">1M</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800">6M</button>
                                        <button type="button"
                                            class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800">1Y</button>
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
                                                <p class="mb-2 dark:text-zinc-100">
                                                    <i
                                                        class="mr-2 text-green-500 align-middle mdi mdi-circle text-10 "></i>
                                                    Bitcoin
                                                </p>
                                                <h6 class="text-gray-800 dark:text-gray-100">0.4412 BTC =
                                                    <span class="font-normal text-gray-700 dark:text-zinc-100 text-14">$
                                                        4025.32</span>
                                                </h6>
                                            </div>
                                            <div class="pt-2 mt-6">
                                                <p class="mb-2 dark:text-zinc-100">
                                                    <i
                                                        class="mr-2 align-middle mdi mdi-circle text-10 text-violet-500 "></i>
                                                    Ethereum
                                                </p>
                                                <h6 class="text-gray-800 dark:text-gray-100">4.5701 ETH =
                                                    <span class="font-normal text-gray-700 dark:text-zinc-100 text-14">$
                                                        1123.64</span>
                                                </h6>
                                            </div>
                                            <div class="pt-2 mt-6">
                                                <p class="mb-2 dark:text-zinc-100">
                                                    <i class="mr-2 align-middle mdi mdi-circle text-10 text-sky-500"></i>
                                                    Litecoin
                                                </p>
                                                <h6 class="text-gray-800 dark:text-gray-100">35.3811 LTC =
                                                    <span class="font-normal text-gray-700 dark:text-zinc-100 text-14">$
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
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                                    <div class="card-body">
                                        <div class="flex flex-wrap items-center mb-6">
                                            <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100 ">Invested Overview
                                            </h5>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <select
                                                    class="py-0 form-select form-select-sm ltr:pl-4 rtl:pr-4 border-gray-50 bg-gray-50/20 dark:border-zinc-600 dark:text-gray-100 dark:bg-zinc-700">
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
                                                    <p class="mb-1 text-gray-700 dark:text-zinc-100">Invested Amount</p>
                                                    <h4 class="mb-2 text-gray-800 text-21 dark:text-gray-100">$ 6134.39
                                                    </h4>
                                                    <p class="mb-6 text-gray-700 dark:text-zinc-100"> + 0.0012.23 ( 0.2
                                                        % )
                                                        <i class="ml-1 text-green-500 mdi mdi-arrow-up"></i>
                                                    </p>
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-2 text-gray-600 dark:text-zinc-100 uppercase text-11 leading-[16.5px]">
                                                                    Income</p>
                                                                <h5 class="mb-2 text-gray-800 dark:text-gray-100">$
                                                                    2632.46</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-2 text-gray-600 dark:text-zinc-100 uppercase text-11 leading-[16.5px]">
                                                                    Expenses</p>
                                                                <h5 class="mb-2 text-gray-800 dark:text-gray-100">-$
                                                                    924.38</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <a href="#"
                                                            class="btn py-1.5 px-2.5 text-xs bg-violet-500 text-white shadow-md shadow-violet-100 border-transparent hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">View
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
                                    class="relative overflow-hidden border-transparent shadow card card-h-100 bg-violet-500 shadow-violet-100 dark:shadow-zinc-800">
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
                                                        class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20"><i
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
                                                        class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20">
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
                                                        class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20"><i
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
                    <div class="col-span-12 lg:col-span-8">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                            <div class="card-body">
                                <div>
                                    <div class="flex flex-wrap items-center mb-6">
                                        <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100 ">Market Overview</h5>
                                        <div class="flex gap-1 ltr:ml-auto rtl:mr-auto">
                                            <button type="button"
                                                class="px-2 py-1 border-transparent btn text-13 bg-violet-50/50 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white dark:bg-violet-500/20 dark:text-violet-200 dark:hover:bg-violet-500 dark:hover:text-white">ALL</button>
                                            <button type="button"
                                                class="px-2 py-1 text-gray-500 border-transparent btn text-13 bg-gray-50/50 hover:bg-gray-500 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">1M</button>
                                            <button type="button"
                                                class="px-2 py-1 text-gray-500 border-transparent btn text-13 bg-gray-50/50 hover:bg-gray-500 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">6M</button>
                                            <button type="button"
                                                class="px-2 py-1 text-gray-500 border-transparent btn text-13 bg-gray-50/50 hover:bg-gray-500 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">1Y</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-12 lg:col-span-8">
                                        <div id="market-overview" data-colors='["#5156be", "#34c38f"]'
                                            class="apex-charts dark:border-zinc-700"></div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="p-6 space-y-4">
                                            <div class="flex items-center">
                                                <div
                                                    class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">1</span>
                                                </div>
                                                <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                    <span
                                                        class="text-gray-700 text-16 dark:text-gray-100">Coinmarketcap</span>
                                                </div>
                                                <div class="">
                                                    <span
                                                        class="text-xs bg-green-500/40 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+2.5%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">2</span>
                                                </div>
                                                <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                    <span class="text-gray-700 text-16 dark:text-gray-100">Binance</span>
                                                </div>
                                                <div class="">
                                                    <span
                                                        class="text-xs bg-green-500/40 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+8.3%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">3</span>
                                                </div>
                                                <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                    <span class="text-gray-700 text-16 dark:text-gray-100">Coinbase</span>
                                                </div>
                                                <div class="">
                                                    <span
                                                        class="text-xs bg-red-500/40 text-red-500 py-0.5 px-2 rounded-full font-medium dark:bg-red-500/20 ">-3.6%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">4</span>
                                                </div>
                                                <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                    <span class="text-gray-700 text-16 dark:text-gray-100">Yobit</span>
                                                </div>
                                                <div class="">
                                                    <span
                                                        class="text-xs bg-green-500/40 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+7.1%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">5</span>
                                                </div>
                                                <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                    <span class="text-gray-700 text-16 dark:text-gray-100">Bitfinex</span>
                                                </div>
                                                <div class="">
                                                    <span
                                                        class="text-xs bg-red-500/40 text-red-500 py-0.5 px-2 rounded-full font-medium dark:bg-red-500/20 ">-0.9%</span>
                                                </div>
                                            </div>

                                            <div class="pt-2 mt-4">
                                                <a href=""
                                                    class="w-full font-medium text-white border-transparent shadow-md btn bg-violet-500 shadow-violet-100 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">See
                                                    All Balances <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <div class="w-full card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                            <div class="card-body">
                                <div class="flex flex-wrap items-center mb-6">
                                    <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100 ">Sales by Locations</h5>
                                    <div class="ltr:ml-auto rtl:mr-auto">
                                        <div class="dropdown">
                                            <a class="p-0 border-0 cursor-pointer btn dropdown-toggle"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="text-xs text-gray-600 dark:text-gray-100">Sort By:</span>
                                                <span class="font-medium dark:text-gray-100">World<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="sales-by-locations" class="w-full" data-colors='["#5156be"]'
                                    style="height: 250px"></div>
                                <div class="px-2 py-2">
                                    <p class="mb-1 text-gray-700 dark:text-zinc-100">USA <span
                                            class="float-right">75%</span></p>
                                    <div class="mt-2 rounded-full bg-gray-50 dark:bg-zinc-700" style="height: 6px;">
                                        <div class="bg-violet-500 progress-bar-striped h-[6px] ltr:rounded-l rtl:rounded-r overflow-hidden"
                                            role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="75">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1 dark:text-zinc-100">Russia <span class="float-right">55%</span>
                                    </p>
                                    <div class="mt-2 rounded-full bg-gray-50 dark:bg-zinc-700" style="height: 6px;">
                                        <div class="bg-violet-500 progress-bar-striped h-[6px] ltr:rounded-l rtl:rounded-r overflow-hidden"
                                            role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                            aria-valuemax="55">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1 dark:text-zinc-100">Australia <span class="float-right">85%</span>
                                    </p>
                                    <div class="mt-2 rounded-full bg-gray-50 dark:bg-zinc-700" style="height: 6px;">
                                        <div class="bg-violet-500 progress-bar-striped h-[6px] ltr:rounded-l rtl:rounded-r overflow-hidden"
                                            role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                            aria-valuemax="85">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mb-3 gap-y-0 2xl:gap-6 lg:grid-cols-2 2xl:grid-cols-3">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="nav-tabs border-b-tabs">
                            <div class="flex pb-0 border-b card-body border-gray-50 dark:border-zinc-700">
                                <h5 class="flex-grow mr-2 text-gray-800 text-15 dark:text-gray-100">Trading</h5>
                                <div class="">
                                    <ul class="flex nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium dark:text-gray-100 active"
                                                href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="buy-tab"
                                                role="tab">Buy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium dark:text-gray-100"
                                                href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="sell-tab" role="tab">Sell</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="block tab-pane" id="buy-tab" role="tabpanel">
                                        <div class="ltr:float-right rtl:float-left ms-2">
                                            <h5 class="text-sm text-gray-700 dark:text-zinc-100"><i
                                                    class="mr-1 align-middle bx bx-wallet text-violet-500 text-16"></i>
                                                <a href="#!"
                                                    class="underline text-reset underline-offset-2">$4335.23</a>
                                            </h5>
                                        </div>
                                        <h5 class="mb-6 text-sm text-gray-700 dark:text-gray-100">Buy Coins</h5>
                                        <div>
                                            <div class="mb-3 form-group">
                                                <label
                                                    class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Payment
                                                    method :</label>
                                                <select
                                                    class="w-full border-gray-100 rounded rtl:pr-3 selection:text-10 py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/50 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10">
                                                    <option>Direct Bank Payment</option>
                                                    <option>Credit / Debit Card</option>
                                                    <option>Paypal</option>
                                                    <option>Payoneer</option>
                                                    <option>Stripe</option>
                                                </select>
                                            </div>

                                            <div class="mt-4">
                                                <label class="block mb-2 font-medium dark:text-gray-100 ">Add Amount
                                                    :</label>
                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Amount</label>
                                                    <select
                                                        class="border-0 ltr:pl-1.5 rtl:pr-1.5 overflow-hidden focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10"
                                                        style="max-width: 90px;">
                                                        <option value="BT" selected="">BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text"
                                                        class=" border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10"
                                                        placeholder="0.00121255">
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Price</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100"
                                                        placeholder="$58,245">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-l rtl:border-r dark:bg-zinc-700 dark:border-zinc-600">$</label>
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Total</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100"
                                                        placeholder="$36,854.25">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button"
                                                    class="px-6 text-white bg-green-500 border-transparent shadow-md btn shadow-green-100 hover:bg-green-600 focus:bg-green-600 focus:ring focus:ring-green-50 dark:shadow-zinc-600">Buy
                                                    Coin</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hidden tab-pane" id="sell-tab" role="tabpanel">
                                        <div class="ltr:float-right rtl:float-left ltr:ml-2 rtl:mr-2">
                                            <h5 class="text-sm text-gray-700 dark:text-zinc-100"><i
                                                    class="mr-1 align-middle bx bx-wallet text-violet-500 text-16"></i>
                                                <a href="#!"
                                                    class="underline text-reset underline-offset-2">$4335.23</a>
                                            </h5>
                                        </div>
                                        <h5 class="mb-6 text-sm text-gray-700 dark:text-gray-100">Sell Coins</h5>

                                        <div>
                                            <div class="mb-3 form-group">
                                                <label
                                                    class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Wallet
                                                    ID :</label>
                                                <input type="email"
                                                    class="w-full placeholder:text-sm py-1.5 border-gray-100 rounded  dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder:text-gray-200 dark:text-gray-100 focus:ring focus:ring-violet-50/60 dark:focus:ring-gray-500/10 focus:ring-offset-0"
                                                    placeholder="1cvb254ugxvfcd280ki">
                                            </div>

                                            <div class="mt-4">
                                                <label class="block mb-2 font-medium dark:text-gray-100 ">Add Amount
                                                    :</label>
                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Amount</label>
                                                    <select
                                                        class=" border-0  ltr:pl-1.5 rtl:pr-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10"
                                                        style="max-width: 90px;">
                                                        <option value="BT" selected="">BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text"
                                                        class=" border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10"
                                                        placeholder="0.00121255">
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Price</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100"
                                                        placeholder="$58,245">
                                                    <label
                                                        class="px-3 py-2 border-gray-100 ltr:border-l rtl:border-r dark:bg-zinc-700 dark:border-zinc-600">$</label>
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                    <label
                                                        class="px-3 py-2 border-r border-gray-100 dark:bg-zinc-700 dark:border-zinc-600">Total</label>
                                                    <input type="text"
                                                        class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100"
                                                        placeholder="$36,854.25">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button"
                                                    class="px-6 text-white bg-red-500 border-transparent shadow-md btn shadow-red-100 hover:bg-red-600 focus:bg-red-600 focus:ring focus:ring-red-50 dark:shadow-zinc-600">Sell
                                                    Coin</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="nav-tabs border-b-tabs">
                            <div class="flex pb-0 border-b card-body border-gray-50 dark:border-zinc-700">
                                <h5 class="flex-grow mr-2 text-gray-800 text-15 dark:text-gray-100">Transactions</h5>
                                <div class="">
                                    <ul class="flex nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium active "
                                                href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="all-tab1" role="tab">All</a>
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
                                                    <tr>
                                                        <td class="p-3" style="width: 50px;">
                                                            <div class="text-green-500 text-22">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy LTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    1.88 LTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $94.22</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.42 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $84.32</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.018 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $145.80</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.018 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $145.80</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy LTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    1.88 LTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $94.22</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.42 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $84.32</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.018 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $145.80</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell LTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    1.88 LTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $94.22</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.42 ETH</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $84.32</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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
                                                                <h5
                                                                    class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">
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

                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div>
                            <div class="border-b border-gray-50 card-body dark:border-zinc-700">
                                <div class="flex flex-wrap items-center">
                                    <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100">Recent Activity</h5>
                                    <div class="ltr:ml-auto rtl:mr-auto">
                                        <select
                                            class="form-select form-select-md rounded py-0.5 ltr:pl-3 rtl:pr-3 border-gray-50 bg-gray-50/20 dark:border-zinc-600 dark:text-gray-100 dark:bg-zinc-700">
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
                                                    <div
                                                        class="w-10 h-10 text-center rounded-full bg-yellow-50 dark:bg-yellow-500/20 ">
                                                        <i
                                                            class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5
                                                            class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600">
                                                </div>

                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+0.5
                                                        BTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$178.53</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div
                                                        class="w-10 h-10 text-center rounded-full bg-violet-50 dark:bg-violet-500/20">
                                                        <i
                                                            class="text-2xl leading-relaxed mdi mdi-ethereum text-violet-500"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5
                                                            class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">-20.5
                                                        ETH</h6>
                                                    <div class="text-13 dark:text-zinc-100">$3541.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div
                                                        class="w-10 h-10 text-center rounded-full bg-yellow-50 dark:bg-yellow-500/20 ">
                                                        <i
                                                            class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5
                                                            class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+0.5
                                                        BTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div
                                                        class="w-10 h-10 text-center rounded-full bg-violet-50 dark:bg-violet-500/20">
                                                        <i
                                                            class="text-2xl leading-relaxed mdi mdi-litecoin text-violet-500"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5
                                                            class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">-1.5
                                                        LTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pb-7 pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div
                                                        class="w-10 h-10 text-center rounded-full bg-yellow-50 dark:bg-yellow-500/20 dark:bg-yellow-500/10 ">
                                                        <i
                                                            class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5
                                                            class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600">
                                                </div>
                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+0.5
                                                        BTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="relative flex">
                                            <div class="relative pl-14 grow">
                                                <div class="absolute top-0 z-40 left-2">
                                                    <div
                                                        class="w-10 h-10 text-center rounded-full bg-violet-50 dark:bg-violet-500/20">
                                                        <i
                                                            class="text-2xl leading-relaxed mdi mdi-litecoin text-violet-500"></i>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                        <h5
                                                            class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                            24/05/2021, 18:24:56</h5>
                                                        <p
                                                            class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">
                                                            0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="shrink-0">
                                                <div class="w-20 mr-1 shrink-0 text-end">
                                                    <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+.55
                                                        LTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$91.45</div>
                                                </div>
                                            </div>

                                            <div class="shrink-0">
                                                <div class="relative dropdown">
                                                    <a href="#!"
                                                        class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Another action</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                                href="#">Something else here</a>
                                                        </li>
                                                        <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
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
        <!-- Footer Start -->
        <footer
            class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
            <div class="grid grid-cols-2 text-gray-500 dark:text-zinc-100">
                <div class="grow">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Minia
                </div>
                <div class="hidden md:inline-block text-end">Design & Develop by <a href=""
                        class="underline text-violet-500">Themesbrand</a></div>

            </div>
        </footer>
        <!-- end Footer -->
    </div>

    <div class="fixed z-40 flex flex-col gap-3 ltr:right-5 rtl:left-5 bottom-10 animate-bounce">
        <!-- light-dark mode button -->
        <a href="javascript: void(0);" id="ltr-rtl"
            class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium"
            onclick="changeMode(event)">
            <span class="ltr:hidden">LTR</span>
            <span class="rtl:hidden">RTL</span>
        </a>
    </div>
@endsection
