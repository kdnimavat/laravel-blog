@extends('layouts.master')

@section('title', 'View Post')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>View Comments</h4>
            </div>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Id</th>
                        <th>User Id</th>
                        <th>Comment</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->post_id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->comment_body }}</td>
                            <td><a href="{{ asset('admin/delete-comments/' . $item->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    </div>
    </div>

@endsection
