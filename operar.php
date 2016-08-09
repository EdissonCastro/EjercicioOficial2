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
        
        <a href="cerrarsesion.php">Cerrar Sesión</a>
        
 	</header>
    
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
					registrar_operacion( extraer_operacion($_POST['num1'], "+", $_POST['num2']), $_SESSION['usuario'] );  				
				break;
				
				case "resta":
					include("restaclass.php");
					$operacion = new Resta( $_POST['num1'], $_POST['num2'] );
					$operacion->operar();
					registrar_operacion( extraer_operacion($_POST['num1'], "-", $_POST['num2']), $_SESSION['usuario'] );
				break;
				
				case "multiplicacion":
					include("multiplicacionclass.php");
					$operacion = new Multiplicacion( $_POST['num1'], $_POST['num2'] );
					$operacion->operar();
					registrar_operacion( extraer_operacion($_POST['num1'], "*", $_POST['num2']), $_SESSION['usuario'] );
				break;
				
				case "division":
					include("divisionclass.php");
					$operacion = new Division( $_POST['num1'], $_POST['num2'] );
					$operacion->operar();
					registrar_operacion( extraer_operacion($_POST['num1'], "/", $_POST['num2']), $_SESSION['usuario'] );
				break;
				
			}// fin Switch	
			
			function extraer_operacion( $num1, $signo, $num2 )
			{			
				return $num1 . $signo . $num2;
			}// fin extraer_operacion
		
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
