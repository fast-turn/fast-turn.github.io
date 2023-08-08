<?php 
	require 'conection.php';
	$coment=$_POST['coment'];
	$cliente=$_POST['cliente'];
	$num_part=$_POST['num_part'];
	$estacion=$_POST['estacion'];
	$prioridad=$_POST['prioridad'];
	$work_ord=$_POST['work_ord'];
	date_default_timezone_set('America/Mexico_city');
	$fecha= date('y-m-d H:i');
	$insertar= "INSERT INTO  `registro`(`id`, `fechayhora`, `estacion`, `cliente`, `arnes`, `work_ord`, `Prioridad`, `Comentarios`) VALUES ('','$fecha','$estacion','$cliente','$num_part','$work_ord','$prioridad','$coment')";
	
	$qry= mysqli_query($con,$insertar);

	if($qry){
		header('location:../principal.php');
	}else{
		echo '<script> alert("Incorrecto");</script>';

	}
 ?>