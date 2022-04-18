<label for="foto" >foto del estudiante</label>
@if(isset($estudiante->foto))
<img src="{{asset('storage').'/'.$estudiante->foto}}" alt="" width="100"> 
@endif
<input type="file"name="foto" id="foto" value=""><BR>


<label for="nombreestudiante" >nombre estudiante</label>
    <input type="text"id="nombreestudiante" name="nombreestudiante" value="{{isset($estudiante->nombreestudiante)?$estudiante->nombreestudiante:''}}"><br>


<label for="apellidoestudiante" >apellido estudiante</label>
    <input type="text"name="apellidoestudiante" id="apellidoestudiante"value="{{isset($estudiante->apellidoestudiante)?$estudiante->apellidoestudiante:''}}"><br>


<label for="identificacionestudiante" >identificacion estudiante</label>
    <input type="text"name="identificacionestudiante" id="identificacionestudiante"value="{{isset($estudiante->identificacionestudiante)?$estudiante->identificacionestudiante:''}}"><br>


<label for="fechanac" >fecha de nacimiento</label>
    <input type="date"name="fechanac" id="fechanac"value="{{isset($estudiante->fechanac)?$estudiante->fechanac:''}}"><br>


<label for="discapacidad" >discapacidad del estudiante</label>
    <textarea name="discapacidad" rows="10" cols="50" id="discapacidad"value="{{isset($estudiante->discapacidad)?$estudiante->discapacidad:''}}"></textarea><br>


<label for="direccion" >direccion</label>
    <input type="text"name="direccion" id="direccion"value="{{isset($estudiante->direccion)?$estudiante->direccion:''}}"><br>


<label for="barrio" >barrio</label>
    <input type="text"name="barrio" id="barrio"value="{{isset($estudiante->barrio)?$estudiante->barrio:''}}"><br>


    <label for="estrato" >estrato</label>
    <select name="estrato" id="estrato" >
  <option >SELECCIONAR ESTRATO</option>
  <option >1</option>
  <option >2</option>
  <option >3</option>
  <option >4</option>
  <option >5</option>
  </select><br>


<label for="eps">eps a la que esta afiliada</label>
    <input type="text"name="eps" id="eps"value="{{isset($estudiante->eps)?$estudiante->eps:''}}"><br>


    <label for="curso" >grupo a la que esta cursando</label>
    <select name="curso" id="curso"> 
  <option>SELECCIONAR GRUPO</option>
  <option>PARBULOS</option>
  <option>PRE JARDIN</option>
  <option>JARDIN</option>
  <option>TRANSICION</option>
  </select> <br>


<label for="nombrepadre" >nombre del padre</label>
    <input type="text"name="nombrepadre" id="nombrepadre"value="{{isset($estudiante->nombrepadre)?$estudiante->nombrepadre:''}}"><br>


<label for="telefonopadre" >telefono del padre</label>
    <input type="text"name="telefonopadre" id="telefonopadre"value="{{isset($estudiante->telefonopadre)?$estudiante->telefonopadre:''}}"><br>


<label for="correopadre" >correo electronico del padre</label>
    <input type="text"name="correopadre" id="correopadre"value="{{isset($estudiante->correopadre)?$estudiante->correopadre:''}}"><br>


<label for="identificacionpadre">identificacion del padre</label>
    <input type="text"name="identificacionpadre" id="identificacionpadre"value="{{isset($estudiante->identificacionpadre)?$estudiante->identificacionpadre:''}}"><br>


<label for="nombremadre" >nombre de la madre</label>
    <input type="text"name="nombremadre" id="nombremadre"value="{{isset($estudiante->nombremadre)?$estudiante->nombremadre:''}}"><br>


<label for="telefonomadre" >telefono de la madre</label>
    <input type="text"name="telefonomadre" id="telefonomadre"value="{{isset($estudiante->telefonomadre)?$estudiante->telefonomadre:''}}"><br>


<label for="correomadre" >correo electronico de la madre</label>
    <input type="text"name="correomadre" id="correomadre"value="{{isset($estudiante->correomadre)?$estudiante->correomadre:''}}"><br>


<label for="identificacionmadre">identificacion  de la madre</label>
    <input type="text"name="identificacionmadre" id="identificacionmadre"value="{{isset($estudiante->identificacionmadre)?$estudiante->identificacionmadre:''}}"><br>


    <input type="submit" value="guardar datos">
    <a href="{{url('estudiante/')}}">REGRESAR</a>