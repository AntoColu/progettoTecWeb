@extends('principale')

@section('title', "Modifica i dati di questo membro")

@section('content')
    <div class="container">
        <h1>Modifica i dati del membro staff selezionato</h1>

        <div class="wrap">
            {{ Form::open(array('route' => 'modifica-staff.store', 'id' => 'modifica-staff', 'class' => 'modifica-staff')) }}
        
            <!-- Parametri che non saranno visibili nella form, ma che devo passare per modificare il membro selezionato -->
            {{ Form::hidden('occupazione', 'Dipendente') }}
            {{ Form::hidden('ruolo', 'staff') }}
        </div>
@endsection