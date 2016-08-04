<?php
    // Inclusión de capa de seguridad:
	include("seguridad.php");
	
	if( !sesion_iniciada() )
	{
		header("Location:ingreso.html");
	}
	
	if( sesion_iniciada() )
	{		
?>

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
    
    	<form method="post" action="operar.php">
        	<p>
            	Ingrese primer número:
                <input type="text" name="num1">
            </p>
            
            <p>
            	Ingrese segundo número:
                <input type="text" name="num2">
            </p>
            
            <p>
            	<select name="operaciones">
                	<option value="ninguna">Seleccione operación a realizar</option>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
            </p>
            
            <p>
            	<button type="submit">Operar</button>
            </p>      
            
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
<?php
	}
?>