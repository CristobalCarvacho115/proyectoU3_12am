@extends('templates.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cuenta.css">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
          <div class="card-body">
                <!-- Aquí va tu formulario -->
                <form id="ajusteForm" method="POST" action="{{route('cuentas.autenticar')}}">
                    <h2 class="text-white" style="color:white">Crear Cuenta</h2>
                    <h3 class="text-white" style="color:white">Administrador o Artista</h3>
                    <fieldset>
                        <input type="text" name="fname" placeholder="Usuario" />
                        <input type="text" name="lname" placeholder="Contraseña" />
                        <input type="text" name="phone" placeholder="Nombre" />
                        <input type="text" name="phone" placeholder="Apellido" />
                        <select name="perfil" id="perfil">
                            <option value=1>Administrador</option>
                            <option value=2>Artista</option>
                        </select>
                        <button type="submit" class="btn btn-success">Crear Cuenta</button>
                    </fieldset>
                </form>
          </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>


