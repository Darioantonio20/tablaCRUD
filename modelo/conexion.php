<?php
$conexion = new mysqli("localhost", "root", "", "crud_php");

if($conexion->connect_errno){
    die("Conexioncita fallidita" . $conexion->connect_errno);
}else{
    echo "Conectado";
}
?>