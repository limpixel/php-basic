@extends('layout.blog')


@section('title')
    Month
@endsection

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-8">

                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                       <tr>
                        <th>#ID</th>
                        <td>{{ $key }}</td>
                       </tr>
                       
                       <tr>
                            <th>#NAME</th>
                            <td>
                                @if($key == 1) Oktober @endif
                                @if($key == 2) November @endif
                                @if($key == 3) Desember @endif
                                
                            </td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection