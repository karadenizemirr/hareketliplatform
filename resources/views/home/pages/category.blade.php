@extends('home.base.layout')
@section('header-style')
light
@endsection
@section('title')
    {{$category->name}}
@endsection
@section('content')
    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>{{$category->name}}</h1>
                <span>{{$category->name}} kategorisine ait ürünler.</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Shop products -->
    <section>
        <div class="container">
            <!--Product list-->
            <div class="shop">
                <div class="grid-layout grid-3-columns" data-item="grid-item">
                    @foreach($products as $product)
                        <div class="grid-item">
                            <div class="product">
                                <div class="product-image">
                                    <a href="{{route('product-detail', $product->slug)}}">
                                        <img alt="Shop product image!" src="{{asset('uploads/product/'. $product->product_image)}}">
                                    </a>
                                    <a href="{{route('product-detail', $product->slug)}}">
                                        <img alt="{{$product->slug}}" src="{{asset('uploads/product/'. $product->product_image)}}">
                                    </a>
                                    <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                    <div class="product-overlay">
                                        <a href="{{asset('uploads/product/'. $product->product_image)}}" data-lightbox="ajax">İncele</a>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <div class="product-category">{{$category->name}}</div>
                                    <div class="product-title">
                                        <h3><a href="#">{{$product->name}}</a></h3>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr class="space">
            </div>
            <!--End: Product list-->
        </div>
    </section>
    <!-- end: Shop products -->
    <!-- DELIVERY INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-gift"></i></a>
                        </div>
                        <h3>Free shipping on orders $60+</h3>
                        <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plane"></i></a>
                        </div>
                        <h3>Worldwide delivery</h3>
                        <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-history"></i></a>
                        </div>
                        <h3>60 days money back guranty!</h3>
                        <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: DELIVERY INFO -->
@endsection
