{!! Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE']) !!}
    <button type="submit" class="btn btn-danger">Eliminar usuario</button>
{!! Form::close() !!}