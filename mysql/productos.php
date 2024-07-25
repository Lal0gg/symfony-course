<?php
require_once('conectar.php');
$d = new Datos();
$datos = $d->getDatos("select productos.Id, productos.nombre, productos.precio, productos.fecha, 
productos.categoria_id, categoria.Nombre as categoria from productos 
inner join categoria on categoria.Id = productos.categoria_id 
order by productos.Id desc ; ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet">
    <title>Mysql</title>

</head>

<body>
    <div class="container">
        <div class="card border-black mb-3">
            <div class="card-header bg-black text-white">
                <h1>PHP PDO</h1>
            </div>
            <div class="card-body text-primary">
                <p>
                    <a href="add.php" class="btn btn-success">Crear</a>
                </p>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Categoria</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $dato) {
                        ?>
                            <tr>
                                <td><?php echo $dato['Id']; ?></td>
                                <td><?php echo $dato['categoria']; ?></td>
                                <td><?php echo $dato['nombre']; ?></td>
                                <td><?php echo $dato['precio']; ?></td>
                                <td><?php echo $dato['fecha']; ?></td>
                                <td>
                                    <a href="edit.php?Id=<?php echo $dato['Id']; ?>" class="btn btn-primary">Editar</a>
                                    <a href="delete.php?Id=<?php echo $dato['Id']; ?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>