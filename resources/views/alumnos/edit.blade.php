@extends("plantilla/plantilla1")

@section("contenido1")
    @include("alumnos/tablahtml")
@endsection

@section("contenido2")
<h1>Edita los datos</h1>
<div class="container">
    <form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumno->nombre}}" placeholder="Nombre del alumno"/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellido" class="col-4 col-form-label">Apellido paterno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{$alumno->apellido}}" placeholder="Apellido paterno"/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input type="text" class="form-control" name="email" id="email" value="{{$alumno->email}}" placeholder="Email del alumno"/>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                    Actualizar
                </button>
            </div>
        </div>
    </form>
</div>

@endsection