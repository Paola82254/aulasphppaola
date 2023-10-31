<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>

    <style>
        .repor{
            color: orange;
        };
        .urgente {
            color: red;
        };
        .normal {
            color: green;
        };
    </style>
</head>
<body>
    <h1>Condicionais (if, else, elseif)</h1>
    <hr>
    <h2>Simples(não tem else)</h2>
    <?php
    $numero= 100;

    if($numero > 20){
        echo "<p>$numero é maior que 20.</p>";
    }
    ?>
    <!-- if (se), else(senão) -->
    <h2>Composta (if/else)</h2>

    <?php
    //Controle de Estoque
    $produto = "Ultrabook Dell";
    $qtdeEmEstoque = 0; // o que temos no momento
    $qtdeCritica = 2; // mínimo necessário
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h4>Estoque: <?=$qtdeEmEstoque?></h3>
    <!-- Se a quantidade em Estoque for abaixo da quantidade crítica, então o sistema deve avisar e pedir para repor. -->
    <?php
    if($qtdeEmEstoque < $qtdeCritica){
        echo "<p class='repor'>É necessário comprar/repor!</p>";

        //Condicional SIMPLES/ANINHADA
        if($qtdeEmEstoque === 0){
            echo "<p class='urgente'>URGENTE</p>";
        }

    }else {
        /* Caso contrário, simplesmente mostrar que o estoque está normal */
        echo "<p class='normal'>Estoque normal</p>";
    }
    ?>
</body>
</html>