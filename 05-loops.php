<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <style>
        ol li:nth-child(even) {color: green;}
        ol li:nth-child(odd) {color: red;}
    </style>
</head>
<body>
    <h1>Loops</h1>
    <hr>
    <h2>Tradicionais: for, while, do/while</h2>

    <h3>while</h3>
    <?php
    $i = 1;
    while($i <= 3){
        ?>
    <p>Senac Penha - I vale <?=$i?><p>
    <?php
    $i++;
    }
    ?>
    

    <h3>do/while</h3>
    <ul>
        <?php
        $j = 1;
        do {
            ?>
            <li>Item: <?=$j?></li>
            <?php
            $j++;
        } while($j <= 5)
        ?>
    </ul>

    <h3>for</h3>
    <?php
    $alunos = ["Jean", "Giuseppe", "Arthur","Pedro","Paola"];
    $quantidade = count($alunos);
    for($i = 0; $i < $quantidade; $i++){
    ?>
        <p>Aluno: <?=$alunos[$i]?></p>
    <?php
    }
    ?>

    <h3>foreach</h3>
    <?php foreach($alunos as $aluno){ ?>
        <p> <?=$aluno?> </p>
    <?php } ?>
    <h2>Exercício 02</h2>
    <!-- <p>Crie um array contendo o nome dos 12 meses do ano.</p>

    <p>Monte uma <b>lista ordenada</b> exibindo o nome de cada mês em um item.</b></p>
    <p><b>DESAFIO:</b> <i>Formate a lista de uma forma que os meses apareçam com cores alternadas. Exemplo: janeiro/março em azul, fevereiro/abril em vermelho etc</i></p> -->
    <ol>
    <?php
    $mesesdoano = ["Janeiro", "Fevereiro", "Março","Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro"];
    $mes = count($mesesdoano);
    foreach($mesesdoano as $mes){
    ?>
        <li> <?=$mes?></li>
    <?php
    }
    ?>
    </ol>

</body>
</html>