@extends('../layouts/account/accountlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <!-- ========== Left Sidebar Start ========== -->
    <x-account.sidebar />

    {{-- Header start --}}
    <x-account.header />
    {{-- Header end --}}

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content 
        ">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow  mb-2 md:mb-0">
                            New Order</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm text-white ">
                                        Menu
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-50 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-50 ltr:ml-2 rtl:mr-2  ltr:md:ml-2 rtl:md:mr-2">Order</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6"></div>
                <div class="border-bgborder border text-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4">Payment Confirmation</h2>
                    <p class="text-gray-50 mb-6">
                        Your payment has been received and is being processed. You will receive an email confirmation once
                        the payment has been processed.
                    </p>

                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-50 rounded-full flex items-center justify-center mr-4">
                            <i class="text-black text-2xl fas fa-coins"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Bitcoin Address</h3>
                            <p class="text-gray-50">1AbCDeFgHiJkLmNoPqRsTuVwXyZ</p>
                        </div>
                    </div>

                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-50 rounded-full flex items-center justify-center mr-4">
                            <i class="text-black text-2xl fas fa-dollar-sign"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Amount</h3>
                            <p class="text-gray-50">${{ number_format($transaction->amount) }}</p>
                        </div>
                    </div>

                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center mr-4">
                            <i class="text-black text-2xl fas fa-calendar-check"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Payment Date</h3>
                            <p class="text-gray-50">
                                {{ $transaction->created_at->format('d M, Y') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-start mt-8">
                        <a href="{{ route('account.orders') }}"
                            class="px-4 py-2 bg-lime-800 text-white rounded-md hover:bg-lime-900">My Orders</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- CONFIRM MODAL --}}
    @endsection
