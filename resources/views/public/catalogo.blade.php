@extends('layouts.principale')

@section('title', 'Catalogo noleggi')

@section('js')
    <script src="{{asset('js/catalogo.js')}}"></script>
@endsection

@section('content')
    <div class="container">
        <aside class="lateral-bar">
            <h2> Categorie </h2>
            @foreach ($topCategories as $category)
                <a href="{{ route('catalog2', [$category->catId]) }}">{{ $category->nome }}</a>
            @endforeach

            <h2> Filtri </h2>
            @include('layouts/filtri')
        </aside>

        <section class="catalogo">
            <h1> Auto disponibili al noleggio </h1>
            <div class="row justify-content-center">
                @foreach($automobili as $auto)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->foto)}}" class="card-img-top custom_card" alt="Foto Automobile">
                            <div class="card-body">
                                <h3 class="card-title">{{$auto->marca}}</h3>
                                <h4 class="card-title">{{$auto->modello}}</h4>
                                <p class="card-text">{{$auto->descrizione}}</p>
                                <a href="{{ route('dettagli-auto', ['id' => $auto->targa])}}" class="btn btn-primary">Vai al noleggio</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('paginator.paginator', ['paginator' => $automobili->withQueryString()])
        </section>
    </div>
@endsection