// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable( {
        "language": {

            "search":"Buscar",
            "lengthMenu": "Total de registros a motrar _MENU_ ",
            "zeroRecords": "No se encontraron registros",
            "info": "total de paginas _PAGE_ de _PAGES_",
            "infoEmpty": "no se encuentran registros",
            "infoFiltered": "(se filtraron un total de _MAX_ resultados)"
            
        }
    } );
} );
