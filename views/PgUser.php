<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php"
 ?>

    <br><br><br>

    <section class="area_login">
        <div class="login">
            <div>
                <h3>Entrar</h3>

                <form method="post">

                    <input type="text" name="numero" placeholder="Digite seu CPF" maxlength="14" autocomplete="off" autofocus required >
                    <input type="password" name="senha" placeholder="Digite sua senha" required>



                    <h4>Esqueceu sua senha ?<a href="/views/senha.html">Redefinir</a> </h4>
                    <button>Avançar</button>




                </form>



            </div>

        </div>

    </section>

 <script src="/js/login.js"></script>
 <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php"
 ?>