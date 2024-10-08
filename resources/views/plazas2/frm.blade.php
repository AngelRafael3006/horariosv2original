@extends("plantilla/plantilla1")

@section("contenido1")
    @include("plazas2/tablahtml")
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
    <h1>Insertando FRM Plazas2</h1>
    <form action="{{route('plazas.store')}}" method="POST">
    @endif
    @if ($accion == "E")
    <h1>EDITANDO FRM Plazas2</h1>
    <form action="{{route('plazas.update',$plaza->id)}}" method="POST">
        @method("PUT")
    @endif
    @if ($accion == "S")
    <h1>ELIMINANDO FRM Plazas2</h1>
    <form action="{{route('plazas.destroy',$plaza->id)}}" method="POST">
        @method("DELETE")
    @endif
        @csrf
        <div class="mb-3 row">
            <label for="idPlaza" class="col-4 col-form-label">ID de la plaza</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPlaza" id="idPlaza" placeholder="ID de la plaza" value="{{@old('idPlaza',$plaza->idPlaza)}} " {{$des}}/>
                @error("idPlaza")
                <p>Error en el id: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrePlaza" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrePlaza" id="nombrePlaza" placeholder="Nombre de la plaza" value="{{@old('nombrePlaza',$plaza->nombrePlaza)}} " {{$des}}/>
                @error("nombrePlaza")
                <p>Error en el nombre: {{$message}}</p>
            @enderror
            </div>
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