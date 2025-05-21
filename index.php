<?php

echo 'Ola Mundo! <br>';

//quebra de linha
echo '<br>';


//como fazer uma soma no PHP
$x = 2+2; //4
$x += 2;

echo $x;

echo "<br>";

$x= 20 +20 ;

echo $x;
echo '<br>';
echo '<br>';


//como fazer tabuada php
$numeroMultiplicador = 5;

echo 1 * $numeroMultiplicador . '<br>';
echo 2 * $numeroMultiplicador . '<br>';
echo 3 * $numeroMultiplicador . '<br>';
echo 4 * $numeroMultiplicador . '<br>';
echo 5 * $numeroMultiplicador . '<br>';
echo 6 * $numeroMultiplicador . '<br>';
echo 7 * $numeroMultiplicador . '<br>';
echo 8 * $numeroMultiplicador . '<br>';
echo 9 * $numeroMultiplicador . '<br>';
echo 10 * $numeroMultiplicador . '<br>';

echo '<br>';

//como usar data php
$hoje = date('d/m/y H:i:s'); //dia/mes/ano (brasileiro)
echo $hoje;

echo '<br>';
echo '<br>';

const DATA_NASCIMENTO = "01/01/1950";


//!= (diferente);
//== (igualdade/comparacao);
//= (atribuicao);


/*
1- verificar a partir de um ano (numero) informado, qual é a idade e se o usuário é maior de idade. 
Ou seja +18.
*/

$anoNascimento = 1997;
$anoAtual = date("Y"); // ano atual

$idade = $anoAtual - $anoNascimento;

if ($idade >= 18) {
    echo "O usuário é maior de idade e sua idade é $idade";
}
else{
   echo " usuário é menor de idade e sua idade é $idade";
}

echo '<br>';
echo '<br>';

/*
2- Dada as notas de 4 provas e , a média para ser aprovado de ano sendo 7. 
Calcule se o aluno atingiu a média e informar se o mesm foi aprovado.

Tema de casa- calcular as médias: ponderada e harmonica.
Dica : média aritmetica
*/

$prova1 = 4;
$prova2 = 3;
$prova3 = 7;
$prova4 = 9;

$mediaArit = $prova1 + $prova2 + $prova3 + $prova4;

$mediaArit /= 4;

if ($mediaArit >= 7) {
    echo "O aluno foi aprovado e sua média foi de: $mediaArit";
}
else{
   echo " O aluno foi reprovado e sua média foi de: $mediaArit";
}
