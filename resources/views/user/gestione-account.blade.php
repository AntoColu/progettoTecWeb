@extends('principale')

@section('title', "I tuoi dati")

@section('content')
    <div class="container" style="margin-bottom: 9%;">
        <h2>I tuoi dati:</h2>
        <ul class="list-group mt-4 mb-4">
            <li class="list-group-item">
                <strong>Nome:</strong> {{ $user->nome }}
            </li>
            <li class="list-group-item">
                <strong>Cognome:</strong> {{ $user->cognome }}
            </li>
            <li class="list-group-item">
                <strong>Data di nascita:</strong> {{ $user->nascita }}
            </li>
            <li class="list-group-item">
                <strong>Indirizzo di residenza:</strong> {{ $user->residenza }}
            </li>
            <li class="list-group-item">
                <strong>Occupazione:</strong> {{ $user->occupazione }}
            </li>
            <li class="list-group-item">
                <strong>Email:</strong> {{ $user->email }}
            </li>
            <li class="list-group-item">
                <strong>Username:</strong> {{ $user->username }}
            </li>
        </ul>

        <a href="{{ route('modifica-dati') }}" class="btn btn-info">Modifica</a>
    </div>

    <!-- Sezione per eventuale messaggio di successo -->
    <div class="text-center">
        @if(session('success'))
            <strong style="color: green">{{ session('success') }}</strong>
        @endif
    </div>
@endsection