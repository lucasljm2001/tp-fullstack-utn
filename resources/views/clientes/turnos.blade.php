<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/turnos.css')}}">
    <script src="{{asset('js/turnos.js')}}"></script>
    <script src="https://kit.fontawesome.com/839e8b1ba6.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Chakra Petch" rel="stylesheet" />
    <title>Turnos</title>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary flecha" id="izq"><i class="fas fa-arrow-left"></i></button>
      
      <span>semana:</span>
      <span id="dia1">26/12/2021</span>
      <span>al</span>
      <span id="dia2">1/1/2022</span>
      <button class="btn btn-primary flecha" id="der"><i class="fas fa-arrow-right"></i></button>
    </div>
    <div class="row">
          <div class="col-md-3 lista">
                            <div class="row">
                            <button class="btn btn-primary" id="turnos">Mis turnos</button>
                            </div>
                            <div class="row">
                              elija su turno
                            </div>
                            <div class="row">
                            <div class="row">
                            <button class="btn btn-primary dia domingo" id="0">domingo</button>
                            </div>
                            <button class="btn btn-primary dia lunes" id="1">lunes</button>
                            </div>
                            <div class="row">
                            <button class="btn btn-primary dia martes" id="2">martes</button>
                            </div>
                            <div class="row">
                            <button class="btn btn-primary dia miercoles" id="3">miercoles</button>
                            </div>
                            <div class="row">
                            <button class="btn btn-primary dia jueves" id="4">jueves</button>
                            </div>
                            <div class="row">
                            <button class="btn btn-primary dia viernes" id="5">viernes</button>
                            </div>
                            <div class="row">
                            <button class="btn btn-primary dia sabado" id="6">sabado</button>
                            </div>
          </div>
          <div class="col-md-9 lista" id="modificar">
                            <div class="col es">
                               <span>Horarios disponibles el </span><span id="diapantalla"></span>
                            </div>
                            <div class="col es">
                              Elija su horario
                            </div>
                              <div class="col es">
                                <button class="btn btn-primary hor" id="09:00:0">9:00 
                                  <span class="turnos" id="09:00:00">20</span>
                                  <span>turnos disponibles</span>
                                </button>
                              </div>
                            <div class="es">
                            <div class="col">
                                <button class="btn btn-primary hor" id="10:00:0">10:00
                                  <span class="turnos" id="10:00:00">20</span>
                                  <span>turnos disponibles</span>
                                </button>
                                
                              </div>
                            </div>
                            <div class="es">
                            <div class="col">
                                <button class="btn btn-primary hor" id="11:00:0">11:00
                                <span class="turnos" id="11:00:00">20</span>
                                <span>turnos disponibles</span>
                                </button>
                                
                              </div>
                            </div>
                            <div class="es">
                            <div class="col">
                                <button class="btn btn-primary hor" id="15:00:0">15:00
                                <span class="turnos" id="15:00:00">20</span>
                                <span>turnos disponibles</span>
                                </button>
                                
                              </div>
                            </div>
                            <div class="es">
                            <div class="col">
                                <button class="btn btn-primary hor" id="16:00:0">16:00
                                <span class="turnos" id="16:00:00">20</span>
                                <span>turnos disponibles</span>
                                </button>
                                
                              </div>
                            </div>
                            <div class="es">
                            <div class="col">
                                <button class="btn btn-primary hor" id="17:00:0">17:00
                                <span class="turnos" id="17:00:00">20</span>
                                <span>turnos disponibles</span>
                                </button>
                                
                              </div>
                            </div>
                            <div class="es">
                            <div class="col">
                                <button class="btn btn-primary hor" id="18:00:0">18:00
                                <span class="turnos" id="18:00:00">20</span>
                                <span>turnos disponibles</span>
                                </button>
                                
                              </div>
                            </div>
          </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>
