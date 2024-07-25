<?php
require_once ('conectar.php');
$d = new Datos();
if (isset($_POST['nombre'])) {
    $mensaje ="";
    if(filter_var($_POST['nombre']) == false){
        $mensaje.="El campo nombre esta vacio";
    }
    if(filter_var($_POST['precio']) == false){
        $mensaje.="El campo precio esta vacio";
    }
    if(!empty($mensaje)){
        header("Location:add.php?erro=1");

    }else{
        $sql = "insert into productos values (Id,'".$_POST['categoria_id']."','".$_POST['nombre']."','".$_POST['precio']."',now())";
        //echo $sql;exit;         
        $d->setDatos($sql);
        header("Location:add.php?erro=0");
    }


} else {
    $categorias = $d->getDatos("select * from categoria");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
        rel="stylesheet">
    <title>Mysql</title>

</head>

<body>
    <div class="container">
        <div class="card-header bg-black text-white">
            <h1>Agregar</h1>
        </div>
        <div class="card-body text-primary">
            <form action="" method="POST" name="form" >
            <div class="mb-3">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                    <?php
                    foreach ($categorias as $categoria) {
                        ?>
                        <option value="<?php echo $categoria['Id']; ?>"><?php echo $categoria['Nombre']; ?></option>
                        <?php
                    }
                    ?>
                </select>

            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control">
            </div>
            <hr/>
            <a href="javascript:void(0):" onclick="document.form.submit();" class="btn btn-primary">Enviar</a>
            </form>
        </div>

    </div>

</body>

</html>