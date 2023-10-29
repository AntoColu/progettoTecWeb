<section class="faq" id="faq">
    <h1 id="titolo_faq">Domande frequenti</h1>

    <div class="faq-container">
        @foreach($faqs as $faq)
            <article class="dom-risp">
                <h3 class="domanda">{!! $faq->domanda !!}</h3>
                <p class="risposta">{!! $faq->risposta !!}</p>
            </article>
        @endforeach
    </div>
</section>
