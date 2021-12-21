$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.bot').click(function () {
        var dato = $('#dias').val();
        var num = parseInt(dato, 10);
        var id = $(this).attr("id");
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/ed",
            type: "POST",
            data: {
                id: id,
                dias: num           
            },
            success: function (response) {
                $('#confirmacion').html("se insertaron " + response.dias + " dias al cliente " + response.cliente);
                $('#confirmacion').css("display", "block");
            },
        })
    });
});