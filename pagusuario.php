<?php
	include("seguridad.php");
	
	if(!sesion_iniciada())
	{
		header("Location:index.html");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Operaciones</title>
<link rel="stylesheet" href="estilos.css"> 
</head>
<body>
	<header>
		<strong>Operaciones matemáticas</strong>
                
        <p>
            Sistema de información web para el desarrollo
            de operaciones matemáticas
    	</p>
        
        <a href="cerrarsesion.php">Cerrar Sesión</a>
        
 	</header>
    
    <aside>
    	<p>
        	Usuario:
            <?php				
				printf("%s", $_SESSION['usuario']); 
			?>
        </p>
    </aside>
    
    <section>
    
    	Seleccione una opción:
        <a href="operaciones.php">Realizar operaciones</a>
        <a href="consultaroperaciones.php">Consultar operaciones realizadas</a>
                
    </section>
    
    <footer>
    	<em>
        	Servicio Nacional de Aprendizaje - SENA
            Mariana Romero, Edisson Castro, Esneider Ardila  &reg;
            Todos los derechos reservados
        </em>    
    </footer>
</body>
</html>
