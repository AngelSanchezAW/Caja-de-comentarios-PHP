<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="contenedor">
	<div id="comentarios">
		<?php
                    date_default_timezone_set('UTC'); 
					include("conexion.php");

					$con=conectar();
					$mostrarcomentarios=1;

					if ($mostrarcomentarios==1){
					$query="select * from comentariosphp";
					$resultado=mysql_query($query,$con);
					$total=mysql_num_rows($resultado);
					
					
					
					
					
					$cont="0";
					while($dato=mysql_fetch_array($resultado)){
						
						
							    echo "<p id='numero'>".$dato['id']."</p>"."<p id='comentario'>".$dato['comentario']."</p>";
					
						 $cont++;
						
					}

			
					}
				?>
	<div>	
	<form method="post" action="cargar.php">
		<textarea id="cajacomentarios" cols="100%" name="mensaje" required="" rows="8" placeholder="Escriba aquí"></textarea><br/><br/>
		<input type="submit" name="Guardar" value="Comentar">
	</form>
	</div>	
</body>
</html>	