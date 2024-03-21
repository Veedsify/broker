@extends('layouts/home', [
    'title' => 'Create an Account - Cryptotraderspro',
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
                                    {{-- <ul class="tablinks d-flex align-items-center gap-5 gap-md-6 mb-5 mb-md-6">
                                        <li class="nav-links position-relative">
                                            <button class="tablink fw-bold">Email</button>
                                        </li>
                                    </ul> --}}
                                    <div class="tabcontents">
                                        <div class="tabitem active">
                                            <div class="apex_section__forms">
                                                @if (session('error'))
                                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                                @endif
                                                @if (session('success'))
                                                    <div class="alert alert-success">{{ session('success') }}</div>
                                                @endif
                                                <form action="{{ route('register.new') }}" method="post"
                                                    class="d-flex flex-column ">
                                                    @csrf
                                                    @method('PUT')
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" name="name" type="text"
                                                            placeholder="Fullname" required>
                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" name="email" type="email"
                                                            placeholder="Email" required>
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" name="phone" type="tel"
                                                            placeholder="Phone" required>
                                                        @if ($errors->has('phone'))
                                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" name="password" type="password"
                                                            placeholder="Password" required>
                                                        @if ($errors->has('password'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                            </div>
                                            <span class="mb-3 mb-md-4 text-start">Referral Code
                                                (Optional)</span>
                                            <input class="br2 mb-3 mb-md-4" type="text">
                                            <div class="d-flex align-items-center gap-3">
                                                <input type="checkbox" required id="rcode" name="vehicle1"
                                                    name="referral_code" value="rcode">
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
                            {{-- <div class="d-flex align-items-center mb-3 mb-md-4">
                                <hr class="w-100 br2">
                                <span class="w-100">or join with</span>
                                <hr class="w-100 br2">
                            </div> --}}
                            {{-- <div class="d-flex align-items-center gap-5 gap-md-6 mb-3">
                                <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                    href="javascript:void(0)">
                                    <img src="/assets/images/icon/google-icon.png" alt="icons">Google</a>
                                <a class="cmn-btn w-100 py-3 px-5 px-md-6 d-center gap-2 fourth-alt"
                                    href="javascript:void(0)">
                                    <img src="/assets/images/icon/apple-icon.png" alt="icons">Apple</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
