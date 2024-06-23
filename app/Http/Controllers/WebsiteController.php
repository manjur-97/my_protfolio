<?php

namespace App\Http\Controllers;

use App\Repositories\SocialMediaRepository;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $socialMediaRepository;
    public function __construct(SocialMediaRepository $socialMediaRepository)
    {
        $this->socialMediaRepository = $socialMediaRepository;
    }
    public function home()
    {

        $social_medias = $this->socialMediaRepository->all();
       
        return view('frontend.pages.home' , compact('social_medias'));
    }
}
