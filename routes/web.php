<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
Route::get('learn/{post:slug}', [PostController::class, 'show'] );

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('learn', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category','autfffhor'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('learn', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category','author'),
    ]);
});
