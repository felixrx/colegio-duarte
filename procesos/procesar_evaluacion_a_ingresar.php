
<?php

include('../conexion/conexion2.php');
$conexion=conectar();
?>

<!DOCTYPE html>
<html>
<head><title>Enviar datoe</title>	</head>
<body>


<?php 

$id_c=$_POST['id_c'];
$nb=$_POST['nb'];
$ap=$_POST['ap'];
$fc_n=$_POST['fc_n'];
$eda=$_POST['eda'];
$gene=$_POST['gene'];
$lu_n=$_POST['lu_n'];
$ent_f=$_POST['ent_f'];
$esta_ci=$_POST['esta_ci'];
$ta=$_POST['ta'];
$pso=$_POST['pso'];
$impedi_f=$_POST['impedi_f'];
$dir_ha=$_POST['dir_ha'];
$muni=$_POST['muni'];
$parro=$_POST['parro'];
$tel_h=$_POST['tel_h'];
$tel_m=$_POST['tel_m'];
$corr=$_POST['corr'];
$etni=$_POST['etni'];
$alergi=$_POST['alergi'];
$plan=$_POST['plan'];
$be=$_POST['be'];
$org=$_POST['org'];






?>
<?php 

function execute($id_c, $nb, $cd_r, $nb_r, $nb_m, $cd_m) 
{ 
$q1= "INSERT INTO alumnos (id_c,nb) values ('$id_c','$nb', '$nb' , '$nb' , '$nb' , '$nb' , '$nb' )"; 
$resultquery = mysql_query($q1); 
$errores = mysql_errno(); 

$q2= "INSERT INTO representante (cd_r,nb_r,id_c) values ('$cd_r','$nb_r','$id_c')"; 
$resultquery = mysql_query($q2); 
$errores = mysql_errno();


$q3= "INSERT INTO padres (nb_m, cd_m,id_c) values ('$nb_m','$cd_m', '$id_c')"; 
$resultquery = mysql_query($q3); 
$errores = $errores + mysql_errno(); 
return $errores; 
} 

$result = execute($id_c, $nb, $cd_r, $nb_r,$nb_m, $cd_m); 

if ($result == 0) { 
echo "Todo Ok"; 
}  
else 
{ 
echo "Error al insertar datos" ;
}  
?>


 



</body>