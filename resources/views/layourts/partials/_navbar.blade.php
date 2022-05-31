{{-- <nav class="menu">
    <ul>
        <li><a href="{{ route('home')}}">Accueil</a></li>
        <li> <a href="{{ route('enseignant.index') }}">Enseignants</a></li>
        <li> <a href="{{ route('annees.index') }}">Annees Academiques</a></li>
        <li> <a href="{{ route('cycle.index') }}">Cycles</a></li>
        <li> <a href="{{ route('niveau.index') }}">Niveaux</a></li>
        <li> <a href="{{ route('filiere.index') }}">Filieres</a></li>
        <li> <a href="{{ route('specialite.index') }}">Specialites</a></li>
        <li> <a href="{{ route('matieres.index') }}">Matires</a></li>
        <li> <a href="{{ route('emargement.index') }}">Emargements</a></li>
        <li> <a href="{{ route('bilan.index') }}">Bilans</a></li>
    </ul>
</nav> --}}


<div class="flex-shrink-0 p-3 bg-dark text-light" style="width: 280px; height:740px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-light text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">GEVAC</span>
    </a>
    <ul class="list-unstyled ps-0">

        <li class="mb-1">
            <a href=" {{route('home')}} ">Home</a>
        </li>

      <li class="mb-1">
        <button class="btn btn-toggle align-items-center text-light rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Annees Accademiques
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href=" {{ route('annees.index') }} " class="link-light rounded">Liste</a></li>
            <li><a href=" {{ route('annees.create') }} " class="link-light rounded">Ajouter</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center text-light rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Enseignant
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href=" {{ route('enseignant.index') }} " class="link-light rounded">Liste</a></li>
            <li><a href=" {{ route('enseignant.create') }} " class="link-light rounded">Ajouter</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center text-light rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Matiere
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href=" {{ route('matieres.index') }} " class="link-light rounded">Liste</a></li>
            <li><a href=" {{ route('matieres.create') }} " class="link-light rounded">Ajouter</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center text-light rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-light rounded">New...</a></li>
            <li><a href="#" class="link-light rounded">Profile</a></li>
            <li><a href="#" class="link-light rounded">Settings</a></li>
            <li><a href="#" class="link-light rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
