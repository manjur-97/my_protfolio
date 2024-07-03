<?php
$active_url = Request::segment(1);

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'default, keywords')">
    <title>@yield('title')</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', '')">
    <meta property="og:description" content="@yield('og_description', '')">
    <meta property="og:image" content="@yield('og_image', '')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="article">


    <link rel="icon" href="{{ asset('/assets/frontend/images/fav.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/responsive.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/2.3.4/assets/owl.theme.default.min.css">

    @stack('css')

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="postoverlay"></div>


        <section>
            <div class="feature-photo">
                <figure><img src="{{ asset('assets/frontend/images/profile/manjur-rahman-web-developer.jpg') }}"
                        alt="">
                </figure>
                <div class="add-btn">

                    <a href="#" title="" data-ripple="">Download CV</a>
                    <a href="#" title="" data-ripple="">Contact</a>
                </div>

                <div class="container-fluid">
                    <div class="row merged">
                        <div class="col-lg-2 col-sm-3">
                            <div class="user-avatar">
                                <figure>
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset($profile->profile_path) }}" alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <div class="timeline-info">
                                <ul>
                                    <li class="admin-name">
                                        <h5>{{ $profile->name }}</h5>
                                        <span>{{ $profile->designation }}</span>
                                    </li>
                                    <li>
                                        <a class="{{ $active_url == '' ? 'active' : '' }}" href="{{ url('/') }}"
                                            title="" data-ripple="">Home</a>

                                        <a class="{{ $active_url == 'about' ? 'active' : '' }}"
                                            href="{{ url('about/manjur-rahman-software-developer') }}" title=""
                                            data-ripple="">About</a>
                                        <a class="{{ $active_url == 'exprence' ? 'active' : '' }}"
                                            href="{{ url('exprence/manjur-rahman-software-developer') }}"
                                            title="" data-ripple="">Exprence</a>
                                        <a class="{{ $active_url == 'skill' ? 'active' : '' }}"
                                            href="{{ url('skill/manjur-rahman-software-developer') }}" title=""
                                            data-ripple="">Skills</a>
                                        <a class="{{ $active_url == 'project' ? 'active' : '' }}"
                                            href="{{ url('project/manjur-rahman-software-developer') }}" title=""
                                            data-ripple="">Projects</a>
                                        <a class="{{ $active_url == 'blog' ? 'active' : '' }}"
                                            href="{{ url('blog/manjur-rahman-software-developer') }}" title=""
                                            data-ripple="">Blog</a>
                                        <a class="{{ $active_url == 'courses' ? 'active' : '' }}"
                                            href="{{ url('courses') }}" title="" data-ripple="">Courses</a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area -->
        @yield('pages')


        <footer>
            <div class="bottombar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="copyright">© Manjur Rahman 2024. All rights reserved.</span>
                            <i><img src="{{ asset('assets/frontend/images/credit-cards.png') }}" alt=""></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/frontend/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
    @stack('script')
</body>


</html>
