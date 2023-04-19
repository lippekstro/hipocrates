const form = document.querySelector("#form_id");
const etapas = form.querySelectorAll(".form_phases");
const botoesProximo = form.querySelectorAll(".proximo");
const botoesVoltar = form.querySelectorAll(".voltar");
let etapaAtual = 0;

function esconderEtapas() {
  etapas.forEach((etapa) => {
    etapa.style.display = "none";
  });
}
esconderEtapas();
etapas[etapaAtual].style.display = "block";

function proximaEtapa() {
  etapaAtual++;
  esconderEtapas();
  etapas[etapaAtual].style.display = "block";

  if (etapaAtual > 0) {
    botoesVoltar.forEach((botao) => {
      botao.disabled = false;
    });
  }

  if (etapaAtual === etapas.length - 1) {
    botoesProximo.forEach((botao) => {
      botao.style.display = "none";
    });
  }
}

function etapaAnterior() {
  etapaAtual--;
  esconderEtapas();
  etapas[etapaAtual].style.display = "block";

  if (etapaAtual === 0) {
    botoesVoltar.forEach((botao) => {
      botao.disabled = true;
    });
  }

  if (etapaAtual < etapas.length - 1) {
    botoesProximo.forEach((botao) => {
      botao.style.display = "block";
    });
  }
}

botoesProximo.forEach((botao) => {
  botao.addEventListener("click", proximaEtapa);
});
botoesVoltar.forEach((botao) => {
  botao.addEventListener("click", etapaAnterior);
});
