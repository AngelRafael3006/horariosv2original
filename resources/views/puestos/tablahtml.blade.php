    {{--@dd($alumnos) --}}
    <a href="{{route('puestos.create')}}" class="btn button btn-primary">Nvo</a>

    <div
        class="table-responsive-sm"
    >
        <table
            class="table table-striped table-hover table-borderless table-warning align-middle"
        >
            <thead class="table-light">
                <caption>
                    CATALOGO DE PUESTOS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>ID Puesto</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $puestos as $puesto )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $puesto->id }}</td>
                    <td>{{ $puesto->idPuesto }}</td>
                    <td>{{ $puesto->nombre }}</td>
                    <td>{{ $puesto->tipo }}</td>
                    <td><a href="{{route('puestos.edit',$puesto->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-primary" >Ver</a></td> 
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$puestos->links()}}
    </div>