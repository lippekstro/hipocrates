<?php
require_once "conexao.php";
class Responsavel
{
    public $cpf;
    public $nome_mae;
    public $nome_pai;
    public $nome_responsavel;
    public $nome_conjuge;


    public function inserir()
    {
        $sql = "INSERT INTO responsavel (cpf,nome_mae,nome_pai,nome_responsavel,nome_conjuge) VALUES (:cpf,:nome_mae,:nome_pai,:nome_responsavel,:nome_conjuge)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":cpf", $this->cpf);
        $stmt->bindValue(":nome_mae", $this->nome_mae);
        $stmt->bindValue(":nome_pai", $this->nome_pai);
        $stmt->bindValue(":nome_responsavel", $this->nome_responsavel);
        $stmt->execute();
    }
}
