@extends('principale')

@section('title', "Modifica i dati dell'auto")

@section('css')
    <link rel="stylesheet" href="{{asset("css/forms.css")}}">
@endsection

@section('content')
    <div class="container">
        <h1>Modifica i dati dell'auto</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'modifica-auto.store', 'id' => 'modifica-auto', 'files' => true, 'class' => 'modifica-auto')) }}

            <!-- Parametri che non saranno visibili nella form, ma che devo passare per modificare l'auto -->
            {{ Form::hidden('targa', $auto->targa) }}
            {{ Form::hidden('nome_img', $auto->nome_img) }}

            <!-- Campo 'categoria' -->
            <div class="form-group">
                <strong>{{ Form::label('catId', 'Categoria') }}</strong>
                {{ Form::select('catId', [1 => 'Piccole', 2 => 'Medie', 3 => 'Grandi', 4 => 'SUV'], $auto->catId, ['placeholder' => 'Scegli una categoria', 'class' => 'form-control'], ['id' => 'catId']) }}
            </div>

            <!-- Campo 'marca' -->
            <div class="form-group">
                <strong>{{ Form::label('marca', 'Marca') }}</strong>
                {{ Form::text('marca', $auto->marca, ['class' => 'form-control', 'id' => 'marca']) }}
            </div>

            <!-- Campo 'modello' -->
            <div class="form-group">
                <strong>{{ Form::label('modello', 'Modello') }}</strong>
                {{ Form::text('modello', $auto->modello, ['class' => 'form-control', 'id' => 'modello']) }}
            </div>

            <!-- Campo 'anno' -->
            <div class="form-group">
                <strong>{{ Form::label('anno', 'Anno') }}</strong>
                {{ Form::number('anno', $auto->anno, ['class' => 'form-control', 'id' => 'anno']) }}
            </div>

            <!-- Campo 'nPosti' -->
            <div class="form-group">
                <strong>{{ Form::label('nPosti', 'Numero di posti') }}</strong>
                {{ Form::number('nPosti', $auto->nPosti, ['class' => 'form-control', 'id' => 'nPosti']) }}
            </div>

            <!-- Campo 'motore' -->
            <div class="form-group">
                <strong>{{ Form::label('motore', 'Motore') }}</strong>
                {{ Form::text('motore', $auto->motore, ['class' => 'form-control', 'id' => 'motore']) }}
            </div>

            <!-- Campo 'carburante' -->
            <div class="form-group">
                <strong>{{ Form::label('carburante', 'Carburante') }}</strong>
                {{ Form::text('carburante', $auto->carburante, ['class' => 'form-control', 'id' => 'carburante']) }}
            </div>

            <!-- Campo 'descrizione' -->
            <div class="form-group">
                <strong>{{ Form::label('descrizione', 'Descrizione') }}</strong>
                {{ Form::textarea('descrizione', $auto->descrizione, ['class' => 'form-control', 'id' => 'descrizione']) }}
            </div>

            <!-- Campo 'prezzo' -->
            <div class="form-group">
                <strong>{{ Form::label('prezzo', 'Prezzo') }}</strong>
                {{ Form::number('prezzo', $auto->prezzo, ['class' => 'form-control', 'id' => 'prezzo']) }}
            </div>

            <!-- Campo 'img_principale' -->
            <div>
                {{ Form::label('img_principale', 'Immagine principale') }}
                {{ Form::file('img_principale', ['class' => 'form-control', 'id' => 'img_principale']) }}
            </div>

            <!-- Campo 'img_destra' -->
            <div>
                {{ Form::label('img_destra', 'Lato destro') }}
                {{ Form::file('img_destra', ['class' => 'form-control', 'id' => 'img_destra']) }}
            </div>

            <!-- Campo 'img_sinistra' -->
            <div>
                {{ Form::label('img_sinistra', 'Lato sinistro') }}
                {{ Form::file('img_sinistra', ['class' => 'form-control', 'id' => 'img_sinistra']) }}
            </div>

            <!-- Campo 'img_frontale' -->
            <div>
                {{ Form::label('img_frontale', 'Lato anteriore') }}
                {{ Form::file('img_frontale', ['class' => 'form-control', 'id' => 'img_frontale']) }}
            </div>

            <!-- Campo 'img_posteriore' -->
            <div>
                {{ Form::label('img_posteriore', 'Lato posteriore') }}
                {{ Form::file('img_posteriore', ['class' => 'form-control', 'id' => 'img_posteriore']) }}
            </div>

            <div class="mt-4">
                <!-- Bottone per confermare la modifica -->
                {{ Form::submit('Conferma', ['class' => 'btn btn-primary', 'onclick' => "return confirm('Procedere con la modifica?')"]) }}

                <!-- Chiusura form -->
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection