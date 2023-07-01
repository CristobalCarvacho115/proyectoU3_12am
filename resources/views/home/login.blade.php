<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/colores.min.css') }}">
    <title>Foro de fotos</title>
</head>

<body style="background: linear-gradient(to bottom, #101622 43%, #4e1d90 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="row bg-white">
                    <!-- formulario -->
                    <div class="col-12 text-center">
                        <div class="text-center">
                            <br>
                            <h2>¡Bienvenido a nuestro</h2>
                            <h2>nuevo foro de fotos!</h2>
                            <br>
                            <h3>Te invitamos a ver el arte de nuestros artistas</h3>
                            <br>
                            <div class="col-8 text-center offset-2">
                                <a href="" class="btn btn-outline-success">
                                    <h4>Entrar como invitado</h4>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h4>Entrar como Artista o Administrador</h4>
                        @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            @endforeach
                        </div>
                        @endif
                                <form id="ajusteForm"  method="POST" action="{{route('cuentas.login')}}">
                                    @csrf
                                    <fieldset>
                                        <input type="text" id="user" name="user" placeholder="Usuario" style="width:300px; height:60px" />
                                        <input type="text" id="password" name="password" placeholder="Contraseña" style="width:300px;height:60px" />
                                        <button type="submit" class="btn btn-success">Iniciar sesión</button>
                                    </fieldset>

                                    <a href="{{route('cuentas.create')}}">¿Quieres ser un artista? Haz Click Aqui</a>
                                </form>

                     <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
