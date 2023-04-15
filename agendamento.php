<?php
require_once "paciente.php";
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>

<body>
    <div>
        <form action="controller.php" method="post" enctype="multipart/form-data" id="forms">
            <fieldset>
                <legend>Foto</legend>
                <div class="img_indetificacao">
                    <input type="file" name="imagem" id="imagem">
                    <!-- <input type="file" id="foto" name="foto"> -->
                    <!-- <img src="data:foto/jpg;charset=utf8;base64, <?= base64_encode($_POST['foto']); ?>" alt=""> -->
                </div>
            </fieldset>
            <fieldset>
                <legend>Nome</legend>
                <label for="nome">Nome completo</label>
                <input type="text" name="nome" id="nome" value="" placeholder="Digite seu nome completo">
            </fieldset>
            <fieldset>
                <legend>Data de Nascimento</legend>
                <label for="data_nascimento">Data Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="" placeholder="Data nascimento">
            </fieldset>
            <fieldset>
                <legend>Gênero</legend>
                <label for="genero">Gênero</label>
                <select name="genero" id="genero">
                    <option value="">Selecione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Estado civil</legend>
                <label for="estado_civil">Estado civil</label>
                <select name="estado_civil" id="estado_civil">
                    <option value="">Selecione...</option>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Casado">Casado</option>
                    <option value="Viúvo">Viúvo</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="União Estável">União Estável</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Documentos</legend>
                <label for="cpf">Seu CPF</label>
                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
                <br><br>
                <label for="rg">Seu RG</label>
                <input type="text" name="rg" id="rg" placeholder="Digite seu RG">
                <br><br>
                <label for="orgao_emissor">Órgão Emissor</label>
                <select name="orgao_emissor" id="orgao_emissor">
                    <option value="">Selecione...</option>
                    <option value="SSP">SSP - Secretaria de Segurança Pública</option>
                    <option value="PC">PC - Polícia Civil</option>
                    <option value="PM">PM - Polícia Militar</option>
                    <option value="DETRAN">DETRAN - Departamento Estadual de Trânsito</option>
                    <option value="DPF">DPF - Departamento de Polícia Federal</option>
                    <option value="CREA">CREA - Conselho Regional de Engenharia e Agronomia</option>
                    <option value="OAB">OAB - Ordem dos Advogados do Brasil</option>
                    <option value="CRM">CRM - Conselho Regional de Medicina</option>
                    <option value="COREN">COREN - Conselho Regional de Enfermagem</option>
                    <option value="CRO">CRO - Conselho Regional de Odontologia</option>
                </select>
                <br><br>
                <label for="cns">CNS</label>
                <input type="text" name="cns" id="cns" placeholder="Digite o CNS">
            </fieldset>
            <fieldset>
                <legend>Endereço</legend>
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep">
                <br><br>
                <label for="logradouro">Logradouro:</label>
                <input type="text" id="logradouro" name="logradouro">
                <br><br>
                <label for="numero">Numero:</label>
                <input type="number" id="numero" name="numero">
                <br><br>
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" name="complemento">
                <br><br>
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro">
                <br><br>
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade">
                <br><br>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado">
            </fieldset>
            <fieldset>
                <legend>Contato</legend>
                <label for="phone_DDD">Celular</label>
                <input type="text" name="phone_DDD" id="phone_DDD" placeholder="Digite seu número">
                <br><br>
                <label for="phone_fixe">Telefone Fixo</label>
                <input type="tel" name="phone_fixe" id="phone_fixe" placeholder="Digite seu telefone fixo(opcional)">
                <br><br>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="" placeholder="Digite seu E-mail">
            </fieldset>
            <fieldset>
                <legend>Limitações</legend>
                <input type="checkbox" name="limitacoes[]" value="Sem Deficiência"> Sem Deficiência<br>
                <input type="checkbox" name="limitacoes[]" value="Cognitiva">Cognitiva<br>
                <input type="checkbox" name="limitacoes[]" value="Locomoção">Locomoção<br>
                <input type="checkbox" name="limitacoes[]" value="Audição">Audição<br>
            </fieldset>
            <fieldset>
                <legend>Etnia</legend>
                <label for="etnia">Etnia</label>
                <select name="etnia" id="etnia">
                    <option value="">Selecione...</option>
                    <option value="Branca">Branca</option>
                    <option value="Preta">Preta</option>
                    <option value="Parda">Parda</option>
                    <option value="Amarela">Amarela</option>
                    <option value="Indígena">Indígena</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Relações</legend>
                <label for="nome_mae">Nome da mãe</label>
                <input type="text" name="nome_mae" value="" id="nome_mae" placeholder="Nome do Mãe">
                <br><br>
                <label for="nome_pai">Nome do Pai</label>
                <input type="text" name="nome_pai" value="" id="nome_pai" placeholder="Nome da Pai">
                <br><br>
                <label for="nome_conjuge">Conjugue</label>
                <input type="text" name="nome_conjuge" value="" id="nome_conjuge" placeholder="Nome do Conjugue">
                <br><br>
                <label for=" nome_responsavel">Nome do Responsavel</label>
                <input type="text" name=" nome_responsavel" value="" id="nome_responsavel" placeholder="Nome do Responsavel">
                <br><br>
                <label for="cpf_responsavel">CPF do Responsavel</label>
                <input type="number" name="cpf_responsavel" value="cpf_responsavel" id="cpf_responsavel" placeholder="CPF do Responsavel">
            </fieldset>
            <fieldset>
                <legend>Educação e Trabalho</legend>
                <label for="edu_tra">Nível de escolaridade</label>
                <select name="edu_tra" id="edu_tra">
                    <option value="">Selecione...</option>
                    <option value="">Analfabeto</option>
                    <option value="">Semi-Analfabeto</option>
                    <option value="">Ensino Fundamental Incompleto</option>
                    <option value="">Ensino Fundamental Completo</option>
                    <option value="">Ensino Médio Incompleto</option>
                    <option value="">Ensino Médio Completo</option>
                    <option value="">Ensino Técnico Incompleto</option>
                    <option value="">Ensino Técnico Completo</option>
                    <option value="">Ensino Superior Incompleto</option>
                    <option value="">Ensino Superior Completo</option>
                </select>
                <br><br>
                <label for="profissao">Profissão</label>
                <input type="text" name="profissao" value="" id="profissao" placeholder="Campo não obrigatorio">
                <br><br>
                <label for="empresa">Empresa onde trabalha</label>
                <input type="text" name="empresa" value="" id="empresa" placeholder="Campo não obrigatorio">
            </fieldset>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery.mask.js"></script>
    <script src="script.js"></script>
</body>

</html>