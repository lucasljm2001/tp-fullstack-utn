$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(".editar").on("click", function () {
        var id = $(this).attr("id");

        var datos = [];

        $(`.rutina-${id}-value`).each(function () {
            datos.push($(this).html());
        });

        $("#rutina-id").val(id);
        $("#nombre").val(datos[0]);
        $("#ej1").val(datos[1]);
        $("#ej2").val(datos[2]);
        $("#dia").val(datos[3]);
    });

    $(".modificar").click(function () {
        var nombre = $("#nombre").val();
        var datos = [$("#ej1").val(), $("#ej2").val(), $("#dia").val()];
        /* $('.' + nombre).each(function(){
            datos.push($(this).html());
        });*/
        if ($("#nombre").val().trim().length > 0) {
            $.ajax({
                url: "http://localhost/tp-fullstack-utn/public/clientes/rutinas/mod",
                type: "PUT",
                data: {
                    nombre: nombre,
                    datos: datos,
                },
                success: function (response) {
                    //console.log(response);
                    location.reload();
                },
            });
        } else {
            alert("Debe indicar una rutina a editar");
        }
    });
    $(".eliminar").click(function () {
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
        });
    });
    $(".agregar").click(function () {
        var nombre = $("#nombre").val();
        var ej1 = $("#ej1").val();
        var ej2 = $("#ej2").val();
        var dia = $("#dia").val();
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
        });
    });
});
