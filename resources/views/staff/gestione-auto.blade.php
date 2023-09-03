@extends('principale')

@section('title', 'Gestione auto')

@section('content')
    <div class="container">
        <!-- Bottone per l'aggiunta di una nuova auto -->
        <a href="{{ route('inserisci-auto') }}" class="btn btn-primary">Nuova auto</a>

        <!-- Sezione dedicata alla presentazione di tutte le auto dove, per ogni auto,
             è possibile modificarne i dati o eliminarla -->
        <section class="catalogo">
            <h1> Auto presenti in catalogo </h1>
            <div class="row justify-content-center">
                @foreach($automobili as $auto)
                    <div class="card" style="width: 18rem;">
                        {{$img_path = 'images/auto/' . $auto->nome_img . '_principale.png'}}
                        <img src="{{asset($img_path)}}" class="card-img-top custom_card" alt="Foto Automobile">
                        {{--<img class="card-img-top" src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img_principale'})}}" alt="Foto Automobile">--}}
                        <div class="card-body">
                            <h4 class="card-title">{{$auto->marca}} {{$auto->modello}} - {{$auto->anno}}</h4>
                            <p class="card-text">{{$auto->descrizione}}</p>
                            <a href="{{ route('modifica-auto', [$auto->targa]) }}" class="btn btn-info">Modifica</a>
                            <a href="{{ route('elimina-auto', [$auto->targa]) }}" class="btn btn-danger"  onclick="return confirm('Sei sicuro di voler proseguire?')">Elimina</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sezione per eventuale messaggio di successo del noleggio o di errore -->
            <div class="text-center">
                @if(session('success'))
                    <strong style="color: green">{{ session('success') }}</strong>
                @endif
                @error('auto-non-eliminata')
                <span style="color: red">{{ $message }}</span>
                @enderror
    
                @include('pagination.paginator', ['paginator' => $automobili->withQueryString()])
            </div>
        </section>
    </div>
@endsection