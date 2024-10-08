@extends("plantilla/plantilla1")

@section("contenido1")
    @include("plazas/tablahtml")
@endsection

@section("contenido2")
<h1>Edita los datos</h1>
<div class="container">
    <form action="{{route('plazas.update',$plaza->id)}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="idPlaza" class="col-4 col-form-label">ID de puesto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPlaza" id="idPlaza" value="{{$plaza->idPlaza}}" placeholder="ID de la plaza"/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrePlaza" class="col-4 col-form-label">nombrePlaza</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrePlaza" id="nombrePlaza" value="{{$plaza->nombrePlaza}}" placeholder="Nombre de la plaza"/>
            </div>
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