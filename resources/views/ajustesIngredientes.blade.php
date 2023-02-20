@extends('template')
@section('title')
    Ajustes de Ingredientes
@stop

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row mt-2">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-decoration-line-through"
                        aria-current="page" href="{{ route('ajustesIngredientes') }}"
                        style="color: #FD9238">Ingredientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{route('ajustesAlimentos')}}"
                        style="color:black">Alimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href=""
                        style="color:black">Usuarios</a>
                </li>
            </ul>

            {{-- Botones | Acciones --}}
         
        <a href="" type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#agregarIngrediente"> Agregar Ingrediente </a>

       

            {{-- Tabla ingredientes --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Descripción</th>
                    <th scope="col">Disponibilidad</th>
                    <th scope="col">Ingrediente Extra</th>
                    <th scope="col">Precio de venta</th>
                    <th scope="col">Acciones </th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($consultaIngredientes as $ingrediente)
                <tr>
                    <td>{{$ingrediente->descripcion}}</td>
                    @if ($ingrediente->disponibilidad==1)
                        <td class="" style="color:green">Disponible</td>
                    @else
                        <td style="color:red">No Disponible</td>
                    @endif
                    @if ($ingrediente->ingredienteExtra==1)
                        <td>Si</td>
                    @else
                        <td>No</td>
                    @endif
                    
                    <td>${{$ingrediente->precioVenta}}</td>
                    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-warning">Actualizar</button>
                        
                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                      </div></td>
                  </tr>
                @endforeach
                 
                </tbody>
              </table>
        </div>
        
    </div>

    @extends('Alimentos.registrarIngrediente')
@stop
