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
        <div class="texttitle">CIUDAD/DIRECCI??N DE SALIDA:</div>
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
        <div class="texttitle">CIUDAD/DIRECCI??N DE DESTINO:</div>
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
        <div class="texttitle">IDENTIFICACI??N:</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;">
        <div class="textnormal">{{ $back->user_identity}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle2">DIRECCI??N DEPARTAMENTO Y CIUDAD</div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $back->exit_departament }}. {{ $back->exit_municipality}}. {{ $back->exit_address}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle">TEL??FONO 1 CELULAR DEL USUARIO:</div>
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
        <div class="texttitle">IDENTIFICACI??N:</div>
      </td>      
      <td class="tdleft" style="word-wrap: break-word;">
        <div class="textnormal">{{$business->identification}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle3">DIRECCI??N DEPARTAMENTO Y CIUDAD: </div>
      </td>      
      <td class="tdleft">
        <div class="textnormal">{{ $business->department}}. {{ $business->municipality}}. {{ $business->address}}</div>
      </td>            
    </tr> 
    <tr>
      <td class="tdleft">
        <div class="texttitle3">TEL??FONO 1 CELULAR DEL OPERADOR:</div>
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
        <div class="texttitle">PLACA DEL VEH??CULO:</div>
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
        <div class="title">DESCRIPCI??N DE LA MERCANC??A:</div>
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
        <div class="title">??EL REMITENTE SE ENCARGAR?? DE EMBALAR LA MERCANC??A? </div>
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
        <div class="title">VALOR R??GIMEN INDEMNIZATORIO: </div>
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
        <div class="title">DESCRIPCI??N DE LA MERCANC??A:</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal">Se pacta el siguiente r??gimen indemnizatorio entre el Operador de Transporte, beneficiario y el Emisor, este ??ltimo,
responsable del r??gimen indemnizatorio. Mientras el hecho encaje dentro de los supuestos de la cl??usula de
responsabilidad, el obligado a pagar la indemnizaci??n ser?? el emisor. En caso de situaciones diferentes a las aqu??
planteadas la responsabilidad recaer?? sobre el operador/transportador mientras sea comprobada su vinculaci??n en
el hecho. Entregada la carga al destinatario o a la persona designada para recibirla, en el sitio convenido o como
se pact?? en el contrato de transporte, esta responsabilidad cesar??.
</div>
      </td>                
    </tr>                              
  </table>

  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title">DESCRIPCI??N DE LA MERCANC??A:</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal">* Destrucci??n total de la carga por incendio.<br>
* Destrucci??n total de la carga por volcamiento.<br>
* Destrucci??n total de la carga por terrorismo.<br>
* Se cubre la carga ??nica y exclusivamente por p??rdida total.<br>
* Y se cubre ??nica y exclusivamente el trayecto de carga desde su inicio y carga hasta su
&nbsp;&nbsp;&nbsp; entrega y descarga, ??nica y exclusivamente el trayecto acordado.<br>
</div>
      </td>                
    </tr>                              
  </table>  

<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">
  <table class="table4" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 20px !important;">
    <tr>
      <td class="tdleft">
        <div class="title">El R??gimen Indemnizatorio no cubre:
</div>
      </td>                 
    </tr>   
    <tr>
      <td class="tdleft" style="word-wrap: break-word;"abbr="">
        <div class="textnormal2">* Cualquier tipo de responsabilidad civil, incluyendo la responsabilidad civil extracontractual y el lucro cesante.<br>
* El mal embalaje de la carga.<br>
* No cubre los siguientes art??culos:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Az??car.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Licores, cervezas y gaseosas.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cigarrillos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Telefon??a celular, tarjetas prepago y accesorios.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Qu??micos Controlados.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Algod??n en pacas.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Harina de pescado.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Productos Biom??dicos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Efectos personales y de menaje dom??stico en exceso de $10???000.000.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Semovientes, animales en general.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Monedas y billetes. (Dinero en efectivo).<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Metales y piedras preciosas, objetos y joyas de metales o de piedras preciosas, objetos art??sticos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Billetes de Loter??a, bonos oficiales, c??dulas hipotecarias, acciones, t??tulos valores, estampillas de<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; timbre y correo sin sellar, cheques de viajero y, en general, toda la clase de documentos<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; representativos de valores.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cartas geogr??ficas, mapas o planos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Perecederos que no cumplan con la cl??usula de bienes transportados en condiciones especiales de<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; refrigeraci??n, congelaci??n o calefacci??n.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Juegos de v??deo, software de v??deos.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Pieles.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Bienes explosivos e inflamables.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cualquier tipo de vidrios.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Telas, textiles, confecciones e hilazas.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Hilos, hilazas y fibras.<br>
* No se cubren p??rdidas parciales.<br>
* Desaparici??n misteriosa de las mercanc??as causada por la desaparici??n inexplicable del medio de transporte,<br>&nbsp;&nbsp;&nbsp; siempre que se compruebe que el conductor / operador no es responsable del hecho.<br>
* En ning??n caso este r??gimen indemnizatorio cubrir?? los da??os y/o p??rdidas como consecuencia de ataques<br>
&nbsp;&nbsp;&nbsp; qu??micos, biol??gicos, bioqu??micos, uso de armas electromagn??ticas, uso de computadores, sistemas,<br> &nbsp;&nbsp;&nbsp; programas, virus de computaci??n, y procesos con cualquier sistema electr??nico como medio para causar<br> &nbsp;&nbsp;&nbsp; da??o.<br>
* Se cubre solamente y exclusivamente el transporte de la mercanc??a en el veh??culo transportador, en ning??n<br>
&nbsp;&nbsp;&nbsp; caso cualquier tipo de permanencias y almacenajes en bodegas. El presente r??gimen indemnizatorio no cubre<br> &nbsp;&nbsp;&nbsp; da??os y p??rdidas si el veh??culo en el cual se est?? transportando la mercanc??a al momento del incidente o <br> &nbsp;&nbsp;&nbsp; accidente, fuere diferente al establecido en la Carta de Porte desde el inicio de la relaci??n contractual.<br>
* Combusti??n espont??nea, siempre y cuando no sean originados por accidente o impericia del conductor.<br>
* Accidente de veh??culo que transporta las mercanc??as, cuando incumpla las normas de tr??nsito, movilice
<br> &nbsp;&nbsp;&nbsp; sobrepeso, el conductor conduzca en estado de embriaguez, o bajo sustancias psicoactivas, conduzca en <br> &nbsp;&nbsp;&nbsp; contrav??a o sobrepase los l??mites de velocidad, establecidos por la ley. El presente r??gimen indemnizatorio <br> &nbsp;&nbsp;&nbsp; no cubre por ning??n concepto si la combusti??n no es espont??nea, es decir, en ning??n momento se cubren <br> &nbsp;&nbsp;&nbsp; accidentes originados por la impericia, imprudencia o negligencia del conductor.<br>
* No cubre expresamente cuando el transportador incurra:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o En accidente de veh??culo que transporta las mercanc??as, cuando incumpla las normas de tr??nsito, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; movilice sobrepeso, el conductor <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; conduzca en estado de embriaguez, o bajo sustancias psicoactivas,
conduzca en contrav??a o sobrepase <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; los l??mites de velocidad, establecidos por la ley.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Despachos realizados en empresas transportadoras terrestres de carga que no est??n legalmente <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; conformadas, autorizadas y habilitadas por las respectivas autoridades para realizar este tipo de <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; operaci??n.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Se excluyen de cobertura los despachos de mercanc??as en veh??culos transportadores terrestres que <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sobrepasen las capacidades establecidas por las autoridades competentes.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Movilizaci??n en veh??culos con fallas mec??nicas, desgaste o sin los requisitos t??cnico mec??nicos <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; exigidos por la normatividad vehicular.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Da??o mec??nico y/o el??ctrico s??bito e imprevisto del equipo de refrigeraci??n o de congelaci??n del <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; veh??culo transportador que moviliza las mercanc??as.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; o Cuando la mercanc??a requiera refrigeraci??n y el veh??culo de transporte no tiene el adecuado sistemade <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; refrigeraci??n para su transporte.
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
por el operador de transportes, ??nica y exclusivamente. Este r??gimen indemnizatorio no cubre la responsabilidad Civil
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
        <div class="textnormal3">* Acreditar el pago del flete y los sobrecostos, sin el pago del valor del r??gimen indemnizatorio el presente <br>&nbsp;&nbsp;&nbsp;no surte efectos.<br>
* Los veh??culos y conductores deben tener un estudio de seguridad y sin antecedentes de hurto, para este <br>&nbsp;&nbsp;&nbsp;control deber??n ser consultados en la base de datos del Gremio al cual est??n afiliados y/o Dij??n, previo a la <br>&nbsp;&nbsp;&nbsp;prestaci??n
del servicio.<br>
* El operador deber?? realizar monitoreo de la carga transportada, desde origen hasta destino final por <br>&nbsp;&nbsp;&nbsp;cualquier
medio de tecnolog??a de la informaci??n.<br>
* En caso de un evento relacionado con la carga, el operador y el conductor pondr??n a disposici??n del emisor
<br>&nbsp;&nbsp;&nbsp;responsable, toda la informaci??n que ??ste le solicite, con el fin de esclarecer de la manera m??s ??gil y <br>&nbsp;&nbsp;&nbsp;expedita los hechos.<br>
* Debe al momento de aceptar este documento entregar toda la informaci??n solicitada.

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
        <div class="textnormal3">* Se pacta la prohibici??n al generador de la carga de renunciar a cualquier forma de subrogaci??n sobre los <br>&nbsp;&nbsp;&nbsp;responsables de un siniestro.<br>
* Est?? prohibido y excluye la aplicaci??n de la indemnizaci??n todo destino de mercanc??a a pa??ses, <br>&nbsp;&nbsp;&nbsp;organizaciones
o empresas sancionados internacionalmente o nacionalmente por las autoridades <br>&nbsp;&nbsp;&nbsp;competentes o el destino de
la carga sea a organizaciones criminales.<br>
* Las partes Operador de Carga y beneficiario y el Deudor Solidario responsable de este r??gimen podr??n <br>&nbsp;&nbsp;&nbsp;pactar
de mutuo acuerdo, endosar o no este documento a un tercero

</div>
      </td>                
    </tr>                              
  </table> 
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdleft">
        <div class="title2">Monto m??ximo a Indemnizar sobre el valor declarado.</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">* Se indemnizar?? el 90% del monto m??ximo declarado. En todo caso, el total de monto a Indemnizar no <br>&nbsp;&nbsp;&nbsp;podr?? sobrepasar los veinte millones de pesos (10'000.000).<br>
* Es obligatorio establecer el monto m??ximo declarado por el Usuario Generador de la Carga.<br>
* Las partes podr??n acordar la reparaci??n y entrega del objeto transportado al remitente o destinatario, sin <br>&nbsp;&nbsp;&nbsp;que la
misma exceda el valor declarado para la carga, lo que exonera tanto al operador como al responsable <br>&nbsp;&nbsp;&nbsp;solidario,
de responsabilidad por todo concepto, lucro cesante, da??o emergente, pago de indemnizaci??n y/o <br>&nbsp;&nbsp;&nbsp;valor
declarado de la carga y dem??s.


</div>
      </td>                
    </tr>                              
  </table> 
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 60px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title2">DECLARACI??N DE LA CARGA</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="title3">El operador de transporte se asegurar?? que el generador de la carga cumpla:</div>
        <div class="textnormal3">* Es propietario, tenedor o poseedor de la mercanc??a o cosa a transportar, o act??a en representaci??n del due??o <br>&nbsp;&nbsp;&nbsp;o quien tenga derechos de propiedad sobre ellos.<br>
* Que el contenido real de la carga es el indicado en el espacio destinado para ello en la carta de porte.<br>
* Que no est?? prohibido por Ley el transporte y circulaci??n de los objetos puestos a disposici??n para el <br>&nbsp;&nbsp;&nbsp;transporte.<br>
* Que los objetos contenidos en la carga est??n debidamente nacionalizados y cumplen por consecuencia todas
<br>&nbsp;&nbsp;&nbsp;las normas aduaneras y de comercio internacional, bien sea para transportarlas al interior del pa??s o por <br>&nbsp;&nbsp;&nbsp;fuera.<br>
* El operador se reserva el derecho de revisar la carga en los casos autorizados por la Ley, sin limitaci??n <br>&nbsp;&nbsp;&nbsp;alguna. Sin embargo, aclara que no es su obligaci??n.
</div>
      </td>                
    </tr>                              
  </table>  
<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">  
  <table class="table3" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 50px !important;">
    <tr>
      <td class="tdcenter">
        <div class="title2">REVISI??N DE LA CARGA:</div>
      </td>                 
    </tr>   
    <tr>   
      <td class="tdjustify" style="word-wrap: break-word;"abbr="">
        <div class="textnormal3">El operador de Transporte est?? en la obligaci??n de revisar la carga. Excepcionalmente
CARGOSEGUROS se encargar?? de realizar revisi??n personal de la carga, con fines de calidad y
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
        <div class="textnormal3">Si no se indicare la fecha de recibo de las cosas por el transportador, se presumir?? que este las
recibi?? en la fecha de emisi??n de este documento.

</div>
      </td>                
    </tr>                              
  </table> 

  <table class="table5" cellspacing="0" style="table-layout: auto; height: auto; margin-top: 35px !important;">
    <tr>
      <td class="td1">
        <div class="title4">Instrucciones y definiciones de la carta de porte y r??gimen indemnizatorio</div>
      </td>                      
    </tr>                              
  </table> 
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 25px !important;">
    <tr>
      <td class="td1">
        <div class="title5">PARA EFECTOS DEL PRESENTE, SE TENDR??N COMO DEFINICIONES LAS
SIGUIENTES:
</div>
      </td>                      
    </tr>                              
  </table>

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate">USUARIO o GENERADOR DE LA CARGA: Es la persona natural o jur??dica que como contratante celebra
el contrato de transporte terrestre de carga directamente con el operador, empresa, o persona natural
debidamente constituida y habilitada. Tambi??n se entiende como usuario a los generadores de la carga.<br><br>
REMITENTE: Es el destinatario a quien va dirigida la carga cuando acepte el respectivo contrato de
transporte en los t??rminos estipulado en el decreto 410 de 1971. Y es beneficiario.<br><br>
OPERADOR DE TRANSPORTE: Es la empresa o persona natural debidamente constituida y habilitada,
que se obliga para con el usuario o generador de la carga, a transportar v??a terrestre por medio de
automotor los objetos debidamente clasificados. Es el transportador.<br><br>
EMISOR RESPONSABLE DEL R??GIMEN INDEMNIZATORIO: Es el responsable del r??gimen
indemnizatorio en los t??rminos pactados.<br><br>
FLETE: Es el precio establecido entre el usuario remitente o destinatario de la carga con el operador de
transporte por concepto del contrato de transporte terrestre automotor de carga.<br><br>
SOBRECOSTOS: Valor adicional al flete, equivalente a un porcentaje del valor declarado, que tiene como
fin garantizar el amparo de da??os, perjuicios y en general cualquier da??o que derive en responsabilidad
civil contractual, y ser?? hasta un m??ximo de noventa por ciento (90%) del valor declarado. Este
sobrecosto es generado por el formulario del r??gimen indemnizatorio, y ser?? la suma que el cliente y
operador cancelen por la aceptaci??n de los presentes t??rminos y condiciones.<br><br>
VALOR DECLARADO: El valor que deber?? declarar el remitente y que estar?? compuesto por el costo de
la mercanc??a en el lugar de su entrega al operador, incluye: embalajes, impuestos, fletes y seguros a
que hubiere lugar.<br><br>
VALOR TOTAL DEL SERVICIO POR EL OPERADOR: Es la suma equivalente al valor del flete,
cubrimiento de mercanc??as por el r??gimen indemnizatorio y otros conceptos que se requiera cobrar para
la ejecuci??n del contrato, el cual tiene como resultado la tarifa total que el usuario debe cancelar.<br><br>
CARTA DE PORTE Y CONOCIMIENTO DE EMBARQUE: Documento t??tulo valor donde se dejar??
consignada la siguiente informaci??n, seg??n lo establece el art??culo 768 del C??digo de Comercio:
</div>
      </td>                      
    </tr>                              
  </table> 

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate2">1. La menci??n de ser ???carta de porte??? o ???conocimiento de embarque???.<br> 
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
        <div class="textultimate2">4. El nombre y el domicilio de la persona a quien o a cuya orden se expide, o la menci??n <br>&nbsp;&nbsp;&nbsp; de ser al portador.<br> 
5. El n??mero de orden que corresponda al t??tulo.<br> 
6. La descripci??n pormenorizada de las mercanc??as objeto del transporte y la estimaci??n <br>&nbsp;&nbsp;&nbsp; de su valor.<br>
7. La indicaci??n de los fletes y dem??s gastos del transporte, de las tarifas aplicables, y la <br>&nbsp;&nbsp;&nbsp; de haber sido o no pagados los fletes.<br> 
8. La menci??n de los lugares de salida y de destino.<br> 
9. La indicaci??n del medio de transporte.<br>
10. Si el transporte fuere por veh??culo determinado, los datos necesarios para su <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; identificaci??n.

</div>
      </td>                
    </tr>                              
  </table>  

  </table> 
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 25px !important;">
    <tr>
      <td class="td1">
        <div class="title5">TR??MITE DE LA INDEMNIZACI??N</div>
      </td>                      
    </tr>                              
  </table>  

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate3"><strong>Medios de presentaci??n:</strong><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. F??sico. Dirigido al domicilio del operador en el municipio de Bello en la Carrera 59# 27B <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 510 Bello Antioquia.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; i. Virtual. V??a correo electr??nico a la direcci??n: info@cargoseguros.com<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. A trav??s del WhatsApp: 3105348223; o por medio de nuestra p??gina web:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.cargoseguros.com<br><br>
2. <strong>Contenido del radicado:</strong> Para atender de manera ??gil e id??nea su petici??n, deber?? consignar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;en la misma como m??nimo la siguiente informaci??n:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Nombre e identificaci??n como usuario.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. N??mero de carta de porte o conocimiento de embarque.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Hechos en los que se fundamenta la solicitud.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Direcci??n f??sica actual del peticionante.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e. Copia del documento de identificaci??n ampliado al 150%.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f. Copia de la carta de porte o conocimiento de embarque.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g. Correo electr??nico de comunicaci??n.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h. Tel??fono fijo de comunicaci??n.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i. Tel??fonos m??viles de comunicaci??n.<br><br>
3. <strong>Investigaci??n de los hechos:</strong> En todo caso, luego de que se reciba la solicitud de <br>&nbsp;&nbsp;&nbsp; indemnizaci??n, el emisor comenzar?? la investigaci??n de los hechos, para determinar si encaja <br>&nbsp;&nbsp;&nbsp; o no en los supuestos mencionados en los numerales anteriores. Si se encuentra que el hecho <br>&nbsp;&nbsp;&nbsp; generador de la solicitud es responsable de la indemnizaci??n, el emisor responder?? en un 90% <br>&nbsp;&nbsp;&nbsp; del valor declarado por la
mercanc??a. Si por el contrario se encuentra que no encaja el hecho <br>&nbsp;&nbsp;&nbsp; en los supuestos antes mencionados, el responsable del 90% de la indemnizaci??n es el <br>&nbsp;&nbsp;&nbsp; operador / transportador del valor declarado por la mercanc??a.<br><br>
4. <strong>Decisi??n:</strong> Una vez se radique la solicitud de indemnizaci??n, petici??n o queja, el emisor dar?? <br>&nbsp;&nbsp;&nbsp; respuesta conforme a la normatividad vigente en materia de derechos de petici??n, en 15 d??as <br>&nbsp;&nbsp;&nbsp; h??biles.<br><br>
5. <strong>Notificaci??n:</strong> El emisor remitir?? la respuesta al correo electr??nico o direcci??n f??sica aportada <br>&nbsp;&nbsp;&nbsp; por el usuario.<br><br>
6. <strong>Pago de la indemnizaci??n:</strong> Si la respuesta a la solicitud de indemnizaci??n es positiva, el <br>&nbsp;&nbsp;&nbsp; usuario beneficiario deber?? informar el medio de pago que desea como veh??culo para la <br>&nbsp;&nbsp;&nbsp; transacci??n, puede ser en efectivo o transferencia bancaria, anexando por cualquiera de los <br>&nbsp;&nbsp;&nbsp; medios previstos en el numeral primero de la presente cl??usula el documento o escrito donde <br>&nbsp;&nbsp;&nbsp; manifieste la direcci??n del domicilio al cual se debe hacer llegar el pago, o el n??mero de la <br>&nbsp;&nbsp;&nbsp; cuenta bancaria a la cual desea se realice la transacci??n.<br><br>
7. <strong>En caso de negaci??n de la Indemnizaci??n:</strong> El Contrato se regir?? por las leyes de la <br>&nbsp;&nbsp;&nbsp; Rep??blica de Colombia. Toda controversia surgida del Contrato ser?? resuelta por las v??as del <br>&nbsp;&nbsp;&nbsp; di??logo y la negociaci??n, si ello no fuere efectivo, se acuerda, obligatoriamente:
</div>
      </td>                
    </tr>                              
  </table> 
<div class="page_break"></div>
  <img src="../public/img/cargoseguros-carta-de-porte.jpg" style="top:-1vw; margin-left: -20px; margin-top: 0;" width="600px" height="65px">   
  
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate2">* Las partes se reunir??n con sus abogados y tratar??n de llegar a un acuerdo.<br>
* Si a??n as?? no se llega a un acuerdo decidir??n si esta se dirimir?? por la C??mara de <br>&nbsp;&nbsp;&nbsp;Comercio de Medell??n quienes fallar??n en derecho y previo nombramiento de un ??rbitro <br>&nbsp;&nbsp;&nbsp;y surti??ndose todas las garant??as procesales legales, los gastos correr??n por cuenta del <br>&nbsp;&nbsp;&nbsp;emisor y responsable de la indemnizaci??n y el portador de la carta de porte.

</div>
      </td>                      
    </tr>                              
  </table>  

  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 25px !important;">
    <tr>
      <td class="td1">
        <div class="title5">Tratamiento de Datos y Direcciones de Notificaci??n</div>
      </td>                      
    </tr>                              
  </table>  
        
  <table class="table5" cellspacing="0" style="table-layout: fixed; height: auto; margin-top: 10px !important;">
    <tr>
      <td class="td1">
        <div class="textultimate2">El operador de carga autoriza la consulta de los datos personales y reportes en centrales de riesgo, y su
comportamiento financiero de conformidad con la normatividad vigente y concordantes, as?? como la aceptaci??n
de grabar llamadas, mensajes de texto, guarda de correos electr??nicos y cualquier medio informativo con el fin
de realizar seguimiento a la calidad del servicio.<br><br>
El beneficiario confirma que su lugar de domicilio registrado en la carta de porte o conocimiento de embarque
sean las direcciones tanto f??sicas como electr??nicas de notificaci??n para cualquier asunto comercial o judicial.


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