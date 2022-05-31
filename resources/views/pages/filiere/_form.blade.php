<div class="block">
    <label for="code">Code</label>
    <input type="text" name="code" id="code" placeholder=" Code Filiere" value="{{ old('code') ?? $filieres->code }}">
</div>

<div class="block">
    <label for="filiere">Filiere</label>
    <input type="text" name="filiere" id="filiere" placeholder="Filiere" value="{{ old('filiere') ?? $filieres->intitule }}">
</div>

<div class="block">
    <input type="submit" value="{{ $submitButton }}" >
</div>
