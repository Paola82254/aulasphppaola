<!-- Crie um novo arquivo chamado exercicio01.php e nele crie variáveis e/ou constantes para:

Nome de uma pessoa (exemplo: Chapolin)
Idade que esta pessoa tem (exemplo: 25)
Mostre no HTML uma mensagem qualquer apresentando o nome da pessoa e a idade dela. Exemplo: "Chapolin possui 25 anos."

Destaque o nome em itálico e a idade em negrito. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (corrigido)</title>
</head>
<body>
    <h1>Exercício 01 (corrigido)</h1>
</body>
</html>
<?php
$nome = "Chapolin";
$idade = 25;
/* echo '<p><i>'.$nome.'</i> possui <b>'.$idade.'</b> anos</p>'; */
?>
 <p><i><?=$nome?></i> possui <b><?=$idade?></b> anos</p>


