<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $saludo = "Hola mundo";
    echo $saludo;
    ?>
    <br>


    <?php
    $perros = 5;
    $adoptantes = 4;

    echo $perros + $adoptantes;
    ?>
    <br>
    <?php
    echo $perros - $adoptantes;
    ?>
    <br>
    <?php
    echo $perros * $adoptantes;
    ?>
    <br>
    <?php
    echo $perros / $adoptantes;
    ?>
    <br>
    <?php
    echo $perros % $adoptantes;
    ?>

    <br>

    <?php
    $celsius = 20;
    $agregado = 1.8;
    $suma_final = 32;
    $primer_resultado = $celsius * $agregado;
    $farenheit = $primer_resultado + $suma_final;

    echo $farenheit;
    ?>

    <br>

    <?php
    $base = 18;
    $altura = 12;
    $perimetro_rectangulo = $base * 2 + $altura * 2;
    $area_rectangulo = $base * $altura;

    echo $perimetro_rectangulo;
    ?>

    <br>

    <?php
    echo $area_rectangulo;
    ?>

    <br>

    <?php
    $radio =30;
    $pi = 3.14;
    $diametro = $radio ** 2;
    $perimetro_circulo = 2 * $pi * $radio;
    $area_circulo = $pi * $diametro;

    echo $perimetro_circulo;
    ?>
    <br>
    <?php
    echo $area_circulo;
    ?>
</body>
</html>