@extends('layouts/home', [
    'title' => '404 Error - Cryptotraderspro',
])

@section('content')
    <!-- Not Found page section starts -->
    <section class="not_found bg5-color pt-20 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6">
                    <div class="not_found__content">
                        <div class="not_found__thumb mb-10 mb-md-15 text-center wow fadeInUp">
                            <img src="/assets/images/404.png" alt="Image">
                        </div>
                        <div class="not_found__decs text-center">
                            <h4 class="mb-5 mb-md-6 roboto wow fadeInUp">Oops, You Still Haven’t Found what you looking
                                for</h4>
                            <p class="roboto mb-6 mb-md-8 wow fadeInUp">Please note that all tasks and associated
                                rewards are subject to availability and are limited in quantity. </p>
                            <a href="{{ route('index') }}" class="cmn-btn px-5 px-md-6 py-3 wow fadeInUp">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
