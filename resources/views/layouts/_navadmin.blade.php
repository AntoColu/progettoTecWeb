<ul>
    <li><a href="{{ route('admin') }}" title="Va alla Home di Admin">Home</a></li>
    <li><a href="{{ route('catalog1') }}" title="Gestisci lo staff">Staff</a></li>
    <li><a href="{{ route('newproduct') }}" title="Gestisci i clienti">Clienti</a></li>
    <li><a href="{{ route('admin') }}" title="Aggiungi, modifica, cancella auto">Noleggi</a></li>
    <li><a href="{{ route('admin') }}" title="Gestisci le FAQ">FAQ</a></li>
    @auth
        <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
</ul>
   