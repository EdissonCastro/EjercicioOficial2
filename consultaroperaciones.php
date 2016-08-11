<!DOCTYPE html>
<html>
<head>
	<title>Consulta de operaciones</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">

	<?php include("encabezado.php"); ?>

    <?php include("barranav3.php"); ?>
    
    
    
        
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
				
                    echo "<table>";
                    echo "<tr><th>N° Registro</th>";
                    echo "<th>Operación</th></tr>";
                    
                   	for( $i = 0; $i < $result->num_rows; $i++)
					{
						$fila = $result->fetch_assoc();
						
						echo "<tr>";
						
						foreach( $fila as $valor )
                        {
                            
                            echo "<td>$valor</td>";
                            
                        }// fin foreach
						
						echo "</tr>";
					}
                        
                         
                        
                
                    echo "</table>";		
                }
				
                    
            ?>
       
    
    	<?php include("piepagina.php"); ?>
        
</div>
</body>
</html>