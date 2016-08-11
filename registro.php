<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos.css">
<title>Documento sin título</title>
</head>

<body>
	<div class="contenedor">
		<?php include("encabezado.php"); ?>
        
        <section class="divisionForm">
        
            <h1>Registro al sistema</h1>
            
            <form method="post" action="registrar.php">
                
                Documento:<br>
                <input type="text" name="documento"><br>
                
                Contraseña:<br>
                <input type="password" name="clave"><br>
                
                Confirme su contraseña:<br>
                <input type="password" name="claveConf"><br>
                
                ¿Cuánto es 1 + 1?:<br>
                <input type="text" name="respuesta"><br>          
                
                <button type="submit">Registrarse</button>
               
            </form>
                    
        </section>
        
        <?php include("piepagina.php"); ?>
	</div>
</body>
</html>