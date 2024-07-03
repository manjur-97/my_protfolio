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
    public function __construct(SocialMediaRepository $socialMediaRepository, PostRepository $postRepository)
    {
        $this->socialMediaRepository = $socialMediaRepository;
        $this->postRepository = $postRepository;
    }
    public function home()
    {

        $social_medias = $this->socialMediaRepository->all();
        $posts = $this->postRepository->all();

        return view('frontend.pages.home', compact('social_medias', 'posts'));
    }

    public function about()
    {

        $social_medias = $this->socialMediaRepository->all();
        return view('frontend.pages.about', compact('social_medias'));
    }
    public function skill()
    {

        $social_medias = $this->socialMediaRepository->all();
        return view('frontend.pages.skill', compact('social_medias'));
    }
    public function exprence()
    {

        $social_medias = $this->socialMediaRepository->all();
        return view('frontend.pages.exprence', compact('social_medias'));
    }
    public function blog()
    {

        $social_medias = $this->socialMediaRepository->all();
        return view('frontend.pages.blog', compact('social_medias'));
    }
    public function blog_details($slog)
    {
        $blog = $this->postRepository->find($slog);

        $meta_description = mb_substr($blog->descreption, 0, 160);

        $this->postRepository->views_count($blog->id);

        $social_medias = $this->socialMediaRepository->all();
        
        return view('frontend.pages.blog_details', compact('social_medias', 'blog', 'meta_description'));
    }
    public function project()
    {

        $social_medias = $this->socialMediaRepository->all();
        return view('frontend.pages.project', compact('social_medias'));
    }
}
