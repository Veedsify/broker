﻿@extends('../layouts/account/accountlayout')
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
                            Get Started with {{ ucwords($id) }}</h4>
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
                                        <div class="col-span-12 md:col-span-6 xl:col-span-6">
                                            <div class="border rounded-md border-gray-100">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 mb-3 w-[300px]">
                                                            {{ ucwords($id) }}</h5>
                                                        <div>
                                                            <form action="" data-start="{{ $min }}"
                                                                data-end="{{ $max }}">
                                                                <label for="amount"
                                                                    class="mb-2 text-gray-400 inline-block">
                                                                    Amount
                                                                </label>
                                                                <input name="amount"
                                                                    placeholder="${{ $min }} to {{ $max > 999999 ? 'Unlimited' : "$" . $max }}"
                                                                    class="border border-gray-100 px-3 block w-full mb-4 rounded-md">
                                                                <select name="" id=""
                                                                    class="border border-gray-100 px-3 block w-full mb-4 rounded-md">
                                                                    <option value="" disabled selected>(-- Select
                                                                        Crypto --)</option>
                                                                    <option value="btc">BTC</option>
                                                                    <option value="" disabled>ETH</option>
                                                                    <option value="" disabled>BNB</option>
                                                                </select>
                                                            </form>
                                                            <button id="generate_address"
                                                                class="px-6 py-2 rounded-md text-white bg-indigo-500 w-full">
                                                                Generate Address
                                                            </button>
                                                        </div>
                                                        <div id="loader_address">

                                                        </div>
                                                        {{-- ADD COPY BTC ADDRESS --}}
                                                        <div class="hidden">
                                                            <x-account.address />
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

    {{-- CONFIRM MODAL --}}
    <x-account.confirm />
@endsection
