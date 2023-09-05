@extends('principale')

@section('title', 'Tavernelle Noleggi | Homepage')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home-public.css') }}">
@endsection

@section('content')
    <div id='home' class="mt-5">
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