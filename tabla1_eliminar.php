<?php
	include "conexion.php";
	
	$json = file_get_contents("php://input");
	$datos = json_decode($json,true);

	$id_usuario = $_GET["id_usuario"];


	$sql1= "delete from tabla1 where id_usuario = ".$id_usuario;
		$query = $con->query($sql1);
		//echo $sql1;

		if($query!=null){
			$mensaje = "registro eliminado satisfactoriamente";
			$data = [];
		
			$data[] = [ 'mensaje' => $mensaje];
		
			echo json_encode($data);
		
			}else{
				print "<script>alert(\"No se pudo eliminar el registro de la tabla 1.\");</script>";
			}
?>
