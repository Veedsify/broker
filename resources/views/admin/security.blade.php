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
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow mb-2 md:mb-0">Change
                            Password</h4>


                    </div>
                </div>

                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body pb-1 ">
                            <div>
                                <h6 class="text-gray-400 py-2 text-15">If you notice
                                    any suspicious activity, we recommend changing your password.</h6>
                                <ul class="py-2">
                                    <li><a href="{{ route('admin.security.password') }}"
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
