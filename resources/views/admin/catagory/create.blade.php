@extends('layouts.master')

@section('title','Blog Dashboard')

@section('content')

<div class="container-fluid px-4">
  <div class="row mt-4">
    <div class="card-header">
      <h4 class="">Add Category</h4>
    </div>
    <div class="card-body mt-4">
      <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="">Category Name</label>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">Slug</label>
          <input type="text" name="slug" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">Discription</label>
          <textarea name="description" class="form-control" rows="5"></textarea>
        </div>

        <div class="mb-3">
          <label for="">Image</label>
          <input type="file" name="image" class="form-control">
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
          <button type="submit" class="btn btn-primary">Save Category</button>
        </div>
      </form>
    </div>
  </div>

  @endsection