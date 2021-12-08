<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <title>LOGIN</title>
  </head>
  <body>
    <div class="flex-container">
      <div class="table">
        <div class="container text-center border-2 mt-2">
          <img src="{{asset('images/mus.png')}}" height="300" width="120" class="img-fluid" />
        </div>
        <div class="container">
          <!--div class="abs-center"-->
          <form action="{{ route('clientes.inicio') }}" method="post">
          @csrf
            <div class="form-floating my-3">
              <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="martin"
                name="usuario"
              />
              <label for="floatingInput">Nombre de Usuario</label>
            </div>
            <div class="form-floating my-1">
              <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Contraseña"
                name="contraseña"
              />
              <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-secondary">
                Iniciar Sesión
              </button>
            </div>
          </form>
          <!--/div-->
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


