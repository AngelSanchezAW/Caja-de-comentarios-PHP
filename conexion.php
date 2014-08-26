<?php
	function conectar(){
		$user="usuario";
		$pass="contraseña";
		$server="localhost";
		$db="comentarios";
		$con=mysql_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".mysql_error());
		mysql_select_db($db,$con);

		return $con;
	}
?>
