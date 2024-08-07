<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebsiteController::class, 'home']);
Route::get('/about/manjur-rahman-software-developer', [WebsiteController::class, 'about']);
Route::get('/exprence/manjur-rahman-software-developer', [WebsiteController::class, 'exprence']);
Route::get('/skill/manjur-rahman-software-developer', [WebsiteController::class, 'skill']);
Route::get('/project/manjur-rahman-software-developer', [WebsiteController::class, 'project']);
Route::get('/blog/manjur-rahman-software-developer', [WebsiteController::class, 'blog']);
Route::get('/blog/{slog}', [WebsiteController::class, 'blog_details']);
Route::get('/courses', [WebsiteController::class, 'courses']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
