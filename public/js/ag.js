$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.bot').click(function () {
        var user = $('#floatingInput').val();
        var pass = $('#floatingPassword').val();
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