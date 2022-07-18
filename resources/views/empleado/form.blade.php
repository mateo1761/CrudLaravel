<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
<br/>

<label for="Apellido"> Apellido</label>
<input type="text" name="Apellido" value="{{ $empleado->Apellido }}" id="Apellido">
<br/>

<label for="Cedula"> Cedula</label>
<input type="text" name="Cedula" value="{{ $empleado->Cedula }}" id="Cedula" maxlength="11">
<br/>

<label for="Correo"> Correo</label>
<input type="text" name="Correo" value="{{ $empleado->Correo }}" id="Correo">
<br/>

<input type="submit" name="Enviar" id="Enviar" value="Guardar">