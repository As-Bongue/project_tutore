@extends('layourts.app')

@section('content')

    <h1 class="h1 text-center">Liste de emargements</h1>

    @forelse ($emargements as $emargement)
        <p><a href="{{ route('emargement.show', $emargement->id) }}">Emargement N° : {{ $emargement->id }}</a></p>
        <p>
            <a href="{{ route('emargement.edit', $emargement->id) }}">Editer</a>

        <form action="{{ route('emargement.destroy', $emargement->id) }}" method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Suprimer">
        </form>
        </p>
    @empty
    @endforelse

    <p>
        <a href="{{ route('emargement.create') }}">Creer un emargement</a>
    </p>
@stop
