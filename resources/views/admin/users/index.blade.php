@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                @if(Session::has('message'))
                    <p class="alert alert-success">{{Session::get('message')}}</p>
                @endif

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