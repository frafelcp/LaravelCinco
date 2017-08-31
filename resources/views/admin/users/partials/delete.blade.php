{!! Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE']) !!}
    <button type="submit" onclick="return confirm('seguro que deseas eliminar ?')" class="btn btn-danger">Eliminar usuario</button>
{!! Form::close() !!}