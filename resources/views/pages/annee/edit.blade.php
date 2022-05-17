@extends('layourts.app')

@section('content')

    <form action="{{ route('annee.update') }}" method="POST">
        @method('PUT')
        @csrf

        @include('pages.annee._form', ['submitButton' => 'Editer'])
    </form>

@stop
