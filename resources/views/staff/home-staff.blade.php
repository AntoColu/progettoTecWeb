@extends('principale')

@section('title', 'Home Staff')

@section('content')
    <div class="container" style="margin-top: 5%">
        <center>
            <h1 class="mb-4">Bentornato {{Auth::user()->username}}!</h1>

            <h3>Sezione dedicata ai membri dello staff</h3>
            <h3 style="margin-bottom: 20%">Esegui tutte le operazioni necessarie usando la barra di navigazione</h3>
        </center>
    </div>
@endsection