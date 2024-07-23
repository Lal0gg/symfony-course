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
        $paises = array('Mexico', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela');
        for ($i = 0; $i < count($paises); $i++){
            echo "<li>". $paises[$i] . "</li>";
        }
        ?>
    </ul>
    
</body>
</html>