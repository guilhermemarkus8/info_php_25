<?php

class Carro {

    public $marca;
    public $modelo;
    public $cor;
    public $ano;
    public $velocidade;
    public $capacidadeTanque;
    public $tipoCambio;
    public $combustivel;
    public $ligado = false;  // Estado do carro (ligado ou desligado)

    // Método para construir o carro
    public function construir($marca, $modelo, $cor, $ano, $combustivel = 0, $velocidade = 0, $tipoCambio = 'Automático', $capacidadeTanque = 50) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->combustivel = $combustivel;
        $this->velocidade = $velocidade;
        $this->tipoCambio = $tipoCambio;
        $this->capacidadeTanque = $capacidadeTanque;
    }

    // Método para ligar o carro
    public function ligar() {
        if ($this->combustivel > 0) {
            $this->ligado = true;
            echo "Carro ligado.<br>";
        } else {
            echo "Não há combustível suficiente para ligar o carro.<br>";
        }
    }

    // Método para desligar o carro
    public function desligar() {
        if ($this->ligado) {
            $this->ligado = false;
            echo "Carro desligado.<br>";
        } else {
            echo "O carro já está desligado.<br>";
        }
    }

    // Método para aumentar a velocidade
    public function acelerar($kmPorHora) {
        if ($this->ligado) {
            if ($this->combustivel > 0) {
                $this->velocidade += $kmPorHora;
                $this->combustivel -= $kmPorHora * 0.1; // Consome 0.1 litro por cada 1 km/h acelerado
                if ($this->combustivel < 0) $this->combustivel = 0; // Não permite combustível negativo
                echo "Acelerando... Velocidade atual: " . $this->velocidade . " km/h.<br>";
            } else {
                echo "Não há combustível suficiente para acelerar.<br>";
            }
        } else {
            echo "O carro está desligado. Ligue o carro primeiro.<br>";
        }
    }

    // Método para calcular o consumo de combustível em km/l
    public function calcularConsumo() {
        if ($this->velocidade > 0 && $this->combustivel > 0) {
            $consumo = $this->capacidadeTanque / $this->combustivel;
            echo "O consumo de combustível é de " . round($consumo, 2) . " km/l.<br>";
        } else {
            echo "Não é possível calcular o consumo sem combustível ou sem velocidade.<br>";
        }
    }

    // Método para exibir as informações do carro
    public function exibirInformacoes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Combustível: " . $this->combustivel . " litros<br>";
        echo "Velocidade: " . $this->velocidade . " km/h<br>";
        echo "Tipo de Câmbio: " . $this->tipoCambio . "<br>";
        echo "Capacidade do Tanque: " . $this->capacidadeTanque . " litros<br>";
        echo "Status: " . ($this->ligado ? "Ligado" : "Desligado") . "<br><br>";
    }
}

// Criando um objeto Carro e exibindo as informações
$objCarro = new Carro();
$objCarro->construir("Chevrolet", "Onix", "Vermelho", 2025, 10, 0, "Automático", 45);
$objCarro->exibirInformacoes();

// Ligando o carro
$objCarro->ligar();

// Acelerando
$objCarro->acelerar(20);

// Calculando o consumo
$objCarro->calcularConsumo();

// Exibindo informações novamente
$objCarro->exibirInformacoes();

// Desligando o carro
$objCarro->desligar();

// Tentando acelerar com o carro desligado
$objCarro->acelerar(10);

?>
