@extends('home.base.layout')
@section('header-style')
light
@endsection
@section('content')
    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Shop</h1>
                <span>Shop 3 columns version</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Shop</a>
                    </li>
                    <li class="active"><a href="#">3 columns version</a>
                    </li>
                </ul>
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
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/1.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/10.jpg">
                                </a>
                                <span class="product-new">NEW</span>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">6 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/2.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/6.jpg">
                                </a>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">3 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/3.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/7.jpg">
                                </a>
                                <span class="product-hot">HOT</span>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">3 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/4.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/9.jpg">
                                </a>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Cotton Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$22.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/5.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/11.jpg">
                                </a>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Grey Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/6.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/2.jpg">
                                </a>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Pocket Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$19.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/7.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/3.jpg">
                                </a>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Dark Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$26.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/8.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/1.jpg">
                                </a>
                                <span class="product-sale">SALE</span>
                                <span class="product-sale-off">50% Off</span>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Nature Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$19.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/11.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/5.jpg">
                                </a>
                                <span class="product-hot">HOT</span>
                                <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">3 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="space">
                <!-- Pagination -->
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- end: Pagination -->
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
