@extends('base')
@section('title', 'About Us | ' . config('app.name'))

@section('content')
<img src={{ asset('images/ord.png')}} width=500px height=300px alt="logo" class="my-12 rounded full shadow-md">
        <h2 class="mb-5 text-gray-700">
                Built with <span class="text-blue-500">&hearts;</span> by Maitriya
        </h2>

        <p>
                <a href="{{route('home')}}" class="text-indigo-800 hover:text-rose-600 underline"> Revenir à la page d'accueil</a>
</p>

     
@endsection

