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

const inputCns = document.getElementById("cns");

inputCns.addEventListener("input", function (e) {
  let valor = e.target.value.replace(/\D/g, "");
  valor = valor.substring(0, 15);
  valor = valor.replace(/(\d{3})(\d{4})(\d{4})(\d{4})/, "$1 $2 $3 $4");
  e.target.value = valor;
});

const inputNumero = document.getElementById("numero");

inputNumero.addEventListener("keydown", function (e) {
  // Permite backspace, delete, tab, escape e enter
  if (
    e.key === "Backspace" ||
    e.key === "Delete" ||
    e.key === "Tab" ||
    e.key === "Escape" ||
    e.key === "Enter"
  ) {
    return;
  }

  // Verifica se a tecla pressionada é um número
  if (isNaN(parseInt(e.key))) {
    e.preventDefault();
  }
});
