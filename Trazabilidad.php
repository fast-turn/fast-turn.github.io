<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Trazabilidad</title>

</head>
<body>


	<?php require 'logica/actualizar.php' ?>
	 <div > <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless></iframe> </div>

	<br>
	<div align="center" id="title"><h1>Donde esta el harnes. </h1></div>

	<div align="center" id="tab_traz">
		<table align="center" >
		<tr>
			<th>Fecha y hora</th>
			<th>Estacion actual</th>
			<th>No. Arnes</th>
			<th>Cliente</th>
			<th>Work order</th>
			<th>Prioridad</th>
			<th>Comentarios</th>
			<th>Paro</th> 
		</tr>
		<?php  
		foreach ($qry as $row) {
			?>


		</script>
			<tr name="tabla">
				<td >

		</script><?php echo $row['fechayhora']; ?></td>
				<td bgcolor="Khaki"><?php echo $row['estacion']; ?></td>
        <td bgcolor="pink"><?php echo $row['arnes']; ?></td>
				<td bgcolor="Khaki"><?php echo $row['cliente']; ?></td>
        <td bgcolor="pink"><?php echo $row['work_ord']; ?></td>
        <?php if($row['Prioridad'] == 'Alta'){?>
        <td id="Alta" bgcolor="red"><?php echo $row['Prioridad']; ?></td>
        <?php }?> 
        <?php if($row['Prioridad'] == 'Media'){?>
        <td id="Media" bgcolor="yellow"><?php echo $row['Prioridad']; ?></td>
        <?php }?> 
        <?php if($row['Prioridad'] == 'Baja'){?>
        <td id="Baja" bgcolor="lightgreen"><?php echo $row['Prioridad']; ?></td>
        <?php }?> 	
    		<td bgcolor="Khaki"><?php echo $row['Comentarios']; ?></td>
			<td id="paro">
				<select>
				<option id="nin">Ninguno</option>
				<option id="cal">calidad</option>
				<option id="man">Mantenimiento</option>
				<option id="ing">Ingenieria</option>
				 


			</select>
		

		</script>
			
</td>

			<?php } ?>


	</table>

	<div align="center">
		<a href="Trazabilidad.php"><input type="submit" name="actualizar" value="Actalizar" /></a>
	</div>
	</div>
	<br><br><br>
<div align="center"> Para regresar a la paguína principal haga click aqui
<a href="principal.php" id="return" > Home</a></div>

</body>
</html>