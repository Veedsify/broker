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
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow  mb-2 md:mb-0">
                            Invest in {{ ucwords($id) }}</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900">
                                        Menu
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2">Deposit</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="card nav-tabs border-b-tabs">
                        <div class="flex flex-wrap items-center gap-4 card-body">
                            <div id="tab-contents">
                                <div class="tab-pane" id="underline-icon-home">
                                    <div class="grid grid-cols-12 md:gap-4">
                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="p-2 border rounded-md border-gray-100">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600  mb-3">
                                                            {{ ucwords($id) }}</h5>
                                                        <div>
                                                            <form action="">
                                                                <select name="" id=""
                                                                    class="border border-gray-100 px-3 block w-full mb-4 rounded-md">
                                                                    <option value="">Select Currency</option>
                                                                    <option value="btc">BTC</option>
                                                                    <option value="" disabled>ETH</option>
                                                                    <option value="" disabled>BNB</option>
                                                                </select>
                                                            </form>
                                                            <button class="px-6 py-2 rounded-md text-white bg-indigo-500">
                                                                Generate Address
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="grid grid-cols-12 mt-3 overflow-hidden text-gray-500 /60 text-15 border border-gray-200 rounded-md">
                                                            <input
                                                                class="col-span-10 w-[300px] truncate flex items-center px-2 border-none bg-transparent"
                                                                readonly
                                                                value="o2839h29dn9382hd320h20hd2h830h2d0h38023d02830bd203bi20dn3208302bdn302bd30">
                                                            <div
                                                                class="col-span-2 flex items-center justify-center border-l bg-slate-100 py-2 rounded-tr-md rounded-br-md">
                                                                <button>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="icon icon-tabler icon-tabler-copy"
                                                                        width="28" height="28" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="#2c3e50" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                                                        <path
                                                                            d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <button id="openconfirmModal"
                                                                class="order-2 w-full btn border-green-500 bg-green-500  text-white focus:bg-green-500 focus:text-white focus:ring focus:ring-green-200">
                                                                Confirm Payment Received</button>
                                                        </div>
                                                        <div>
                                                            <div id="confirmModal"
                                                                class="fixed bg-black bg-opacity-20 z-30 inset-0 w-full h-full opacity-0 pointer-events-none duration-300 flex items-center justify-center">
                                                                <div class="bg-white p-7 rounded-md m-4 w-[300px]">
                                                                    <div class="">
                                                                        <div class="block">
                                                                            <h2 class="text-2xl text-gray-600 mb-10 ">
                                                                                Confirm Payment</h2>
                                                                            <div class="grid grid-cols-12 gap-4">
                                                                                <form class="col-span-12">
                                                                                    <div class="grid grid-cols-12 gap-4">
                                                                                        <div class="col-span-12">
                                                                                            <label for="proof_of_payment"
                                                                                                class="text-gray-500 cursor-pointer  inline-block mb-3 font-bold">Upload
                                                                                                Proof Of Payment
                                                                                                <input type="file"
                                                                                                    id="proof_of_payment"
                                                                                                    class="hidden border-gray-100 px-3 w-full mb-4 rounded-md">
                                                                                                <div
                                                                                                    class="border rounded-md mt-3">
                                                                                                    <img class="aspect-square object-cover"
                                                                                                        id="payment_preview"
                                                                                                        src="{{ asset('custom/images/placeholder.png') }}"
                                                                                                        alt="">
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-span-12">
                                                                                            <input type="submit"
                                                                                                value="Confirm Payment"
                                                                                                class="bg-green-500 cursor-pointer text-white py-3 font-bold px-3 block w-full mb-4 rounded-md">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Footer Start -->
                    {{-- <footer
                    class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50 
                     dark:text-gray-200">
                    <div class="grid grid-cols-2 text-gray-500 ">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Minia
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a href=""
                                class="underline text-green-500">Themesbrand</a></div>

                    </div>
                </footer> --}}
                    <!-- end Footer -->
                </div>
            </div>
        </div>
    @endsection
