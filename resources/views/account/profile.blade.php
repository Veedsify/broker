@extends('../layouts/account/accountlayout')
@section('content')
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
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow mb-2 md:mb-0">
                            Profile</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900  ">
                                        Accounts
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 ">Profile</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 ">
                        <div class="card  ">
                            <div class="card-body ">
                                <div class="grid grid-cols-12 ">
                                    <div class="col-span-12  justify-between">
                                        <div class="md:flex  items-center">
                                            <div class="w-20 h-20 ltr:mr-1 rtl:ml-1">
                                                <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full">
                                            </div>
                                            <div>
                                                <div class="block">

                                                    <h6>{{ auth()->user()->name }}</h6>
                                                    <small class="text-gray-500">{{ ucwords(auth()->user()->tier) }}</small>
                                                </div>
                                                <div class=" flex  mt-3   gap-4">

                                                    <button class="  flex items-start   gap-2  rounded ">
                                                        Edit <i data-feather="edit" fill="#545a6d33" class="w-3"></i>
                                                    </button>
                                                    <button class="flex   gap-2  rounded ">
                                                        Remove <i data-feather="trash" fill="#545a6d33" class="w-3"></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="nav-tabs border-b-tabs">

                                    <ul class="flex flex-wrap w-full text-sm font-medium text-center text-violet-500 nav  border-t border-gray-50 pt-5  mt-6 "
                                        id="pills-tab" role="tablist">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="tab-full-u-home"
                                                class="px-3 pt-5 pb-[1.4rem] font-medium active">Profile</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card  ">
                            <div class="border-b card-body border-gray-50 ">
                                <h5 class="text-gray-700 text-15 ">Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="py-3">
                                        <form action="">
                                            <div class="grid  gap-4 mb-5">
                                                <div class="mb-4 lg:w-3/5">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Firstname
                                                    </label>
                                                    <input type="text" name="firstname"
                                                        value="{{ old('firstname') ? old('firstname') : explode(' ', auth()->user()->name)[0] }}"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                                <div class="mb-4 lg:w-3/5">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Lastname
                                                    </label>
                                                    <input type="text" name="lastname"
                                                        value="{{ old('lastname') ? old('lastname') : explode(' ', auth()->user()->name)[1] }}"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>
                                            </div>
                                            <div class="grid gap-4 mb-5">
                                                <div class="mb-4">
                                                    <label for="firstname" class="font-bold mb-2  block">
                                                        Country/Phone number:
                                                    </label>
                                                    <div
                                                        class="grid grid-cols-8 outline-1 lg:w-3/5  outline outline-gray-100 rounded-md">
                                                        <select name=""
                                                            class="col-span-2 lg:col-span-1 bg-gray-100 border-none"
                                                            id="">
                                                            <option value="" selected disabled>(-- SELECT CODE --)
                                                            </option>

                                                            @foreach ($phoneCodes as $code => $value)
                                                                <option value="{{ $value }}">
                                                                    {{ $code }} (+{{ $value }})
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="text" name="phone"
                                                            value="{{ old('phone') ? old('phone') : auth()->user()->phone }}"
                                                            class="block w-full border-none col-span-5 px-4 py-3">
                                                    </div>
                                                </div>
                                                <div class="mb-4 lg:w-3/5">
                                                    <label for="firstname" class="font-bold mb-2 inline-block">
                                                        Email:
                                                    </label>
                                                    <input type="text" disabled
                                                        value="{{ old('email') ? old('fullname') : auth()->user()->email }}"
                                                        class="block border-gray-100 w-full px-4 py-3 rounded-md ">
                                                </div>

                                                <div class="mb-4 lg:w-3/5">
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
                                                {{-- <div class="mb-4 col-span-2">
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
                                                </div> --}}
                                                <div class="mb-4 lg:w-3/5">
                                                    <button type="submit" value="Save"
                                                        class="block text-white font-semibold border bg-blue-700 w-full px-4 py-3 rounded-md ">
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
                    {{-- <div class="col-span-12 lg:col-span-3">
                        <div class="card  ">
                            <div class="card-body">
                                <h5 class="mb-3 text-gray-700 text-15 ">Skills</h5>
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
                        <div class="card  ">
                            <div class="card-body">
                                <h5 class="mb-4 text-gray-700 text-15 ">Portfolio</h5>
                                <ul class="mb-0 list-unstyled">
                                    <li class="py-2">
                                        <a href="#" class="text-gray-500 d-block  "><i
                                                class="mdi mdi-web text-violet-500 ltr:mr-1 rtl:ml-1"></i> Website</a>
                                    </li>
                                    <li class="py-2">
                                        <a href="#" class="text-gray-500 d-block "><i
                                                class="mdi mdi-note-text-outline text-violet-500 ltr:mr-1 rtl:ml-1"></i>
                                            Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card  ">
                            <div class="card-body">
                                <h5 class="mb-4 text-gray-700 text-15 ">Similar Profiles</h5>
                                <div class="list-group">
                                    <a href="#">
                                        <div
                                            class="flex items-center px-5 py-3 border-b border-gray-50  hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="/admins/images/avatar-1.jpg" alt=""
                                                    class="w-8 h-8 p-1 border border-gray-100 rounded-full ">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-gray-700 leading-[16.5px]">
                                                        James Nix</h5>
                                                    <p
                                                        class="mb-0 text-gray-500 text-13  leading-[19.5px]">
                                                        Full Stack Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div
                                            class="flex items-center px-5 py-3 border-b border-gray-50  hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="/admins/images/avatar-3.jpg" alt=""
                                                    class="w-8 h-8 p-1 border border-gray-100 rounded-full ">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5
                                                        class="mb-1 text-sm text-gray-700 leading-[16.5px]">
                                                        Darlene Smith</h5>
                                                    <p
                                                        class="mb-0 text-gray-500 text-13  leading-[19.5px]">
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
                                                        class="mb-1 text-sm text-gray-700 leading-[16.5px]">
                                                        William Swift</h5>
                                                    <p
                                                        class="mb-0 text-gray-500 text-13  leading-[19.5px]">
                                                        Backend Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
