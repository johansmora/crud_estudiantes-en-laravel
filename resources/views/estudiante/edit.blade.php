<h1>EDITAR ESTUDIANTES</h1>
<form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}

@include('estudiante.form');
</form>