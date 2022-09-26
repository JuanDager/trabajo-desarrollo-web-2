<?php

include "conexion.php";

$json = file_get_contents("php://input");
$datos = json_decode($json,true);


$usuario = $datos["usuario"];
$desc1 = $datos["desc1"];
$desc2 = $datos["desc2"];
$fecha = $datos["fecha"];
$fecha2 = $datos["fecha2"];
$num1 = $datos["num1"];
$num2 = $datos["num2"];
$email = $datos["email"];
		
			$sql = "insert into tabla2(usuario, desc1, desc2, fecha, fecha2, num1, num2, email)
								values (".$usuario.",
                                          '".$desc1."',
                                          '".$desc2."',
                                          '".$fecha."',
                                          '".$fecha2."',
                                          ".$num1.",
                                          ".$num2.",
                                          '".$email."')";
			$query = $con->query($sql);		
		echo $sql;
			// if($query!=null){    
            // echo json_encode($json);
			// }else{
			// 	print "<script>alert(\"No se pudo agregar el tabla2.\");</script>";
			// }
	
?>