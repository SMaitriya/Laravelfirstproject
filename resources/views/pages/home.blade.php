

@extends('base')
@section('title')

@section('content')

        <h1> Hello from paris </h1>
        <p>It's currently {{ date('H:i A') }}</p>

@endsection

@section('footer')
<p>&copy; Copyright {{date('Y')}} &middot; <a href="{{route('about')}}">About us</a></p>
@endsection