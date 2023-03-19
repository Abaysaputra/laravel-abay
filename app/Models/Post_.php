<?php

namespace App\Models;


class Post 
{
    static  $blog_posts = [
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

        public static function all()
        {
            return collect(self::$blog_posts);
        }


        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstwhere('slug',$slug);
        }
}
