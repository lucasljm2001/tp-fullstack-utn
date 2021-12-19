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
function RefreshEventsListener(fecha, ru, dsem) {
    //quitamos
     $(".hor").off(); 
     //ReAsociamos
     $(".hor").on("click", function() {
        var hora = $(this).attr("id") + '0';
         $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/turnosprueba",
            type: "POST",
            data: {
                id: ru[1],
                fecha: fecha,
                hora: hora,
                dsem: dsem            
            },
            success: function (response) {
                var numero = parseInt(document.getElementById(response.hora).innerHTML, 10);
                document.getElementById(response.hora).innerHTML = numero-1;
                document.getElementById(response.hora).disabled = true;
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
        var codigo = 0;
        var diaActual = document.getElementById('diapantalla').innerHTML;
        switch (diaActual) {
            case 'lunes':
                codigo = 1;
                break;
            case 'martes':
                codigo = 2;
                break;
            case 'miercoles':
                codigo = 3;
                break;
            case 'jueves':
                codigo = 4;
                break;
            case 'viernes':
                codigo = 5;
                break;
            case 'sabado':
                codigo = 6;
                break;
            default:
                codigo = 0;
                break;
        }
        var fechaOriginal = semana.firstDay;
        var split = fechaOriginal.split("/");
        var newFecha = `${split[1]}/${split[0]}/${split[2]}`
        var fechaSum = addDays(newFecha, codigo).toLocaleDateString();
        var fechaSplit = fechaSum.split('/');
        var fechaFinal = `${fechaSplit[2]}-${fechaSplit[1]}-${fechaSplit[0]}`;
        var horarios = [];
       $('.turnos').each(function() {
            horarios.push($(this).attr('id'));
       });
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/turnosdia",
            type: "GET",
            data: {
                fecha: fechaFinal,
                horarios: horarios            
            },
            success: function (response) {
                for (let i = 0; i < horarios.length; i++) {
                   document.getElementById(horarios[i]).innerHTML = 20-response.turnos[horarios[i]];
                }
                document.getElementById('diapantalla').innerHTML = dia;
                RefreshEventsListener(fechaFinal, arrayrut, dia)
            },
        })
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
                $('.es').html('');
                var texto = $('.es');
                //console.log(turnos);
                for (let i = 0; i < turnos.length; i++) {
                    texto[i].innerHTML = turnos[i].dia + ' ' + turnos[i].horario + ' ' 
                    + turnos[i].nombre_rutina;
                }
                //$('.es').html(turnos[0].dia);
            },
        })
    });
    $('.dia').click(function () {
       var dia = $(this).html();
       var horarios = document.getElementsByClassName('es');
       var dsem = $(this).attr('id');
       var sum = parseInt(dsem, 10);
       for (let i = 0; i < horarios.length; i++) {
           horarios[i].innerHTML = originales[i];
       }
       var Fecha1 = $('#dia1').html();
       var split = Fecha1.split("/");
       var newFecha = `${split[1]}/${split[0]}/${split[2]}`
       var fechaSum = addDays(newFecha, sum).toLocaleDateString();
       var fechaSplit = fechaSum.split('/');
       var fechaFinal = `${fechaSplit[2]}-${fechaSplit[1]}-${fechaSplit[0]}`;
       var horarios = [];
       $('.turnos').each(function() {
            horarios.push($(this).attr('id'));
       });
        $.ajax({
            url: "http://localhost/tp-fullstack-utn/public/clientes/turnosdia",
            type: "GET",
            data: {
                fecha: fechaFinal,
                horarios: horarios            
            },
            success: function (response) {
                for (let i = 0; i < horarios.length; i++) {
                   document.getElementById(horarios[i]).innerHTML = 20-response.turnos[horarios[i]];
                }
                document.getElementById('diapantalla').innerHTML = dia;
                RefreshEventsListener(fechaFinal, arrayrut, dia)
            },
        })
    });

});