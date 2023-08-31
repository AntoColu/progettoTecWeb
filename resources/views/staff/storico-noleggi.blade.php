@extends('principale')

@section('title', 'Storico noleggi')

@section('js')
    <script src="{{asset("js/statistiche.js")}}"></script>

    <script>
        $(document).ready(function () {
            // Seleziona il campo di selezione del mese generato da Form::selectMonth()
            var selectMonth = $('select[name="mese_inizio"]');
            
            // Gli assegno un ID
            selectMonth.attr('id', 'meseInizio');
        });
    </script>
        
@endsection

@section('content')
    <div class="container">
        <!-- Barra laterale dove è possibile filtrare le auto per mese -->
        <aside class="lateral-bar">
            <h2> Mesi </h2>
            {{ Form::open(['route' => 'storico-mese', 'id' => 'filtro-mese-noleggio']) }}

                {{ Form::selectMonth('mese_inizio') }}
                {{ Form::submit('Vai', ['class' => 'btn btn-primary']) }}

            {{ Form::close() }}
        </aside>

        <h1>Storico delle auto noleggiate</h1>
        <!-- Elenco delle auto noleggiate in un determinato mese -->
        <div class="row justify-content-center">
            @foreach($auto_filtrate as $auto)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{$img_path = 'images/auto/' . $auto->nome_img . '_principale.png'}}
                        <img src="{{asset($img_path)}}" class="card-img-top custom_card" alt="Foto Automobile">
            
                        <div class="card-body">
                            <h3 class="card-title">{{$auto->marca}}</h3>
                            <h3 class="card-title">{{$auto->modello}}</h3>
                            <h5 class="card-text">Utente: {{$auto->username}}</h5>
                            <p class="card-text">Noleggiata dal: {{$auto->data_inizio}}</p>
                            <p class="card-text">fino al: {{$auto->data_fine}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @include('paginator.paginator', ['paginator' => $automobili->withQueryString()])
    </div>
@endsection