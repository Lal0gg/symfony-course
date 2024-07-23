<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <h1>Arrays 4 </h1>
    <ul>
        <?php
        $paises = array('Mexicozz', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela');
        $paises2 = array( 
            array(
            "dominio" => "mx",
            "pais" => "Mexico"   
            ),
            array(
            "dominio" => "es",
            "pais" => "España"   
            ),
            array(
                "dominio"=> "gt",
                "pais"=> "Guatemala"
            )

        );
        foreach ($paises2 as $pais) {
            ?>
            <li> <?php echo "Dominio: ".$pais['dominio']. " Pais: " . $pais['pais']; ?></li>
            <?php
        }
        ?>
    </ul>
    
</body>
</html>