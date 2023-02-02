@extends('template')
@section('title')
    Menú
@stop

@section('content')
    <div class="container d-flex justify-content-center">

        <div class="row mt-2">

            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('menu') ? 'active text-decoration-line-through' : '' }}"
                        aria-current="page" href="{{ asset('menu') }}"
                        style="color: black">Comidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('menuBebidas') ? 'active text-decoration-line-through' : '' }}"
                        href="{{ asset('menuBebidas') }}"
                        style="color: black">Bebidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link   {{ request()->routeIs('menuSnacks') ? 'active text-decoration-line-through' : '' }}"
                        href="{{ asset('menuSnacks') }}"
                        style="color: #FD9238">Snacks</a>
                </li>
            </ul>

            <div class="col">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-header container d-flex justify-content-center"
                        Style="background-color: rgb(226, 134, 93); color:white;">
                        Papas a la Francesa
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/papas-francesa.jpg') }}" class="" alt="">
                    </div>
                    <div class="card-footer ">
                        <button class=" btn btn p-2 text-bg-#f8f9fa container d-flex justify-content-center"
                            style="background-color: rgb(226, 134, 93); color:white;  ">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-header container d-flex justify-content-center"
                        Style="background-color: rgb(226, 134, 93); color:white;">
                        Galletas
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/galletas.jpg') }}" class="" alt="">
                    </div>
                    <div class="card-footer" style="background-color: rgb()">
                        <button class="btn btn p-2 text-bg-#f8f9fa container d-flex justify-content-center"
                            style="background-color: rgb(226, 134, 93); color:white;  ">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-header container d-flex justify-content-center"
                        Style="background-color: rgb(226, 134, 93); color:white;">
                        Cacahuates
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/cacahuates.jpeg') }}" class="" alt="">
                    </div>
                    <div class="card-footer" style="background-color: rgb()">
                        <button class="btn btn p-2 text-bg-#f8f9fa container d-flex justify-content-center"
                            style="background-color: rgb(226, 134, 93); color:white;  ">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
