<?php
	include "conexion.php";
	
	$sql1= "select * from tabla1" ;
		$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>ID</th>
	<th>Nombres</th>
	<th>Apellido</th>
	<th>Edad</th>

	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["id_usuario"]; ?></td>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["apellido"]; ?></td>
	<td><?php echo $r["edad"]; ?></td>

	<td style="width:150px;">
		<a href="editar_tabla2.php?id=<?php echo $r["id_usuario"];?>" class="btn btn-sm btn-warning">Editar</a>
		
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
