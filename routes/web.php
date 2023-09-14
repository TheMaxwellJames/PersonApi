<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;

use App\Http\Controllers\Backend\AuthController;

use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Backend\PortfolioController;

use App\Http\Controllers\Backend\BlogController;

use App\Http\Controllers\Backend\SocialIconController;

use App\Http\Controllers\Backend\MyAccountController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index']);

Route::get('about', [HomeController::class, 'about']);


Route::get('portfolio', [HomeController::class, 'portfolio']);

Route::get('contact', [HomeController::class, 'contact']);

Route::get('blog', [HomeController::class, 'blog']);

Route::get('newsletter', [HomeController::class, 'newsletter']);


Route::get('blog-post/{id}', [HomeController::class, 'blog_post']);


Route::post('contact/post', [HomeController::class, 'contact_post']);

