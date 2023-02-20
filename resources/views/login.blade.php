<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poli-Waiter | Login</title>
</head>

<body>
    {{-- Formulario inicio sesión  --}}
    
    <div class="login-box">
        <img src="{{asset('imgs/icon.jpeg')}}" class="avatar" alt="Avatar Image">
          <h1>Poli-Waiter | Login </h1>
          <form>
          <!-- USERNAME INPUT -->
             <label for="username">Usuario: </label>
              <input type="text" placeholder="">
          <!-- PASSWORD INPUT -->
              <label for="password">Contraseña: </label>
              <input type="password" placeholder="">
              <button type="button" class="btn btn-dribbble text-left w-100 mb-3">
                <i class="ion-logo-dribbble mr-2"></i> Find us on Dribbble
                </button>
                
         
        </form>
      </div>

</body>

</html>
