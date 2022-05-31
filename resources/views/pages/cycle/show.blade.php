@extends('layourts.app')

@section('content')

    <h1>Cycle | #{{ $cycles->code }}</h1>

    <p>
        {{ $cycles->intitule }} <br>
    </p>

    <p>
        <a href="{{ route('cycle.index') }}"> Voir les cycles</a>
    </p>

@stop
