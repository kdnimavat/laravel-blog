@extends('layouts.master')

@section('title','Add Posts')

@section('content')

<div class="container-fluid px-4">
  <div class="row mt-4">
    <div class="card-header">
      <h4 class="">Add Posts</h4>
    </div>
    <div class="card-body mt-4">
      <form action="{{url('admin/add-post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="">Category</label>
          <select name="category_id" class="form-control">
            @foreach($category as $cateitem)
            <option value="{{$cateitem->id}}">{{$cateitem->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="">Post Name</label>
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

        <h4>Status</h4>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="">Status</label>
            <input type="checkbox" name="status" />
          </div>
        </div>

        <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Save Post</button>
        </div>
      </form>
    </div>
  </div>

  @endsection