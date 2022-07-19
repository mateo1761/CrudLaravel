<h1>Formulario de edicion  de empleado</h1>

<form action="{{ url('/empleado/'.$empleado->id) }}" method="post">@csrf
    {{ method_field('PATCH') }}
    
    @include('empleado.form',['modo' => 'Editar'])
</form>
