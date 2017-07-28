@extends('examples.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Curso Basico de Laravel 5</h1>
            <div class="row center">
                <h5 class="header col s12 light">
                    @if(isset($user))
                        Bienvenido {{$user}}
                    @else
                        [login]
                    @endif
                </h5>
            </div>
            <div class="row center">
                <a href="#" id="download-button" class="btn-large waves-effect waves-light orange">Iniciar</a>
            </div>
            <br><br>
        </div>
    </div>
@endsection