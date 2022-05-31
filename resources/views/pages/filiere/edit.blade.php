@extends('layourts.app')

@section('content')

    <form action="{{ route('filiere.update', $filieres->code) }}" method="POST">
        @method('PUT')
        @csrf

        @include('pages.filiere._form', ['submitButton' => 'Editer'])
    </form>

@stop
