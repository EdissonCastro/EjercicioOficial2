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
            
            <h1>Acceso al sistema de información:</h1>
            
            <form method="post" action="login.php">
                
                Ingrese su número de documento:  <br>              
                <input type="text" name="documento"><br>
                            
               
               Ingrese su contraseña:	<br>
               <input type="password" name="clave"><br>
                
                
               
               ¿Cuánto es 1 + 1?:<br>
               <input type="text" name="respuesta"><br>
                
                
                <p>
                    <button type="submit">Ingresar</button>
                </p>
            
            </form>
                        
        </section>
        
        
       	<?php include("piepagina.php"); ?>        
    </div>
</body>
</html>