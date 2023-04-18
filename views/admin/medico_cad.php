<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php"
?>

<section id="section-cad-paciente">
    <form action="/hipocrates/controllers/add_medico.php" method="post" enctype="multipart/form-data" id="cad-user">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <div class="form-item">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="form-item">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" required>
            </div>

            <div class="form-item">
                <label for="crm">CRM</label>
                <input type="text" name="crm" id="crm" required>
            </div>

            <div class="form-item">
                <label for="especialidade">Especialidade</label>
                <select name="especialidade" id="especialidade">
                    <option value="clinico geral" selected>Clinico Geral</option>
                    <option value="psicologia">Psicologia</option>
                    <option value="odontologia">Odontologia</option>
                </select>
            </div>

            <div class="form-item">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto">
            </div>

            <div class="form-item">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>

        </fieldset>

        <button type="submit">
            Cadastrar
        </button>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php"
?>