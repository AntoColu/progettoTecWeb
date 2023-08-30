@extends('principale')

@section('title', "I tuoi dati")

@section('content')
    <div class="container">
        <h2>I tuoi dati:</h2>
        <ul>
            <li>Nome: {{ $user->nome }}</li>
            <li>Cognome: {{ $user->cognome }}</li>
            <li>Data di nascita: {{ $user->nascita }}</li>
            <li>Indirizzo di residenza: {{ $user->residenza }}</li>
            <li>Occupazione: {{ $user->occupazione }}</li>
            <li>Email: {{ $user->email }}</li>
            <li>Username: {{ $user->username }}</li>
            <li>Password: {{ $user->password }}</li>
        </ul>

        <a href="{{ route('modifica-dati') }}" class="btn btn-info">Modifica</a>
    </div>
@endsection