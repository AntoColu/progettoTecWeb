@extends('principale')

@section('title', 'Inserisci una nuova auto')

@section('js')
    <script src="{{ asset('js/inserisci-auto.js') }}"></script>

    <script>
        $(function () {
            // Rotta per l'inserimento dell'auto
            var actionUrl = "{{ route('inserisci-staff.store') }}";
            var formId = 'inserisci-staff';

            $(":input").on('blur', function (event) {
                // Prendo l'id dell'elemento che ha perso il focus
                var formElementId = $(this).attr('id');
                // Funzione che valida l'elemento della form di cui ho preso l'id
                doElemValidation(formElementId, actionUrl, formId);
            });

            $("#inserisci-staff").on('submit', function (event) {
                // Impedisco l'invio del form (submit) normale, per consentire la validazione personalizzata
                event.preventDefault();
                // Funzione di validazione dell'intera form
                doFormValidation(actionUrl, formId);
            });
        });
    </script>
@endsection


@section('content')
    <div class="container">
        <h1>Inserisci un nuovo membro dello staff:</h1>


    </div>
@endsection