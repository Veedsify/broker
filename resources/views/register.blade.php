@extends('layouts/home', [
    'title' => 'Create an Account - CoinX',
])

@section('content')
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->
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
                            <h5 class="modal-title fs-5">Create Account
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="apex_section__aside-logintop d-flex align-items-center gap-3 flex-wrap">
                                <span>Already have an account ?</span> <i
                                    class="ti ti-arrows-exchange-2 fs-four p1-color"></i>
                                <a href="{{ route('login') }}" class="d-flex align-items-center gap-3 p1-color">Log In
                                </a>
                            </div>
                            <div class="apex_section__aside-tabs mt-4">
                                <div class="singletab mb-5 mb-md-6">
                                    <ul class="tablinks d-flex align-items-center gap-5 gap-md-6 mb-5 mb-md-6">
                                        <li class="nav-links position-relative">
                                            <button class="tablink fw-bold">Email</button>
                                        </li>
                                    </ul>
                                    <div class="tabcontents">
                                        <div class="tabitem active">
                                            <div class="apex_section__forms">
                                                <form class="d-flex flex-column ">
                                                    <input class="br2 mb-3 mb-md-4" type="email" placeholder="Fullname">
                                                    <input class="br2 mb-3 mb-md-4" type="email" placeholder="Email">
                                                    <input class="br2 mb-3 mb-md-4" type="tel" placeholder="Phone">
                                                    <input class="br2 mb-3 mb-md-4" type="password" placeholder="Password">
                                                    <span class="mb-3 mb-md-4 text-start">Referral Code
                                                        (Optional)</span>
                                                    <input class="br2 mb-3 mb-md-4" type="text">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <input type="checkbox" id="rcode" name="vehicle1"
                                                            value="rcode">
                                                        <label class="i-aggres text-start" for="rcode">Agree to
                                                            Terms of Service and
                                                            Privacy Policy</label>
                                                    </div>
                                                    <button class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Create
                                                        Account</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <hr class="w-100 br2">
                                    <span class="w-100">or join with</span>
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
    </section>
@endsection
