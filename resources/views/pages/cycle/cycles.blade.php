@extends('layourts.app')

@section('content')

    <h1>Liste des Cycles</h1>

    <hr>
    @forelse ($cycles as $cycle)
        <p><a href="{{ route('cycle.show', $cycle->id) }}">{{ $cycle->intitule }}</a></p>
        <p>
            <a href="{{ route('cycle.edit', $cycle->id) }}">Editer</a>
        <form action="{{ route('cycle.destroy', $cycle->id) }}" method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Suprimer">
        </form>
        </p>

        <hr>
    @empty
        <p>Aucunc cyle pour le moment</p>
    @endforelse

    <p>
        <a href="{{ route('cycle.create') }}"> Creer un cycle</a>
    </p>
@stop
