<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PostRequest;


class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }

    public function create()
    {
        $category = Catagory::where('status', '0')->get();
        return view('admin.post.create', compact('category'));
    }

    public function store(PostRequest $request)
    {
        // dd($request);
        // $data = $request->validate();

        $post = new Post;
        $post->category_id = $request['category_id'];
        $post->name = $request['name'];
        $post->slug = Str::slug($request['slug']);
        $post->description = $request['description'];
        $post->status = $request->status == true ? '1' : '0';
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect('admin/post')->with('status', 'Post Added Successful');
    }

    public function edit($post_id)
    {
        $category = Catagory::where('status', '0')->get();
        $post = Post::find($post_id);
        return view('admin.post.edit', compact('post', 'category'));
    }

    public function update(PostRequest $request, $post_id)
    {
        // $data = $request->validated();

        $post = Post::find($post_id);
        $post->category_id = $request['category_id'];
        $post->name = $request['name'];
        $post->slug = Str::slug($request['slug']);
        $post->description = $request['description'];
        $post->status = $request->status == true ? '1' : '0';
        $post->created_by = Auth::user()->id;
        $post->update();

        return redirect('admin/post')->with('status', 'Post Updated Successful');
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('admin/post')->with('status', 'Post Deleted Successful');
    }
}
