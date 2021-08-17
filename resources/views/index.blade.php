@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">  

        <!--BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>CargoSeguros</title>

        <!--STYLES CSS-->
        <link href="{{asset('css/index.css')}}" rel="stylesheet"> 
        <link href="{{asset('css/popup.css')}}" rel="stylesheet"> 

        <!--FONT STYLE-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

        <!--ICONS-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    </head>
    <body>         
        <div class="container-fluid">
            <header>     
                <div class="col-lg-12">
                    <div class="content mx-auto">
                <div class="card">                           
                <img src="{{asset('img/CargoSeguros.jpg')}}" class="img-fluid w-100 igm">
                <div class="title">¿Estas listo para generar tu respaldo?</div>          
                <a onclick="openLoginForm()" class="btn btn-primary">Iniciar Sesión</a>  
                <a href="#" class="btn btn-primary2">Regisrarse</a>      
                </div> 
                </div>                
                </div>                                
        </div>                          
        </header> 
        <div class="popup-overlay"></div>
        <div class="popup">
          <div class="popup-close" onclick="closeLoginForm()">&times;</div>
          <div class="form">
            <div class="avatar">
              <img src="{{asset('img/favicon.png')}}">
            </div>
            <div class="header">
              Inicia Sesión
            </div>
            <div class="element">
              <label for="username">Usuario</label>
              <input type="text" id="username" name="username">
            </div>
            <div class="element">
              <label for="password">Contraseña</label>
              <input type="password" id="password" name="password">
              <label class="container">Mostrar Contraseña
                <input type="checkbox" onclick="myFunction()">
                <span class="checkmark"></span>
              </label>      
            </div>
            <div class="element">
              <button onclick="validarLogin()">Iniciar Sesión</button>
            </div>
            <div class="element">
                <label>¿No tienes cuenta?<a href="registrate">registrate ahora</a></label>
            </div>
          </div>
        </div>     

        <!--JAVASCRIPTS-->
        <script type="text/javascript" src="{{asset('js/popup.js')}}"></script>       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
@endsection