<!-- Pagina che definisce il layout del footer comune a tutte le pagine -->
<ul>
    <li><a class="footer-link" href="mailto:progetto@tecweb.it" title="Mandaci un messaggio">Contattaci</a></li>
    <li><a class="footer-link" id="servizi"
        {{(Route::current()->getName() == 'homepage') ? 'href=#servizi' : 'data-popup-caller'}}>Servizi</a></li>
    <li><a class="footer-link" id="chi-siamo"
        {{(Route::current()->getName() == 'homepage') ? 'href=#chi-siamo' : 'data-popup-caller'}}>Chi siamo</a></li>
    <li><a class="footer-link" id="condizioni-uso" data-popup-caller>Condizioni d'uso</a></li>
    <li><a class="footer-link" id="privacy" data-popup-caller>Privacy Policy</a></li>
</ul>
<a href="{{ asset('files/documentazione-progetto.pdf') }}" download>Scarica la documentazione del progetto</a>

<span class="copyright">Copyright © 2023 Progetto di Antonio Colucci</span>

<span class="copyright">Via Brecce Bianche, 4, Ancona, Italy</span>