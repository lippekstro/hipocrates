<?php
require_once "paciente.php";
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
        <form action="adicionarController.php" method="post" enctype="multipart/form-data">
            <div class="indetificacao">
                <div class="img_indetificacao">
                    <input type="file" name="imagem" id="imagem">
                    <!-- <input type="file" id="foto" name="foto" > -->
                    <!-- <img src="data:foto/jpg;charset=utf8;base64, <?= base64_encode($_POST['foto']); ?>" alt=""> -->
                </div>
                <div class="dados_indetificacao">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" id="nome" value="" placeholder="Digite seu nome completo">
                    <label for="idade">Idade</label>
                    <input type="number" name="idade" id="idade" value="" placeholder="Digite sua idade">
                    <fieldset>
                        <legend>Gênero</legend>
                        <input type="radio" name="genero" value="Masculino" id="masculino">
                        <label for="masculino">Masculino</label>
                        <input type="radio" name="genero" value="Feminino" id="feminino">
                        <label for="feminino">Feminino</label>
                    </fieldset>
                    <label for="data_nascimento">Data Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="" placeholder="Data nascimento">
                    <label for="nacionalidade">Nacionalidade</label>
                    <input type="text" name="nacionalidade" id="nacionalidade" value="" placeholder="Nacionalidade">
                    <fieldset>
                        <legend>Estado civil</legend>
                        <input type="radio" name="estado_civil" value="solteiro" id="solteiro">
                        <label for="solteiro">Solteiro</label>
                        <input type="radio" name="estado_civil" value="casado" id="casado">
                        <label for="casado">Casado</label>
                        <input type="radio" name="estado_civil" value="divorciado" id="divorciado">
                        <label for="divorciado">Divorciado</label>
                    </fieldset>
                    <label for="cpf">Seu CPF</label>
                    <input type="number" name="cpf" id="cpf" value="" placeholder="Digite seu CPF">
                    <label for="rg">Seu RG</label>
                    <input type="number" name="rg" id="rg" value="" placeholder="Digite seu RG">
                    <label for="orgao_emissor">Órgão Emissor</label>
                    <select name="orgao_emissor" id="orgao_emissor">
                        <option value="">selecione</option>
                        <option value="SSP">SSP</option>
                        <option value="SJC">SJC</option>
                        <option value="SJT">SJT</option>
                    </select>
                </div>
                <div class="endereço">
                    <label for="cep">CEP</label>
                    <input type="number" name="cep" id="cep" value="" placeholder="Digite seu CEP">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" name="logradouro" id="logradouro" value="" placeholder="Digite o logradouro">
                    <label for="numero">Numero</label>
                    <input type="number" name="numero" id="numero" value="" placeholder="Numero da casa">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" value="" placeholder="Digite um complemento">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" value="" placeholder="Digite qual é seu bairro">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" value="" placeholder="Digite qual é sua cidade">
                    <label for="uf">UF</label>
                    <select name="uf" id="uf">
                        <option value="">selecione</option>
                        <option value="">AC</option>
                        <option value="">AL</option>
                        <option value="">AP</option>
                        <option value="">AM</option>
                        <option value="">BA</option>
                        <option value="">CE</option>
                        <option value="">DF</option>
                        <option value="">ES</option>
                        <option value="">GO</option>
                        <option value="">MA</option>
                        <option value="">MT</option>
                        <option value="">MS</option>
                        <option value="">MG</option>
                        <option value="">PA</option>
                        <option value="">PB</option>
                        <option value="">PR</option>
                        <option value="">PE</option>
                        <option value="">PI</option>
                        <option value="">RJ</option>
                        <option value="">RN</option>
                        <option value="">RS</option>
                        <option value="">RO</option>
                        <option value="">RR</option>
                        <option value="">SC</option>
                        <option value="">SP</option>
                        <option value="">SE</option>
                        <optopcoesion value="">TO</optopcoesion>
                    </select>
                </div>
                <div class="contato">
                    <label for="telefone_1">Celular</label>
                    <input type="tel" name="telefone_1" id="telefone_1" placeholder="Digite seu número">
                    <label for="telefone_2">Telefone Fixo</label>
                    <input type="tel" name="telefone_2" id="telefone_2" placeholder="Digite seu telefone fixo(opcional)">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" value="" placeholder="Digite seu E-mail">
                </div>
                <div class="limitacoes">
                    <fieldset>
                        <legend>Limitações</legend>
                        <input type="checkbox" name="limitacoes[]" value="Cognitiva"> Cognitiva<br>
                        <input type="checkbox" name="limitacoes[]" value="Locomoção"> Locomoção<br>
                        <input type="checkbox" name="limitacoes[]" value="Audição"> Audição<br>
                        <input type="checkbox" name="limitacoes[]" value="Sem Deficiência"> Sem Deficiência<br>
                    </fieldset>
                </div>
                <div class="cadastro">
                    <label for="data_hora_cadastro">Momento em que foi cadastrado</label>
                    <input type="datetime" id="data_hora_cadastro" name="data_hora_cadastro" value="">
                    <fieldset>
                        <legend>Etinia</legend>
                        <input type="radio" name="etinia" value="Negro" id="negro">
                        <label for="negro">Negro</label>
                        <input type="radio" name="etinia" value="Branco" id="branco">
                        <label for="branco">Branco</label>
                        <input type="radio" name="etinia" value="Pardo" id="pardo">
                        <label for="pardo">Pardo</label>
                    </fieldset>
                    <label for="tipo_saguineo">Tipo saguineo</label>
                    <select name="tipo_saguineo" id="tipo_sanguineo">
                        <option value="">selecione</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <label for="cns">CNS</label>
                    <input type="number" name="cns" value="cns" id="cns" placeholder="Digite o CNS">
                </div>
                <div class="relacoes">
                    <label for="nomeMae">Nome da mãe</label>
                    <input type="text" name="nomeMae" value="" id="nomeMae" placeholder="Nome do Mãe">

                    <label for="nomePai">Nome do Pai</label>
                    <input type="text" name="nomePai" value="" id="nomePai" placeholder="Nome da Pai">

                    <label for="conjugue">Conjugue</label>
                    <input type="text" name="conjugue" value="" id="conjugue" placeholder="Nome do Conjugue">

                    <label for="nomeResponsavel">Nome do Responsavel</label>
                    <input type="text" name="nomeResponsavel" value="" id="nomeResponsavel" placeholder="Nome do Responsavel">

                    <label for="cpfResponsavel">CPF do Responsavel</label>
                    <input type="number" name="cpfResponsavel" value="cpfResponsavel" id="cpfResponsavel" placeholder="CPF do Responsavel">
                </div>
                <div class="educaçãoTrabalho">
                    <label for="eduTra">Nível de escolaridade</label>
                    <select name="eduTra" id="eduTra">
                        <option value="">selecione</option>
                        <option value="">Analfabeto</option>
                        <option value="">Ensino Fundamental</option>
                        <option value="">Ensino Médio</option>
                        <option value="">Ensino Superior</option>
                    </select>
                    <label for="profissao">Profissão</label>
                    <input type="text" name="profissao" value="" id="profissao" placeholder="Campo não obrigatorio">
                    <label for="empresa">Empresa onde trabalha</label>
                    <input type="text" name="empresa" value="" id="empresa" placeholder="Campo não obrigatorio">
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
                    <button type="">Editar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>