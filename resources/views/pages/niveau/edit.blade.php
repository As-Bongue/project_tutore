@extends('layourts.app')

@section('content')

    <form action="{{ route('niveau.update', $niveaux->id) }}" method="POST">
        @method('PUT')
        @csrf

        <select name="cycle" id="cycle">
            @foreach ($cycles as $cycle)
                <option value="{{ $cycle->code }}">{{ $cycle->intitule }}</option>
            @endforeach
        </select>

        @include('pages.niveau._form', ['submitButton' => 'Editer'])

    </form>

@stop
