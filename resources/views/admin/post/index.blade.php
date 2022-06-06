@extends('layouts.master')

@section('title','View Post')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-4">
    <div class="card-header">
      <h4>View Post <a href="{{url('admin/add-post')}}" class="btn btn-primary btn-sm float-end">Add
          Post</a></h4>
    </div>
  </div>

  <div class="card-body">
    @if(session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <table id="myDataTable" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Post Name</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($post as $item)

        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name }}</td>
          <td>{{$item->slug}}</td>
          <td>{{$item->status == '1' ? 'Hidden' : 'Visible'}}</td>
          <td><a href="{{asset('admin/edit-post/'.$item->id)}}" class="btn btn-success">Edit</a></td>
          <td><a href="{{asset('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>

</div>
</div>

@endsection