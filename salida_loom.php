<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">

	<title>salidas loom</title>
</head>
<body>
  <h1 align="center">Ingrese la cantida que se retiro</h1>

<form id="loom"  method="POST" action="" >
                <p align="center">

    <label>Tamaño de loom</label>
             <select name="t_loom">
                            <option value="1">1/4"</option>
                            <option value="2">3/8"</option>
                            <option value="3">1/2"</option>
                            <option value="4">3/5"</option>
                            <option value="5">3/4"</option>
                            <option value="6">1"</option>
                            <option value="7">1 1/2"</option>
                            <option value="8">2"</option>
		
      </select>
      
      </p>
       
	
	<p align="center" >
		<label id="tam" >cantidad de taras</label>
		<input type="text" name="cant_taras">
		<br>
		<label id="p_retiro">Que empleado retiro </label>
		<input type="text" name="NoEmpl">
	</p>
	<center>
	<input id="enviar" type="submit" name="send" value="send"/>
</center>

</form>


<div align="center"> Haga click aquí para regresar a 
<a href="loom.php" id="return" > Loom</a></div>
</body>
</html>