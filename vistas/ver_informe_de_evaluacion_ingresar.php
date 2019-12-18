




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
$sql="select * from alumnos where id_c='$id_c'";
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
       window.location='bajas.html'
     </script>
       ";
     exit();
  }
 }
?>
  



<div id="borde">
<div id="titulo"><h2>Informe de Evaluacion</h2></div>





<form action='../procesos/procesar_notas.php' method='post'>

<div id="recuadro_estudiante">

<div id="periodo">

Periodo: <select  name=''class="input2">

          <option>1<sub>er</sub> LAPSO</option>
          <option>2<sub>er</sub> LAPSO</option>
          <option>3<sub>er</sub> LAPSO</option>
        </select>
<br>
Año:  <select name='a_o' class="input2">

        <option value=" 4 to"> 4 <sup>to</sup> </option>
          <option value="5 to"> 5 <sup>to</sup> </option>
          
</select>
<br>
    Año Escolar:  <select  name='a_o_escolar' class="input2">

         <option value='2016-2017'> 2016-2017 </option>
          <option value='2017-2018'> 2017-2018 </option>
   </select>
<br>
   Seccion:<select name="seccion" class="input2">
          <option value='A'> A </option>
          <option value='B'> B</option>
          <option value='C'> C </option>
          <option value='U'> U</option>
         </select>
<br>
Mencion:<select name="mencion" class="input2">
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
    <td  class="celda" ><select name='asignatura_1' class="selector">
	  <option value="Castellano y Literatura">Castellano y Leteratura</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_1' class="input"></td>
  </tr>
  <tr>
    <td class="celda">2</td>
    <td class="celda"><select name='asignatura_2' class="selector">
	  <option  value="Historia Cont. de Venezuela">Historia Cont. de Venezuela</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_2' class="input"></td>
  </tr>
  <tr>
    <td class="celda">3</td>
    <td class="celda"><select name='asignatura_3' class="selector">
	  <option  value="Educacion Fisica">Educacion Fisica</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input  name='nota_3' class="input"></td>
  </tr>
  <tr>
    <td class="celda">4</td>
    <td class="celda"><select name='asignatura_4' class="selector">
	  <option  value="Matematica">Matematica</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_4' class="input"></td>
  </tr>
  <tr>
    <td class="celda">5</td>
    <td class="celda"><select name='asignatura_5' class="selector">
	  <option  value="Ingles">Ingles</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_5' class="input"></td>
  </tr>
  <tr>
    <td class="celda">6</td>
    <td class="celda"><select name='asignatura_6' class="selector">
	  <option  value="Mecanografia">Mecanografia</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_6' class="input"></td>
  </tr>
  <tr>
    <td class="celda">7</td>
    <td class="celda"><select name='asignatura_7' class="selector">
	  <option  value="Contabilidad">Contabilidad</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_7' class="input"></td>
  </tr>
  <tr>
    <td class="celda">8</td>
    <td class="celda"><select name='asignatura_8' class="selector">
	  <option  value="Nociones Grles Derecho">Nociones Grles Derecho</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_8' class="input"></td>
  </tr>
  <tr>
    <td class="celda">9</td>
    <td class="celda"><select name='asignatura_9' class="selector">
	  <option  value="Informatica I">Informatica I</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_9' class="input"></td>
  </tr>
  <tr>
    <td class="celda">10</td>
    <td class="celda"><select name='asignatura_10' class="selector">
	  <option  value="Tecnica y Pract. de  Adm y Tu">Tecnica y Pract. de  Adm y Tu</option> 
    <option  value="Practicas de Oficina">Practicas de Oficina</option> 





</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input  name='nota_10' class="input"></td>
  </tr>
  <tr>
    <td class="celda">11</td>
    <td class="celda"><select name='asignatura_11' class="selector">
	  <option  value="Teoria Gral. de Seguro">Teoria Gral. de Seguro</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_11' class="input"></td>
  </tr>
  <tr>
    <td class="celda">12</td>
    <td class="celda"><select  name='asignatura_12' class="selector">
	  <option  value="Instruccion Premilitar">Instruccion Premilitar</option> 
</select></td>
    <td class="celda">&nbsp;</td>
    <td class="celda"><input name='nota_12' class="input"></td>
  </tr>
</table>

</div>
<input type='submit' value='Guardar' >
</div>





</form>









</body>
