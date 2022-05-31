@extends('layourts.app')

@section('content')

    <form action="{{ route('specialite.store') }}" method="POST">
        @csrf

       <p>Filiere :
        <select name="filiere" id="cycle">
            @foreach ($filieres as $filiere)
                <option value="{{ $filiere->code }}">{{ $filiere->intitule }}</option>
            @endforeach
        </select>
       </p>

        @include('pages.specialite._form', ['submitButton' => 'Creer'])
    </form>

@stop
