@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- ========== Left Sidebar Start ========== -->
    <x-admin.sidebar />
    <!-- Left Sidebar End -->

    {{-- Header start --}}
    <x-admin.header />
    {{-- Header end --}}
    <div class="hidden">
        <div class="fixed inset-0 z-40 transition-opacity bg-black/40"></div>
        <div class="fixed right-0 z-50 h-screen bg-white w-80" data-simplebar="">
            <div class="flex items-center p-4 border-b border-gray-100">
                <h5 class="m-0 mr-2">Theme Customizer</h5>
                <a href="javascript:void(0);" class="w-6 h-6 ml-auto text-center bg-gray-700 rounded-full">
                    <i class="leading-relaxed text-white align-middle mdi mdi-close text-15"></i>
                </a>
            </div>
            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout" id="layout-vertical"
                            value="vertical">
                        <label class="align-middle" for="layout-vertical">Vertical</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                        <label class="align-middle" for="layout-horizontal">Horizontal</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Layout Mode</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-mode" id="layout-mode-light"
                            value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Layout Width</h6>

                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild"
                            onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed"
                            value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Layout Position</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed"
                            onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable"
                            onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Topbar Color</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light"
                            onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
                            onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked="" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default"
                            onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact"
                            value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small"
                            value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3 sidebar-setting">Sidebar Color</h6>
                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked="" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light"
                            onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark"
                            value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand"
                            value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                <h6 class="pt-2 mt-4 mb-3">Direction</h6>
                <div class="space-y-1">
                    <div>
                        <input class="focus:ring-0" checked="" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl"
                            value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 pb-6">
                    <div class="md:flex items-center justify-between px-[2px]">

                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Orders
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center rtl:mr-2">
                                        <i
                                            class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                        <a href="#"
                                            class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Earning</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div >
                    <div class=" dark:bg-zinc-800 card ">
                        <div class=" px-4 card-body pb-1 dark:border-zinc-600">
                            <div >
                                <h6 class="text-gray-600 text-15 dark:text-gray-100 whitespace-nowrap ">Transactions History
                                </h6>
                        <p class="text-gray-400 py-2">Transaction History shows information about cash deposits, cash withdrawals for your admin.</p>
                            </div>
                        </div>
                        <div >

                                <div class=" mx-auto bg-white  overflow-x-auto p-3  ">
                                    <table class="min-w-full truncate divide-gray-200 border rounded-md">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Details</th>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">	Type</th>
                                                <th scope="col" class="px-6 py-4 font-semibold text-left text-xs font-medium text-gray-500 uppercase tracking-wider">	Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">Date</td>
                                                <td class="px-6 py-4 whitespace-nowrap">Amount</td>
                                                <td class="px-6 py-4 whitespace-nowrap">Status</td>
                                            </tr>

                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>



                <!-- Footer Start -->
                {{-- <footer
                    class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                    <div class="grid grid-cols-2 text-gray-500 dark:text-zinc-100">
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
