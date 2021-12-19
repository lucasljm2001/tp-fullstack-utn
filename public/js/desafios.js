$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //RefreshEventsListener()
    /*$('.editar').click(function () {
        var nombre = $(this).attr("desafio");
        $('#input').val(nombre);
    });*/
    $('.eliminar').click(function () {
        var nombre = $(this).attr("desafio")
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/desafios",
            type: "DELETE",
            data: {
                desafio: nombre      
            },
            success: function (response) {
                //console.log(response)
                location.reload();
            },
        })
    });
    $('.insertar').click(function () {
        var desafio = $('#input').val();
        if ( desafio.trim().length > 0 ) {
            $.ajax({
                url: "http://localhost/tp-fullstack-utn/public/clientes/desafios",
                type: "POST",
                data: {
                    desafio: desafio       
                },
                success: function (response) {
                    //console.log(response)
                    location.reload();
                },
            })
          }
          else {
            alert("Debe ingresar un nombre de desafio valido");
          }
        
    });
});
    
