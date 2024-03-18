@extends('layouts/home', [
    'title' => 'Blog Resources - CoinX',
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
    <!--Common hero Section Starts -->
    <section class="cmn_heros pb-120 pt-120">
        <div class="container">
            <div class="row justify-content-center mt-5 mt-md-8 mt-lg-0">
                <div class="col-xxl-6">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">
                            {{ $category == 'all' ? '' : ucwords($category) }}
                            News</h1>
                        <p class="roboto wow fadeInUp">Explore our blog and resources for valuable insights, expert
                            opinions, and
                            up-to-date information on the latest trends in the industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- Pricing Plan Section Starts Starts -->
    <section class="blog_details blog_resource pt-120 pb-120 bg9-color">
        <div class="container">
            <div class="row pb-120">
                <div
                    class="blog_resource__topcard d-flex align-items-center gap-5 gap-sm-6 gap-lg-10 rounded-20 flex-wrap flex-lg-nowrap p-3 p-sm-6 p-lg-8 wow fadeInUp">
                    <div class="blog_resource__topcard-thumb">
                        <img src="/assets/images/detailscard-top.png" class="max-un" alt="Images">
                    </div>
                    <div class="blog_details__cmncard-content">
                        <div class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                            <span class="fw-bold roboto p4-color">June 27, 2024</span>
                            <i class="ti ti-point-filled pointed2 fs-nine"></i>
                            <span class="fw-bold roboto p4-color">Marketing</span>
                        </div>
                        <a href="javascript:void(0)">
                            <h2 class="mb-5 mb-md-6 p4-color">Crypto 101: All you need to know about the crypto world
                            </h2>
                        </a>
                        <p class="mb-5 mb-sm-7 mb-md-8 p4-color">Explainability features and deep model. Specialized
                            consectetur adipiscing sed do eiusmod.Explainability features and deep model. Specialized
                            consectetur adipiscing sed do eiusmod.</p>
                        <div class="blog_details__cmncard-btn">
                            <a href="javascript:void(0)"
                                class="cmn-btn second-alt d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gy-md-6">
                <div class="col-12">
                    <div class="singletab">
                        <div
                            class="blog_resource__cmncardtitile d-flex align-items-center justify-content-between gap-5 flex-wrap mb-10 mb-md-15 wow fadeInUp">
                            <div class="blog_resource__title">
                                <h2 class="mb-4">Our recent news</h2>
                                <p class="roboto">Explainability features and deep model. Specialized consectetur <br
                                        class="d-none d-md-block">
                                    adipiscing sed do eiusmod.</p>
                            </div>
                            <ul class="tablinks blog_resource__tag d-flex align-content-center flex-wrap gap-3 gap-md-4">
                                <li class="nav-links">
                                    <button class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">All</button>
                                </li>
                                <li class="nav-links">
                                    <button class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">Finance</button>
                                </li>
                                <li class="nav-links">
                                    <button class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">Marketing</button>
                                </li>
                                <li class="nav-links">
                                    <button class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">Technology</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tabcontents">
                            <div class="tabitem active">
                                <div class="row gy-5 gy-md-6">
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard1.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">July 5, 2024 </span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard2.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">April 8, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard3.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 28, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Useful keyboard shortcuts for all popular
                                                        trading apps</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Keyboard shortcuts can be game-changers
                                                    for traders,
                                                    providing quick access to essential functions to maximize efficiency
                                                    and stay ahead</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard4.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">March 15, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Identify effective and ineffective
                                                        elements to streamline
                                                        processes efficiently.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Efficiently streamline processes by
                                                    identifying what works
                                                    and what doesn't, ensuring optimal performance and operational
                                                    effectiveness.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard5.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 6, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Top-rated secure crypto wallets of 2024,
                                                        which is the best?
                                                    </h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore the top-rated secure crypto
                                                    wallets in 2024 to find
                                                    the most trusted and reliable option for your needs.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard6.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">January 12, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">5 great crypto apps you should not be
                                                        missing out</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore these five outstanding
                                                    cryptocurrency applications
                                                    that are essential for staying updated and maximizing your crypto
                                                    experience.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="row gy-5 gy-md-6">
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard1.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">July 5, 2024 </span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard2.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">April 8, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard3.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 28, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Useful keyboard shortcuts for all popular
                                                        trading apps</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Keyboard shortcuts can be game-changers
                                                    for traders,
                                                    providing quick access to essential functions to maximize efficiency
                                                    and stay ahead</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard4.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">March 15, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Identify effective and ineffective
                                                        elements to streamline
                                                        processes efficiently.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Efficiently streamline processes by
                                                    identifying what works
                                                    and what doesn't, ensuring optimal performance and operational
                                                    effectiveness.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard5.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 6, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Top-rated secure crypto wallets of 2024,
                                                        which is the best?
                                                    </h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore the top-rated secure crypto
                                                    wallets in 2024 to find
                                                    the most trusted and reliable option for your needs.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard6.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">January 12, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">5 great crypto apps you should not be
                                                        missing out</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore these five outstanding
                                                    cryptocurrency applications
                                                    that are essential for staying updated and maximizing your crypto
                                                    experience.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="row gy-5 gy-md-6">
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard1.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">July 5, 2024 </span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard2.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">April 8, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard3.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 28, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Useful keyboard shortcuts for all popular
                                                        trading apps</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Keyboard shortcuts can be game-changers
                                                    for traders,
                                                    providing quick access to essential functions to maximize efficiency
                                                    and stay ahead</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard4.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">March 15, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Identify effective and ineffective
                                                        elements to streamline
                                                        processes efficiently.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Efficiently streamline processes by
                                                    identifying what works
                                                    and what doesn't, ensuring optimal performance and operational
                                                    effectiveness.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard5.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 6, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Top-rated secure crypto wallets of 2024,
                                                        which is the best?
                                                    </h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore the top-rated secure crypto
                                                    wallets in 2024 to find
                                                    the most trusted and reliable option for your needs.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard6.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">January 12, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">5 great crypto apps you should not be
                                                        missing out</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore these five outstanding
                                                    cryptocurrency applications
                                                    that are essential for staying updated and maximizing your crypto
                                                    experience.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="row gy-5 gy-md-6">
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard1.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">July 5, 2024 </span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard2.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">April 8, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Why customer retention is the growth
                                                        strategy.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your
                                                    phone offers convenience
                                                    and flexibility. The rise has opened up opportunities in
                                                    cryptocurrency world.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard3.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 28, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Useful keyboard shortcuts for all popular
                                                        trading apps</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Keyboard shortcuts can be game-changers
                                                    for traders,
                                                    providing quick access to essential functions to maximize efficiency
                                                    and stay ahead</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard4.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">March 15, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Finance</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Identify effective and ineffective
                                                        elements to streamline
                                                        processes efficiently.</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Efficiently streamline processes by
                                                    identifying what works
                                                    and what doesn't, ensuring optimal performance and operational
                                                    effectiveness.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard5.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">February 6, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Technology</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">Top-rated secure crypto wallets of 2024,
                                                        which is the best?
                                                    </h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore the top-rated secure crypto
                                                    wallets in 2024 to find
                                                    the most trusted and reliable option for your needs.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                                            <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                                                <img src="/assets/images/detailscard6.png" alt="Images">
                                            </div>
                                            <div class="blog_details__cmncard-content">
                                                <div
                                                    class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                                    <span class="fw-bold roboto">January 12, 2022</span>
                                                    <i class="ti ti-point-filled pointed fs-nine"></i>
                                                    <span class="fw-bold roboto">Marketing</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <h4 class="mb-5 mb-md-6">5 great crypto apps you should not be
                                                        missing out</h4>
                                                </a>
                                                <p class="mb-5 mb-sm-7 mb-md-8">Explore these five outstanding
                                                    cryptocurrency applications
                                                    that are essential for staying updated and maximizing your crypto
                                                    experience.</p>
                                                <div class="blog_details__cmncard-btn">
                                                    <a href="javascript:void(0)"
                                                        class="cmn-btn d-inline-flex px-4 px-sm-5 px-md-6 py-2 py-md-3 d-center gap-2">Read
                                                        More <i class="ti ti-arrow-narrow-right fs-four"></i></a>
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
    <!-- Pricing Plan Section Starts Ends -->
@endsection
