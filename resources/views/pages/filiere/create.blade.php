@extends('layourts.app')

@section('content')

    <form action="{{ route('filiere.store') }}" method="POST">
        @csrf

        @include('pages.filiere._form', ['submitButton' => 'Creer'])
    </form>

@stop
