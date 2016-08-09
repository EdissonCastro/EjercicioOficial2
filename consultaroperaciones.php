<!DOCTYPE html>
<html>
<head>
	<title>Consulta de operaciones</title>
    <meta charset="utf-8">
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

<?php
	include("seguridad.php");
	include("conexion.php");
	
	if(!sesion_iniciada())
	{
		header("Location:index.html");
	}	
	$consulta = "SELECT idoperaciones, operacion_realizada FROM operaciones WHERE documento = '$_SESSION[usuario]';";
	$result = $conexion->query($consulta);
	
	if( is_null($result) )
	{
		printf("<p>El documento %s no posee operaciones realizadas</p>", $_SESSION['usuario']);
	}
	
	if( !is_null($result) )
	{
		$fila = $result->fetch_assoc();
		
		echo "<table>";
		echo "<tr><th>N° Registro</th>";
		echo "<th>Operación</th></tr>";
		
		
			
			foreach( $fila as $valor )
			{
				
				echo "<td>$valor</td>";
				
			}// fin foreach 
			
	
		echo "</table>";		
	}
		
?>

	<footer>
    	<em>
        	Servicio Nacional de Aprendizaje - SENA
            Mariana Romero, Edisson Castro, Esneider Ardila  &reg;
            Todos los derechos reservados
        </em>    
    </footer>
</body>
</html>