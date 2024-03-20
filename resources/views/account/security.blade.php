@extends('../layouts/account/accountlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-account.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-account.header />
    {{-- Header end --}}


    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">
                            Security</h4>
                    </div>
                </div>

                <div>
                    <div class=" dark:bg-zinc-800 card ">
                        <div class=" px-4 card-body pb-1 dark:border-zinc-600">
                            <div>
                                <h6 class="text-gray-400 py-2 text-15 dark:text-gray-100">
                                        Update account details
                                    </h6>
                                <ul class="py-2">
                                    <li><a href="{{ route('account.change.password') }}"
                                            class="font-semibold text-blue-600">Update Details</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=" px-4 card-body pb-1 dark:border-zinc-600">
                            <div>
                                <h6 class="text-gray-400 py-2 text-15 dark:text-gray-100 ">If you notice
                                    any suspicious activity, we recommend changing your password.</h6>
                                <ul class="py-2">
                                    <li><a href="{{ route('account.change.password') }}"
                                            class="font-semibold text-red-600">Change Password</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
