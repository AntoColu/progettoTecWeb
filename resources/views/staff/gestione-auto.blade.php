@extends('principale')

@section('title', 'Gestione auto')

@section('content')
    <div class="container">
        <!-- Bottone per l'aggiunta di una nuova auto -->
        <a href="{{ route('inserisci-auto') }}" class="btn btn-primary">Nuova auto</a>

        <!-- Sezione dedicata alla presentazione di tutte le auto dove, per ogni auto,
             è possibile modificarne i dati o eliminarla -->
        <section>
            <h1 class="mb-4"> Auto presenti in catalogo </h1>
            <div class="row justify-content-center">
                @foreach($automobili as $auto)
                    <div class="card" style="width: 20rem; margin: 1%">
                        <img src="{{asset($img_path = 'images/auto/' . $auto->nome_img . '_principale.jpg')}}" class="card-img-top custom_card" alt="Foto Automobile">
                        <div class="card-body">
                            <h3 class="card-title">{{$auto->marca}} {{$auto->modello}} - {{$auto->anno}}</h3>
                            <p class="card-text">{{$auto->descrizione}}</p>
                            <h5 class="card-text">Prezzo giornaliero: € {{$auto->prezzo}}</h5>
                            <a href="{{ route('modifica-auto', [$auto->targa]) }}" class="btn btn-info">Modifica</a>
                            <a href="{{ route('elimina-auto', [$auto->targa]) }}" class="btn btn-danger"  onclick="return confirm('Sei sicuro di voler proseguire?')">Elimina</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sezione per eventuale messaggio di successo del noleggio o di errore -->
            <div class="text-center mt-5">
                @if(session('success'))
                    <strong style="color: green">{{ session('success') }}</strong>
                @endif
                @error('auto-non-eliminata')
                    <h4 style="color: red">{{ $message }}</h4>
                @enderror
                @error('auto-non-trovata')
                    <h4 style="color: red">{{ $message }}</h4>
                @enderror
    
                @include('pagination.paginator', ['paginator' => $automobili->withQueryString()])
            </div>
        </section>
    </div>
@endsection