<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}" title="Va alla Home dello Staff">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestione-auto') }}" title="Aggiungi, modifica, cancella auto">Gestione auto</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('storico-noleggi') }}" title="Visualizza lo storico dei noleggi">Storico dei noleggi</a>
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
