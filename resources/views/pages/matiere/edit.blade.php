@extends('layourts.app')

@section('content')

<h1>Creer une matiere</h1>

<form action="{{ route('matieres.update', $matieres->code) }}" method="POST">
    @method('PUT')
    @csrf

    @include('pages.matiere._form', ['submitButton' => 'Editer', 'enseignants' => $enseignants, 'niveau'=> $niveaux] )
</form>

<p>
    <a href="{{ route('matieres.index') }}">Voire toutes les matieres</a>
</p>
@stop
