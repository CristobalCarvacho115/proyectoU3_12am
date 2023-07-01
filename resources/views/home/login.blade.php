<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <title>Foro de fotos</title>
</head>

<body style="background: linear-gradient(to bottom, #026597 43%, #990099 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="row bg-white">
                    <!-- formulario -->
                    <div class="col-12">
                        <div class="text-center">
                            <br>
                            <h2>¡Bienvenido a nuestro</h2>
                            <h2>nuevo foro de fotos!</h2>
                            <br>
                            <h3>Te invitamos a ver el arte de nuestros artistas</h3>
                            <br>
                            <div class="col-8 text-center offset-2">
                                <a href="{{route('home.index')}}" class="btn btn-outline-success">
                                    <h4>Entrar como invitado</h4>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h4>Cuenta de artista o administrador</h4>
                        @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            @endforeach
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('usuarios.autenticar')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" id="usuario" name="usuario" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <h4>Crear cuenta de artista</h4>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('usuarios.autenticar')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" id="usuario" name="usuario" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <div class="">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control">
                                        </div>
                                        <div class="">
                                            <label for="apellido" class="form-label">Apellido</label>
                                            <input type="text" id="apellido" name="apellido" class="form-control">
                                        </div>
                                    </div>
                                    <div class=" text-end">
                                        <button type="submit" class="btn btn-success">Crear cuenta</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
