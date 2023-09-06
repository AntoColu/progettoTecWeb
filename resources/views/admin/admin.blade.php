@extends('principale')

@section('title', 'Home Admin')

@section('content')
    <div class="container">
        <center>
            <h1>Bentornato amministratore {{Auth::user()->username}}!</h1>
            <h3>Esegui tutte le operazioni necessarie usando la barra di navigazione</h3>
        </center>
    </div>
@endsection