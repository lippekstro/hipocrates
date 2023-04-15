<?php
require_once "paciente.php";
require_once "endereco.php";
require_once "relacoes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $cpf = $_POST['cpf'];
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        $cpf = (int)$cpf;
        $rg = $_POST['rg'];
        $rg = str_replace("-", "", $rg);
        $rg = (int)$rg;
        $cns = $_POST['cns'];
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $orgao_emissor = $_POST['orgao_emissor'];
        $estado_civil = $_POST['estado_civil'];
        $limitacoes = $_POST["limitacoes"];
        $limitacoes = implode(",", $limitacoes);
        $etnia = $_POST['etnia'];
        // $cpf_responsavel = $_POST['cpf_responsavel'];
        if (!empty($_FILES['imagem']['tmp_name'])) {
            $foto = file_get_contents($_FILES['imagem']['tmp_name']);
        }
        $paciente = new Paciente();
        $paciente->foto = $foto;
        $paciente->cpf = $cpf;
        $paciente->rg = $rg;
        $paciente->cns = $cns;
        $paciente->nome = $nome;
        $paciente->genero = $genero;
        $paciente->data_nascimento = $data_nascimento;
        $paciente->orgao_emissor = $orgao_emissor;
        $paciente->estado_civil = $estado_civil;
        $paciente->limitacoes = $limitacoes;
        $paciente->etnia = $etnia;
        // $paciente->cpf_responsavel = $cpf_responsavel;
        $paciente->inserir();
    } catch (Exception $e) {
        echo "Erro ao inserir paciente: " . $e->getMessage();
    }

    try {
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $endereco = new Endereco();
        $endereco->cep = $cep;
        $endereco->logradouro = $logradouro;
        $endereco->numero = $numero;
        $endereco->complemento = $complemento;
        $endereco->bairro = $bairro;
        $endereco->cidade = $cidade;
        $endereco->estado = $estado;
        $endereco->inserir();
    } catch (Exception $e) {
        echo "Erro ao inserir endereço: " . $e->getMessage();
    }

    try {
        $cpf_responsavel = $_POST['cpf_responsavel'];
        $nome_mae = $_POST['nome_mae'];
        $nome_pai = $_POST['nome_pai'];
        $nome_conjuge = $_POST['nome_conjuge'];
        $nome_responsavel = $_POST['nome_responsavel'];

        $relacoes = new Relacoes();
        $relacoes->cpf_responsavel = $cpf_responsavel;
        $relacoes->nome_mae = $nome_mae;
        $relacoes->nome_pai = $nome_pai;
        $relacoes->nome_conjuge = $nome_conjuge;
        $relacoes->nome_responsavel = $nome_responsavel;
        $relacoes->inserir();
    } catch (Exception $e) {
        echo "Erro ao inserir responsavel: " . $e->getMessage();
    }
}
