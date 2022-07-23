@extends('home.base.layout')
@section('title')
    title
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
                <!-- Product additional tabs -->
                <div class="tabs tabs-folder">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show"
                               id="home-tab"
                               data-bs-toggle="tab"
                               href="#technique_detail"
                               role="tab"
                               aria-controls="home"
                               aria-selected="false"><i class="fa fa-align-justify"></i>Teknik Detaylar</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="profile-tab"
                               data-bs-toggle="tab"
                               href="#platform_detail"
                               role="tab"
                               aria-controls="profile"
                               aria-selected="true"><i class="fa fa-info"></i>Platform Detayları</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="profile-tab"
                               data-bs-toggle="tab"
                               href="#safety_features"
                               role="tab"
                               aria-controls="profile"
                               aria-selected="true"><i class="fa fa-info"></i>Emniyet Özellikleri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="profile-tab"
                               data-bs-toggle="tab"
                               href="#configuration"
                               role="tab"
                               aria-controls="profile"
                               aria-selected="true"><i class="fa fa-info"></i>Yük Kapsitesi ve Konfigürasyon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="profile-tab"
                               data-bs-toggle="tab"
                               href="#components"
                               role="tab"
                               aria-controls="profile"
                               aria-selected="true"><i class="fa fa-info"></i>Bölüm ve Bileşenler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="profile-tab"
                               data-bs-toggle="tab"
                               href="#other_detail"
                               role="tab"
                               aria-controls="profile"
                               aria-selected="true"><i class="fa fa-info"></i>Diğer Detaylar</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade active show" id="technique_detail" role="tabpanel" aria-labelledby="home-tab">
                            {{$product->technique_detail}}
                        </div>
                        <div class="tab-pane fade active show" id="platform_detail" role="tabpanel" aria-labelledby="home-tab">
                            {{$product->platform_detail}}
                        </div>
                        <div class="tab-pane fade active show" id="safety_features" role="tabpanel" aria-labelledby="home-tab">
                            {{$product->safety_feautres}}
                        </div>
                        <div class="tab-pane fade active show" id="technique_detail" role="tabpanel" aria-labelledby="home-tab">
                            {{$product->technique_detail}}
                        </div>
                        <div class="tab-pane fade active show" id="configuration" role="tabpanel" aria-labelledby="home-tab">
                            {{$product->configuration}}
                        </div>
                        <div class="tab-pane fade active show" id="components" role="tabpanel" aria-labelledby="home-tab">
                            {{$product->components}}
                        </div>
                        <div class="tab-pane fade active show" id="other_detail" role="tabpanel" aria-labelledby="home-tab">
                            {{$product->other_detail}}
                        </div>
                    </div>
                </div>
                <!-- end: Product additional tabs -->
            </div>
        </div>
    </section>
    <!-- end: SHOP PRODUCT PAGE -->
@endsection
