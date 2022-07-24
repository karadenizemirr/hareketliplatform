@extends('home.base.layout')
@section('title')
    {{$product->name}}
@endsection

@section('content')
    <!-- SHOP PRODUCT PAGE -->
    <section id="product-page" class="product-page p-b-0">
        <div class="container">
            <div class="product">
                <div class="row m-b-40">
                    <div class="col-lg-5">
                        <div class="product-image">
                            <!-- Carousel slider -->
                            <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="2500" data-lightbox="gallery">
                                <a href="{{asset('uploads/product/'. $product->product_image)}}" data-lightbox="image" title="{{$product->name}}"><img alt="{{$product->name}}" src="{{asset('uploads/product/'. $product->product_image)}}">
                                </a>
                            </div>
                            <!-- Carousel slider -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-description">
                            <!--
                            <div class="product-category">category name</div>
                            -->
                            <div class="product-title">
                                <h3><a href="#">{{$product->name}}</a></h3>
                            </div>
                            <div class="seperator m-b-10"></div>
                            <p>
                                {{$product->description}}
                            </p>
                            <div class="seperator m-t-20 m-b-10"></div>
                        </div>
                    </div>
                </div>
                <!-- TABS -->
                <div class="tabs tabs-vertical">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="nav flex-column nav-tabs" id="myTab4" role="tablist" aria-orientation="vertical">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#technique_detail" role="tab" aria-controls="technique_detail" aria-selected="true">
                                        Teknik Özellikler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#platform_detail" role="tab" aria-controls="platform_detail" aria-selected="false">
                                        Platform Özellikleri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#safety_features" role="tab" aria-controls="safety_features" aria-selected="false">
                                        Emniyet Özellikleri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#configuration" role="tab" aria-controls="safety_features" aria-selected="false">
                                        Konfügrasyon Özellikleri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#component" role="tab" aria-controls="safety_features" aria-selected="false">
                                        Bileşen Özellikleri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#other_detail" role="tab" aria-controls="safety_features" aria-selected="false">
                                        Diğer Özellikler
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content" id="myTabContent4">
                                <div class="tab-pane fade show active" id="technique_detail" role="tabpanel" aria-labelledby="home-tab">
                                    {!! $product->technique_detail !!}
                                </div>
                                <div class="tab-pane fade" id="platform_detail" role="tabpanel" aria-labelledby="profile-tab">
                                    {!! $product->platform_detail !!}
                                 </div>
                                <div class="tab-pane fade" id="safety_features" role="tabpanel" aria-labelledby="contact-tab">
                                    {!! $product->safety_features !!}
                                </div>
                                <div class="tab-pane fade" id="configuration" role="tabpanel" aria-labelledby="contact-tab">
                                    {!! $product->configuration !!}
                                </div>
                                <div class="tab-pane fade" id="component" role="tabpanel" aria-labelledby="contact-tab">
                                    {!! $product->component !!}
                                </div>
                                <div class="tab-pane fade" id="other_detail" role="tabpanel" aria-labelledby="contact-tab">
                                    {!! $product->other_detail !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end: SHOP PRODUCT PAGE -->
@endsection

