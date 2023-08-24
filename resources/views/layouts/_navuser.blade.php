<ul>
    <li>
        <a href="{{ route('home') }}" title="Vai alla Home di User">Home</a>
    </li>
    <li>
        <a href="{{ route('catalogo') }}" title="Visualizza il Catalogo Noleggi">Noleggi</a>
    </li>
    <li>
        <a href="{{ route('contatti') }}" title="Contatti">Contatti</a>
    </li>
    <li>
        <a href="{{ route('account-user') }}" title="Visualizza i tuoi dati">Account {{Auth::user()->username}}</a>
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
