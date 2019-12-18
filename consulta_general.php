<?php
include("conexion/conexion2.php");
$conexion=conectar();
?>

 <link rel="stylesheet" type="text/css" href="css/notas.css">
<br><br>
<center><h2><b>CONSULTA DE ALUMNOS</b></h2>



<table class="tabla" width="900" border="1" align="center">




    	<tr align="center">
      		<td class="celda1" bgcolor="#1a89d8">CEDULA</td>
      		<td class="celda1" bgcolor="#1a89d8">NOMBRE</td>
      		<td class="celda1" bgcolor="#1a89d8">APELLIDO</td>
            <td class="celda1" bgcolor="#1a89d8">CORREO</td>
            <td class="celda1" bgcolor="#1a89d8">TELEFONO</td>
           
    	</tr>








    	<?php 
		$consulta=mysql_query("select * FROM alumnos");
		$cantidad = mysql_num_rows($consulta);
	    if (isset($_POST['buscar'])){
			$consulta=mysql_query("select * FROM alumnos where id_c like '%".$_POST['buscar']."%'");
		}
	
		while($filas=mysql_fetch_array($consulta)){
			$id_c=$filas['id_c'];
			$nb=$filas['nb'];
			$ap=$filas['ap'];
			$corr=$filas['corr'];
			$tel_h=$filas['tel_h'];
		
        ?>
    	<tr>
      		<td><?php echo $id_c ?></td>
      		<td><?php echo $nb ?></td>
            <td><?php echo $ap ?></td>
      		<td align="center"><?php echo $corr ?></td>
            <td align="center"><?php echo $tel_h ?></td>
           
      		
      	<?php }?>
   	  </table>
</p>
<p align="center">

</p>
</body>
</html>
