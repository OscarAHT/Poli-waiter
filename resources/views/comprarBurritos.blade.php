@extends('template')
@section('title')
    Comprar Burritos
@stop

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row mt-2">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                      <h3>Burritos</h3>
                    </div>
                    <div class="card-body">
                      <img src="{{asset('imgs/burrito.jpg')}}" alt="Burrito">
                      <p>Burritos con arroz, frijoles y queso</p>
                      <h5>Relleno</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="flexCheckChecked1" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Pollo
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="flexCheckChecked2" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Milanesa
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="flexCheckChecked3" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Bistec
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="flexCheckChecked4" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Arrachera +$5
                        </label>
                      </div>
                      <h5>Ingredientes Extra</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Extra Queso
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Guacamole
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Pico de gallo
                        </label>
                      </div>
                      
                    <div class="card-footer text-muted">
                        <a href="" class="btn btn" style="background-color: rgb(226, 134, 93); color:white">Agregar al carrito</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@stop
