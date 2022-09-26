<?php
	include "conexion.php";
	
	$json = file_get_contents("php://input");
	$datos = json_decode($json,true);

	$id = $_GET["id"];


	$sql1= "delete from tabla1 where id = ".$id;
		$query = $con->query($sql1);
		//echo $sql1;

		if($query!=null){
			$mensaje = "registro eliminado satisfactoriamente";
			$data = [];
		
			$data[] = [ 'mensaje' => $mensaje];
		
			echo json_encode($data);
		
			}else{
				print "<script>alert(\"No se pudo eliminar el registro de la tabla 2.\");</script>";
			}
?>
