<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Hipócrates</title>
    <link rel="shortcut icon" href="/hipocrates/imgs/logo.png" type="image/x-icon">
    
    <link rel="stylesheet" href="/hipocrates/css/agendamento.css" />
    <link rel="stylesheet" href="/hipocrates/css/formulario.css" />
    <link rel="stylesheet" href="/hipocrates/css/form.css" />
    <link rel="stylesheet" href="/hipocrates/css/login.css">
    <link rel="stylesheet" href="/hipocrates/css/style.css" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav>
        <figure id="logo">
            <img src="/hipocrates/imgs/logo.png" alt="logo" width="50rem" height="50rem">
        </figure>

        <a href="/hipocrates/index.php">Incio <span class="material-symbols-outlined">home</span></a>
        <a href="/hipocrates/views/agendamento.php">Agendamento <span class="material-symbols-outlined">edit_calendar</span></a>
        <a href="/hipocrates/views/sobre.php">Sobre <span class="material-symbols-outlined">info</span></a>

        <button class="dropdown-btn">
            Serviços
            <span class="material-symbols-outlined">medical_services</span>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <?php if (!isset($_SESSION['usuario']['cpf'])) : ?>
            <a href="/hipocrates/views/PgUser.php">Login <span class="material-symbols-outlined">login</span></a>
        <?php else : ?>
            <button class="dropdown-btn">
                <?= $_SESSION['usuario']['nome'] ?>
                <figure>
                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($_SESSION['usuario']['foto']); ?>" alt="" width="30rem" height="30rem" style="border-radius: 50%;">
                </figure>
            </button>
            <div class="dropdown-container">
                <a href="#">Perfil <span class="material-symbols-outlined">account_circle</span></a>
                <a href="/hipocrates/controllers/logout_controller.php">Logout <span class="material-symbols-outlined">logout</span></a>
            </div>
        <?php endif; ?>

    </nav>

    <main>