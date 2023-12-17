@extends('base')
@section('title', 'About Us | ' . config('app.name'))

@section('content')
       
        <p>Built with &hearts; by Maitriya</p>

        <p><a href="/"> Revenir à la page d'accueil</a></p>

     
@endsection

@section('footer')
<p>&copy; Copyright {{date('Y')}} &middot;</p>
@endsection

