@extends('layourts.app')

@section('content')

    <form action="{{ route('cycle.update', $cycles->id) }}" method="POST">
        @method('PUT')
        @csrf

        @include('pages.cycle._form', ['submitButton' => 'Editer'])
    </form>

    <p>
        <a href="{{ route('cycle.index') }}"> Voir les cycles</a>
    </p>

@stop
