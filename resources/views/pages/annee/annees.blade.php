@extends('layourts.app')

@section('content')

    <h1>Liste des annees academique</h1>

    <hr>
    @forelse ($ans as $an)
        <p><a href="{{ route('annee.show', $an->id) }}">{{ $an->libele }}</a></p>

        <hr>
    @empty
        <p>Aucune annee academique</p>
    @endforelse

    <p>
        <a href="{{ route('annee.create') }}">Ajouter une annee</a>
    </p>
@stop
