@extends('layouts/home', [
    'title' => 'Contact Us - CoinX',
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
                        <a href="/cdn-cgi/l/email-protection#99fce1f8f4e9f5fcd9fef4f8f0f5b7faf6f4"
                            class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                            <i class="ti ti-mail-opened-filled fs-four"></i>
                            <span class="__cf_email__"
                                data-cfemail="ddb8a5bcb0adb1b89dbab0bcb4b1f3beb2b0">[email&#160;protected]</span></a>
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
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">CONTACT US</h1>
                        <p class="roboto wow fadeInUp"> Discover our unbeatable pricing plan, offering the perfect
                            balance of value
                            and features, tailored to meet your unique needs in Coiner Website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- Contact INFO Starts -->
    <section class="contact_info pt-120 pb-10 pb-md-18 bg5-color">
        <div class="container">
            <div class="row gy-5 gy-sm-6">
                <div class="col-xl-9">
                    <div class="contact_info__form br2 p-4 p-sm-6 p-md-8 rounded-20 mb-5 mb-md-6 wow fadeInUp">
                        <span class="fs-ten p1-color mb-4">CONTACT INFO</span>
                        <h2 class="p6-color mb-6 mb-md-8">Get Meeting With us.</h2>
                        <form>
                            <div class="contact_info__inpuarea mb-6 mb-md-8 bg1-color br2 rounded-20 p-3 p-md-5">
                                <div
                                    class="contact_info__inpuarea-group d-flex align-items-center flex-wrap flex-sm-nowrap gap-5 gap-md-6 mb-5 mb-md-6">
                                    <input class="bg4-color" type="text" placeholder="First Name">
                                    <input class="bg4-color" type="text" placeholder="Last Name">
                                </div>
                                <div
                                    class="contact_info__inpuarea-group d-flex align-items-center flex-wrap flex-sm-nowrap gap-5 gap-md-6 mb-5 mb-md-6">
                                    <input class="bg4-color" type="email" placeholder="Your Email">
                                    <input class="bg4-color" type="number" placeholder="Your phone">
                                </div>
                                <textarea rows="5" placeholder="Write something..."></textarea>
                            </div>
                            <button type="submit" class="roboto fw-bold cmn-btn px-5 px-md-6 py-3">Submit
                                Now</button>
                        </form>
                    </div>
                    <div class="contact_info__maps wow fadeInUp">
                        <iframe class="rounded-20"
                            src="/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42893.606430263266!2d23.312612050118954!3d42.6849794330592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2zVMO8cmtpeWU!5e0!3m2!1sen!2sbd!4v1702114385163!5m2!1sen!2sbd"
                            width="600" height="700" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="contact_info__partcard">
                        <div class="row gy-5 gy-md-6">
                            <div class="col-sm-6 col-lg-4 col-xl-12">
                                <div
                                    class="contact_info__card br2 px-4 px-sm-6 px-md-8 py-4 py-sm-6 py-md-10 rounded-20 text-center mb-5 mb-md-6 wow fadeInUp">
                                    <div
                                        class="contact_info__card-icon d-center bg2-color py-3 py-md-4 px-4 px-md-5 d-inline-block rounded-item mb-5 mb-md-6">
                                        <i class="ti ti-address-book fs-two fw-normal"></i>
                                    </div>
                                    <a href="javascript:void(0)">
                                        <h4 class="mb-3 mb-md-4">ADDRESS</h4>
                                    </a>
                                    <p class="roboto">Clarkson Ave, Brooklyn,NewYark 11203</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-12">
                                <div
                                    class="contact_info__card br2 px-4 px-sm-6 px-md-8 py-4 py-sm-6 py-md-10 rounded-20 text-center wow fadeInUp">
                                    <div
                                        class="contact_info__card-icon d-center bg2-color py-3 py-md-4 px-4 px-md-5 d-inline-block rounded-item mb-5 mb-md-6">
                                        <i class="ti ti-mail-filled p4-color fs-two fw-normal"></i>
                                    </div>
                                    <h4 class="mb-3 mb-md-4">Email</h4>
                                    <a href="/cdn-cgi/l/email-protection#4c3f393c3c233e380c38242921293e2d2229622229"><span
                                            class="__cf_email__"
                                            data-cfemail="2d5e585d5d425f596d59454840485f4c434a48034348">[email&#160;protected]</span></a>
                                    <a href="/cdn-cgi/l/email-protection#85f6f0f5f5eaf7f1f6f6c5f1ede0e8e0f7e4ebe0abebe0"><span
                                            class="__cf_email__"
                                            data-cfemail="8ce5e2eae3ccf8e4e9e1e9feede2ebe9a2e2e9f8">[email&#160;protected]</span></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-12">
                                <div
                                    class="contact_info__card br2 px-4 px-sm-6 px-md-8 py-4 py-sm-6 py-md-10 rounded-20 text-center wow fadeInUp">
                                    <div
                                        class="contact_info__card-icon d-center bg2-color py-3 py-md-4 px-4 px-md-5 d-inline-block rounded-item mb-5 mb-md-6">
                                        <i class="ti ti-phone p4-color fs-two fw-normal"></i>
                                    </div>
                                    <h4 class="mb-3 mb-md-4">Phone</h4>
                                    <a href="tel:+923007101235">+92(300)7101235</a>
                                    <a href="tel:+923136100313">+92(313)6100313</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-12">
                                <div
                                    class="contact_info__card br2 px-4 px-sm-6 px-md-8 py-4 py-sm-6 py-md-10 rounded-20 text-center wow fadeInUp">
                                    <div
                                        class="contact_info__card-icon d-center bg2-color py-3 py-md-4 px-4 px-md-5 d-inline-block rounded-item mb-5 mb-md-6">
                                        <i class="ti ti-social p4-color fs-two fw-normal"></i>
                                    </div>
                                    <h4 class="mb-4 mb-md-6">SOCIAL MEDIA</h4>
                                    <div
                                        class="contact_info__card-social d-flex align-items-center justify-content-center gap-2 gap-md-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact INFO Starts -->
    <!-- Ready to Exchange Starts -->
    <section class="ready_exhange pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7 col-xxl-6">
                    <div class="ready_exhange__content text-center">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">Ready to Exchange?</h2>
                        <p class="mb-8 mb-md-10 wow fadeInUp">Unlock your Coinx account now to trade crypto seamlessly,
                            without any
                            fees for buying, selling, or exchanging. Get started today!</p>
                        <div
                            class="ready_exhange__changenow d-flex align-items-center justify-content-center gap-4 gap-sm-8 gap-lg-10 wow fadeInUp">
                            <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-6">
                                Exchange Now
                            </a>
                            <div class="ready_exhange__changenow-brand">
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-google-play p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-apple p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-pinterest p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-behance p1-color fs-three"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready to Exchange Ends -->
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
