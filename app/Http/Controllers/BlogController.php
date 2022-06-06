<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function addPost(Request $request)
    {
        // dd($request);
        $data = new Post();
        $data->post_name = $request->post_name;
        $data->post_catagory = $request->post_catagory;
        $data->post_body = $request->post_body;
        $data->save();
    }
    public function updateBlog($id)
    {
        $data = Post::find($id);
        return view('blog.updateBlog', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = Post::find($request->id);
        $data->post_name = $request->post_name;
        $data->post_catagory = $request->post_catagory;
        $data->post_body = $request->post_body;
        $data->save();
        return redirect('blog');
    }
}