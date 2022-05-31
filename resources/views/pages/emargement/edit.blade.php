@extends('layourts.app')

@section('content')

    <h1>Creer emargement</h1>

    <form action="{{ route('emargement.update', $emargements->id) }}" method="POST">
        @method('PUT')
        @csrf

        @include('pages.emargement._form', [
            'submitButton' => 'Editer',
            'matieres' => $matieres,
            'mois' => $mois,
        ])

    </form>

    <p>
        <a href="{{ route('emargement.index') }}">Liste des emargements</a>
    </p>
@stop
