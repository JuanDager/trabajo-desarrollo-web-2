<?php

include "conexion.php";

$json = file_get_contents("php://input");
$datos = json_decode($json,true);

$nombre = $datos["nombre"];
$apellido = $datos["apellido"];
$edad = $datos["edad"];
$id_usuario = $datos["id_usuario"];

		
$sql = "update tabla1 set nombre = '".$nombre."',   
                        apellido = '".$apellido."',
     					edad = ".$edad."
			where id_usuario = ".$id_usuario;
			$query = $con->query($sql);		
		
			if($query!=null){    
            echo json_encode($json);
			}else{
				print "<script>alert(\"No se pudo agregar el tabla1.\");</script>";
			}
	
?>