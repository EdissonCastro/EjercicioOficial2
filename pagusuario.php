<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Operaciones</title>
</head>
<body>
	<header>
		<strong>Operaciones matemáticas</strong>
                
        <p>
            Sistema de información web para el desarrollo
            de operaciones matemáticas
    	</p>
 	</header>
    
    <aside>
    	<p>
        	Usuario:
            <?php
				session_start();
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
