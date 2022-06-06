@extends('layouts.master')

@section('title','Add Posts')

@section('content')

<div class="container-fluid px-4">
  <div class="row mt-4">
    <div class="card-header">
      <h4 class="">Edit Post</h4>
    </div>
    <div class="card-body mt-4">
      <form action="{{url('admin/update-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="">Category</label>
          <select name="category_id" required class="form-control">
            <option value=""> -- Select Category--</option>
            @foreach($category as $cateitem)
            <option value="{{$cateitem->id}}" {{$post->category_id == $cateitem->id ? 'selected':''}}>
              {{$cateitem->name}}
            </option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="">Post Name</label>
          <input type="text" name="name" value="{{$post->name}}" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">Slug</label>
          <input type="text" name="slug" value="{{$post->slug}}" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">Discription</label>
          <textarea name="description" class="form-control" rows="5">{{$post->description}}</textarea>
        </div>

        <h4>Status</h4>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="">Status</label>
            <input type="checkbox" name="status" {{$post->status == '1' ? 'checked':''}} />
          </div>
        </div>

        <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Update Post</button>
        </div>
      </form>
    </div>
  </div>

  @endsection