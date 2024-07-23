<?php 
if(isset($_POST["nombre"]))
{
    if($_FILES["foto"]["type"]=='image/jpeg' or $_FILES["foto"]["type"]=='image/png')
    {
        switch($_FILES["foto"]["type"])
        {
            case 'image/jpeg':
                $archivo =time().".jpg";
            break;
            case 'image/png':
                $archivo =time().".png";
            break;
        }
        copy($_FILES['foto']['tmp_name'], "./".$archivo);
        header("Location: formulario.php?id=1");
    }else
    {
        //301
        header("Location: formulario.php");
    }
    //echo $_FILES['foto']['type'];
    //die("nombre: ".$_POST['nombre']." | E-Mail=".$_POST['correo']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Formulario</title>
</head>
<body>
    <h1>Formsito</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <p>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
        </p>
        <p>
            <input type="text" name="correo" id="correo" placeholder="E-Mail" />
        </p>
        <p>
            <input type="file" name="foto" id="foto"  />
        </p>
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>