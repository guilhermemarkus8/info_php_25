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

echo "<br>";

/*
strlen();
count();
substr();
strpos();
*/



/**
 * Calendario: usuario vai informar uma data, validar essa data,
 * caso for uma data invalida, retornar a proxima data correta.
 * Ex.: 29/02/2025 => 01/03/2025
 * Ex.: 31/04/2025 => 01/05/2025
 * 
 * Funcao PHP: explode;
 */

 $data = "29/02/2025";
 $dataArray = explode("/", $data);

 $dia = $dataArray[0];
 $mes = $dataArray[1];
 $ano = $dataArray[2];


$data = "29/02/2025";
$dataArray = explode("/", $data);

$dia = (int)$dataArray[0];
$mes = (int)$dataArray[1];
$ano = (int)$dataArray[2];


if (checkdate($mes, $dia, $ano)) {
    echo "Data válida: $data";
} else {
    
    $novaData = mktime(0, 0, 0, $mes, $dia, $ano);
    $novaDataCorrigida = date("d/m/Y", strtotime("+1 day", $novaData));
    echo "A Data é inválida. Próxima data válida: $novaDataCorrigida";
}

echo "<br>";


 /**
  * Ordenar os arrays abaixo em ordem decrescente (maior para menor):
  * $alfa = ["A", "B", "C", "D", "E"];
  * $numeros = [10, 20, 30, 40, 50];
  * Saida esperada: E, D, C, B, A
  * 50, 40, 30, 20, 10

  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP para ordenacao.
  */



//adicionar novo parametro na funcao de ordenar array
//sendo ele ordem crescente ou decrescente
//se chamar a funcao com asc sera crescente
//se chamar a funcao com desc sera decrescente    
//maior para menor




function ordenarArray(&$array, $ordem = 'desc') {
    $tam = count($array);
    for ($i = 0; $i < $tam - 1; $i++) {

        for ($j = 0; $j < $tam - 1 - $i; $j++) {
            
            if (
                ($ordem = 'asc' && $array[$j] > $array[$j + 1]) ||
                ($ordem = 'desc' && $array[$j] < $array[$j + 1])
            ) {
                $aux = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $aux;
            }
        }
    }
}

$alfa = ["A", "B", "C", "D", "E"];
$numeros = [10, 20, 30, 40, 50];


ordenarArray($alfa, 'desc'); // decrescente
ordenarArray($numeros, 'asc'); // crescente


echo 'Alfa: ';
foreach ($alfa as $alfa) echo $alfa . ' ';
echo '<br>';

echo 'Numeros: ';
foreach ($numeros as $num) echo $num . ' ';
echo '<br>';







 /**
  * Somar os arrays/vetores abaixo:
  * $numerosA = [10, 20, 30, 40, 50];
  * $numerosB = [5, 45, 37, 2, 25];
  *
  * Saida esperada: $soma[15, 65, 67, 42, 75]
  *
  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP.
  */
  
$soma = [];
$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];
  
for($i=0; $i < count($numerosA); $i++) {
    
    $somaElementos =  $numerosA[$i] + $numerosB[$i];

    $soma[] = $somaElementos;
}

// $soma[15, 65, 67, 42, 75]
for($i=0; $i < count($soma); $i++) {

    echo $soma[$i] . "<br>";
}
  
echo "<br>";

  /**
  * Multiplicar os arrays/vetores abaixo:
  * $numerosA = [10, 20, 30, 40, 50];
  * $numerosB = [5, 45, 37, 2, 25];
  *
  * Saida esperada: $produto[50, 900, 1110, 80, 1250]
  *
  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP.
  */

$produto = [];
$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];
  
for($i=0; $i < count($numerosA); $i++) {
    
    $multiplicaElementos =  $numerosA[$i] * $numerosB[$i];

    $produto[] = $multiplicaElementos;
}

// $produto[50, 900, 1110, 80, 1250]
for($i=0; $i < count($produto); $i++) {

    echo $produto[$i] . "<br>";
}

echo "<br>";

  /*    
   Decompor um valor informado pelo usuario em reais
  informando quantas notas de cada representam esse valor. 
   $notas = [2, 5, 10, 20, 50, 100, 200];
   $valor = 170;
  
  Saida esperada: 1 nota de 100, 1 nota de 50 e 1 nota de 20. 
  $totalNotas["100"] += 1;
  Não utilizar funcoes prontas do PHP.
  */
$totalNotas = [
    "200" => 0,
    "100" => 0,
    "50" => 0,
    "20" => 0,
    "10" => 0,
    "5" => 0,
    "2" => 0,
];
$valor = 1057;
$notas = [200, 100, 50, 20, 10, 5, 2];

$tamanhoArray = count($notas); // 7

for($i = 0; $i < $tamanhoArray; $i++) {
    $nota = $notas[$i];

    if ($valor >= $nota) {
        $quantidade = (int) ($valor / $nota); // 1.2 => 1
        $valor -= $nota * $quantidade;
        $totalNotas[$nota] += $quantidade;
    }

    if ($valor == 0) {
        break;
    }
}

foreach ($totalNotas as $notas => $quantidade) {
    // 1 nota de 100;
    echo "$quantidade nota(s) de $notas. <br>";
}