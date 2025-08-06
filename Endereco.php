    <?php
    
    class Endereco {
    public $bairro = "";
    public $logradouro = "";
    public $complemento = "";
    public $cidade = "";
    public $estado = "";
    public $cep = "";
    public $pais = "";
    public $tipoEndereco = ""; // residencial/comercial/industrial
    public $numero = "";

    public function editarBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function obterBairro() {
        return $this->bairro;
    }

    public function editarLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function obterLogradouro() {
        return $this->logradouro;
    }

    public function editarComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function obterComplemento() {
        return $this->complemento;
    }

    public function editarCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function obterCidade() {
        return $this->cidade;
    }

    public function editarEstado($estado) {
        $this->estado = $estado;
    }

    public function obterEstado() {
        return $this->estado;
    }

    public function editarCep($cep) {
        $this->cep = $cep;
    }

    public function obterCep() {
        return $this->cep;
    }

    public function editarPais($pais) {
        $this->pais = $pais;
    }

    public function obterPais() {
        return $this->pais;
    }

    public function editarTipoEndereco($tipoEndereco) {
        $this->tipoEndereco = $tipoEndereco;
    }

    public function obterTipoEndereco() {
        return $this->tipoEndereco;
    }

    public function editarNumero($numero) {
        $this->numero = $numero;
    }

    public function obterNumero() {
        return $this->numero;
    }
}


