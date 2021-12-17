$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.eliminar').click(function () {
        var nombre = $(this).attr("id");
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/rutinas",
            type: "DELETE",
            data: {
                nombre: nombre,           
            },
            success: function (response) {
                location.reload();
            },
        })
    });
    $('.agregar').click(function () {
        var nombre = $('#nombre').val();
        var ej1 = $('#ej1').val();
        var ej2 = $('#ej2').val();
        var dia = $('#dia').val();
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/rutinas",
            type: "POST",
            data: {
                nombre: nombre,
                ej1: ej1,
                ej2: ej2,
                dia: dia,           
            },
            success: function (response) {
                location.reload();
            },
        })
    });
});