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

    public function obterPermissoesUsuario(){
        $sql = "select
                    u.id,
                    p.perfil as perfil
                FROM 
                    usuarios u
                join perfis p ON
                    u.id = p.id_usuario
                WHERE id=$id";
                
            $usuarioPerfil= $this->modelUsuario->ReadOne($sql);
                


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
$usuario->listarUsuarios(1);
$usuario->updateUsuarios(1);
$usuario->buscarUsuarios(1);
$usuario->excluirUsuarios(10);



admin
diretor
gerente
supervisor
encarregado
colaborador
convidado


("create")
("read") 
("update")
("delete")

("create"), ("read")
("create"), ("update") 
("create"), ("delete")
(
("create"), ("read"), ("update")
("create"), ("read"), ("delete")
("create"), ("read"), ("update, ("delete")

UPDATE permissoes 
set admin='permitido'

UPDATE permissoes 
set diretor='permitido' Where id < 4;

UPDATE permissoes 
set gerente='permitido' Where id < 3;

SELECT 
p.id_usuario
p.perfil 
CASE
WHEN p.perfil = 'admin' then per.admin
WHEN p.perfil = 'diretor' then per.diretor
else 'negado'
end as permissoes per
FROM
perfis p

SELECT * FROM 
(select  