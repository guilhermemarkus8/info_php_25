<?php

echo 'Ola Mundo! <br>';

//quebra de linha
echo '<br>';


//como fazer uma soma no PHP
$x = 2+2;


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

echo '<br>';

//for e while exercicios

$contadorPares = 0; // Inicializa o contador de números pares

for ($i = 2; $contadorPares < 20; $i++) {
    $numero = $i;
    $resto = $numero % 2;
    $par = $resto == 0;

    if ($par) {
        $contadorPares++;
        echo "o número $numero é par " . "<br>";
    }
}


$contadorPares = 0; // Inicializa o contador de números pares
$i = 2; 
while ($contadorPares < 20) {
    $numero = $i;
    $resto = $numero % 2;
    $par = $resto == 0;

    if ($par) {
        $contadorPares++;
        echo "o número $numero é par " . "<br>";
    }

    $i++; // Incrementa $i para o próximo número
}


echo '<br>';

// numeros primos os primeiros 5 exibilos

// 2 3 5 7 11 

$primos = [];    
$contPrimos = 0;

for ($numeroAvaliado = 3; $contPrimos < 5; $numeroAvaliado++) {
    $penultimonumero = $numeroAvaliado - 1;
    $ehPrimo = true;

    for ($divisor = 2; $divisor < $penultimonumero; $divisor++) {
        $resto = $numeroAvaliado % $divisor;
        $divisaoExata = $resto == 0;

        if ($divisaoExata && $divisor < $penultimonumero) {
            $ehPrimo = false;
            break; 
        }
    }

    if ($ehPrimo) {
        $primos[] = $numeroAvaliado;
        $contPrimos++;
    }
}




echo '<br>';

//$primos = []; // array/ vetor vazio

//$primos = [2, 3, 5, 7, 11]; // array com os primeiros 5 numeros primos

for ($i=0; $i < 5; $i++) {

    $primo = $primos[$i] ; 

    echo "primo: $primo" . "<br>";

}








//contagem regressiva de 10-0 

$numero = 10;

while ($numero >= 0) {
    
    echo $numero . "<br>";
    $numero = $numero - 1; // diminui 1 a cada volta


}
    
echo "<br>";

$palavra = "radar";
$tamanho = strlen($palavra) - 1; // 3 - 1 == 2

$a=0;
$ehPalindromo = true;

for ($i = $tamanho; $i >= 0; $i--) {
    $letra_1 = $palavra[$a];
    $letra_2 = $palavra[$i];
    $letrasIguais =  $letra_1 == $letra_2; // r == r, a == a, d == d

    if (!$letrasIguais) {
        $ehPalindromo = false;
        break;
    }

    $a++;
}

if ($ehPalindromo ) {
    echo "A palavra $palavra é um palíndromo.";
}
else {
  echo "A palavra $palavra NÃO é palíndromo.";
}

echo "<br>";
 //Procurar uma palavra no meio da frase e informar se encontrou a mesma.


// c u r s o 
// 0 1 2 3 4

// ...existing code...

$palavraProcurada = "curso";
$frase = "curso Escola infoserv de PHP."; // curso

$tamanho = strlen($frase) - 1;
$tamanhoPalavra = strlen($palavraProcurada) - 1;

$palavraEncontrada = false;

// percorre a frase toda
for ($i = 0; $i <= $tamanho - $tamanhoPalavra; $i++) {
    $letrasIguais = true;

    // percorre toda a palavra que queremos encontrar
    for ($j = 0; $j <= $tamanhoPalavra; $j++) {
        $indiceAtualDaFrase = $i + $j;
        $letraAtualDaFrase = $frase[$indiceAtualDaFrase];
        $letraAtualDaPalavra = $palavraProcurada[$j];

        if ($letraAtualDaFrase != $letraAtualDaPalavra) {
            $letrasIguais = false;
            break;
        }
    }

    if ($letrasIguais) {
        $palavraEncontrada = true;
        break;
    }
}

if ($palavraEncontrada) {
    echo "encontrou a palavra procurada";
} else {
    echo "não encontrou a palavra procurada";
}


strlen();
count();
substr();
strpos();
