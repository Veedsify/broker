<header class="header-section header-menu w-100 pt-1 pt-lg-0 pb-3 pb-lg-0">
    <div class="navbar_mainhead header-fixed w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg position-relative py-md-3 py-lg-6 workready">
                        <a href="index.html" class="navbar-brand d-flex align-items-center gap-2">
                            <img src="/assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse justify-content-between" id="navbar-content">
                            <ul
                                class="navbar-nav d-flex align-items-lg-center gap-5 gap-lg-1 gap-xl-4 gap-xxl-7 py-2 py-lg-0 ms-2 ms-xl-10 ms-xxl-20 ps-0 ps-xxl-10 align-self-center">
                                <li class="dropdown">
                                    <a href="{{route('index')}}" class="fs-ten">Home</a>
                                </li>
                                <li class="dropdown show-dropdown">
                                    <button type="button" aria-label="Navbar Dropdown Button"
                                        class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Staking
                                        <i class="ti ti-chevron-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fs-ten" href="{{ route('staking') }}">Staking
                                                Pool</a>
                                        </li>
                                        <li><a class="dropdown-item fs-ten" href="{{route("staking.details", "btc")}}">Pool
                                                details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown show-dropdown">
                                    <button type="button" aria-label="Navbar Dropdown Button"
                                        class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">IDO <i
                                            class="ti ti-chevron-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fs-ten" href="{{route('ido')}}">IDO</a></li>
                                        <li><a class="dropdown-item fs-ten" href="{{route("ido.details", "btc")}}">IDO Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown show-dropdown">
                                    <button type="button" aria-label="Navbar Dropdown Button"
                                        class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Swap
                                        <i class="ti ti-chevron-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fs-ten" href="{{route('swap')}}">Swap</a></li>
                                        <li><a class="dropdown-item fs-ten" href="{{route('swap.checkout', 'eth')}}">Swap to
                                                share</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown show-dropdown">
                                    <a href="{{route('apex')}}" class="fs-ten">ApeX</a>
                                </li>
                                <li class="dropdown show-dropdown">
                                    <button type="button" aria-label="Navbar Dropdown Button"
                                        class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Buy
                                        Crypto<i class="ti ti-chevron-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fs-ten" href="{{route('buycrypto')}}">Buy Crypto</a>
                                        </li>
                                        <li><a class="dropdown-item fs-ten" href="{{route('princingplan')}}">Pricing
                                                plan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown show-dropdown">
                                    <button type="button" aria-label="Navbar Dropdown Button"
                                        class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Pages<i
                                            class="ti ti-chevron-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fs-ten" href="{{route('rewards')}}">Rewards</a></li>
                                        <li><a class="dropdown-item fs-ten" href="{{route('blog')}}">Blog</a></li>
                                        <li><a class="dropdown-item fs-ten" href="{{route('blog.details','eth')}}">Blog
                                                details</a>
                                        </li>
                                        <li><a class="dropdown-item fs-ten" href="{{route('contact')}}">Contact us</a>
                                        </li>
                                        <li><a class="dropdown-item fs-ten" href="{{route('termsCondition')}}">Terms &
                                                condition</a></li>
                                        <li><a class="dropdown-item fs-ten" href="404.html">Error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="right-area custom-pos position-relative d-flex gap-0 gap-lg-2 align-items-center">
                            <div class="single-item cart-area search-area">
                                <div class="cmn-head">
                                    <button type="button" aria-label="Shopping Button"
                                        class="common_toggles2 icon-area p-0 me-3 me-lg-0 box-second d-center position-relative">
                                        <i class="ti ti-search slide-toggle2 fs-four p6-color"></i>
                                    </button>
                                    <div class="msg_area common_area2 p2-bg p-5 rounded-2">
                                        <form class="d-flex align-items-center ">
                                            <input type="text">
                                            <button type="submit" class="p-2"><i
                                                    class="ti ti-search slide-toggle2 fs-four p2-color"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="header-section__modalstyle">
                                <!-- Button trigger modal -->
                                <button type="button"
                                    class="cmn-btn px-3 px-sm-5 px-md-6 py-2 py-sm-3 d-flex align-items-center gap-1"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span class="p7-color fw-semibold d-none d-sm-block">Connect</span>
                                    Wallet
                                </button>
                            </div>

                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            aria-label="Navbar Toggler" data-bs-target="#navbar-content" aria-expanded="true"
                            id="nav-icon3">
                            <span></span><span></span><span></span><span></span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
