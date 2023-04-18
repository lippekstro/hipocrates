<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/models/medico.php";

$medico = new Medico($_SESSION['usuario']['id_usuario']);
?>

<section id="perfil">
    <h1><?= $medico->nome ?></h1>

    <div class="img-pessoais">
        <div class="metade">
            <figure">
                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($medico->foto); ?>" alt="" width="100%">
            </figure>
        </div>

        <div class="metade">
            <fieldset>
                <div class="form-item">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" value="<?= $medico->cpf ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="crm">CRM:</label>
                    <input type="text" id="crm" value="<?= $medico->crm ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="especialidade">Especialidade:</label>
                    <input type="text" id="especialidade" value="<?= $medico->especialidade ?>" disabled>
                </div>
            </fieldset>

        </div>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php";
?>