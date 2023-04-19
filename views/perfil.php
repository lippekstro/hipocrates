<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/models/paciente.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/models/endereco.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/models/acompanhante.php";

$paciente = new Paciente($_SESSION['usuario']['id_usuario']);
$endereco = new Endereco($paciente->id_endereco);

$lista = Acompanhante::listar($_SESSION['usuario']['id_usuario']);
?>

<section class="perfil">
    <h1><?= $paciente->nome ?></h1>

    <div class="img-pessoais">
        <div class="metade">
            <figure style="height: 100%;">
                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($paciente->foto); ?>" alt="" width="100%">
            </figure>
        </div>

        <div class="metade">
            <fieldset>
                <div class="form-item">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" value="<?= $paciente->cpf ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="rg">RG:</label>
                    <input type="text" id="rg" value="<?= $paciente->rg ?> <?= $paciente->orgao_emissor ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="cns">CNS:</label>
                    <input type="text" id="cns" value="<?= $paciente->cns ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="genero">Gênero:</label>
                    <input type="text" id="genero" value="<?= $paciente->genero ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="nascimento">Data de Nasc.:</label>
                    <input type="text" id="nascimento" value="<?= date("d/m/Y", strtotime($paciente->nascimento))    ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="etnia">Etnia:</label>
                    <input type="text" id="etnia" value="<?= $paciente->etnias ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="sangue">Tipo Sanguineo:</label>
                    <input type="text" id="sangue" value="<?= $paciente->tipo_sanguineo ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="estado_civil">Estado Civil:</label>
                    <input type="text" id="estado_civil" value="<?= $paciente->estado_civil ?>" disabled>
                </div>
            </fieldset>

        </div>
    </div>

    <div class="img-pessoais">
        <fieldset>
            <div class="form-item">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" value="<?= $paciente->telefone ?>" disabled>
            </div>

            <div class="form-item">
                <label for="email">Email:</label>
                <input type="text" id="email" value="<?= $paciente->email ?>" disabled>
            </div>
        </fieldset>

    </div>

    <div class="img-pessoais">
        <fieldset>
            <div class="form-item">
                <label for="limitacao">Limitações:</label>
                <input type="text" id="limitacao" value="<?= $paciente->limitacoes ?>" disabled>
            </div>
        </fieldset>
    </div>


    <fieldset>
        <div class="img-pessoais">
            <div class="form-item">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" value="<?= $endereco->cep ?>" disabled>
            </div>
            <div class="form-item">
                <label for="logradouro">Logradouro:</label>
                <input type="text" id="logradouro" value="<?= $endereco->logradouro ?>" disabled>
            </div>
        </div>

        <div class="img-pessoais">
            <div class="form-item">
                <label for="numero">Numero:</label>
                <input type="text" id="numero" value="<?= $endereco->numero ?>" disabled>
            </div>
            <div class="form-item">
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" value="<?= $endereco->complemento ?>" disabled>
            </div>
        </div>

        <div class="img-pessoais">
            <div class="form-item">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" value="<?= $endereco->bairro ?>" disabled>
            </div>
            <div class="form-item">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" value="<?= $endereco->cidade ?>" disabled>
            </div>
            <div class="form-item">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" value="<?= $endereco->estado ?>" disabled>
            </div>
        </div>
    </fieldset>

    <a href="/hipocrates/views/acompanhante_cad.php">
        <button type="submit">
            Adicionar Acompanhante
        </button>
    </a>
</section>

<h1>Acompanhantes</h1>
<?php foreach ($lista as $acompanhante) : ?>
    <section class="perfil">
        <fieldset>
            <div class="img-pessoais">
                <div class="form-item">
                    <label for="nome_acompanhante">Nome:</label>
                    <input type="text" name="nome_acompanhante" id="nome_acompanhante" value="<?= $acompanhante['nome'] ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="cpf_acompanhante">CPF:</label>
                    <input type="text" name="cpf_acompanhante" id="cpf_acompanhante" value="<?= $acompanhante['cpf'] ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="telefone_acompanhante">Telefone:</label>
                    <input type="text" name="telefone_acompanhante" id="telefone_acompanhante" value="<?= $acompanhante['telefone'] ?>" disabled>
                </div>

                <div class="form-item">
                    <label for="tipo_acompanhante">Relação:</label>
                    <input type="text" name="tipo_acompanhante" id="tipo_acompanhante" value="<?= $acompanhante['tipo'] ?>" disabled>
                </div>
            </div>

        </fieldset>
    </section>
<?php endforeach; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php";
?>