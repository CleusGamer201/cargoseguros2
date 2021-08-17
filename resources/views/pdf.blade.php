<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ $back->backcode }}-{{ $back->getConsecutivoFormatted() }}</title>  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />        
    <style type="text/css">

    .title {
      font-size: 12.5px;
      text-align: center;
      padding-top: -5px;
      font-family: sans-serif;
      font-weight: bold;
    } 

    .title3 {
      font-size: 12.5px;
      padding-top: -5px;
      font-family: sans-serif;
      font-weight: bold;
    }  

    .title4 {
      font-size: 14px;
      padding-top: -5px;
      font-family: sans-serif;
      font-weight: bold;
      text-align: center;
    }

    .title5 {
      font-size: 15px;
      padding-top: -5px;
      font-family: sans-serif;
      font-weight: bold;
      text-align: center;
    }  

    .title6 {
      font-size: 15px;
      padding-top: -5px;
      font-family: sans-serif;
      font-weight: normal;
      text-align: left;
    }                      

    .title2 {
      font-size: 11.7px;
      text-align: center;
      padding-top: -5px;
      font-family: sans-serif;
      font-weight: bold;
    }         

    .table1 {
      background-color: rgba(226, 239, 217);
      height: 5px;
      border-collapse: collapse;
      width: 530px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 20px;
    }

    .table2 {
      background-color: rgba(226, 239, 217);
      height: 5px;
      border-collapse: collapse;
      width: 530px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 20px;
    } 

    .table3 {
      background-color: rgba(226, 239, 217);
      height: 5px;
      border-collapse: collapse;
      width: 530px;
      margin-left: auto;
      margin-right: auto;
    }  

    .table5 {
      height: 5px;
      border-collapse: collapse;
      width: 530px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 20px;
    }    

    .table4 {
      background-color: rgba(226, 239, 217);
      height: 5px;
      border-collapse: collapse;
      width: 585px;
      margin-left: auto;
      margin-right: auto;
    }            

   .tablecort {
      background-color: rgba(226, 239, 217);
      height: 4px;
      border-collapse: collapse;
      width: 185px;
      margin-left: 89px;
      margin-right: -50px;   
      margin-top: 33px;  
      height: auto;
    }

    .text {
      font-size: 13px;
      font-family: 'open Sans' sans-serif;
      font-weight: bold;
    }

    .textnormal {
      font-size: 13.5px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;   
    }

    .textnormal3 {
      font-size: 11.5px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;   
    }    

    .textnormal2 {
      font-size: 12.5px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;   
      color: rgb(32, 97, 3);
    }    

    .textultimate {
      font-size: 12.5px;
      font-family: 'open Sans' sans-serif;
      font-weight: bold;   
      color: black;
      text-align: justify;
    }   

    .textultimate3 {
      font-size: 13px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;   
      color: black;
      text-align: justify;
    }       

    .textultimate2 {
      font-size: 14px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;   
      color: black;
      text-align: justify;
    }            

    .texttitle {
      font-size: 13px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;     
    } 

    .texttitle3 {
      font-size: 11.7px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;     
    }      

    .texttitle2 {
      font-size: 12px;
      font-family: 'open Sans' sans-serif;
      font-weight: normal;     
    }      

    td {
      border: rgba(168, 208, 141) 1.5px solid;
      height: 2%; 
      padding-left: 10px;
      padding-right: 10px;  
      height: auto;  
    }

    .td1 {
      border: #FFFF 1.5px solid;
      height: 2%; 
      padding-left: 10px;
      padding-right: 10px;  
      height: auto;  
    }


    .tdleft {
      text-align: left !important;
      height: auto;
    }  

    .tdcenter {
      text-align: center !important;
      height: auto;
    }

    .tdjustify {
      text-align: justify !important;
      height: auto;
      color: rgb(32, 97, 3);
    }           

    .page_break { page-break-before: always; }
    </style>
</head>
<body>
  <div class="ign">
  <img src="../public/img/title.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="655px" height="160px">
  </div>
  <table class="table1">
    <tr>
      <td>
        <div class="title">NUMERO DE ORDEN:</div>
      </td>
      <td>                          
        <div class="text">{{ $back->backcode }}-{{ $back->getConsecutivoFormatted() }}</div>
      </td>    
      <td>
        <div class="title">FECHA DE LA ORDEN:</div>
      </td>      
      <td>
        <div class="text">{{ $back->created_at->format('d-m-Y') }}</div>
      </td>               
    </tr>
  </table>    
  <table class="tablecort">
    <tr>
      <td>
        <div class="title">LUGAR DE ORIGEN</div>
      </td>      
    </tr>    
  </table>  

  <table class="table2" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 20px !important;">
    <tr>
      <td class="tdleft">
        <div class="texttitle">DEPARTAMENTO</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->exit_departament }}</div>
      </td>            
    </tr>  
    <tr style="">
      <td class="tdleft">
        <div class="texttitle">CIUDAD/DIRECCIÓN DE SALIDA:</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;">
        <div class="textnormal">{{ $back->exit_municipality}}. {{ $back->exit_address}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle">FECHA DE CARGUE:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->exit_date->format('d-m-Y') }}</div>
      </td>            
    </tr>            
  </table>  

  <table class="tablecort">
    <tr>
      <td>
        <div class="title">LUGAR DE DESTINO</div>
      </td>      
    </tr>    
  </table>  


  <table class="table2" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 20px !important;">
    <tr>
      <td class="tdleft">
        <div class="texttitle">DEPARTAMENTO</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->arrival_departament}}</div>
      </td>            
    </tr>  
    <tr>
      <td class="tdleft">
        <div class="texttitle">CIUDAD/DIRECCIÓN DE DESTINO:</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;">
        <div class="textnormal">{{ $back->arrival_municipality}}. {{ $back->arrival_address}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle">FECHA DE CARGUE:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->arrival_date}}</div>
      </td>            
    </tr>            
  </table>

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 70px !important;">
    <tr>
      <td class="tdleft">
        <div class="texttitle">USUARIO GENERADOR DE LA CARGA:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->user_generator}}</div>
      </td>            
    </tr>  
    <tr>
      <td class="tdleft">
        <div class="texttitle">IDENTIFICACIÓN:</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;">
        <div class="textnormal">{{ $back->user_identity}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle2">DIRECCIÓN DEPARTAMENTO Y CIUDAD</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->exit_departament }}. {{ $back->exit_municipality}}. {{ $back->exit_address}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle">TELÉFONO 1 CELULAR DEL USUARIO:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->user_phone}}</div>
      </td>            
    </tr>                
  </table>      

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 70px !important;">
    <tr>
      <td class="tdleft">
        <div class="texttitle">OPERADOR DE TRANSPORTE:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{$business->name}}</div>
      </td>            
    </tr>  
    <tr>
      <td class="tdleft">
        <div class="texttitle">IDENTIFICACIÓN:</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;">
        <div class="textnormal">{{$business->identification}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle3">DIRECCIÓN DEPARTAMENTO Y CIUDAD: </div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $business->department}}. {{ $business->municipality}}. {{ $business->address}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle3">TELÉFONO 1 CELULAR DEL OPERADOR:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $business->phone}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle">MEDIO DE TRANSPORTE:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->transport}}</div>
      </td>                  
    </tr>  
    <tr>
      <td class="tdleft">
        <div class="texttitle">CONDUCTOR:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->driver}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle">PLACA DEL VEHÍCULO:</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->vehicle_plate}}</div>
      </td>            
    </tr>                           
  </table>      

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 70px !important;">
    <tr>
      <td class="tdleft">
        <div class="title">VALOR DECLARADO POR REMITENTE: </div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;"abbr="">
        <div class="title"><strong>$</strong>{{number_format($back->price, 0, ",", ".")}} <strong>COP</strong></div>
      </td>            
    </tr>                            
  </table> 

<div class="page_break"></div>

  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 75px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title">DESCRIPCIÓN DE LA MERCANCÍA:</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdleft" height="auto" style="word-wrap: break-word;"abbr="">
        <div class="textnormal">{{ $back->commodity}}</div>
      </td>                
    </tr>                              
  </table>          
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 35px !important;">
    <tr>
      <td class="tdleft" width="80%">
        <div class="title">¿EL REMITENTE SE ENCARGARÁ DE EMBALAR LA MERCANCÍA? </div>
      </td>          
      
      @if($back->packing == 1)    
      <td class="tdleft" style="word-wrap: break-word;"abbr=""> 
        <div class="title">Si X</div>
      </td>       
      <td class="tdleft" style="word-wrap: break-word;"abbr="">        
        <div class="title">No</div>                    
      </td>  
      @else       
      <td class="tdleft" style="word-wrap: break-word;"abbr=""> 
        <div class="title">Si</div>
      </td>       
      <td class="tdleft" style="word-wrap: break-word;"abbr="">        
        <div class="title">No X</div>                    
      </td>  
      @endif                               
    </tr>
  </table> 

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 45px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title">VALOR TOTAL DEL SERVICIO</div>
      </td>                            
    </tr>                            
  </table> 

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 35px !important;">
    <tr>
      <td class="tdleft">
        <div class="title">FLETE:</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;"abbr="">
        <div class="textnormal">Facturado por {{$business->name}}</div>
      </td>                      
    </tr>
    <tr>
      <td class="tdleft">
        <div class="title">VALOR RÉGIMEN INDEMNIZATORIO: </div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;"abbr="">
        <div class="textnormal"><strong>$</strong>{{number_format($back->price, 0, ",", ".")}} <strong>COP</strong></div>
      </td>                      
    </tr>                                
  </table> 

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 35px !important;">
    <tr>
      <td class="tdleft">
        <div class="title">VALOR TOTAL POR CONCEPTO INDEMNIZATORIO</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;"abbr="">
        <div class="textnormal"><strong>$</strong>{{number_format($back->total, 0, ",", ".")}} <strong>COP</strong></div>
      </td>                      
    </tr>                            
  </table>   


  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title">DESCRIPCIÓN DE LA MERCANCÍA:</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal">Se pacta el siguiente régimen indemnizatorio entre el Operador de Transporte, beneficiario y el Emisor, este último,
responsable del régimen indemnizatorio. Mientras el hecho encaje dentro de los supuestos de la cláusula de
responsabilidad, el obligado a pagar la indemnización será el emisor. En caso de situaciones diferentes a las aquí
planteadas la responsabilidad recaerá sobre el operador/transportador mientras sea comprobada su vinculación en
el hecho. Entregada la carga al destinatario o a la persona designada para recibirla, en el sitio convenido o como
se pactó en el contrato de transporte, esta responsabilidad cesará.
</div>
      </td>                
    </tr>                              
  </table>

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title">DESCRIPCIÓN DE LA MERCANCÍA:</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal">* Destrucción total de la carga por incendio.<br>
* Destrucción total de la carga por volcamiento.<br>
* Destrucción total de la carga por terrorismo.<br>
* Se cubre la carga única y exclusivamente por pérdida total.<br>
* Y se cubre única y exclusivamente el trayecto de carga desde su inicio y carga hasta su
&nbsp;&nbsp;&nbsp; entrega y descarga, única y exclusivamente el trayecto acordado.<br>
</div>
      </td>                
    </tr>                              
  </table>  

<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">
  <table class="table4" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 20px !important;">
    <tr>
      <td class="tdleft">
        <div class="title">El Régimen Indemnizatorio no cubre:
</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdleft" style="word-wrap: break-word;"abbr="">
        <div class="textnormal2">* Cualquier tipo de responsabilidad civil, incluyendo la responsabilidad civil extracontractual y el lucro cesante.<br>
* El mal embalaje de la carga.<br>
* No cubre los siguientes artículos:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Azúcar.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Licores, cervezas y gaseosas.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cigarrillos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Telefonía celular, tarjetas prepago y accesorios.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Químicos Controlados.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Algodón en pacas.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Harina de pescado.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Productos Biomédicos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Efectos personales y de menaje doméstico en exceso de $10’000.000.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Semovientes, animales en general.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Monedas y billetes. (Dinero en efectivo).<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Metales y piedras preciosas, objetos y joyas de metales o de piedras preciosas, objetos artísticos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Billetes de Lotería, bonos oficiales, cédulas hipotecarias, acciones, títulos valores, estampillas de<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; timbre y correo sin sellar, cheques de viajero y, en general, toda la clase de documentos<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; representativos de valores.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cartas geográficas, mapas o planos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Perecederos que no cumplan con la cláusula de bienes transportados en condiciones especiales de<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; refrigeración, congelación o calefacción.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Juegos de vídeo, software de vídeos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Pieles.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Bienes explosivos e inflamables.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cualquier tipo de vidrios.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Telas, textiles, confecciones e hilazas.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Hilos, hilazas y fibras.<br>
* No se cubren pérdidas parciales.<br>
* Desaparición misteriosa de las mercancías causada por la desaparición inexplicable del medio de transporte,<br>&nbsp;&nbsp;&nbsp; siempre que se compruebe que el conductor / operador no es responsable del hecho.<br>
* En ningún caso este régimen indemnizatorio cubrirá los daños y/o pérdidas como consecuencia de ataques<br>
&nbsp;&nbsp;&nbsp; químicos, biológicos, bioquímicos, uso de armas electromagnéticas, uso de computadores, sistemas,<br> &nbsp;&nbsp;&nbsp; programas, virus de computación, y procesos con cualquier sistema electrónico como medio para causar<br> &nbsp;&nbsp;&nbsp; daño.<br>
* Se cubre solamente y exclusivamente el transporte de la mercancía en el vehículo transportador, en ningún<br>
&nbsp;&nbsp;&nbsp; caso cualquier tipo de permanencias y almacenajes en bodegas. El presente régimen indemnizatorio no cubre<br> &nbsp;&nbsp;&nbsp; daños y pérdidas si el vehículo en el cual se está transportando la mercancía al momento del incidente o <br> &nbsp;&nbsp;&nbsp; accidente, fuere diferente al establecido en la Carta de Porte desde el inicio de la relación contractual.<br>
* Combustión espontánea, siempre y cuando no sean originados por accidente o impericia del conductor.<br>
* Accidente de vehículo que transporta las mercancías, cuando incumpla las normas de tránsito, movilice
<br> &nbsp;&nbsp;&nbsp; sobrepeso, el conductor conduzca en estado de embriaguez, o bajo sustancias psicoactivas, conduzca en <br> &nbsp;&nbsp;&nbsp; contravía o sobrepase los límites de velocidad, establecidos por la ley. El presente régimen indemnizatorio <br> &nbsp;&nbsp;&nbsp; no cubre por ningún concepto si la combustión no es espontánea, es decir, en ningún momento se cubren <br> &nbsp;&nbsp;&nbsp; accidentes originados por la impericia, imprudencia o negligencia del conductor.<br>
* No cubre expresamente cuando el transportador incurra:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o En accidente de vehículo que transporta las mercancías, cuando incumpla las normas de tránsito, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; movilice sobrepeso, el conductor <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; conduzca en estado de embriaguez, o bajo sustancias psicoactivas,
conduzca en contravía o sobrepase <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; los límites de velocidad, establecidos por la ley.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Despachos realizados en empresas transportadoras terrestres de carga que no estén legalmente <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; conformadas, autorizadas y habilitadas por las respectivas autoridades para realizar este tipo de <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; operación.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Se excluyen de cobertura los despachos de mercancías en vehículos transportadores terrestres que <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sobrepasen las capacidades establecidas por las autoridades competentes.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Movilización en vehículos con fallas mecánicas, desgaste o sin los requisitos técnico mecánicos <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; exigidos por la normatividad vehicular.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Daño mecánico y/o eléctrico súbito e imprevisto del equipo de refrigeración o de congelación del <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vehículo transportador que moviliza las mercancías.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cuando la mercancía requiera refrigeración y el vehículo de transporte no tiene el adecuado sistemade <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; refrigeración para su transporte.
</div>
      </td>                
    </tr>                              
  </table>

<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title2">Responsabilidad Civil Extracontractual, Lucro Cesante o Indemnizaciones Extraordinarias.</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">Cualquier tipo de seguro de responsabilidad civil extracontractual, lucro cesante o indemnizaciones deben ser cubiertas
por el operador de transportes, única y exclusivamente. Este régimen indemnizatorio no cubre la responsabilidad Civil
Extracontractual, Lucro Cesante o indemnizaciones extraordinarias de manera expresa.

</div>
      </td>                
    </tr>                              
  </table> 

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdleft">
        <div class="title2">El operador de Transporte debe previamente cumplir:</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">* Acreditar el pago del flete y los sobrecostos, sin el pago del valor del régimen indemnizatorio el presente <br>&nbsp;&nbsp;&nbsp;no surte efectos.<br>
* Los vehículos y conductores deben tener un estudio de seguridad y sin antecedentes de hurto, para este <br>&nbsp;&nbsp;&nbsp;control deberán ser consultados en la base de datos del Gremio al cual están afiliados y/o Dijín, previo a la <br>&nbsp;&nbsp;&nbsp;prestación
del servicio.<br>
* El operador deberá realizar monitoreo de la carga transportada, desde origen hasta destino final por <br>&nbsp;&nbsp;&nbsp;cualquier
medio de tecnología de la información.<br>
* En caso de un evento relacionado con la carga, el operador y el conductor pondrán a disposición del emisor
<br>&nbsp;&nbsp;&nbsp;responsable, toda la información que éste le solicite, con el fin de esclarecer de la manera más ágil y <br>&nbsp;&nbsp;&nbsp;expedita los hechos.<br>
* Debe al momento de aceptar este documento entregar toda la información solicitada.

</div>
      </td>                
    </tr>                              
  </table>  
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdleft">
        <div class="title2">Prohibiciones al Usuario Generador de la Carga.</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">* Se pacta la prohibición al generador de la carga de renunciar a cualquier forma de subrogación sobre los <br>&nbsp;&nbsp;&nbsp;responsables de un siniestro.<br>
* Está prohibido y excluye la aplicación de la indemnización todo destino de mercancía a países, <br>&nbsp;&nbsp;&nbsp;organizaciones
o empresas sancionados internacionalmente o nacionalmente por las autoridades <br>&nbsp;&nbsp;&nbsp;competentes o el destino de
la carga sea a organizaciones criminales.<br>
* Las partes Operador de Carga y beneficiario y el Deudor Solidario responsable de este régimen podrán <br>&nbsp;&nbsp;&nbsp;pactar
de mutuo acuerdo, endosar o no este documento a un tercero

</div>
      </td>                
    </tr>                              
  </table> 
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdleft">
        <div class="title2">Monto máximo a Indemnizar sobre el valor declarado.</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">* Se indemnizará el 90% del monto máximo declarado. En todo caso, el total de monto a Indemnizar no <br>&nbsp;&nbsp;&nbsp;podrá sobrepasar los veinte millones de pesos (10'000.000).<br>
* Es obligatorio establecer el monto máximo declarado por el Usuario Generador de la Carga.<br>
* Las partes podrán acordar la reparación y entrega del objeto transportado al remitente o destinatario, sin <br>&nbsp;&nbsp;&nbsp;que la
misma exceda el valor declarado para la carga, lo que exonera tanto al operador como al responsable <br>&nbsp;&nbsp;&nbsp;solidario,
de responsabilidad por todo concepto, lucro cesante, daño emergente, pago de indemnización y/o <br>&nbsp;&nbsp;&nbsp;valor
declarado de la carga y demás.


</div>
      </td>                
    </tr>                              
  </table> 
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title2">DECLARACIÓN DE LA CARGA</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="title3">El operador de transporte se asegurará que el generador de la carga cumpla:</div>
        <div class="textnormal3">* Es propietario, tenedor o poseedor de la mercancía o cosa a transportar, o actúa en representación del dueño <br>&nbsp;&nbsp;&nbsp;o quien tenga derechos de propiedad sobre ellos.<br>
* Que el contenido real de la carga es el indicado en el espacio destinado para ello en la carta de porte.<br>
* Que no está prohibido por Ley el transporte y circulación de los objetos puestos a disposición para el <br>&nbsp;&nbsp;&nbsp;transporte.<br>
* Que los objetos contenidos en la carga están debidamente nacionalizados y cumplen por consecuencia todas
<br>&nbsp;&nbsp;&nbsp;las normas aduaneras y de comercio internacional, bien sea para transportarlas al interior del país o por <br>&nbsp;&nbsp;&nbsp;fuera.<br>
* El operador se reserva el derecho de revisar la carga en los casos autorizados por la Ley, sin limitación <br>&nbsp;&nbsp;&nbsp;alguna. Sin embargo, aclara que no es su obligación.
</div>
      </td>                
    </tr>                              
  </table>  
<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">  
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 50px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title2">REVISIÓN DE LA CARGA:</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">El operador de Transporte está en la obligación de revisar la carga. Excepcionalmente
CARGOSEGUROS se encargará de realizar revisión personal de la carga, con fines de calidad y
legalidad del servicio, se reserva el derecho de realizar aleatoriamente este procedimiento.
</div>
      </td>                
    </tr>                              
  </table>   
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 30px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title2">FECHA DEL PORTE Y CONOCIMIENTO DEL EMBARQUE</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">Si no se indicare la fecha de recibo de las cosas por el transportador, se presumirá que este las
recibió en la fecha de emisión de este documento.

</div>
      </td>                
    </tr>                              
  </table> 

  <table class="table5" cellspacing="0" style="table-layout: auto; height: auto; margin-top: 35px !important;">
    <tr>
      <td class="td1">
        <div class="title4">Instrucciones y definiciones de la carta de porte y régimen indemnizatorio</div>
      </td>                      
    </tr>                              
  </table> 
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 25px !important;">
    <tr>
      <td class="td1">
        <div class="title5">PARA EFECTOS DEL PRESENTE, SE TENDRÁN COMO DEFINICIONES LAS
SIGUIENTES:
</div>
      </td>                      
    </tr>                              
  </table>

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate">USUARIO o GENERADOR DE LA CARGA: Es la persona natural o jurídica que como contratante celebra
el contrato de transporte terrestre de carga directamente con el operador, empresa, o persona natural
debidamente constituida y habilitada. También se entiende como usuario a los generadores de la carga.<br><br>
REMITENTE: Es el destinatario a quien va dirigida la carga cuando acepte el respectivo contrato de
transporte en los términos estipulado en el decreto 410 de 1971. Y es beneficiario.<br><br>
OPERADOR DE TRANSPORTE: Es la empresa o persona natural debidamente constituida y habilitada,
que se obliga para con el usuario o generador de la carga, a transportar vía terrestre por medio de
automotor los objetos debidamente clasificados. Es el transportador.<br><br>
EMISOR RESPONSABLE DEL RÉGIMEN INDEMNIZATORIO: Es el responsable del régimen
indemnizatorio en los términos pactados.<br><br>
FLETE: Es el precio establecido entre el usuario remitente o destinatario de la carga con el operador de
transporte por concepto del contrato de transporte terrestre automotor de carga.<br><br>
SOBRECOSTOS: Valor adicional al flete, equivalente a un porcentaje del valor declarado, que tiene como
fin garantizar el amparo de daños, perjuicios y en general cualquier daño que derive en responsabilidad
civil contractual, y será hasta un máximo de noventa por ciento (90%) del valor declarado. Este
sobrecosto es generado por el formulario del régimen indemnizatorio, y será la suma que el cliente y
operador cancelen por la aceptación de los presentes términos y condiciones.<br><br>
VALOR DECLARADO: El valor que deberá declarar el remitente y que estará compuesto por el costo de
la mercancía en el lugar de su entrega al operador, incluye: embalajes, impuestos, fletes y seguros a
que hubiere lugar.<br><br>
VALOR TOTAL DEL SERVICIO POR EL OPERADOR: Es la suma equivalente al valor del flete,
cubrimiento de mercancías por el régimen indemnizatorio y otros conceptos que se requiera cobrar para
la ejecución del contrato, el cual tiene como resultado la tarifa total que el usuario debe cancelar.<br><br>
CARTA DE PORTE Y CONOCIMIENTO DE EMBARQUE: Documento título valor donde se dejará
consignada la siguiente información, según lo establece el artículo 768 del Código de Comercio:
</div>
      </td>                      
    </tr>                              
  </table> 

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate2">1. La mención de ser “carta de porte” o “conocimiento de embarque”.<br> 
2. El nombre y el domicilio de transportador.<br> 
3. El nombre y el domicilio del remitente.
</div>
      </td>                      
    </tr>                              
  </table>   
<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">  

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate2">4. El nombre y el domicilio de la persona a quien o a cuya orden se expide, o la mención <br>&nbsp;&nbsp;&nbsp; de ser al portador.<br> 
5. El número de orden que corresponda al título.<br> 
6. La descripción pormenorizada de las mercancías objeto del transporte y la estimación <br>&nbsp;&nbsp;&nbsp; de su valor.<br>
7. La indicación de los fletes y demás gastos del transporte, de las tarifas aplicables, y la <br>&nbsp;&nbsp;&nbsp; de haber sido o no pagados los fletes.<br> 
8. La mención de los lugares de salida y de destino.<br> 
9. La indicación del medio de transporte.<br>
10. Si el transporte fuere por vehículo determinado, los datos necesarios para su <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; identificación.

</div>
      </td>                
    </tr>                              
  </table>  

  </table> 
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 25px !important;">
    <tr>
      <td class="td1">
        <div class="title5">TRÁMITE DE LA INDEMNIZACIÓN</div>
      </td>                      
    </tr>                              
  </table>  

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate3"><strong>Medios de presentación:</strong><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. Físico. Dirigido al domicilio del operador en el municipio de Bello en la Carrera 59# 27B <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 510 Bello Antioquia.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; i. Virtual. Vía correo electrónico a la dirección: info@cargoseguros.com<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. A través del WhatsApp: 3105348223; o por medio de nuestra página web:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.cargoseguros.com<br><br>
2. <strong>Contenido del radicado:</strong> Para atender de manera ágil e idónea su petición, deberá consignar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;en la misma como mínimo la siguiente información:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Nombre e identificación como usuario.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Número de carta de porte o conocimiento de embarque.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Hechos en los que se fundamenta la solicitud.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Dirección física actual del peticionante.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e. Copia del documento de identificación ampliado al 150%.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f. Copia de la carta de porte o conocimiento de embarque.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g. Correo electrónico de comunicación.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h. Teléfono fijo de comunicación.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i. Teléfonos móviles de comunicación.<br><br>
3. <strong>Investigación de los hechos:</strong> En todo caso, luego de que se reciba la solicitud de <br>&nbsp;&nbsp;&nbsp; indemnización, el emisor comenzará la investigación de los hechos, para determinar si encaja <br>&nbsp;&nbsp;&nbsp; o no en los supuestos mencionados en los numerales anteriores. Si se encuentra que el hecho <br>&nbsp;&nbsp;&nbsp; generador de la solicitud es responsable de la indemnización, el emisor responderá en un 90% <br>&nbsp;&nbsp;&nbsp; del valor declarado por la
mercancía. Si por el contrario se encuentra que no encaja el hecho <br>&nbsp;&nbsp;&nbsp; en los supuestos antes mencionados, el responsable del 90% de la indemnización es el <br>&nbsp;&nbsp;&nbsp; operador / transportador del valor declarado por la mercancía.<br><br>
4. <strong>Decisión:</strong> Una vez se radique la solicitud de indemnización, petición o queja, el emisor dará <br>&nbsp;&nbsp;&nbsp; respuesta conforme a la normatividad vigente en materia de derechos de petición, en 15 días <br>&nbsp;&nbsp;&nbsp; hábiles.<br><br>
5. <strong>Notificación:</strong> El emisor remitirá la respuesta al correo electrónico o dirección física aportada <br>&nbsp;&nbsp;&nbsp; por el usuario.<br><br>
6. <strong>Pago de la indemnización:</strong> Si la respuesta a la solicitud de indemnización es positiva, el <br>&nbsp;&nbsp;&nbsp; usuario beneficiario deberá informar el medio de pago que desea como vehículo para la <br>&nbsp;&nbsp;&nbsp; transacción, puede ser en efectivo o transferencia bancaria, anexando por cualquiera de los <br>&nbsp;&nbsp;&nbsp; medios previstos en el numeral primero de la presente cláusula el documento o escrito donde <br>&nbsp;&nbsp;&nbsp; manifieste la dirección del domicilio al cual se debe hacer llegar el pago, o el número de la <br>&nbsp;&nbsp;&nbsp; cuenta bancaria a la cual desea se realice la transacción.<br><br>
7. <strong>En caso de negación de la Indemnización:</strong> El Contrato se regirá por las leyes de la <br>&nbsp;&nbsp;&nbsp; República de Colombia. Toda controversia surgida del Contrato será resuelta por las vías del <br>&nbsp;&nbsp;&nbsp; diálogo y la negociación, si ello no fuere efectivo, se acuerda, obligatoriamente:
</div>
      </td>                
    </tr>                              
  </table> 
<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">   
  
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate2">* Las partes se reunirán con sus abogados y tratarán de llegar a un acuerdo.<br>
* Si aún así no se llega a un acuerdo decidirán si esta se dirimirá por la Cámara de <br>&nbsp;&nbsp;&nbsp;Comercio de Medellín quienes fallarán en derecho y previo nombramiento de un árbitro <br>&nbsp;&nbsp;&nbsp;y surtiéndose todas las garantías procesales legales, los gastos correrán por cuenta del <br>&nbsp;&nbsp;&nbsp;emisor y responsable de la indemnización y el portador de la carta de porte.

</div>
      </td>                      
    </tr>                              
  </table>  

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 25px !important;">
    <tr>
      <td class="td1">
        <div class="title5">Tratamiento de Datos y Direcciones de Notificación</div>
      </td>                      
    </tr>                              
  </table>  
        
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate2">El operador de carga autoriza la consulta de los datos personales y reportes en centrales de riesgo, y su
comportamiento financiero de conformidad con la normatividad vigente y concordantes, así como la aceptación
de grabar llamadas, mensajes de texto, guarda de correos electrónicos y cualquier medio informativo con el fin
de realizar seguimiento a la calidad del servicio.<br><br>
El beneficiario confirma que su lugar de domicilio registrado en la carta de porte o conocimiento de embarque
sean las direcciones tanto físicas como electrónicas de notificación para cualquier asunto comercial o judicial.


</div>
      </td>                      
    </tr>                              
  </table>  

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 25px !important;">
    <tr>
      <td class="td1">
        <div class="title6">FIRMA,</div>
      </td>                      
    </tr>                              
  </table>  

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 30px !important;">
    <tr>
      <td class="td1">
        <div class="title6"><strong>EMISOR</strong></div>
      </td>                      
    </tr>                              
  </table>    
  <img src="../public/img/firma.jpg" style="top:-1vw; margin-left: 100px; margin-top: 50px;" width="400px" height="200px"> 
</body>
</html>