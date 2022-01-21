<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GDWeb - Agence Web</title>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/socicon.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/flickity.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/fav/a  pple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/fav/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/fav/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/fav/site.webmanifest') }}">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="Cv, portfolio. Gabin DEPAIRE. Developpeur Web. Ecole Ynov Bordeaux" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        
            .border--round {
                min-height: 234px;
                object-fit: cover;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            [data-overlay]:before {
                background: linear-gradient(270deg, #5083fd, #a460d4);
                background-size: 400% 400%;

                -webkit-animation: AnimationName 10s ease infinite;
                -moz-animation: AnimationName 10s ease infinite;
                animation: AnimationName 10s ease infinite;
            }

            @-webkit-keyframes AnimationName {
                0%{background-position:0% 50%}
                50%{background-position:100% 50%}
                100%{background-position:0% 50%}
            }
            @-moz-keyframes AnimationName {
                0%{background-position:0% 50%}
                50%{background-position:100% 50%}
                100%{background-position:0% 50%}
            }
            @keyframes AnimationName {
                0%{background-position:0% 50%}
                50%{background-position:100% 50%}
                100%{background-position:0% 50%}
            }



            .col-lg-11.col-md-12.text-right.text-left-xs.text-left-sm {
                display: flex;
                justify-content: center;
                align-items: center;
                justify-items: center;
            }

            .bar__module:not(:last-child){
                margin-right: auto;
            }


            .dropdown .dropdown__content.dropdown__content--lg {
                left: auto !important;
                min-height: 324px;
            }

            .bar--transparent:not(.bar--dark):not(.pos-fixed) .menu-horizontal > li > a, .bar--transparent:not(.bar--dark):not(.pos-fixed) .menu-horizontal > li > span {
                opacity: 1;
                color: black !important;
            }

            .btn.btn--sm + .btn--sm {
                background: linear-gradient( 270deg, #5083fd, #a460d4);
                background-size: 400% 400%;
                -webkit-animation: AnimationName 10s ease infinite;
                -moz-animation: AnimationName 10s ease infinite;
                animation: AnimationName 10s ease infinite;
                border-color: white;
                outline: none;
            }

            article.imagebg .label {
                background: linear-gradient(270deg, #5083fd, #a460d4);
            }

            .col-lg-11.col-md-12.text-right.text-left-xs.text-left-sm {
                display: table-row;
            }
        </style>

        <?php
        
            $iPod    = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
            $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
            $iPad    = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
            $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
            $webOS   = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
        
        ?>
    </head>
    <body class="antialiased">
    <a id="start"></a>
    <div class="nav-container ">
        <div class="bar bar--sm visible-xs">
            <div class="container">
                <div class="row">
                    <div style="display: flex; align-items: center;" class="col-3 col-md-2">
                        <a href="{{ url('/') }}">
                            <!-- <img class="logo logo-dark" alt="logo" src="img/logo-dark.png" /> -->
                            <!-- <img class="logo logo-light" alt="logo" src="img/logo-light.png" /> -->
                            GDWeb
                        </a>
                    </div>
                    <div class="col-9 col-md-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                            <i class="icon icon--sm stack-interface stack-menu"></i>
                        </a>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </div>
        <!--end bar-->
        <nav id="menu1" class="bar bar--sm bar-1 hidden-xs bar--absolute bar--transparent">
            <div class="container">
                <div class="row">
                    <div style="" class="col-lg-1 col-md-2 hidden-xs">
                        <div id="right-module" class="bar__module">
                            <a href="index.html">
                                <!-- <img class="logo logo-dark" alt="logo" src="img/logo-dark.png" /> -->
                                <!-- <img class="logo logo-light" alt="logo" src="img/logo-light.png" /> -->
                                <!-- GDWeb -->
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                    <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">

                                <li>
                                    <a href="{{ url('/') }}">
                                        <span class="dropdown__trigger">Home</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <span class="dropdown__trigger">Pages</span>
                                    <div class="dropdown__container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 dropdown__content dropdown__content--lg">
                                                    <div class="pos-absolute col-lg-5 imagebg hidden-sm hidden-xs" data-overlay="4">
                                                        <!-- <div class="background-image-holder">
                                                            <img alt="background" src="img/dropdown-1.jpg" />
                                                        </div> -->
                                                        <div class="container pos-vertical-center pl-5">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <!-- <img alt="Logo" src="img/logo-light.png" class="image--xxs" /> -->
                                                                    <span class="h2 color--white">E-commerce ou site vitrine.</span>
                                                                    <a href="#" class="btn btn--primary type--uppercase">
                                                                        <!-- <span class="label">$18 USD.</span> -->
                                                                        <span class="btn__text">
                                                                                Demander un devis
                                                                            </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end of row-->
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-end">
                                                        <div class="col-lg-6">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <h5>A propos</h5>
                                                                    <ul class="menu-vertical">
                                                                        <li>
                                                                            <a href="{{ route('cv.experience') }}">
                                                                                Expérience Profesionnel
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ route('cv.projet') }}">
                                                                                Projet
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ route('cv.school') }}">
                                                                                Cursus Solaire
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ route('cv.contact') }}">
                                                                                Contact
                                                                            </a>
                                                                        </li>
                                                                        <!-- <li>
                                                                            <a href="home-accommodation.html">
                                                                                Tarif
                                                                            </a>
                                                                        </li> -->
                                                                        
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                            <!--end of row-->
                                                        </div>
                                                        <!--end of col-->
                                                    </div>
                                                    <!--end of row-->
                                                </div>
                                                <!--end dropdown content-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end dropdown container-->
                                </li>
                            </ul>
                        </div>
                        <!--end module-->
                        <div class="bar__module">
                            <!-- <a class="btn btn--sm type--uppercase" href="#">
                                <span class="btn__text">
                                        Tarif
                                    </span>
                            </a> -->
                            <a class="btn btn--sm btn--primary type--uppercase" href="{{ route('cv.contact') }}">
                                <span class="btn__text">
                                        Contactez-nous
                                    </span>
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </nav>
        <!--end bar-->
    </div>



        <main>
            @yield('content')
        </main>


        <footer class="text-center space--sm footer-5  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-block">
                                <!-- <ul class="list-inline list--hover">
                                    <li>
                                        <a href="#">
                                            <span>Our Company</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Locations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Work With Us</span>
                                        </a>
                                    </li>
                                </ul> -->
                            </div>
                            <!-- <div>
                                <ul class="social-list list-inline list--hover">
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-google icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-twitter icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-facebook icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-instagram icon icon--xs"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- <div>
                                <span class="type--fine-print">Made in Melbourne</span>
                                <img alt="Image" class="flag" src="img/flag-2.png" />
                            </div> -->
                            <div>
                                <span class="type--fine-print">&copy;
                                    <span class="update-year"></span> GDWeb Inc.</span>
                                <!-- <a class="type--fine-print" href="#">Privacy Policy</a>
                                <a class="type--fine-print" href="#">Legal</a> -->
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>


        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/flickity.min.js') }}"></script>
        <script src="{{ asset('js/easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/parallax.js') }}"></script>
        <script src="{{ asset('js/typed.min.js') }}"></script>
        <script src="{{ asset('js/datepicker.js') }}"></script>
        <script src="{{ asset('js/isotope.min.js') }}"></script>
        <script src="{{ asset('js/ytplayer.min.js') }}"></script>
        <script src="{{ asset('js/lightbox.min.js') }}"></script>
        <script src="{{ asset('js/granim.min.js') }}"></script>
        <script src="{{ asset('js/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('js/countdown.min.js') }}"></script>
        <script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
        <script src="{{ asset('js/spectragram.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        @yield('extra-script')

    </body>
</html>
