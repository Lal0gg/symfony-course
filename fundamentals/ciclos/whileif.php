<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <h1>Ciclo While</h1>
    <ul>
        <?php
        $n1 = 0;
        $n2 = 20;
        while( $n1 < $n2 ){
            if($n1%2== 0){
                echo "<li>El valor de n1: ". $n1 . "</li>";
            }
            $n1++;
        }
        ?>
    </ul>
    
</body>
</html>