@extends('layouts.app')

@section('content')
    <?php
        
        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
        $webOS   = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
    
    ?>
        
    <section class="space--sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="masonry masonry-blog-magazine">
                        <!-- <div class="masonry-filter-container d-flex align-items-center">
                            <span>Category:</span>
                            <div class="masonry-filter-holder">
                                <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                            </div>
                        </div> -->
                        <div class="masonry__container row">
                            <div class="masonry__item col-md-6"></div>
                            <div class="masonry__item col-md-12 col-12 h" data-masonry-filter="Marketing">
                                <a class="block" href="https://www.atelierdepaire.fr">
                                    <article class="imagebg border--round" data-scrim-bottom="8">
                                        <span class="label">New</span>
                                        <div class="background-image-holder">
                                            <img alt="background" src="{{ url('https://atelierdepaire.fr/images/d.jpg') }}" />
                                        </div>
                                        <div class="article__title">
                                            <span>Janvier 2022</span>
                                            <h4>Atelier Depaire : E-commerce, vente de bijoux, payment securisé...</h4>
                                        </div>
                                    </article>
                                </a>
                            </div>
                            <!--end item-->
                            <div class="masonry__item col-md-6 col-12" data-masonry-filter="Marketing">
                                <a class="block" href="https://stretching-postural-attitude.com/">
                                    <article class="imagebg border--round" data-scrim-bottom="8">
                                        <div class="background-image-holder">
                                            <img alt="background" src='{{ url("https://stretching-postural-attitude.com/storage/sliders/photo_SP4.JPG") }}' />
                                        </div>
                                        <div class="article__title">
                                            <span>Novembre 2021</span>
                                            <h4>Streatching Postulral : Site vitrine, responsive...</h4>
                                        </div>
                                    </article>
                                </a>
                            </div>
                            <!--end item-->
                            <div class="masonry__item col-md-6 col-12" data-masonry-filter="Design">
                                <a class="block" href="https://furiosali.fr/">
                                    <article class="imagebg border--round" data-scrim-bottom="8">
                                        <div class="background-image-holder">
                                            <img alt="background" src='{{ url("https://furiosali.fr/uploads/products/1641949137.C4CF020F-94B9-4B77-904B-7B25ABE7BD21.jpeg") }}' />
                                        </div>
                                        <div class="article__title">
                                            <span>Janvier 2022</span>
                                            <h4>Furiosali : E-commerce, peinture, Laravel Php...</h4>
                                        </div>
                                    </article>
                                </a>
                            </div>

                            <!--end item-->

                            
                        </div>
                        <div style="display: flex; justify-content: center;">
                            <a class="btn btn--sm btn--primary type--uppercase" href="{{ route('cv.projet') }}">
                                <span class="btn__text">
                                    Tout les projets
                                </span>
                            </a>
                        </div>

                    </div>
                    <!--end masonry-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <a style="text-decoration: none" href="{{ route('cv.about') }}">
        <section class="bg--secondary text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="feature">
                            <div class="radial" data-value="80" data-size="208" data-bar-width="8" data-color="#4a90e2">
                                <span class="h3 radial__label">Laravel / Symfony</span>
                            </div>
                            <!--end radial-->
                            <p>
                                Création du e-commerce, Site vitrine, 3 ans d'expérience
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="feature">
                            <div class="radial" data-value="80" data-size="208" data-bar-width="8" data-color="#4a90e2">
                                <span class="h3 radial__label">Php</span>
                            </div>
                            <!--end radial-->
                            <p>
                                3 ans d'expérience
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="feature">
                            <div class="radial" data-value="80" data-size="208" data-bar-width="8" data-color="#4a90e2">
                                <span class="h3 radial__label">Html / Css</span>
                            </div>
                            <!--end radial-->
                            <p>
                                5 ans d'expérience
                            </p>
                        </div>
                    </div>
                    
                </div>  
                <!--end of row-->
            </div>
            <!-- <div style="display: flex; justify-content: center;">
                <a class="btn btn--sm btn--primary type--uppercase" href="#">
                    <span class="btn__text">
                        + d'info
                    </span>
                </a>
            </div> -->
            <!--end of container-->
        </section>

    </a>



    <section class="">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-10 col-lg-8">
                    <div class="">
                        <form method="POST" action="{{ route('mail.send') }}" class="text-left form-email row mx-0" data-success="Votre message a bien été envoyé " data-error="Please fill in all fields correctly." data-recaptcha-sitekey="6LewhCIUAAAAACSwFvBDhgtTbw6EnW6e9dip8o2u" data-recaptcha-theme="light">
                            @csrf
                            <div class="col-md-6">
                                <span>Name:</span>
                                <input type="text" name="name" class="validate-required" />
                            </div>
                            <div class="col-md-6">
                                <span>Email:</span>
                                <input type="email" name="email" class="validate-required validate-email" />
                            </div>
                            <div style="margin-bottom: 30px" class="col-md-12">
                                <span>Message:</span>
                                <textarea rows="5" name="message" class="validate-required"></textarea>
                            </div>
                            <div class="col-md-4 col-6 text-center">
                                <span class="block">Maquette UI/UX</span>
                                <div class="input-checkbox">
                                    <input type="checkbox" name="maquette" />
                                    <label></label>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center">
                                <span class="block">E-commerce</span>
                                <div class="input-checkbox">
                                    <input type="checkbox" name="ecommerce" />
                                    <label></label>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center">
                                <span class="block">Site Vitrine</span>
                                <div class="input-checkbox">
                                    <input type="checkbox" name="vitrine" />
                                    <label></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 boxed">
                                <div class="recaptcha"></div>
                            </div>
                            <div class="col-md-12 boxed">
                                <button type="submit" class="btn btn--primary type--uppercase">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('extra-script')

<script>
    var x = document.body.clientWidth;

    if (x <= 1000) {
        // $('.bg--secondary').addClass('text-center')
        $('#formContact').css({'marginLeft': '0'})
        $('#contactP').addClass('text-center')
    } else {
        // $('.bg--secondary').removeClass('text-center')
        $('#formContact').css({'marginLeft': '-15px'})
        $('#contactP').removeClass('text-center')
    }

    window.addEventListener('resize', function(event) {
        x = document.body.clientWidth;
        if (x <= 1000) {
            // $('.bg--secondary').addClass('text-center')
            $('#formContact').css({'marginLeft': '0'})
            $('#contactP').addClass('text-center')
        } else {
            // $('.bg--secondary').removeClass('text-center')
            $('#formContact').css({'marginLeft': '-15px'})
            $('#contactP').removeClass('text-center')
        
        }
    }, true);


</script>

@endsection