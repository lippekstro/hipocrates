<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php"
 ?>

    <br><br><br>

    <section class="area_login">
        <div class="login">
            <div>

                <form action="/views/PgUser.html" method="post">
                    <fieldset>

                        <input onclick="validaSenha()" type="password" name="senha1" id="senha1" placeholder="NOVA SENHA" autofocus required>
                        <br><br>
                        <input type="password" name="senha2" id="senha2" placeholder="CONFIRMAR NOVA SENHA" required>
                        <br>

                        <button onclick="return validarSenha();">Avançar</button>
                        
                    </fieldset>
                </form>



            </div>

        </div>

    </section>
</body>
<script src="/js/teste.js"></script>

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php"
 ?>