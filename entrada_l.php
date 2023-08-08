<?php 
	require "registro_loom.php";

	$num=$_POST['tara'];
	$loom=$_POST['t_loom'];
	$query = mysqli_query("UPDATE loom_t set loom = ".$loom." WHERE taras = ".$num);


	if($query){
		header('location:entrada_loom.php');
	}else{
		echo '<script> alert("Incorrecto");</script>';

	}
 ?>