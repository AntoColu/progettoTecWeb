<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}" title="Home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('catalogo') }}" title="Il nostro catalogo noleggi">Noleggi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contatti') }}" title="Contatti">Contatti</a>
    </li>
    @can('isAdmin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}" class="highlight" title="Home Admin">Area Admin</a>
        </li>
    @endcan
    @can('isStaff')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('staff') }}" class="highlight" title="Home Staff">Area Staff</a>
        </li>
    @endcan
    @can('isUser')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user') }}" class="highlight" title="Home User">Area User</a>
        </li>
    @endcan
</ul>    
@auth
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</ul>
@endauth    
@guest
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}" class="highlight" title="Registrati al sito">Registrati</a>
    </li> 
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a>
    </li>  
</ul>
@endguest

