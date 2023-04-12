<!DOCTYPE html>
<html lang="pt-Br" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Hipócrates</title>
    <link rel="stylesheet" href="/hipocrates/css/style.css" />
    <link rel="stylesheet" href="/hipocrates/css/agendamento.css" />
    <link rel="stylesheet" href="/hipocrates/css/formulario.css" />
    <link rel="stylesheet" href="/hipocrates/css/form.css" />
    <link rel="stylesheet" href="/hipocrates/css/login.css">
    <link rel="stylesheet" href="/hipocrates/css/rec.css">
    <link rel="stylesheet" href="/hipocrates/css/senha.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class="bx bxl-c-plus-plus"></i>
            <span class="logo_name">CodingLab</span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
            </li>
            <li>
                <a href="/hipocrates/index.php">
                    <i class="bx bx-home"></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/hipocrates/index.php">Inicio</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="bx bx-collection"></i>
                        <span class="link_name">Serviços</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Serviços</a></li>
                    <li><a href="#">Minhas Consultas</a></li>
                    <li><a href="#">Histórico de Consultas</a></li>
                    <li><a href="#">Prontuario Digital</a></li>
                </ul>
            </li>
            <!-- <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="bx bx-donate-heart"></i>
                        <span class="link_name">Doações</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Doações</a></li>
                    <li><a href="#">Doação de Sangue</a></li>
                    <li><a href="#">Doação de Medula</a></li>
                    <li><a href="#">Doação de Órgãos</a></li>
                </ul>
            </li> -->
            <li>
                <div class="iocn-link">
                    <a href="/hipocrates/views/agendamento.php">
                        <i class="bx bx-calendar"></i>
                        <span class="link_name">Agendamentos</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="/hipocrates/views/agendamento.php">Agendamentos</a></li>
                    <!-- <li><a href="#">Clinico Geral</a></li>
                    <li><a href="#">Psicologia</a></li>
                    <li><a href="#">Odontologia</a></li> -->
                </ul>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="bx bx-detail"></i>
                    <span class="link_name">Noticias</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Noticias</a></li>
                </ul>
            </li> -->
            <li>
                <a href="/hipocrates/views/sobre.php">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Sobre...</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/hipocrates/views/sobre.php">Sobre...</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="link_name">Fale Conosco</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Fale Conosco</a></li>
                </ul>
            </li>
           <!--  <li>
                <a href="#">
                    <i class="bx bx-pulse"></i>
                    <span class="link_name">Consultório</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Consultório</a></li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Configurações</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Configurações</a></li>
                </ul>
            </li> -->
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="#" alt="profileImg" />
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Usuário 1</div>
                        <div class="job">Paciente</div>
                    </div>
                    <i class="bx bx-log-out"></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">