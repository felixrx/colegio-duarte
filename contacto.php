<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sitio WEB Colegio Francisco Duarte</title>  
<meta name="keywords" content="pink round, web design, contact form, free template" /> 
<meta name="description" content="Pink Round Theme, Contact Form, Free Template" /> 
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  
 <script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="validacion.js"></script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
});
</script>

</head>
<body>

<div id="templatemo_wrapper">
	
     <?php include_once 'include/header.php' ?>
        
        
        <div id="templatemo_menu">
             <?php include_once 'menu.php' ?>
        </div> <!-- end of templatemo_menu -->
        
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
        <h2>Informacion de Contacto</h2>
            <p>Coctantanos a traves de nuestro correos y telefonos.</p>
	</div> <!-- end of templatemo_middle -->
    
    <div id="templatemo_main">
    	<div id="content_title">
        	Informacion de Contacto
        </div>
        <div id="templatemo_content">
	 		
            <div class="col_w420 float_l">
                  <h3> Formulario de Contacto</h3>
      <div id="cp_contact_form">
                        <form method="post" name="contact" action="#">
						<label for="author">Nombre:</label> <input type="text" id="author" name="author" class="required input_field" />
						<div class="cleaner h10"></div>
									
						<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
						<div class="cleaner h10"></div>
							
						<label for="subject">Asunto:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
						<div class="cleaner h10"></div>
			
						<label for="text">Mensaje:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
						<div class="cleaner h10"></div>                
								
						<input type="submit" value="Enviar" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Limpiar" id="reset" name="reset" class="submit_btn float_r" />
					</form>
        
                    </div>
                   
                </div>
                
                <div class="col_w420 float_r">
                    <h3>Nuestra Ubicacion</h3>
                    <div id="map">
                    <a href="images/map_big.jpg" >
                        <img src="imagenes/mapa.jpg"  />
                    </a>
                    </div>
    
                    <div class="cleaner h30"></div>
                                    
                    <h3>Direccion <a href="http://es.hdstockphoto.com" title="foto" rel="nofollow" class="Testimonial_like" ></a></h3>
                    
                    440-770 Sed vestibulum interdum,<br />
					Donec vitae risus lorem, 12600 <br />
					Morbi tempor metus<br /><br />

					Tel: 010-060-0440<br />
					Fax: 010-060-0880<br />
					<br />
 <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong></strong></a>  <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong></strong></a>
                </div>
            
                <div class="cleaner"></div>
        </div> <!-- end of templatemo_content -->
    </div> <!-- end of templatemo_main -->
    
    <div id="templatemo_footer">
    	
                 <?php include_once 'include/footer.php' ?>
        
    
    </div> <!-- end of footer wrapper -->

</div> <!-- end of wrapper -->

<div id="divicion"></div>
<div id="divicion2"></div>

<div id="footer2"></div>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>