@extends('template')
@section('title')
    Editar ingrediente
@stop

@section('content')

<div class="card">
    <div class="card-header">
      Actualizar {{$consultaIngredientes->descripcion}}
    </div>
    <div class="card-body">
        <div class="container d-flex justify-content-center">
            <form action="{{route('ingredientes.update', $consultaIngredientes->id)}}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="input-group mt-2">
                    <span class="input-group-text">Descripción:</span>
                    <textarea class="form-control" aria-label="With textarea" name="descripcion" value="">{{ $consultaIngredientes->descripcion }}</textarea>
                </div>
    
                <div class="container d-flex justify-content-center">
                    <div class="row">
                        <div class="form-check mt-2 ml-2">
                            <input type="hidden" name="ingredienteExtra" value="0" />
                            @if ($consultaIngredientes->ingredienteExtra == 0)
                                <input class="form-check-input" type="checkbox" value="1" name="ingredienteExtra"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ingrediente Extra
                                </label>
                            @else
                                <input class="form-check-input" type="checkbox" value="1" name="ingredienteExtra"
                                    id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ingrediente Extra
                                </label>
                            @endif
    
                        </div>
                        <div class="form-check mt-2">
                            <input type="hidden" name="disponible" value="0" />
                            @if ($consultaIngredientes->disponibilidad == 0)
                                <input class="form-check-input" type="checkbox" value="1" name="disponible"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Disponible
                                </label>
                            @else
                                <input class="form-check-input" type="checkbox" value="1" name="disponible"
                                    id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Disponible
                                </label>
                            @endif
    
                        </div>
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Precio de venta $:</span>
                        <textarea class="form-control" aria-label="With textarea" name="precioVenta" value="">{{ $consultaIngredientes->precioVenta }}</textarea>
                    </div>
    
                    <button type="submit" class="btn btn-success">Actualizar</button>
    
    
    
    
                </div>
            </form>
        </div>
    </div>
  





@stop
