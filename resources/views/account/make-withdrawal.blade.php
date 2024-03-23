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
                            Withdraw Funds</h4>


                    </div>
                </div>

                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body pb-1 ">
                            <div>
                                <h6 class="text-white text-15">In order to
                                    withdraw funds, make a withdrawal request on this withdrawal page. Withdrawal requests
                                    are processed by blockchain schedules within hours.</h6>
                                <ul class="p-6 text-white">
                                    <li class="list-disc">Account Balance: ${{auth()->user()->balance}}</li>
                                </ul>
                                <p class="text-gray-50 py-2">You can't make a withdrawal this moment, try again later</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
