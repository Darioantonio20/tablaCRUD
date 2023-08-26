<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en PHP y Mysql con Nery-Chan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ae3e2b909.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Hola timmy</h1>
    <div class="container-fluid row">
        <form class="col-4 text-center" method="POST">
            <h2 class="p-4 text-secondary">Registro Trata De Blancas</h2>
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3 p-2">
              <label for="exampleInputEmail1" class="form-label">Nombre De La Persona</label>
              <input type="text" class="form-control" name="nombrePersona">
            </div>
            <div class="mb-3 p-2">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidoPaterno">
            </div>
            <div class="mb-3 p-2">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="apellidoMaterno">
            </div>
            <div class="mb-3 p-2">
                <label for="exampleInputEmail1" class="form-label">Fecha De Nacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento">
            </div>
            <div class="mb-3 p-2">
                <label for="exampleInputEmail1" class="form-label">Nota</label>
                <input type="text" class="form-control" name="deathNote">
            </div>
            <button type="submit" class="btn btn-success" name="btnRegistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr class="table-success text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre De La Persona</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Fecha De Nacimiento</th>
                        <th scope="col">Nota</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from persona");
                    while($datos=$sql->fetch_object()){ ?>
                        <tr>
                            <td class="text-justify"><?= $datos->id_persona ?></td>
                            <td class="text-center"><?= $datos->nombrePersona ?></td>
                            <td class="text-center"><?= $datos->apellidoPaterno ?></td>
                            <td class="text-center"><?= $datos->apellidoMaterno ?></td>
                            <td class="text-center"><?= $datos->fechaNacimiento ?></td>
                            <td class="text-center"><?= $datos->deathNote ?></td>
                            <td>
                                <a href="modificar_producto.php" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>