@extends('layout.blog')

@section('title') Month @endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                @if(Session::has('error'))
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamination-triangle"></i>
                        {{ Session::get('error') }}
                    </div>                    
                @endif 

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAME</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($month as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item }}</td>
                                <td>
                                    <a href="{{ route('frontend_blog_show', $key)}}" class="btn btn-sm btn-primary w-100">
                                        <i class="fas fa-search"></i>Show
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection