@extends("plantilla/plantilla1")

@section("contenido1")
    @include("puestos/tablahtml")
@endsection

@section("contenido2")
<h1>Insertando los dato de Puestos</h1>
<div class="container">
    <form action="{{route('puestos.store')}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="idPuesto" class="col-4 col-form-label">ID de puesto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPuesto" id="idPuesto" placeholder="ID del puesto"/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del puesto"/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipo" class="col-4 col-form-label">Tipo</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de puesto"/>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                    Grabar
                </button>
            </div>
        </div>
    </form>
</div>

@endsection