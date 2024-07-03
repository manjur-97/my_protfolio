@extends('frontend.app')
@section('title', $blog->title)
@section('meta_description', $meta_description."...")
@section('meta_keywords', '')

@section('og_title', $blog->title)
@section('og_description', $meta_description."...")
@section('og_image',$blog->banner)

@push('css')
    <style>
        .project-details {
            max-height: 100px;
            overflow: hidden;
            text-align: justify;
        }

        .project-title {
            font-size: 20px;
        }
    </style>
@endpush


@section('pages')
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 bg-light pb-2">
                        <div class="row merged20" id="page-contents">

                            <div class="offset-lg-1 col-lg-10">
                                <div class="detail-page">
                                    <div class="detail-top">
                                        <img src="{{ $blog->banner }}" alt="">

                                    </div>
                                    <div class="detail-meta">
                                        <header>
                                            <h1>{{ $blog->title }}</h1>
                                        </header>


                                        <div class="post-time">
                                            <div class="author-thumb">
                                                <img src="images/resources/chatlist2.jpg" alt="">
                                                <span>{{ $blog->profile->name }}</span>
                                            </div>
                                            <span class="post-date">
                                                <i class="fa fa-calendar"></i>
                                                <a title="" href="#">{{ $blog->created_at }}</a>
                                            </span>

                                        </div>
                                        <article>
                                            <p class="text-justify">
                                                {{ $blog->descreption }}
                                            </p>
                                        </article>


                                        <figure>

                                            <div class="row">
                                                @foreach ($blog->files as $file)
                                                    <div class=" col-lg-4 m-1"><img
                                                            src="{{ asset('assets/frontend/images/resources/blog-detail2.jpg') }}"
                                                            alt="" width="100%"></div>
                                                @endforeach
                                            </div>



                                        </figure>

                                        <div class="tag-n-cat">
                                            <div class="tags">
                                                <span><i class="fa fa-tags"></i> Post Tags:</span>
                                                <a href="#" title="">News</a>
                                                <a href="#" title="">ideas</a>
                                                <a href="#" title="">collection</a>
                                                <a href="#" title="">exclusive</a>
                                                <a href="#" title="">features</a>
                                            </div>

                                        </div>

                                        <div class="gap-60 no-top">
                                            <div class="comment-area">
                                                <h4 class="comment-title">
                                                    {{ $blog->comments->count() == 0 ? '' : $blog->comments->count() }} comments
                                                </h4>
                                                @if ($blog->comments->count() == 0)
                                                    <ul class="comments">
                                                        <li>No Comment Found</li>
                                                    </ul>
                                                @endif

                                                @foreach ($blog->comments as $comment)
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
                                                                                    <h6>{{ $blog->profile->name }}
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
                                        </div><!-- comments sec -->
                                        <div class="gap-60 no-gap">
                                            <h4 class="comment-title">Leave a Comment</h4>
                                            <div class="contact-form">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <input type="text" id="input" required="required">
                                                        <label class="control-label" for="input">First &amp; Last
                                                            Name</label><i class="mtrl-select"></i>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" required="required">
                                                        <label class="control-label" for="input">Email@</label><i
                                                            class="mtrl-select"></i>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" required="required">
                                                        <label class="control-label" for="input">Subject</label><i
                                                            class="mtrl-select"></i>
                                                    </div>

                                                    <div class="form-group">
                                                        <textarea rows="4" id="textarea" required="required"></textarea>
                                                        <label class="control-label" for="textarea">Message</label><i
                                                            class="mtrl-select"></i>
                                                    </div>
                                                    <div class="submit-btns">
                                                        <button class="mtr-btn signup" type="button"><i>Submit</i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
                                <h4 class="widget-title">Socials Contact Info</h4>
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
                            </div>

                            <!-- recent activites -->
                        </aside>
                    </div><!-- sidebar -->
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
