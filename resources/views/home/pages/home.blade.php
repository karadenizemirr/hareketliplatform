@extends('home.base.layout')
@section('title')
    Anasayfa
@endsection
@section('header-style')
    dark
@endsection
@section('content')
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="460">
        <!-- Slide 1 -->
        @foreach($sliders as $slider)
            <div class="slide" style="
        background-image:url('{{URL::asset("uploads/slider/" . $slider->image)}}');">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions">
                        <!-- Captions -->
                        <h2 class="text-light m-b-10 text-uppercase">{{$slider->title}}</h2>
                        <h4 class="m-b-40 text-light m-b-10">{{$slider->slogan}}</h4>
                        @if($slider->button_text != null)
                            <a href="{{$slider->button_link}}" class="btn btn-warning text-black-50"><i class="fa fa-check"></i>{{$slider->button_text}}</a>
                        @endif
                        <!-- end: Captions -->
                    </div>

                </div>

            </div>
        @endforeach
        <!-- end: Slide 1 -->
    </div>
    <!--end: Inspiro Slider -->

    <!-- BOXES -->
    <!-- Page Content -->
    <section id="page-content">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Son Eklenler</h2>
                <p>Son eklenen ürünler.
                </p>
            </div>
            <div class="row">
                <div class="content col-lg-12">
                    <div class="carousel" data-items="2" data-dots="true" data-lightbox="gallery">
                        <!-- portfolio item -->
                        @foreach($products as $product)
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="{{asset('uploads/product/' . $product->product_image)}}" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Resmi Büyült!" data-lightbox="gallery-image" href="{{asset('uploads/product/'. $product->product_image)}}"
                                           class="btn btn-light btn-roundeded">Büyült</a>
                                        <a title="Ürüne Git" data-lightbox="gallery-image" href="{{route('product-detail', $product->slug)}}"
                                           class="btn btn-warning btn-roundeded">Ürüne Git</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- end: portfolio item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Page Content -->
    <!-- end: BOXES -->

    <!-- SERVICES -->
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Çözümler</h2>
                <p>Sizlere sunduğumuz hizmetler.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plug"></i></a>
                        </div>
                        <h3>Kiralama</h3>
                        <p>Yurtiçi ve Yurtdışı( ödemesini Türkiye’de yaparak
                            yurtdışı şantiyelerinizde kiralama)
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-desktop"></i></a>
                        </div>
                        <h3>Kira Garantili Satış</h3>
                        <p>Satılan  platform veya cephe asansörüne hemen
                            veya iş sonunda kira garantisi.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-cloud"></i></a>
                        </div>
                        <h3>Proje Bazında Kiralama</h3>
                        <p>Deplasman dahil sabit bir toplam tutar üzerinden kiralama
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="far fa-lightbulb"></i></a>
                        </div>
                        <h3>Satış Opsiyonlu Kira</h3>
                        <p>Önce kirala, ödenen kira bedeline çok az fark ekleyerek  satın al
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-trophy"></i></a>
                        </div>
                        <h3>Mast Kiralama</h3>
                        <p>Belirli(standart)  yüksekliğe kadar makine ve  mast satın al, bakiye mastları kirala.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <h3>Yurtiçi ve Yurtdışı Satış</h3>
                        <p>Uygun ödeme koşulları ile YENİ veya KULLANILMIŞ makine satışı.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-rocket"></i></a>
                        </div>
                        <h3>Kullanılmış Makine</h3>
                        <p>Eski ve YENİ mast satışı ile uygun maliyet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-flask"></i></a>
                        </div>
                        <h3>Geri Alım ve Garantili Satış</h3>
                        <p>Buy Back; Peşin öde kiralama maliyetinden daha azına geri sat, böylece sıfır makine kullan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-umbrella"></i></a>
                        </div>
                        <h3>Leasing ile Satış</h3>
                        <p>%1 KDV ve aylara yayılan ödeme ile finansman rahatlığı
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SERVICES -->

    <!-- Call to action -->
    <section class="background-colored text-center background-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9r">
                    <h3 class="text-light">CP Makina Hizmetlerinden Yararlanmak İçin Bize Ulaşın</h3>
                    <a href="{{route('contact')}}" class="btn btn-warning btn-outline text-black-50 btn-roundeded">Hemen İletişime Geçin</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Call to action -->
    <!-- BLOG -->
    <section class="p-b-40 background-grey">
        <div class="container">

            <div class="heading-text heading-section">
                <h2>Bizden Haberler</h2>
                <span class="lead">Bizimle ilgili en son haberlere ulaşın. </span>
            </div>
        </div>

        <div id="blog">
            <div class="container">
                <!-- Blog -->
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                    <!-- Post item-->
                    @foreach($end_post as $ep)
                        <div class="post-item border">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="{{route('news-detail', $ep->slug)}}">
                                        <img alt="" src="{{asset('uploads/news/'. $ep->image)}}">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$ep->created_at}}/span>
                                    <h2><a href="{{route('news-detail', $ep->slug)}}">{{$ep->title}}
                                        </a></h2>
                                    <p>{{$ep->description}}.</p>

                                    <a href="{{route('news-detail', $ep->slug)}}" class="item-link">Daha fazla oku. <i class="fa fa-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- end: Post item-->
                </div>
            </div>
        </div>
    </section>
    <!-- end: BLOG -->
    <!--Modal Cookie-->
    <div id="cookieNotify" class="modal-strip cookie-notify background-dark" data-delay="3000" data-expire="1" data-cookie-name="cookiebar2021_1" data-cookie-enabled="true">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-sm-center sm-center sm-m-b-10 m-t-5">Sizlere daha iyi hizmet verebilmek için sitemizde çerezler kullanılmaktadır.</div>
                <div class="col-lg-4 text-end sm-text-center sm-center">
                    <button type="button" class="btn btn-roundeded btn-light btn-sm modal-confirm">Anladım</button>
                </div>
            </div>
        </div>
    </div>
    <!--End: Modal Cookie-->
@endsection
