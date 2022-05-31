@extends('layourts.app')

@section('content')

    <h1>Creer un enseignant</h1>

    <form action="{{ route('enseignant.store') }}" method="POST">
        @csrf

        @include('pages.enseignant._form', ['submitButton' => 'Creer'])
    </form>

    <p><a href=" {{route('enseignant.index')}} ">Accueil</a></p>

@stop
