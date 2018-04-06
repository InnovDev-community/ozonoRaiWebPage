'use strict'

var inputs = {
    'id-nombre': false,
    'id-tel': false,
    'id-email': false
}

var button = $('#id-boton')
var message_area = $('#id-mensaje')

message_area.keyup(validar_inputs)

$('input').keyup(function() {
    let pattern = new RegExp($(this).attr('pattern') + '$')
    let value = $(this).val()
    let id = $(this).attr('id')
    let span = $('#' + id + '-span')

    if (pattern.test(value)) {
        $(this).removeClass('incorrect')
		$(this).addClass('correct')

		span.removeClass("icon-cancel")
		span.addClass("icon-ok")

		inputs[id] = true
    } else {
        $(this).removeClass('correct')
		$(this).addClass('incorrect')

		span.removeClass("icon-ok")
		span.addClass("icon-cancel")

		inputs[id] = false
    }

    validar_inputs()
})

function validar_inputs() {
    let f = false

    for (let i in inputs) {
        if (!inputs[i]) {
            f = true
            break
        }
    }

    if (!f) {
        if (message_area.val()) button.removeAttr('disabled')
        else button.attr('disabled', 'true')
    } else button.attr('disabled', 'true')
}
