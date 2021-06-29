<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "usuarios";

$conexion = mysqli_connect ($host,$user,$pwd,$bd);

if ($conexion){
    echo "Correctamente";
}else{
    echo "Incorrecto";
}

?>