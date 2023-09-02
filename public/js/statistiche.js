$(document).ready(function () {

    // Funzione che genera il numero di auto noleggiate nell'anno corrente
    // per ogni mese, con chiamata AJAX.
    $('#num-auto').on('click', function () {

        $.ajax({
            url: './statistiche/auto-nol',
            method: 'GET',
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