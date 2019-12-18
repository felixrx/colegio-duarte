
         
            <ul>
                <li><a href="index.php" class="current">Inicio</a></li>
                <li><a href="nosotros.php" class="current">Nosotros</a></li>
                <li><a href="inscripcion.php" class="current">Inscripcion</a></li>
                <li><a href="administrador.php" class="current">Administrador</a></li>
                <li ><a href="contacto.php" class="current">Contactos</a></li>

                 <?php
                error_reporting(E_ERROR | E_PARSE);
                session_start();

                 if($_SESSION['autenticado'])
                 {
                    echo    "<li><a href='salir.php' class='current' >Salir</a></li>";
                 }
                ?>
            </ul>    	
        