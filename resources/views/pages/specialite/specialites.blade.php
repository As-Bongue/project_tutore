@extends('layourts.app')

@section('content')

    <h1 class="h1 text-center">Liste des Cycles</h1>

    <hr>
    @forelse ($specialites as $specialite)
        <p><a href="{{ route('specialite.show', $specialite->code) }}">{{ $specialite->intitule }}</a></p>
        <p>
            <a href="{{ route('specialite.edit', $specialite->code) }}">Editer</a>
        <form action="{{ route('specialite.destroy', $specialite->code) }}" method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Suprimer">
        </form>
        </p>

        <hr>
    @empty
        <p>Aucune specialite pour le moment</p>
    @endforelse

    <p>
        <a href="{{ route('specialite.create') }}"> Creer une specialite</a>
    </p>
@stop
