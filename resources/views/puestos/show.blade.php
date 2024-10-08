@extends("plantilla/plantilla1")

@section("contenido1")
    @include("puestos/tablahtml")
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>
<div class="container">
    <form action="{{route('puestos.destroy',$puesto->id)}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="idPuesto" class="col-4 col-form-label">ID de puesto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPuesto" id="idPuesto" placeholder="ID del puesto" disabled value="{{$puesto->idPuesto}}"/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del puesto" disabled value="{{$puesto->nombre}}"/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipo" class="col-4 col-form-label">Tipo</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de puesto" disabled value="{{$puesto->tipo}}"/>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                 <button type="submit" class="btn btn-primary">
                    Confirmar eliminacion
                </button>
                <a href="{{ route('puestos.index')}}" class="btn btn-primary">Regresar </a>
            </div>
        </div>
    </form>
</div>

@endsection