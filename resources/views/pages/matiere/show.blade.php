@extends('layourts.app')

@section('content')

<h1>Matiere : {{ $matieres->intitule }}</h1>
<p>
    <span>Enseignant : {{ $matieres->enseignant->nom }}</span><br>
    <span>Niveau : {{ $matieres->niveau->intitule }}</span>
</p>

<p>
    <a href="{{ route('matieres.index') }}">Voir les matieres</a>
</p>
@stop
