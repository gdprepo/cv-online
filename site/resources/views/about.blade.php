@extends('layouts.page')


@section('content')
<section style="padding-bottom: 30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Skills</h1>
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- <li>
                        <a href="#">Elements</a>
                    </li> -->
                    <li>A propos</li>
                </ol>
                <hr>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<section>
    <div style="width:50%; max-width: 730px" class="container">
        <div class="progress-horizontal">
            <div class="progress-horizontal__bar" data-value="80"></div>
            <span class="progress-horizontal__label h5">Laravel & Symfony : 80%</span>
        </div>
        <div class="progress-horizontal">
            <div class="progress-horizontal__bar" data-value="80"></div>
            <span class="progress-horizontal__label h5">Html & Css: 90%</span>
        </div>
        <div class="progress-horizontal">
            <div class="progress-horizontal__bar" data-value="80"></div>
            <span class="progress-horizontal__label h5">JavaScript & Jquery: 90%</span>
        </div>
        <div class="progress-horizontal">
            <div class="progress-horizontal__bar" data-value="80"></div>
            <span class="progress-horizontal__label h5">Progress: 80%</span>
        </div>
        <div class="progress-horizontal">
            <div class="progress-horizontal__bar" data-value="80"></div>
            <span class="progress-horizontal__label h5">Progress: 80%</span>
        </div>
    </div>

</section>

<section class="bg--secondary   ">
    <div class="container">
        
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <i class="icon icon-Sidebar-Window color--primary"></i>
                    <h4>Laravel / Symfony</h4>
                    <p>
                        Creation d'infra, e-commerce, site vitrine <br>
                        Maitrise des framework Php
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <i class="icon icon-Duplicate-Window color--primary"></i>
                    <h4>Design</h4>
                    <p>
                        Intégration de template
                        Creation de maquette sur mesure  
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <i class="icon icon-Code-Window color--primary"></i>
                    <h4>Référencement Naturel</h4>
                    <!-- <p>
                        Stratégie marketing
                    </p> -->
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
        $('.bg--secondary').addClass('text-center')
        $('#formContact').css({'marginLeft': '0'})
        $('#contactP').addClass('text-center')
    } else {
        $('.bg--secondary').removeClass('text-center')
        $('#formContact').css({'marginLeft': '-15px'})
        $('#contactP').removeClass('text-center')
    }

    window.addEventListener('resize', function(event) {
        x = document.body.clientWidth;
        if (x <= 1000) {
            $('.bg--secondary').addClass('text-center')
            $('#formContact').css({'marginLeft': '0'})
            $('#contactP').addClass('text-center')
        } else {
            $('.bg--secondary').removeClass('text-center')
            $('#formContact').css({'marginLeft': '-15px'})
            $('#contactP').removeClass('text-center')
        
        }
    }, true);


</script>

@endsection