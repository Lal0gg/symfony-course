<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <h1>Arrays</h1>
    <ul>
        <?php
        $paises = array('Mexicozz', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela');
        foreach ($paises as $pais) {
            ?>
            <li> <?php echo $pais; ?></li>
            <?php
        }
        ?>
    </ul>
    
</body>
</html>