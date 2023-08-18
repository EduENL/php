<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <!-- Eduardo Nunes de Lima -->
    <!-- Exemplo 1: números -->
    <h1>Números: Números inteiros</h1>
    <?php
        echo 1;
        echo " - O número 1 é um valor inteiro! <br>";

        echo "<h2> Verificação </h2>";

        if(is_int(32)) {
            echo "Este número é um número inteiro <br>";
        }
    ?>
    <!-- Float -->
    <hr>
    <h1>Números: Números flutuantes</h1>
    <?php
        echo 3.2;
        echo " - O número 3.2 é um valor decimal, ou seja, é um número float! <br>";

        echo "<h2> Verificação </h2>";

        if(is_float(5.4)) {
            echo "Este é um float! <br>";
        }
    ?>

    <!-- textos (string) -->
    <hr>
    <h1>Textos</h1>
    <?php
        echo "Uma string é uma série de caractérias dentro de aspas duplas ou aspas, pode se entender como o p do HTML. <br>";

        echo "<h2> Verificação </h2>";

        $a = "texto";

        if(is_string($a)) {
            echo "A váriavel $a é uma string. <br>";
        }
    ?>

    <!-- booleano -->
    <hr>
    <h1>Booleano</h1>
    <?php
        if(-1 < 5) {
            echo "A situação (-1 < 5) apresentada é verdadeira!! <br>";
        }

        echo "<h2> Verificação </h2>";

        if(is_bool(5 + 5 >= 10)) {
            echo "A situação apresentada é verdadeira!! <br>";
        }
    ?>

    <hr>

    <!-- array -->

    <H1>Array</H1>

    <?php
        $ar = array (10000, 1000, 100, 10);

        print_r($ar);
        echo "<br>";

        echo "<p>O segundo valor da lista é: $ar[1]</p>";

        $br = ["Meu", "Número", "é", 4];

        echo "<br>";
        print_r($br);
        echo "<br>";
        print_r($br[1]);
        echo "<br><p>O meu número escrito na lista é: $br[3]</p>";
    ?>
</body>
</html>