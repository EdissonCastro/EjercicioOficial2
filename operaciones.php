<?php
    // Inclusión de capa de seguridad:
	include("seguridad.php");
	
	if( !sesion_iniciada() )
	{
		header("Location:ingreso.html");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Operaciones</title>
<link href="estilos.css" rel="stylesheet">
</head>
<body>
	<header>
		<strong>Operaciones matemáticas</strong>
                
        <p>
            Sistema de información web para el desarrollo
            de operaciones matemáticas
    	</p>
 	</header>
    
    <section class="divisionForm">
    
    	<form method="post" action="operar.php">
        	Ingrese primer número:<br>
            <input type="text" name="num1"><br>          
            
            Ingrese segundo número:<br>
            <input type="text" name="num2"><br>
                    
            
            <select name="operaciones">
               	<option value="ninguna">Seleccione operación a realizar</option>
                   <option value="suma">Suma</option>
                   <option value="resta">Resta</option>
                   <option value="multiplicacion">Multiplicación</option>
                   <option value="division">División</option>
            </select>  
                        
           	<br><button type="submit">Operar</button>                 
            
        </form>	
    	
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
