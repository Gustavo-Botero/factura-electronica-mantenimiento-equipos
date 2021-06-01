$(function () {
    let jsonColumns = [];
    $('.dataTable .columns').find('th').each(function (index, value) { 
         data = $(value).data('name');

         item = {};
         item['data'] = data;

         jsonColumns.push(item);
    });

    $(".dataTable").DataTable({
        processing: true,
        serverSide: true,
        aaSorting: [],
        ajax: {
            url: $('.dataTable').data('route'),
            type: 'POST',
            data: {'_token': window.laravel.token}
        },
        columns: jsonColumns,
        columnDefs : [
            {
                targets: 0,
                orderable: false,
                createdCell: function(td, cellData, rowData, row, col) {
                    let html = `<button class="btn btn-outline-danger" data-delete="`+cellData+`">
                                    <i class="fas fa-trash-alt"></i>
                                </button>`;

                    $(td).html(html);
                }
            },
            {
                targets: 1,
                orderable: false,
                createdCell: function (td, cellData, rowData, row, col) { 
                    let num = ++row;
                    $(td).html(num);
                 }
            }
        ]
        
    });
    
} );