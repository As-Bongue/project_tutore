@extends('layourts.app')

@section('content')

    <p>Annee : {{ $ans->libele }}</p>
    <p>
        <a href="{{ route('annee.edit', $ans->id) }}">Editer</a>
        <form action="{{ route('annee.destroy', $ans->id) }} " method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Suprimer">
        </form>
    </p>
    @foreach ($ans->mois as $moi)
        <span>{{ $moi->libele }}</span> |
    @endforeach

@stop
