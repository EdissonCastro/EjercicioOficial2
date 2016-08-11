<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Operaciones</title>
    <link rel="stylesheet" href="estilos.css">    
</head>
<body>
	<div class="contenedor">
        
        <?php include("encabezado.php"); ?>
        
        <section>
        
            <?php  		
                session_start();
                include("registraroperacion.php");
                
                switch($_POST['operaciones'])
                {
                    case "suma":
                        include("sumaclass.php");
                        $operacion = new Suma( $_POST['num1'], $_POST['num2'] );
                        $operacion->operar();	
                        registrar_operacion( extraer_operacion($_POST['num1'], " + ", $_POST['num2']), $_SESSION['usuario'] );
						echo "<a href='pagusuario.php'>Regresar</a>";  				
                    break;
                    
                    case "resta":
                        include("restaclass.php");
                        $operacion = new Resta( $_POST['num1'], $_POST['num2'] );
                        $operacion->operar();
                        registrar_operacion( extraer_operacion($_POST['num1'], " - ", $_POST['num2']), $_SESSION['usuario'] );
						echo "<a href='pagusuario.php'>Regresar</a>";
                    break;
                    
                    case "multiplicacion":
                        include("multiplicacionclass.php");
                        $operacion = new Multiplicacion( $_POST['num1'], $_POST['num2'] );
                        $operacion->operar();
                        registrar_operacion( extraer_operacion($_POST['num1'], " * ", $_POST['num2']), $_SESSION['usuario'] );
						echo "<a href='pagusuario.php'>Regresar</a>";
                    break;
                    
                    case "division":
                        include("divisionclass.php");
                        $operacion = new Division( $_POST['num1'], $_POST['num2'] );
                        $operacion->operar();
                        registrar_operacion( extraer_operacion($_POST['num1'], " / ", $_POST['num2']), $_SESSION['usuario'] );
						echo "<a href='pagusuario.php'>Regresar</a>";
                    break;
					
					
                    
                }// fin Switch	
				
				
                
                function extraer_operacion( $num1, $signo, $num2 )
                {			
                    return $num1 . $signo . $num2;
                }// fin extraer_operacion
            
            ?>
                    
        </section>
        
        <?php include("piepagina.php"); ?>        
        
	</div>
</body>
</html>
