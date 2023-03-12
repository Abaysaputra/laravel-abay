<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/learn', function () {
    $blog_posts = [
        [
            "title" =>  "Kelana Bentala",
            "slug" => "Kelana Bentala",
            "author" => "Novi Dwi Arianti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos illo non aliquam facilis mollitia laboriosam? Est earum quibusdam nostrum commodi quos error libero sequi ducimus alias, in, officiis sed maiores."
    
        ],[
            "title" => "Garis Waktu",
            "slug" => "Garis Waktu",
            "author" => "Adi Bayu Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dolorum dolores veritatis deserunt ducimus quae est, vero ipsam enim, veniam, iste natus iusto autem. Cupiditate eum debitis magnam eos illum nostrum omnis nulla quas unde velit iste facere, porro dolorem. Officiis voluptatem laboriosam corporis recusandae at voluptatibus quaerat adipisci accusantium, molestias consectetur, nisi aliquid sunt expedita, totam ducimus? Officiis cumque architecto rerum saepe rem aperiam optio consequuntur soluta repellendus animi in esse ipsum illo ex corporis veritatis veniam quos, temporibus, mollitia et. Aliquid fuga obcaecati assumenda quasi autem voluptatem commodi a minus natus amet possimus incidunt tenetur, aliquam corrupti ab?"
        ],
        
        ];
    return view('learn',[
        "title" => "learn",
        "posts"  => $blog_posts
    ]);
});


// single post
Route::get('learn/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" =>  "Kelana Bentala",
            "slug" => "Kelana Bentala",
            "author" => "Novi Dwi Arianti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos illo non aliquam facilis mollitia laboriosam? Est earum quibusdam nostrum commodi quos error libero sequi ducimus alias, in, officiis sed maiores."
    
        ],[
            "title" => "Garis Waktu",
            "slug" => "Garis Waktu",
            "author" => "Adi Bayu Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dolorum dolores veritatis deserunt ducimus quae est, vero ipsam enim, veniam, iste natus iusto autem. Cupiditate eum debitis magnam eos illum nostrum omnis nulla quas unde velit iste facere, porro dolorem. Officiis voluptatem laboriosam corporis recusandae at voluptatibus quaerat adipisci accusantium, molestias consectetur, nisi aliquid sunt expedita, totam ducimus? Officiis cumque architecto rerum saepe rem aperiam optio consequuntur soluta repellendus animi in esse ipsum illo ex corporis veritatis veniam quos, temporibus, mollitia et. Aliquid fuga obcaecati assumenda quasi autem voluptatem commodi a minus natus amet possimus incidunt tenetur, aliquam corrupti ab?"
        ],
        
        ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"]===$slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
