@extends('layouts.master')

@section('title','View Post')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-4">
    <div class="card-header">

      <h4>View User</h4>
    </div>
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
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $item)

      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name }}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->role_as == '1' ? 'Admin' : 'User'}}</td>
        <td><a href=" {{asset('admin/edit-user/'.$item->id)}}" class="btn btn-success">Edit</a></td>
        <td><a href="{{asset('admin/delete-user/'.$item->id)}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
</div>

</div>
</div>

@endsection