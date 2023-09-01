@extends('principale')

@section('title', "Modifica i dati dell'auto")

@section('content')
    <div class="container">
        <h1>Modifica i dati dell'auto</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'modifica-auto.store', 'id' => 'modifica-auto', 'files' => true, 'class' => 'modifica-auto')) }}

            <!-- Parametri che non saranno visibili nella form, ma che devo passare per modificare l'auto -->
            {{ Form::hidden('username', $auto->username) }}
            {{ Form::hidden('data_inizio', $auto->data_inizio) }}
            {{ Form::hidden('data_fine', $auto->data_fine) }}
            {{ Form::hidden('img_principale', $auto->img_principale) }}
            {{ Form::hidden('img_destra', $auto->img_destra) }}
            {{ Form::hidden('img_sinistra', $auto->img_sinistra) }}
            {{ Form::hidden('img_frontale', $auto->img_frontale) }}
            {{ Form::hidden('img_posteriore', $auto->img_posteriore) }}

            <!-- Campo 'categoria' -->
            <div class="form-group">
                {{ Form::label('catId', 'Categoria') }}
                {{ Form::select('catId', ['1' => 'Piccole', '2' => 'Medie', '3' => 'Grandi', '4' => 'SUV'], $auto->catId, ['placeholder' => 'Scegli una categoria'], ['id' => 'catId']) }}
            </div>

            <!-- Campo 'marca' -->
            <div class="form-group">
                {{ Form::label('marca', 'Marca') }}
                {{ Form::text('marca', $auto->marca, ['class' => 'form-control', 'id' => 'marca']) }}
            </div>

            <!-- Campo 'modello' -->
            <div class="form-group">
                {{ Form::label('modello', 'Modello') }}
                {{ Form::text('modello', $auto->modello, ['class' => 'form-control', 'id' => 'modello']) }}
            </div>

            <!-- Campo 'targa' -->
            <div class="form-group">
                {{ Form::label('targa', 'Targa') }}
                {{ Form::text('targa', $auto->targa, ['class' => 'form-control', 'id' => 'targa']) }}
            </div>

            <!-- Campo 'anno' -->
            <div class="form-group">
                {{ Form::label('anno', 'Anno') }}
                {{ Form::number('anno', $auto->anno, ['class' => 'form-control', 'id' => 'anno']) }}
            </div>

            <!-- Campo 'nPosti' -->
            <div class="form-group">
                {{ Form::label('nPosti', 'Numero di posti') }}
                {{ Form::number('nPosti', $auto->nPosti, ['class' => 'form-control', 'id' => 'nPosti']) }}
            </div>

            <!-- Campo 'motore' -->
            <div class="form-group">
                {{ Form::label('motore', 'Motore') }}
                {{ Form::text('motore', $auto->motore, ['class' => 'form-control', 'id' => 'motore']) }}
            </div>

            <!-- Campo 'carburante' -->
            <div class="form-group">
                {{ Form::label('carburante', 'Carburante') }}
                {{ Form::text('carburante', $auto->carburante, ['class' => 'form-control', 'id' => 'carburante']) }}
            </div>

            <!-- Campo 'descrizione' -->
            <div class="form-group">
                {{ Form::label('descrizione', 'Descrizione') }}
                {{ Form::textarea('descrizione', $auto->descrizione, ['class' => 'form-control', 'id' => 'descrizione']) }}
            </div>

            <!-- Campo 'prezzo' -->
            <div class="form-group">
                {{ Form::label('prezzo', 'Prezzo') }}
                {{ Form::number('prezzo', $auto->prezzo, ['class' => 'form-control', 'id' => 'prezzo']) }}
            </div>

            <div>
                <!-- Bottone per confermare la modifica -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary', 'onclick' => "return confirm('Procedere con la modifica?')"]) }}

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection