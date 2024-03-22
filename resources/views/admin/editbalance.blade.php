@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-admin.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-admin.header />
    {{-- Header end --}}

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content ">
            <div class="container-fluid px-[0.625rem]">
                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium mb-sm-0 grow mb-2 md:mb-0">
                            <span class="text-green-900">{{ $user->name }}</span>: Balance
                        </h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900  ">
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 ">Balance</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div>
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                </div>
                <form class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 md:grid-cols-2 2xl:grid-cols-4" method="post"
                    action="{{ route('admin.user.update', $user->id) }}">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 inline-block mb-5">Total Balance</span> $
                                        <input class="text-4xl font-semibold w-full d-block text-gray-800  mb-5"
                                            name="balance"
                                            value="{{ $user->balance }}">
                                        <div>
                                            <a href="{{ route('admin.users') }}"
                                                class="text-sm text-green-500 underline hover:text-green-700">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 inline-block mb-5">Total Deposit </span> $
                                        <input class="text-4xl font-semibold w-full d-block text-gray-800  mb-5"  name="deposit"
                                            value="{{ $user->deposit }}">
                                        <div>
                                            <a href="{{ route('admin.users') }}"
                                                class="text-sm text-green-500 underline hover:text-green-700">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 inline-block mb-5">Total Trade </span>$
                                        <input class="text-4xl font-semibold w-full d-block text-gray-800  mb-5"  name="trade"
                                            value="{{ $user->trade }}">
                                        <div>
                                            <a href="{{ route('admin.users') }}"
                                                class="text-sm text-green-500 underline hover:text-green-700">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 inline-block mb-5">Profits $</span>
                                        <input class="text-4xl font-semibold w-full d-block text-gray-800  mb-5"  name="profits"
                                            value="{{ $user->profits }}">
                                        <div>
                                            <a href="{{ route('admin.users') }}"
                                                class="text-sm text-green-500 underline hover:text-green-700">Edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="grid items-center grid-cols-12 gap-6">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 inline-block mb-5">Order's $</span>
                                        <input class="text-4xl font-semibold w-full d-block text-gray-800  mb-5"
                                            value="{{ number_format($orders) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <button
                            class="bg-green-500 text-3xl hover:bg-green-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection
