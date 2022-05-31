<div class="block">
    <label for="code">Code</label>
    <input type="text" name="code" id="code" placeholder="Code" value="{{ old('code') ?? $cycles->code }}">
</div>


<div class="block">
    <label for="cycle">Cycle</label>
    <input type="text" name="cycle" id="cycle" placeholder="Cycle scolaire" value="{{ old('cycle') ?? $cycles->intitule }}">
</div>

<div class="block">
    <input type="submit" value="{{ $submitButton }}" >
</div>
