'use strict'

$(document).ready(function() {

    var form = $("#ajax-contact");
    formSecurity(form);
    requestForm(form);
});

function formSecurity(form) {
    form.append('<input class="bouton mx-auto" type="submit" name="Envoyer" id="Envoyer" value="Envoyer"/>');
}

function requestForm(form) {
    $(form).submit(function(event) {
        sendMail(form);
    });
}

function sendMail(form) {
    var formData = $(form).serialize();

    $.ajax({
            type: "POST",
            url: $(form).attr("action"),
            data: formData
        })
        .done(function(response) {
            // Set the message text.
            popupInfo(response);
        })
        .fail(function(data) {
            // Set the message text.
            if (data.responseText !== '') {
                popupInfo(data.responseText);
            } else {
                popupInfo("Erreur le mail ne peut pas s'envoyer");
            }
        });
}

function popupInfo(content) {
    $('main').append('<div class="pop-up alert alert-success alert-dismissible fade show" role="alert"><p>' + content + '</p><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

    setTimeout(function() {
        $('.alert').remove();
    }, 8000);
}
