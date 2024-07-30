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
Route::view('web-development','frontend.web-development');
Route::view('kpie-web-design','frontend.kpie-web-design');
Route::view('kpie-e-commerce','frontend.kpie-e-commerce');
Route::view('web-app-development','frontend.web-app-development');
Route::view('kpie-ui-ux-design','frontend.kpie-ui-ux-design');
Route::view('web-optimization','frontend.web-optimization');

Route::view('app-development','frontend.app-development');
Route::view('app-prototyping','frontend.app-prototyping');
Route::view('backend-development','frontend.backend-development');
Route::view('third-party-integration','frontend.third-party-integration');
Route::view('iot-integration','frontend.iot-integration');
Route::view('app-monetization','frontend.app-monetization');

Route::view('seo','frontend.seo');
Route::view('ppc-advertising','frontend.ppc-advertising');
Route::view('social-media-marketing','frontend.social-media-marketing');
Route::view('email-marketing','frontend.email-marketing');
Route::view('kpie-graphic-design','frontend.kpie-graphic-design');
Route::view('orm','frontend.orm');

Route::view('kpie-get-quote','frontend.kpie-get-quote');
Route::view('contact','frontend.contact');
Route::view('kpie-services','frontend.kpie-services');
Route::view('core-values','frontend.core-values');
Route::view('kpie-why-us','frontend.kpie-why-us');
Route::view('our-team','frontend.our-team');

Route::any('/register', function() {
    return route('/login');
});

require __DIR__ . '/auth.php';
// Auth::routes();
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


//the subdomain website routes
Route::middleware(['auth'])->group(function () {
   

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/createproject', [ProjectController::class, 'createproject'])->name('createproject');
    Route::get('/addblog', [ProjectController::class, 'addblog'])->name('addblog');
    Route::get('/editproject/{id}', [ProjectController::class, 'editproject'])->name('editproject');
    Route::get('/editblog/{id}', [ProjectController::class, 'editblog'])->name('editblog');
    Route::get('/changeprojectstatus/{id}', [ProjectController::class, 'changeprojectstatus'])->name('changeprojectstatus');
    Route::get('/changeblogstatus/{id}', [ProjectController::class, 'changeblogstatus'])->name('changeblogstatus');
    Route::get('/addprojectimages/{id}', [ProjectController::class, 'addprojectimages'])->name('addprojectimages');
    Route::post('/saveadditionalimages', [ProjectController::class, 'saveadditionalimages'])->name('saveadditionalimages');
    Route::any('/deleteprojectimage/{id}', [ProjectController::class, 'deleteprojectimage'])->name('deleteprojectimage');
    Route::post('/updateproject/', [ProjectController::class, 'updateproject'])->name('updateproject');
    Route::post('/updateblog/', [ProjectController::class, 'updateblog'])->name('updateblog');
    Route::any('/deleteproject/{id}', [ProjectController::class, 'deleteproject'])->name('deleteproject');
    Route::any('/deleteblog/{id}', [ProjectController::class, 'deleteblog'])->name('deleteblog');
    Route::post('/saveproject', [ProjectController::class, 'saveproject'])->name('saveproject');
    Route::post('/saveblog', [ProjectController::class, 'saveblog'])->name('saveblog');
    Route::get('/viewprojects', [ProjectController::class, 'projects'])->name('projects');
    Route::get('/viewblogs', [ProjectController::class, 'blogs'])->name('blogs');
    Route::get('/addclient', [ProjectController::class, 'createclient'])->name('createclient');
    Route::get('/editclient/{id}', [ProjectController::class, 'editclient'])->name('editclient');
    Route::get('/changeclientstatus/{id}', [ProjectController::class, 'changeclientstatus'])->name('changeclientstatus');
    Route::post('/updateclient/', [ProjectController::class, 'updateclient'])->name('updateclient');
    Route::any('/deleteclient/{id}', [ProjectController::class, 'deleteclient'])->name('deleteclient');
    Route::post('/saveclient', [ProjectController::class, 'saveclient'])->name('saveclient');
    Route::get('/viewclients', [ProjectController::class, 'clients'])->name('clients');
    Route::any('/deletewaybill/{id}', [ProjectController::class, 'deletewaybill'])->name('deletewaybill');
    

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
    Route::get('home', [HomeController::class, 'dashboard'])->name('admin_home')->name('dashboard');
    Route::get('/view_details/{id}', [ProjectController::class, 'viewDetails'])->name('view_details');


});
Route::get('/{slug}', [ProjectController::class, 'slug'])->name('slug')->middleware('auth');

