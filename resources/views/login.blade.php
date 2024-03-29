@extends('layouts/home', [
    'title' => 'Login - Cryptotraderspro',
])

@section('content')
    <!-- Scroll To Top Start-->
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
                            <h5 class="modal-title fs-5" id="exampleModalToggleLabel">Welcome to Cryptotraderspro
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="apex_section__aside-logintop d-flex align-items-center gap-3">
                                <span>New to Cryptotraderspro?</span> <i class="ti ti-arrows-exchange-2 fs-four p1-color"></i>
                                <a href="{{ route('register') }}" class="d-flex align-items-center gap-3 p1-color">Sign up
                                </a>
                            </div>
                            <div class="apex_section__aside-tabs mt-4">
                                <div class="singletab mb-5 mb-md-6">
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
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
                                                <form method="post" action="{{ route('login.user') }}">
                                                    @csrf
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" name="email" type="email"
                                                            placeholder="Email">
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" type="password" name="password"
                                                            placeholder="Password">
                                                        @if ($errors->has('password'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>

                                                     <a class="d-block " href="{{route('forgot.password')}}">Forgot
                                                        password</a>
                                                    <button class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tabitem">
                                            <div class="apex_section__forms">
                                                <form method="post" action="{{ route('login.user') }}">
                                                    @csrf
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" type="tel" name="phone"
                                                            placeholder="Phone">
                                                        @if ($errors->has('phone'))
                                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" type="password" name="password"
                                                            placeholder="Password">
                                                        @if ($errors->has('password'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                    <a class="d-block " href="{{route('forgot.password')}}">Forgot
                                                        password</a>
                                                    <button class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">Login</button>
                                                </form>
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
    </section>
@endsection
