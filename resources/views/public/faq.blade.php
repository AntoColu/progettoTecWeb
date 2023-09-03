<section id="faq" class="faq">
    <h2 id="titolo_faq">Domande frequenti</h2>

    <div class="faq-container">
    <!--<ul id="elenco_risposte">-->
        @foreach($faqs as $faq)
            <!--<li>-->
            <article class="dom-risp">
                <h3 style="font-size: 26px; font-weight: bold; color: black;">{!! $faq->domanda !!}</h3>
                <p style="font-size: 20px; color: rgb(65, 65, 65);">{!! $faq->risposta !!}</p>
            </article>
            <!--</li>-->
        @endforeach
    <!--</ul>-->
    </div>
</section>
