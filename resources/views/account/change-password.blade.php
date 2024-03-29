@extends('../layouts/account/accountlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-account.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-account.header />
    {{-- Header end --}}

    \
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content ">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-2">
                    <div class=" px-[2px]">
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">Change
                            Password</h4>
                        <h6 class="text-gray-50 py-2 text-15">If you notice any
                            suspicious activity, we recommend changing your password.</h6>

                        <div>
                            @if ($errors->any())
                                <div class="bg-red-500 bg-opacity-10 text-red-500 px-3 py-4">
                                    <ul class="list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="bg-lime-500 bg-opacity-10 text-lime-500 px-3 py-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="bg-red-500 bg-opacity-10 text-red-500 px-3 py-4">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="  card ">
                        <div class=" px-4 card-body ">
                            <div>
                                <form action="{{ route('update.password') }}" method="post">
                                    @csrf
                                    <input type="password" placeholder="Current Password" name="old_password"
                                        class="block w-full mb-4 rounded border border-bgborder bg-bgprimary text-white">
                                    <input type="password" placeholder="New Password" name="password"
                                        class="block w-full mb-4 rounded border border-bgborder bg-bgprimary text-white">

                                    <button type="submit"
                                        class="p-2 bg-lime-700 border transition-colors duration-300 hover:bg-blue-600 text-white font-semibold rounded px-6">
                                        Save
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
