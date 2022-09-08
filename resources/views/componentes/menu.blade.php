<style>
  [data-letters]:before {
      content:attr(data-letters);
      display:inline-block;
      text-transform:uppercase;
      font-size:1em;
      width:2.5em;
      height:2.5em;
      line-height:2.5em;
      text-align:center;
      border-radius:50%;
      background:#3cdd81;
      vertical-align:middle;
      margin-right:1em;
      color:black;
      font-weight: bolder;
      font-family: 'GraphikBold';
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light config-nav-2">
  <div class="justify-content-end">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link pl-3 item-menu" href="#">Organização: <i style="color:#3cdd81"class="fas fa-caret-right"></i> RCastro Propaganda</a>
        </li>
      </ul>
      @if(Auth::check())
        @php
            $nome = auth()->user()->name;
            $pieces = explode(" ", $nome);
            $result = substr($pieces[0], 0, 2);
            @endphp
        <div class="nav-item dropdown">
            <a class="nav-link item-menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p data-letters="{{ $result }}">{{ $nome }}</p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item">{{ auth()->user()->email }}</a>
              <a class="dropdown-item" href="{{ route('logout') }}">Sair</a>
            </div>
        </div>
      @endif
  </nav>