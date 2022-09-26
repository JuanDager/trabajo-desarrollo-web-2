<?php

include "conexion.php";

$json = file_get_contents("php://input");
$datos = json_decode($json,true);

$sql1= "select * from tabla2";
$query = $con->query($sql1);

if($query!=null){

    while ($fila=$query->fetch_array()){

        $id = $fila["id"];
        $usuario = $fila["usuario"];
        $desc1 = $fila["desc1"];
        $desc2 = $fila["desc2"];
        $fecha = $fila["fecha"];
        $fecha2 = $fila["fecha2"];
        $num1 = $fila["num1"];
        $num2 = $fila["num2"];
        $email = $fila["email"];
        $data = [];

        $data[] = [ 'id' => $id,
                    'usuario' => $usuario,
                    'desc1' => $desc1,
                    'desc2' => $desc2, 
                    'fecha' => $fecha,
                    'fecha2' => $fecha2,
                    'num1' => $num1,
                    'num2' => $num2,
                    'email' => $email];
    }
    echo json_encode($data);

    }else{
        print "<script>alert(\"No se pudo encontrar el dato de tabla2.\");</script>";
    }
?>