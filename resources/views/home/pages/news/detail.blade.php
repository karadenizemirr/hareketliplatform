@extends('home.base.layout')
@section('title')
    Post Detail
@endsection

@section('content')

    <!-- Page Content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div id="blog" class="single-post col-lg-10 center">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque
                                sed nibh a quam accumsan dignissim quis quis urna. The most happiest time of the day!. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus
                                laoreet tincidunt. Mauris interdum convallis metus.M</p>
                            <div class="blockquote">
                                <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                                <small>by <cite>Albert Einstein</cite></small>
                            </div>
                            <p> The most happiest time of the day!. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus.
                                Suspendisse vel lacus est, sit amet tincidunt erat. Etiam purus sem, euismod eu vulputate eget, porta quis sapien. Donec tellus est, rhoncus vel scelerisque id, iaculis eu nibh.</p>
                            <p>Donec posuere bibendum metus. Quisque gravida luctus volutpat. Mauris interdum, lectus in dapibus molestie, quam felis sollicitudin mauris, sit amet tempus velit lectus nec lorem. Nullam vel mollis neque. The most happiest
                                time of the day!. Nullam vel enim dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed tincidunt accumsan massa id viverra. Sed sagittis, nisl sit amet imperdiet convallis,
                                nunc tortor consequat tellus, vel molestie neque nulla non ligula. Proin tincidunt tellus ac porta volutpat. Cras mattis congue lacus id bibendum. Mauris ut sodales libero. Maecenas feugiat sit amet enim in accumsan.</p>
                            <p>Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus
                                erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>
                        </div>
                        <div class="post-tags">
                            <a href="#">Life</a>
                            <a href="#">Sport</a>
                            <a href="#">Tech</a>
                            <a href="#">Travel</a>
                        </div>
                        <div class="post-navigation">
                            <a href="blog-single-slider.html" class="post-prev">
                                <div class="post-prev-title"><span>Previous Post</span>Post with a slider and lightbox</div>
                            </a>
                            <a href="blog-masonry-3.html" class="post-all">
                                <i class="icon-grid"> </i>
                            </a>
                            <a href="blog-single-video.html" class="post-next">
                                <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
                            </a>
                        </div>
                        <!-- Comments -->
                        <div class="comments" id="comments">
                            <div class="comment_number">
                                Comments <span>(2)</span>
                            </div>
                            <div class="comment-list">
                                <!-- Comment -->
                                <div class="comment" id="comment-1">
                                    <div class="image"><img alt="" src="images/blog/author.jpg" class="avatar"></div>
                                    <div class="text">
                                        <h5 class="name">John Doe</h5>
                                        <span class="comment_date">Posted at 15:32h, 06 December</span>
                                        <a class="comment-reply-link" href="#">Reply</a>
                                        <div class="text_holder">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                                the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                    </div>
                                    <!-- Comment -->
                                    <div class="comment" id="comment-1-1">
                                        <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar"></div>
                                        <div class="text">
                                            <h5 class="name">John Doe</h5>
                                            <span class="comment_date">Posted at 15:32h, 06 December</span>
                                            <a class="comment-reply-link" href="#">Reply</a>
                                            <div class="text_holder">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: Comment -->
                                    <!-- Comment -->
                                    <div class="comment" id="comment-1-2">
                                        <div class="image"><img alt="" src="images/blog/author3.jpg" class="avatar"></div>
                                        <div class="text">
                                            <h5 class="name">John Doe</h5>
                                            <span class="comment_date">Posted at 15:32h, 06 December</span>
                                            <a class="comment-reply-link" href="#">Reply</a>
                                            <div class="text_holder">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: Comment -->
                                </div>
                                <!-- end: Comment -->
                                <!-- Comment -->
                                <div class="comment" id="comment-2">
                                    <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar"></div>
                                    <div class="text">
                                        <h5 class="name">John Doe</h5>
                                        <span class="comment_date">Posted at 15:32h, 06 December</span>
                                        <a class="comment-reply-link" href="#">Reply</a>
                                        <div class="text_holder">
                                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                                                original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Comment -->
                            </div>
                        </div>
                        <!-- end: Comments -->
                        <div class="respond-form" id="respond">
                            <div class="respond-comment">
                                Leave a <span>Comment</span></div>
                            <form class="form-gray-fields">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="upper" for="name">Name</label>
                                            <input class="form-control required" name="senderName" placeholder="Enter name" id="name" aria-required="true" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="upper" for="email">Email</label>
                                            <input class="form-control required email" name="senderEmail" placeholder="Enter email" id="email" aria-required="true" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="upper" for="website">Website</label>
                                            <input class="form-control website" name="senderWebsite" placeholder="Enter Website" id="website" aria-required="false" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="upper" for="comment">Your comment</label>
                                            <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end: Post single item-->
            </div>
        </div>
    </section>
    <!-- end: Page Content -->
@endsection
