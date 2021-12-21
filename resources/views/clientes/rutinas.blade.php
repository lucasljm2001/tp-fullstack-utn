<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/turnos.css')}}">
    <script src="{{asset('js/rutinas.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/rutinas.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container costado">
    <div class="form-group">
        <label for="formGroupExampleInput">Nombre de la rutina</label>
        <input type="text" class="form-control inp" id="nombre" placeholder="Nombre de la rutina">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Ejercicio 1</label>
        <input type="text" class="form-control inp" id="ej1" placeholder="Ejercicio 1">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Ejercicio 2</label>
        <input type="text" class="form-control inp" id="ej2" placeholder="Ejercicio 2">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Dia</label>
        <input type="text" class="form-control inp" id="dia" placeholder="Dia">
    </div>
    <button type="button" class="btn btn-outline-secondary agregar">Agregar rutina</button>
    <button type="button" class="btn btn-outline-secondary modificar">Modificar rutina</button>
</div>

<div class="container mt-3 mb-4">
<div class="col-lg-9 mt-4 mt-lg-0 rutinas">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Rutina</th>
                <th class="text-center">Dia</th>
                <th class="action text-right">Accion</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rutinas as $rutina)
              <tr class="candidates-list">
                <td class="title">
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0">{{$rutina}}</h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                        @foreach ($ejercicios as $ejercicio)
                                @if($rutina == $ejercicio->nombre_rutina)
                          <li class="{{$rutina}}">{{$ejercicio->nombre_ejercicio}}</li>
                          @endif
                        @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                @foreach ($dias as $dia)
                                @if($rutina == $dia->nombre_rutina)
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="far fa-calendar"></i></a>
                  <span class="candidate-list-time order-1 {{$rutina}}">{{$dia->dia}}</span>
                </td>
                    @endif
                @endforeach
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt editar" id="{{$rutina}}"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt eliminar" id="{{$rutina}}"></i></a></li>
                  </ul>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>