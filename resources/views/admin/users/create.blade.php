@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Usuario</div>

                <div class="panel-body">
                    @include('admin.partials.errors')
                    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                        @include('admin.users.partials.field')
                        <button type="submit" class="btn btn-default">Guardar Usuario</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
