@extends('template')
@section('title')
    Mi cuenta
@stop

@section('content')
<div class="container">
    <div class="row">
        <img src="{{asset('imgs/user.png')}}" alt="" style="height: 250px; width:250px" >
        <div class="col">
            
            <p>Nombre de usuario: </p>
            <p>Mis pedidos</p>
        </div>
        <div class="col">
            <p>Nombre Completo: Carlos Alberto Matías Jiménez</p>
            <p>Matrícula: 119033825</p>
            <p>Grupo: S172</p>
        </div>
    </div>
    
</div>

@stop