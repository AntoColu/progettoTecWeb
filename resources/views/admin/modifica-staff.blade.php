@extends('principale')

@section('title', "Modifica i dati di questo membro")

@section('content')
    <div class="container">
        <h1>Modifica i dati del membro staff selezionato</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'modifica-staff.store', 'id' => 'modifica-staff', 'class' => 'modifica-staff')) }}
        
            <!-- Parametri che non saranno visibili nella form, ma che devo passare per modificare il membro selezionato -->
            {{ Form::hidden('occupazione', $staff->occupazione) }}
            {{ Form::hidden('ruolo', $staff->ruolo) }}

            <!-- Campo 'nome' -->
            <div>
                {{ Form::label('nome', 'Nome') }}
                {{ Form::text('nome', $staff->nome, ['class' => 'form-control', 'id' => 'nome']) }}
            </div>

            <!-- Campo 'cognome' -->
            <div>
                {{ Form::label('cognome', 'Cognome') }}
                {{ Form::text('cognome', $staff->cognome, ['class' => 'form-control', 'id' => 'cognome']) }}
            </div>

            <!-- Campo 'residenza' -->
            <div>
                {{ Form::label('residenza', 'Residenza') }}
                {{ Form::text('residenza', $staff->residenza, ['class' => 'form-control', 'id' => 'residenza']) }}
            </div>

            <!-- Campo 'nascita' -->
            <div>
                {{ Form::label('nascita', 'Nascita') }}
                {{ Form::input('date', 'nascita', $staff->nascita, ['class' => 'form-control', 'id' => 'nascita']) }}
            </div>

            <!-- Campo 'email' -->
            <div>
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', $staff->email, ['class' => 'form-control', 'id' => 'email']) }}
            </div>

            <!-- Campo 'username' -->
            <div>
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', $staff->username, ['class' => 'form-control', 'id' => 'username']) }}
            </div>

            <!-- Campo 'password' -->
            <div>
                {{ Form::label('password', 'Password') }}
                {{ Form::text('password', $staff->password, ['class' => 'form-control', 'id' => 'password']) }}
            </div>

            <div>
                <!-- Bottone per confermare la modifica -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary', 'onclick' => "return confirm('Procedere con la modifica?')"]) }}

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>
@endsection