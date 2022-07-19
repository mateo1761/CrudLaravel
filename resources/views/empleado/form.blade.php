<h1> {{ $modo }} empleado </h1>

<div class="form-group">

    <label for="Nombre"> Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" name="Nombre" value="{{ isset($empleado->Nombre)? $empleado->Nombre: ''}}" id="Nombre">
    <br/>

    <label for="Apellido"> Apellido</label>
    <input type="text" class="form-control" name="Apellido" value="{{ isset($empleado->Apellido)? $empleado->Apellido: ''}}" id="AApellido">
    <br/>

    <label for="Cedula"> Cedula</label>
    <input type="text" class="form-control" name="Cedula" value="{{ isset($empleado->Cedula)? $empleado->Cedula: ''}}" id="Cedula" maxlength="11">
    <br/>

    <label for="Correo"> Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)? $empleado->Correo: ''}}" id="Correo">
    <br/>

    <input type="submit" class="btn btn-success" name="Enviar" id="Enviar" value="{{ $modo }} datos">

    <a href="{{ url('empleado/') }}" class="btn btn-secondary">Regresar</a>
</div>