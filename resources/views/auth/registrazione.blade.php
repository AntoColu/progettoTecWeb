@extends('principale')

@section('title', 'Registrazione')

@section('css')
    <link rel="stylesheet" href="{{asset("css/user-forms.css")}}">
@endsection

@section('content')
    <div class="container align-items-center d-flex">
        <div class="container text-center form_container">
            <h1 class="titolo_form mb-5">Inserisci i tuoi dati:</h1>
                {{ Form::open(array('route' => 'register'))}}

                <!-- Parametro che non sarà visibile nella form, ma che devo passare per modificare i dati -->
                {{ Form::hidden('ruolo', 'user') }}

                <div class="container inner_form">
                    <!-- Campo NOME -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('nome', 'Nome', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('nome', '', array('class' => 'form-control border-black'))}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('nome')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo COGNOME -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('cognome', 'Cognome', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('cognome', '', array('class' => 'form-control border-black')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('cognome')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo RESIDENZA -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('residenza', 'Residenza', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('residenza', '', array('class' => 'form-control border-black')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('residenza')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo NASCITA -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('nascita', 'Data di nascita', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::input('date', 'nascita', '', array('class' => 'form-control border-black')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('nascita')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo EMAIL -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('email', 'Email', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('email', '', array('class' => 'form-control border-black')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('email')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo OCCUPAZIONE -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('occupazione', 'Occupazione', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::select('occupazione', ['Studente' => 'Studente', 'Dipendente' => 'Dipendente', 'Imprenditore' => 'Imprenditore', 'Commerciante' => 'Commerciante'], '', ['placeholder' => 'Scegli la tua occupazione'], array('class' => 'form-control border-black')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('occupazione')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo USERNAME -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('username', 'Nome Utente', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('username', '', array('class' => 'form-control border-black')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('username')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo PASSWORD -->
                    <div class="row align-items-center p-1">
                        <div class="col-4" style="text-align: left;">
                            {{ Form::label('password', 'Password', array('class' => 'form-label')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::password('password', array('class' => 'form-control border-black')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @error('password')
                                <h4 style="color: red">{{ $message }}</h4>
                            @enderror
                        </div>
                    </div>
                </div>

                <div style="margin: 2%">
                    {{ Form::submit('Registrati', ['class' => 'btn btn-primary']) }}
                </div>

                {{ Form::close() }}
        </div>
    </div>
@endsection
