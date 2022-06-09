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
            $comment = Comment::where('id', $request->comment_id)
                ->where('user_id', Auth::user()->id)
                ->first();

            if ($comment) {
                $comment->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Comment Deleted Succesfully'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Something Went Wrong'
                ]);
            }
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Login To Delete This Comment'
            ]);
        }
    }

    public function show()
    {
        $comments = Comment::all();
        return view('admin.comments.view', compact('comments'));
    }

    public function deleteComment($comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->delete();
        return redirect('admin/comments')->with('status', 'Comment Deleted Successful');
    }
}
