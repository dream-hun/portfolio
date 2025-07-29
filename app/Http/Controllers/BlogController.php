<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;

final class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('pages.blog.index', ['posts' => $posts]);
    }

    public function show($slug)
    {

        $post = Post::where('slug', $slug)->first();

        return view('pages.blog.show', ['post' => $post]);
    }
}
