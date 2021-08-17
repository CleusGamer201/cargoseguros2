<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}"> 
        <meta name="csrf-token" content="{{ csrf_token() }}"> 

        <!--BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>CargoSeguros | Registrarse</title>

        <!--STYLES CSS-->
        <link href="{{asset('css/register.css')}}" rel="stylesheet"> 

        <!--FONT STYLE-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

        <!--ICONS-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    </head>
    <body>
      <div class="container-fluid">
        <div class="d-flex">
          <img class="igm" src="{{asset('img/logotipe.png')}}">
        </div>
      </div>
<div class="container d-flex justify-content-center pt-2">
  <div class="text-center pb-2">
  </div>
</div>
<div class="container d-flex justify-content-center pt-2">
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">¿No sabes como registrarte?</button>
</div>
<div class="col-12 p-3 collapse" id="collapseExample">
  <div class="card">
    <div class="card-header font-weight-bold">Sigue los siguientes pasos</div>
    <div class="card-body">
      <ul>
        <li>1. Darle click en crear nuevo usuario.</li>
        <br>
        <li>2. Colocar la informacíón de la empresa.</li>
        <ul>
          <li>Es necesario la informacíón de la empresa de trasteo para confirmar que sea una empresa totalmente legal. Ver <a href="#">terminos y condiciones</a>.</li>
        </ul>
        <br>
        <li>3. Colocar la información personal.</li>
        <ul>
          <li>Es obligatorio colocar la informacion personal como: nombre y apellido, cedula y entre otros.</li>
        </ul>
        <br>
        <li>4. Confirmar los datos y darle click al boton registrar.</li>
        <ul>
          <li>Ya completado y confirmado los datos, procederemos a darle al boton registrar.</li>
        </ul>        
      </ul>
    </div>
  </div>
</div>

<div class="container d-flex justify-content-center" style="min-width:300px !important; max-width: 720px !important; width: auto !important;">
  <div class="col-11 col-offset-2">
    <div class="progress mt-3" style="min-width: 20% !important; max-width: 100% !important; width: auto !important; max-height: 30px; min-height: 30px; height: auto;">
      <div class="progress-bar warning-color progress-bar-striped progress-bar-animated" style="font-weight:bold; font-size:15px;" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="card mt-3">
      <form action="{{ route('RegisterController.create') }}" method="get">
        @csrf
      <div class="card-header font-weight-bold"><b>Completa la información para registrarte.</b></div>
      <div class="card-body p-4 step">
        <div class="radio-group row justify-content-between px-3 text-center" style="justify-content:center !important">
          <div class="col-auto me-sm-2 mx-1 card-block py-0 text-center radio">
            <div class="opt-icon"><i class="icon ion-md-person-add" style="font-size: 80px;  margin-left: 0px;"></i></div>
            <p><b>Crear nuevo usuario</b></p>
          </div>
          <div class="col-auto me-sm-2 mx-1 card-block py-0 text-center radio">
            <div class="opt-icon"><i class="icon ion-md-person-add" style="font-size: 80px;  margin-left: 0px;"></i></div>
            <p><b>¿Ya estas registrado?</b></p>
          </div>          
        </div>
        <div id="filter-records" class="mx-5"></div>
      </div>
      <div id="userinfo" class="card-body p-4 step" style="display: none">
        <div class="text-center">
          <h5 class="card-title font-weight-bold pb-2"><b>Información de la Empresa</b></h5>
        </div>
        <div class="form-group row pt-5">
          <div class="col" style="width: auto;">
            <label for="fname"><b>Nombre de la Empresa</b></label>
            <input type="text" name="bussines" class="form-control" id="bussines" required>
            <div class="invalid-feedback">Debes colocar el nombre de la empresa</div>
          </div>
          <div class="col" style="width: auto;">
            <label for="lname"><b>Identificacíon de la Empresa</b></label>
            <input type="text" class="form-control" id="identified_bussines" required>
            <div class="invalid-feedback">Debes colocar la identificacion</div>
          </div>
        </div>
        <div class="form-group row pt-2">
            <div class="col" style="width: auto;">
          <label for="tel_emp" class="control-label col-form-label"><b>Celular de la Empresa</b></label>
            <input type="text" class="form-control" id="phone" required>
             <div class="invalid-feedback">Debes colocar el celular de la empresa</div>               
            </div>
            <div class="col" style="width: auto;">
          <label for="mail_emp" class="control-label col-form-label"><b>Correo de la Empresa</b></label>
            <input type="text" class="form-control" id="email_bussines" required>
             <div class="invalid-feedback">Debes colocar el correo de la empresa</div>               
            </div>            
        </div>
        <div class="text-center pt-5">
          <h5 class="card-title font-weight-bold"><b>Dirección de la empresa</b></h5>
        </div>
        <div class="form-group row pt-5">
            <div class="col" style="width: auto;">
          <label for="depa" class="control-label col-form-label"><b>Departamento</b></label>
            <input type="text" class="form-control" id="department_bussines" required>
             <div class="invalid-feedback">Debes colocar el departamento</div>               
            </div>
            <div class="col" style="width: auto;">
          <label for="muni_emp" class="control-label col-form-label"><b>Municipio</b></label>
            <input type="text" class="form-control" id="municipality_bussines" required>
             <div class="invalid-feedback">Debes colocar el municipio</div>               
            </div>  
            <div class="col" style="width: auto;">
          <label for="dire_emp" class="control-label col-form-label"><b>Dirección</b></label>
            <input type="text" class="form-control" id="address_bussines" required>
             <div class="invalid-feedback">Debes colocar la dirección</div>               
            </div>                        
        </div>                
      </div>
      <div class="card-body p-5 step" style="display: none">
        <div class="text-center">
          <h5 class="card-title font-weight-bold pb-2"><b>Información del Usuario</b></h5>
        </div>

        <div class="form-group row pt-3">
          <div class="col-2" style="width: auto;">
            <label for="user">Usuario</label>
            <input type="text" name="user" class="form-control" id="user" required>
            <div class="invalid-feedback">Debes colocar el usuario</div>
          </div>
        </div> 
        <div class="form-group row pt-5">
          <div class="col" style="width: auto;">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" required>
            <div class="invalid-feedback">Debes colocar el nombre</div>
          </div>
          <div class="col" style="width: auto;">
            <label for="last_name">Apellido</label>
            <input type="text" name="lastname" class="form-control" id="lastname" required>
            <div class="invalid-feedback">Debes colocar el apellido</div>
          </div>          
        </div>  
        <div class="form-group row pt-4">
          <div class="col" style="width: auto;">
            <label for="identified">Identificacíon</label>
            <input type="text" name="identified" class="form-control" id="identified" required>
            <div class="invalid-feedback">Debes colocar la identificación</div>
          </div>
          <div class="col" style="width: auto;">
            <label for="phone">Celular</label>
            <input type="text" name="phone" class="form-control" id="phone" required>
            <div class="invalid-feedback">Debes colocar el celular</div>
          </div>          
        </div>     
        <div class="form-group row pt-4">
          <div class="col" style="width: auto;">
            <label for="email">Correo</label>
            <input type="mail" name="email" class="form-control" id="email" required>
            <div class="invalid-feedback">Debes colocar el correo</div>
          </div>
          <div class="col" style="width: auto;">
            <label for="email">Confirmar Correo</label>
            <input type="mail" name="email2" class="form-control" id="email2" required>
            <div class="invalid-feedback">Debes confirmar el correo</div>
          </div>          
        </div>    
        <div class="form-group row pt-4">
          <div class="col" style="width: auto;">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" required>
            <div class="invalid-feedback">Debes colocar la contraseña</div>
          </div>
          <div class="col" style="width: auto;">
            <label for="password">Confirmar Contraseña</label>
            <input type="password" name="password2" class="form-control" id="password2" required>
            <div class="invalid-feedback">Debes confirmar la contraseña</div>
          </div>          
        </div>                                           
      </div>
      <div class="card-footer">
        <button class="action back btn btn-sm btn-outline-danger" style="display: none">Volver</button>
        <button class="action next btn btn-sm btn-outline-success float-end" disabled="">Siguiente</button>
        <button class="action submit btn btn-sm btn-outline-success float-end" href="hola" style="display: none">Registrarse</button>
      </div>
      </form>      
    </div>
  </div>
</div>
<br>
<br>
<br>

        <!--JAVASCRIPTS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <script type="text/javascript" src="{{asset('js/register.js')}}"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>        
    </body>
</html>