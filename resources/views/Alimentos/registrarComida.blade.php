@extends('template')
@section('title')
    Agregar Alimento
@stop

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card text-center">
            <div class="card-header">Agregar Nuevo Alimento</div>
            <div class="card-body">
                <form action="">

                    <select class="form-select" aria-label="Default select example" name="tipo">
                        <option selected disabled>Tipo de alimento: </option>
                        <option value="1">Comida</option>
                        <option value="2">Bebida</option>
                        <option value="3">Snack</option>
                    </select>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Nombre:</span>
                        <textarea class="form-control" aria-label="With textarea" name="descripcion"></textarea>
                    </div>
                    
                    @foreach ($consultaIngredientes as $ingredientes)
                        <div class="form-check">


                            <input class="form-check-input" type="checkbox" value="{{ $ingredientes->id }}"
                                id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                {{ $ingredientes->descripcion }}
                            </label>
                        </div>
                    @endforeach
                    <div class="input-group mt-2 mb-2">
                      <span class="input-group-text">Precio de Venta:</span>
                      <textarea class="form-control" aria-label="With textarea" name="precioVenta"></textarea>
                  </div>

                  <div class=" mt-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
                    
                </form>
            </div>
        </div>
    </div>
@stop
