@extends('layouts.principale')

@section('title', 'Inserisci una nuova auto')

@section('js')
    <script src="{{ asset('js/inserisci-auto.js') }}"></script>

    <script>
        $(function () {
            // Rotta per l'inserimento dell'auto
            var actionUrl = "{{ route('inserisci-auto.store') }}";
            var formId = 'inserisci-auto';

            $(":input").on('blur', function (event) {
                // Prendo l'id dell'elemento che ha perso il focus
                var formElementId = $(this).attr('id');
                // Funzione che valida l'elemento della form di cui ho preso l'id
                doElemValidation(formElementId, actionUrl, formId);
            });

            $("#inserisci-auto").on('submit', function (event) {
                // Impedisco l'invio del form (submit) normale, per consentire la validazione personalizzata
                event.preventDefault();
                // Funzione di validazione dell'intera form
                doFormValidation(actionUrl, formId);
            });
        });
    </script>
@endsection


@section('content')
    <div class="container">
        <h1>Inserisci una nuova auto:</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'inserisci-auto.store', 'id' => 'inserisci-auto', 'files' => true, class => 'inserisci-annuncio')) }}

            <!-- Campo 'categoria' -->
            <div>
                {{ Form::label('categoria', 'Categoria') }}
                {{ Form::select('categoria', ['1' => 'Piccole', '2' => 'Medie', '3' => 'Grandi', '4' => 'SUV'], null, ['placeholder' => 'Scegli una categoria'], ['id' => 'categoria']) }}
            </div>

            <!-- Campo 'marca' -->
            <div>
                {{ Form::label('marca', 'Marca') }}
                {{ Form::text('marca', null, ['class' => 'form-control', 'id' => 'marca']) }}
            </div>

            <!-- Campo 'modello' -->
            <div>
                {{ Form::label('modello', 'Modello') }}
                {{ Form::text('modello', null, ['class' => 'form-control', 'id' => 'modello']) }}
            </div>

            <!-- Campo 'targa' -->
            <div>
                {{ Form::label('targa', 'Targa') }}
                {{ Form::text('targa', null, ['class' => 'form-control', 'id' => 'targa']) }}
            </div>

            <!-- Campo 'anno' -->
            <div>
                {{ Form::label('anno', 'Anno') }}
                {{ Form::text('anno', null, ['class' => 'form-control', 'id' => 'anno']) }}
            </div>

            <!-- Campo 'nPosti' -->
            <div>
                {{ Form::label('nPosti', 'Numero di posti') }}
                {{ Form::number('nPosti', null, ['class' => 'form-control', 'id' => 'nPosti']) }}
            </div>

            <!-- Campo 'motore' -->
            <div>
                {{ Form::label('motore', 'Motore') }}
                {{ Form::text('motore', null, ['class' => 'form-control', 'id' => 'motore']) }}
            </div>

            <!-- Campo 'carburante' -->
            <div>
                {{ Form::label('carburante', 'Carburante') }}
                {{ Form::text('carburante', null, ['class' => 'form-control', 'id' => 'carburante']) }}
            </div>

            <!-- Campo 'descrizione' -->
            <div>
                {{ Form::label('descrizione', 'Descrizione') }}
                {{ Form::textarea('descrizione', null, ['class' => 'form-control', 'id' => 'descrizione']) }}
            </div>

            <!-- Campo 'prezzo' -->
            <div>
                {{ Form::label('prezzo', 'Prezzo') }}
                {{ Form::number('prezzo', null, ['class' => 'form-control', 'id' => 'prezzo']) }}
            </div>

            <!-- Campo 'img-principale' -->
            <div>
                {{ Form::label('img-principale', 'Immagine principale') }}
                {{ Form::file('img-principale', ['class' => 'form-control', 'id' => 'img-principale']) }}
            </div>

            <!-- Campo 'img-destra' -->
            <div>
                {{ Form::label('img-destra', 'Lato destro') }}
                {{ Form::file('img-destra', ['class' => 'form-control', 'id' => 'img-destra']) }}
            </div>

            <!-- Campo 'img-sinistra' -->
            <div>
                {{ Form::label('img-sinistra', 'Lato sinistro') }}
                {{ Form::file('img-sinistra', ['class' => 'form-control', 'id' => 'img-sinistra']) }}
            </div>

            <!-- Campo 'img-frontale' -->
            <div>
                {{ Form::label('img-frontale', 'Lato anteriore') }}
                {{ Form::file('img-frontale', ['class' => 'form-control', 'id' => 'img-frontale']) }}
            </div>

            <!-- Campo 'img-posteriore' -->
            <div>
                {{ Form::label('img-posteriore', 'Lato posteriore') }}
                {{ Form::file('img-posteriore', ['class' => 'form-control', 'id' => 'img-posteriore']) }}
            </div>

            <div>
                <!-- Bottone per confermare l'inserimento -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary', 'onclick' => "return confirm('Sei sicuro di voler proseguire?')"]) }}

                <!-- Bottone per svuotare i campi -->
                <button class="bottone" onclick="document.getElementById('inserisci-auto').reset()">Svuota campi</button>

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection