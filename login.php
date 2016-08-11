<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos.css">
<title>Operaciones</title>
</head>
<body>
	<div class="contenedor">
    	
		<?php include("encabezado.php"); ?>
        
        <section class="division">
            
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
						echo "<a href='ingreso.php'>Regresar</a>";
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
       
       	<?php include("piepagina.php"); ?> 
       
	</div>
</body>
</html>




