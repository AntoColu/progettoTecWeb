<!-- Pagina che definisce il layout del footer comune a tutte le pagine -->
<ul style="list-style-type: none;">
    <li><a class="footer-link" href="mailto:progetto@tecweb.it" title="Mandaci un messaggio">Contattaci</a></li>
    <li><a class="footer-link" id="chi-siamo"
        {{(Route::current()->getName() == 'home') ? 'href=#chi-siamo' : 'href=/#chi-siamo'}}>Chi siamo</a></li>
    <li><a class="footer-link" id="dove-siamo"
        {{(Route::current()->getName() == 'home') ? 'href=#dove-siamo' : 'href=/#dove-siamo'}}>Dove siamo</a></li>
    <li><a class="footer-link" id="faq"
       {{(Route::current()->getName() == 'home') ? 'href=#faq' : 'href=/#faq'}}>FAQ</a></li>
</ul>

<a href="{{ asset('files/Documentazione-progetto.pdf') }}" download>Scarica la documentazione del progetto</a>
<br>
<span class="copyright">Copyright © 2023 Progetto di Antonio Colucci - </span>

<span class="copyright">Via Brecce Bianche, 4, Ancona, Italy</span>