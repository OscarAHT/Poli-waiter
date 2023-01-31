@extends('template')
@section('title')
    Menú
@stop

@section('content')
    <div class="container d-flex justify-content-center">

        <div class="row mt-2">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active text-decoration-line-through" aria-current="page" href="#" style="color: #FD9238">Comidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black">Bebidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black">Snacks</a>
                    </li>
                </ul>
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-header container d-flex justify-content-center"
                        Style="background-color: rgb(226, 134, 93); color:white;">
                        Hamburguesas
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/hamb.jpg') }}" class="" alt="">
                    </div>
                    <div class="card-footer ">
                        <button class=" btn btn p-2 text-bg-#f8f9fa container d-flex justify-content-center"
                            style="background-color: rgb(226, 134, 93); color:white;  ">
                            Comprar
                        </button>
                    </div>
                </div>

                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-header container d-flex justify-content-center" style="background-color: #d1cfcf">
                        Tacos
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/tacos.jpeg') }}" class="" alt="">
                    </div>
                    <div class="card-footer" style="background-color: rgb()">
                        <button class="p-2 text-bg-#f8f9fa container d-flex justify-content-center"
                            style="background-color:#FD9238">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
