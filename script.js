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
