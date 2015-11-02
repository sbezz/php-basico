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
 * 2 - Crie uma pasta chamada “p1_exercicio2” e um arquivo index.php e nele, reduza o número de parênteses sem alterar o resultado:
 *
 * a = 6*(3+2)
 * e = 3+(20-2)/(2*(9-6))
 * i = (((10*8)+3)*9)
 * b = 2+(6*(3+2))
 * f = (6/3)+(8/2)
 * j = ((-12)*(-4))+(3*(-4))
 * c = 2+(3*6)/(2+4)
 * g = ((3+(8/2))*4)+(3*2)
 * d = 2*(8/(3+1))
 * h = (6*(3*3)+6)-10
 *
 *
 *
 **/
?>

<?php

 $a = 6*(3+2);
 $e = 3+(20-2)/(2*(9-6));
 $i = (((10*8)+3)*9);
 $b = 2+(6*(3+2));
 $f = (6/3)+(8/2);
 $j = ((-12)*(-4))+(3*(-4));
 $c = 2+(3*6)/(2+4);
 $g = ((3+(8/2))*4)+(3*2);
 $d = 2*(8/(3+1));
 $h = (6*(3*3)+6)-10;


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
