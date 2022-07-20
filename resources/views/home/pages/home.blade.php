@extends('home.base.layout')
@section('title')
    Anasayfa
@endsection
@section('header-style')
    dark
@endsection
@section('content')
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen" data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide" style="
        background-image:url('{{URL::asset('assets/user/images/slider-image.jpg')}}');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h2 class="text-light m-b-10">HAREKETLİ PLATFORM</h2>
                    <h4 class="m-b-40 text-light m-b-10">Çeşitli ödeme opsiyonları, satış, kiralama ve ikinci el ürün opsiyonlarıyla hizmetinizdeyiz..</h4>
                    <a class="btn btn-warning text-black-50"><i class="fa fa-check"></i>Bizimile İletişime Geçin</a>
                    <!-- end: Captions -->
                </div>

            </div>

        </div>
        <!-- end: Slide 1 -->
    </div>
    <!--end: Inspiro Slider -->

    <!-- WELCOME -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4 class="m-b-10">Hareketli Platform</h4>
                    <h2 class="m-b-10">Hakkımızda</h2>
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor ibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis.
                    </p>
                    <a href="#" class="btn btn-dark">Daha Fazla..</a>
                </div>
                <div class="col-lg-6 offset-1 m-t-50">
                    <div class="ratio ratio-16x9">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://player.vimeo.com/video/157573157?title=0&byline=0&portrait=0" width="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end: WELCOME -->

    <!-- Call to action -->
    <section class="background-colored text-center background-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9r">
                    <h3 class="text-light">Like What You See? We’re Just Getting Started</h3><a class="btn btn-warning btn-outline text-black-50 btn-roundeded">Hemen İletişime Geçin</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Call to action -->
@endsection
