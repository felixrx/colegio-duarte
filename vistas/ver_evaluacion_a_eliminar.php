<html>
<head>
<CENTER><BR><BR><font size=5 color="blue"><b> Evaluacion a Eliminar </b></font>
  <link rel="stylesheet" type="text/css" href="../css/notas.css">
  <meta charset="utf-8">
<script language="JavaScript" type="text/javascript">



function cancelar()
{
    window.location="cambios.html"
}
</script>
</head>

<body>
<?php 
include("../conexion/conexion.php");
$id_c=$_POST['id_c'];
if(empty($id_c))
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           window.location='bajas.html'
        </script>
       ";
     exit();
}
$conexion=conectar();
$sql="select * from informe_de_evaluacion join alumnos on alumnos.id_c = informe_de_evaluacion.id_c where alumnos.id_c='$id_c'";





$registro=mysql_query($sql,$conexion);
if(!$registro)
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           alert('ERROR EN LA CLAVE')
       window.location='bajas.html'
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
       window.location='../consultas/buscar_evaluacion_a_eliminar.html'
     </script>
       ";
     exit();
  }
 }
?>
  </p>
 
  
<div id="borde">
<div id="titulo"><h2>Informe de Evaluacion</h2></div>





<form action='../procesos/procesar_notas_a_eliminar.php' method='post'>

<div id="recuadro_estudiante">

<div id="periodo">

Periodo: <select  name=''class="input2">

          <option>1<sub>er</sub> LAPSO</option>
          <option>2<sub>er</sub> LAPSO</option>
          <option>3<sub>er</sub> LAPSO</option>
        </select>
<br>
Año:  <select name='a_o' class="input2" value='<?php echo $datos->a_o?>'>>

        <option value=" 4 to"> 4 <sup>to</sup> </option>
          <option value="5 to"> 5 <sup>to</sup> </option>
          
</select>
<br>
    Año Escolar:  <select  name"a_o_escolar" value='<?php echo $datos->a_o_escolar?>'> class="input2">

         <option value='2016-2017'> 2016-2017 </option>
          <option value='2017-2018'> 2017-2018 </option>
   </select>
<br>
   Seccion:<select name="seccion"  value='<?php echo $datos->seccion?>'> class="input2">
          <option value='A'> A </option>
          <option value='B'> B</option>
          <option value='C'> C </option>
          <option value='U'> U</option>
         </select>
<br>
Mencion:<select name="mencion"  value='<?php echo $datos->mencion?>'> class="input2">
          <option value="Administracion Financiera">Administracion Financiera </option>
          <option value="Aduana"> Aduana</option>
          <option value="Contabilidad"> Contabilidad </option>
          <option value"Asistencia Gerencial"> Asistencia Gerecial</option>
         </select>


</div>


<div id="estudiante">

Apellidos y Nombres del Estuadiante:
<br>
<input class="input2" type="text" value='<?php echo $datos->nb?>'>                                 

<input class="input2" type="text" name="nb" value='<?php echo $datos->ap?>'>
<br>
Cedula:
<br>
<input class="input2" type="text"  name='id_c' value='<?php echo $datos->id_c?>'>
<br>
Fecha de Nacimiento:
<br>
<input class="input2" type="text" name="fec_n" value='<?php echo $datos->fc_n?>'>


</div>

</div>



<div id="recuadro_materias">

<div id="Materias">


<table class="tabla" width="721"  border="1" >
  <tr>
    <td  class="tabla_titulo3"width="27">Nº</td>
    <td class="tabla_titulo1" width="271"><div align="center">Asignaturas</div></td>
    <td class="tabla_titulo1" width="323">&nbsp;</td>
    <td  class="tabla_titulo2" >Nota</td>
  </tr>
  <tr>
    <td class="celda">1</td>
    <td  class="celda" ><select name='asignatura_1' value='<?php echo $asignatura_1?>'> class="selector">
    <option value="Castellano y Literatura">Castellano y Leteratura</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_1' value='<?php echo $datos->nota_1?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">2</td>
    <td class="celda"><select name='asignatura_2' value='<?php echo $asignatura_2?>' class="selector">
    <option  value="Historia Cont. de Venezuela">Historia Cont. de Venezuela</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_2' value='<?php echo $datos->nota_2 ?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">3</td>
    <td class="celda"><select name='asignatura_3' value='<?php echo $asignatura_3?>' class="selector">
    <option  value="Educacion Fisica">Educacion Fisica</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input  name='nota_3' value='<?php echo $datos->nota_3 ?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">4</td>
    <td class="celda"><select name='asignatur_4' value='<?php echo $asignatura_4?>' class="selector">
    <option  value="Matematica">Matematica</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_4' value='<?php echo $datos->nota_4 ?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">5</td>
    <td class="celda"><select name='asignatura_5'  value='<?php echo $asignatura_5?>' class="selector">
    <option  value="Ingles">Ingles</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_5' value='<?php  echo $datos->nota_5?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">6</td>
    <td class="celda"><select name='asignatura_6'   value='<?php echo $asignatura_6?>' class="selector">
    <option  value="Mecanografia">Mecanografia</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_6' value='<?php  echo $datos->nota_6?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">7</td>
    <td class="celda"><select name='asignatura_7'  value='<?php echo $asignatura_7?>' class="selector">
    <option  value="Contabilidad">Contabilidad</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_7' value='<?php  echo $datos->nota_7?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">8</td>
    <td class="celda"><select name='asignatura_8'  value='<?php echo $asignatura_8?>' class="selector">
    <option  value="Nociones Grles Derecho">Nociones Grles Derecho</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_8' value='<?php  echo $datos->nota_8?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">9</td>
    <td class="celda"><select name='asignatura_9'  value='<?php echo $asignatura_9?>' class="selector">
    <option  value="Informatica I">Informatica I</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_9' value='<?php  echo $datos->nota_9?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">10</td>
    <td class="celda">   <select name='asignatura_10' class="selector">
<option value="Practicas de Oficina" <?php if($datos->asignatura_10=="Practicas de Oficina") echo "selected";?>>Practicas de Oficina</option> 
<option  value="Tecnica y Pract. de  Adm y Tu"<?php if($datos->asignatura_10=="Tecnica y Pract. de  Adm y Tu") echo "selected";?>>Tecnica y Pract. de  Adm y Tu</option> 


</select></td>






    <td class="celda">&nbsp;</td>
    <td class="celda"><input  name='nota_10' value='<?php  echo $datos->nota_10?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">11</td>
    <td class="celda"><select name='asignatura_11'  value='<?php echo $asignatura_11?>'class="selector">
    <option  value="Teoria Gral. de Seguro">Teoria Gral. de Seguro</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_11' value='<?php  echo $datos->nota_11?>' class="input"></td>
  </tr>
  <tr>
    <td class="celda">12</td>
    <td class="celda"><select  name='asignatura_12'  value='<?php echo $asignatura_12?>' class="selector">
   <option  value="Instruccion Premilitar">Instruccion Premilitar</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_12' value='<?php  echo $datos->nota_12?>' class="input"></td>
  </tr>
</table>

</div>
<input type='submit' value='Eliminar' >
</div>





</form>







</body>
</html>
