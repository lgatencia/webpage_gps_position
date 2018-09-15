<?php
	$servidor="localhost";
	$dbusuario="root";
	$dbpass="";
	$dbnombre="location";

	$conex=new mysqli($servidor,$dbusuario,$dbpass,$dbnombre);

	if($conex ->connect_errno>0){

		die("imposible conectarse".$conex ->connect_error);

		
	}
?>

