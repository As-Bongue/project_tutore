
<div class="block">
    <label for="code">Code</label>
    <input type="text" name="code" id="code" placeholder="Code de l'enseignannt" value="{{ old('code') ?? $ens->code }}">
</div>

<div class="block">
    <label for="nom"> Nom</label>
    <input type="text" name="nom" id="nom" placeholder="nom" value="{{ old('nom') ?? $ens->nom }}">
</div>

<div class="block">
    <label for="prenom"> Prenom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Prenom" value="{{ old('prenom') ?? $ens->prenom }}">
</div>

<div class="block">
    <label for="tel"> Telephone</label>
    <input type="text" name="telephone" id="tel" placeholder="Numero de telephone" value="{{ old('telephone') ?? $ens->telephone }}">
</div>

<div class="block">
    <label for="email"> Email</label>
    <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') ?? $ens->email }}">
</div>

<div class="block">
    <label for="adresse"> Adresse</label>
    <input type="text" name="adresse" id="adresse" placeholder="Adresse" value="{{ old('adresse') ?? $ens->adresse }}">
</div>

