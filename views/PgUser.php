<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php"
?>

<section class="area_login">
    <div class="login">
        <h3>Entrar</h3>
        <form action="/hipocrates/controllers/login_controller.php" method="post">
            <input type="text" name="cpf" placeholder="Digite seu CPF" maxlength="14" autocomplete="off" autofocus required>
            <input type="password" name="senha" placeholder="Digite sua senha" required>

            <span>Esqueceu sua senha? <a href="/hipocrates/views/senha.php">Redefinir</a></span>

            <button type="submit">
                Avançar
            </button>
        </form>
    </div>
</section>

<!-- <script src="/hipocrates/js/login.js"></script> -->
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php"
?>