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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Usep Yys",
        "email" => "useposd95@gmail.com",
        "image" => "1.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
