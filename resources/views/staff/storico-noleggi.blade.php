@extends('principale')

@section('title', 'Storico noleggi')

@section('css')
    <link rel="stylesheet" href="{{asset("css/catalogo.css")}}">
@endsection

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
    <div id="sidebar">
        <!-- Barra laterale dove è possibile filtrare le auto per mese -->
        <aside>
            <h2> Mesi </h2>
            {{ Form::open(['route' => 'storico-mese', 'id' => 'filtro-mese-noleggio', 'method' => 'get']) }}

                {{ Form::selectMonth('mese_inizio') }}
                {{ Form::submit('Vai', ['class' => 'btn btn-primary']) }}

            {{ Form::close() }}
        </aside>
    </div>
    <div class="container h-100 py-4">
        <h1 style="margin-bottom: 5%">Storico delle auto noleggiate</h1>
        @if($auto_filtrate)
            <!-- Elenco delle auto noleggiate in un determinato mese -->
            <div class="row justify-content-center">
                @foreach($auto_filtrate as $auto)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 20rem; margin: 1%">
                            <img src="{{asset($img_path = 'images/auto/' . $auto->nome_img . '_principale.jpg')}}" class="card-img-top custom_card" alt="Foto Automobile">
                
                            <div class="card-body">
                                <h3 class="card-title">{{$auto->marca}} {{$auto->modello}} - {{$auto->anno}}</h3>
                                <h5 class="card-text">Utente: {{$auto->username}}</h5>
                                <h6 class="card-text">Noleggiata dal: {{ \Carbon\Carbon::parse($auto->data_inizio)->format('d-m-Y') }}</h6>
                                <h6 class="card-text">fino al: {{ \Carbon\Carbon::parse($auto->data_fine)->format('d-m-Y') }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container mt-5">
                @include('pagination.paginator', ['paginator' => $auto_filtrate->appends($_GET)])
            </div>
        @else
            <!-- Caso in cui non è stata trovata nessuna auto -->
            <h2 class="mt-5" style="height: 100%">Selezionare un mese, per visualizzare lo storico dei noleggi</h2>

            <!-- Sezione per eventuale messaggio di errore -->
            <div class="text-center mt-4">
                @error('auto-non-trovate')
                    <h4 style="color: red">{{ $message }}</h4>
                @enderror
            </div>
        @endif
    </div>
@endsection