<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Anasayfa</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('/user/images/logo.png')}}" alt="Hareketliplatform" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">Ürün İşlemleri</li>
                <li class="nav-item">
                    <a href="/admin/category" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Kategori İşlemleri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/product" class="nav-link">
                        <i class="nav-icon fas fa-shopping-basket"></i>
                        <p>
                            Ürün İşlemleri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('fault-medicine-add')}}" class="nav-link">
                        <i class="nav-icon fa fa-light fa-bomb"></i>
                        <p>
                            Arza Tipi Ekle
                        </p>
                    </a>
                </li>
                <li class="nav-header">Talepler</li>
                <li class="nav-item">
                    <a href="{{route('request-education-list')}}" class="nav-link">
                        <i class="nav-icon fa fa-light fa-bomb"></i>
                        <p>Eğitim Talepleri</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('request-service-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Servis Talepleri</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>İletişim Talepleri</p>
                    </a>
                </li>
                <li class="nav-header">Haberler</li>
                <li class="nav-item">
                    <a href="{{route('news-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Haber İşlemleri</p>
                    </a>
                </li>
                <li class="nav-header">Projeler ve Referanslar</li>
                <li class="nav-item">
                    <a href="{{route('project-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Projeler</p>
                    </a>
                </li>
                <li class="nav-header">Site Ayarları</li>
                <li class="nav-item">
                    <a href="{{route('slider-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Slider Ayarları</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{'logout'}}" method="post">
                        {{csrf_field()}}
                        <button class="nav-link active" type="submit">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Çıkış Yap
                                <i class="right fas fa-sign-out"></i>
                            </p>
                        </button>
                    </form>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

