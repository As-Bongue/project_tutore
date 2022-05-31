<div class="block">
    <label for="code">Code</label>
    <input type="text" name="code" id="code" placeholder=" Code Filiere" value="{{ old('code') ?? $specialites->code }}">
</div>

<div class="block">
    <label for="specialite">Specialite</label>
    <input type="text" name="specialite" id="specialite" placeholder="specialite" value="{{ old('specialite') ?? $specialites->intitule }}">
</div>

<div class="block">
    <input type="submit" value="{{ $submitButton }}" >
</div>
