@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>All Categories List</h4>
                    <hr style="color: black">
                    <div class="inderline"></div>

                </div>
                @foreach ($all_categories as $all_cateitem)
                    <div class="col-md-3">
                        <div class="card card-body mb-3" style="background-color: lightgray">
                            <a href="{{ url('tutorial/' . $all_cateitem->slug) }}" class="text-decoration-none">
                                <h5 class="text-dark mb-8">{{ $all_cateitem->name }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
