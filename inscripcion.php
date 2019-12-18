


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







<script> 

$(document).ready(function(){
    $("#hide").click(function(){
        $("#myModalevaluacion").modal('show');
        $("#myModalBuscar").modal('close');
    });
});





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
  
   
        
        
        <div id="templatemo_menu">
           
        </div> <!-- end of templatemo_menu -->
        
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
        <h2>Sistema de Inscripcion en Linea</h2>
            <p>Conoce Nuestro nuevo registro de Inscripcion en linea. llena la planilla con tus datos. Consulta tus notas.</p>
	</div> <!-- end of templatemo_middle -->
    
    <div id="templatemo_main">
    	<div id="content_title">
        	Inscripcion en Linea</div>
        <div id="templatemo_content2">
	  		



       
         

        


     
             <div class="row" id="row">

                 

                  <div id="cont4" class="col-sm-4" ><a href="#myModalReporte" data-toggle="modal"><img class="zoom" src="imagenes/registar.png" align="center" width=70 heigth=70 /> </a><p id="parrafo" class="zoom"> Planilla de Inscripcion </p></div>


                  <div id="cont4" class="col-sm-4"><a href="#myModalBuscar" data-toggle="modal"><img  class="zoom" src="imagenes/buscar.png" width=70 heigth=70 /></a><p id="parrafo" class="zoom">Consultar Notas</p></div>



                



           
     </div>
  









 


















 
      <!-- Modal Imprimir reporte-->




<!-- Modal Imprimir reporte-->



<!-- Modal Imprimir reporte-->
















 

        
        </div> <!-- end of templatemo_content -->
    </div> <!-- end of templatemo_main -->
    
    <div id="templatemo_footer">
    	
            
        
    
    </div> <!-- end of footer wrapper -->

</div> <!-- end of wrapper -->

<div id="divicion"></div>
<div id="divicion2"></div>

<div id="footer2"></div>





















<div class="modal fade" id="myModalBuscar" role="dialog"  style="display:open;">

    <div class="modal-dialog">

   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h4 class="modal-title">Buscar Registro</h4>

        </div>


        <div class="modal-body">


    <form  action="administrador_mostrar_planilla_a_consultar2.php" method="POST" >


  <div align="center">

    <p><strong>Consultar de cedula:

      <input required type="text" name="id_c" id="id_c">

    </strong></p>

  </div>

  <p align="center">
    

<input required type="submit" value="BUSCAR" name="ELIMINAR" >



</p>
</form>

 
<section id = "listado"></section>
 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">CERRAR</button>

        </div>

      </div>

      
    </div>
  </div>
  


</div>































































 <div class="modal fade" id="myModalReporte" role="dialog"  style="display:open;">

    <div  id="modal-dialog" class="modal-dialog">






   
      <!-- Modal content boton buscar-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>


          <h3 align="center" aline class="modal-title"><b>PLANILLA DE INSCRIPCION 333</b></h3>
          <h5 align="center">PERIODO ESCOLAR 2016-2017</h5>

        </div>


        <div id="body"class="modal-body">






 <div id="borde">
  <!--<form action = "plantilla_php.php" method= "post" class ="form-inline" role="form"> -->


<form action= "procesos/procesar_inscripcion_a_ingresar.php" method="post"  class="form-inline" >


    <hr>

   <h5><b> A.- Datos Personales </b></h5>
<hr>







   


      <label >Nombres:</label>

<br>




      <input required type="text"  name='' style="text-transform:capitalize;" onblur="javascript:this.value=this.value.capitalize();"  class="form-control"  placeholder="Nombres">



    </div>



      <br>
      <br>




<div   class="form-group">


      <label id="fc_n" >Fecha de Nacimiento:</label>
<br>

      <input required type="date"   name='fc_n'  value="fc_n" class="form-control" id="fc_n" onKeyDown="A(event,this.form.eda);" placeholder="Fecha">
    </div>




   <div  class="form-group">


      <label id="eda" >Edad</label>
<br>

      <input required type="number" name='eda'  class="form-control" onKeyDown="A(event,this.form.gene);" placeholder="Edad">
    </div>
    
   







<div id="genero" class="form-group">


      <label >Genero:</label>

<br>
      <select  name='gene'  onKeyDown="A(event,this.form.lu_n);" class="form-control" >
                      <option value="Hombre">Hombre</option> 
                      <option value="Mujer">Mujer</option> 
                     
</select>




    </div>

    





<br>
<br>

<div class="form-group">


      <label id="lu_n" for="email">Lugar de Nacimiento:</label>
<br>

      <select class="form-control"  name='lu_n'  onKeyDown="A(event,this.form.ent_f);">
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




<div  class="form-group">


      <label id="ent_f" for="email">Entidad Federal</label>

<br>
      <input required type="text" class="form-control" name='ent_f' onKeyDown="A(event,this.form.esta_ci);" placeholder="Etidad Federal">
    </div>
    
<br>
<br>



<div  class="form-group">


      <label id="estado_c"  for="email">Estado Civil:</label>

<br>
      <select class="form-control"  name='esta_ci'  onKeyDown="A(event,this.form.ta);">
                      <option value="Hombre">Soltero</option> 
                      <option value="Mujer">Casado</option> 
                      <option Value="Divorsiado">Divorsiado</option>
                     
</select>


    </div>









    <div id="ta" class="form-group">


      <label  >Talla:</label>

<br>
      <select class="form-control"  onKeyDown="A(event,this.form.pso);"  name='ta'>
                      <option value="S">S</option> 
                      <option value="M">M</option> 
                      <option Value="L">L</option>
                       <option Value="XXL">XL</option>
                      <option Value="XXL">XXL</option>
                     
</select>
</div>


<div  class="form-group">


      <label  >Peso (Kg)</label>
<br>

      <input required type="number" name='pso' class="form-control"  onKeyDown="A(event,this.form.impdi_f);" placeholder="Peso">
    </div>


<br>
<br>

<div  class="form-group">


      <label id="impdi_f" >Impedimento Fisico</label>
<br>

      <input required type="text" class="form-control" name='impdi_f' onKeyDown="A(event,this.form.dir_ha);" placeholder="Impedimento Fisico">
    </div>



<div  class="form-group">


      <label id="direccion">Direccion de Habitacion:</label>
<br>

      <input required type="text"  name='dir_ha' class="form-control" onKeyDown="A(event,this.form.muni);" placeholder="Direccion de Habitacion">
    </div>

<br>
<br>

    <div id="municipio" class="form-group">


      <label >Municipio:</label>
<br>

      <input required type="text"  name='muni' class="form-control" onKeyDown="A(event,this.form.parro);" placeholder="Municipio">
    </div>



<div id="parroquia"  class="form-group">


      <label >Parroquia:</label>
<br>

      <input required type="text"  name='parro' class="form-control" onKeyDown="A(event,this.form.tel_h);" placeholder="Parroquia">
    </div>


    <div   class="form-group">


      <label id="telefono" >Telefono de Habitacion:</label>
<br>

      <input required type="text"  name='tel_h' class="form-control"onKeyDown="A(event,this.form.tel_m);" placeholder="Telefono de Habitacion">
    </div>


<br>
<br>
    <div  class="form-group">


      <label id="tele_m" >Telefono Movil:</label>
<br>

      <input required type="text"  name='tel_m'  class="form-control" onKeyDown="A(event,this.form.corr);" placeholder="Telefono Movil">
    </div>



     <div   class="form-group">


      <label id="correo" >Correo Electronico:</label>
<br>

      <input required type="text"  name='corr' class="form-control" onKeyDown="A(event,this.form.etni);" placeholder="Correo">
    </div>

<br>
<br>

     <div  class="form-group">


      <label id="etnia"  >Etnia:</label>
<br>

      <input required type="text"   name='etni' class="form-control" onKeyDown="A(event,this.form.alrgi);" placeholder="Etnia">
    </div>


     <div   class="form-group">


      <label id="alergia" >Alergico a algun medicamneto:</label>
<br>

      <input required type="text"  name='alergi' class="form-control" onKeyDown="A(event,this.form.plan);" placeholder="Alergico a algun medicamento">
    </div>

<hr>
<label> <b>B.-Datos Academicos</b></label>
<hr>

     <div  class="form-group">


      <label  id="plan" >Plantel de Procedencia:</label>
<br>

      <input required type="text"  name='plan' class="form-control" onKeyDown="A(event,this.form.be);" placeholder="Plantel">
    </div>




     <div  class="form-group">


      <label  id="beca2" >Posee Beca:</label>

<br>
      <select class="form-control"  name="be"  onKeyDown="A(event,this.form.org);">
                      <option value="si">Si</option> 
                      <option value="no">No</option> 
                     
</select>




    </div>
    <div  class="form-group">


      <label  id="organismo" >Organismo:</label>
<br>

      <input required type="text"  name='org' class="form-control" onKeyDown="A(event,this.form.cd_r);" placeholder="organismo">
    </div>



<hr>
<label> C.-Datos del Representante</label>
<h6> Si no es el Padre o la Madre se requiere autorizacion firmada y con huellas dactilares de uno de los dos y el autorizado. </h6>
<hr>

 <div  id="cedula" class="form-group">




      
<label >Cedula del Representante:</label>
<br>
    <input required type="text"  name='cd_r' class="form-control" onKeyDown="A(event,this.form.nb_r);" placeholder="Cedula">
    </div>


    <div  id="nombre" class="form-group">


      <label >Nombres:</label>

<br>
      <input required type="text" name='nb_r'  class="form-control" onKeyDown="A(event,this.form.ap_r);" placeholder="Nombres">
    </div>


<div id="apellido"  class="form-group">


      <label >Apellidos:</label>
<br>

      <input required type="text" name="ap_r"   class="form-control" onKeyDown="A(event,this.form.fec_r);" placeholder="Apellidos">
    </div>

      <br>
      <br>




<div   class="form-group">


      <label id="fecha_n"  >Fecha de Nacimiento:</label>
<br>

      <input required type="date"  name='fec_r' value="fec_r" class="form-control"  onKeyDown="A(event,this.form.eda_r);" placeholder="Apellidos">
    </div>




   <div  class="form-group">


      <label id="edad" >Edad</label>
<br>

      <input required type="number" name='eda_r' class="form-control" onKeyDown="A(event,this.form.ge_r);" placeholder="Edad">
    </div>
    
   







<div id="genero" class="form-group">


      <label >Genero:</label>

<br>
      <select class="form-control"  name='ge_r'  onKeyDown="A(event,this.form.parent);">
                      <option value="Hombre">Hombre</option> 
                      <option value="Mujer">Mujer</option> 
                     
</select>




    </div>

<br>
<br>


<div id="parentesco"  class="form-group">


      <label >Parentesco:</label>
<br>

      <input required type="text" name="parent" class="form-control" onKeyDown="A(event,this.form.cor_re);" placeholder="Parentesco">
    </div>





<div   class="form-group">


      <label id="correo" >Correo Electronico:</label>
<br>

      <input required type="text"  name="cor_re"   class="form-control" onKeyDown="A(event,this.form.dir_ha_r);" placeholder="Correo">
    </div>


<br>
<br>


<div  class="form-group">


      <label id="direccion">Direccion de Habitacion:</label>
<br>

      <input required type="text" name='dir_ha_r'  class="form-control" onKeyDown="A(event,this.form.muni_r);" placeholder="Direccion de Habitacion">
    </div>





    <div   class="form-group">


      <label id="municipio1">Municipio:</label>
<br>

      <input required type="text" name='muni_r'  class="form-control" onKeyDown="A(event,this.form.parro_r);" placeholder="Municipio">
    </div>


<br>
<br>


<div id="parroquia"  class="form-group">


      <label >Parroquia:</label>
<br>

      <input required type="text" name='parro_r'  class="form-control"onKeyDown="A(event,this.form.tel_h_r);"  placeholder="Parroquia">
    </div>


    <div   class="form-group">


      <label id="telefono" >Telefono de Habitacion:</label>
<br>

      <input required type="text"  name='tel_h_r' class="form-control" onKeyDown="A(event,this.form.tel_m_r);"placeholder="Telefono de Habitacion">
    </div>



    <div  class="form-group">


      <label id="telefono_m" >Telefono Movil:</label>
<br>

      <input required type="text" name="tel_m_r"  class="form-control" onKeyDown="A(event,this.form.nb_m);" placeholder="Telefono Movil">
    </div>

<hr>
<label>D.- Datos Familiares</label>
<hr>

<div  id="cedula" class="form-group">   
<label > Nombre Madre:</label>
<br>
    <input required type="text"  name='nb_m' class="form-control" onKeyDown="A(event,this.form.cd_m);" placeholder="Nombre Madre">
    </div>








    <div  id="nombre" class="form-group">


      <label >Cedula:</label>

<br>
      <input required type='text'  name='cd_m' class="form-control" onKeyDown="A(event,this.form.tel_m_m);" placeholder="Cedula">
    </div>






<br>
<br>

    <div   class="form-group">


      
<label > Nombre Padre:</label>
<br>
    <input required type='text' name='nb_p'  class="form-control" onKeyDown="A(event,this.form.cd_p);" placeholder="Nombre Padre">
    </div>


    <div  id="nombre" class="form-group">


      <label >Cedula:</label>

<br>
      <input required type="text" name='cd_p'  class="form-control" onKeyDown="A(event,this.form.tel_m_p);" placeholder="Cedula">
    </div>


<div id="apellido"  class="form-group">


      <label >Telefono Movil:</label>
<br>

      <input required type="text" name='tel_m_p' class="form-control"  placeholder="Telefono Movil">
    </div>

<div id="apellido"  class="form-group">


      <label >Telefono Movil:</label>
<br>

      <input required type="text" name='letra'   class="form-control"  placeholder="Telefono Movil">
    </div>



    <input required type="submit" id="guardar" value="GUARDAR" name="guardar">
</form>
 
  

<div>













    <div class="checkbox">
      <label><input required type="checkbox"> Recordar</label>
    </div>
   

  </form>







 

 
         </div>

        <div class="modal-footer">
          <button type="button" id="hide"   class="btn btn-default" data-dismiss="modal">Cerrar</button>

        </div>

      </div>

      
    </div>




</div>
















</body>



































</html>