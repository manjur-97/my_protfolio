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
                    <div class=" col-lg-12">
                        <div class="blog-sec">
                            <div class="post-filter-sec">
                                
                                <div class="purify">
                                    <span>filter by</span>
                                    <select style="display: none;">
                                        <option>All categories</option>
                                        <option>By Favouirtes</option>
                                        <option>By Likes</option>
                                    </select>
                                    
                                    

                                    <a href="#" title=""><i class="ti-search m-2"></i>Search</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="g-post-classic">
                                        <figure>
                                            <img alt="" src="images/resources/bloggrid-1.jpg">
                                            <i class="fa fa-video-camera"></i>
                                        </figure>
                                        <div class="g-post-meta">
                                            <div class="post-title">
                                                <h4><a title="" href="#">how to create content that get
                                                        traffic</a></h4>
                                                <p>We got really awesome shots for the new catalog, Here’s a photo from last
                                                    month’s photoshoot. </p>
                                                <span class="p-date">by <a href="#" title="">JACK Sparo</a> - 12
                                                    hours ago </span>
                                            </div>
                                            <div class="g-post-ranking">
                                                <a title="" href="#" class="likes"><i
                                                        class="fa fa-heart-o"></i>10 likes</a>
                                                <a title="" href="#" class="coments"><i
                                                        class="fa fa-comment-o"></i>5 comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <button class="btn-view btn-load-more">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    
@endpush
