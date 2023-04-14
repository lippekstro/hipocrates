$(document).ready(function () {
  // Quando o campo de CEP perder o foco
  $("#cep").blur(function () {
    // Obtém o valor digitado pelo usuário
    var cep = $(this).val().replace(/\D/g, "");

    // Faz uma solicitação à API de CEP
    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/", function (data) {
      // Se houver erro na resposta da API
      if (data.hasOwnProperty("erro")) {
        alert("CEP não encontrado!");
        return;
      }

      // Preenche os campos do formulário com os dados de endereço
      $("#logradouro").val(data.logradouro);
      $("#bairro").val(data.bairro);
      $("#cidade").val(data.localidade);
      $("#estado").val(data.uf);
    });
  });
});

function mascaraCPF(cpf) {
  cpf = cpf.replace(/\D/g, ""); // remove caracteres não numéricos
  cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // insere o primeiro ponto
  cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // insere o segundo ponto
  cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // insere o traço
  return cpf;
}

let cpfInput = document.getElementById("cpf");

cpfInput.addEventListener("input", function (event) {
  event.target.value = mascaraCPF(event.target.value);
});
