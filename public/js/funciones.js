function sendAjax(idForm) {
    let valImput = {};

    $('#' + idForm + ' label').each(function (index, value) {
        let label = $(this).attr('for');
        item = [];
        valImput[label] = $('#' + label).val();
        // console.log(valImput);
        // valImput.push(item);
    });
    
    $.ajax({
        type: 'POST',
        url: $('#' + idForm).attr('action'),
        data: {
            data: valImput,
            _token: window.laravel.token
        },
        success: function (response) {
            console.log(response);
            outAjax(response);
        }
    });

    console.log(valImput);
    console.log($('#' + idForm).attr('action'));
}

function outAjax(obj) {
    console.log(obj);
}