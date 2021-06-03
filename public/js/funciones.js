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

function destroy(route, id){
    bootbox.confirm({
        message: 'Esta seguro que desea eliminar este registro?',
        buttons: {
            confirm: {
                label: 'Sí',
                className: 'btn-danger'
            },
            cancel: {
                label: 'No',
                className: 'btn-info'
            }
        },
        callback:function(res){
            console.log(res);
            if (res) {
                $.ajax({
                    type: "POST",
                    url: window.laravel.url+'/'+route+'/'+id,
                    data: {
                        _token: window.laravel.token,
                        _method: 'DELETE'
                    },
                    success: function (result) {
                      outAjax(result)  ;
                    }
                });
            }
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

    if (obj.load) {
        $('.dataTable').DataTable().ajax.reload();
    }
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