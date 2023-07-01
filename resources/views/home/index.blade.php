@extends('templates.master')

@section('contenido-principal')
<div class="row">
    @foreach($imagenes as $index => $imagen)
    <div class="col-12 col-md-4">
        <div class="card">
            <img src="#" class="card-img-top">
            <div class="card-body">
                <h5>{{$imagen->titulo}}</h5>
                <h3>Artista: {{$imagen->cuenta_user}}</h3>
                @if($cuenta->user == $imagen->cuenta_user)
                            <div class="col">
                                <a href="{{route('imagenes.edit',$imagen->id)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Imagen">
                                    <span class="material-icons">edit</span>
                                </a>
                            </div>
                            <div class="col text-end">
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#borrarModal{{$imagen->id}}">
                                    <span class="material-icons">delete</span>
                                </button>
                            </div>
                @endif
            </div>
        </div>

    </div>


    @endforeach
</div>
@endsection
