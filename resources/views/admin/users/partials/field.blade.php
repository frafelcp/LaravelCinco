    <div class="form-group">
    {!! Form::label('email', 'Correo Electronico') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder
    ' => 'Introduza su correo']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Contrasena') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('first_name', 'Primer Nombre') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Apellido') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('type', 'Tipo de Usuario') !!}
    {!! Form::select('type', ['' => 'Seleccione', 'user' => 'Usuario', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
</div>