<?php

if (!empty($_GET["id_persona"])) {
   $id=$_GET["id_persona"];
   $sql=$conexion->query(" delete from persona where id_persona=$id");
   if ($sql==1) {
    echo "<div clas='alert alert-success'>Trata De Blanca Eliminado Correctamente</div>";
   } else {
    echo "<div clas='alert alert-danger'>Error Al Eliminar</div>";
   }
   
}

?>