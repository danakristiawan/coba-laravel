<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    use HasFactory;

    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama ',
            'slug' => 'judul-post-pertama',
            'author' => 'Shandika Galih',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi consequuntur aut sed alias esse, vel nam cumque eaque
excepturi voluptatibus, ad consectetur quod adipisci eos doloremque dolores fugit id! Iure natus labore dicta corrupti!
Debitis assumenda nobis repudiandae, voluptates omnis numquam blanditiis vero, laudantium saepe laborum architecto
animi? Odio mollitia sint eos veniam earum. Expedita quis, molestias cupiditate, voluptas doloribus at odit tenetur
perspiciatis quod dolores, quasi eius optio sint dolorum odio sit totam? Ad, quibusdam cupiditate ipsa molestias nulla
facere! Explicabo repellendus nihil nisi repellat ullam ratione deleniti natus minus eos, ex, inventore odit, expedita
non porro odio cum.'
        ],
        [
            'title' => 'Judul Post Kedua ',
            'slug' => 'judul-post-kedua',
            'author' => 'Doddy Ferdiansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi consequuntur aut sed alias esse, vel nam cumque eaque
excepturi voluptatibus, ad consectetur quod adipisci eos doloremque dolores fugit id! Iure natus labore dicta corrupti!
Debitis assumenda nobis repudiandae, voluptates omnis numquam blanditiis vero, laudantium saepe laborum architecto
animi? Odio mollitia sint eos veniam earum. Expedita quis, molestias cupiditate, voluptas doloribus at odit tenetur
perspiciatis quod dolores, quasi eius optio sint dolorum odio sit totam? Ad, quibusdam cupiditate ipsa molestias nulla
facere! Explicabo repellendus nihil nisi repellat ullam ratione deleniti natus minus eos, ex, inventore odit, expedita
non porro odio cum.'
        ],
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
