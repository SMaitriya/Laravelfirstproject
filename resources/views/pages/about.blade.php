@extends('base')
@section('title', 'About Us | ' . config('app.name'))

@section('content')
<img src="/images/ord.png" width=500px height=300px alt="logo">
        <p>Built with &hearts; by Maitriya</p>

        <p><a href="{{route('home')}}"> Revenir à la page d'accueil</a></p>

     
@endsection

