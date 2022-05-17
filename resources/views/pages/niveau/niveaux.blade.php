@extends('layourts.app')

@section('content')
    <h1> liste de tous les niveaux </h1>

    @foreach ($nives as $nive )
        <p><a href="{{ route('niveau.show', $nive->id) }}">{{ $nive->institule_niv }}</a></p>
    @endforeach
@endsection
