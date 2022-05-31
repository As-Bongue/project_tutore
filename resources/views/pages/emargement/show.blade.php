@extends('layourts.app')

@section('content')

<h1>HEMARGEMENT #{{ $emargements->id }}</h1>

<p>
    <span>Heure Debut : {{ $emargements->heure_debut }}</span><br>
    <span>Heure Fin : {{ $emargements->heure_fin }}</span><br>
    <span>Jour : {{ $emargements->jour }}</span><br>
    <span>Moi : {{ $emargements->moi->libele }}</span>
</p>

<p>
    <a href="{{ route('emargement.index') }}">Liste des emargements</a>
</p>
@stop
