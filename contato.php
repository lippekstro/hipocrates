<?php
require_once "conexao.php";

class Paciente
{
    public $foto;
    public $cpf;
    public $rg;
    public $cns;
    public $nome;
    public $genero;
    public $data_nascimento;
    public $orgao_emissor;
    public $estado_civil;
    public $limitacoes;
    public $etnia;
    public $tipo_sanguineo;


    public function inserir()
    {
        $sql = "INSERT INTO paciente (foto, cpf, rg, cns, nome, genero, data_nascimento, orgao_emissor, estado_civil, limitacoes, etnia, tipo_sanguineo) VALUES (:foto, :cpf, :rg, :cns, :nome, :genero, :data_nascimento, :orgao_emissor, :estado_civil, :limitacoes, :etnia, :tipo_sanguineo )";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":foto", $this->foto);
        $stmt->bindValue(":cpf", $this->cpf);
        $stmt->bindValue(":rg", $this->rg);
        $stmt->bindValue(":cns", $this->cns);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":genero", $this->genero);
        $stmt->bindValue(":data_nascimento", $this->data_nascimento);
        $stmt->bindValue(":orgao_emissor", $this->orgao_emissor);
        $stmt->bindValue(":estado_civil", $this->estado_civil);
        $stmt->bindParam(':limitacoes', $this->limitacoes);
        $stmt->bindValue(":etnia", $this->etnia);
        $stmt->bindValue(":tipo_sanguineo", $this->tipo_sanguineo);
        $stmt->execute();
    }
}
