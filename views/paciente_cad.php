<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php"
?>

<section id="section-cad-paciente">
    <form action="/hipocrates/controllers/add_paciente.php" method="post" enctype="multipart/form-data" id="cad-user">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <div class="form-item">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="form-item">
                <label for="rg">RG</label>
                <input type="text" name="rg" id="rg" required>
            </div>

            <div class="form-item">
                <label for="orgao">Orgao Emissor</label>
                <select name="orgao" id="orgao">
                    <option value="ssp" selected>SSP</option>
                    <option value="PC">PC</option>
                    <option value="PM">PM</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="form-item">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" required>
            </div>

            <div class="form-item">
                <label for="cns">CNS</label>
                <input type="text" name="cns" id="cns" required>
            </div>

            <div class="form-item">
                <label for="genero">Genero</label>
                <select name="genero" id="genero">
                    <option value="M" selected>Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <div class="form-item">
                <label for="nascimento">Nascimento</label>
                <input type="date" name="nascimento" id="nascimento" required>
            </div>

            <div class="form-item">
                <label for="estado_civ">Estado Civil</label>
                <select name="estado_civ" id="estado_civ">
                    <option value="solteiro" selected>Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="viuvo">Viuvo</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="uniao estável">União Estável</option>
                </select>
            </div>

            <div class="form-item">
                <label for="etnia">Etnia</label>
                <select name="etnia" id="etnia">
                    <option value="branco" selected>Branco</option>
                    <option value="preto">Preto</option>
                    <option value="pardo">Pardo</option>
                    <option value="amarelo">Amarelo</option>
                    <option value="indigena">Indigena</option>
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

        <fieldset>
            <legend>Contato</legend>
            <div class="form-item">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" required>
            </div>
            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
        </fieldset>


        <fieldset>
            <legend>Saúde</legend>
            <div class="form-item">
                <label for="cognitivas">cognitivas</label>
                <input type="checkbox" name="limitacoes[]" id="cognitivas" value="cognitivas">
            </div>
            <div class="form-item">
                <label for="auditivas">auditivas</label>
                <input type="checkbox" name="limitacoes[]" id="auditivas" value="auditivas">
            </div>
            <div class="form-item">
                <label for="visuais">visuais</label>
                <input type="checkbox" name="limitacoes[]" id="visuais" value="visuais">
            </div>
            <div class="form-item">
                <label for="locomotivas">locomotivas</label>
                <input type="checkbox" name="limitacoes[]" id="locomotivas" value="locomotivas">
            </div>
            <div class="form-item">
                <label for="outros">outros</label>
                <input type="checkbox" name="limitacoes[]" id="outros" value="outros">
            </div>
            <div class="form-item">
                <label for="tipo_sangue">Tipo Sanguineo</label>
                <select name="tipo_sangue" id="tipo_sangue">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="nulo" selected>Fator Nulo</option>
                </select>
            </div>
        </fieldset>

        <fieldset>
            <legend>Endereço</legend>
            <div class="form-item">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" required>
            </div>
            <div class="form-item">
                <label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" id="logradouro" required>
            </div>
            <div class="form-item">
                <label for="numero">Numero</label>
                <input type="text" name="numero" id="numero" required>
            </div>
            <div class="form-item">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento">
            </div>
            <div class="form-item">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" required>
            </div>
            <div class="form-item">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" required>
            </div>
            <div class="form-item">
                <label for="estado">Estado</label>
                <input type="text" maxlength="2" name="estado" id="estado" required>
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