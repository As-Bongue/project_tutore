@extends('layourts.app')

@section('content')

    <h1 class="h1 text-center">Liste des annees academique</h1>

    <hr>
    @forelse ($annees as $annee)
        <p><a href="{{ route('annees.show', $annee->id) }}">{{ $annee->libele }}</a></p>

        <hr>
    @empty
        <p>Aucune annee academique</p>
    @endforelse

    <p>
        <a href="{{ route('annees.create') }}">Ajouter une annee</a>
    </p>
@stop
