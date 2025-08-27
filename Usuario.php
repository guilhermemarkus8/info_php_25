<?php

require_once "./Model.php";

//CRUD 


class Usuario {
    public $id = 0;
    public $login = "";
    public $senha = "";
    public $emailRecuperacao = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;
    private $modelUsuario = null;

    public function __construct($model){
        $this->modelUsuario = $model;

    }

    public function listarUsuarios(){
        $sql = "SELECT * FROM  usuarios";

        $usuarios = $this->modelUsuario->Read($sql);

        foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>" ;
            echo $usuario->senha . "<br>" ;
            echo $usuario->email_recuperacao . "<br>" ;
        }
    }

    public function buscarUsuarios($id){
        $sql = "SELECT * FROM  usuarios WHERE id=$id";


        $usuarios = $this->modelUsuario->ReadOne($id);

        foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>" ;
            echo $usuario->senha . "<br>" ;
            echo $usuario->email . "<br>" ;
        }
    }

    public function updateUsuarios($sql){
        $sql = "SELECT * FROM  usuarios";

        $usuarios = $this->modelUsuario->Update($sql);

        foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>" ;
            echo $usuario->senha . "<br>" ;
            echo $usuario->email_recuperacao . "<br>" ;
        }
    }

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

$usuario = new Usuario($model);
$usuario->listarUsuarios();
$usuario->updateUsuarios();
