@extends('frontend.app')
@push('css')
    <style>
        .nav-link {
            min-width: 180px;
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
                                        <div class="personal">
                                            <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                                                <li class="nav-item">
                                                    <a href="#basic" class="nav-link active show" data-toggle="tab">Basic
                                                        info</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="basic">
                                                    <ul class="basics">
                                                        <li><i class="ti-user"></i>sarah grey</li>
                                                        <li><i class="ti-map-alt"></i>live in Dubai</li>
                                                        <li><i class="ti-mobile"></i>+1-234-345675</li>
                                                        <li><i class="ti-email"></i>yourmail@email.com</li>
                                                        <li><i class="ti-world"></i>www.yoursite.com</li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">

                                                <li class="nav-item">
                                                    <a href="#location" class="nav-link active show"
                                                        data-toggle="tab">location</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane fade active show" id="location" role="tabpanel">
                                                    <div class="location-map">
                                                        <div id="map-canvas" style="position: relative; overflow: hidden;">
                                                            <div
                                                                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                                <div class="gm-err-container">
                                                                    <div class="gm-err-content">
                                                                        <div class="gm-err-icon"><img
                                                                                src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png"
                                                                                alt="" draggable="false"
                                                                                style="user-select: none;"></div>
                                                                        <div class="gm-err-title">Oops! Something went
                                                                            wrong.</div>
                                                                        <div class="gm-err-message">This page didn't load
                                                                            Google Maps correctly. See the JavaScript
                                                                            console for technical details.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">

                                                <li class="nav-item">
                                                    <a href="#work" class="nav-link active show" data-toggle="tab">work
                                                        and education</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane fade active show" id="work" role="tabpanel">
                                                    <div>

                                                        <a href="#" title="">Envato</a>
                                                        <p>work as autohr in envato themeforest from 2013</p>
                                                        <ul class="education">
                                                            <li><i class="ti-facebook"></i> BSCS from Oxford University</li>
                                                            <li><i class="ti-twitter"></i> MSCS from Harvard Unversity</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">

                                                <li class="nav-item">
                                                    <a href="#interest " class="nav-link active show"
                                                        data-toggle="tab">interests</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane fade active show" id="interest" role="tabpanel">
                                                    <ul class="basics">
                                                        <li>Footbal</li>
                                                        <li>internet</li>
                                                        <li>photography</li>
                                                    </ul>
                                                </div>

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
