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

                <div class="grid grid-cols-1 pb-2">
                    <div class=" px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">Change
                            Password</h4>
                        <h6 class="text-gray-50 py-2 text-15 whitespace-pre-wrap ">If you notice any
                            suspicious activity, we recommend changing your password.</h6>


                    </div>
                </div>

                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body ">
                            <div>
                                <form action="">
                                    <input type="password" placeholder="Current Password"
                                        class="block w-full mb-4 rounded border border-gray-200">
                                    <input type="password" placeholder="New Password"
                                        class="block w-full mb-4 rounded border border-gray-200">

                                    <button type="submit"
                                        class="p-2 bg-red-600 border transition-colors duration-300 border-red-600 hover:bg-blue-600 text-white font-semibold rounded px-6">
                                        submit
                                    </button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
