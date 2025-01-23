<?php

	/*Datos de conexion a la base de datos*/
	define('DB_HOST', 'sacyp.mx');//DB_HOST:  generalmente suele ser "127.0.0.1"
	define('DB_USER', 'level3dw_dev');//Usuario de tu base de datos
	define('DB_PASS', 'iQHVaIs6iVU%');//Contraseña del usuario de la base de datos
	define('DB_NAME', 'level3dw_ticketly');//Nombre de la base de datos

	$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        @die("<h2 style='text-align:center'>Imposible conectarse a la base de datos! </h2>".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        @die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>