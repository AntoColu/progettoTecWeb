<section id="faq" class="faq">
    <h1 id="titolo_faq">Domande frequenti</h1>

    <div class="faq-container">
    <!--<ul id="elenco_risposte">-->
        @foreach($faqs as $faq)
            <!--<li>-->
            <article class="dom-risp">
                <h3 class="domanda">{!! $faq->domanda !!}</h3>
                <p class="risposta">{!! $faq->risposta !!}</p>
            </article>
            <!--</li>-->
        @endforeach
    <!--</ul>-->
    </div>
</section>
