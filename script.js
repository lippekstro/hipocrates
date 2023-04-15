$(document).ready(function () {
  $("#cep").blur(function () {
    var cep = $(this).val().replace(/\D/g, "");
    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/", function (data) {
      if (data.hasOwnProperty("erro")) {
        alert("CEP não encontrado!");
        return;
      }
      $("#logradouro").val(data.logradouro);
      $("#bairro").val(data.bairro);
      $("#cidade").val(data.localidade);
      $("#estado").val(data.uf);
    });
  });
});

$(document).ready(function () {
  $("#phone_DDD").mask("(00) 00000-0000");
  $("#phone_fixe").mask("0000-0000");
  $("#cpf").mask("000.000.000-00", {
    reverse: true,
  });
  $("#rg").mask("000000000000-0", {
    reverse: true,
  });
});
