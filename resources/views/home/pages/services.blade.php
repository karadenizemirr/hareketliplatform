@extends('home.base.layout')
@section('title')
    Çözümlerimiz
@endsection

@section('content')
    <section id="page-title" >
        <div class="container">
            <div class="page-title">
                <h1>Çözümlerimiz
                </h1>
                <span>Sunmuş olduğumuz hizmetlere buradan ulaşabilirsiniz.</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- SERVICES -->
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
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
    <section class="background-grey">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12 text-center">
                    <div class="description">
                        <h2>İletişime Geç</h2>
                        Bizimle iletişime geçerek hizmetlerimizden faydalanabilirisiniz.
                    </div>
                    <div class="button">
                        <a href="{{route('contact')}}" class="btn btn-warning text-black-50" >İletişime Geç</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
