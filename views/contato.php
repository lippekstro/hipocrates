<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php";
?>

<section style="margin: 1rem;">
    <form action="">
        <h1>Envie-nos uma Mensagem</h1>
        <fieldset>
            <div class="form-item">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo">
            </div>

            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-item">
                <label for="texto">Texto</label>
                <textarea name="texto" id="texto" cols="50" rows="5"></textarea>
            </div>

        </fieldset>

        <div class="form-item">
            <button type="submit">
                Enviar
            </button>
        </div>
    </form>
</section>

<section class="contato-icons">
    <div>
        <h1>Nossos Contatos</h1>
    </div>

    <div>
        <a href="tel:(98) 9 1111-1111"><img src="/hipocrates/imgs/icones/whatsapp.svg" alt="" class="icons-svg" width="50rem"></a>
        <a href="https://instagram.com/projeto_hipocrates"><img src="/hipocrates/imgs/icones/instagram.svg" alt="" class="icons-svg" width="50rem"></a>
        <a href="https://facebook.com/projeto_hipocrates"><img src="/hipocrates/imgs/icones/facebook.svg" alt="" class="icons-svg" width="50rem"></a>
    </div>

</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php";
?>