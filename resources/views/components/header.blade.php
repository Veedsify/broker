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
                       <a href="/cdn-cgi/l/email-protection#1c79647d716c70795c7b717d7570327f7371"
                           class="navbar_top__email roboto p7-color d-flex align-items-center gap-3">
                           <i class="ti ti-mail-opened-filled fs-four"></i>
                           <span class="__cf_email__"
                               data-cfemail="8aeff2ebe7fae6efcaede7ebe3e6a4e9e5e7">[email&#160;protected]</span></a>
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
   <header class="header-section header-menu w-100 pt-1 pt-lg-0 pb-3 pb-lg-0">
       <div class="navbar_mainhead header-fixed w-100">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-12">
                       <nav class="navbar navbar-expand-lg position-relative py-md-3 py-lg-6 workready">
                           <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center gap-2">
                               <img src="/assets/images/logo.png" class="logo" alt="logo">
                           </a>
                           <div class="collapse navbar-collapse justify-content-between" id="navbar-content">
                               <ul
                                   class="navbar-nav d-flex align-items-lg-center gap-5 gap-lg-1 gap-xl-4 gap-xxl-7 py-2 py-lg-0 ms-2 ms-xl-10 ms-xxl-20 ps-0 ps-xxl-10 align-self-center">
                                   <li class="dropdown">
                                       <a href="{{ route('index') }}" class="fs-ten">Home</a>
                                   </li>
                                   <li class="dropdown show-dropdown">
                                       <a href="{{ route('pricingplan') }}" aria-label="Navbar Dropdown Button"
                                           class="dropdown-nav d-flex align-items-center fs-ten">Plans
                                   </li>
                                   <li class="dropdown show-dropdown">
                                       <button type="button" aria-label="Navbar Dropdown Button"
                                           class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Markets<i
                                               class="ti ti-chevron-down"></i></button>
                                       <ul class="dropdown-menu">
                                           <li><a class="dropdown-item fs-ten" href="{{ route('ido') }}">Markets</a>
                                           </li>
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('ido.details', 'btc') }}">Live Chart</a>
                                           </li>
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('ido.details', 'btc') }}">Conversion</a>
                                           </li>
                                       </ul>
                                   </li>
                                   <li class="dropdown show-dropdown">
                                       <button type="button" aria-label="Navbar Dropdown Button"
                                           class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">News<i
                                               class="ti ti-chevron-down"></i></button>
                                       <ul class="dropdown-menu">
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('blog.category', 'markets') }}">Markets</a>
                                           </li>
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('blog.category', 'world') }}">World</a>
                                           </li>
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('blog.category', 'cooperate') }}">Cooperate</a>
                                           </li>
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('blog.category', 'analysis') }}">Analysis</a>
                                           </li>
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('blog.category', 'all') }}">View All</a>
                                           </li>
                                       </ul>
                                   </li>
                                   <li class="dropdown show-dropdown">
                                       <a href="/about" aria-label="Navbar Dropdown Button"
                                           class="dropdown-nav d-flex align-items-center fs-ten">About Us
                                   </li>
                                   <li class="dropdown show-dropdown">
                                       <button type="button" aria-label="Navbar Dropdown Button"
                                           class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">More<i
                                               class="ti ti-chevron-down"></i></button>
                                       <ul class="dropdown-menu">
                                           <li><a class="dropdown-item fs-ten" href="{{ route('ido') }}">Support</a>
                                           </li>
                                           <li><a class="dropdown-item fs-ten"
                                                   href="{{ route('ido.details', 'btc') }}">Contact</a>
                                           </li>
                                   </li>
                               </ul>
                               </li>
                               </ul>
                           </div>

                           <div
                               class="right-area custom-pos position-relative d-flex gap-0 gap-lg-2 align-items-center">
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
                                   <a href="{{ route('register') }}"
                                       class="cmn-btn px-3 px-sm-5 px-md-6 py-2 py-sm-3 d-flex align-items-center gap-1">
                                       <span class="p7-color fw-semibold d-none d-sm-block">Join </span>
                                       Now
                                   </a>
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
