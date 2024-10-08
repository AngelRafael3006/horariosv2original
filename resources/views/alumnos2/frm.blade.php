@extends("plantilla/plantilla1")

@section("contenido1")
    @include("alumnos2/tablahtml")
@endsection

@section("contenido2")

<div class="container">
    <h1>FUG</h1>
    <ul>
        @foreach ($errors->all() as $error )
        <li>
            {{$error}}
        </li>    
        @endforeach
    </ul>
    @if ($accion == "C")
    <h1>Insertando FRM</h1>
    <form action="{{route('alumnos.store')}}" method="POST">
    @endif
    @if ($accion == "E")
    <h1>EDITANDO FRM</h1>
    <form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
        @method("PUT")
    @endif
    @if ($accion == "S")
    <h1>ELIMINANDO FRM</h1>
    <form action="{{route('alumnos.destroy',$alumno->id)}}" method="POST">
        @method("DELETE")
    @endif
        @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno" value="{{@old('nombre',$alumno->nombre)}} " {{$des}}/>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellido" class="col-4 col-form-label">Apellido paterno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido paterno" value="{{@old('apellido',$alumno->apellido)}} " {{$des}}/>
                @error("apellido")
                <p>Error en el apellido: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email del alumno" value="{{@old('email',$alumno->email)}} " {{$des}}/>
                @error("email")
                <p>Error en el email: {{$message}}</p>
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