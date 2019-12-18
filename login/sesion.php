<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Secion con PHP</title>
</head>
<body>
<?php
session_start();

$usuario = $_POST['txtusuario'];
$clave = $_POST['txtclave'];

if ( $usuario=='admin' && $clave =='123')
{
header("Location: administrador.php");
$_SESSION['autenticado']=true;
$_SESSION['usuario']=$usuario;
}
else
{
	header("Location: login.php?error=si");
}
?>
</body>
</html> 