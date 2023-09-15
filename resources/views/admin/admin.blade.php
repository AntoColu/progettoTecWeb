@extends('principale')

@section('title', 'Home Admin')

@section('content')
    <div class="container">
        <center>
            <h1>Bentornato amministratore {{Auth::user()->username}}!</h1>
        </center>

        
    </div>
@endsection