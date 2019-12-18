


<?php 



include("../conexion/conexion2.php");

$conexion=conectar();
?>

<?php 


$id_c = $_POST['id_c'];
$asignatura_1 = $_POST['asignatura_1'];
$asignatura_2 = $_POST['asignatura_2'];
$asignatura_3 = $_POST['asignatura_3'];
$asignatura_4 = $_POST['asignatura_4'];
$asignatura_5 = $_POST['asignatura_5'];
$asignatura_6 = $_POST['asignatura_6'];
$asignatura_7 = $_POST['asignatura_7'];
$asignatura_8 = $_POST['asignatura_8'];
$asignatura_9 = $_POST['asignatura_9'];
$asignatura_10 = $_POST['asignatura_10'];
$asignatura_11 = $_POST['asignatura_11'];
$asignatura_12 = $_POST['asignatura_12'];

$nota_1 = $_POST['nota_1'];
$nota_2 = $_POST['nota_2'];
$nota_3 = $_POST['nota_3'];
$nota_4 = $_POST['nota_4'];
$nota_5 = $_POST['nota_5'];
$nota_6 = $_POST['nota_6'];
$nota_7 = $_POST['nota_7'];
$nota_8 = $_POST['nota_8'];
$nota_9 = $_POST['nota_9'];
$nota_10 = $_POST['nota_10'];
$nota_11 = $_POST['nota_11'];
$nota_12 = $_POST['nota_12'];

$a_o = $_POST['a_o'];
$seccion = $_POST['seccion'];
$a_o_escolar = $_POST['a_o_escolar'];
$mencion = $_POST['mencion'];



$sql="insert informe_de_evaluacion (id, id_c, asignatura_1, asignatura_2,asignatura_3, asignatura_4, asignatura_5, asignatura_6, asignatura_7, asignatura_8, asignatura_9, asignatura_10, asignatura_11, asignatura_12,  nota_1,  nota_2,  nota_3,  nota_4,  nota_5,  nota_6,  nota_7,  nota_8,  nota_9,  nota_10,  nota_11,  nota_12, a_o, seccion, a_o_escolar, mencion) values(null,'$id_c','$asignatura_1','$asignatura_2','$asignatura_3','$asignatura_4','$asignatura_5','$asignatura_6','$asignatura_7', '$asignatura_8', '$asignatura_9', '$asignatura_10', '$asignatura_11', '$asignatura_12','$nota_1','$nota_2','$nota_3','$nota_4','$nota_5','$nota_6','$nota_7','$nota_8','$nota_9','$nota_10','$nota_11','$nota_12','$a_o', '$seccion', '$a_o_escolar' , '$mencion')";
$registro=mysql_query($sql,$conexion);
if(!$registro)
{
echo"
<script language='javascript'>
alert('ERROR AL GUARDAR DATOS, PROBABLE CLAVE REPETIDA')
window.location='../administrador.php'
</script>";
exit();
}
else
{
echo"
<script language='javascript'>
alert('DATOS GUARDADOS CORRECTAMENTE')
window.location='../administrador.php'
</script>";
}
?>

 
</body>