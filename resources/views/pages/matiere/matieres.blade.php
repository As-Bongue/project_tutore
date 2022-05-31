@extends('layourts.app')

@section('content')

    <h1 class="h1 text-center">Liste de toutes les matieres</h1>

    @forelse ($matieres as $matiere )
        <p>
            <a href="{{ route('matieres.show', $matiere->code) }}">{{ $matiere->intitule }}</a>

           <P>
            <a href="{{ route('matieres.edit', $matiere->code) }}">Editer</a>

            <form action="{{ route('matieres.destroy', $matiere->code) }}" method="POST">
                @method('DELETE')
                @csrf

                <input type="submit" value="Suprimer">
            </form>
           </P>

        </p>
    @empty

    @endforelse
    <p>
        <a href="{{  route('matieres.create')}}">Ajouter une matiere</a>
    </p>
@stop
