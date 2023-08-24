<ul>
    <li>
        <a href="{{ route('staff') }}" title="Va alla Home dello Staff">Home</a>
    </li>
    <li>
        <a href="{{ route('gest-clienti') }}" title="Gestisci i clienti">Clienti</a>
    </li>
    <li>
        <a href="{{ route('gest-auto') }}" title="Aggiungi, modifica, cancella auto">Noleggi</a>
    </li>
    <li>
        <a href="{{ route('gest-faq') }}" title="Gestisci le FAQ">FAQ</a>
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
