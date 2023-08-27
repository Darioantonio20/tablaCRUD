<?php

if (!empty($_POST["btnRegistrar"])) {
   if (!empty($_POST["nombreP"]) and !empty($_POST["apellidoP"]) and !empty($_POST["apellidoM"]) and !empty($_POST["fechaN"]) and !empty($_POST["deathN"])) {
        $id=$_POST["id"];
        $nombreP=$_POST["nombreP"];
        $apellidoP=$_POST["apellidoP"];
        $apellidoM=$_POST["apellidoM"];
        $fechaN=$_POST["fechaN"];
        $deathN=$_POST["deathN"];
        $sql=$conexion->query(" update producto set nombreP='$nombreP', apellidoP='$apellidoP', apellidoM='$apellidoM', fechaN='$fechaN', deathN='$deathN' where id_producto=$id ");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error Al Modificar Productito</div>";
        }
        
   }else{
    echo "<div class='alert alert-warning'>Campos vacios</div>";
   }
}

?>