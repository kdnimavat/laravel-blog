@extends('layouts.app')

@section('content')
    <h4>Category view Post</h4>

    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="category-heading">
                        <h4>{{ $category->name }}</h4>
                    </div>

                    @forelse ($post as $postitem)
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <a href="{{ url('tutorial/' . $category->slug . '/' . $postitem->slug) }}"
                                    class="text-decoration-none">
                                    <h2 class="post-heading">
                                        {{ $postitem->name }}
                                    </h2>
                                </a>
                                <h6>Posted On: {{ $postitem->created_at->format('d-m-Y') }}</h6>
                                <span class="ms-3">Posted By: {{ $postitem->user->name }}</span>
                            </div>
                        </div>
                        
                    @empty
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <div class="post-heading">
                                    No Post Available
                                </div>
                            </div>
                        </div>
                    @endforelse
                    <div class="your-paginate">
                        {{ $post->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
