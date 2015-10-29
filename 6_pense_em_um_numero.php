<?php

    # pense em um numero =
    # *2
    # +10
    # /2
    # resultado - numero que pensou

    $x = 19;
    $valor_soma = 5;

    # $resultado = (((($x *2)+10)/2)-$x);
    $resultado = (((($x *2) + $valor_soma)/2)-$x);

    echo $resultado;

?>