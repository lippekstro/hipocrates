<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button>Realize Seu cadastro</button>
    <dialog>
        <div>
            <h2>Cadastro</h2>
        </div>
        <div>
            <form action="adicionarController.php" method="post" enctype="multipart/form-data">
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
                <a href="#"><button>Fechar Janela</button></a>
            </form>
        </div>
    </dialog>
    <script src="script.js"></script>
</body>

</html>...