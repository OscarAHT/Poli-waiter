@extends('template')
@section('title')
    Menú Comidas
@stop

@section('content')
    <div class="container d-flex justify-content-center">

        <div class="row mt-2">
            
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('menu') ? 'active text-decoration-line-through' : '' }}"
                        aria-current="page" href="{{ asset('menu') }}"
                        style="color: #FD9238">Comidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('menuBebidas') ? 'active text-decoration-line-through' : '' }}"
                        href="{{ asset('menuBebidas') }}"
                        style="color:black">Bebidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link   {{ request()->routeIs('menuSnacks') ? 'active text-decoration-line-through' : '' }}"
                        href="{{ asset('menuSnacks') }}"
                        style="color:black">Snacks</a>
                </li>
            </ul>
            
            <div class="col">    
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-header container d-flex justify-content-center"
                        Style="background-color: rgb(226, 134, 93); color:white;">
                        Enchiladas
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/enchiladas.jpg') }}" class="" alt="">
                    </div>
                    <div class="card-footer ">
                        <a class=" btn btn p-2 text-bg-#f8f9fa container d-flex justify-content-center"
                        href="{{route('comprarEnchiladas')}}" style="background-color: rgb(226, 134, 93); color:white;" type="button">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">    
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-header container d-flex justify-content-center" Style="background-color: rgb(226, 134, 93); color:white;">
                        Tacos
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/tacos.jpeg') }}" class="" alt="">
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
                    <div class="card-header container d-flex justify-content-center" Style="background-color: rgb(226, 134, 93); color:white;">
                        Molletes
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('imgs/molletes.png') }}" class="" alt="">
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
