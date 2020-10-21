<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::all();

        return view('pages.home', compact('categories'));
    }

    public function show($slug)
    {
        $data = BlogCategory::all()->where('slug', $slug);
        $data = collect($data)->toArray();
        foreach ($data as $el) {
            $id = $el['id'];
            $title = $el['title'];
        }

        $post = BlogPost::all()->where('category_id', $id);
//
        return view('pages.posts', compact('post', 'title'));
    }
}
