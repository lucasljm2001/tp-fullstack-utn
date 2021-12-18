function RefreshEventsListener() {
    //quitamos
     $(".editar").off(); 
     //ReAsociamos
     $(".editar").on("click", function() {
        alert('hola');;
     });
 }
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //RefreshEventsListener()
    $('.editar').click(function () {
        var nombre = $(this).attr("id");
        var str = nombre.split(' ');
        var final = str[0];
        var datos = [];
        $('.' + final).each(function(){
            datos.push($(this).html());
        });
        //document.getElementById('nombre').value = datos[0];
        
        $('#nombrein').val(datos[0]);
        $('#apellidoin').val(datos[1]);
        $('#desafioin').val(datos[2]);
        $('#marcain').val(datos[3]);
    });
    $('.modificar').click(function () {
        var nombre = $('#nombrein').val();
        var apellido = $('#apellidoin').val();
        var desafio = $('#desafioin').val();
        var marca = $('#marcain').val();
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/marcas",
            type: "POST",
            data: {
                nombre: nombre,
                apellido: apellido,
                desafio: desafio,
                marca: marca,           
            },
            success: function (response) {
                //console.log(response)
                location.reload();
            },
        })
    });
    $('.agregar').click(function () {
        var nombre = $('#nombrein').val();
        var apellido = $('#apellidoin').val();
        var desafio = $('#desafioin').val();
        var marca = $('#marcain').val();
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/marcas",
            type: "POST",
            data: {
                nombre: nombre,
                apellido: apellido,
                desafio: desafio,
                marca: marca,           
            },
            success: function (response) {
                //console.log(response)
                location.reload();
            },
        })
    });
});
    
