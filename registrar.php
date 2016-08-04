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
			
			// Toma de datos del formulario de registro:
			$documento = $_POST['documento'];
			$clave = $_POST['clave'];
			$claveConf = $_POST['claveConf'];
			
			if( strcmp( $clave, $claveConf ) != 0 ) 
			{
				echo "<p>Error: las contraseñas ingresadas no coinciden, intente nuevamente</p>";
			}
			else
			{
				if( $_POST['respuesta'] != '2' )
				{
					echo "<p>Error: la respuesta a la pregunta de seguridad es incorrecta, intente nuevamente</p>";	
				}
				else
				{
					$queryDoc = "SELECT documento FROM usuarios WHERE documento = '$documento';";
					$resultDoc = $conexion->query( $queryDoc );				
					$ddocumento = $resultDoc->fetch_assoc();
					
					if( !is_null( $ddocumento ) )
					{
						echo "<p>Error: el documento $documento ya se encuentra registrado, intente nuevamente</p>";
					}
					else
					{
						$queryReg = "INSERT INTO usuarios(documento, clave) VALUES('$documento', '$clave');";
						$conexion->query( $queryReg ) or die( $conexion->error );
						echo "<p>Usuario registrado correctamente</p>";
					}
					
				}						
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




