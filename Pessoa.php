<?php

class Pessoa {
    public $nome = "";
    public $dataNascimento = "";
    public $sexo = "";
    public $nacionalidade = "";
    public $estadoCivil = "";
    public $tipagemSanguinea = "";
    public $cpf = "";
    public $nomeMae = "";
    public $nomePai = "";
    public $telefone = "";
    public $email = "";

    public function editarNome($nome) {
        $this->nome = $nome;
    }

    public function obterNome() {
        return $this->nome;
    }

    public function editarSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function obterSexo() {
        return $this->sexo;
    }

    public function editarNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function obterNacionalidade() {
        return $this->nacionalidade;
    }

    public function editarEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    public function obterEstadoCivil() {
        return $this->estadoCivil;
    }

    public function editarTipagemSanguinea($tipagemSanguinea) {
        $this->tipagemSanguinea = $tipagemSanguinea;
    }

    public function obterTipagemSanguinea() {
        return $this->tipagemSanguinea;
    }

    public function editarCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function obterCpf() {
        return $this->cpf;
    }

    public function editarNomeMae($nomeMae) {
        $this->nomeMae = $nomeMae;
    }

    public function obterNomeMae() {
        return $this->nomeMae;
    }

    public function editarNomePai($nomePai) {
        $this->nomePai = $nomePai;
    }

    public function obterNomePai() {
        return $this->nomePai;
    }

    public function editarTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function obterTelefone() {
        return $this->telefone;
    }

    public function editarEmail($email) {
        $this->email = $email;
    }

    public function obterEmail() {
        return $this->email;
    }
}
