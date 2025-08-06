<?php

class Usuario {
    public $id = 0;
    public $login = "";
    public $senha = "";
    public $emailRecuperacao = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;

    public function logar($login, $senha) {
        $this->login = $login;
        $this->senha = $senha;

        $senhaCrypto = hash('sha256',$this->$senha);

        $this->logado = true;
    }

    public function deslogar() {
        $this->logado = false;
    }

    public function desativarUsuario($id) {
        $this->status = false;
    }

    public function ativarUsuario($id) {
        $this->status = true;
    }

    public function recuperarSenha($emailRecuperacao) {
        $this->emailRecuperacao = $emailRecuperacao;
    }

    public function alterarTipoPerfil($id, $tipoPerfil) {
        $this->tipoPerfil = $tipoPerfil;
    }

    public function alterarPermissoes($id, $permissoes) {
        $this->permissoes = $permissoes;
    }
}
