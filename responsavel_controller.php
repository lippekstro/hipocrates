<?php
require_once "responsavel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $cpf = $_POST['cpf'];
        $nome_mae = $_POST['nome_mae'];
        $nome_pai = $_POST['nome_pai'];
        $nome_conjuge = $_POST['nome_conjuge'];
        $nome_responsavel = $_POST['nome_responsavel'];

        $responsavel = new responsavel();

        $responsavel->cpf = $cpf;
        $responsavel->nome_mae = $nome_mae;
        $responsavel->nome_pai = $nome_pai;
        $responsavel->nome_conjuge = $nome_conjuge;
        $responsavel->nome_responsavel = $nome_responsavel;
        $responsavel->inserir();
    } catch (Exception $e) {
        echo "Erro ao inserir responsavel: " . $e->getMessage();
    }
}
