@extends('home.base.layout')
@section('title')
    Haberler
@endsection
@section('content')
    <!-- Content -->
    <section id="page-title" >
        <div class="container">
            <div class="page-title">
                <h1>Bizden Haberler
                </h1>
            </div>
        </div>
    </section>
    <section id="page-content">
        <div class="container">
            <!-- Blog -->
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                @foreach($posts as $post)
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="{{route('news-detail', $post->slug)}}">
                                    <img alt="{{$post->slug}}" src="{{asset('uploads/news/'. $post->image)}}">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$post->created_at}}</span>
                                <h2><a href="{{route('news-detail', $post->slug)}}">{{$post->title}}
                                    </a></h2>
                                <p>{{$post->description}}</p>
                                <a href="{{route('news-detail', $post->slug)}}" class="item-link">Daha fazla oku.. <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                @endforeach
            </div>
            <!-- end: Blog -->
        </div>
        <!-- end: post content -->
    </section>
    <!-- end: Content -->
@endsection

@section('script')
    <script src="{{asset('assets/user/plugins/metafizzy/infinite-scroll.min.js')}}"></script>
@endsection
