<!-- Crie um novo arquivo chamado exercicio02.php e nele faça um array (numérico OU associativo) chamado dados contendo as seguintes informações:

Nome de usuário (exemplo: chapolin.colorado)
Senha (exemplo: 123teste)
Idade (exemplo: 30)
Cidade (exemplo: São Paulo)
Telefones (exemplo: 11-2135-0300 e 11-91234-5678)
Em seguida, mostre somente os valores de nome de usuário, idade, cidade e um dos telefones em uma lista ordenada HTML.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO 2</title>
</head>
<body>
<?php
    $usuario = [
        "nome_de_usuario" => "chapolin.colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        "telefone" => [
            "fixo" => "11-2135-0300",
            "celular" => "11-91234-5678"
        ],
    ]; 
    ?>
    <pre><?=var_dump($usuario)?></var></pre>
    <ol>
        <li><p>Nome: <?=$usuario["nome_de_usuario"]?></p></li>
        <li><p>Idade: <?=$usuario["idade"]?> anos</p></li>
        <li><p>Cidade: <?=$usuario["cidade"]?></p></li>
        <li><p>Telefone: <?=$usuario["telefone"]["fixo"]?></p></li>
    </ol>
</body>
</html>
 