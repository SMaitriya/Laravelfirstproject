

@extends('base')


@section('content')

      <img src={{ asset('images/M.png')}} width=500px height=300px alt="ordi" class="mt-12 rounded shadow-md">

        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600 "> Laravel Project </h1>
        <p class="text-zinc-700 mt-4" >It's currently {{ date('H:i A') }}</p>

@endsection

