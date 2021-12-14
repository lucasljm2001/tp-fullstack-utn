
$(document).ready(function(){
    $('#turnos').click(function () {
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/turnos",
            type: "POST",
            data: {
                user: "pepito"
            },
            success: function (response) {
                console.log(response);
            }
        })
    });
});