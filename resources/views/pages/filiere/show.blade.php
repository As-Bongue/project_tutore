@extends('layourts.app')

@section('content')

    <h1>Cycle | #{{ $filieres->code }}</h1>

    <p>
        {{ $filieres->intitule }} <br>
    </p>

    <p>
        <a href="{{ route('filiere.index') }}"> Voir les Filieres</a>
    </p>

@stop
