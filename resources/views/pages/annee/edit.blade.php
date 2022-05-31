@extends('layourts.app')

@section('content')

    <form action="{{ route('annees.update', $annees->id) }}" method="POST">
        @method('PUT')
        @csrf

        @include('pages.annee._form', ['submitButton' => 'Editer'])
    </form>

@stop
