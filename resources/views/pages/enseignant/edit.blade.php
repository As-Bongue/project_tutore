@extends('layourts.app')

@section('content')

    <form action="{{ route('enseignant.update', $ens->code) }}" method="POST">
        @method('PUT')
        @csrf

        @include('pages.enseignant._form', ['submitButton' => 'Editer'])
    </form>

@stop
