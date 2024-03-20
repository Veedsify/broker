@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-admin.sidebar />
    <!-- Left Sidebar End -->


    {{-- Header start --}}
    <x-admin.header />
    {{-- Header end --}}


    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">

        <div class="min-h-screen page-content ">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow mb-2 md:mb-0">Chat
                        </h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900  ">
                                        Admin
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 ">Chat</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 lg:gap-1 mb-6 xl:grid-cols-12">

                    <div class="col-span-12 ">
                        <div class="mb-0 card  ">
                            <div class="p-4 px-6 border-b border-gray-50 ">
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <div class=" avatar-sm ltr:mr-3 rtl:ml-3 d-sm-block d-none">
                                            <img src="assets/images/avatar-2.jpg" alt=""
                                                class="w-8 h-8 rounded-full">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="text-sm"><a href="#"
                                                    class="font-medium text-gray-800 whitespace-nowrap">Jennie
                                                    Sherlock</a></h5>
                                            <p class="mb-0 text-gray-500 ">Online</p>
                                        </div>
                                    </div>
                                    <ul class="flex space-x-6">
                                        <li>
                                            <div class="relative dropdown">
                                                <button
                                                    class="p-0 text-lg text-gray-500 border-0 btn dropdown-toggle dark:text-gray-300"
                                                    type="button" data-bs-toggle="dropdown" id="dropdownMenuButton10"
                                                    data-tw-auto-close="outside">
                                                    <i class="text-xl bx bx-search-alt-2"></i>
                                                </button>
                                                <ul class="absolute z-50 hidden mt-2 ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto text-left list-none bg-white border rounded shadow-lg w-[240px] border-gray-50 dropdown-menu top-8 dark:bg-zinc-600 bg-clip-padding dark:border-gray-600/50"
                                                    aria-labelledby="dropdownMenuButton10">
                                                    <li class="px-4 py-2">
                                                        <input type="text"
                                                            class="text-base text-gray-500 border rounded border-gray-50/50 bg-gray-50/30 placeholder:text-base  dark:text-gray-300 placeholder:dark:text-gray-300 focus:ring focus:ring-violet-50/50 w-full"
                                                            placeholder="Search..">
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="relative dropdown">
                                                <button class="p-0 text-gray-400 border-0 btn dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown">
                                                    <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto   bg-clip-padding"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                            href="#">Profile</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                            href="#">Archive</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                            href="#">Muted</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                            href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="py-4 px-2 h-[570px]" data-simplebar="">
                                <li class="relative mb-6 text-center chat-day-title">
                                    <span class="relative z-40 px-8 py-1 text-gray-700 bg-white title  ">Today</span>
                                    <div class="absolute w-full border-b top-3 border-gray-50 "></div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="text-white/50">Jennie Sherlock</a>
                                            <span class="text-xs text-white/50">10:00</span>
                                        </h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">Good morning !</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding  dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex justify-end mb-5 mr-5">
                                    <div>
                                        <div class="relative dropdown">
                                            <button class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dropdown-menu bg-clip-padding  dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-gray-50 ">
                                        <h5 class="text-13 "><span class="mr-2 text-xs text-gray-500  ">10:00</span> <a
                                                href="#" class="text-gray-600  ">Shawn</a> </h5>
                                        <p class="mb-0 font-normal text-gray-700 mt-0.5 ">Good morning !
                                        </p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-gray-50 border-l-gray-50 top-0 -right-3 dark:border-t-zinc-700 dark:border-l-zinc-700"></span>
                                    </div>
                                </li>

                                <li class="flex mb-3 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:04</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">Hello!</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding  dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:00</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">What about our next meeting?</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding  dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Edit</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Add Contact</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Setting</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:00</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">Next meeting tomorrow 10.00AM</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding  dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex justify-end mb-5 mr-5">
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dropdown-menu bg-clip-padding  dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 "
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-gray-50 ">
                                        <h5 class="text-13 "><span class="mr-2 text-xs text-gray-500  ">10:00</span> <a
                                                href="#" class="text-gray-600  ">Shawn</a> </h5>
                                        <p class="mb-0 font-normal text-gray-700 mt-0.5 ">Wow that's
                                            great</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-gray-50 border-l-gray-50 top-0 -right-3 dark:border-t-zinc-700 dark:border-l-zinc-700"></span>
                                    </div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:09</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">img-1.jpg & img-2.jpg images for a
                                            New Projects</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>

                                        <ul class="flex gap-4 mt-3">
                                            <li>
                                                <a class="inline-block m-1" href="">
                                                    <img src="assets/images/img-1.jpg" alt=""
                                                        class="h-auto rounded-sm ring-4 ring-white dark:ring-zinc-600 w-36">
                                                </a>
                                            </li>

                                            <li>
                                                <a class="inline-block m-1" href="">
                                                    <img src="assets/images/img-2.jpg" alt=""
                                                        class="h-auto rounded-sm ring-4 ring-white dark:ring-zinc-600 w-36">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="relative dropdown">
                                        <button class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                            <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding  dark:border-gray-600/20 dark:shadow-none"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Profile</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Edit</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Add Contact</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Setting</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 border-t border-gray-50 ">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-10 xl:col-span-11 ltr:pr-5 rtl:pl-5">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="py-1.5 rounded border-gray-50 w-full bg-gray-50/30 placeholder:text-sm placeholder:text-gray-400 /50  focus:ring focus:ring-violet-200/10"
                                                placeholder="Enter Message...">
                                        </div>
                                    </div>
                                    <div class="col-span-2 xl:col-span-1">
                                        <button type="submit"
                                            class="w-full text-white border-transparent shadow-md btn bg-violet-500 shadow-violet-200 focus:ring focus:ring-violet-200 "><span
                                                class="mr-2 hidden sm:inline-block">Send</span> <i
                                                class="ml-2 mdi mdi-send float-end"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
