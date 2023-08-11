<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        .destaque {color: red}
        .blue {color: blue}
    </style>
</head>
<body>
    <h1>Primeira entrega de exercícios do 2°semestre!</h1>
    <p class = "blue">Programador: Eduardo Nunes de Lima</p>
    <hr>

    <?php
        echo "<h1>O Valmir falou pra fazer assim </h1>";
        echo "<h2>Acho que está dando certo</h2>";
        echo "<h3>Espera...</h3>";
        echo "<h4>Por que as letras estão diminuindo?</h4>";
        echo "<span class = 'destaque'>SOCORRO!!!! </span>";
    ?>

    <hr>
    
    <?php
        $linguagem = "Variável interessante ☻";
    ?>

    <p>Olha só a minha <span class = "destaque"><?=$linguagem?></span>.</p>

</body>
</html>