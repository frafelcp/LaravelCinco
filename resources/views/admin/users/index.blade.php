@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Good! </strong>{{Session::get('message')}}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>
                <div class="panel-body">
                    <p>
                        <a href="{{ route('users.create') }}" class="btn btn-info" role="button">
                            Create Users
                        </a>
                    </p>
                    <p>Hay {{ $users->total() }} registros</p>
                    @include('admin.users.partials.table')
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection