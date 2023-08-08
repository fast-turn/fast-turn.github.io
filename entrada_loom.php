<?php
  include("registro_loom.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">

	<title>entradas loom</title>
</head>
<body>

  <h1 align="center">Ingrese de la informacion correct para ingreso de loom al almacen</h1>

<form id="loom"  method="POST" action="entrada_l.php" >
                <p align="center">

    <label>Tamaño de loom</label>
             <select name="t_loom">
                            <option name="1">1/4</option>
                            <option name="2">3/8</option>
                            <option name="3">1/2</option>
                            <option name="4">5/8</option>
                            <option name="5">3/4</option>
                            <option name="6">1</option>
                            <option name="7">1_1/4</option>
                            <option name="8">1_1/2</option>
                            <option name="9">2</option>
		
      </select>
      
      </p>
       
	
	<p align="center" >
		<label  >cantidad de taras</label>
		<input type="text" name="tara">
	</p>
	<center>
	<input id="enviar" type="submit" name="send" value="send"/>
</center>

</form>

<div align="center"> Haga click aquí para regresar a
<a href="loom.php" id="return" > Loom</a></div>
</body>
</html>
 