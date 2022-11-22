@extends('categroies.layout')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="container md md-5 mt-3">
        <div class="row">
            <row class="md-5 mt-3">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-12">{{$title}}</div>
                            <div class="col-md-6 col-12 text-end">
                                <a href="" class="btn btn-sm btn-dark">
                                    <i class="fas fa-plus-circle pe-1"></i> Create New Category
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                </div>
            </row>
        </div>
    </div>
@endsection

@section('css')
    <script src="https://kit.fontawesome.com/0eb42152c5.js" crossorigin="anonymous"></script>
@endsection

@section('js')
    
@endsection