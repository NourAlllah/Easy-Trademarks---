<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
       
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">

        @yield('header')
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-md bg-body-tertiary shadow-sm p-3 mb-5 bg-white rounded">
            <div class="container">
                <a class="navbar-brand" href="https://easy-trademarks.com">
                    <img src="{{ asset('imgs/logo_site.png') }}" alt="logo easy trademarks" class="logo_site_img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://easy-trademarks.com">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://easy-trademarks.com/services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://easy-trademarks.com/about_us">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://easy-trademarks.com/resource_center">RESOURCE CENTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://easy-trademarks.com/contact_us">CONTACT US</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                LANGUAGE/CURRENCY
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="language_container">
                                            <img src="{{ asset('imgs/flag.png') }}" alt="language_flag" class="language_flag">
                                            <span>Language</span>
                                        </div>   
                                    </li>
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                </ul>
                            </li>
                        </ul>
                        <button class="btn login_btn" >Login</button>
                    </form>
                </div>
            </div>
        </nav>
        @yield('content')
        <!-- Footer -->
        <footer class="footer-section">
            <div class="container">
                <div class="footer-cta pb-3 pt-5">
                    <div class="d-md-flex footer-header pb-3 justify-content-md-between ">
                        <img src="{{ asset('imgs/logo_site.png') }}" alt="logo easy trademarks" class="logo_site_img">
                        <div class="col-xl-4 col-lg-4 col-md-6 my-3">
                            <span class="follow_us"> Follow us at</span>
                            <a class="sm_icons" href="https://www.instagram.com/easy_trademarks">
                                <img src="https://easy-trademarks.com/public//default/coworking/images/instagram.png" alt="instagram" >
                            </a>
                            <a class="sm_icons" href="https://www.facebook.com/people/Easy-trademarks/100070238353367/?view_public_for=100895718929208">
                                <img src="https://easy-trademarks.com/public//default/coworking/images/facebook.png" alt="facebook" >
                            </a>
                            <a class="sm_icons" href="https://www.linkedin.com/company/easytrademarks/">
                                <img src="https://easy-trademarks.com/public//default/coworking/images/linkedin.png" alt="linked in" >
                            </a>
                            <a class="sm_icons" href="https://twitter.com/easytrademarks">
                                <img src="https://easy-trademarks.com/public//default/coworking/images/twitter.png" alt="twitter" >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer-content pb-3 pt-4">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="footer-widget">
                               <div class="mb-5">
                                    <strong class="footer_country">USA office</strong>
                                    <P class="footer_count_info mt-2">
                                        99 Wall Street #5559 New York, NY 10005
                                    </P>
                                    <P class="footer_count_info">
                                        Tel : +1 4153583835
                                    </P>
                               </div>
                               <div >
                                    <strong class="footer_country">EGYPT office</strong>
                                    <P class="footer_count_info mt-2">
                                        TIEC, Smart-Village, Building (B5), Giza
                                    </P>
                                    <P class="footer_count_info">
                                        Tel : +1 4153583835
                                    </P>
                               </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="font-weight-normal my-3">Resource Center</h4>
                            <ul class="list-unstyled">
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/guides"> User Guide </a></li>
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/faqs"> FAQ’s </a></li>
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/our_community"> Our Community </a></li>
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/resource_center#v-pills-whats-new"> What’s New </a></li>
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/blogs"> Blog </a></li>
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/resource_center#v-pills-templates"> Templates </a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="font-weight-normal my-3">Useful Links</h4>
                            <ul class="list-unstyled">
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com"> Home </a></li>
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/services"> Services </a></li>
                                <li><a class="footer_link mb-2" href="https://easy-trademarks.com/contact_us"> Contact Us </a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="font-weight-normal my-3">Supported by:</h4>
                            <img src="https://easy-trademarks.com/public//default/coworking/images/american-express.png" alt="visamaster" class="img-fluid">
                            <img src="https://easy-trademarks.com/public//default/coworking/images/discover.png" alt="payment" class="img-fluid">
                            <img src="https://easy-trademarks.com/public//default/coworking/images/visa.png" alt="visamaster" class="img-fluid mb-2"><br>
                            <img src="https://easy-trademarks.com/public//default/coworking/images/Alipay_logo.png" alt="visamaster" class="img-fluid mb-2"><br>
                            <img src="https://easy-trademarks.com/public//default/coworking/images/wechat.png" alt="visamaster" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 ">
                            <div class="copyright-text">
                                <p>© Easy Trademarks LLC. All Rights Reserved – <a href="https://easy-trademarks.com/privacy_policy">Privacy Policy</a> - <a href="https://easy-trademarks.com/terms_of_use">Terms Of Use</a>  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
