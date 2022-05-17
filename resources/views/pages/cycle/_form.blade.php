<div class="block">
    <label for="cycle">Cycle</label>
    <input type="text" name="cycle" id="cycle" placeholder="Cycle scolaire" value="{{ old('cycle') ?? $cycles->intitule }}">
</div>

<div class="block">
    <input type="submit" value="{{ $submitButton }}" >
</div>
