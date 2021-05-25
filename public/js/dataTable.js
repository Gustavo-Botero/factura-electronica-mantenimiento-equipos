$(function () {

    $(".myTable").DataTable({
        processing: true,
        serverSide: true,
        aaSorting: [],
        ajax: {
            url: $('.myTable').data('route'),
            type: 'POST',
            data: {'_token': window.laravel.token}
        },
        columns: [
            {data: 'maintId', name: 'id'},
            {data: 'nombres', name: 'nombres'},
            {data: 'apellidos', name: 'apellidos'},
            {data: 'numeroTelefono', name: 'numero_telefono'},
            {data: 'direccion', name: 'direccion'},
            {data: 'referencia', name: 'referencia'},
            {data: 'tipoEquipo', name: 'tipo_equipo'},
            {data: 'tipoMantenimiento', name: 'tipo_mantenimiento'},
            {data: 'descripcion', name: 'descripcion'},

        ],
        
    });
    
} );