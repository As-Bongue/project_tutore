@extends('layourts.app')

@section('content')

    <h1>Creer un enseignant</h1>

    <form action="{{ route('enseignant.store') }}" method="POST">
        @csrf

        @include('pages.enseignant._form')

        <div class="block">
            <input type="submit" value="Creer" >
        </div>

    </form>

    <p><a href="">Accueil</a></p>

@stop
