    {{--@dd($alumnos) --}}

    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    
    <a href="{{route('plazas.create')}}" class="btn button btn-primary">Nvo</a>

    <div
        class="table-responsive-sm"
    >
        <table
            class="table table-striped table-hover table-borderless table-danger align-middle"
        >
            <thead class="table-light">
                <caption>
                    CATALOGO DE PLAZAS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>ID Plaza</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $plazas as $plaza )
                <tr
                    class="table-danger"
                >
                    <td scope="row">{{ $plaza->id }}</td>
                    <td>{{ $plaza->idPlaza }}</td>
                    <td>{{ $plaza->nombrePlaza }}</td>
                    <td><a href="{{route('plazas.edit',$plaza->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('plazas.show',$plaza->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('plazas.show',$plaza->id)}}" class="btn button btn-primary" >Ver</a></td> 
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$plazas->links()}}
    </div>