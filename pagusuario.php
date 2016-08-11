<?php
	include("seguridad.php");
	
	if(!sesion_iniciada())
	{
		header("Location:index.html");
	}
?>
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
        
        <?php include("barranav1.php"); ?>
        
        <aside>
            <div class="sesion">
                Usuario:
                <?php				
                    printf("%s<br>", $_SESSION['usuario']);				 
                ?>
            </div>          
            
        </aside>
        
        <section class="divisionForm">  
            
            
            <form method="post" action="acciones.php">
            	<select name="opciones" style="width:60%;">
                	<option value="ninguna">Seleccione una opción</option>
                	<option value="operar">Realizar operaciones</option>
                    <option value="consultar">Consultar operaciones realizadas</option>
                </select>
                <br>
                <button type="submit">Proceder</button>
            </form>       
            
            
                    
        </section>
        
        <?php include("piepagina.php"); ?>
                
	</div>
</body>
</html>
