    {{--@dd($alumnos) --}}
    <a href="{{route('alumnos.create')}}" class="btn button btn-primary">Nvo</a>

    <div
        class="table-responsive-sm"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    CATALOGO DE ALUMNOS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $alumnos as $alumno )
                <tr
                    class="table-primary"
                >
                    <td scope="row">{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td><a href="{{route('alumnos.edit',$alumno->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary" >Ver</a></td> 
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$alumnos->links()}}
    </div>