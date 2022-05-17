@extends('layourts.app')

@section('content')

    <h1>Enseignant | {{ $ens->code }}</h1>

    <p>
        {{ $ens->nom }} <br>
        <span>{{ $ens->prenom }}</span> <br>
        <span>{{ $ens->telephone }}</span> <br>
        <span>{{ $ens->email }}</span> <br>
        <span>{{ $ens->adresse }}</span>
    </p>

@stop
