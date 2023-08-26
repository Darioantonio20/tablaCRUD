<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from persona where id_persona=$id ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ae3e2b909.js" crossorigin="anonymous"></script>
</head>
<body>
    <form class="col-4 text-center m-auto p-3" method="POST">
        <h2 class="p-4 text-secondary">Modificar Producto De Trata De Blancas</h2>
        <input type="hidden" name="id_persona" value="<?= $_GET["id_persona"]?>">
        <?php
       include "controlador/modificar_producto.php";
       while($datos=$sql->fetch_object()){?>
        <div class="mb-3 p-2">
            <label for="exampleInputEmail1" class="form-label">Nombre De La Persona</label>
            <input type="text" class="form-control" name="nombrePersona" value="<?= $datos->nombrePersona ?>">
        </div> 
        <div class="mb-3 p-2">
            <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellidoPaterno" value="<?= $datos->apellidoPaterno ?>">
        </div>
        <div class="mb-3 p-2">
            <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="apellidoMaterno" value="<?= $datos->apellidoMaterno ?>">
        </div>
        <div class="mb-3 p-2">
            <label for="exampleInputEmail1" class="form-label">Fecha De Nacimiento</label>
            <input type="date" class="form-control" name="fechaNacimiento" value="<?= $datos->fechaNacimiento ?>">
        </div>
        <div class="mb-3 p-2">
            <label for="exampleInputEmail1" class="form-label">Nota</label>
            <input type="text" class="form-control" name="deathNote" value="<?= $datos->deathNote ?>">
        </div>

        <?php }
        ?>
        <button type="submit" class="btn btn-success" name="btnRegistrar" value="ok">Modificar Trata</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>