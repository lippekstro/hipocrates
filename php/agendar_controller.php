<?php
require_once "paciente.php";
try {
    $cpf = $_POST['cpf'];
    $paciente = $_POST['paciente'];
    $telefone = $_POST['telefone'];

    $paciente = new Paciente();
    $paciente->cpf = $cpf;
    $paciente->paciente = $paciente;
    $paciente->telefone = $telefone;

    $paciente->inserir();

    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
