@extends('template')
@section('title')
    Comprar Tacos
@stop

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row mt-2">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                      <h3>Tacos</h3>
                    </div>
                    <div class="card-body">
                      <img src="{{asset('imgs/tacos.jpeg')}}" alt="Tacos">
                      <p>Tacos</p>
                      <h5>Carne</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="flexCheckChecked1" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Bistec
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="flexCheckChecked2" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Chorizo
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="flexCheckChecked3" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Campechanos
                        </label>
                      </div>
                      
                    <div class="input-group">
                      <span class="input-group-text">Notas: </span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="" class="btn btn" style="background-color: rgb(226, 134, 93); color:white">Agregar al carrito</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@stop
