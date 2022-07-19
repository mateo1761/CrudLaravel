<h1> {{ $modo }} empleado </h1>

<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" value="{{ isset($empleado->Nombre)? $empleado->Nombre: ''}}" id="Nombre">
<br/>

<label for="Apellido"> Apellido</label>
<input type="text" name="Apellido" value="{{ isset($empleado->Apellido)? $empleado->Apellido: ''}}" id="AApellido">
<br/>

<label for="Cedula"> Cedula</label>
<input type="text" name="Cedula" value="{{ isset($empleado->Cedula)? $empleado->Cedula: ''}}" id="Cedula" maxlength="11">
<br/>

<label for="Correo"> Correo</label>
<input type="text" name="Correo" value="{{ isset($empleado->Correo)? $empleado->Correo: ''}}" id="Correo">
<br/>

<input type="submit" name="Enviar" id="Enviar" value="{{ $modo }} datos">

<a href="{{ url('empleado/') }}">Regresar</a>