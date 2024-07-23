<?php

function conMasDatos($saludo, $despedida ="chao")
{
    return $saludo . " " . $despedida;

}

echo conMasDatos("holis","bai bai");