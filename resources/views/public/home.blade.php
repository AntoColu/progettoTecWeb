@extends('layouts.principale')

@section('title', 'Tavernelle Noleggi | Homepage')

@section('content')
    <div id='home'>
        <h1>Benvenuti su Tavernelle Noleggi!</h1>
        <p>Noleggia l'auto dei tuoi sogni e parti per la tua meta preferita!</p>
    </div>

    <div id='chi-siamo'>
        @include('public.chi-siamo')
    </div>

    <div id='dove-siamo'>
        @include('public.dove-siamo')
    </div>

    <div id='faq'>
        @include('public.faq')
    </div>
@endsection