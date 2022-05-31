@extends('layourts.app')

@section('content')

    <form action="{{ route('niveau.store') }}" method="POST">
        @csrf

        <select name="cycle" id="cycle">
            @foreach ($cycles as $cycle)
                <option value="{{ $cycle->code }}">{{ $cycle->intitule }}</option>
            @endforeach
        </select>

        @include('pages.niveau._form', ['submitButton' => 'Creer'])
    </form>

@stop
