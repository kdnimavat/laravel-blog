@extends('layouts.master')

@section('title','Blog Dashboard')

@section('content')

<div class="container-fluid px-4">
  <div class="row mt-4">
    <div class="card-header">
      <h4 class="">Edit Category</h4>
    </div>
    <div class="card-body mt-4">
      <form action="{{url('admin/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="">Category Name</label>
          <input type="text" name="name" value="{{$category->name}}" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">Slug</label>
          <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">Description</label>
          <textarea name="description" class="form-control" rows="5">{{$category->description}}</textarea>
        </div>

        <div class="mb-3">
          <label for="">Image</label>
          <input type="file" name="image" value="{{$category->image}}" class="form-control">
        </div>

        <h6>Status Mode</h6>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="">Navbar Status</label>
            <input type="checkbox" name="navbar_status" />
          </div>

          <div class="col-md-3 mb-3">
            <label for="">Status</label>
            <input type="checkbox" name="status" />
          </div>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Update Category</button>
        </div>
      </form>
    </div>
  </div>

  @endsection