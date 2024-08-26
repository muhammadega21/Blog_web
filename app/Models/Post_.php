<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            'title' => "Judul Post Pertama",
            'slug' => "judul-post-pertama",
            'author' => "Muhammad Ega Dermawan",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit animi maxime odit autem reiciendis possimus minima, maiores adipisci blanditiis, vitae, consectetur eaque repellat? Nihil porro pariatur fugit sint tempora fuga dicta laudantium sit quidem quis et alias libero fugiat ducimus repellendus vel nam, amet, ullam illo modi officia. Inventore dicta illum delectus ipsa tenetur nihil repudiandae veniam reiciendis quos quae deserunt eaque numquam, voluptate neque incidunt quod eius repellendus ratione vel nam nostrum, reprehenderit totam! Possimus, quidem in! Ipsa!"
        ],
        [
            'title' => "Judul Post Kedua",
            'slug' => "judul-post-kedua",
            'author' => "Fahmi Abdul Aziz",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos pariatur dolore aut placeat! Repellendus dignissimos ipsa libero doloribus, saepe commodi quam, itaque nesciunt hic, quod mollitia suscipit est. Ipsam, molestiae animi iste laborum consectetur dignissimos aliquid tenetur facilis, eaque culpa voluptas. Ab cumque doloremque, possimus eveniet accusamus a ipsam culpa adipisci ducimus sed numquam rem quasi earum dolore doloribus voluptate corporis facere. Ipsum accusamus, nesciunt alias adipisci distinctio molestias blanditiis necessitatibus, vel praesentium dignissimos, aliquid fuga sint explicabo nisi numquam odit porro facilis eveniet quaerat laboriosam quae harum labore doloribus. Recusandae eum quasi maiores magnam quidem odio alias repellat reiciendis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        //  $post = [];
        // foreach($posts as $p){
        //     if($p['slug'] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
