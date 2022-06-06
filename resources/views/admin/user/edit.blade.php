@extends('layouts.master')

@section('title','Add Posts')

@section('content')

<div class="container-fluid px-4">
  <div class="row mt-4">
    <div class="card-header">
      <h4 class="">Edit User <a href="{{url('admin/user')}}" class="btn btn-danger float-end">Back</a></h4>
    </div>
    <div class="card-body mt-4">

      <div class="mb-3">
        <label for="">Name</label>
        <p class="form-control">{{$user->name}}</p>
      </div>

      <div class="mb-3">
        <label for="">Email</label>
        <p class="form-control">{{$user->email}}</p>
      </div>

      <div class="mb-3">
        <label for="">Created At</label>
        <p class="form-control">{{$user->created_at->format('d/m/Y')}}</p>
      </div>

      <form action="{{url('admin/update-user/'.$user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="">Role As</label>
          <select name="role_as" class="form-control">
            <option value="1" {{$user->role_as == '1' ? 'selected':''}}>Admin</option>
            <option value="0" {{$user->role_as == '0' ? 'selected':''}}>User</option>
            <option value="2" {{$user->role_as == '2' ? 'selected':''}}>Blogger</option>
          </select>
        </div>

        <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Update User Role</button>
        </div>
      </form>
    </div>
  </div>

  @endsection