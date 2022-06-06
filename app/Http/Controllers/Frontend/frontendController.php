<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Post;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function viewCategoryPost($category_slug)
    {
        $category = Catagory::where('slug', $category_slug)->where('status', '0')->first();
        if ($category) {
            $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(3);
            return view('frontend.post.index', compact('post', 'category'));
        } else {
            return redirect('/');
        }
    }

    public function viewPost(string $category_slug, string $post_slug)
    {
        $category = Catagory::where('slug', $category_slug)->where('status', '0')->first();
        if ($category) {
            $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status', '0')->first();
            return view('frontend.post.view', compact('post', 'category'));
        } else {
            return redirect('/');
        }
    }
}