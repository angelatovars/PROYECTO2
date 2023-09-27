<?php 
	$NAMEHOSTBD = 'localhost';
	$USERNAMEBD = 'root';
	$PASSWORDBD = '';
	$BDNAME     = 'productos';

	$conectar = mysqli_connect($NAMEHOSTBD, $USERNAMEBD, $PASSWORDBD, $BDNAME);
	if (!$conectar) {
			/*echo "No se pudo conectar a la Base de DATOS";*/
	}else{
			/*echo "Conexion Exitosa a la Base de DATOS";*/
	}
?>