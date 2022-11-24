@extends('categories.layout')
@section('title') 404 -  Page Not Found! @endsection
@section('content')

    <div class="d-flex align-items-center justify-content-center vh-100 bg-black flex-column">
        <h1 class="display-1 fw-bold text-white mb-5">404 - Ga ada halamannya bro</h1>
        <a href=" {{route('categories.index')}} " class="btn btn-sm btn-dark">
            {{-- <i class="fas fa-backspace pe-1"></i>  --}}
            Balik Ke Manage Category
        </a>
    </div>

    
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
@endsection

@section('js')

@endsection
    