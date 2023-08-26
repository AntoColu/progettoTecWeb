@extends('layouts.principale')

@section('title', 'Gestione auto')

@section('content')
    <main class="main-container">
        <!-- Bottone per l'aggiunta di una nuova auto -->
        <a href="{{ route('inserisci-auto-view') }}" class="btn btn-primary">Nuova auto</a>

        <!-- Sezione dedicata alla presentazione di tutte le auto dove, per ogni auto,
             è possibile modificarne i dati o eliminarla -->
        <section class="catalogo">
            <h1> Auto presenti in catalogo </h1>
            <div class="row justify-content-center">
                @foreach($automobili as $auto)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img-principale'})}}" alt="Foto Automobile">
                        <div class="card-body">
                            <h4 class="card-title">{{$auto->marca}} {{$auto->modello}}</h4>
                            <p class="card-text">{{$auto->descrizione}}</p>
                            <a href="{{ route('modifica-auto-view', [$auto->targa]) }}" class="btn btn-info">Modifica</a>
                            <a href="{{ route('elimina-auto', [$auto->targa]) }}" class="btn btn-danger"  onclick="return confirm('Sei sicuro di voler proseguire?')">Elimina</a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            @include('paginator.paginator', ['paginator' => $automobili->withQueryString()])
        </section>
    </main>
@endsection