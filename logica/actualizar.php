<?php  
require 'conection.php';
 
 $consult = "SELECT * FROM registro";
 $qry= mysqli_query($con,$consult);
 $array = mysqli_fetch_array($qry);


?>