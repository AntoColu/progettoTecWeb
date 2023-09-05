@extends('principale')

@section('title', 'Crea una nuova faq')

@section('content')
    <div class="container">
        <h1>Inserisci una nuova FAQ:</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'inserisci-faq.store', 'id' => 'inserisci-faq', 'class' => 'inserisci-faq')) }}

            <!-- Campo 'domanda' -->
            <div>
                {{ Form::label('domanda', 'Domanda') }}
                {{ Form::textarea('domanda', null, ['class' => 'form-control', 'id' => 'domanda']) }}
            </div>

            <!-- Campo 'risposta' -->
            <div>
                {{ Form::label('risposta', 'Risposta') }}
                {{ Form::textarea('risposta', null, ['class' => 'form-control', 'id' => 'risposta']) }}
            </div>

            <div>
                <br><br>
                <!-- Bottone per confermare l'inserimento -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary', 'onclick' => "return confirm('Sei sicuro di voler proseguire?')"]) }}

                <!-- Bottone per svuotare i campi -->
                <button class="btn btn-warning" onclick="document.getElementById('inserisci-faq').reset()">Svuota campi</button>

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection