@extends('../layouts/account/accountlayout')
@section('content')
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
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">
                            Profile</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Contacts
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Profile</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-9">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body ">
                                <div class="grid grid-cols-12 ">
                                    <div class="col-span-9">
                                        <div class="flex flex-wrap items-center">
                                            <div class="w-20 h-20 ltr:mr-1 rtl:ml-1">
                                                <img src="/admins/images/avatar-2.jpg" alt=""
                                                    class="rounded-full">
                                            </div>
                                            <div class="md:ml-3 mt-3 md:mt-0">
                                                <h5 class="text-gray-700 text-16 dark:text-gray-100">Phyllis Gatlin</h5>
                                                <p class="mb-4 text-gray-500 dark:text-zinc-100 text-13">Full Stack
                                                    Developer</p>

                                                <div class="flex flex-wrap items-start gap-2 text-13">
                                                    <div class="text-gray-500 dark:text-zinc-100"><i
                                                            class="text-green-500 align-middle mdi mdi-circle-medium me-1 ltr:mr-1 rtl:ml-1"></i>Development
                                                    </div>
                                                    <div class="text-gray-500 dark:text-zinc-100"><i
                                                            class="text-green-500 align-middle mdi mdi-circle-medium me-1 ltr:mr-1 rtl:ml-1"></i>phyllisgatlin@minia.com
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex flex-wrap items-center justify-end">
                                            <button type="button"
                                                class="border-transparent btn bg-gray-50/50 dark:bg-zinc-700 dark:text-gray-100"><i
                                                    class="me-1"></i> Message</button>
                                            <div class="relative ml-3 dropdown">
                                                <button class="text-gray-600 border-0 btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="align-middle text-16 bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                            href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                            href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                            href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-tabs border-b-tabs">

                                    <ul class="flex flex-wrap w-full text-sm font-medium text-center text-violet-500 nav  border-t border-gray-50 pt-5  mt-6 dark:border-zinc-600"
                                        id="pills-tab" role="tablist">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="tab-full-u-home"
                                                class="px-3 pt-5 pb-[1.4rem] font-medium active">Overview</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="tab-full-u-Profile"
                                                class="px-3 pt-5 pb-[1.4rem] font-medium ">About</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="tab-full-u-setting"
                                                class="px-3 pt-5 pb-[1.4rem] font-medium ">Post</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="border-b card-body border-gray-50 dark:border-zinc-600">
                                <h5 class="text-gray-700 text-15 dark:text-gray-100">Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="py-3">
                                        <form action="">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Firstname
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Lastname
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-5">
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Country/Phone number:
                                                    </label>
                                                    <div
                                                        class="grid grid-cols-8 outline-1 outline outline-gray-100 rounded-md">
                                                        <select name="" class="col-span-3 bg-gray-100 border-none"
                                                            id="">
                                                            <option value="NGN">+234</option>
                                                        </select>
                                                        <input type="text"
                                                            class="block w-full border-none col-span-5 px-4 py-3">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Zip Code:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Email:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Gender:
                                                    </label>
                                                    <select name="" id=""
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                        <option value="" selected disabled>(-- SELECT GENDER --)
                                                        </option>
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                        <option value="">BiSexual</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4 col-span-2">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Eth Address:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4 col-span-3">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        External Wallet Addres:
                                                    </label>
                                                    <input type="text"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4">
                                                    <button type="submit" value="Save"
                                                        class="block text-white font-semibold bg-teal-800 w-full px-4 py-3 rounded-md ">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h5 class="mb-3 text-gray-700 text-15 dark:text-gray-100">Skills</h5>
                                <div class="flex flex-wrap gap-2">
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Photoshop</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">illustrator</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">HTML</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Javascript</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Php</a>
                                    <a href="#"
                                        class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Python</a>
                                </div>
                            </div>
                        </div>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Portfolio</h5>
                                <ul class="mb-0 list-unstyled">
                                    <li class="py-2">
                                        <a href="#" class="text-gray-500 d-block dark:text-zinc-100 "><i
                                                class="mdi mdi-web text-violet-500 ltr:mr-1 rtl:ml-1"></i> Website</a>
                                    </li>
                                    <li class="py-2">
                                        <a href="#" class="text-gray-500 d-block dark:text-zinc-100"><i
                                                class="mdi mdi-note-text-outline text-violet-500 ltr:mr-1 rtl:ml-1"></i>
                                            Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Similar Profiles</h5>
                                <div class="list-group">
                                    <a href="#">
                                        <div
                                            class="flex items-center px-5 py-3 border-b border-gray-50 dark:border-zinc-600 hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="/admins/images/avatar-1.jpg" alt=""
                                                    class="w-8 h-8 p-1 border border-gray-100 rounded-full dark:border-zinc-600">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-gray-700 dark:text-gray-100 leading-[16.5px]">
                                                        James Nix</h5>
                                                    <p
                                                        class="mb-0 text-gray-500 text-13 dark:text-zinc-100 leading-[19.5px]">
                                                        Full Stack Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div
                                            class="flex items-center px-5 py-3 border-b border-gray-50 dark:border-zinc-600 hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="/admins/images/avatar-3.jpg" alt=""
                                                    class="w-8 h-8 p-1 border border-gray-100 rounded-full dark:border-zinc-600">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-gray-700 dark:text-gray-100 leading-[16.5px]">
                                                        Darlene Smith</h5>
                                                    <p
                                                        class="mb-0 text-gray-500 text-13 dark:text-zinc-100 leading-[19.5px]">
                                                        UI/UX Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="flex items-center px-5 py-3 hover:bg-gray-50/50/30">
                                            <div class="avatar-sm ltr:mr-3 rtl:ml-3">
                                                <div
                                                    class="flex items-center justify-center w-8 h-8 text-center text-gray-100 rounded-full bg-gray-50/50 text-22">
                                                    <i class="bx bxs-user-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-gray-700 dark:text-gray-100 leading-[16.5px]">
                                                        William Swift</h5>
                                                    <p
                                                        class="mb-0 text-gray-500 text-13 dark:text-zinc-100 leading-[19.5px]">
                                                        Backend Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
@endsection
