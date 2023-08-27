/**
 *  Funzione per la validazione dell'elemento della form di cui ho passato l'id
**/
function doElemValidation(id, actionUrl, formId) {

    var formElems;

    // Funzione che aggiunge il token CSRF a FormData
    function addFormToken() {
        var tokenVal = $("#" + formId + " input[name=_token]").val();
        formElems.append('_token', tokenVal);
    }

    // Invia una richiesta AJAX al server
    function sendAjaxReq() {
        $.ajax({
            type: 'POST',
            url: actionUrl, // URL di destinazione
            data: formElems,
            dataType: "json",

            // Funzione per la gestione degli errori
            error: function (data) {
                // Caso in cui lo stato della risposta è 422 => Unprocessable Entity
                if (data.status === 422) {
                    var errMsgs = JSON.parse(data.responseText);   // Trasformazione in array associativo dei messaggi di errore
                    $("#" + id).parent().find('.errors').remove(); // Elimino eventuali messaggi di errore esistenti
                    $("#" + id).after(getErrorHtml(errMsgs[id]));  // Inserisco i nuovi messaggi di errore corrispondenti all'elemento
                }
            },

            contentType: false,  // Dico di non specificare il tipo di contenuto
            processData: false   // Dico non elaborare i dati della form
        });
    }

    var elem = $("#" + id);
    if (elem.attr('type') === 'file') {
        // Se l'elemento di input è un campo file allora bisogna costruire il valore da inviare
        if (elem.val() !== '') {
            inputVal = elem.get(0).files[0];  // Ottengo il file caricato
        } else {
            inputVal = new File([""], "");  // Creo un oggetto di tipo File vuoto
        }
    } else {
        // Altrimenti l'elemento è di tipo diverso da file
        inputVal = elem.val();
    }
    
    formElems = new FormData();  // Creo un oggetto FormData, ovvero una struttura dati di tipo form da inviare al server
    formElems.append(id, inputVal);  // Aggiungo dati

    addFormToken(); // Aggiungo il token CSRF a FormData
    sendAjaxReq();  // Invio la richiesta AJAX al server
}


/**
 *  Funzione che si attiva al click sul bottone di submit. Validazione dell'intera form.
**/
function doFormValidation(actionUrl, formId) {
    var form = new FormData(document.getElementById(formId)); // Oggetto FormData, che rappresenta la form

    // Attiva la utility function AJAX
    $.ajax({
        type: 'POST',
        url: actionUrl,
        data: form,
        dataType: "json",
        error: function (data) {
            if (data.status === 422) {
                var errMsgs = JSON.parse(data.responseText);

                $.each(errMsgs, function (id) {
                    $("#" + id).parent().find('.errors').remove();
                    $("#" + id).after(getErrorHtml(errMsgs[id]));
                });
            }
        },
        // Nel caso in cui i dati vengono validati
        success: function (data) {
            window.location.replace(data.redirect); // "Spedisco" l'utente nella view apposita
        },
        
        contentType: false,
        processData: false
    });
}