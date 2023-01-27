@extends('template')
@section('title')
    Menú
@stop

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="column">
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-header" style="background-color: #FD9238">
                    Hamburguesas
                </div>
                <div class="card-body" >
                    <img src="{{asset('imgs/hamb.jpg')}}" class="" alt="">
                </div>
                <div class="card-footer " style="background-color: #FD9238">
                    <button class="d-inline p-2 text-bg-primary" >
                        Comprar
                    </button>
                </div>
            </div>
    
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-header" style="background-color: #FD9238">
                    Tacos
                </div>
                <div class="card-body">
                    <img src="{{asset('imgs/tacos.jpeg')}}" class="" alt="">
                </div>
                <div class="card-footer" style="background-color: #FD9238">
                    <button class="d-inline p-2 text-bg-primary">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
