@extends('layouts/home', [
    'title' => '403 Forbidden - Cryptotraderspro',
])

@section('content')
    <!-- Not Found page section starts -->
    <section class="not_found bg5-color pt-20 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6">
                    <div class="not_found__content">
                        <div class="not_found__thumb mb-10 mb-md-15 text-center wow fadeInUp">
                            <img src="{{ asset('custom/images/error.gif') }}" width="200" alt="Image">
                        </div>
                        <div class="mt-5 not_found__decs text-center" style="font-family:Lexend, 'sans-serif';">
                            @if (session('error'))
                                <div class="mb-5 mb-md alert alert-danger text-danger wow fadeInUp">{{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="mb-5 mb-md alert alert-success text-success wow fadeInUp">
                                    {{ session('success') }}</div>
                            @endif
                            <h1 class="mb-5 mb-md-6 wow fadeInUp">You'd need to verify your email address to
                                proceed</h1>
                            <p class="roboto mb-6 mb-md-8 wow fadeInUp">
                                Please check your inbox for a verification code from Crypto Traders Pro
                            </p>
                            <div style="padding: 50px 0;">
                                <form action="{{ route('verify.code') }}" method="post">
                                    @csrf
                                    <div class="d-flex justify-content-center flex-col align-items-center mb-5">
                                        <div class="d-flex gap-2 mb-3">
                                            @for ($i = 1; $i <= 6; $i++)
                                                <input type="text" class="box-input" name="code[]" pattern="[0-9]"
                                                    maxlength="1" required>
                                            @endfor
                                        </div>
                                    </div>
                                    <div>
                                        <button class="cmn-btn w-75 px-6 py-2 wow fadeInUp">Verify</button>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex gap-3 justify-content-center mt-5">
                                <form action="{{ route('resend_verification') }}" method="post">
                                    @csrf
                                    <button class="p1-color">Resend Verification</button>
                                </form>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="p1-color">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
