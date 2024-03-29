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
                            Affiliate Program Statistics</h4>
                    </div>
                </div>

                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body pb-1 ">
                            <div>
                                <h6 class="text-gray-50 text-15 ">Want to make money
                                    with Swift Tradings with your friends?</h6>
                                <p class="text-gray-50 py-2">Get 20% of the profit on each order of your friends or
                                    partners. Copy the link or your referral ID and send it to your friends.</p>
                            </div>
                        </div>

                        <div class="mx-auto bg-bgprimary mb-2 overflow-x-auto p-3">

                            <h6 class="text-gray-50 text-15 whitespace-nowrap mb-2 p-1 "># Affiliate
                                link</h6>
                            <div class=" border border-bgborder rounded flex ps-2 items-center justify-between">
                                <input type="text" id="navigatorInfo1" class="border-0 w-full bg-transparent text-white"
                                    readonly value="https://{{config("app.name")}}/register?referral_code={{auth()->user()->user_id}}">
                                {{-- <p  id="navigatorInfo1">Text to be copied to clipboard</p> --}}
                                <button class=" p-4 text-white bg-lime-500 " id="copyButton1">Copy </button>
                            </div>

                        </div>
                        <div class="mx-auto bg-bgprimary  overflow-x-auto p-3">

                            <h6 class="text-gray-50 text-15 whitespace-nowrap mb-2 p-1 "># Affiliate ID
                            </h6>
                            <div class=" border border-bgborder rounded flex ps-2 items-center justify-between">
                                <input type="text" id="navigatorInfo2" class="border-0 w-full bg-transparent text-white"
                                    readonly value="{{auth()->user()->user_id}}">
                                {{-- <p   id="navigatorInfo2">Text to be copied to clipboard</p> --}}
                                <button class=" p-4 text-white bg-lime-500 " id="copyButton2">Copy </button>
                            </div>


                        </div>
                    </div>
                </div>
                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body pb-1 ">
                            <div>
                                <h6 class="text-gray-50 text-15 whitespace-nowrap ">Your Order</h6>
                                <p class="text-gray-50 py-2">Your Order History displays details of cash deposits made to
                                    your account..</p>
                            </div>
                        </div>
                        <div>

                            <div class=" mx-auto bg-bgprimary  overflow-x-auto p-3  ">
                                <table class="min-w-full truncate divide-gray-200 border rounded-md">
                                    <thead class="bg-bgsecondary">
                                        <tr class="border border-bgborder">
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                Date</th>
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                Amount</th>
                                            <th scope="col"
                                                class="px-6 py-4 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-bgsecondary divide-y divide-gray-200">
                                        {{-- <tr class="text-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                                            <td class="px-6 py-4 whitespace-nowrap">25</td>
                                            <td class="px-6 py-4 whitespace-nowrap">Los Angeles</td>
                                        </tr> --}}
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
            swal({
                icon: "success",
                text: inputValue + " " + "is copied to clipboard"
            });
        }
    </script>
@endsection
