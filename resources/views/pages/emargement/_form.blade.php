<div class="block">
    <label for="matiere"> Matiere</label>
    <select name="matiere" id="matiere">
        @foreach ($matieres as $matiere )
            <option value="{{ old('matiere') ?? $matiere->code }}">{{ $matiere->intitule }}</option>
        @endforeach
    </select>
</div>

<div class="block">
    <label for="heure_debut">Heure Debut</label>
    <input type="time" name="heure_debut" id="heure_debut" placeholder="heure debut" value="{{ old('heure_debut') ?? $emargements->heure_debut }}">
</div>

<div class="block">
    <label for="heure_fin"> Heure Fin</label>
    <input type="time" name="heure_fin" id="heure_fin" placeholder="heure fin" value="{{ old('heure_fin') ?? $emargements->heure_fin}}">
</div>

<div class="block">
    <label for="date">Date</label>
    <input type="date" name="date" id="date" placeholder="date" value="{{ old('date') ?? $emargements->jour }}">
</div>

<div class="block">
    <label for="moi"> Moi</label>
    <select name="moi" id="moi">
        @foreach ($mois as $moi )
            <option value="{{ old('moi') ?? $moi->id }}">{{ $moi->libele }}</option>
        @endforeach
    </select>
</div>

<div class="block">
    <input type="submit" value="{{ $submitButton }}" >
</div>

