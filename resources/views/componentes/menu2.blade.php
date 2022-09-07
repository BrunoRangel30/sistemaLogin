<nav class="navbar navbar-expand-lg navbar-light bg-light config-nav pt-2">
    <a class="navbar-brand" href="{{ route('inicio') }}"><span class="pl-1">Media</span> <span class="pl-2">Planning</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
      <ul class="navbar-nav mt-2 mt-lg-0" >
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contato') }}">Contato</a>
        </li>
      </ul>
    </div>
  </nav>