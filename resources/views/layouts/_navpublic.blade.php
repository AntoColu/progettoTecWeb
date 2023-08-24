<ul>
    <li>
        <a href="{{ route('home') }}" title="Home">Home</a>
    </li>
    <li>
        <a href="{{ route('catalogo') }}" title="Il nostro catalogo noleggi">Noleggi</a>
    </li>
    <li>
        <a href="{{ route('contatti') }}" title="Contatti">Contatti</a>
    </li>
    @can('isAdmin')
        <li>
            <a href="{{ route('admin') }}" class="highlight" title="Home Admin">Area Admin</a>
        </li>
    @endcan
    @can('isStaff')
        <li>
            <a href="{{ route('staff') }}" class="highlight" title="Home Staff">Area Staff</a>
        </li>
    @endcan
    @can('isUser')
        <li>
            <a href="{{ route('user') }}" class="highlight" title="Home User">Area User</a>
        </li>
    @endcan
    @auth
        <li>
            <a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li>
            <a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a>
        </li>  
    @endguest
</ul>
