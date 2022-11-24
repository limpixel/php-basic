@extends('categories.layout')
@section('title'){{ $title }}@endsection
@section('content')
    <div class="container mt md-5 mt-3">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-12">{{ $title }}</div>
                            <div class="col-md-6 col-12 text-end">
                                <a href=" {{ route('categories.index') }} " class="btn btn-sm btn-dark">
                                    <i class="fas fa-backspace pe-1"></i> Manage Category
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('categories.update', $category->id) }} " method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-global">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ $category->name }}"  placeholder="Name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <small class="text-danger"> {!! $message !!} </small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-global">slug <span class="text-danger">*</span></label>
                                <input type="text" name="slug" value="{{ $category->slug }}" placeholder="Slug" class="form-control @error('slug') is-invalid @enderror">
                                @error('slug')
                                    <small class="text-danger"> {!! $message !!} </small>
                                @enderror
                            </div>

                            <button class="btn btn-sm btn-dark">
                                Update
                            </button>
                        </form>
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