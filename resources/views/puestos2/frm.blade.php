@extends("plantilla/plantilla1")

@section("contenido1")
    @include("puestos2/tablahtml")
@endsection

@section("contenido2")
<div class="container">
    <ul>
        @foreach ($errors->all() as $error )
        <li>
            {{$error}}
        </li>    
        @endforeach
    </ul>
    @if ($accion == "C")
    <h1>Insertando FRM Puestos2</h1>
    <form action="{{route('puestos.store')}}" method="POST">
    @endif
    @if ($accion == "E")
    <h1>EDITANDO FRM Puestos2</h1>
    <form action="{{route('puestos.update',$puesto->id)}}" method="POST">
        @method("PUT")
    @endif
    @if ($accion == "S")
    <h1>ELIMINANDO FRM Puestos2</h1>
    <form action="{{route('puestos.destroy',$puesto->id)}}" method="POST">
        @method("DELETE")
    @endif
        @csrf
        <div class="mb-3 row">
            <label for="idPuesto" class="col-4 col-form-label">ID de puesto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPuesto" id="idPuesto" placeholder="ID del puesto" value="{{@old('idPuesto',$puesto->idPuesto)}} " {{$des}}/>
                @error("idPuesto")
                <p>Error en el id: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del puesto" value="{{@old('nombre',$puesto->nombre)}} " {{$des}}/>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipo" class="col-4 col-form-label">Tipo</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de puesto" value="{{@old('tipo',$puesto->tipo)}} " {{$des}}/>
                @error("tipo")
                <p>Error en el tipo: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                    {{$txtbtn}}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection