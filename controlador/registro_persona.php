 <?php
 if(!empty($_POST["btnRegistrar"])){
    if(!empty($_POST["nombrePersona"]) and !empty($_POST["apellidoPaterno"]) and !empty($_POST["apellidoMaterno"]) and !empty($_POST["fechaNacimiento"]) and !empty($_POST["deathNote"])){
        echo "Todos los campos están rellenados";

        $nombrePersona=$_POST["nombrePersona"];
        $apellidoPaterno=$_POST["apellidoPaterno"];
        $apellidoMaterno=$_POST["apellidoMaterno"];
        $fechaNacimiento=$_POST["fechaNacimiento"];
        $deathNote=$_POST["deathNote"];

        $sql=$conexion->query(" insert into persona(nombrePersona,apellidoPaterno,apellidoMaterno,fechaNacimiento,deathNote)values('$nombrePersona','$apellidoPaterno','$apellidoMaterno','$fechaNacimiento','$deathNote') ");
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