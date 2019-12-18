<?php





include("../conexion/conexion2.php");

?>

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



$SQL="UPDATE alumnos set id_c='$id_c', nb='$nb', id_c='$id_c' , ap='$ap' , fc_n='$fc_n' , eda='$gene' , lu_n='$lu_n' , ent_f='$ent_f' , esta_ci='$esta_ci' , ta='$ta'  , pso='$pso' , impedi_f='$impedi_f' , dir_ha='$dir_ha' , muni='$muni' , parro='$parro' , tel_h='$tel_h' ,corr='$corr', etni='$etni' , alergi='$alergi', plan='$plan', be='$be', org='$org' WHERE id_c='$id_c' ";
$registros = mysql_query($SQL);



$SQL2="UPDATE representante set id_c='$id_c', nb_r='$nb_r', cd_r='$cd_r' WHERE id_c='$id_c' ";
$registros = mysql_query($SQL2);


$SQL3="UPDATE padres set id_c='$id_c', nb_m='$nb_m', cd_m='$cd_m' WHERE id_c='$id_c' ";
$registros = mysql_query($SQL3);

if(!$registros)
{
echo "ERROR AL CAMBIAR LOS DATOS";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('LOS DATOS HAN SIDO MODIFICADOS')
window.location='../administrador.php' 
</script>
";
?>
