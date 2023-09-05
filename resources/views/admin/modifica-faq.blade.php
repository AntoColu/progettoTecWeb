@extends('principale')

@section('title', 'Crea una nuova faq')

@section('content')
    <div class="container">
        <h1>Modifica la FAQ</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'modifica-faq.store', 'id' => 'modifica-faq', 'class' => 'modifica-faq')) }}
            
            <!-- Parametri che non saranno visibili nella form, ma che devo passare per modificare il membro selezionato -->
            {{ Form::hidden('faqId', $faq->faqId) }}

            <!-- Campo 'domanda' -->
            <div>
                {{ Form::label('domanda', 'Domanda') }}
                {{ Form::textarea('domanda', $faq->domanda, ['class' => 'form-control', 'id' => 'domanda']) }}
            </div>

            <!-- Campo 'risposta' -->
            <div>
                {{ Form::label('risposta', 'Risposta') }}
                {{ Form::textarea('risposta', $faq->risposta, ['class' => 'form-control', 'id' => 'risposta']) }}
            </div>

            <br><br>

            <div>
                <!-- Bottone per confermare la modifica -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary', 'onclick' => "return confirm('Procedere con la modifica?')"]) }}

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection