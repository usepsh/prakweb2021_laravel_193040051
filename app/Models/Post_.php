<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Sasuke Shippuden",
            "slug" => "sasuke-shippuden",
            "author" => "Usep Yys",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit rerum ab quas, maiores id a est velit, ut explicabo magni fuga, placeat quaerat culpa. Esse, quisquam vitae. Aspernatur, laudantium illo. Dignissimos saepe officiis nostrum quidem perspiciatis quisquam ab deserunt sapiente, fugit dolor cum architecto corporis repudiandae quia eius adipisci, quos maiores aliquid deleniti minus cumque, perferendis ea fugiat aliquam. Recusandae dolorem omnis nihil eos ducimus obcaecati, incidunt quaerat neque facere impedit fugit perferendis, quis accusamus delectus quisquam laudantium culpa ea?"
        ],
        [
            "title" => "Sakura Shippuden",
            "slug" => "sakura-shippuden",
            "author" => "Jennie Yys",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit rerum ab quas, maiores id a est velit, ut explicabo magni fuga, placeat quaerat culpa. Esse, quisquam vitae. Aspernatur, laudantium illo. Dignissimos saepe officiis nostrum quidem perspiciatis quisquam ab deserunt sapiente, fugit dolor cum architecto corporis repudiandae quia eius adipisci, quos maiores aliquid deleniti minus cumque, perferendis ea fugiat aliquam. Recusandae dolorem omnis nihil eos ducimus obcaecati, incidunt quaerat neque facere impedit fugit perferendis, quis accusamus delectus quisquam laudantium culpa ea?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
