<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>@yield('title')</title>
        @isset($meta_description)
         <meta name="description" content="{{$meta_description}}" />
        @endisset
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" href="assets/css/custom-animation.css" />
        <link rel="stylesheet" href="assets/css/swiper-bundle.css" />
        <link rel="stylesheet" href="assets/css/slick.css" />
        <link rel="stylesheet" href="assets/css/flaticon.css" />
        <link rel="stylesheet" href="assets/css/meanmenu.css" />
        <link rel="stylesheet" href="assets/css/font-awesome-pro.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css" />
        <link rel="stylesheet" href="assets/css/spacing.css" />
        <link rel="stylesheet" href="assets/css/style.css?vs=<?php echo rand();?>" />
        <link rel="stylesheet" href="assets/css/style2.css?vs=<?php echo rand();?>" />
    </head>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <header class="d-none d-lg-block">
            <div id="header-sticky" class="tp-header-area-two tp-header-bg header-transparent header-transparent-two shadow-sm">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-3">
                            <div class="tp-logo text-start">
                                <a href="">NaxLex</a>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-6 col-lg-6">
                            <div class="tp-main-menu tp-menu-black tp-bs-menu tp-bp-menu text-center">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class=""><a href="">Home</a></li>
                                        <li class=""><a href="">How It Works</a></li>
                                        <li class=""><a href="">Blog</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-3">
                            <div class="tp-header-left d-flex align-items-center justify-content-end">
                                <ul class="d-none d-xxl-block">
                                    <li>
                                        <a class="#" href=""><i class="far fa-user fa-user"></i> Login</a>
                                    </li>
                                </ul>
                                <div class="tp-header-yellow-button">
                                    <a class="tp-btn-white" href="">Chat Us Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="header-sticky-mobile" class="tp-md-header-area d-md-block d-lg-none pt-30 pb-30">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-6">
                        <div class="tp-logo">
                            <a href="">Naxlex</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="tp-header-right z-index-1 d-flex align-items-center justify-content-end">
                            <a class="tp-btn-yellow d-none d-md-block" href="#">How it Works</a>
                            <button class="tp-menu-bar"><i class="fal fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-overlay"></div>

        <!-- tp-hero-area-start -->
        <main id="app">
            
            
            
            @yield('content')
            
            
            
    </main>
   <!-- footer-area-start -->

   <footer>
      <div class="tp-footer-area pt-100 p-relative black-bg p-relative">
         <div class="container">
               <div class="row mb-4">
                  <div class="col-xl-5 col-lg-5 col-md-5">
                     <div class="tp-footer-widget">
                           <div class="tp-footer-widget__logo mb-30">
                              <a href="">NaxLex</a>
                           </div>
                           <div class="tp-footer-widget__text mb-30">
                              <p>Designed to assess a student's preparedness for entering the health science fields.</p>
                           </div>
                     </div>
                  </div>
                  <div class="col-xl-1 col-lg-1 col-md-1"></div>
                  <div class="col-xl-3 col-lg-3 col-md-3">
                     <div class="tp-footer-widget">
                           <div class="tp-footer-widget__title pb-15">
                              <h3 class="footer-title">Company</h3>
                           </div>
                           <div class="tp-footer-widget__list">
                              <ul>
                                 <li><a href="#">Contact us</a></li>
                                 <li><a href="#">How it Works</a></li>
                                 <li><a href="#">Blog</a></li>
                              </ul>
                           </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3">
                     <div class="tp-footer-widget pl-20">
                           <div class="tp-footer-widget__title pb-15">
                              <h3 class="footer-title">Resources</h3>
                           </div>
                           <div class="tp-footer-widget__list">
                              <ul>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Terms of use</a></li>
                                 <li><a href="#">Help Center</a></li>
                              </ul>
                           </div>
                     </div>
                  </div>
               </div>

            <div class="row text-center">
               <div class="col-xl-12 wow tpfadeUp" data-wow-duration=".1s" data-wow-delay=".1s">
                     <p class="right-receved text-white">© <?php echo date('Y');?> Naxlex.com</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <!-- footer-area-end -->

   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
  </button>

   <!-- JS here -->
   <script src="assets/js/jquery.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/swiper-bundle.js"?vs={{rand()}}></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js?vs=<?php echo rand(); ?>"></script>
</body></html>