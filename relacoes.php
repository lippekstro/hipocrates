<?php
require_once "conexao.php";
class Relacoes
{
    public $cpf_responsavel;
    public $nome_mae;
    public $nome_pai;
    public $nome_responsavel;
    public $nome_conjuge;


    public function inserir()
    {
        $sql = "INSERT INTO relacoes (cpf_responsavel,nome_mae,nome_pai,nome_responsavel,nome_conjuge) VALUES (:cpf_responsavel,:nome_mae,:nome_pai,:nome_responsavel,:nome_conjuge)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":cpf_responsavel", $this->cpf_responsavel);
        $stmt->bindValue(":nome_mae", $this->nome_mae);
        $stmt->bindValue(":nome_pai", $this->nome_pai);
        $stmt->bindValue(":nome_responsavel", $this->nome_responsavel);
        $stmt->bindValue(":nome_conjuge", $this->nome_conjuge);
        $stmt->execute();
    }
}
