<?php
function media($nota1, $nota2, $aluno)
{
 $media = ($nota1 + $nota2)/2. // esta linha de código, calcula a média
 
 echo ("A media de $aluno foi: $media"); // esta linha de código, exibe as informações na tela
}

media(10, 6, "Maria");  // esta linha realiza a chamada da função com os paramêtros

?>