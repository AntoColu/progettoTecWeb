<ul>
    <li><a href="{{ route('catalog1') }}" title="Home">Noleggi</a></li>
    <li><a href="{{ route('chi-siamo') }}" title="Il nostro profilo aziendale">Chi siamo</a></li>
    <li><a href="{{ route('dove-siamo') }}" title="Dove trovarci">Dove Siamo</a></li>
    @can('isAdmin')
        <li><a href="{{ route('admin') }}" class="highlight" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isStaff')
        <li><a href="{{ route('staff') }}" class="highlight" title="Home Staff">Home Staff</a></li>
    @endcan
    @can('isUser')
        <li><a href="{{ route('user') }}" class="highlight" title="Home User">Home User</a></li>
    @endcan
    @auth
        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
</ul>
