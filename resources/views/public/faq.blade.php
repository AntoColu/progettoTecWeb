@extends('layouts.contenitore')

@section("title")
    FAQ
@endsection

@section("contenuto")
    <h2 id="titolo_faq">Domande frequenti</h2>

    <ul id="elenco_risposte">
        @foreach($faqs as $faq)
            <li>
                <h3 class="domanda">Q: {{ $faq->Domanda }}</h3>
                <p>A: {{ $faq->Risposta }}</p>
            </li>
        @endforeach
    </ul>
@endsection
