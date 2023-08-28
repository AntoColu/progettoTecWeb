@extends('principale')

@section('title', 'Storico noleggi')

@section('js')
    <script src="{{asset("js/statistiche.js")}}"></script>

    <script>
        $(document).ready(function () {
            // Seleziona il campo di selezione del mese generato da Form::selectMonth()
            var selectMonth = $('select[name="data_inizio"]');
            
            // Gli assegno un ID
            selectMonth.attr('id', 'dataInizio');
        });
    </script>
        
@endsection

@section('content')
    <div class="container">
        <!-- Barra laterale dove è possibile filtrare le auto per mese -->
        <aside class="lateral-bar">
            <h2> Mesi </h2>
            {{ Form::open(['route' => 'storico-mese', 'id' => 'filtro-mese-noleggio']) }}

                {{ Form::selectMonth('data_inizio') }}
                {{ Form::submit('Vai', ['class' => 'btn btn-primary']) }}

            {{ Form::close() }}
        </aside>

        <h1>Storico delle auto noleggiate</h1>
        <!-- Prova di stampa delle auto -->
        <p id='auto-mese'></p>
    </div>
@endsection