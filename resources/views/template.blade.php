
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poli-Waiter | @yield('title') </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style>
        nav {
            font-family: "Audiowide", sans-serif;
        }

        body {
            font-family: "Roboto", sans-serif;
            background-color: rgb(243, 241, 239);
        }
    </style>

</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar navbar-dark bg-body-terniary mb-3" style="background-color:#902a1d;">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="{{ route('index') }}">Poli-Waiter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" style="color: black" id="offcanvasNavbarLabel">Poli-Waiter NB</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item ">
                            <a class="nav-link active" href="{{route('menu')}}" style="color:black" id="navItem">Menú de
                                alimentos</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="{{ route('alimento.create') }}" style="color:black" id="navItem">Agregar
                                Alimento</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" style="color: black" aria-current="page" data-bs-toggle="modal"
                                data-bs-target="#ingredientesModal" id="navItem">Agregar nuevo ingrediente</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('miCuenta') }}" style="color:black" id="navItem">Mi Cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color:rgb(196, 148, 3)">Cerrar
                                Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>




    {{-- Navbar --}}
    {{-- <nav class="navbar navbar-dark bg-#4a151b" style="background-color:#4a151b;">
        <div class="container-fluid">
          <a class="navbar-brand mb-0 h1" href="{{route('index')}}">Poli-Waiter</a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('menu')}}">Menú de alimentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mi Cuenta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}



    @yield('content')



    
    @extends('Alimentos.registrarIngrediente')
    <script src="{{ asset('js/toast.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
