$(document).ready(function () {

    // Funzione che genera il numero di auto noleggiate nell'anno corrente
    // per ogni mese, con chiamata AJAX.
    $('#mese-noleggio-form').on('submit', function (event) {

        let formData = $(this).serialize();

        event.preventDefault(); // Impedisce l'invio del modulo normale, che comporterebbe un ricaricamento della pagina

        let token = $(this).find('input[name="_token"]').val();

        // Richiesta AJAX
        $.ajax({
            url: './statistiche/auto-nol',
            method: 'POST',
            data: formData,
            headers: { // Includo il token CSRF
                'X-CSRF-TOKEN': token
            },
            dataType: 'json',
            success: function (response) {
                $('#auto-noleggiate').text(response + "auto");
            },
            error: function (xhr, status, error) {
                $('#auto-noleggiate').text("Ops c'è stato un problema, riprova!").css('color', 'red');
            }
        });
    });
});