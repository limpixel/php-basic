@extends('categories.layout')
@section('title'){{ $title }}@endsection
@section('content')
    <div class="container mt-md-5 mt-3">
        <div class="row">
            <div class="col-md-12 col-12 ">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-12">{{ $title }}</div>
                            <div class="col-md-6 col-12 text-end">
                                <a href=" {{route('categories.index')}} " class="btn btn-sm btn-dark">
                                    <i class="fas fa-plus-circle pe-1"></i> Manage Category
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless table-striped">
                            <tbody>
                                <tr><th>#ID</th><td> {{ $category->id }} </td></tr>
                                <tr><th>#NAME</th><td> {{ $category->name }} </td></tr>
                                <tr><th>#SLUG</th><td> {{ $category->slug }} </td></tr>
                                <tr><th>#UPDATED_AT</th><td> {{ $category->updated_at->diffForHumans() }} </td></tr>
                                <tr><th>#CREATED_AT</th><td> {{ $category->created_at->diffForHumans() }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
@endsection

@section('js')

@endsection