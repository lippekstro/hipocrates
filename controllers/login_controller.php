<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/hipocrates/db/conexao.php';
session_start();
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

try {
    $query = "select * from paciente where cpf = :cpf LIMIT 1";
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(":cpf", $cpf);
    $stmt->execute();
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0) {
        if (password_verify($senha, $registro['senha'])) {
            $_SESSION['usuario']['nome'] = $registro['nome'];
            $_SESSION['usuario']['cpf'] = $registro['cpf'];
            $_SESSION['usuario']['foto'] = $registro['foto'];
            
            

            header("Location: /hipocrates/index.php");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
