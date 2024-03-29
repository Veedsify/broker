@extends('layouts/home', [
    'title' => 'Reset Password - Cryptotraderspro',
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
                            <h5 class="modal-title fs-4 mb-5" id="exampleModalToggleLabel">Reset Your Password
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="apex_section__aside-logintop d-flex align-items-center gap-3">
                                <span>New to Cryptotraderspro?</span> <i
                                    class="ti ti-arrows-exchange-2 fs-four p1-color"></i>
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
                                    <div class="tabcontents">
                                        <div class="tabitem active">
                                            <div class="apex_section__forms">
                                                <form method="post" action="{{ route('confirm.reset', $token) }}">
                                                    @csrf
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" name="password" type="password"
                                                            placeholder="New Password">
                                                        @if ($errors->has('password'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <input class="br2 mb-3 mb-md-4" name="confirm" type="password"
                                                            placeholder="Confirm New Password">
                                                        @if ($errors->has('confirm'))
                                                            <span class="text-danger">{{ $errors->first('confirm') }}</span>
                                                        @endif
                                                    </div>

                                                    <a class="d-block text-end p1-color" href="{{route("login")}}">Back to
                                                        login</a>
                                                    <button class="cmn-btn px-6 py-3 w-100 mt-5 mt-md-6">
                                                        Reset Password
                                                    </button>
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
