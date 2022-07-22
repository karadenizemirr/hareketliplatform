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
                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="images/blog/12.jpg">
                            </a>
                            <span class="post-meta-category"><a href="">Lifestyle</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
                <!-- Post item YouTube-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-video">
                            <iframe width="560" height="320" src="https://www.youtube.com/embed/dA8Smj5tZOQ" frameborder="0" allowfullscreen></iframe>
                            <span class="post-meta-category"><a href="">Video</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="#">This is a example post with YouTube</a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More </a>
                        </div>
                    </div>
                </div>
                <!-- end: Post item YouTube-->
            </div>
            <!-- end: Blog -->
            <!-- Load next portfolio items -->
            <div id="pagination" class="infinite-scroll">
                <a href="blog-masonry-infinite-scroll-2.html"></a>
            </div>
            <!-- end:Load next portfolio items -->
        </div>
        <!-- end: post content -->
    </section>
    <!-- end: Content -->
@endsection

@section('script')
    <script src="{{asset('assets/user/plugins/metafizzy/infinite-scroll.min.js')}}"></script>
@endsection
