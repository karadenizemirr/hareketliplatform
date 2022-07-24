@extends('home.base.layout')
@section('title')
    Post Detail
@endsection

@section('content')

    <!-- Page title -->
    <section id="page-title" class="page-title-center text-light" style="background-image:url({{asset('uploads/news/'. $item->image)}});">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="page-title">
                <h1>{{$item->title}}</h1>
                <div class="small m-b-20"> {{$item->created_at}}</div>
                <div class="align-center">
                    <a class="btn btn-xs btn-slide btn-facebook" href="#">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                    <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                        <i class="icon-mail"></i>
                        <span>Mail</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Page Content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div id="blog" class="single-post col-lg-10 center">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
                <!-- end: Post single item-->
            </div>
        </div>
    </section>
    <!-- end: Page Content -->
@endsection
