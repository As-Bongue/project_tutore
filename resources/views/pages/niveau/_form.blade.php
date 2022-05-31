<div class="block">
    <label for="niveau">Niveau</label>
    <input type="text" name="niveau" id="niveau" placeholder="Niveau scolaire" value="{{ old('niveau') ?? $niveaux->intitule }}">
</div>

<div class="block">
    <input type="submit" value="{{ $submitButton }}" >
</div>
