@extends('template')
@section('title')
    Ajustes de Ingredientes
@stop

@section('content')
{{-- Sweet Alert  --}}
@if (session()->has('actualizacion'))
        {!! "<script>
            Swal.fire({
            icon: 'success',
            title: 'Correcto!',
            text: '¡Se ha actualizado el ingrediente!',
        
})
            </script>" !!}
@endif

@if (session()->has('creacion'))
        {!! "<script>
            Swal.fire({
            icon: 'success',
            title: 'Correcto!',
            text: '¡Se ha agregado un nuevo ingrediente!',
        
})
            </script>" !!}
@endif

@if (session()->has('eliminacion'))
        {!! "<script>
            Swal.fire({
            icon: 'success',
            title: 'Correcto!',
            text: '¡Se ha eliminado el ingrediente!',
        
})
            </script>" !!}
@endif


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

       {{-- Barra búsqueda --}}
       <form class="d-flex float-right mt-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Filtrar" aria-label="Search" name="filtrar" value="{{$filtrar}}">
        <button class="btn btn-primary" type="submit">Filtrar</button>
      </form>

            {{-- Tabla ingredientes --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Descripción</th>
                    <th scope="col">Disponibilidad</th>
                    <th scope="col">Ingrediente Extra</th>
                    <th scope="col">Precio de venta</th>
                    <th scope="col"> </th>
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
                        <td style="color:green">Si</td>
                    @else
                        <td style="color:red">No</td>
                    @endif
                    
                    <td>${{$ingrediente->precioVenta}}</td>
                    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{route('ingredientes.edit', $ingrediente->id)}}" type="button" class="btn btn-outline-warning">Actualizar</a>
                         
                        
                        <a href="{{route('ingredientes.destroy', $ingrediente->id)}}" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarIngrediente{{$ingrediente->id}}"> Eliminar Ingrediente </a>
                      
                        
                      </div></td>
                  </tr>
                  @include('Alimentos.eliminarIngrediente')
                @endforeach
                 
                </tbody>
              </table>
        </div>
        
    </div>
  
    @extends('Alimentos.registrarIngrediente')
@stop
