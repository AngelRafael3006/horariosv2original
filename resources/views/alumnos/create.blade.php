@extends("plantilla/plantilla1")

@section("contenido1")
    @include("alumnos/tablahtml")
@endsection

@section("contenido2")
<h1>Insertando los datos</h1>
<div class="container">
    <ul>
        @foreach ($errors->all() as $error )
        <li>
            {{$error}}
        </li>    
        @endforeach
    </ul>
    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno" value="{{@old('nombre')}}"/>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellido" class="col-4 col-form-label">Apellido paterno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido paterno" value="{{@old('apellido')}}"/>
                @error("apellido")
                <p>Error en el apellido: {{$message}}</p>
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email del alumno" value="{{@old('email')}}"/>
                @error("email")
                <p>Error en el email: {{$message}}</p>
            @enderror
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