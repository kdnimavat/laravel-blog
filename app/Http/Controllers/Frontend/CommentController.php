<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $validate = Validator::make($request->all(), ['comment_body' => 'required | string']);

            if ($validate->fails()) {
                return redirect()->back()->with('status', 'Comment area is mendatory');
            }

            $post = Post::where('slug', $request->post_slug)->where('status', '0')->first();

            if ($post) {
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('status', 'Commented successful');
            } else {
                return redirect()->back()->with('status', 'No such a post found');
            }
        } else {
            return redirect('login')->with('status', 'Login first to comment');
        }
    }

    public function destroy(Request $request)
    {
        if (Auth::check()) {
            $comment = Comment::where('id', $request->comment_id)->where('user_id', Auth::user()->id)->first();
            $comment->delete();
            return response()->json([
                'message' => 200,
                'status' => 'Comment deleted successful'
            ]);
        } else {
            return response()->json([
                'message' => 401,
                'status' => 'Login  to delete this comment'
            ]);
        }
    }
}
