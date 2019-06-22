<?php

    function secondDegreeEquation($a, $b, $c)
    {
        $delta = pow($b, 2) - (4 * $a * $c);

        if ($delta < 0) {
            echo "Não é possível calcular a raiz de números negativos";
            exit();
        }

        $x1 = (($b * (-1)) + sqrt($delta)) / (2 * $a);
        $x2 = (($b * (-1)) - sqrt($delta)) / (2 * $a);

        echo $x1 . "<br/>" . $x2;
    }

    secondDegreeEquation(8, -12, -38);
?>