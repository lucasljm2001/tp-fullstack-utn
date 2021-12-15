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
$(document).ready(function(){
    var rut = window.location.search;
    var arrayrut = rut.split('=');
    for (let i = 0; i < viejos.length; i++) {
        originales.push(viejos[i].innerHTML);   
    }
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
                console.log(turnos[0].dia);
            },
        })
    });
    $('#lunes').click(function () {
       var horarios = document.getElementsByClassName('es');
       for (let i = 0; i < horarios.length; i++) {
           horarios[i].innerHTML = originales[i];
       }
        /*$.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/turnosprueba",
            type: "GET",
            data: {
                id: arrayrut[1],            
            },
            success: function (response) {
                var turnos = response.turnos;
                $('.es').html(turnos[0].dia);
                console.log(turnos[0].dia);
            },
        })*/
    });
});