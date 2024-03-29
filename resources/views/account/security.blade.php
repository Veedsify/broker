@extends('../layouts/account/accountlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-account.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-account.header />
    {{-- Header end --}}


    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content ">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">
                            Security</h4>
                    </div>
                </div>

                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body pb-1 ">
                            <div>
                                <h6 class="text-gray-50 py-2 text-15 ">
                                    Update account details
                                </h6>
                                <ul class="py-2">
                                    <li><a href="{{ route('account.profile') }}"
                                            class="font-semibold text-green-500">Update Details</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=" px-4 card-body pb-1 ">
                            <div>
                                <h6 class="text-gray-50 py-2 text-15 ">If you notice
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
