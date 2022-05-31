@extends('layourts.app')

@section('content')

    <h1>Specialite | #{{ $specialites->code }}</h1>

    <p>
        <span>Specialite : {{ $specialites->intitule }}</span> <br>
        <span>Filere : {{ $specialites->filiere->intitule }}</span>
    </p>

    <p>
        <a href="{{ route('specialite.index') }}"> Voir les Specialites</a>
    </p>

@stop
