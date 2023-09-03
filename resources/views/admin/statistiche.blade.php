@extends('layouts.header-footer')

@section('title', 'Statistiche')

@section("content")
    <div class="container text-center h-100 w-50 py-4">
        <div class="row">
            <h2>Numero totale di auto noleggiate nell'anno corrente</h2>
            <h3>Seleziona un mese:</h3>
            {{ Form::open(['route' => 'statistiche-auto', 'id' => 'mese-noleggio-form']) }}

                {{ Form::selectMonth('mese_inizio') }}
                {{ Form::submit('Vai', ['class' => 'btn btn-primary']) }}

            {{ Form::close() }}
            @foreach ($mesi as $mese)
                <div class="text-center">
                    <h4 id="num-auto">Auto noleggiate a {{ $mese }}</h4>
                    <br>
                    <strong id="auto-noleggiate"></strong>
                </div>
            @endforeach
        </div>
    </div>
@endsection