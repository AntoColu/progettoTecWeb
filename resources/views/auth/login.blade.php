@extends('principale')

@section('title', 'Login')

@section('css')
    <link rel="stylesheet" href="{{asset("css/user-forms.css")}}">
@endsection

@section('content')
    <div class="container align-items-center d-flex">
        <div class="container text-center form_container">
            <h1 class="titolo_form mb-3">Che bello rivederti!</h1>
            <h2 class="titolo_form mb-5">Inserisci le tue credenziali d'accesso:</h2>

            @isset($targa)
                {{ Form::open(array('route' => 'login-for-noleggio'))}}
                {{ Form::hidden('targa', $targa) }}
            @else
                {{ Form::open(array('route' => 'login'))}}
            @endisset
            
            <div class="container inner_form">
                <!-- Campo USERNAME -->
                <div class="row align-items-center p-1">
                    <div class="col-4" style="text-align: left;">
                        {{ Form::label('username', 'Nome Utente', ['class' => 'form-label']) }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('username', '', ['class' => 'form-control border-black']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        @error('username')
                            <h4 style="color: red">{{ $message }}</h4>
                        @enderror
                    </div>
                </div>

                <!-- Campo PASSSWORD -->
                <div class="row align-items-center p-1">
                    <div class="col-4" style="text-align: left;">
                        {{ Form::label('password', 'Password', ['class' => 'form-label']) }}
                    </div>
                    <div class="col-8">
                        {{ Form::password('password', ['class' => 'form-control border-black']) }}
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

            <div style="margin: 2%; margin-bottom: 22%;">
                {{ Form::submit('Accedi', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection
