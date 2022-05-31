@extends('layourts.app')

@section('content')
    <h1 class="h1 text-center"> liste de tous les niveaux </h1>

    @foreach ($niveaux as $niveau )
        <p><a href="{{ route('niveau.show', $niveau->id) }}">{{ $niveau->intitule }}</a></p>
        <p>
            <a href="{{ route('niveau.edit', $niveau->id) }}">Editer</a>

            <form action="{{ route('niveau.destroy', $niveau->id) }}" method="POST">
                @method('DELETE')
                @csrf

                <input type="submit" value="Suprimer">
            </form>
        </p>
        <hr>
    @endforeach

    <p>
        <a href="{{ route('niveau.create') }}">Creer un niveau</a>
    </p>

@endsection
