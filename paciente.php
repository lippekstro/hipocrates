<?php
require_once "conexao.php";

class Paciente
{
    public $foto;
    public $cpf;
    public $rg;
    public $cns;
    public $nome;
    public $idade;
    public $genero;
    public $data_nascimento;
    public $nacionalidade;
    public $orgao_emissor;
    public $estado_civil;
    // public $senha;
    public $limitacoes;
    public $opicao;
    public $data_hora_cadastro;
    public $etinia;
    public $tipo_saguineo;

    public function inserir()
    {

        $sql = "INSERT INTO paciente (foto,cpf,rg,cns,nome,idade,genero,data_nascimento,nacionalidade,orgao_emissor,estado_civil,/* senha, */limitacoes,data_hora_cadastro,etinia,tipo_saguineo)
        VALUES (:foto, :cpf, :rg, :cns, :nome, :idade, :genero, :data_nascimento, :nacionalidade, :orgao_emissor, :estado_civil, /* :senha, */ :limitacoes, :data_hora_cadastro, :etinia, :tipo_saguineo )";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":foto", $this->foto);
        $stmt->bindValue(":cpf", $this->cpf);
        $stmt->bindValue(":rg", $this->rg);
        $stmt->bindValue(":cns", $this->cns);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":idade", $this->idade);
        $stmt->bindValue(":genero", $this->genero);
        $stmt->bindValue(":data_nascimento", $this->data_nascimento);
        $stmt->bindValue(":nacionalidade", $this->nacionalidade);
        $stmt->bindValue(":orgao_emissor", $this->orgao_emissor);
        $stmt->bindValue(":estado_civil", $this->estado_civil);
        /* $stmt->bindValue(":senha", $this->senha); */
        $stmt->bindValue(":limitacoes", $this->limitacoes);
        $stmt->bindValue(":data_hora_cadastro", $this->data_hora_cadastro);
        $stmt->bindValue(":etinia", $this->etinia);
        $stmt->bindValue(":tipo_saguineo", $this->tipo_saguineo);

        $stmt->execute();
    }
}
