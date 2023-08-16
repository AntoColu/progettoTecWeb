<!-- Pagina che definisce il layout del footer comune a tutte le pagine -->
<ul>
    <li><a class="footer-link" href="mailto:flatmate@gmail.com">Contattaci</a></li>
    <li><a class="footer-link" id="servizi"
        {{(Route::current()->getName() == 'homepage') ? 'href=#servizi' : 'data-popup-caller'}}>Servizi</a></li>
    <li><a class="footer-link" id="chi-siamo"
        {{(Route::current()->getName() == 'homepage') ? 'href=#chi-siamo' : 'data-popup-caller'}}>Chi siamo</a></li>
    <li><a class="footer-link" id="dicono-di-noi"
        {{(Route::current()->getName() == 'homepage') ? 'href=#dicono-di-noi' : 'data-popup-caller'}}>Dicono di noi</a></li>
    <li><a class="footer-link" id="condizioni-uso" data-popup-caller>Condizioni d'uso</a></li>
    <li><a class="footer-link" id="privacy" data-popup-caller>Privacy Policy</a></li>
</ul>
<span class="copyright">Copyright © 2022 Tavernelle Dev Company.
    <br>All Rights Reserved.</span>

<span class="copyright">Via Brecce Bianche, 4, Ancona, Italy</span>