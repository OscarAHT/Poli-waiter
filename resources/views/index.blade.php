@extends('template')
@section('title')
    Inicio
@stop

@section('content')
    <div class="container justify-content-center mt-3">
        <div class="row">
            <div class="column">
                <h3>Lo más comprado</h3>

                {{-- Carrusel --}}
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="width: 1100px">
                            <img src="{{ asset('imgs/enchiladas.jpg') }}" class="d-block w-100" alt="..."
                                style="height: 450px;">
                            <div class="carousel-caption d-none d-md-block ">
                                <h5>Enchiladas Verdes</h5>
                                <button class="btn btn-success">Comprar</button>
                            </div>
                        </div>
                        <div class="carousel-item" style="width: 1100px">
                            <img src="{{ asset('imgs/tacos.jpg') }}" class="d-block w-100" alt="..."
                                style="height: 450px">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Tacos de Bistec</h5>
                                <button class="btn btn-success">Comprar</button>
                            </div>
                        </div>
                        <div class="carousel-item" style="width: 1100px">
                            <img src="{{ asset('imgs/burrito.jpg') }}" class="d-block w-100" alt="..."
                                style="height: 450px">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Burrito de Bistec</h5>
                                <button class="btn btn-success">Comprar</button>
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
    </div>
@stop
