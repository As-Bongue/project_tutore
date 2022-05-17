@extends('layourts.app')

@section('content')
    <h1>liste de tous les enseignants</h1>

    <hr>

    @forelse ($enseignants as $enseignant)
        <p><a href="{{ route('enseignant.show', $enseignant->code) }}">{{ $enseignant->nom }}</a></p>
        <p>
            <a href="{{ route('enseignant.edit', $enseignant->code) }}">Modifier</a>
            <form action="{{ route('enseignant.destroy', $enseignant->code) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Suprimer">
            </form>
        </p>

        <hr>
    @empty
        <p>Auccun enseignant pour le momment</p>
    @endforelse

    <p>
        <a href="{{ route('enseignant.create') }}">Creer un enseignant</a>
    </p>
@endsection
