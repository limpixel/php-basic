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
                                <a href="" class="btn btn-sm btn-dark">
                                    <i class="fas fa-plus-circle pe-1"></i> Create New Category
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped mb-0">
                            <thead><tr><th>No</th><th>Name</th><th>Slug</th><th>Action</th></tr></thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->interation }}</td><td>{{ $item->name }}</td><td>{{ $item->slug }}</td>
                                        <td>
                                            <a href="{{ route('categories.show', $item->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-search pe-1"></i> Show
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
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