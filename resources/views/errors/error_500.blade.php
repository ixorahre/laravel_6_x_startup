@extends('layouts.admin_lte_3_master')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 col-6 offset-3 text-center">
            <h1>500</h1>
            <h5>Internal server error</h5>
            <p>{{$error_show}}</p>
            <a href="{{route('home')}}">Home</a>
        </div>

    </div>
@endsection



