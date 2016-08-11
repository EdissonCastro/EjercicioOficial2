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
                
                // Toma de datos del formulario de registro:
                $documento = $_POST['documento'];
                $clave = $_POST['clave'];
                $claveConf = $_POST['claveConf'];
                
                if( strcmp( $clave, $claveConf ) != 0 ) 
                {
                    echo "<p>Error: las contraseñas ingresadas no coinciden, intente nuevamente</p>";
					echo "<a href='registro.php'>Intentar de nuevo</a>";
                }
                else
                {
                    if( $_POST['respuesta'] != '2' )
                    {
                        echo "<p>Error: la respuesta a la pregunta de seguridad es incorrecta, intente nuevamente</p>";	
						echo "<a href='registro.php'>Intentar de nuevo</a>";
                    }
                    else
                    {
                        $queryDoc = "SELECT documento FROM usuarios WHERE documento = '$documento';";
                        $resultDoc = $conexion->query( $queryDoc );				
                        $ddocumento = $resultDoc->fetch_assoc();
                        
                        if( !is_null( $ddocumento ) )
                        {
                            echo "<p>Error: el documento $documento ya se encuentra registrado, intente nuevamente</p>";
							echo "<a href='registro.php'>Intentar de nuevo</a>";
                        }
                        else
                        {
                            $queryReg = "INSERT INTO usuarios(documento, clave) VALUES('$documento', '$clave');";
                            $conexion->query( $queryReg ) or die( $conexion->error );
                            echo "<p>Usuario registrado correctamente</p>";
							echo "<a href='index.php'>Ir al inicio</a>";
                        }
                        
                    }						
                }
                
                              
            ?> 	
                    
        </section>
        
        <?php include("piepagina.php"); ?>
        
	</div>
</body>
</html>




