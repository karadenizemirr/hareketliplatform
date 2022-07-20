<!-- Topbar -->
<div id="topbar" class="dark topbar-fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="top-menu text-white">
                    <li>
                        <i class="icon-phone">Telefon Numarası</i>
                    </li>
                    <li>
                        <i class="icon-mail">Mail Adresi</i>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <div class="social-icons social-icons-colored-hover">
                    <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: Topbar -->
<!-- Header -->
<header id="header" data-transparent="true" class="@yield('header-style') submenu-light">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo"> <a href="/" class="text-warning">
                    <span class="logo-default font-size-lg">HAREKETLİ PLATFORM</span>
                    <span class="logo-dark font-size-lg">HAREKETLİ PLATFORM</span></a> </div>
            <!--End: Logo-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/">Anasayfa</a></li>
                            <li class="dropdown"><a href="#">Ürünler</a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $category)
                                        <li><a href="{{route('category', $category->slug)}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="index.html">Çözümler</a></li>
                            <li><a href="index.html">İletişim</a></li>
                            <li><a href="{{route('request-education')}}" class="text-warning">Eğitim Başvurusu</a></li>
                            <li><a href="index.html" class="btn btn-warning text-black-50">Servis Talebi</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->
