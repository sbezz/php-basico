<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercicio 01 - curso php Básico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<?php
/**
 * User: sbezz
 * Date: 02/11/2015
 * Time: 14:57
 * Anotações do curso.
 */

/**
 * Exercicio:
 *
 * 1 - Crie uma pasta chamada “p1_exercicio1” e um arquivo index.php e nele, mostre na tela o resultado das seguintes expressões:
 *
 * a = 3+4*5
 * e = 1+12/((7+2)/3)+(6-2)
 * i = sqrt (9)+ sqrt(16)
 * b = 8/4+2*3
 * f = 3+16/2+5
 * j = 21 / 4 / 2
 * c = 2*(10-3*3)-1
 * g = 24 / 4-2
 * d = 5*(3+(2+3))/2+1
 * h = 11 % 4+9 / 3
 *
 *
 *
**/
?>


<?php

$a = 3+4*5;
$e = 1+12/((7+2)/3)+(6-2);
$i = sqrt (9)+ sqrt(16);
$b = 8/4+2*3;
$f = 3+16/2+5;
$j = 21 / 4 / 2;
$c = 2*(10-3*3)-1;
$g = 24 / 4-2;
$d = 5*(3+(2+3))/2+1;
$h = 11 % 4+9 / 3;

?>


<div class="container">
    <h2>Exercicio 01 - Curso php-Básico</h2>
    <p>Exibindo Valores de Variaveis:</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Valor de</th>
                <th> $* -></th>
                <th>?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $a ->
                </td>
                <td width="15%">
                    <?php echo $a; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $b ->
                </td>
                <td width="15%">
                    <?php echo $b; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $c ->
                </td>
                <td width="15%">
                    <?php echo $c; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $d ->
                </td>
                <td width="15%">
                    <?php echo $d; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $e ->
                </td>
                <td width="15%">
                    <?php echo $e; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $f ->
                </td>
                <td width="15%">
                    <?php echo $f; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $g ->
                </td>
                <td width="15%">
                    <?php echo $g; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $h ->
                </td>
                <td width="15%">
                    <?php echo $h; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $i ->
                </td>
                <td width="15%">
                    <?php echo $i; ?>
                </td>
            </tr>
            <tr>
                <td width="15%">
                    Valor de
                </td>
                <td width="15%">
                    $j ->
                </td>
                <td width="15%">
                    <?php echo $j; ?>
                </td>
            </tr>
        </table>

        <!--termino-->

        </tbody>
    </table>
</div>

</body>
</html>