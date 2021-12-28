@extends('layouts.with-navbar')

@section('title', 'Marcas')

@section('customJS')
<script type="text/javascript" src="{{asset('js/marcas.js')}}"></script>
@endsection

@section('customCSS')
@parent
<link rel="stylesheet" href="{{asset('css/marcas.css')}}">
@endsection

@section('body')
<!-- Navbar -->
@parent

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container costado">
    <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control inp" id="nombrein" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Apellido</label>
        <input type="text" class="form-control inp" id="apellidoin" placeholder="Apellido">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Desafio</label>
        <select  class="form-select" name="select" id="eleccion">
                @foreach ($desafios as $desafio)
                    <option value="{{$desafio->nombre_desafio}}">{{$desafio->nombre_desafio}}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Marca</label>
        <input type="text" class="form-control inp" id="marcain" placeholder="Marca">
    </div>
    <button type="button" class="btn btn-outline-secondary agregar">Agregar marca</button>
    <button type="button" class="btn btn-outline-secondary modificar">Modificar marca</button>
</div>

<div class="container mt-3 mb-4">
<div class="col-lg-9 mt-4 mt-lg-0 rutinas">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Usuario</th>
                <th class="">Marca</th>
                <th class="action text-right">Accion</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($marcas as $marca)
              <tr class="candidates-list">
                <td class="title">
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0 {{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                        id="nombre">{{$marca->name}}</h5>
                        <h5 class="mb-0 {{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                        id="apellido">{{$marca->apellido}}</h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li class="{{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                          id="desafio">{{$marca->nombre_desafio}}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </td>
                  <td>
                  <span class="candidate-list-time order-1 {{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                  id="marca">{{$marca->marca}}</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li class="text-info editar" id="{{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                    ><a href="#"  data-toggle="tooltip" title="" data-original-title="Edit"
                    ><i class="fas fa-pencil-alt editar" id="marca"></i></a></li>
                  </ul>
                </td>
            @endforeach    
              </tr>
            </tbody>
          </table>   
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
