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
@endsection
