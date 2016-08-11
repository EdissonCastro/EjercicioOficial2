<?php
    // Inclusión de capa de seguridad:
	include("seguridad.php");
	
	if( !sesion_iniciada() )
	{
		header("Location:index.html");
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
	<div class="contenedor">
    
    	<?php include("encabezado.php"); ?>
        
        <?php include("barranav2.php"); ?>
        
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
        
        <?php include("piepagina.php"); ?>        
          
    </div>    
</body>
</html>
