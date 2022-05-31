
<div class="block">
    <label for="annee">Annee Academique</label>
    <input type="text" name="annee" id="annee" placeholder="exp : 2017-2018" value="{{ old('annee') ?? $annees->libele }}">
</div>

<div class="block">
    <input type="submit" value="{{ $submitButton }}" >
</div>

