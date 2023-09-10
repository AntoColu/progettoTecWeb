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

            @if($targa)
                {{ Form::open(array('route' => 'login-for-noleggio'))}}
                {{ Form::hidden('targa', $targa) }}
            @else
                {{ Form::open(array('route' => 'login'))}}
            @endif
            
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
                        <span style="color: red">{{ $message }}</span>
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
                        <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div style="margin: 2%">
                {{ Form::submit('Accedi', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection
