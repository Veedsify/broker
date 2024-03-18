@extends('layouts/home', [
    'title' => 'Contact Us - CoinX',
])

@section('content')
    <!-- Scroll To Top Start-->
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->
    <!-- start preloader -->
    <div id="preloader" class="pre-item d-center">
        <div class="loaderall"></div>
    </div>
    <!-- end preloader -->

    {{-- HEADER --}}
    <x-header />
    {{-- HEADER ENDS --}}
    <!-- header-section end -->
    <section class="pt-120 pb-120 bg9-color">
        <div class="container pt-15 pt-md-20">
            <div class="row justify-content-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="modal-content bg7-color rounded-20 p-3 p-sm-4 p-md-6">
                        <div class="modal-header">
                            <h5 class="modal-title fs-5" id="exampleModalToggleLabel">Welcome to CoinX
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="apex_section__aside-logintop d-flex align-items-center gap-3">
                                <span>New to CoinX?</span> <i class="ti ti-arrows-exchange-2 fs-four p1-color"></i>
                                <a href="{{ route('register') }}" class="d-flex align-items-center gap-3 p1-color">Sign up
                                </a>
                            </div>
                            <div class="apex_section__aside-tabs mt-4">
                                <div class="singletab mb-5 mb-md-6">
                                    <ul class="tablinks d-flex align-items-center gap-5 gap-md-6 mb-5 mb-md-6">
                                        <li class="nav-links position-relative">
                                            <button class="tablink fw-bold">Email</button>
                                        </li>
                                        <li class="nav-links position-relative">
                                            <button class="tablink fw-bold">Mobile</button>
                                        </li>
                                    </ul>
                                    <div class="tabcontents">
                                        <div class="tabitem active">
                                            <div class="apex_section__forms">
                                                <form>
                                                    <input class="br2 mb-3 mb-md-4" type="email" placeholder="Email">
                                                    <input class="br2 mb-3 mb-md-4" type="password" placeholder="Password">
                                                    <a class="d-block text-end p1-color" href="javascript:void(0)">Forgot
                                                        password</a>
                                                    <button class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tabitem">
                                            <div class="apex_section__forms">
                                                <form>
                                                    <input class="br2 mb-3 mb-md-4" type="tel" placeholder="Phone">
                                                    <input class="br2 mb-3 mb-md-4" type="password" placeholder="Password">
                                                    <a class="d-block " href="javascript:void(0)">Forgot
                                                        password</a>
                                                    <button class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <hr class="w-100 br2">
                                    <span class="w-100">or log in with</span>
                                    <hr class="w-100 br2">
                                </div>
                                <div class="d-flex align-items-center gap-5 gap-md-6 mb-3">
                                    <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                        href="javascript:void(0)">
                                        <img src="/assets/images/icon/google-icon.png" alt="icons">Google</a>
                                    <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                        href="javascript:void(0)">
                                        <img src="/assets/images/icon/apple-icon.png" alt="icons">Apple</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
