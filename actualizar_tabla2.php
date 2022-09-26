<?php

            include "conexion.php";

$json = file_get_contents("php://input");
$datos = json_decode($json,true);

    $id = $datos["id"];
    $usuario = $datos["usuario"];
    $desc1 = $datos["desc1"];
    $desc2 = $datos["desc2"];
    $fecha = $datos["fecha"];
    $fecha2 = $datos["fecha2"];
    $num1 = $datos["num1"];
    $num2 = $datos["num2"];
    $email = $datos["email"];
		
$sql = "update tabla2 set usuario = ".$usuario.",
                            desc1 = '".$desc1."',
                            desc2 = '".$desc2."',
                            fecha = '".$fecha."',
                            fecha2 = '".$fecha2."',
                            num1 = ".$num1.",
                            num2 = ".$num2.",
                            email = '".$email."'
                        where id = ".$id;
                                                        
$query = $con->query($sql);	

    if($query!=null){    
        echo json_encode($json);
        }else{
            print "<script>alert(\"No se pudo agregar el tabla1.\");</script>";
        }
?>