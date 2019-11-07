@extends('layouts.admin_master')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 col-6 offset-3 text-center">
            <h1>404</h1>
            <h5>The page not found</h5>
            <a href="{{route('home')}}">Home</a>
        </div>
    </div>
@endsection
