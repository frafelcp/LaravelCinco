@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario: {{$user->first_name}}</div>

                <div class="panel-body">
                    @include('admin.partials.errors')
                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
                        @include('admin.users.partials.field')
                        <button type="submit" class="btn btn-default">Actualizar Usuario</button>
                    {!! Form::close() !!}
                    <br>
                    @include('admin.users.partials.delete')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
