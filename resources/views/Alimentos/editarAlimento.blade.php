@extends('template')
@section('title')
    Editar Alimento
@stop

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card text-center">
            <div class="card-header">Editar Alimento</div>
            <div class="card-body">
                <form action="{{route('alimento.update', $consultaAlimentos->id)}}" method="post">   
                    @csrf
                    @method('put')
                    <select class="form-select" aria-label="Default select example" name="tipo">
                        <option selected disabled>Tipo de alimento: </option>
                        <option value="1">Comida</option>
                        <option value="2">Bebida</option>
                        <option value="3">Snack</option>
                    </select>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Nombre:</span>
                        <textarea class="form-control" aria-label="With textarea" name="descripcion">{{$consultaAlimentos->descripcion}}</textarea>
                    </div>
                    
            
            
                    <div class="input-group mt-2">
                        <span class="input-group-text">Imagen:</span>
                        <textarea class="form-control" aria-label="With textarea" name="imagen">{{$consultaAlimentos->imagen}}</textarea>
                    </div>
                    <div class="input-group mt-2 mb-2">
                      <span class="input-group-text">Precio de Venta:</span>
                      <textarea class="form-control" aria-label="With textarea" name="precioVenta">{{$consultaAlimentos->precioVenta}}</textarea>
                  </div>

                  <div class=" mt-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                  </div>
                    
                </form>
            </div>
        </div>
    </div>
@stop


