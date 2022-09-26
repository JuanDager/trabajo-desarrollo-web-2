<?php

include "conexion.php";

$json = file_get_contents("php://input");
$datos = json_decode($json,true);

$sql1= "select * from tabla1";
$query = $con->query($sql1);

if($query!=null){
   
    $data = [];

    while ($fila=$query->fetch_array()){

        $id_usuario = $fila["id_usuario"];
        $nombre = $fila["nombre"];
        $apellido = $fila["apellido"];
        $edad = $fila["edad"];

       $data[] = [ 'id_usuario' => $id_usuario,
                   'nombre' => $nombre,
                   'apellido' => $apellido,
                   'edad' => $edad ];
    }

    echo json_encode($data);

    }else{
        print "<script>alert(\"No se pudo encontrar el dato de tabla1.\");</script>";
    }
?>



