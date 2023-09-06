@extends('principale')

@section('title', "Modifica i tuoi dati")

@section('css')
    <link rel="stylesheet" href="{{asset("css/user-forms.css")}}">
@endsection

@section('content')
    <div class="container">
        <h1>Modifica i tuoi dati</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'modifica-dati.store', 'id' => 'modifica-dati', 'files' => true, 'class' => 'modifica-dati')) }}
            
            <!-- Parametro che non sarà visibile nella form, ma che devo passare per modificare i dati -->
            {{ Form::hidden('ruolo', $user->ruolo) }}

            <!-- Campo 'nome' -->
            <div class="form-group">
                {{ Form::label('nome', 'Nome') }}
                {{ Form::text('nome', $user->nome, ['class' => 'form-control', 'id' => 'nome']) }}
            </div>

            <!-- Campo 'cognome' -->
            <div class="form-group">
                {{ Form::label('cognome', 'Cognome') }}
                {{ Form::text('cognome', $user->cognome, ['class' => 'form-control', 'id' => 'cognome']) }}
            </div>

            <!-- Campo 'residenza' -->
            <div class="form-group">
                {{ Form::label('residenza', 'Indirizzo di residenza') }}
                {{ Form::text('residenza', $user->residenza, ['class' => 'form-control', 'id' => 'residenza']) }}
            </div>

            <!-- Campo 'nascita' -->
            <div class="form-group">
                {{ Form::label('nascita', 'Data di nascita') }}
                {{ Form::input('date', 'nascita', $user->nascita, ['class' => 'form-control', 'id' => 'nascita']) }}
            </div>

            <!-- Campo 'email' -->
            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', $user->email, ['class' => 'form-control', 'id' => 'email']) }}
            </div>
            
            <!-- Campo 'occupazione' -->
            <div class="form-group">
                {{ Form::label('occupazione', 'Occupazione') }}
                {{ Form::select('occupazione', ['Studente' => 'Studente', 'Dipendente' => 'Dipendente', 'Imprenditore' => 'Imprenditore', 'Commerciante' => 'Commerciante'], $user->occupazione, ['placeholder' => 'Scegli la tua occupazione'], ['id' => 'occupazione']) }}
            </div>

            <!-- Campo 'password' -->
            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::text('password', null, ['class' => 'form-control', 'id' => 'password']) }}
            </div>

            <div>
                <!-- Bottone per confermare la modifica -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary mt-4', 'onclick' => "return confirm('Procedere con la modifica?')"]) }}

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>

        <!-- Sezione per eventuale messaggio di errore -->
        <div class="text-center">
            @error('errore-modifica-dati')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
    </div>
@endsection