@extends('template')
@section('title')
    Inicio
@stop

@section('content')
{{-- Alerta Ingrediente_agregado --}}
@if (session()->has('ingredienteAgregado'))
        {!! "<script>
            Swal.fire({
            icon: 'success',
            title: 'Correcto!',
            text: '¡Se ha agregado el ingrediente!',
        
})
            </script>" !!}
@endif



    <div class="container justify-content-center mt-3">
        <div class="row">
            <div class="col">
                <h3 class="row justify-content-md-center">Lo más comprado</h3>
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
                        <div class="carousel-item active" style="width: 1300px">
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
        <div class="row mt-5" style="background-color:#FFD485; opacity:0.5" >
            
          <div class="col-3">
            <img src="/imgs/fruta.png" alt="Frutas" class="mt-2" style="height: 180px;">
          </div>
          <div class="col mt-4">
            <h3>¿Sabías qué...?</h3>
<h4>La desnutrición no solo refleja problemas de hambruna, sino también malos hábitos nutricionales, los cuales pueden afectar a los estudiantes al consumir alimentos “chatarra” en la escuela, en mayor medida cuando no han desayunado antes de ir a la escuela. </h4>          </div>
        </div>
    </div>

    
        
@stop
