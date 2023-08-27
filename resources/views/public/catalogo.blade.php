@extends('layouts.principale')

@section('title', 'Catalogo noleggi')

@section('js')
    <script src="{{asset('js/catalogo.js')}}"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Barra laterale dove è possibile filtrare le auto per categoria -->
        <aside class="lateral-bar">
            <h2> Categorie </h2>
            @foreach ($categorie as $categoria)
                <a href="{{ route('catalogo2', [$categoria->catId]) }}">{{ $categoria->nome }}</a>
            @endforeach

            <h2> Filtri </h2>
            @include('layouts/filtri')
        </aside>

        <section class="catalogo">
            <h1> Auto disponibili al noleggio </h1>
            <!-- Elenco di tutte le auto a catalogo, usando la struttura di Bootstrap "card" -->
            <div class="row justify-content-center">
                @foreach($automobili as $auto)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img-principale'})}}" class="card-img-top custom_card" alt="Foto Automobile">
                            <div class="card-body">
                                <h3 class="card-title">{{$auto->marca}}</h3>
                                <h3 class="card-title">{{$auto->modello}}</h3>
                                <p class="card-text">{{$auto->descrizione}}</p>
                                <a href="{{ route('dettagli-auto', [$auto->targa])}}" class="btn btn-primary">Vai al noleggio</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('paginator.paginator', ['paginator' => $automobili->withQueryString()])
        </section>
    </div>
@endsection