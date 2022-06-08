<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $category = Catagory::count();
        $post = Post::count();
        $user = User::where('role_as', '0')->count();
        $admin = User::where('role_as', '1')->count();
        // dd($category, $post, $user, $admin);
        return view('admin.dashboard', compact('category', 'post', 'user', 'admin'));
    }
}
