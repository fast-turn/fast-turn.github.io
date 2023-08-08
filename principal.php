<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Home</title>
</head>
<body>
<?php
	require 'logica/actualizar.php'
  ?> 
 <small style="float:right"><a href="log_out.php" id=logout>Cerrar la sesión</a></small>
<div><h1 align="center">Welcome to Fast turn Harness</h1></div>
<hr id= "separador">

<ul>
  <li><a href="loom.php">Loom</a> </li>
  <li><a href="conectores.php">conectores</a></li>
   <li><a href="cable.php">cable</a></li>
   <li><a href="trazabilidad.php">Trazabilidad</a></li>
   	<li><a href="registro_arnes.php">Ingreso de arnes</a></li>
</ul>
 <br><br>
	<table align="center" >
		<tr>
			<th>Fecha y hora</th>
			<th>Estacion actual</th>
			<th>No. Arnes</th>
			<th>Cliente</th>
			<th>Work order</th>
			<th>Prioridad</th>
			<th>Comentarios</th>
		</tr>

		<?php  
		
			foreach ($qry as $row) {
			 	// code...
			  	if ($row['cliente'] == 'Atlas') {
					if($row['estacion']!='embarque'){

?>
			<tr>
				<td bgcolor="pink"><?php echo $row['fechayhora']; ?></td>
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
			</tr>

			<?php
			} } } ?>
		


	</table>
<br><br>
	 <br><br>
	<table align="center" >
		<tr>
			<th>Fecha y hora</th>
			<th>Estacion actual</th>
			<th>No. Arnes</th>
			<th>Cliente</th>
			<th>Work order</th>
			<th>Prioridad</th>
			<th>Comentarios</th>
		</tr>

		<?php  
		
			foreach ($qry as $row) {
			 	// code...
			  
				if ($row['cliente'] == 'Utilimaster') {
					if($row['estacion']!='embarque'){

?>
			<tr>
				<td bgcolor="pink"><?php echo $row['fechayhora']; ?></td>
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
			</tr>

			<?php 
		}
		}
	} ?>
		


	</table>
	<br><br>
	<div align="center">
		<a href="principal.php"><input type="submit" name="actualizar" value="Actalizar" /></a>
	</div>


</body>
</html>