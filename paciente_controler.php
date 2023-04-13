<?php
require_once "paciente.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $cns = $_POST['cns'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $nacionalidade = $_POST['nacionalidade'];
        $orgao_emissor = $_POST['orgao_emissor'];
        $estado_civil = $_POST['estado_civil'];
        $limitacoes = $_POST["limitacoes"];
        $limitacoes = implode(",", $limitacoes);
        $data_hora_cadastro = $_POST['data_hora_cadastro'];
        $etinia = $_POST['etinia'];
        $tipo_saguineo = $_POST['tipo_saguineo'];
        if (!empty($_FILES['imagem']['tmp_name'])) {
            $foto = file_get_contents($_FILES['imagem']['tmp_name']);
        }
        $paciente = new Paciente();
        $paciente->foto = $foto;
        $paciente->cpf = $cpf;
        $paciente->rg = $rg;
        $paciente->cns = $cns;
        $paciente->nome = $nome;
        $paciente->idade = $idade;
        $paciente->genero = $genero;
        $paciente->data_nascimento = $data_nascimento;
        $paciente->nacionalidade = $nacionalidade;
        $paciente->orgao_emissor = $orgao_emissor;
        $paciente->estado_civil = $estado_civil;
        $paciente->limitacoes = $limitacoes;
        $paciente->data_hora_cadastro = $data_hora_cadastro;
        $paciente->etinia = $etinia;
        $paciente->tipo_saguineo = $tipo_saguineo;

        $paciente->inserir();
    } catch (Exception $e) {
        echo "Erro ao inserir paciente: " . $e->getMessage();
    }
}
