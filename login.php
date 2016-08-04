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
    
    <section>
    	
        <?php
			include("conexion.php");							
			
			// Toma de datos del formulario:
			$documento = $_POST['documento'];
			$clave = $_POST['clave'];
			
				
			// Verificación de datos ingresados:
				$queryDoc = "SELECT documento FROM usuarios WHERE documento = '$documento';";
				$queryPass = "SELECT clave FROM usuarios WHERE clave = '$clave';";
				
				$resultDoc = $conexion->query( $queryDoc );
				$resultPass = $conexion->query( $queryPass );
				
				$ddocumento = $resultDoc->fetch_assoc();
				$cclave = $resultPass->fetch_assoc();			 
			
			// Respuesta del script:
		
				if( is_null( $ddocumento ) )
				{
					printf("<p>Error: el documento %s no se encuentra registrado en el sistema</p>", $documento);
				}
				
				if( !is_null( $ddocumento ) && is_null( $cclave ) )
				{
					echo "<p>Error: su contraseña es incorrecta, intentelo nuevamente</p>";
				}
				
				if( strcmp( $documento, $ddocumento ) == 0 && strcmp( $clave, $cclave ) == 0 )
				{
					session_start();
					$_SESSION['usuario'] = $documento;					
					header("Location:pagusuario.php");
				}
		?>
    	
                
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




