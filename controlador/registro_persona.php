 <?php
 if(!empty($_POST["btnRegistrar"])){
    if(!empty($_POST["nombreP"]) and !empty($_POST["apellidoP"]) and !empty($_POST["apellidoM"]) and !empty($_POST["fechaN"]) and !empty($_POST["deathN"])){
        echo "Todos los campos están rellenados";

        $nombreP=$_POST["nombreP"];
        $apellidoP=$_POST["apellidoP"];
        $apellidoM=$_POST["apellidoM"];
        $fechaN=$_POST["fechaN"];
        $deathN=$_POST["deathN"];

        $sql=$conexion->query(" insert into producto(nombreP,apellidoP,apellidoM,fechaN,deathN)values('$nombreP','$apellidoP','$apellidoM','$fechaN','$deathN') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona Registrada Correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error Al Registrar Persona</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Alguno De Los Campos Esta Vacio</div>';
    }
 }
 ?>