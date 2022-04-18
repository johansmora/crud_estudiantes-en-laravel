<h1>tabla estudiantes</h1> <a href="{{url('estudiante/create')}}"><input type="submit" value="crear estudiante"></a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>nombre del estudiante</th>
            <th>apellido del estudiante</th>
            <th>numero de identificacion</th>
            <th>fecha de nacimiento</th>
            <th>discapacidad del estudiante</th>
            <th>direccion de residencia</th>
            <th>barrio</th>
            <th>estrato</th>
            <th>eps que esta afiliado</th>
            <th>curso del estudiante</th>
            <th>nombre del padre</th>
            <th>telefono del padre</th>
            <th>correo del padre</th>
            <th>identifiacion del padre</th>
            <th>nombre de la madre</th>
            <th>telefono de la madre</th>
            <th>correo de la madre</th>
            <th>identifiacion de la madre</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->id}}</td>

            <td> <img src="{{asset('storage').'/'.$estudiante->foto}}" alt=""width="100"></td>


            <td>{{$estudiante->nombreestudiante}}</td>
            <td>{{$estudiante->apellidoestudiante}}</td>
            <td>{{$estudiante->identificacionestudiante}}</td>
            <td>{{$estudiante->fechanac}}</td>
            <td>{{$estudiante->discapacidad}}</td>
            <td>{{$estudiante->direccion}}</td>
            <td>{{$estudiante->barrio}}</td>
            <td>{{$estudiante->estrato}}</td>
            <td>{{$estudiante->eps}}</td>
            <td>{{$estudiante->curso}}</td>
            <td>{{$estudiante->nombrepadre}}</td>
            <td>{{$estudiante->telefonopadre}}</td>
            <td>{{$estudiante->correopadre}}</td>
            <td>{{$estudiante->identificacionpadre}}</td>
            <td>{{$estudiante->nombremadre}}</td>
            <td>{{$estudiante->telefonomadre}}</td>
            <td>{{$estudiante->correomadre}}</td>
            <td>{{$estudiante->identificacionmadre}}</td>
            <td><a href="{{url('/estudiante/'.$estudiante->id.'/edit')}}">Editar</a> | 
                <form action="{{url('/estudiante/'.$estudiante->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿quieres borrar al estudiante?')"value="borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>