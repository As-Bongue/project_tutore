<div class="block">
    <label for="code">Code</label>
    <input type="text" name="code" id="code" placeholder="Code matiere" value="{{ old('code') ?? $matieres->code }}">
</div>

<div class="block">
    <label for="matiere"> Intitule</label>
    <input type="text" name="matiere" id="matiere" placeholder="intitule matiere"
        value="{{ old('matiere') ?? $matieres->intitule }}">
</div>

<div class="block">
    <label for="quota"> Quota Horaire</label>
    <input type="number" name="quota" id="quota" placeholder="exp : 00"
        value="{{ old('quota') ?? $matieres->quota_horaire }}">
</div>

<div class="block">
    <label for="enseignant"> Enseignant</label>
    <select name="enseignant" id="enseignant">
        @foreach ($enseignants as $enseignant)
            <option value="{{ $enseignant->code }}">{{ $enseignant->nom }}</option>
        @endforeach
    </select>
</div>

<div class="block">
    <label for="niveau"> Niveau</label>
    <select name="niveau" id="niveau">
        @foreach ($niveaux as $niveau)
            <option value="{{ $niveau->id }}">{{ $niveau->intitule }}</option>
        @endforeach
    </select>
</div>

<div class="block">
    <label for="semestre"> Semestre</label>
    <select name="semestre" id="semestre">
        <option value="semestre 1">Semestre 1</option>
        <option value="semestre 2">Semestre 2</option>
        <option value="semestre 3">Semestre 3</option>
        <option value="semestre 4">Semestre 4</option>
        <option value="semestre 5">Semestre 5</option>
        <option value="semestre 6">Semestre 6</option>
        <option value="semestre 7">Semestre 7</option>
        <option value="semestre 8">Semestre 8</option>
        <option value="semestre 9">Semestre 9</option>
        <option value="semestre 1">Semestre 10</option>
    </select>
</div>

<div class="block">
    <label for="prix">Prix unitaire</label>
    <input type="number" name="prix" id="prix" placeholder="prix unitaire"
        value="{{ old('prix') ?? $matieres->prix_unitaire }}">
</div>


<div class="block">
    <input type="submit" value="{{ $submitButton }}">
</div>
