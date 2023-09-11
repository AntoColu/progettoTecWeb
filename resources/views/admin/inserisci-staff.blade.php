@extends('principale')

@section('title', 'Nuovo membro dello staff')

@section('js')
    <script src="{{ asset('js/inserimento.js') }}"></script>

    {{--<script>
        $(function () {
            // Rotta per l'inserimento dell'auto
            var actionUrl = "{{ route('inserisci-staff.store') }}";
            var formId = 'inserisci-staff';

            $(":input").on('blur', function (event) {
                // Prendo l'id dell'elemento che ha perso il focus
                var formElementId = $(this).attr('id');
                // Funzione che valida l'elemento della form di cui ho preso l'id
                doElemValidation(formElementId, actionUrl, formId);
            });

            $("#inserisci-staff").on('submit', function (event) {
                // Impedisco l'invio del form (submit) normale, per consentire la validazione personalizzata
                event.preventDefault();
                // Funzione di validazione dell'intera form
                doFormValidation(actionUrl, formId);
            });
        });
    </script>--}}
@endsection


@section('content')
    <div class="container">
        <h1>Inserisci un nuovo membro dello staff:</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'inserisci-staff.store', 'id' => 'inserisci-staff', 'files' => true, 'class' => 'inserisci-staff')) }}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}" />--}}

            <!-- Parametri che non saranno visibili nella form, ma che devo passare per inserire il nuovo membro -->
            {{ Form::hidden('occupazione', 'Dipendente') }}
            {{ Form::hidden('ruolo', 'staff') }}

            <!-- Campo 'nome' -->
            <div>
                {{ Form::label('nome', 'Nome') }}
                {{ Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome']) }}
            </div>

            <!-- Campo 'cognome' -->
            <div>
                {{ Form::label('cognome', 'Cognome') }}
                {{ Form::text('cognome', null, ['class' => 'form-control', 'id' => 'cognome']) }}
            </div>

            <!-- Campo 'residenza' -->
            <div>
                {{ Form::label('residenza', 'Residenza') }}
                {{ Form::text('residenza', null, ['class' => 'form-control', 'id' => 'residenza']) }}
            </div>

            <!-- Campo 'nascita' -->
            <div>
                {{ Form::label('nascita', 'Nascita') }}
                {{ Form::input('date', 'nascita', null, ['class' => 'form-control', 'id' => 'nascita']) }}
            </div>

            <!-- Campo 'email' -->
            <div>
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
            </div>

            <!-- Campo 'username' -->
            <div>
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', null, ['class' => 'form-control', 'id' => 'username']) }}
            </div>

            <!-- Campo 'password' -->
            <div>
                {{ Form::label('password', 'Password') }}
                {{ Form::text('password', null, ['class' => 'form-control', 'id' => 'password']) }}
            </div>

            <div>
                <br><br>
                <!-- Bottone per confermare l'inserimento -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary', 'onclick' => "return confirm('Sei sicuro di voler proseguire?')"]) }}

                <!-- Bottone per svuotare i campi -->
                <button class="btn btn-warning" onclick="document.getElementById('inserisci-staff').reset()">Svuota campi</button>

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>

        <!-- Sezione per eventuale messaggio di errore -->
        <div class="text-center">
            @error('errore-inserimento-staff')
                <h4 style="color: red">{{ $message }}</h4>
            @enderror
        </div>
    </div>
@endsection