function sendAjax(idForm) {
    let valImput = {};

    // Capturando los name de los imput para enviarlos al controlador
    $('#' + idForm + ' label').each(function (index, value) {
        let label = $(this).attr('for');
        valImput[label] = $('#' + label).val();
    });

    $.ajax({
        type: 'POST',
        url: $('#' + idForm).attr('action'),
        data: {
            data: valImput,
            _token: window.laravel.token
        },
        success: function (response) {
            outAjax(response);
        }
    });
}

function outAjax(obj) {
    // Salida el alert generico
    if (obj.alert) {
        alertGenerico(obj);
    }

    // Limpiar el formulario cuando guarda los datos
    if (obj.limpForm['limpiar']) {
        limpiarForm(obj.limpForm['idForm']);
    }

    $('.dataTable').DataTable().ajax.reload();
}

function limpiarForm(idForm) {
    // Resetear todo el formulario
    $('#'+ idForm)[0].reset();
}

function alertGenerico(obj) {
    // Alert generico
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        icon: obj.icon,
        title: obj.title
    })
}