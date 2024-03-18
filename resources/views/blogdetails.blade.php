@extends('layouts/home', [
    'title' => 'Blog Details - CoinX',
])

@section('content')
<body>
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->

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
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Blog Details</h1>
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
    <section class="blog_details pt-120 pb-120 bg9-color">
        <div class="container">
            <div class="row gy-6 align-items-end justify-content-between mb-6">
                <div class="col-xl-6">
                    <div class="blog_details__title">
                        <h2 class="text_grdt wow fadeInUp">Why customer retention is the growth strategy.</h2>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div
                        class="blog_details__btn d-flex align-items-center justify-content-end gap-5 gap-md-6 wow fadeInUp">
                        <a href="javascript:void(0)" class="p1-color py-2 px-4 br2 bg1-color">Marketing</a>
                        <span>April 8, 2024</span>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="blog_details__chart br2 rounded-20 p-3 p-sm-7 p-md-10 wow fadeInUp mt-5 mt-md-7 mt-lg-9">
                        <div
                            class="blog_details__chart-title d-flex align-items-center justify-content-between gap-3 flex-wrap mb-6 mb-sm-8 mb-md-10">
                            <h2>Analytics</h2>
                            <div class="d-flex align-items-center flex-wrap gap-3 gap-sm-5 gap-md-6">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="ti ti-point-filled fs-two p1-color"></i>
                                    <span class="fs-four">Income</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="ti ti-point-filled fs-two p1-color"></i>
                                    <span class="fs-four">Outcome</span>
                                </div>
                                <a href="javascript:void(0)" class="cmn-btn py-2 px-4 rounded-1">2024</a>
                            </div>
                        </div>
                        <div class="blog_details__chart-thumb">
                            <img src="/assets/images/blogdetailschart.png" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="terms_condition__content mt-5 mt-sm-7 mt-lg-9">
                        <h3 class="mb-5 mb-md-6 wow fadeInUp">Introduction</h3>
                        <p class="mb-5 mb-md-6 wow fadeInUp">Customer retention is a vital growth strategy that focuses
                            on retaining existing customers and maximizing their value over time. While acquiring new
                            customers is important, businesses should not overlook the power of customer retention in
                            driving sustainable growth. In this blog post, we will explore why customer retention should
                            be a top priority for businesses and how it can contribute to their overall growth and
                            success.</p>
                        <hr class="bg2-color mb-7 mb-sm-10 mb-lg-15">

                        <h3 class="mb-5 mb-md-6 wow fadeInUp">The Value of Existing Customers</h3>
                        <p class="mb-5 mb-md-6 wow fadeInUp">Retaining existing customers is highly valuable for
                            businesses. These customers have already experienced the value and quality of your products
                            or services, and if satisfied, they are more likely to make repeat purchases. Not only do
                            repeat customers contribute to increased revenue, but they also have higher average
                            transaction values, boosting profitability.</p>
                        <ol class="d-flex flex-column gap-1 mb-5 mb-md-6 wow fadeInUp">
                            <li>
                                Tasks and rewards limited; issued first-come, first-served.
                            </li>
                            <li>
                                Limited tasks, rewards; given on first-come, first-served basis.
                            </li>
                            <li>
                                Availability limited; rewards issued in order of receipt.
                            </li>
                            <li>
                                Tasks limited, rewards given on first-come basis.
                            </li>
                        </ol>
                        <hr class="bg2-color mb-7 mb-sm-10 mb-lg-15">
                        <h3 class="mb-5 mb-md-6 wow fadeInUp">Cost-Effective Strategy</h3>
                        <p class="mb-5 mb-md-6 wow fadeInUp">Customer retention is a cost-effective approach to growth.
                            Acquiring new customers typically involves extensive marketing and advertising efforts,
                            which can be costly. In contrast, retaining existing customers requires less investment as
                            you already have a relationship established with them. By focusing on delivering exceptional
                            experiences, personalized services, and excellent customer support, businesses can increase
                            customer loyalty and reduce the need for constant acquisition campaigns.</p>
                        <hr class="bg2-color mb-7 mb-sm-10 mb-lg-15">
                        <h3 class="mb-5 mb-md-6 wow fadeInUp">Building Loyalty and Advocacy</h3>
                        <p class="mb-5 mb-md-6 wow fadeInUp">Loyal customers are more than just revenue generators;
                            they become brand advocates. Satisfied customers are more likely to recommend your business
                            to others, whether through word-of-mouth, online reviews, or social media. These
                            recommendations carry significant weight and can bring in new customers without the need for
                            additional marketing efforts. By prioritizing customer retention, businesses can foster
                            loyalty, strengthen their reputation, and expand their customer base through positive
                            referrals.</p>
                        <ol class="d-flex flex-column gap-1 mb-5 mb-md-6 wow fadeInUp">
                            <li>
                                The final interpretation of terms and conditions rests with CoinX.
                            </li>
                            <li>
                                All terms and conditions interpretation is at the discretion of CoinX
                            </li>
                            <li>
                                The definitive interpretation of terms belongs to CoinX's authority.
                            </li>
                            <li>
                                CoinX has the final say in interpreting terms and conditions.
                            </li>
                        </ol>
                        <hr class="bg2-color mb-7 mb-sm-10 mb-lg-15">
                        <h3 class="mb-5 mb-md-6 wow fadeInUp">Conclusion</h3>
                        <p class="mb-5 mb-md-6 wow fadeInUp">Customer retention is a growth strategy that should not be
                            underestimated. By recognizing the value of existing customers, implementing cost-effective
                            retention strategies, and leveraging customer loyalty for advocacy, businesses can achieve
                            sustainable growth and long-term success. Prioritizing customer retention alongside customer
                            acquisition ensures a balanced approach to business growth and sets the foundation for
                            building strong customer relationships. In the competitive marketplace, customer retention
                            becomes a key driver of growth and profitability, making it an indispensable strategy for
                            businesses of all sizes.</p>
                        <hr class="bg2-color mb-7 mb-sm-10 mb-lg-15">

                    </div>
                    <div class="blog_details__quet rounded-20 br2 bg1-color mb-4 mb-md-6 mb-xl-9">
                        <p
                            class="fs-four py-3 py-sm-8 py-md-10 py-lg-15 py-xl-20 px-3 px-sm-10 px-lg-20 text-center wow fadeInUp">
                            "Web3 protocols propel us towards a borderless, inclusive digital world, where users have
                            control over their data and assets."</p>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="blog_details__card py-3 py-sm-6 py-lg-10 py-xl-15 px-3 px-sm-8 py-lx-15 px-xl-20 rounded-20 d-center justify-content-md-start flex-wrap flex-md-nowrap gap-4 gap-sm-5 gap-md-8 gap-xl-10 wow fadeInUp">
                        <div class="blog_details__card-thumb">
                            <img src="/assets/images/details-image-nayem.png" class="max-un" alt="Images">
                        </div>
                        <div class="blog_details__card-content">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-sm-between gap-3 flex-wrap mb-5 mb-md-6">
                                <h2>Ryan Marshall</h2>
                                <div class="blog_details__card-social d-flex align-items-center gap-2 gap-md-3">
                                    <a href="javascript:void(0)" class="px-2 px-md-3 py-1 py-md-2  d-center">
                                        <i class="ti ti-brand-facebook-filled fs-four"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="px-2 px-md-3 py-1 py-md-2  d-center">
                                        <i class="ti ti-brand-instagram fs-four"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="px-2 px-md-3 py-1 py-md-2  d-center">
                                        <i class="ti ti-brand-twitter-filled fs-four"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="roboto text-center text-md-start">Id ipsum mi tempor eget. Pretium consectetur
                                scelerisque blandit habitasse non ullamcorper enim, diam quam id et, tempus massa. Sed
                                nam vulputate pellentesque quis. Varius a, nunc faucibus proin</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gy-md-6">
                <div class="col-12 mt-10 mt-md-15">
                    <div
                        class="blog_details__cmncardtitile d-flex align-items-center justify-content-between gap-3 flex-wrap mb-5 mb-md-9 wow fadeInUp">
                        <h2>Our recent news</h2>
                        <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 roboto">View More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="blog_details__cmncard p-3 p-sm-6 p-md-8 rounded-20 br2 bg1-color position-relative wow fadeInUp">
                        <div class="blog_details__cmncard-thumb mb-5 mb-sm-7 mb-md-8 rounded-4">
                            <img src="/assets/images/detailscard1.png" alt="Images">
                        </div>
                        <div class="blog_details__cmncard-content">
                            <div
                                class="blog_details__cmncard-head d-flex align-items-center gap-2 mb-5 mb-sm-7 mb-md-8">
                                <span class="fw-bold roboto">June 27, 2024</span>
                                <i class="ti ti-point-filled pointed fs-nine"></i>
                                <span class="fw-bold roboto">June 27, 2024</span>
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="mb-5 mb-md-6">Why customer retention is the growth strategy.</h4>
                            </a>
                            <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your phone offers convenience
                                and flexibility. The rise has opened up opportunities in cryptocurrency world.</p>
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
                                <span class="fw-bold roboto">June 27, 2024</span>
                                <i class="ti ti-point-filled pointed fs-nine"></i>
                                <span class="fw-bold roboto">June 27, 2024</span>
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="mb-5 mb-md-6">Why customer retention is the growth strategy.</h4>
                            </a>
                            <p class="mb-5 mb-sm-7 mb-md-8">Trading cryptocurrencies from your phone offers convenience
                                and flexibility. The rise has opened up opportunities in cryptocurrency world.</p>
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
    </section>
    <!-- Pricing Plan Section Starts Ends -->

    @endsection