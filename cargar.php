<?php
	include("conexion.php");
	$con=conectar();

	if(isset($_REQUEST['Guardar'])){
		
		$m=$_REQUEST['mensaje'];

		$query="insert into comentariosphp values('','$m')";

		$dato=mysql_query($query,$con);

		if(!$dato){
			echo "No se Inserto los datos";
		}else{
			echo "Se insertaron los datos correctamente";
		}
        echo "<a href='index.php'>Regresar</a>";
	}

	header('Location: index.php');
?>