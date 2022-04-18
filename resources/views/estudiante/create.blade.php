
<h1>formulario de creacion de estudiantes</h1>
<form action="{{ url('/estudiante') }}" method="post" enctype="multipart/form-data">
    @csrf 
@include('estudiante.form');

</form>