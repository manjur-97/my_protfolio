@extends('frontend.app')
@push('css')
    <style>
      .project-details{
        max-height: 100px;
        overflow: hidden;
        text-align: justify;
      }
      .project-title{
       font-size: 20px;
      }
    </style>
@endpush


@section('pages')
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row merged20" id="page-contents">

                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <div class="about">
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Project Title</th>
                                                    <th>Descreption</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="topic-data">
                                                        <img src="assets/frontend/images/resources/forum-author1.png" alt="">
                                                        <span>sarah smith</span>
                                                        <em>Participant</em>
                                                    </td>
                                                    <td class="date-n-reply">
                                                        <h1 class="project-title">AWT Hall Booking System</h1>
                                                        
                                                    </td>
                                                    <td>
                                                        <p class="project-details">Nulla sodales, metus non rutrum condimentum, nunc dolor rhoncus
                                                            arcu, at ultrices dolor libero in tellus. Phasellus quis neque
                                                            eu diam eget turpis dapibus, in dictum sem gravida. Aliquam
                                                            lacinia est vitae elit blandit.
                                                            Nulla sodales, metus non rutrum condimentum, nunc dolor rhoncus
                                                            arcu, at ultrices dolor libero in tellus. Phasellus quis neque
                                                            eu ante scelerisque luctus. Aenean tincidunt accumsan tortor,
                                                            eget fringilla dolor pretium ut. Fusce semper diam eget turpis
                                                            dapibus, in dictum sem gravida. Aliquam lacinia est vitae elit
                                                            blandit, quis hendrerit mauris convallis.
                                                            Nulla sodales, metus non rutrum condimentum, nunc dolor rhoncus
                                                            arcu, at ultrices dolor libero in tellus. Phasellus quis neque
                                                            eu ante scelerisque luctus. Aenean tincidunt accumsan tortor,
                                                            eget fringilla dolor pretium ut. Fusce semper diam eget turpis
                                                            dapibus, in dictum sem gravida. Aliquam lacinia est vitae elit
                                                            blandit, quis hendrerit mauris convallis.
                                                        </p>
                                                        <a href="#" class="btn btn-sm btn-primary">Details</a>
                                                    </td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
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
