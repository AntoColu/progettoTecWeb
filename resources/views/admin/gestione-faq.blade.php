@extends('principale')

@section('title', 'Gestione FAQ')

@section('content')
    <div class="container">
        <!-- Bottone per l'aggiunta di un nuovo cliente -->
        <a href="{{ route('inserisci-faq') }}" class="btn btn-primary">Inserisci nuova FAQ</a>

        <!-- Sezione dedicata alla presentazione di tutte le faq dove,
            per ogni faq, è possibile modificarla o eliminarla -->
        <section>
            <h1> Elenco delle FAQ: </h1>
            <div class="row justify-content-center">
                @foreach($faqs as $faq)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">{{$faq->faqId}} {{$faq->domanda}}</h3>
                            <h5 class="card-text">
                                {{$faq->risposta}}
                            </h5>
                            <a href="{{ route('modifica-faq', [$faq->faqId]) }}" class="btn btn-info">Modifica</a>
                            <a href="{{ route('elimina-faq', [$faq->faqId]) }}" class="btn btn-danger"  onclick="return confirm('Sei sicuro di voler proseguire?')">Elimina</a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Sezione per eventuale messaggio di successo o di errore -->
            <div class="text-center">
                @if(session('success'))
                    <strong style="color: green">{{ session('success') }}</strong>
                @endif
                @error('faq-non-eliminata')
                    <h4 style="color: red">{{ $message }}</h4>
                @enderror
                @error('faq-non-trovata')
                    <h4 style="color: red">{{ $message }}</h4>
                @enderror
    
                @include('pagination.paginator', ['paginator' => $faqs->withQueryString()])
            </div>
        </section>
    </div>
@endsection