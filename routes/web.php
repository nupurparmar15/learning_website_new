<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hellocontroller1;
use App\Http\Controllers\Index_Controller;
use App\Http\Controllers\Aboutus_Controller;
use App\Http\Controllers\Vision_controller;
use App\Http\Controllers\Blog_controller;
use App\Http\Controllers\Service_controller;
use App\Http\Controllers\FeedbackController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::any('hello', [Hellocontroller1::class,'show']);

Route::get('/', [Index_controller::class,'show']);
Route::get('about', [Aboutus_controller::class,'show']);
Route::get('vision', [Vision_controller::class,'show']);
Route::get('blog', [Blog_controller::class,'show']);
Route::get('BE-BTech-cse-internship-training-institute-jodhpur', [Blog_controller::class,'show_blog1']);
Route::get('How-To-Find-Internships-In -Jodhpur-A-Step-By-Step-Guide-by-oilablearning', [Blog_controller::class,'show_blog2']);
Route::get('get-the-best-php-training-In-Jodhpur-oilablearning', [Blog_controller::class,'show_blog3']);
Route::get('Best-Way-to-Learn-Android-app-development-Blog-OilabLearning', [Blog_controller::class,'show_blog4']);
Route::get('top-it-colleges-in-jodhpur-2021', [Blog_controller::class,'show_blog5']);
Route::get('web-development-training-in-pali', [Blog_controller::class,'show_blog6']);
Route::get('android-development-training', [Blog_controller::class,'show_blog7']);

//contact
Route::get('contact', [FeedbackController::class,'index']);
Route::post('contact', [FeedbackController::class,'contactfeedback']);

//intership form
Route::post('internship', [Index_Controller::class,'internship_enquiry']);


Route::get('how-to-learn-php', [Service_Controller::class,'show_service1']);
Route::get('python-training', [Service_Controller::class,'show_service2']);
Route::get('mern-stack-training', [Service_Controller::class,'show_service3']);
Route::get('mean-stack-training', [Service_Controller::class,'show_service4']);
Route::get('web-development-training', [Service_Controller::class,'show_service5']);
Route::get('digital-marketing-training-in-jodhpur', [Service_Controller::class,'show_service6']);
Route::get('mobile-app-development-training', [Service_Controller::class,'show_service7']);
Route::get('faq', [Index_Controller::class,'show_faq']);
Route::get('terms', [Index_Controller::class,'show_term']);
Route::get('refund', [Index_Controller::class,'show_refund']);
Route::get('privacy', [Index_Controller::class,'show_privacy']);
Route::get('gallery', [Index_Controller::class,'show_gallery']);
Route::get('internship', [Index_Controller::class,'show_internship']);
