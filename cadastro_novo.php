<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/cabecalho.php"
?>

<div class="container_forms">
  <header>Registro de Novo Usuário</header>
  <form action="#" method="post" id="form_id">
    <div class="form_phases">
      <div class="details_personal">
        <span class="title_forms">Dados Pessoais</span>
        <div class="fields_form">
          <div class="input_field">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" value="" placeholder="Digite seu nome completo" required />
          </div>
          <div class="input_field">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="" placeholder="Data nascimento" required />
          </div>
          <div class="input_field">
            <label for="genero">Gênero</label>
            <select required name="genero" id="genero">
              <option disabled selected>Selecione Gênero</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
            </select>
          </div>
          <div class="input_field">
            <label for="estado_civil">Estado Civil</label>
            <select required name="estado_civil" id="estado_civil">
              <option disabled selected>Selecione seu Estado Civil</option>
              <option value="Solteiro">Solteiro</option>
              <option value="Casado">Casado</option>
              <option value="Viúvo">Viúvo</option>
              <option value="Divorciado">Divorciado</option>
              <option value="União Estável">União Estável</option>
            </select>
          </div>
          <div class="input_field">
            <label for="etnia">Etnia</label>
            <select required name="etnia" id="etnia">
              <option disabled selected>Selecione sua Etnia</option>
              <option value="Branca">Branca</option>
              <option value="Preta">Preta</option>
              <option value="Parda">Parda</option>
              <option value="Amarela">Amarela</option>
              <option value="Indígena">Indígena</option>
            </select>
          </div>
          <div class="input_field">
            <label for="educacao">Nível de escolaridade</label>
            <select required name="educacao" id="educacao">
              <option disabled selected>
                Selecione o Nível de sua Escolaridade
              </option>
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
          </div>
          <div class="input_field">
            <label for="ocupacao">Ocupação</label>
            <select required name="ocupacao" id="ocupacao">
              <option disabled selected>Selecione a sua Ocupação</option>
              <option value="">Trabalho de Carteira Assinada</option>
              <option value="">Desempregado</option>
              <option value="">Autônomo</option>
            </select>
          </div>
        </div>
      </div>
      <div class="details_contact">
        <span class="title_forms">Dados de Contacto</span>
        <div class="fields_form">
          <div class="input_field">
            <label for="phone_DDD">Celular</label>
            <input type="text" name="phone_DDD" id="phone_DDD" placeholder="Digite seu número" required />
          </div>
          <div class="input_field">
            <label for="phone_fixe">Telefone Fixo (Opcional)</label>
            <input type="tel" name="phone_fixe" id="phone_fixe" placeholder="Digite seu telefone fixo" />
          </div>
          <div class="input_field">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="" placeholder="Digite seu E-mail" required />
          </div>
        </div>
      </div>
      <div class="details_id">
        <span class="title_forms">Dados de Localização</span>
        <div class="fields_form">
          <div class="input_field">
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" />
          </div>
          <div class="input_field">
            <label for="logradouro">Logradouro</label>
            <input type="text" id="logradouro" name="logradouro" placeholder="Digite o seu Logradouro" required />
          </div>
          <div class="input_field">
            <label for="numero">Numero</label>
            <input type="text" id="numero" name="numero" placeholder="Digite o Numero de sua Rescindência" pattern="[0-9]*" required />
          </div>
          <div class="input_field">
            <label for="complemento">Complemento (Opcional)</label>
            <input type="text" id="complemento" name="complemento" placeholder="Digite o seu Complemento" />
          </div>
          <div class="input_field">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" placeholder="Digite o seu Bairro" />
          </div>
          <div class="input_field">
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" placeholder="Digite a seu Cidade" />
          </div>
          <div class="input_field">
            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado" placeholder="Digite o seu Estado" />
          </div>
        </div>
      </div>

      <div class="details_id">
        <span class="title_forms">Dados de Identificação</span>
        <div class="fields_form">
          <div class="input_field">
            <label for="cpf">Seu CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required />
          </div>
          <div class="input_field">
            <label for="rg">Seu RG</label>
            <input type="text" name="rg" id="rg" placeholder="Digite seu RG" required />
          </div>
          <div class="input_field">
            <label for="orgao_emissor">Órgão Emissor</label>
            <select required name="orgao_emissor" id="orgao_emissor">
              <option disabled selected>Selecione o Órgão Emissor</option>
              <option value="SSP">
                SSP - Secretaria de Segurança Pública
              </option>
              <option value="PC">PC - Polícia Civil</option>
              <option value="PM">PM - Polícia Militar</option>
              <option value="DETRAN">
                DETRAN - Departamento Estadual de Trânsito
              </option>
              <option value="DPF">
                DPF - Departamento de Polícia Federal
              </option>
              <option value="CREA">
                CREA - Conselho Regional de Engenharia e Agronomia
              </option>
              <option value="OAB">
                OAB - Ordem dos Advogados do Brasil
              </option>
              <option value="CRM">
                CRM - Conselho Regional de Medicina
              </option>
              <option value="COREN">
                COREN - Conselho Regional de Enfermagem
              </option>
              <option value="CRO">
                CRO - Conselho Regional de Odontologia
              </option>
            </select>
          </div>
          <div class="input_field">
            <label for="cns">Cartão Nacional de Saúde</label>
            <input type="text" name="cns" id="cns" maxlength="19" placeholder="Digite o Número do Cartão Nacional de Saúde" />
          </div>
        </div>
      </div>
      <div class="details_password">
        <span class="title_forms">Crie sua Senha</span>
        <div class="fields_form">
          <div class="input_field">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" />
          </div>
          <div class="input_field">
            <label for="confirmarSenha">Confirmar senha:</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha" />
          </div>
          <div class="input_field">
            <span id="senhaErro"></span>
          </div>
        </div>
        <div class="check-box">
          <label for="mostrarSenha">Mostrar senha</label>
          <input type="checkbox" id="mostrarSenha" />
        </div>
      </div>
      <div class="button_forms">
        <button type="submit">
          <span class="text_button">Proximo</span>
        </button>
      </div>
    </div>
  </form>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/templates/rodape.php"
?>