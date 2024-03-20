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
                        <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Affiliate Program Statistics</h4>


                    </div>
                </div>

                <div >
                    <div class=" dark:bg-zinc-800 card ">
                        <div class=" px-4 card-body pb-1 dark:border-zinc-600">
                            <div >
                                <h6 class="text-gray-600 text-15 dark:text-gray-100 whitespace-pre-wrap ">Want to make money with Swift Tradings with your friends?</h6>
                        <p class="text-gray-400 py-2">Get 20% of the profit on each order of your friends or partners. Copy the link or your referral ID and send it to your friends.</p>
                            </div>
                        </div>

                        <div class="mx-auto bg-white mb-2 overflow-x-auto p-3">

                            <h6 class="text-gray-600 text-15 dark:text-gray-100 whitespace-nowrap mb-2 p-1 "># Affiliate link</h6>
                             <div class=" border border-gray-50 rounded flex ps-2 items-center justify-between">
                                <input type="text" id="navigatorInfo1" class="border-0 w-full" readonly value="https://swiftradings.com/register/emmanueliwok">
                                 {{-- <p  id="navigatorInfo1">Text to be copied to clipboard</p> --}}
                                 <button class=" p-4 text-white font-semibold bg-blue-600 " id="copyButton1" >Copy </button>
                                </div>


                            </div>
                            <div class="mx-auto bg-white  overflow-x-auto p-3">

                                <h6 class="text-gray-600 text-15 dark:text-gray-100 whitespace-nowrap mb-2 p-1 "># Affiliate ID</h6>
                                 <div class=" border border-gray-50 rounded flex ps-2 items-center justify-between">
                                    <input type="text" id="navigatorInfo2" class="border-0 w-full" readonly value="emmanueliwok">
                                     {{-- <p   id="navigatorInfo2">Text to be copied to clipboard</p> --}}
                                     <button class=" p-4 text-white font-semibold bg-blue-600 " id="copyButton2" >Copy </button>
                                    </div>


                                </div>
                            </div>
                        </div>
                <div >
                    <div class=" dark:bg-zinc-800 card ">
                        <div class=" px-4 card-body pb-1 dark:border-zinc-600">
                            <div >
                                <h6 class="text-gray-600 text-15 dark:text-gray-100 whitespace-nowrap ">Your Order</h6>
                        <p class="text-gray-400 py-2">Your Order History displays details of cash deposits made to your account..</p>
                            </div>
                        </div>
                        <div >

                                <div class=" mx-auto bg-white  overflow-x-auto p-3  ">
                                    <table class="min-w-full truncate divide-gray-200 border rounded-md">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    S/No.</th>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">S/No.</td>
                                                <td class="px-6 py-4 whitespace-nowrap">Name</td>
                                                <td class="px-6 py-4 whitespace-nowrap">Status</td>
                                                <td class="px-6 py-4 whitespace-nowrap">Status</td>
                                            </tr>

                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <script>
        document.getElementById('copyButton1').addEventListener('click', function() {
            copyInputValue('navigatorInfo1');
        });

        document.getElementById('copyButton2').addEventListener('click', function() {
            copyInputValue('navigatorInfo2');
        });

        function copyInputValue(inputId) {
            // Get the value of the specified input field
            const inputValue = document.getElementById(inputId).value;

            // Select the content of the input field
            document.getElementById(inputId).select();
            document.getElementById(inputId).setSelectionRange(0, 99999); // For mobile devices

            // Copy the selected text
            document.execCommand('copy');

            // Inform the user that the information has been copied
            alert( inputValue + " " +"is copied to clipboard");
        }
        </script>
@endsection
