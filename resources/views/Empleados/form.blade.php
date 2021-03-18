

<label for="ID">{{'ID'}}</label>
<input type="text" name="ID" id="ID" value="{{ isset($empleado->id)?$empleado->id:''}}">
<br>
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre"

 value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}">
<br>

<label for="Direccion">{{'Direccion'}}</label>
<input type="text" name="Direccion" id="Direccion"
 value="{{ isset($empleado->direccion)?$empleado->direccion:'' }}">
<br>

<label for="Cargo">{{'Cargo'}}</label>
<input type="text" name="Cargo" id="Cargo" 
value="{{ isset($empleado->cargo)?$empleado->cargo:'' }}">
<br>

<label for="Edad">{{'Edad'}}</label>
<input type="text" name="Edad" id="Edad" 
value="{{ isset($empleado->edad)?$empleado->edad:'' }}">
<br>

<label for="Celular">{{'Celular'}}</label>
<input type="text" name="Celular" id="Celular" 
value="{{ isset($empleado->celular)?$empleado->celular:'' }}">
<br>

<label for="Usuario">{{'Usuario'}}</label>
<input type="text" name="Usuario" id="Usuario"
 value="{{ isset($empleado->usuario)?$empleado->usuario:'' }}">
<br>

<label for="Password">{{'Password'}}</label>
<input type="text" name="Password" id="Password"
 value="{{ isset($empleado->password)?$empleado->password:'' }}">
<br>

<input type="submit" value="{{$Modo=='crear'? 'Agregar':'Modificar'}}">

<a href={{ URL('/empleado/index')}}>Regresar</a>