@extends('layouts/home', [
    'title' => 'Terms and Conditions - Cryptotraderspro',
])

@section('content')
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>

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
            <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content px-2 px-md-6 pt-md-3 pb-2 pb-md-6">
                        <div class="modal-header border-0">
                            <h3 class="modal-title p1-color" id="exampleModalLabel">Connect Your Wallet</h3>
                            <button type="button" class="btn-close p7-color" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="ti ti-xbox-x p6-color fs-three fw-normal"></i></button>
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
                            <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">Terms & Conditions</h1>
                            <p class="roboto wow fadeInUp">Earn passive income easily with just one click!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Common hero Section Ends -->

        <!-- Terms conditions Starts -->
        <section class="terms_condition bg9-color pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="terms_condition__content p-5 p-md-10 p-lg-15 bg1-color rounded-20 br2">
                            <h3 class="mb-8 mb-md-10 wow fadeInUp">All tasks and rewards are limited and will be issued
                                based on a
                                first-come, first-served basis.</h3>
                            <p class="mb-5 mb-md-6 wow fadeInUp">Please note that all tasks and associated rewards are
                                subject to
                                availability and are limited in quantity. Rewards will be distributed on a 'first-come,
                                first-served' basis. Due to the finite nature of the rewards, completion of tasks does not
                                guarantee issuance if the quota has been reached.</p>
                            <ol class="d-flex flex-column gap-1 wow fadeInUp">
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
                            <hr class="bg2-color my-8 my-md-10">
                            <h3 class="mb-8 mb-md-10 wow fadeInUp">Users have to create and participate with a CTP Wallet
                                in order to
                                receive any rewards.</h3>
                            <p class="mb-5 mb-md-6 wow fadeInUp">Id ipsum mi tempor eget. Pretium consectetur scelerisque
                                blandit
                                habitasse non ullamcorper enim, diam quam id et, tempus massa. Sed nam vulputate
                                pellentesque quis. Varius a, nunc faucibus proin elementum id odio auctor. Nunc, suspendisse
                                consequat libero, pharetra tellus vulputate auctor venenatis tortor non rhoncus at duis.
                                Pharetra ipsum mauris integer sit feugiat.</p>
                            <ol class="d-flex flex-column gap-1 wow fadeInUp">
                                <li>
                                    Reward eligibility requires CTP Wallet creation and active participation.
                                </li>
                                <li>
                                    Participation and rewards necessitate a CTP Wallet account's creation.
                                </li>
                                <li>
                                    To receive rewards, users must engage through a CTP Wallet.
                                </li>
                                <li>
                                    CTP Wallet creation is mandatory for users to claim rewards.
                                </li>
                            </ol>
                            <hr class="bg2-color my-8 my-md-10">
                            <h3 class="mb-8 mb-md-10 wow fadeInUp">CTP reserves the right of final interpretation of all
                                terms and
                                conditions.</h3>
                            <p class="mb-5 mb-md-6 wow fadeInUp">Id ipsum mi tempor eget. Pretium consectetur scelerisque
                                blandit
                                habitasse non ullamcorper enim, diam quam id et, tempus massa. Sed nam vulputate
                                pellentesque quis. Varius a, nunc faucibus proin elementum id odio auctor. Nunc, suspendisse
                                consequat libero, pharetra tellus vulputate auctor venenatis tortor non rhoncus at duis.
                                Pharetra ipsum mauris integer sit feugiat.</p>
                            <ol class="d-flex flex-column gap-1 wow fadeInUp">
                                <li>
                                    The final interpretation of terms and conditions rests with CoinX.
                                </li>
                                <li>
                                    All terms and conditions interpretation is at the discretion of CoinX
                                </li>
                                <li>
                                    The definitive interpretation of terms belongs to Cryptotraderspro's authority.
                                </li>
                                <li>
                                    CTP has the final say in interpreting terms and conditions.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Terms conditions Ends -->
    @endsection
