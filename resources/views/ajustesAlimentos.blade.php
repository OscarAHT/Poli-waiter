@extends('template')
@section('title')
    Ajustes de Alimentos
@stop

@section('content')
@if (session()->has('creacion'))
        {!! "<script>
            Swal.fire({
            icon: 'success',
            title: 'Correcto!',
            text: '¡Se ha agregado un nuevo alimento!',
        
})
            </script>" !!}
@endif


    <div class="container d-flex justify-content-center">
        <div class="row mt-2">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('ajustesIngredientes') }}"
                        style="color: black">Ingredientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-decoration-line-through" href="{{ route('ajustesAlimentos') }}"
                        style="color:#FD9238">Alimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color:black">Usuarios</a>
                </li>
            </ul>

            {{-- Agregar Alimento --}}
            <a href="{{ route('alimento.create') }}" type="button" class="btn btn-outline-success"> Agregar Alimento </a>

            {{-- Barra búsqueda --}}
            <form class="d-flex float-right mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Filtrar" aria-label="Search" name="filtrar"
                    value="{{ $filtrar }}">
                <button class="btn btn-primary" type="submit">Filtrar</button>
            </form>


            {{-- Tabla ingredientes --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio de Venta</th>
                        <th scope="col">Tipo de Alimento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consultaAlimentos as $Alimento)
                        <tr>
                            <td>{{ $Alimento->descripcion }}</td>
                            <td>${{ $Alimento->precioVenta }}</td>
                            @if ($Alimento->tipoAlimento == 1)
                                <td class="" style="color:">Comida</td>
                            @endif
                            @if ($Alimento->tipoAlimento == 2)
                                <td class="" style="color:">Bebida</td>
                            @endif
                            @if ($Alimento->tipoAlimento == 3)
                                <td class="" style="color:">Snack</td>
                            @endif
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-warning">Actualizar</button>

                                    <button type="button" class="btn btn-outline-danger">Eliminar</button>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

@stop
