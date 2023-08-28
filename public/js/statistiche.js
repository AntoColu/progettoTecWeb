$(document).ready(function () {

    // Funzione che genera il numero di coupon in base all'offerta scelta con chiamata
    // AJAX.
    $('#filtro-mese-noleggio').on('submit', function (event) {

        let datiFormOfferta = $(this).serialize();

        event.preventDefault();

        let token = $(this).find('input[name="_token"]').val();

        $.ajax({
            url: "./statistiche/off",
            method: 'POST',
            data: datiFormOfferta,
            headers: {
                'X-CSRF-TOKEN': token
            },
            dataType: 'json',
            success: function (response) {

                $('#auto-mese').text("Auto di questo mese: " + response).css('display', 'block');
            },
            error: function (xhr, status, error) {
                $('#auto-mese').text("Qualcosa è andato storto, riprova").css(
                    {
                        color: 'red',
                        display: 'block'
                    });
            }
        });
    });
});