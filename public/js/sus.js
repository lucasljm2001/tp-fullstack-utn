$(document).ready(function(){
    var rut = location.href;
    var arrayrut = rut.split('/');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.conf').click(function () {
        var dato = $('#dias').val();
        var num = parseInt(dato, 10);
        var ac = $(this).attr("id");
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/susc",
            type: "POST",
            data: {
                id: arrayrut[7],
                dias: num,
                accion: ac
            },
            success: function (response) {
                $('#numer').html(response.ndias);
            },
        })
    });
});