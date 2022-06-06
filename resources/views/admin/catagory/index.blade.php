@extends('layouts.master')

@section('title','Blog Dashboard')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-4">
    <div class="card-header">
      <h4>View Category <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Add
          Category</a></h4>
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
            <th>Image</th>
            <th>Status</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
          @foreach($category as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td><img src="{{asset('uploads/catagory/'.$item->image)}}" width="50px" height="50px" alt="img">
            </td>
            <td>{{$item->status == '1' ? 'Hiidden' : 'Show'}}</td>
            <td><a href="{{asset('admin/edit-category/'.$item->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{asset('admin/delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endsection