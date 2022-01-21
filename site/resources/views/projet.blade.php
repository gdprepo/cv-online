@extends('layouts.page')


@section('content')


<div class="main-container">
            <section style="padding-bottom: 30px;" class="text-center space--even">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="typed-headline">
                                <span class="h2 inline-block">Portfolio</span>
                                <span class="h2 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="E-commerce,Laravel,Php,target customers,disrupt industries,communicate"></span>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="masonry">
                                <div class="masonry-filter-container text-center row justify-content-center align-items-center">
                                    <span>Category:</span>
                                    <div class="masonry-filter-holder">
                                        <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="masonry__container row">
                                    <div class="masonry__item col-lg-4 col-md-6 text-center" data-masonry-filter="Laravel, Php, E-commerce">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="{{ url('https://atelierdepaire.fr/images/d.jpg') }}" />
                                            </a>
                                            <h4>Atelier Depaire</h4>
                                            <span>Laravel &amp; Php</span>
                                        </div>
                                    </div>
                                    <!--end item-->
                                    <div class="masonry__item col-lg-4 col-md-6 text-center" data-masonry-filter="Laravel, Php">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="https://i.ibb.co/y4wKVv7/Capture-d-e-cran-2021-05-31-a-09-44-30.png" />
                                            </a>
                                            <h4>Simulateur de prime</h4>
                                            <span>Excel</span>
                                        </div>
                                    </div>
                                    <!--end item-->
                                    <div class="masonry__item col-lg-4 col-md-6 text-center" data-masonry-filter="Laravel, Php, E-commerce">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="https://www.gd-cvonline.site/img-projet/furiosascreen.jpg" />
                                            </a>
                                            <h4>Furiosali</h4>
                                            <span>E-commerce Peinture</span>
                                        </div>
                                    </div>
                                    <!--end item-->
                                    <div class="masonry__item col-lg-4 col-md-6 text-center" data-masonry-filter="Site Vitrine, Laravel, Php">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="{{ asset('/img/stretching-postural.png') }}" />
                                            </a>
                                            <h4>Stretching Postural Attitude</h4>
                                            <span>Site Vitrine</span>
                                        </div>
                                    </div>
                                    <!-- <div class="masonry__item col-lg-4 col-md-6 text-center" data-masonry-filter="Print">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="img/work-6.jpg" />
                                            </a>
                                            <h4>Nike Active</h4>
                                            <span>Print Marketing</span>
                                        </div>
                                    </div>
                                    <div class="masonry__item col-lg-4 col-md-6 text-center" data-masonry-filter="Digital">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="img/work-5.jpg" />
                                            </a>
                                            <h4>Nuaca</h4>
                                            <span>Digital &amp; Interactive Design</span>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of container-->
            </section>
            <!-- <section class="text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="cta">
                                <h2>Prêt pour créer ?</h2>
                                <p class="lead">
                                    Each purchase of Stack comes with six months free support &mdash; and a lifetime of free content and bug-fix updates.
                                </p>
                                <a class="btn btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                        Purchase on Envato
                                    </span>
                                    <span class="label">$18 USD</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

@endsection