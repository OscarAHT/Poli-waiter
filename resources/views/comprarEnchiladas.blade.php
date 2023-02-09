@extends('template')
@section('title')
    Comprar Enchiladas
@stop

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row mt-2">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                      <h3>Enchiladas Verdes</h3>
                    </div>
                    <div class="card-body">
                      <img src="{{asset('imgs/enchiladas.jpg')}}" alt="Enchiladas Verdes">
                      <p>Enchiladas Verdes con queso, crema y cebolla</p>
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
                          Queso
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
                          Extra Crema
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Milanesa
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Chorizo
                        </label>
                      </div>
                    </div>
                    <div class="card-footer text-muted">
                         <button type="button" class="btn btn" id="liveToastBtn" style="background-color: rgb(226, 134, 93); color:white">Agregar al carrito</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">PruebaToast1</strong>
            <small></small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Se ha agregado el producto al carrito!
          </div>
        </div>
      </div>
@stop
