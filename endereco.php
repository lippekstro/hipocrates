<?php
require_once "conexao.php";

class Endereco
{
    public $cep;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;

    public function inserir()
    {
        $sql = "INSERT INTO endereco (cep, logradouro, numero, complemento, bairro, cidade, estado) VALUES (:cep, :logradouro, :numero, :complemento, :bairro, :cidade, :estado)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->execute(array(
            ':cep' => $this->cep,
            ':logradouro' => $this->logradouro,
            ':numero' => $this->numero,
            ':complemento' => $this->complemento,
            ':bairro' => $this->bairro,
            ':cidade' => $this->cidade,
            ':estado' => $this->estado
        ));
        $stmt->execute();
    }
}
