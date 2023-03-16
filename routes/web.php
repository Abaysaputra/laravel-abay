<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adi Bayu",
        "email" => "abay@gmail.com",
        "image" => "abay.jpg"
    ]);
});
Route::get('/learn', [PostController::class,'index']);
// single post
Route::get('learn/{slug}', [PostController::class, 'show'] );
