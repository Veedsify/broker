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
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">Your
                            Order History</h4>

                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm text-white   ">
                                        Orders
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-50 align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-50 ltr:ml-2 rtl:mr-2  ltr:md:ml-2 rtl:md:mr-2 ">History</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body pb-1 ">
                            <div>
                                @if (session('success'))
                                    <div class="px-4 py-2 rounded-md border border-green-500 bg-green-50 w-full">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="px-4 py-6 mb-6 rounded-md border border-red-500 bg-red-50 w-full">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <h6 class="text-gray-50
                                        text-15 whitespace-nowrap ">
                                    Your Order</h6>
                                <p class="text-gray-50 py-2">Your Order History displays details of cash deposits made to
                                    your account..</p>
                            </div>
                        </div>
                        <div>

                            <div class="
                                        mx-auto bg-bgprimary overflow-x-auto p-3 ">
                                <table class="min-w-full truncate divide-gray-200 border rounded-md">
                                    <thead class="bg-bgsecondary">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                #</th>
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                Amount</th>
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                Status</th>
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                Payment Method</th>
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                Type</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-bgprimary divide-y divide-gray-200">
                                        @foreach ($transactions as $transaction)
                                            <tr class="text-white">
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $loop->index + 1 }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    ${{ number_format($transaction->amount) }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @if ($transaction->status == 'pending')
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                            Pending
                                                        </span>
                                                    @elseif ($transaction->status == 'approved')
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Approved
                                                        </span>
                                                    @else
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                            Declined
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $transaction->payment_method }}</td>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @if ($transaction->type == 'deposit')
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Buy
                                                        </span>
                                                    @else
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                            Sell
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>



                <!-- Footer Start -->
                {{-- <footer
                    class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50   dark:text-gray-200">
                    <div class="grid grid-cols-2 text-gray-50 ">
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
