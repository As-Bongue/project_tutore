@extends('layourts.app')

@section('content')

    <h1 class="h1 text-center">Liste des Cycles</h1>

    <hr>
    @forelse ($cycles as $cycle)
        <p><a href="{{ route('cycle.show', $cycle->code) }}">{{ $cycle->intitule }}</a></p>
        <p>
            <a href="{{ route('cycle.edit', $cycle->code) }}">Editer</a>
        <form action="{{ route('cycle.destroy', $cycle->code) }}" method="POST">
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
