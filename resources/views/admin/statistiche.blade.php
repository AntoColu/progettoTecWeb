@extends('principale')

@section('title', 'Statistiche')

@section('css')
    <link rel="stylesheet" href="{{asset("css/statistiche.css")}}">
@endsection

@section('js')
    <script src="{{asset('js/statistiche.js')}}"></script>
@endsection

@section("content")
    <div class="container text-center h-100 w-50 py-4">
        <div class="row">
            <h2 class="mb-5">Numero totale di auto noleggiate nell'anno corrente</h2>
            <h3>Seleziona un mese:</h3>
            {{ Form::open(['route' => 'statistiche-auto', 'id' => 'mese-noleggio-form']) }}

                {{ Form::selectMonth('mese_inizio', null, ['id' => 'selectMonth']) }}
                {{ Form::submit('Vai', ['class' => 'btn btn-primary', 'id' => 'mese_btn']) }}
                
                <h1 id="auto-noleggiate"></h1>

            {{ Form::close() }}    
        </div>
    </div>
@endsection