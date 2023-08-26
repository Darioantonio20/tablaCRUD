<?php

if (!empty($_POST["btnRegistrar"])) {
   if (!empty($_POST["nombrePersona"]) and !empty($_POST["apellidoPaterno"]) and !empty($_POST["apellidoMaterno"]) and !empty($_POST["fechaNacimiento"]) and !empty($_POST["deathNote"])) {
        $id_persona=$_POST["id_persona"];
        $nombrePersona=$_POST["nombrePersona"];
        $apellidoPaterno=$_POST["apellidoPaterno"];
        $apellidoMaterno=$_POST["apellidoMaterno"];
        $fechaNacimiento=$_POST["fechaNacimiento"];
        $deathNote=$_POST["deathNote"];
        $sql=$conexion->query(" update persona set nombrePersona='$nombrePersona', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', fechaNacimiento='$fechaNacimiento', deathNote='$deathNote' where id_producto ");
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