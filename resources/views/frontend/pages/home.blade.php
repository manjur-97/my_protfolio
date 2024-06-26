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
                                                        <ins><a href="time-line.html" title="">
                                                                {{ $post->profile->name }}</a></ins>
                                                        <span>published: {{ $post->created_at }}</span>
                                                    </div>
                                                    <div class="description">
                                                        <header>
                                                            <h1>{{ $post->title }}</h1>
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
                                                                                src="{{ $post->profile->profile_path }}" alt="Image">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @elseif($post->category_id == 2)
                                                        @foreach ($post->files as $file)
                                                            <div class="item"> 
                                                                    <video src="{{$file->path}}"></video>
                                                            </div>
                                                        @endforeach
                                                    @elseif($post->category_id == 3)
                                                        @foreach ($post->files as $file)
                                                            <div class="item"> {!!$file->path !!}
                                                                    
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    {{-- <div class="post-meta">
                                                        <div class="linked-image align-left">
                                                            <div class="owl-carousel">
                                                                <div class="item"><img
                                                                        src="{{ $post->profile->profile_path }}"
                                                                        alt="Image 1">
                                                                </div>
                                                                <div class="item"><img
                                                                        src="{{ $post->profile->profile_path }}"
                                                                        alt="Image 2">
                                                                </div>
                                                                <div class="item"><img
                                                                        src="{{ $post->profile->profile_path }}"
                                                                        alt="Image 3">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="we-video-info">
                                                            <ul>

                                                                <li>
                                                                    <span class="views" data-toggle="tooltip"
                                                                        title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip"
                                                                        title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip"
                                                                        title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip"
                                                                        title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li>
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
                                                    </div> --}}
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
        });
    </script>
@endpush
