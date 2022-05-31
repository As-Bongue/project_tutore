@extends('layourts.app')

@section('content')

    <form action="{{ route('specialite.update', $specialites->code) }}" method="POST">
        @method('PUT')
        @csrf

        <select name="filiere" id="cycle">
            @foreach ($filieres as $filiere)
                <option value="{{ $filiere->code }}">{{ $filiere->intitule }}</option>
            @endforeach
        </select>

        @include('pages.specialite._form', ['submitButton' => 'Creer'])
    </form>

@stop
