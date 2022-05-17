@extends('layourts.app')

@section('content')

    <form action="{{ route('cycle.store') }}" method="POST">
        @csrf

        @include('pages.cycle._form', ['submitButton' => 'Creer'])

    </form>

@stop
