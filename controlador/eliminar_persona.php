<?php

if (!empty($_GET["id_producto"])) {
   $id=$_GET["id_producto"];
   $sql=$conexion->query(" delete from producto where id_producto=$id");
   if ($sql==1) {
    echo "<div clas='alert alert-success'>Trata De Blanca Eliminado Correctamente</div>";
   } else {
    echo "<div clas='alert alert-danger'>Error Al Eliminar</div>";
   }
   
}

?>