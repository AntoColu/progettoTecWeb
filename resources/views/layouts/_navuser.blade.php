<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}" title="Vai alla Home di User">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('catalogo') }}" title="Visualizza il Catalogo Noleggi">Noleggi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('riepilogo-noleggi') }}" title="Le auto che hai noleggiato">I miei noleggi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contatti') }}" title="Contatti">Contatti</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user-account') }}" title="Visualizza i tuoi dati">Account {{Auth::user()->username}}</a>
    </li>
    @auth
        <li class="nav-item">
            <a class="nav-link" href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
</ul>
