

<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SItio WEB Francisco Duarte</title> 
<meta name="keywords" content="pink round theme, web design, free css template," /> 
<meta name="description" content="Pink Round Theme, free CSS template, web design" /> 
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href=".css/style.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  
 <script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="validacion.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

<style type="text/css">
<!--
body {
	background-color: #0a3b64;
}
-->
</style></head>
<body>

<div id="templatemo_wrapper">
	
     <?php include_once 'include/header.php' ?>
        
        
        <div id="templatemo_menu">
            <?php include_once 'menu.php' ?>    	
        </div> <!-- end of templatemo_menu -->
        
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
    	
		
		<div class="cleaner h10"></div>
	</div> <!-- end of templatemo_middle -->
    
    <div id="templatemo_main">
    	<div id="content_title">
        	Acceso       </div>
      <div id="templatemo_content">
	<div id="login">  
<?php
if (!$_SESSION['autenticado'])
{

echo "
<!-- el Formulario -->
<fieldset class='fieldset'>
    <legend>Formulario de Acceso </legend>
    <form name='miformulario' method='post' action='sesion.php'>
    ";
    ?>
      
    <?php
    echo "<br>";
    echo "<label>Usuario :
            <input name='txtusuario' class='input' type='text' id='txtusuario' size='20' maxlength='12' placeholder=' usuario' value=''>
    </label> <br><br>";
    ?>

    <?php
    echo "<label>Clave :
            <input name='txtclave' class='input'  type='password' id='txtclave' size='20' maxlength='12' placeholder=' clave' value=''>
    </label><br>";
    ?>


        <?php
if($_GET['error']=='si')
{
    echo "<span class='error'>Verificca los datos</span>";
}
?> 
    <?php   
    // Boton Enviar
    echo "<br><label><input class='boton' name='BtnEnviar' type='submit' id='BtnEnviar' value='' /></label>";
    ?>


<?php
echo "
</form>

</fieldset> ";
?>
<?php
}
else
{
    echo "Bienvenido al Portal WEB".$SESSION['usuario'];
}
?>




</div>




        </div> <!-- end of templatemo_content -->
    </div> <!-- end of templatemo_main -->
    
    <div id="templatemo_footer">
    	
         <?php include_once '../include/footer.php' ?>
        
    </div> <!-- end of footer wrapper -->



</div> <!-- end of wrapper -->

<div id="divicion"></div>
<div id="divicion2"></div>

<div id="footer2"></div>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>