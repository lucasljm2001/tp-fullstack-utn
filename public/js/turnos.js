var originales = []
var viejos = document.getElementsByClassName('es');
function getWeekDays(date){

    var first = date.getDate() - date.getDay();
    var last = first + 6;
    
    return {
        firstDay: new Date(date.setDate(first)).toLocaleDateString(),
        lastDay: new Date(date.setDate(last)).toLocaleDateString()
    };    
}
function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
  }
function separar(str) {
    arrstr = str.split('/');
    return(arrstr[1] + '/' + arrstr[1] + '/' + arrstr[2]);
}
function RefreshEventsListener(fecha, hora, ru) {
    //quitamos
     $(".hor").off(); 
     //ReAsociamos
     $(".hor").on("click", function() {
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/susc",
            type: "POST",
            data: {
                id: ru[1],
                fecha: fecha,
                hora: hora            
            },
            success: function (response) {
                var numero = parseInt($('#9').html(), 10);
                $('#9').html(numero-1);
            },
        })
     });
 }
 
$(document).ready(function(){
    var rut = window.location.search;
    var arrayrut = rut.split('=');
    for (let i = 0; i < viejos.length; i++) {
        originales.push(viejos[i].innerHTML);   
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    RefreshEventsListener();
    $('.flecha').click(function () {
        var dir = $(this).attr('id');
        if (dir=='der') {            
            var Fecha1 = $('#dia1').html();
            var split = Fecha1.split("/");
            var newFecha = `${split[1]}/${split[0]}/${split[2]} `
            var semana = getWeekDays(addDays(new Date(newFecha), 7));
            $('#dia1').html(semana.firstDay);
            $('#dia2').html(semana.lastDay);

        } else{
            var Fecha1 = $('#dia1').html();
            var split = Fecha1.split("/");
            var newFecha = `${split[1]}/${split[0]}/${split[2]} `
            var semana = getWeekDays(addDays(new Date(newFecha), -7));
            $('#dia1').html(semana.firstDay);
            $('#dia2').html(semana.lastDay);
        }
    });
    $('#turnos').click(function () {
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/turnosprueba",
            type: "GET",
            data: {
                id: arrayrut[1],            
            },
            success: function (response) {
                var turnos = response.turnos;
                $('.es').html(turnos[0].dia);
            },
        })
    });
    $('#lunes').click(function () {
       var horarios = document.getElementsByClassName('es');
       for (let i = 0; i < horarios.length; i++) {
           horarios[i].innerHTML = originales[i];
       }
       var Fecha1 = $('#dia1').html();
       var split = Fecha1.split("/");
       var newFecha = `${split[1]}/${split[0]}/${split[2]} `
       var fechaModificada = addDays(new Date(newFecha), 1).toLocaleDateString();
       var fechaSplit = fechaModificada.split('/');
       var fechaFinal = `${fechaSplit[2]}-${fechaSplit[1]}-${fechaSplit[0]} `;
       var hora = $('#hor9').html();
       var horaSplit = hora.split(' ');
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/turnosdia",
            type: "GET",
            data: {
                fecha: fechaFinal,
                hora: hora            
            },
            success: function (response) {
                var numero = parseInt($('#9').html(), 10);
                $('#9').html(numero-response.turnos);
                RefreshEventsListener(fechaFinal, horaSplit[0], arrayrut);
            },
        })
    });
    
});