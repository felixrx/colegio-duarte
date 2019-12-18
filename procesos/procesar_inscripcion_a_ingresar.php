


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






















$cd_r=$_POST['cd_r'];
$nb_r=$_POST['nb_r'];
$ap_r=$_POST['ap_r'];
$fec_r=$_POST['fec_r'];
$eda_r=$_POST['eda_r'];
$ge_r=$_POST['ge_r'];
$parent=$_POST['parent'];
$cor_re=$_POST['cor_re'];
$dir_ha_r=$_POST['dir_ha_r'];
$muni_r=$_POST['muni_r'];
$parro_r=$_POST['parro_r'];
$tel_h_r=$_POST['tel_h_r'];
$tel_m_r=$_POST['tel_m_r'];








$nb_m=$_POST['nb_m'];
$cd_m=$_POST['cd_m'];

$nb_p=$_POST['nb_p'];
$cd_p=$_POST['cd_p'];
$tel_m_p=$_POST['tel_m_p'];
$tel_m_m=$_POST['tel_m_m'];


?>
<?php 
$q1= "INSERT INTO alumnos (id_c,nb,ap,fc_n,eda,gene,lu_n,ent_f,esta_ci,ta,pso,impedi_f,dir_ha, muni, parro, tel_h, tel_m, corr, etni, alergi, plan, be, org) values ('$id_c','$nb','$ap','$fc_n','$eda','$gene','$lu_n','$ent_f','$esta_ci','$ta','$pso','$impedi_f','$dir_ha',  	'$muni',  	'$parro',  	'$tel_h',  	'$tel_m',  	'$corr',  	'$etni',  	'$alergi',  	'$plan',  	'$be',  	'$org')"; 
$registro=mysql_query($q1,$conexion);

$q2= "INSERT INTO representante (cd_r,nb_r,ap_r,fec_r,eda_r,ge_r,parent,cor_re, dir_ha_r, muni_r, parro_r, tel_h_r, tel_m_r, id_c) values ('$cd_r','$nb_r','$ap_r','$fec_r','$eda_r','$ge_r','$parent','$cor_re',  	'$dir_ha_r',  	'$muni_r',  	'$parro_r',  	'$tel_h_r',  	'$tel_m_r','$id_c')"; 
$registro=mysql_query($q2,$conexion);
$q3= "INSERT INTO padres (nb_m, cd_m,tel_m_m,nb_p,cd_p, tel_m_p,id_c) values ('$nb_m','$cd_m','$tel_m_m','$nb_p','$cd_p','$tel_m_p','$id_c')"; 
$registro=mysql_query($q3,$conexion);
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