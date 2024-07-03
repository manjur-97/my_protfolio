@extends('frontend.app')
@push('css')
    <style>
        .owl-carousel .item {
            position: relative;
            padding: 15px;
        }

        .owl-carousel .item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .description article {

            max-height: 150px;
            width: 100%;
            overflow: hidden;
            position: relative;
            text-align: justify;

        }

        .description article::after {

            content: "...";
            position: absolute;
            bottom: 0;
            right: 0;


        }
    </style>
@endpush


@section('pages')
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Socials and marketplaces</h4>
                                        <ul class="socials">
                                            @foreach ($social_medias as $item)
                                                <li class="" style='background:{{ $item->background }}'>
                                                    <a title="" href="{{ $item->url }}">{!! $item->icon !!}
                                                        <span
                                                            style=" font-size: 13px;
                                                    color: #fff">{{ $item->name }}</span>
                                                    </a>
                                                </li>
                                            @endforeach

                                            {{-- <li class="twitter">
                                                <a title="" href="#"><i class="fa fa-twitter"></i>
                                                    <span>twitter</span><ins>25 likes</ins></a>
                                            </li>
                                            <li class="google">
                                                <a title="" href="#"><i class="fa fa-google"></i>
                                                    <span>google</span><ins>35 likes</ins></a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    <div class="widget">
                                        <h4 class="widget-title">Shortcuts</h4>
                                        <ul class="naves">
                                            {{-- <li>
                                                <i class="ti-clipboard"></i>
                                                <a href="newsfeed.html" title="">News feed</a>
                                            </li> --}}
                                            <li>
                                                <i class="ti-mouse-alt"></i>
                                                <a href="inbox.html" title="">Contact info</a>
                                            </li>
                                            <li>
                                                <i class="ti-files"></i>
                                                <a href="fav-page.html" title="">My business pages</a>
                                            </li>

                                            <li>
                                                <i class="ti-image"></i>
                                                <a href="timeline-photos.html" title="">images</a>
                                            </li>
                                            <li>
                                                <i class="ti-video-camera"></i>
                                                <a href="timeline-videos.html" title="">videos</a>
                                            </li>
                                            <li>
                                                <i class="ti-comments-smiley"></i>
                                                <a href="messages.html" title="">Messages me</a>
                                            </li>

                                        </ul>
                                    </div><!-- Shortcuts -->


                                </aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="loadMore">
                                    @foreach ($posts as $post)
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{ $post->profile->profile_path }}" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="{{ url('/') }}" title="">
                                                                {{ $post->profile->name }}</a></ins>
                                                        <span>published: {{ $post->created_at }}</span>
                                                    </div>
                                                    <div class="description">
                                                        <header>
                                                            <a href="{{ url('/blog') }}/{{ $post->slog }}">
                                                                <h1 class="text-primary">{{ $post->title }}</h1>
                                                            </a>

                                                        </header>
                                                        <article class="mb-2">
                                                            <p>
                                                                {{ $post->descreption }}
                                                            </p>

                                                        </article>
                                                        @if ($post->category_id == 1)
                                                            <a class="text-primary" href="">Read More .....</a>
                                                        @endif

                                                    </div>
                                                    @if ($post->category_id == 1)
                                                        <div class="post-meta">
                                                            <div class="linked-image align-left">
                                                                <div class="owl-carousel">
                                                                    @foreach ($post->files as $file)
                                                                        <div class="item"><img
                                                                                src="{{ $post->profile->profile_path }}"
                                                                                alt="Image">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @elseif($post->category_id == 2)
                                                        @foreach ($post->files as $file)
                                                            <div class="item">
                                                                <video src="{{ $file->path }}"></video>
                                                            </div>
                                                        @endforeach
                                                    @elseif($post->category_id == 3)
                                                        @foreach ($post->files as $file)
                                                            <div class="item">
                                                                <video src="{{ $file->path }}" width="100%" autoplay
                                                                    controls></video>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="post-meta">


                                                        <div class="we-video-info">
                                                            <ul>

                                                                <li>
                                                                    <span class="views" data-toggle="tooltip"
                                                                        title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>{{ $post->views }}</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip"
                                                                        title="Comments" data-toggle="modal"
                                                                        data-target="#commentModal{{ $post->files }}">

                                                                        <i class="fa fa-comments-o open-modal"
                                                                            data-target="#postModal{{ $post->id }}"></i>
                                                                        <ins>{{$post->comments->count()}}</ins>

                                                                    </span>
                                                                </li>
                                                                <!-- Comment Modal -->
                                                                <div class="modal fade"
                                                                    id="commentModal{{ $post->files }}" tabindex="-1"
                                                                    role="dialog" aria-labelledby="commentModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="commentModalLabel">Comments</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!-- Add your comment form or content here -->
                                                                                <form>
                                                                                    <div class="form-group">
                                                                                        <label for="comment-text"
                                                                                            class="col-form-label">Comment:</label>
                                                                                        <textarea class="form-control" id="comment-text"></textarea>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <li class="social-media">
                                                                    <div class="menu">
                                                                        <div class="btn trigger"><i
                                                                                class="fa fa-share-alt"></i>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-html5"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-facebook"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-google-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-twitter"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-css3"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-instagram"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-dribbble"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#"
                                                                                    title=""><i
                                                                                        class="fa fa-pinterest"></i></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- comment modal  --}}
                                        <div class="modal fade" id="postModal{{ $post->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content p-3">
                                                    <div class="comment-area">
                                                        <h4 class="comment-title">{{$post->comments->count()==0?'':$post->comments->count()}} comments</h4>
                                                        <button type="button" class="close bg-warning p-1"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        @if ($post->comments->count()<=0)
                                                            <ul class="comments">
                                                                <li>No Comment Found</li>
                                                            </ul>
                                                        @endif
                                                        @foreach ($post->comments as $comment)
                                                            <ul class="comments">
                                                                <li>
                                                                    <div class="comment-box">
                                                                        <div class="commenter-photo">
                                                                            <img alt=""
                                                                                src="{{ asset('assets/frontend/images/resources/commenter-1.jpg') }}">
                                                                        </div>
                                                                        <div class="commenter-meta">
                                                                            <div class="comment-titles">
                                                                                <h6>{{ $comment->user_name }}</h6>
                                                                                <span>{{ $comment->created_at }}</span>

                                                                            </div>
                                                                            <p>
                                                                                {{ $comment->comment }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    @if ($comment->reply)
                                                                        <ul>
                                                                            <li>
                                                                                <div class="comment-box">
                                                                                    <div class="commenter-photo">
                                                                                        <img alt=""
                                                                                            src="{{ asset('assets/frontend/images/resources/commenter-1.jpg') }}">
                                                                                    </div>
                                                                                    <div class="commenter-meta">
                                                                                        <div class="comment-titles">
                                                                                            <h6>{{ $post->profile->name }}
                                                                                            </h6>
                                                                                            <span>{{ $comment->reply_date }}</span>

                                                                                        </div>
                                                                                        <p>
                                                                                            {{ $comment->reply }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    @endif

                                                                </li>

                                                            </ul>
                                                        @endforeach

                                                    </div>
                                                    <div class="gap-60 ">
                                                        <h4 class="comment-title">Leave a Comment</h4>
                                                        <div class="contact-form ">
                                                            <form method="post" class="comment-box p-4">
                                                                <div class="form-group">
                                                                    <input type="text" id="input"
                                                                        required="required">
                                                                    <label class="control-label" for="input">First
                                                                        &amp; Last Name</label><i class="mtrl-select"></i>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" required="required">
                                                                    <label class="control-label"
                                                                        for="input">Email@</label><i
                                                                        class="mtrl-select"></i>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" required="required">
                                                                    <label class="control-label"
                                                                        for="input">Subject</label><i
                                                                        class="mtrl-select"></i>
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea rows="4" id="textarea" required="required"></textarea>
                                                                    <label class="control-label"
                                                                        for="textarea">Message</label><i
                                                                        class="mtrl-select"></i>
                                                                </div>
                                                                <div class="submit-btns">
                                                                    <button class="mtr-btn signup"
                                                                        type="button"><i>Submit</i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <div class="banner medium-opacity bluesh">
                                            <div style="background-image: url(images/resources/baner-widgetbg.jpg)"
                                                class="bg-image"></div>
                                            <div class="baner-top">
                                                <span><img src="images/book-icon.png" alt=""></span>
                                                <i class="fa fa-ellipsis-h"></i>
                                            </div>
                                            <div class="banermeta">
                                                <p>
                                                    create your own favourit page.
                                                </p>
                                                <span>like them all</span>
                                                <a href="#" title="" data-ripple="">start now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h4 class="widget-title">Recent Activity</h4>
                                        <ul class="activitiez">
                                            <li>
                                                <div class="activity-meta">
                                                    <i>10 hours Ago</i>
                                                    <span><a href="#" title="">Commented on Video
                                                            posted </a></span>
                                                    <h6>by <a href="newsfeed.html">black demon.</a></h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>30 Days Ago</i>
                                                    <span><a href="newsfeed.html" title="">Posted your
                                                            status. “Hello guys, how are you?”</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>2 Years Ago</i>
                                                    <span><a href="#" title="">Share a video on her
                                                            timeline.</a></span>
                                                    <h6>"<a href="newsfeed.html">you are so funny mr.been.</a>"
                                                    </h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- recent activites -->
                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1, // Display one item at a time
                loop: true, // Loop through items
                margin: 10, // Margin between items
                autoplay: true, // Auto play
                autoplayTimeout: 3000, // Auto play interval
                autoplayHoverPause: true // Pause on hover
            });

            $('.open-modal').click(function() {
                var targetModal = $(this).data('target'); // Get the target modal ID
                // Show the modal
                $(targetModal).modal('show');
            });
        });
    </script>
@endpush
