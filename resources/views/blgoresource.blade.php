@extends('layouts/home', [
    'title' => 'Blog Resources - CoinX',
])

@section('content')

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <div class="navbar_top bg2-color py-4 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-xxl-5">
                    <div class="navbar_top__left d-flex align-items-center gap-2 gap-xl-6">
                        <div class="navbar_top__location d-flex align-items-center gap-1 gap-xl-3">
                            <i class="ti ti-map-pin-filled fs-four p7-color"></i>
                            <span class="roboto p7-color">102/B New Market, Sandigo-USA</span>
                        </div>
                        <span class="v-line mb-9"></span>
                        <a href="/cdn-cgi/l/email-protection#4e2b362f233e222b0e29232f2722602d2123"
                            class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                            <i class="ti ti-mail-opened-filled fs-four"></i>
                            <span class="__cf_email__"
                                data-cfemail="fc99849d918c9099bc9b919d9590d29f9391">[email&#160;protected]</span></a>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-6">
                    <div class="navbar_top__right d-flex align-items-center justify-content-end gap-2 gap-xl-6">
                        <div class="navbar_top__call d-flex align-items-center gap-3">
                            <span class="bg6-color py-2 px-3 rounded-item">
                                <i class="ti ti-phone-call fs-four p7-color "></i>
                            </span>
                            <div>
                                <span class="p7-color fw-bolder d-block">Contact Us:</span>
                                <a href="tel:+9802344567" class="d-block p7-color">+980 234 4567</a>
                            </div>
                        </div>
                        <span class="v-line mb-9"></span>
                        <div class="navbar_top__social d-flex align-items-center gap-2 gap-xl-3">
                            <span class="p7-color fw-bolder">Follow Us:</span>
                            <div class="navbar_top__social-icon d-flex align-items-center  gap-1 gap-xl-2">
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-facebook fs-four p7-color "></i>
                                </a>
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-instagram fs-four p7-color "></i>
                                </a>
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-twitter fs-four p7-color "></i>
                                </a>
                                <a href="javascript:void(0)" class="br3 py-2 px-3 rounded-item d-center">
                                    <i class="ti ti-brand-linkedin fs-four p7-color "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
      {{-- HEADER --}}
    <x-header />
    {{-- HEADER ENDS --}}
    <div class="modal_areastyle">
        <!-- Modal -->
        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content px-2 px-md-6 pt-md-3 pb-2 pb-md-6">
                    <div class="modal-header border-0">
                        <h3 class="modal-title p1-color" id="exampleModalLabel">Connect Your Wallet</h3>
                        <button type="button" class="btn-close p7-color" data-bs-dismiss="modal"
                            aria-label="Close"><i class="ti ti-xbox-x p6-color fs-three fw-normal"></i></button>
                    </div>
                    <div class="modal-body">
                        <a href="javascript:void(0)"
                            class="modal_areastyle__item rounded-3 br2 px-3 px-md-4 py-2 py-md-3 d-flex align-items-center justify-content-between mb-5 mb-md-6">
                            <span class="fw_500">Conntect with Metamask</span>
                            <img src="/assets/images/icon/dog.png" alt="Icon">
                        </a>
                        <a href="javascript:void(0)"
                            class="modal_areastyle__item rounded-3 br2 px-3 px-md-4 py-2 py-md-3 d-flex align-items-center justify-content-between">
                            <span class="fw_500">Conntect with Metamask</span>
                            <img src="/assets/images/icon/wallet-connect.png" alt="Icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section end -->
    <!--Common hero Section Starts -->
    <section class="cmn_heros pb-120 pt-120">
        <div class="container">
            <div class="row justify-content-center mt-5 mt-md-8 mt-lg-0">
                <div class="col-xxl-6">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Blog & Resources</h1>
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
                            <ul
                                class="tablinks blog_resource__tag d-flex align-content-center flex-wrap gap-3 gap-md-4">
                                <li class="nav-links">
                                    <button class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">All</button>
                                </li>
                                <li class="nav-links">
                                    <button class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">Finance</button>
                                </li>
                                <li class="nav-links">
                                    <button
                                        class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">Marketing</button>
                                </li>
                                <li class="nav-links">
                                    <button
                                        class="tablink cmn-btn third-alt py-3 px-5 px-md-6 roboto">Technology</button>
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
    <!-- Footer Section Starts -->
    <footer class="footer pt-120 bg5-color">
        <div class="container">
            <div class="row gy-8 pb-120 justify-content-between">
                <div class="col-md-12 col-lg-6 col-xxl-5">
                    <div class="footer__decs wow fadeInUp">
                        <a href="index.html">
                            <h2>Coinx Wallet</h2>
                        </a>
                        <p class="fs-ten mt-5 mt-md-6 mb-8 mb-md-10 wow fadeInUp">Welcome to Coinx, your gateway to the
                            world of Web3 trading! Our user-friendly platform empowers you to explore a wide range of
                            popular cryptocurrencies</p>
                        <div class="footer__decs-subscribe mb-9 mb-md-12 wow fadeInUp">
                            <form class="d-flex align-items-center rounded-1 py-2 pe-2">
                                <input type="email" placeholder="Enter your email">
                                <button class="cmn-btn py-3  px-8 rounded-1 d-center gap-2">Subscribe<i
                                        class="ti ti-send fs-five d-none d-md-block"></i></button>
                            </form>
                        </div>
                        <div
                            class="contact_info__card-social d-flex align-items-center justify-content-start gap-2 gap-md-3 wow fadeInUp">
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-facebook-filled p4-color fs-four fw-normal p-2"></i>
                            </a>
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-linkedin p4-color fs-four fw-normal p-2"></i>
                            </a>
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-instagram p4-color fs-four fw-normal p-2"></i>
                            </a>
                            <a href="javascript:void(0)">
                                <i class="ti ti-brand-twitter-filled p4-color fs-four fw-normal p-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xxl-2 ms-xxl-20">
                    <div class="footer__discover">
                        <h4 class="mb-6 mb-sm-8 mb-md-10 wow fadeInUp">Company</h4>
                        <div class="footer__discover-nav">
                            <ul class="d-flex flex-column gap-4 gap-md-5">
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">About Coinx Wallet</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Join Us</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Blog</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Academy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xxl-2">
                    <div class="footer__community">
                        <h4 class="mb-6 mb-sm-8 mb-md-10 wow fadeInUp">Security</h4>
                        <div class="footer__community-item">
                            <ul class="d-flex flex-column gap-4 gap-md-5">
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Contact Validator</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Protection fund</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Security</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-md-4 col-lg-3 col-xxl-2">
                    <div class="footer__community">
                        <h4 class="mb-6 mb-sm-8 mb-md-10 wow fadeInUp">Assets</h4>
                        <div class="footer__community-item">
                            <ul class="d-flex flex-column gap-4 gap-md-5">
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">BNB Chain</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">Ethereum</a>
                                </li>
                                <li class="dropdown d-flex align-items-center wow fadeInUp">
                                    <i class="ti ti-arrow-badge-right fs-ten s2-color"></i>
                                    <a href="javascript:void(0)" class="fs-ten">ERC20</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="row align-items-center justify-content-center py-3 py-sm-4 py-lg-6 bg2-color">
                <div class="col-sm-10 col-xxl-8 order-2 order-sm-1">
                    <div
                        class="footer__copyright text-center d-flex align-items-center justify-content-center justify-content-md-between flex-wrap flex-md-nowrap">
                        <div class="coyp-rightarea">
                            <span class="p4-color roboto text-center text-md-start">Copyright 2024 -
                                <a href="index.html" class="p4-color">ConiX</a>
                                All Rights Reserved <span class="p4-color fs-five mx-2">|</span> Design By
                                <a href="https://themeforest.net/user/uiaxis" class="p4-color roboto"> UIAXIS</a>
                            </span>
                        </div>


                        <div class="privacy-policay d-flex align-items-center gap-3">
                            <a href="javascript:void(0)" class="p4-color roboto ps-4 ps-sm-6">
                                Privacy Policy</a>
                            <span class="p4-color fs-five">|</span>
                            <a href="javascript:void(0)" class="p4-color roboto">
                                Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends -->
@endsection