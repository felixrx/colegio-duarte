<?php
include ("../conexion/conexion2.php");
$conexion=Conectar();

$id_c=$_POST['id_c'];

$SQL="delete from alumnos where id_c='$id_c'";
$registros = mysql_query($SQL, $conexion);
if(!$registros)
{
echo "ERROR AL ELIMINAR";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('REGISTRO ELIMINADO')
window.location='../administrador.php' 
</script>
";
?>