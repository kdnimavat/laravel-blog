@extends('layouts.app')

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="category-heading">
                        <h4 class="mb-0">
                            {!! $post->name !!}
                        </h4>
                    </div>

                    <div class="mt-3">
                        <h6>{{ $post->category->name . ' / ' . $post->name }}</h6>
                    </div>

                    <div class="card card-shadow mt-4">
                        <div class="card-body">
                            {!! $post->description !!}
                        </div>
                    </div>
                    <div class="comment-area mt-4">
                        @if (session('status'))
                            <h6 class="alert alert-warning mb-3">{{ session('status') }}</h6>
                        @endif
                        <div class="card card-body">
                            <h6 class="card-title">Leave a Comment</h6>
                            <form action="{{ url('comments') }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                                <textarea name="comment_body" class="form-control" rows="3" required></textarea>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>

                        @forelse ($post->comments as $comment)
                            <div class="comment-container card card-body shadow-sm mt-3">
                                <div class="detail-area">
                                    <h6 class="user-name mb-1">
                                        @if ($comment->user)
                                            {{ $comment->user->name }}
                                        @endif
                                        <small class="ms-3 text-primary">Commented on:
                                            {{ $comment->created_at->format('d-m-Y') }}</small>
                                    </h6>
                                    <p class="user-name mb-1">
                                        {!! $comment->comment_body !!}
                                    </p>
                                </div>

                                @if (Auth::check() && Auth::id() == $comment->user_id)
                                    <div>
                                        <button type="submit" value="{{ $comment->id }}}"
                                            class="deleteComment btn btn-danger btn-sm me-2">Delete</button>
                                    </div>
                                @endif
                            </div>
                        @empty
                            <h6>No comments yet.</h6>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.deleteComment', function() {
                if (confirm('Are you sure to delete this comment')) {
                    var thisClicked = $(this);
                    var comment_id - thisClicked.val();

                    $.ajax({
                        type: 'POST',
                        url: '/delete-comment',
                        data {
                            'comment_id': comment_id
                        }
                        success: function(res) {
                            if (res.message = 200) {
                                thisClicked.closest('.comment-container').remove();
                                alert(res.status);
                            } else {
                                alert(res.status);
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
