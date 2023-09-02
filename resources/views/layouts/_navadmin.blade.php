<ul>
    <li>
        <a href="{{ route('admin') }}" title="Va alla Home di Admin">Home</a>
    </li>
    <li>
        <a href="{{ route('gestione-staff') }}" title="Gestisci lo staff">Staff</a>
    </li>
    <li>
        <a href="{{ route('gestione-clienti') }}" title="Gestisci i clienti">Clienti</a>
    </li>
    <li>
        <a href="{{ route('gestione-auto') }}" title="Aggiungi, modifica, cancella auto">Gestione auto</a>
    </li>
    <li>
        <a href="{{ route('gestione-faq') }}" title="Gestisci le FAQ">FAQ</a>
    </li>
    <li>
        <a href="{{ route('statistiche') }}" title="Statistiche">Statistiche</a>
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
   