@extends('layouts.page')


@section('content')

<section class="text-center space--even">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="typed-headline">
                                <span class="h2 inline-block">Expérience Profesionnel</span>
                                <span class="h2 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="stage,alternance"></span>
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
                                    <div class="masonry-filter-holder masonry-filters--horizontal">
                                        <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="masonry__container row">
                                    <div class="masonry__item col-md-6 text-center" data-masonry-filter="Stage">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="{{ asset('/img/roadoo.png') }}" />
                                            </a>
                                            <h4>Roadoo</h4>
                                            <span>Stage Alterné</span>
                                        </div>
                                    </div>
                                    <!--end item-->
                                    <div class="masonry__item col-md-6 text-center" data-masonry-filter="Print">
                                        <div class="project-thumb">
                                            <a href="#">
                                                <img alt="Image" class="border--round" src="{{ asset('/img/a2mi.png') }}" />
                                            </a>
                                            <h4>A2mi Informatique</h4>
                                            <span>Stage</span>
                                        </div>
                                    </div>
                                    <!--end item-->
                                </div>
                                <!--end of masonry container-->
                            </div>
                            <!--end masonry-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>



@endsection