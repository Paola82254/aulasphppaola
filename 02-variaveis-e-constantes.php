<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>

    <?php
    //Variáveis
    $curso = "Programador Web";
    $ano = 2023;
    $area = "Back-End";

    //Estamos no Programador Web 2023 - escrita dessa frase com programação

    /* Formas de saída COMPLETAS VIA PHP */
    //Saída Interpolada
    echo "<p>Estamos no $curso em $ano</p>";

    //Não dá certo, as variáveis são tratadas como texto
    echo '<p>Estamos no $curso em $ano</p>';

    //Saída com CONCATENAÇÃO
    echo '<p>Estamos no '.$curso.' em '.$ano.'</p>';
    echo "<p>Estamos no ".$curso." em ".$ano."</p>";
    ?>
    <hr>
    <!-- Forma de saída ABREVIADA/SIMPLIFICADA -->
    <p>Estamos no <?=$curso?> em <?=$ano?></p>
    <hr>
    <?php
    //Constantes (Recomenda-se dar nome em MAIUSCULAS)

    //FORMA ANTIGA, TRADICIONAL
    define("AUTOR", "Paola Thomaz");

    //FORMA MODERNA, ATUAL
    const EMPRESA = "ABC Tecnologia";
    const ANO_FUNDACAO = 2000;
    ?>

    <p>Autor do site: <?=AUTOR?> </p>
    <p>Nome da Empresa: <?=EMPRESA?> </p>
    <p>Fundada em: <?=ANO_FUNDACAO?> </p>
</body>
</html>