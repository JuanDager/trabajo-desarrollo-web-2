<?php

include "conexion.php";

$json = file_get_contents("php://input");
$datos = json_decode($json,true);

$nombre = $datos["nombre"];
$apellido = $datos["apellido"];
$edad = $datos["edad"];

		
			$sql = "insert into tabla1( nombre, apellido, edad)
								values ('".$nombre."',
                                          '".$apellido."',
                                          ".$edad.")";
			$query = $con->query($sql);		
		
			if($query!=null){    
            echo json_encode($json);
			}else{
				print "<script>alert(\"No se pudo agregar el tabla1.\");</script>";
			}
	
?>