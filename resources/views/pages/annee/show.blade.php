@extends('layourts.app')

@section('content')

    <p>Annee : {{ $annees->libele }}</p>
    <p>
        <a href="{{ route('annees.edit', $annees->id) }}">Editer</a>
        <form action="{{ route('annees.destroy', $annees->id) }} " method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Suprimer">
        </form>
    </p>

    @foreach ($annees->mois as $moi)
        <span>{{ $moi->libele }}</span> |
    @endforeach

@stop
