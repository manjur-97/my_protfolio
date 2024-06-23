<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf8mb4" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Manjur Rahman</title>
    <link rel="icon" href="{{ asset('/assets/frontend/images/fav.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/responsive.css') }}">

    @stack('css')

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="postoverlay"></div>


        <section>
            <div class="feature-photo">
                <figure><img src="{{ asset('assets/frontend/images/profile/manjur-rahman-web-developer.jpg') }}" alt="">
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
                                    <img src="{{ asset($profile->profile_path) }}"
                                        alt="">

                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <div class="timeline-info">
                                <ul>
                                    <li class="admin-name">
                                        <h5>{{$profile->name}}</h5>
                                        <span>{{$profile->designation}}</span>
                                    </li>
                                    <li>
                                        <a class="active" href="time-line.html" title="" data-ripple="">Feeds</a>
                                        <a class="" href="timeline-photos.html" title=""
                                            data-ripple="">About</a>
                                        <a class="" href="timeline-photos.html" title=""
                                            data-ripple="">Exprence</a>
                                        <a class="" href="timeline-videos.html" title=""
                                            data-ripple="">Skills</a>
                                        <a class="" href="timeline-friends.html" title=""
                                            data-ripple="">Resume</a>
                                        <a class="" href="timeline-groups.html" title=""
                                            data-ripple="">Blog</a>

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
                            <i><img src="{{asset('assets/frontend/images/credit-cards.png')}}" alt=""></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
      
    </div>
   

    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>

</body>


</html>
