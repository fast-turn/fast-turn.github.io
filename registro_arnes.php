<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Registro arnes</title>
</head>
<body>
	<br>
	<h1 align="center">Ingese la informacion del arnes</h1>
<div align="center">
	<form    method="post" name="reg_inf" id="form" action="logica/con_bd_traza.php" >
		<label>Estacion</label>
		<select name="estacion">
		<option>Corte</option>
		<option>Liberacion/Terminales</option>
		<option>sub-ensable/ ensable</option>
		<option>loom</option>
		<option>calidad</option>
		<option>embarque</option>
	</select>
	<br>
		<label>número de parte </label>
		<input type="text" id="num_part" name="num_part">
		<br>	
		<label>Cliente</label>
		<select name="cliente">
			<option>Atlas</option>
			<option>Utilimaster</option>
			<option>Proterra</option>
			<option>Bergstrom</option>
			<option>Blue_bird</option>
		</select>	
		<br>
		<label>Work order</label>
		<input id="wo" type="text" name="work_ord">
		<br>
		<label>Prioridad</label>
			<select name="prioridad">
				<option>Baja</option>
				<option>Media</option>
				<option>Alta</option>
				
			</select>
		<br>
		<label>Comentarios</label>
		<input type="text" name="coment">
		<br>
		<input type="submit" name="enviar">
</form>

</div>

<br><br>
<div align="center"> Para regresar a la paguína principal haga click aqui
<a href="principal.php" id="return" > Home</a></div>

</body>
</html>
