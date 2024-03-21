@extends('layouts/home', [
    'title' => 'Verification Email Has Been Sent - Cryptotraderspro',
])

@section('content')
    <!-- Not Found page section starts -->
    <section class="not_found bg5-color pt-20 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6">
                    <div class="not_found__content">
                        <div class="not_found__thumb mb-10 mb-md-15 text-center wow fadeInUp">
                            <img src="{{ asset('custom/images/send.gif') }}" width="200" alt="Image">
                        </div>
                        <div class="mt-5 not_found__decs text-center" style="font-family:Lexend, 'sans-serif';">
                            <h1 class="mb-5 mb-md-6 wow fadeInUp">
                                Verification email has been sent to your email address
                            </h1>
                            <p class="roboto mb-6 mb-md-8 wow fadeInUp">
                                please login to your email and click on the verification link to verify your email address
                            </p>
                            <div class="d-flex gap-3 justify-content-center">

                                <form action="" method="post">
                                    <button class="cmn-btn px-5 px-md-6 py-3 wow fadeInUp">Resend Verification</button>
                                </form>
                                <a href="{{ route('index') }}" class="cmn-btn px-5 px-md-6 py-3 wow fadeInUp">Back to
                                    Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
