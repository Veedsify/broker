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
                        <h4 class="text-[18px] font-medium text-white mb-sm-0 grow mb-2 md:mb-0">
                            Users</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-white hover:text-gray-900  ">
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-white align-middle far fa-angle-right text-13 rtl:rotate-180 "></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-50 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 ">Table</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 text-white bg-transparent">
                    <div class="col-span-12">
                        <div class="card  ">
                            <div class="card-body border-b border-gray-100 ">
                                <h6 class="mb-1 text-white text-15 ">User Datatable</h6>
                            </div>
                            <div class="relative overflow-x-auto card-body">
                                <table id="datatable" class="table w-full pt-4 mt-6 mb-6 text-white bg-transparent">
                                    <thead>
                                        <tr>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 ">
                                                Name</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 ">
                                                Tier</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 ">
                                                Email</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 ">
                                                Phone</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 ">
                                                Balance</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 ">
                                                Order</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 ">
                                                Edit Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allOtherUsers as $user)
                                            <tr>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 text-center">
                                                    <a href="{{ route('admin.edit.user', $user->id) }}">
                                                        {{ $user->name }}
                                                    </a>
                                                </td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 text-center ">
                                                    {{ $user->tier }}</td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 text-center ">
                                                    {{ $user->email }}</td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 text-center ">
                                                    {{ $user->phone }}</td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 text-center">
                                                    ${{ $user->balance === null ? 0 : number_format($user->balance) }}</td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 text-center ">
                                                    <a class="text-blue-500 "
                                                        href="{{ route('admin.edit.user', $user->id) }}">
                                                        edit
                                                    </a>
                                                </td>
                                                <td
                                                    class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 flex justify-center">
                                                    <a href="{{ route('admin.edit.balance', $user->id) }}"
                                                        class="text-cyan-600 px-3 py-1 text-xs rounded-sm bg-cyan-100  hover:text-cyan-700">Edit
                                                        Balance</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
