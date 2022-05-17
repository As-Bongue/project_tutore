@extends('layourts.app')

@section('content')

    <form action="{{ route('annee.store') }}" method="POST">
        @csrf

        @include('pages.annee._form', ['submitButton' => 'Creer'])
    </form>

@stop
