<!-- Pagina che definisce il layout del footer comune a tutte le pagine -->
<ul class="footer-ul" style="list-style-type: none;">
    <li class="footer-li"><a href="mailto:progetto@tecweb.it" title="Mandaci un messaggio">Contattaci</a></li>
    <li class="footer-li"><a id="chi-siamo"
        {{(Route::current()->getName() == 'home') ? 'href=#chi-siamo' : 'href=/#chi-siamo'}}>Chi siamo</a></li>
    <li class="footer-li"><a id="dove-siamo"
        {{(Route::current()->getName() == 'home') ? 'href=#dove-siamo' : 'href=/#dove-siamo'}}>Dove siamo</a></li>
    <li class="footer-li"><a id="faq"
       {{(Route::current()->getName() == 'home') ? 'href=#faq' : 'href=/#faq'}}>FAQ</a></li>
</ul>

<a href="{{ asset('files/Documentazione_progetto.pdf') }}" download>Scarica la documentazione del progetto</a>
<br>
<span class="dati">2023 Progetto di Antonio Colucci - </span>

<span class="dati">Matricola: 1087022</span>