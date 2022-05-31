@extends('layourts.app')

@section('content')

<p>Niveau #{{ $niveaux->id }}</p>
<p>{{ $niveaux->intitule }}</p>

<p>Cycle : {{ $niveaux->cycle->intitule }}</p>

<p>
    <a href="{{ route('niveau.index') }}">Tous les niveaux</a>
</p>
@stop
