<?php

namespace App\Providers;

use App\Repositories\Interfaces\ProfileRepositoryInterface;
use App\Repositories\Interfaces\SocialMediaRepositoryInterface;
use App\Repositories\ProfileRepository;
use App\Repositories\SocialMediaRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(SocialMediaRepositoryInterface::class, SocialMediaRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(ProfileRepositoryInterface $profile): void
    {
        View::composer('*', function ($view) use ($profile) {
            $profile = $profile->find_letest_data();
            $view->with('profile', $profile);
        });
    }
}
