@extends('principale')

@section('title', 'Home Staff')

@section('content')
    <div class="container">
        <h1>Bentornato ({{Auth::user()->username}})!</h1>

        <h3>Sezione dedicata ai membri dello staff</h3>
        <h3>Esegui tutte le operazioni necessarie usando la barra di navigazione</h3>
    </div>
@endsection