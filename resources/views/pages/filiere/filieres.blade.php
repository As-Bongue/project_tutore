@extends('layourts.app')

@section('content')

    <h1 class="h1 text-center">Liste des Filieres</h1>

    <hr>
    @forelse ($filieres as $filiere)
        <p><a href="{{ route('filiere.show', $filiere->code) }}">{{ $filiere->intitule }}</a></p>
        <p>
            <a href="{{ route('filiere.edit', $filiere->code) }}">Editer</a>
        <form action="{{ route('filiere.destroy', $filiere->code) }}" method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Suprimer">
        </form>
        </p>

        <hr>
    @empty
        <p>Aucune filiere pour le moment</p>
    @endforelse

    <p>
        <a href="{{ route('filiere.create') }}"> Creer une filiere</a>
    </p>
@stop
