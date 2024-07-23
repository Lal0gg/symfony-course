<?php

function func_conParametros($n1, $n2, $op)
{
    if ($op == "+") {
        return $n1 + $n2;
    } elseif ($op == "-") {
        return $n1 - $n2;
    } elseif ($op == "*") {
        return $n1 * $n2;
    } elseif ($op == "/") {
        if ($n1 == 0)
            return "No se puede dividir entre 0";
        else {
            return $n1 / $n2;
        }
    } else {
        return "Operador Invalido";
    }
}

echo func_conParametros(0, 5, "/");