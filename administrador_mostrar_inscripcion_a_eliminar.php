
<?php
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
  
  include_once('acceso.php'); //  Importa o inserta el código contenido en el archivo.php dentro de otro. El _once impide la carga de un mismo archivo más de una vez.
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sitio WEB Colegio Francisco Duarte</title> 
 
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  
 <script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="validacion.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#eliminar_inscripcion_mo').modal('show');
    });
</script>

<SCRIPT LANGUAGE="JavaScript">
nextfield = "campo1";
netscape = "";
ver = navigator.appVersion; len = ver.length;
for(iln = 0; iln < len; iln++) if (ver.charAt(iln) == "(") break;
    netscape = (ver.charAt(iln+1).toUpperCase() != "C");
function keyDown(DnEvents) {
        k = (netscape) ? DnEvents.which : window.event.keyCode;
        if (k == 13) {
        if (nextfield == 'done') {
            alert("Fin de ejemplo");
            return false;
        } else {
            eval('document.form1.' + nextfield + '.focus()');
            return false;
        }
    }
}
document.onkeydown = keyDown;
if (netscape) document.captureEvents(Event.KEYDOWN|Event.KEYUP);
</script>

<script type="text/javascript">








function validar(e) {
    
    
    
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
    if (tecla==44) return true; //Coma ( En este caso para diferenciar los decimales )
    if (tecla==48) return true;
    if (tecla==49) return true;
    if (tecla==50) return true;
    if (tecla==51) return true;
    if (tecla==52) return true;
    if (tecla==53) return true;
    if (tecla==54) return true;
    if (tecla==55) return true;
    if (tecla==56) return true;
    if (tecla==13) return true;

   
    patron = /1/; //ver nota
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 
</script>

<script type="text/javascript">
function validarM(e) {
    
    
    
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==97) return true; //Tecla de retroceso (para poder borrar)
    if (tecla==98) return true; //Coma ( En este caso para diferenciar los decimales )
    if (tecla==99) return true;
    if (tecla==100) return true;
    if (tecla==101) return true;
    if (tecla==102) return true;
    if (tecla==103) return true;
    if (tecla==104) return true;
    if (tecla==105) return true;
    if (tecla==106) return true;
    if (tecla==107) return true;
    if (tecla==108) return true; //Tecla de retroceso (para poder borrar)
    if (tecla==109) return true; //Coma ( En este caso para diferenciar los decimales )
    if (tecla==110) return true;
    if (tecla==111) return true;
    if (tecla==112) return true;
    if (tecla==113) return true;
    if (tecla==114) return true;
    if (tecla==115) return true;
    if (tecla==116) return true;
    if (tecla==117) return true;
    if (tecla==118) return true;
    if (tecla==119) return true;
    if (tecla==120) return true;
    if (tecla==121) return true;
    if (tecla==122) return true;
    if (tecla==32) return true;
    if (tecla==49) return false;
     if (tecla==13) return true;


    patron = /1/; //ver nota
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 




</script>

<script> 
$(document).ready(function(){
    $("#header2").click(function(){
        $("#jumbotron").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#hide").click(function(){
        $("#myModalReporte").modal('show');
        $("#myModal").modal('hide');
    });
});





</script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
  
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#gallery a').lightBox();
});
</script>

</head>
<body>

<div id="templatemo_wrapper">
  
    <?php include_once 'include/header.php' ?>
        
        
        <div id="templatemo_menu">
            <?php include_once 'include/menu.php' ?>
        </div> <!-- end of templatemo_menu -->
        
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
        <h2 align="center"> E.T.C. y S.A Francisco Jose Duarte</h2>
            <p></p>
	</div> <!-- end of templatemo_middle -->
    
    <div id="templatemo_main">
    	<div id="content_title">
        	Administracion del Sistema</div>
        <div id="templatemo_content2">
	  		

<div class="container">

         <div id="header" class="" ></div>

         <div id="header2"  class=""></div>

        <div class=""  id=""> 


     
             <div class="row" id="row">


                 <div id="cont3" class="col-sm-4" ><a href="#Modal_inscripcion" data-toggle="modal"><img class="zoom" src="imagenes/registar.png" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Modulo Inscripcion</h4> </div>





<div id="cont3" class="col-sm-4"><a href="#myModal" data-toggle="modal"><img  class="zoom" src="imagenes/ingresar_notas.jpg" width=70 heigth=70 /></a><p id="parrafo" class="zoom2"><h4>Modulo Evaluacion</h4></p></div>



</div>


             
          </div>     
     </div>
  









 <div class="modal fade" id="myModal" role="dialog"  style="display:close;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h2 class="modal-title" align="center"> Modulo Evaluacion de Notas</h2>

        </div>


        <div class="modal-body">


 <div id="cont_modulo" class="col-sm-4" ><a href="#registrar_evaluacion" data-toggle="modal"><img class="zoom" src="imagenes/registar.png" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Registar </h4> </div>
 <div id="cont_modulo" class="col-sm-4" ><a href="#myModalBuscar_nota" data-toggle="modal"><img class="zoom" src="imagenes/buscar.png" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Consultar</h4> </div>
  <div id="cont_modulo" class="col-sm-4" ><a href="#modificar_evaluacion" data-toggle="modal"><img class="zoom" src="imagenes/ingresar_notas.jpg" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Modificar</h4> </div>
 <div id="cont_modulo" class="col-sm-4" ><a href="#Eliminar_evaluacion" data-toggle="modal"><img class="zoom" src="imagenes/eliminar.png" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Eliminar</h4> </div>

  <div align="center">

   

  </div>

 









<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          

        </div>

      </div>

      
    </div>
  </div>
  


</div>





 <!-- Modal modulo inscripcion-->




<div class="modal fade" id="Modal_inscripcion" role="dialog"  style="display:close;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h2 class="modal-title" align="center"> Modulo Inscripcion de Alumnos</h2>

        </div>


        <div class="modal-body">


 <div id="cont_modulo" class="col-sm-4" ><a href="#registrar_inscripcion" data-toggle="modal"><img class="zoom" src="imagenes/registar.png" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Registar </h4> </div>
 <div id="cont_modulo" class="col-sm-4" ><a href="#buscar_inscripcion" data-toggle="modal"><img class="zoom" src="imagenes/buscar.png" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Consultar</h4> </div>
  <div id="cont_modulo" class="col-sm-4" ><a href="#modificar_inscripcion" data-toggle="modal"><img class="zoom" src="imagenes/ingresar_notas.jpg" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Modificar</h4> </div>
 <div id="cont_modulo" class="col-sm-4" ><a href="#Eliminar_inscripcion" data-toggle="modal"><img class="zoom" src="imagenes/eliminar.png" width=70 heigth=70 /> </a><p id="parrafo" class="zoom2"><h4> Eliminar</h4> </div>

  <div align="center">

   

  </div>

 









<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          

        </div>

      </div>

      
    </div>
  </div>
  

















 
      <!-- Modal Imprimir reporte-->






 <div class="modal fade" id="eliminar_inscripcion_mo" role="dialog"  style="display:open;">

    <div  id="modal-dialog" class="modal-dialog">






   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h3 align="center" aline class="modal-title"><b>PLANILLA DE INSCRIPCION</b></h3>
          <h5 align="center">PERIODO ESCOLAR 2016-2017</h5>

        </div>


        <div id="body"class="modal-body">






 <div id="borde">
  <!--<form action = "plantilla_php.php" method= "post" class ="form-inline" role="form"> -->

<?php 
include("conexion/conexion2.php");
$id_c=$_POST['id_c'];
if(empty($id_c))
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           window.location='administrador.php'
        </script>
       ";
     exit();
}
$conexion=conectar();
$sql="select * from alumnos join representante join padres on alumnos.id_c = representante.id_c and alumnos.id_c = padres.id_c where alumnos.id_c='$id_c'";





$registro=mysql_query($sql,$conexion);
if(!$registro)
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           alert('ERROR EN LA CLAVE')
       window.location='administrador.php'
     </script>
       ";
}
 else
 {
 $datos=mysql_fetch_object($registro);
  
    if(empty($datos))
  {
   echo"<script language='JavaScript' type='text/JavaScript'>
           alert('LA CLAVE NO EXISTE')
       window.location='administrador.php'
     </script>
       ";
     exit();
  }
 }
?>

<form action= "procesos/procesar_inscripcion_a_modificar.php" method="post"  class="form-inline" name="form1" onSubmit="return checa(this);" >


    <hr>

   <h5><b> A.- Datos Personales </b></h5>
<hr>




    <div  id="cedula" class="form-group">

      <label >Cedula:</label>
<br>
    <input type="text" name='id_c'  value='<?php echo $datos->id_c?>' class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="8" placeholder="Cedula"    >
    </div>




    <div  id="nombre" class="form-group">


      <label >Nombres:</label>

<br>




      <input type="text"  name='nb' value='<?php echo $datos->nb?>' style="text-transform:capitalize;" onblur="javascript:this.value=this.value.capitalize();" onKeyPress="return validarM(event)" onFocus="nextfield ='ap';" class="form-control"  placeholder="Nombres">



    </div>


<div id="input_apellido"   class="form-group">


      <label >Apellidos:</label>
<br>

      <input type="text" name="ap" value='<?php echo $datos->ap?>' onFocus="nextfield ='fc_n'"  class="form-control"  placeholder="Apellidos">
    </div>

      <br>
      <br>




<div   class="form-group">


      <label id="fc_n" >Fecha de Nacimiento:</label>
<br>

      <input type="date"   name='fc_n' value='<?php echo $datos->fc_n?>' value="fc_n" class="form-control" id="fc_n" onFocus="nextfield ='eda'" placeholder="Fecha">
    </div>




   <div  class="form-group">


      <label id="eda" >Edad</label>
<br>

      <input type="number" name='eda' value='<?php echo $datos->eda?>' class="form-control" onFocus="nextfield ='gene'" placeholder="Edad">
    </div>
    
   







<div id="input_genero" class="form-group">


      <label >Genero:</label>

<br>
      <select name='gene' value='<?php echo $datos->gene?>' onFocus="nextfield ='lu_n'" class="form-control" >
                      <option value="Hombre">Hombre</option> 
                      <option value="Mujer">Mujer</option> 
                     
</select>




    </div>

    





<br>
<br>

<div class="form-group">


      <label id="lu_n" for="email">Lugar de Nacimiento:</label>
<br>

      <select class="form-control"  name='lu_n' value='<?php echo $datos->lu_n?>'  onFocus="nextfield ='ent_f'">
                      <option value="AF">Afganistán</option> 
                      <option value="AL">Albania</option> 
                      <option value="DE">Alemania</option> 
                      <option value="AD">Andorra</option> 
                      <option value="AO">Angola</option> 
                      <option value="AI">Anguilla</option> 
                      <option value="AQ">Antártida</option> 
                      <option value="AG">Antigua y Barbuda</option> 
                      <option value="AN">Antillas Holandesas</option> 
                      <option value="SA">Arabia Saudí</option> 
                      <option value="DZ">Argelia</option> 
                      <option value="AR">Argentina</option> 
                      <option value="AM">Armenia</option> 
                      <option value="AW">Aruba</option> 
                      <option value="AU">Australia</option> 
                      <option value="AT">Austria</option>  
                      <option value="AZ">Azerbaiyán</option>  
                      <option value="BS">Bahamas</option>  
                      <option value="BH">Bahrein</option>  
                      <option value="BD">Bangladesh</option>  
                      <option value="BB">Barbados</option>  
                      <option value="BE">Bélgica</option>  
                      <option value="BZ">Belice</option>  
                      <option value="BJ">Benin</option>  
                      <option value="BM">Bermudas</option>  
                      <option value="BY">Bielorrusia</option>  
                      <option value="MM">Birmania</option>  
                      <option value="BO">Bolivia</option>  
                      <option value="BA">Bosnia y Herzegovina</option>  
                      <option value="BW">Botswana</option>  
                      <option value="BR">Brasil</option>  
                      <option value="BN">Brunei</option>  
                      <option value="BG">Bulgaria</option>  
                      <option value="BF">Burkina Faso</option>  
                      <option value="BI">Burundi</option>  
                      <option value="BT">Bután</option>  
                      <option value="CV">Cabo Verde</option>  
                      <option value="KH">Camboya</option>  
                      <option value="CM">Camerún</option>  
                      <option value="CA">Canadá</option>  
                      <option value="TD">Chad</option>  
                      <option value="CL">Chile</option>  
                      <option value="CN">China</option>  
                      <option value="CY">Chipre</option>  
                      <option value="VA">Ciudad del Vaticano (Santa Sede)</option>  
                      <option value="CO">Colombia</option>  
                      <option value="KM">Comores</option>  
                      <option value="CG">Congo</option>  
                      <option value="CD">Congo, República Democrática del</option>  
                      <option value="KR">Corea</option>  
                      <option value="KP">Corea del Norte</option>  
                      <option value="CI">Costa de Marfíl</option>  
                      <option value="CR">Costa Rica</option>  
                      <option value="HR">Croacia (Hrvatska)</option>  
                      <option value="CU">Cuba</option>  
                      <option value="DK">Dinamarca</option>  
                      <option value="DJ">Djibouti</option>  
                      <option value="DM">Dominica</option>  
                      <option value="EC">Ecuador</option>  
                      <option value="EG">Egipto</option>  
                      <option value="SV">El Salvador</option>  
                      <option value="AE">Emiratos Árabes Unidos</option>  
                      <option value="ER">Eritrea</option>  
                      <option value="SI">Eslovenia</option>  
                      <option value="ES" >España</option>  
                      <option value="US">Estados Unidos</option>  
                      <option value="EE">Estonia</option>  
                      <option value="ET">Etiopía</option>  
                      <option value="FJ">Fiji</option>  
                      <option value="PH">Filipinas</option>  
                      <option value="FI">Finlandia</option>  
                      <option value="FR">Francia</option>  
                      <option value="GA">Gabón</option>  
                      <option value="GM">Gambia</option>  
                      <option value="GE">Georgia</option>  
                      <option value="GH">Ghana</option>  
                      <option value="GI">Gibraltar</option>  
                      <option value="GD">Granada</option>  
                      <option value="GR">Grecia</option>  
                      <option value="GL">Groenlandia</option>  
                      <option value="GP">Guadalupe</option>  
                      <option value="GU">Guam</option>  
                      <option value="GT">Guatemala</option>  
                      <option value="GY">Guayana</option>  
                      <option value="GF">Guayana Francesa</option>  
                      <option value="GN">Guinea</option>  
                      <option value="GQ">Guinea Ecuatorial</option>  
                      <option value="GW">Guinea-Bissau</option>  
                      <option value="HT">Haití</option>  
                      <option value="HN">Honduras</option>  
                      <option value="HU">Hungría</option>  
                      <option value="IN">India</option>  
                      <option value="ID">Indonesia</option>  
                      <option value="IQ">Irak</option>  
                      <option value="IR">Irán</option>  
                      <option value="IE">Irlanda</option>  
                      <option value="BV">Isla Bouvet</option>  
                      <option value="CX">Isla de Christmas</option>  
                      <option value="IS">Islandia</option>  
                      <option value="KY">Islas Caimán</option>  
                      <option value="CK">Islas Cook</option>  
                      <option value="CC">Islas de Cocos o Keeling</option>  
                      <option value="FO">Islas Faroe</option>  
                      <option value="HM">Islas Heard y McDonald</option>  
                      <option value="FK">Islas Malvinas</option>  
                      <option value="MP">Islas Marianas del Norte</option>  
                      <option value="MH">Islas Marshall</option>  
                      <option value="UM">Islas menores de Estados Unidos</option>  
                      <option value="PW">Islas Palau</option>  
                      <option value="SB">Islas Salomón</option>  
                      <option value="SJ">Islas Svalbard y Jan Mayen</option>  
                      <option value="TK">Islas Tokelau</option>  
                      <option value="TC">Islas Turks y Caicos</option>  
                      <option value="VI">Islas Vírgenes (EE.UU.)</option>  
                      <option value="VG">Islas Vírgenes (Reino Unido)</option>  
                      <option value="WF">Islas Wallis y Futuna</option>  
                      <option value="IL">Israel</option>  
                      <option value="IT">Italia</option>  
                      <option value="JM">Jamaica</option>  
                      <option value="JP">Japón</option>  
                      <option value="JO">Jordania</option>  
                      <option value="KZ">Kazajistán</option>  
                      <option value="KE">Kenia</option>  
                      <option value="KG">Kirguizistán</option>  
                      <option value="KI">Kiribati</option>  
                      <option value="KW">Kuwait</option>  
                      <option value="LA">Laos</option>  
                      <option value="LS">Lesotho</option>  
                      <option value="LV">Letonia</option>  
                      <option value="LB">Líbano</option>  
                      <option value="LR">Liberia</option>  
                      <option value="LY">Libia</option>  
                      <option value="LI">Liechtenstein</option>  
                      <option value="LT">Lituania</option>  
                      <option value="LU">Luxemburgo</option>  
                      <option value="MK">Macedonia, Ex-República Yugoslava de</option>  
                      <option value="MG">Madagascar</option>  
                      <option value="MY">Malasia</option>  
                      <option value="MW">Malawi</option>  
                      <option value="MV">Maldivas</option>  
                      <option value="ML">Malí</option>  
                      <option value="MT">Malta</option>  
                      <option value="MA">Marruecos</option>  
                      <option value="MQ">Martinica</option>  
                      <option value="MU">Mauricio</option>  
                      <option value="MR">Mauritania</option>  
                      <option value="YT">Mayotte</option>  
                      <option value="MX">México</option>  
                      <option value="FM">Micronesia</option>  
                      <option value="MD">Moldavia</option>  
                      <option value="MC">Mónaco</option>  
                      <option value="MN">Mongolia</option>  
                      <option value="MS">Montserrat</option>  
                      <option value="MZ">Mozambique</option>  
                      <option value="NA">Namibia</option>  
                      <option value="NR">Nauru</option>  
                      <option value="NP">Nepal</option>  
                      <option value="NI">Nicaragua</option>  
                      <option value="NE">Níger</option>  
                      <option value="NG">Nigeria</option>  
                      <option value="NU">Niue</option>  
                      <option value="NF">Norfolk</option>  
                      <option value="NO">Noruega</option>  
                      <option value="NC">Nueva Caledonia</option>  
                      <option value="NZ">Nueva Zelanda</option>  
                      <option value="OM">Omán</option>  
                      <option value="NL">Países Bajos</option>  
                      <option value="PA">Panamá</option>  
                      <option value="PG">Papúa Nueva Guinea</option>  
                      <option value="PK">Paquistán</option>  
                      <option value="PY">Paraguay</option>  
                      <option value="PE">Perú</option>  
                      <option value="PN">Pitcairn</option>  
                      <option value="PF">Polinesia Francesa</option>  
                      <option value="PL">Polonia</option>  
                      <option value="PT">Portugal</option>  
                      <option value="PR">Puerto Rico</option>  
                      <option value="QA">Qatar</option>  
                      <option value="UK">Reino Unido</option>  
                      <option value="CF">República Centroafricana</option>  
                      <option value="CZ">República Checa</option>  
                      <option value="ZA">República de Sudáfrica</option>  
                      <option value="DO">República Dominicana</option>  
                      <option value="SK">República Eslovaca</option>  
                      <option value="RE">Reunión</option>  
                      <option value="RW">Ruanda</option>  
                      <option value="RO">Rumania</option>  
                      <option value="RU">Rusia</option>  
                      <option value="EH">Sahara Occidental</option>  
                      <option value="KN">Saint Kitts y Nevis</option>  
                      <option value="WS">Samoa</option>  
                      <option value="AS">Samoa Americana</option>  
                      <option value="SM">San Marino</option>  
                      <option value="VC">San Vicente y Granadinas</option>  
                      <option value="SH">Santa Helena</option>  
                      <option value="LC">Santa Lucía</option>  
                      <option value="ST">Santo Tomé y Príncipe</option>  
                      <option value="SN">Senegal</option>  
                      <option value="SC">Seychelles</option>  
                      <option value="SL">Sierra Leona</option>  
                      <option value="SG">Singapur</option>  
                      <option value="SY">Siria</option>  
                      <option value="SO">Somalia</option>  
                      <option value="LK">Sri Lanka</option>  
                      <option value="PM">St. Pierre y Miquelon</option>  
                      <option value="SZ">Suazilandia</option>  
                      <option value="SD">Sudán</option>  
                      <option value="SE">Suecia</option>  
                      <option value="CH">Suiza</option>  
                      <option value="SR">Surinam</option>  
                      <option value="TH">Tailandia</option>  
                      <option value="TW">Taiwán</option>  
                      <option value="TZ">Tanzania</option>  
                      <option value="TJ">Tayikistán</option>  
                      <option value="TF">Territorios franceses del Sur</option>  
                      <option value="TP">Timor Oriental</option>  
                      <option value="TG">Togo</option>  
                      <option value="TO">Tonga</option>  
                      <option value="TT">Trinidad y Tobago</option>  
                      <option value="TN">Túnez</option>  
                      <option value="TM">Turkmenistán</option>  
                      <option value="TR">Turquía</option>  
                      <option value="TV">Tuvalu</option>  
                      <option value="UA">Ucrania</option>  
                      <option value="UG">Uganda</option>  
                      <option value="UY">Uruguay</option>  
                      <option value="UZ">Uzbekistán</option>  
                      <option value="VU">Vanuatu</option>  
                      <option value="Venezuela">Venezuela</option>  
                      <option value="Vietnam">Vietnam</option>  
                      <option value="YE">Yemen</option>  
                      <option value="YU">Yugoslavia</option>  
                      <option value="ZM">Zambia</option>  
                      <option value="ZW">Zimbabue</option> 
</select>



    </div>




<div  id="input_entidad" class="form-group">


      <label id="ent_f" for="email">Entidad Federal</label>

<br>
      <input id="input_entidad"  type="text" class="form-control" name='ent_f' value='<?php echo $datos->ent_f?>' onFocus="nextfield ='esta_ci'" placeholder="Entidad Federal">
    </div>
    
<br>
<br>



<div  class="form-group">


      <label id="estado_c"  for="email">Estado Civil:</label>

<br>
      <select id="input_peso" class="form-control"  name='esta_ci' value='<?php echo $datos->esta_ci?>' onFocus="nextfield ='ta'">
                      <option value="Soltero">Soltero</option> 
                      <option value="Casado">Casado</option> 
                      <option Value="Divorsiado">Divorsiado</option>
                     
</select>


    </div>









    <div id="ta" class="form-group">


      <label  >Talla:</label>

<br>
      <select class="form-control"  onFocus="nextfield ='pso'"  name='ta'>
                      <option value="S">S</option> 
                      <option value="M">M</option> 
                      <option Value="L">L</option>
                       <option Value="XXL">XL</option>
                      <option Value="XXL">XXL</option>
                     
</select>
</div>


<div id="input_peso" class="form-group">


      <label  >Peso (Kg)</label>
<br>

      <input  id="input_peso" type="number" name='pso' value='<?php echo $datos->pso?>' class="form-control"  onFocus="nextfield ='impedi_f'" placeholder="Peso">
    </div>


<br>
<br>

<div  class="form-group">


      <label id="impdi_f" >Impedimento Fisico</label>
<br>

      <input type="text" class="form-control" name='impedi_f' value='<?php echo $datos->impedi_f?>' onFocus="nextfield ='dir_ha'" placeholder="Impedimento Fisico">
    </div>



<div id="input_direccion" class="form-group">


      <label id="direccion">Direccion de Habitacion:</label>
<br>

      <input type="text" id="input_direccion"  name='dir_ha' value='<?php echo $datos->dir_ha?>' class="form-control" onFocus="nextfield ='muni'" placeholder="Direccion de Habitacion">
    </div>

<br>
<br>

    <div id="municipio" class="form-group">


      <label >Municipio:</label>
<br>

      <input type="text"  name='muni' value='<?php echo $datos->muni?>' class="form-control" onFocus="nextfield ='parro'" placeholder="Municipio">
    </div>



<div id="parroquia"  class="form-group">


      <label >Parroquia:</label>
<br>

      <input type="text"  name='parro' value='<?php echo $datos->parro?>' class="form-control" onFocus="nextfield ='tel_h'" placeholder="Parroquia">
    </div>


    <div  id="input_telefono_ha" class="form-group">


      <label  >Telefono de Habitacion:</label>
<br>

      <input type="text"  name='tel_h' value='<?php echo $datos->tel_h?>' class="form-control"  onFocus="nextfield ='tel_m'" placeholder="Telefono de Habitacion">
    </div>


<br>
<br>
    <div  class="form-group">


      <label  >Telefono Movil:</label>
<br>

      <input type="text"  name='tel_m' value='<?php echo $datos->tel_m?>' class="form-control" onFocus="nextfield ='corr'" placeholder="Telefono Movil">
    </div>



     <div id="input_correo"  class="form-group">


      <label id="correo" >Correo Electronico:</label>
<br>

      <input  id="input_correo" type="text"  name='corr' value='<?php echo $datos->corr?>' class="form-control" onFocus="nextfield ='etni'" placeholder="Correo">
    </div>

<br>
<br>

     <div  class="form-group">


      <label id="etnia"  >Etnia:</label>
<br>

      <input type="text"   name='etni' value='<?php echo $datos->etni?>' class="form-control" onFocus="nextfield ='alergi'" placeholder="Etnia">
    </div>


     <div  id="input_alergico"  class="form-group">


      <label id="alergia" >Alergico a algun medicamento:</label>
<br>

      <input type="text" id="input_correo" value='<?php echo $datos->alergi?>' name='alergi' class="form-control" onFocus="nextfield ='plan'" placeholder="Alergico a algun medicamento">
    </div>

<hr>
<label> <b>B.-Datos Academicos</b></label>
<hr>

     <div  class="form-group">


      <label  id="plan" >Plantel de Procedencia:</label>
<br>

      <input type="text" id="input_plantel"  value='<?php echo $datos->plan?>' name='plan' class="form-control" onFocus="nextfield ='be'" placeholder="Plantel">
    </div>




     <div  class="form-group">


      <label  id="beca2" >Posee Beca:</label>

<br>
      <select class="form-control"  name="be" value='<?php echo $datos->be?>' onFocus="nextfield ='org'">
                      <option value="si">Si</option> 
                      <option value="no">No</option> 
                     
</select>




    </div>

    <div id="input_organismo" class="form-group">


      <label  id="input_organismo">Organismo:</label>
<br>

      <input type="text"  name='org' value='<?php echo $datos->org?>' class="form-control" onFocus="nextfield ='cd_r'" placeholder="organismo">
    </div>



<hr>
<label> C.-Datos del Representante</label>
<h6> Si no es el Padre o la Madre se requiere autorizacion firmada y con huellas dactilares de uno de los dos y el autorizado. </h6>
<hr>

 <div  id="cedula" class="form-group">




      
<label >Cedula del Representante:</label>
<br>
    <input type="text"  name='cd_r' value='<?php echo $datos->cd_r?>' class="form-control" onFocus="nextfield ='nb_r'" placeholder="Cedula">
    </div>


    <div  id="nombre" class="form-group">


      <label >Nombres:</label>

<br>
      <input type="text" name='nb_r'  value='<?php echo $datos->nb_r?>' class="form-control" onFocus="nextfield ='ap_r'" placeholder="Nombres">
    </div>


<div id="input_apellido"  class="form-group">


      <label >Apellidos:</label>
<br>

      <input type="text" name="ap_r" value='<?php echo $datos->ap_r?>'  class="form-control" onFocus="nextfield ='fec_r'" placeholder="Apellidos">
    </div>

      <br>
      <br>




<div   class="form-group">


      <label id="fecha_n"  >Fecha de Nacimiento:</label>
<br>

      <input type="date"  name='fec_r' value='<?php echo $datos->fec_r?>' value="fec_r" class="form-control"  onFocus="nextfield ='eda_r'" placeholder="Apellidos">
    </div>




   <div  class="form-group">


      <label id="edad" >Edad</label>
<br>

      <input type="number" name='eda_r' value='<?php echo $datos->eda_r?>' class="form-control" onFocus="nextfield ='ge_r'" placeholder="Edad">
    </div>
    
   







<div id="input_genero" class="form-group">


      <label >Genero:</label>

<br>
      <select  name='ge_r' value='<?php echo $datos->ge_r?>' onFocus="nextfield ='lu_n'"  class="form-control" >
                      <option value="Hombre">Hombre</option> 
                      <option value="Mujer">Mujer</option> 
                     
</select>




    </div>

<br>
<br>


<div id="parentesco"  class="form-group">


      <label >Parentesco:</label>
<br>

      <input type="text" name="parent" value='<?php echo $datos->parent?>' class="form-control" onFocus="nextfield ='cor_re'" placeholder="Parentesco">
    </div>





<div  id="input_correo" class="form-group">


      <label id="correo" >Correo Electronico:</label>
<br>

      <input type="text" id="input_correo" name="cor_re"  value='<?php echo $datos->cor_re?>' class="form-control" onFocus="nextfield ='dir_ha_r'" placeholder="Correo">
    </div>


<br>
<br>


<div  class="form-group">


      <label id="direccion">Direccion de Habitacion:</label>
<br>

      <input type="text" id="input_direccion" name='dir_ha_r' value='<?php echo $datos->dir_ha_r?>'  class="form-control" onFocus="nextfield ='muni_r'" placeholder="Direccion de Habitacion">
    </div>





    <div id="input_municipio"  class="form-group">


      <label id="municipio1">Municipio:</label>
<br>

      <input type="text" name='muni_r'  value='<?php echo $datos->muni_r?>' class="form-control" onFocus="nextfield ='parro_r'" placeholder="Municipio">
    </div>


<br>
<br>


<div id="parroquia"  class="form-group">


      <label >Parroquia:</label>
<br>

      <input type="text" name='parro_r'  value='<?php echo $datos->parro_r?>' class="form-control" onFocus="nextfield ='tel_h_r'"  placeholder="Parroquia">
    </div>


    <div   class="form-group">


      <label id="telefono" >Telefono de Habitacion:</label>
<br>

      <input type="text"  name='tel_h_r' value='<?php echo $datos->tel_h_r?>' class="form-control" onFocus="nextfield ='tel_m_r'" placeholder="Telefono de Habitacion">
    </div>



    <div id="input_telefono_movil" class="form-group">


      <label id="telefono_m" >Telefono Movil:</label>
<br>

      <input type="text" name="tel_m_r"  value='<?php echo $datos->tel_m_r?>' class="form-control" onFocus="nextfield ='nb_m'"placeholder="Telefono Movil">
    </div>

<hr>
<label>D.- Datos Familiares</label>
<hr>

<div  id="cedula" class="form-group">   
<label > Nombre Madre:</label>
<br>
    <input type="text"  name='nb_m' value='<?php echo $datos->nb_m?>' class="form-control" onFocus="nextfield ='cd_m'" placeholder="Nombre Madre">
    </div>








    <div  id="nombre" class="form-group">


      <label >Cedula:</label>

<br>
      <input type='text'  name='cd_m' value='<?php echo $datos->cd_m?>' class="form-control" onFocus="nextfield ='tel_m_m'" placeholder="Cedula">
    </div>


<div id="input_telefono_movil"  class="form-group">


      <label >Telefono Movil:</label>
<br>

      <input type="text" name='tel_m_m' value='<?php echo $datos->tel_m_m?>'   class="form-control"   onFocus="nextfield ='nb_p'" placeholder="Telefono Movil">
    </div>



<br>
<br>

    <div   class="form-group">


      
<label > Nombre Padre:</label>
<br>
    <input type='text' name='nb_p' value='<?php echo $datos->nb_p?>'  class="form-control" onFocus="nextfield ='cd_p'" placeholder="Nombre Padre">
    </div>


    <div  id="nombre" class="form-group">


      <label >Cedula:</label>

<br>
      <input type="text" name='cd_p' value='<?php echo $datos->cd_p?>' class="form-control" onFocus="nextfield ='tel_m_p'" placeholder="Cedula">
    </div>


<div id="input_telefono_movil" class="form-group">


      <label >Telefono Movil:</label>
<br>

      <input type="text" name='tel_m_p'  value='<?php echo $datos->tel_m_p?>' class="form-control"  placeholder="Telefono Movil">
    </div>


<br>
<br>


    <input type="submit" id="guardar" value="ELIMINAR INSCRIPCION" name="guardar">
</form>
 
  

<div>










   

  </form>







 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Cerrar</button>

        </div>

      </div>

      
    </div>




</div>


</div>


 

        
        </div> <!-- end of templatemo_content -->
    </div> <!-- end of templatemo_main -->
    
    <div id="templatemo_footer">
    	
                <?php include_once 'include/footer.php' ?>
        
    
    </div> <!-- end of footer wrapper -->

</div> <!-- end of wrapper -->

<div id="divicion"></div>
<div id="divicion2"></div>

<div id="footer2"></div>

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>












<div class="modal fade" id="myModalBuscar_nota" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Consultar Evaluacion</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_planilla_a_consultar2.php" method="POST" >


  <div align="center">

    <p><strong>Consultar de cedula:

      <input type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>




























<div class="modal fade" id="modificar_evaluacion" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Modificar Evaluacion</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_planilla_a_modificar2.php" method="POST" >


  <div align="center">

    <p><strong>Consultar  Cedula:

      <input type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>









<div class="modal fade" id="registrar_evaluacion" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Registrar Evaluacion</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_planilla_a_registrar2.php" method="POST" >


  <div align="center">

    <p><strong>Consultar  Cedula:

      <input type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>




<div class="modal fade" id="Eliminar_evaluacion" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Eliminar Evaluacion</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_planilla_a_eliminar2.php" method="POST" >


  <div align="center">

    <p><strong>Consultar  Cedula:

      <input type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>











 <!-- Modal content boton buscar-->




  <!-- Modal content boton buscar-->



   <!-- Modal inscripcion-->











 <!-- Modal content boton buscar-->

<div class="modal fade" id="buscar_inscripcion" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Consultar Inscripcion</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_inscripcion_a_consultar.php" method="POST" >


  <div align="center">

    <p><strong>Consultar de cedula:

      <input type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>


  <!-- Modal content boton buscar-->



  <div class="modal fade" id="modificar_inscripcion" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Modificar Inscripcion</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_inscripcion_a_modificar.php" method="POST" >


  <div align="center">

    <p><strong>Consultar  Cedula:

      <input type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Cerrar</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>



  <!-- Modal content boton buscar-->









    <!-- Modal content boton buscar-->



    <div class="modal fade" id="Eliminar_inscripcion" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Eliminar Inscripcion</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_inscripcion_a_eliminar.php" method="POST" >


  <div align="center">

    <p><strong>Consultar  Cedula:

      <input type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>