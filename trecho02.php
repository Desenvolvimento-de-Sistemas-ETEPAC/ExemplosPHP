<?php
function media($nota1, $nota2, $aluno)
{
 $media = ($nota1 + $nota2)/2. 
 
 echo ("A media de $aluno foi: $media");
 
 if ($media >= 7){
	 
	 echo (" $aluno foi aprovado(a)!!");
 }
 
}

media(10, 6, "Maria"); 

?>