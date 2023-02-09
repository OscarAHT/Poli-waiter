@extends('template')
@section('title')
    Inicio
@stop

@section('content')
    <div class="container justify-content-center mt-3">
        <div class="row">
            <div class="col">
                <h3 class="row justify-content-md-center">Lo más comprado</h3>
                {{-- Carrusel --}}
                <div id="carouselExampleCaptions" class="carousel slide justify-content-md-center">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                  
                    <div class="carousel-inner  justify-content-center">
                        <div class="carousel-item active " style="width: 1300px">
                            <img src="{{ asset('imgs/enchiladas.jpg') }}" class="d-block w-100" alt="..."
                                style="height: 450px;">
                            <div class="carousel-caption d-none d-md-block ">
                                <h5 style="text-shadow: 1px 1px 2px black;">Enchiladas Verdes</h5>
                                <a href="{{asset('comprarEnchiladas')}}"><button class="btn btn-success">Comprar</button></a>
                            </div>
                        </div>
                        <div class="carousel-item" style="width: 1300px">
                            <img src="{{ asset('imgs/tacos.jpg') }}" class="d-block w-100" alt="..."
                                style="height: 450px">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="text-shadow: 1px 1px 2px black;">Tacos</h5>
                                <a href="{{asset('comprarTacos')}}"><button class="btn btn-success">Comprar</button></a>
                            </div>
                        </div>
                        <div class="carousel-item" style="width: 1300px">
                            <img src="{{ asset('imgs/burrito.jpg') }}" class="d-block w-100" alt="..."
                                style="height: 450px">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="text-shadow: 1px 1px 2px black;">Burritos</h5>
                                <a href="{{asset('comprarBurritos')}}"><button class="btn btn-success">Comprar</button></a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero consectetur quae velit hic dolorum, odit ratione non similique eaque sint!</h3>
          </div>
          <div class="col">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsum ipsa ab velit enim magnam. Repellat fugiat aliquam sapiente doloribus.</h4>
          </div>
        </div>
    </div>
@stop
