<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php"
 ?>



    <br><br><br>

    <section class="area_login">
        <div class="login">
            <div>

                <form>
                    <fieldset>
                            <input class="num" type="number" value="" required>
                            <input class="num" type="number" value="" required>
                            <input class="num" type="number" value="" required>
                            <input class="num" type="number" value="" required>
                        </div>

                        <h4>Não recebeu o código de confirmação? Reenvia</h4>

                        <button onclick="window.open('/views/recsenha.html');">Avançar</button>
                    </fieldset>
                </form>



            </div>

        </div>

    </section>
</body>
<script src="/js/ver.js"></script>

</html>

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php"
 ?>