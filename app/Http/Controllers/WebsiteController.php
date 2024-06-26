<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Repositories\PostRepository;
use App\Repositories\SocialMediaRepository;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $postRepository;
    private $socialMediaRepository;
    public function __construct(SocialMediaRepository $socialMediaRepository , PostRepository $postRepository)
    {
        $this->socialMediaRepository = $socialMediaRepository;
        $this->postRepository = $postRepository;
    }
    public function home()
    {

        $social_medias = $this->socialMediaRepository->all();
        $posts = $this->postRepository->all();
        
        return view('frontend.pages.home' , compact('social_medias','posts'));
    }
}
