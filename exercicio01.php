<!-- Crie um novo arquivo chamado exercicio01.php e nele crie variáveis e/ou constantes para:

Nome de uma pessoa (exemplo: Chapolin)
Idade que esta pessoa tem (exemplo: 25)
Mostre no HTML uma mensagem qualquer apresentando o nome da pessoa e a idade dela. Exemplo: "Chapolin possui 25 anos."

Destaque o nome em itálico e a idade em negrito. -->

<?php
$nome = "Chapolin";
$idade = 25;
/* echo '<p><i>'.$nome.'</i> possui <b>'.$idade.'</b> anos</p>'; */
?>
 <p><i><?=$nome?></i> possui <b><?=$idade?></b> anos</p>


