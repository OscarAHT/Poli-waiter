@extends('template')
@section('title')
    Ajustes de la app
@stop

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row mt-2">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('menu') ? 'active text-decoration-line-through' : '' }}"
                        aria-current="page" href="{{ asset('menu') }}"
                        style="color: #FD9238">Ingredientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('menuBebidas') ? 'active text-decoration-line-through' : '' }}"
                        href="{{ asset('menuBebidas') }}"
                        style="color:black">Alimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link   {{ request()->routeIs('menuSnacks') ? 'active text-decoration-line-through' : '' }}"
                        href="{{ asset('menuSnacks') }}"
                        style="color:black">Snacks</a>
                </li>
            </ul>

            {{-- Tabla ingredientes --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Descripción</th>
                    <th scope="col">Disponibilidad</th>
                    <th scope="col">Ingrediente Extra</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
        
    </div>
@stop
