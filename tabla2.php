<?php
	include "conexion.php";
	
	$sql1= "select * from tabla2" ;
		$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>ID</th>
	<th>usuario</th>
	<th>desc1</th>
	<th>desc2</th>
	<th>fecha</th>
	<th>fecha 2</th>
	<th>num1</th>
	<th>num2</th>
	<th>Email</th>

	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["id"]; ?></td>
	<td><?php echo $r["usuario"]; ?></td>
	<td><?php echo $r["desc1"]; ?></td>
	<td><?php echo $r["desc2"]; ?></td>
	<td><?php echo $r["fecha"]; ?></td>
	<td><?php echo $r["fecha2"]; ?></td>
	<td><?php echo $r["num1"]; ?></td>
	<td><?php echo $r["num2"]; ?></td>
	<td><?php echo $r["email"]; ?></td>

	<td style="width:150px;">
		<a href="editar_tabla2.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
