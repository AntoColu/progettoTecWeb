<ul>
    <li>
        <a href="{{ route('staff') }}" title="Va alla Home dello Staff">Home</a>
    </li>
    <li>
        <a href="{{ route('gestione-auto') }}" title="Aggiungi, modifica, cancella auto">Gestione auto</a>
    </li>
    <li>
        <a href="{{ route('storico-noleggi') }}" title="Visualizza lo storico dei noleggi">Storico dei noleggi</a>
    </li>
    @auth
        <li>
            <a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
</ul>
