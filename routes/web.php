<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FrontendController;


Route::view('stripepay','stripepay');
Route::get('/', [FrontendController::class, 'index'])->name('homepage');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/projects', [FrontendController::class, 'products'])->name('products');
Route::get('/projectdetails/{id}', [FrontendController::class, 'projectdetails'])->name('projectdetails');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::post('/saveContactUs', [FrontendController::class, 'saveContactUs'])->name('saveContactUs');


Route::any('/register', function() {
    return route('/login');
});

require __DIR__ . '/auth.php';
// Auth::routes();
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


//the subdomain website routes
Route::middleware(['auth'])->group(function () {
   


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::post('/update-profile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update-profile');
    Route::get('/create-beat', [App\Http\Controllers\BeatController::class, 'create_beat'])->name('create-beat');
    Route::post('/save-beat', [App\Http\Controllers\BeatController::class, 'save_beat'])->name('save-beat');
    Route::get('/user-storage', [App\Http\Controllers\BeatController::class, 'storage'])->name('storage');
    Route::get('/user-storage/{slug}', [App\Http\Controllers\BeatController::class, 'storageSlug'])->name('storageSlug');
    Route::post('/create-folder', [App\Http\Controllers\BeatController::class, 'createFolder'])->name('createFolder');
    Route::post('/edit-beat/{id}', [App\Http\Controllers\BeatController::class, 'edit_beat'])->name('edit-beat');
    Route::get('/delete-beat/{id}', [App\Http\Controllers\BeatController::class, 'delete_beat'])->name('delete-beat');
    Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
    Route::get('home', [HomeController::class, 'dashboard'])->name('admin_home')->name('dashboard');
    Route::get('/view_details/{id}', [ProjectController::class, 'viewDetails'])->name('view_details');


});
Route::get('/{slug}', [ProjectController::class, 'slug'])->name('slug')->middleware('auth');

