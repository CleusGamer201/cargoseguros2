<?php 
    echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js\"></script>";

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">  
        <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

        <!--BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>CargoSeguros</title>

        <!--STYLES CSS-->
        <link href="{{asset('css/register.css')}}" rel="stylesheet"> 

        <!--FONT STYLE-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

        <!--ICONS-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    </head>
    <body>      
   <body>
      <div class="container-fluid">
      </div>
<div class="container d-flex justify-content-center pt-2">
  <div class="text-center pb-2">
  </div>
</div>
<div class="container d-flex justify-content-center pt-2">
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">¿No sabes como generar tu respaldo?</button>
</div>
<div class="col-12 p-3 collapse" id="collapseExample">
  <div class="card">
    <div class="card-header font-weight-bold">Sigue los siguientes pasos</div>
    <div class="card-body">
      <ul>
        <li>1. Darle click en crear nuevo respaldo.</li>
        <br>
        <li>2. Colocar la información de la empresa.</li>
        <ul>
          <li>Es necesario la informacíón de la empresa de trasteo para confirmar que sea una empresa totalmente legal. Ver <a href="#">terminos y condiciones</a>.</li>
        </ul>
        <br>
        <li>3. Colocar la información del cliente.</li>
        <ul>
          <li>Es obligatorio colocar la informacion del cliente como: nombre y apellido, cedula y celular.</li>
        </ul>
        <br>
        <li>4. Confirmar los datos de cargue y descargue, lista de enseres. etc.</li>
        <ul>
          <li>Ya completado y confirmado los datos, procederemos a darle al boton generar.</li>
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
      <form method="POST" action="{{ route('createRespalde') }}" id="final" role="form" autocomplete="off">
        @csrf
      <div class="card-header font-weight-bold"><b>Completa la información para crear un respaldo.</b></div>
      <div class="card-body p-4 step">
        <div class="radio-group row justify-content-between px-3 text-center" style="justify-content:center !important">
          <div class="col-auto me-sm-2 mx-1 card-block py-0 text-center radio">
            <div class="opt-icon"><i class="icon ion-ios-clipboard" style="font-size: 80px;  margin-left: 0px;"></i></div>
            <p><b>Crear nuevo respaldo</b></p>
          </div>         
        </div>
        <div id="filter-records" class="mx-5"></div>
      </div>
      <div class="card-body p-5 step" style="display: none">
        <div class="text-center">
          <h5 class="card-title font-weight-bold pb-2"><b>Lugar de salida</b></h5>
        </div>
        <div class="form-group row pt-3">
            <div class="col" style="width: auto;">
          <label for="transport" class="control-label col-form-label"><b>Medio de Transporte</b></label>
            <input type="text" class="form-control" name="transport" value="Terrestre" required>
             <div class="invalid-feedback">Debes colocar el medio de transporte</div>               
            </div>
            <div class="col" style="width: auto;">
          <label for="driver" class="control-label col-form-label"><b>conductor</b></label>
            <input type="text" class="form-control" name="driver">              
            </div>
            <div class="col" style="width: auto;">
          <label for="vehicle_plate" class="control-label col-form-label"><b>placa</b></label>
            <input type="text" class="form-control" name="vehicle_plate">             
            </div> 
  </div> 
  </div>     
      <div class="card-body p-5 step" style="display: none">
        <div class="text-center">
          <h5 class="card-title font-weight-bold pb-2"><b>Lugar de salida</b></h5>
        </div>

        <div class="form-group row pt-3">
            <div class="col" style="width: auto;">
          <label for="exit_departament" class="control-label col-form-label"><b>Departamento</b></label>
            <input type="text" class="form-control" name="exit_departament" required>
             <div class="invalid-feedback">Debes colocar el departamento</div>               
            </div>
            <div class="col" style="width: auto;">
          <label for="exit_municipality" class="control-label col-form-label"><b>Municipio</b></label>
            <input type="text" class="form-control" name="exit_municipality" required>
             <div class="invalid-feedback">Debes colocar el municipio</div>               
            </div>  
            <div class="col" style="width: auto;">
          <label for="exit_address" class="control-label col-form-label"><b>Dirección</b></label>
            <input type="text" class="form-control" name="exit_address" required>
             <div class="invalid-feedback">Debes colocar la dirección</div>               
            </div>             
        </div>
        <div class="form-group row pt-3">
            <div class="col-4" style="width: auto;">
          <label for="exit_date" class="control-label col-form-label"><b>Fecha salida</b></label>
            <input type="date" class="form-control" name="exit_date" required>
             <div class="invalid-feedback">Debes colocar la dirección</div>               
            </div>           
        </div> 
        <div class="text-center pt-5">
          <h5 class="card-title font-weight-bold pb-2"><b>Lugar de destino</b></h5>
        </div>      
        <div class="form-group row pt-3">
            <div class="col" style="width: auto;">
          <label for="arrival_departament" class="control-label col-form-label"><b>Departamento</b></label>
            <input type="text" class="form-control" name="arrival_departament" required>
             <div class="invalid-feedback">Debes colocar el departamento</div>               
            </div>
            <div class="col" style="width: auto;">
          <label for="arrival_municipality" class="control-label col-form-label"><b>Municipio</b></label>
            <input type="text" class="form-control" name="arrival_municipality" required>
             <div class="invalid-feedback">Debes colocar el municipio</div>               
            </div>  
            <div class="col" style="width: auto;">
          <label for="arrival_address" class="control-label col-form-label"><b>Dirección</b></label>
            <input type="text" class="form-control" name="arrival_address" required>
             <div class="invalid-feedback">Debes colocar la dirección</div>               
            </div>                                                      
    </div>
    <div class="form-group row pt-3">
            <div class="col-4" style="width: auto;">
          <label for="arrival_date" class="control-label col-form-label"><b>Fecha de llegada</b></label>
            <input type="text" class="form-control" name="arrival_date">             
            </div>       
    </div>
  </div>
      <div class="card-body p-5 step" style="display: none">
        <div class="text-center">
          <h5 class="card-title font-weight-bold pb-2"><b>Generador de la carga</b></h5>
        </div>

        <div class="form-group row pt-5">
            <div class="col-6" style="width: auto;">
          <label for="user_generator" class="control-label col-form-label"><b>Cliente</b></label>
            <input type="text" class="form-control" name="user_generator" required>
             <div class="invalid-feedback">Debes colocar el nombre del cliente</div>               
            </div>
            <div class="col-6" style="width: auto;">
          <label for="user_identity" class="control-label col-form-label"><b>Identificacíon del cliente</b></label>
            <input type="text" class="form-control" name="user_identity" required>
             <div class="invalid-feedback">Debes colocar la identificación del cliente</div>               
            </div>  
            <div class="col-6" style="width: auto;">
          <label for="user_phone" class="control-label col-form-label"><b>Celular del cliente</b></label>
            <input type="text" class="form-control" name="user_phone">
             <div class="invalid-feedback">Debes colocar el celular del cliente</div>               
            </div>  
        <div class="text-center pt-5">
          <h5 class="card-title font-weight-bold pb-2"><b>Información de la carga</b></h5>
        </div>      
        <div class="form-group row pt-3">
            <div class="col-4">
          <label for="price" class="control-label col-form-label"><b>Avalúo de mercancía</b></label>
            <input type="text" class="form-control" name="price" id="price" onchange="sumar();" required>
             <div class="invalid-feedback">Debes colocar el precio</div>               
            </div> 
            <div class="col-3">
          <label for="percentage" class="control-label col-form-label"><b>Porcentaje</b></label>
            <input type="text" class="form-control" name="percentage" id="percentage" onchange="sumar();" required>
             <div class="invalid-feedback">Debes colocar el porcentaje</div>               
            </div> 
            <div class="col-3">
          <label for="total" class="control-label col-form-label"><b>Total</b></label>
            <input type="text" class="form-control" name="total" id="total" required>
             <div class="invalid-feedback">Debes colocar el total</div>               
            </div>              
            <div class="col-8" style="width: auto;">
          <label for="commodity" class="control-label col-form-label"><b>Mercancia</b></label>
            <textarea class="form-control" rows="10" cols="50" name="commodity"></textarea>
             <div class="invalid-feedback">Debes colocar el listado de la mercancia</div>               
            </div>                                                                                      
      </div>
        <div class="form-group row pt-3">
            <label class="titlelabel">¿El cliente se encarga de embalar?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" value="1" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Si
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" value="0" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              No
            </label>
          </div>                                                                                      
      </div>      
    </div>
  </div> 
        <div class="card-footer">
        <button type="button" class="action back btn btn-sm btn-outline-danger" style="display: none">Volver</button><button type="button" class="action sg next btn btn-sm btn-outline-success float-end" disabled="">Siguiente</button>
        <button type="button" class="action volver btn btn-sm btn-outline-danger" onclick="window.location.href='/dashboard'">Salir</button>        
        <input type="submit" class="action submit btn btn-sm btn-outline-success float-end" href="" value="Generar" style="display: none">
      </div>
      </form>      
    </div>
  </div>
</div>
<br>
<br>
<br>
 
<script>

  $("#price").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});


function sumar () {
     
// Create our number formatter.
var formatter = new Intl.NumberFormat('en-US', {
  //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
  maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
});

    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    var percentage = document.getElementById('percentage').value;
    var price = document.getElementById('price').value;
    
    if (percentage == null || percentage == undefined || percentage == "") {
      percentage = 1.19;
      document.getElementById('percentage').value = String(percentage).replaceAll('.' , ",");
    }
    if (price == null || price == undefined || price == "") {
      price = 0;
      document.getElementById('price').value = price;
    } else price = price.replaceAll('.', '');

    percentage = parseFloat(percentage);
    price = parseInt(price);

    var total = (percentage / 100.0) * price;
    document.getElementById('total').value = formatter.format(total).replaceAll(',' , ".");
}
</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <script type="text/javascript" src="{{asset('js/generatePDF.js')}}"></script>         
        <script type="text/javascript" src="{{asset('js/autotable.js')}}"></script> 
        <script type="text/javascript" src="{{asset('js/register.js')}}"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
    </body>
</html>
