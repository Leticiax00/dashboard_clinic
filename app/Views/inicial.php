<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Clinic</title>
  <link rel="stylesheet" href="<?= base_url('css/inicial.css') ?>" />
</head>
<body>

  <div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
  </div>

   <?php include 'partials/header.php'; ?>

  <div class="container-wrapper">
    <div class="container">
      <div class="calendario-wrapper">
        <div class="calendario-container">

          <div class="cabecalho-calendario">
            <button class="button-nav mes-anterior" onclick="previousMonth()">‹</button>
            <div class="mes-ano" id="month-year">Mês Ano</div>
            <button class="button-nav mes-proximo" onclick="nextMonth()">›</button>
          </div>
          <div class="dias-semana">
            <div>Dom</div>
            <div>Seg</div>
            <div>Ter</div>
            <div>Qua</div>
            <div>Qui</div>
            <div>Sex</div>
            <div>Sáb</div>
          </div>
          <div class="grade-dias" id="days-grid"></div>
        </div>
        <div class="painel-agendamento" id="painel-agendamento">
          <h2 id="dia-semana"></h2>
          <h3 id="container-data">Selecione uma data</h3>
          <a href="<?= base_url('paghome') ?>" id="button_nova.consulta" class="button-agendamento">Nova Consulta</a>
          <br> <br>
          <a href="<?= base_url('consultas') ?>" class="button-agendamento2">Agenda Médica</a>
        </div>
      </div>

    </div>
  </div>

  <div id="modal" class="modal">
  <div class="modal-conteudo">
    <span class="fechar">&times;</span>
    <h2>Novo Grupo de Clientes</h2>
    
    <form action="<?= base_url('grupos/adicionar') ?>" method="post">
      <label for="nome">Nome do Grupo:</label>
      <input type="text" id="nome" name="nome" required>
      <br>
      <button type="submit">Salvar</button>
    </form>
  </div>
</div>

  
<style>
  @property --rotate {
  syntax: "<angle>";
  initial-value: 132deg;
  inherits: false;
}

@import url('https://fonts.googleapis.com/css?family=Exo:400,700');


:root {
  --card-height: 20vh; /* plano de fundo */
  --card-width: 50vh;
}

/* Config modal */

.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}

/* Conteúdo da janela */
.modal-conteudo {
  background: #fff;
  padding: 50px;
  border-radius: 10px;
  width: 400px;
  max-width: 90%;
}

/* Botão fechar */
.fechar {
  float: right;
  font-size: 22px;
  cursor: pointer;
}
</style>

<script>
// Pega os elementos
const modal = document.getElementById("modal");
const btnAbrir = document.getElementById("abrirModal");
const btnFechar = document.querySelector(".fechar");

// Abre o modal
btnAbrir.addEventListener("click", () => {
  modal.style.display = "flex";
});

// Fecha o modal
btnFechar.addEventListener("click", () => {
  modal.style.display = "none";
});

// Fecha se clicar fora do conteúdo
window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});
</script>

<script src="<?= base_url('js/inicial.js') ?>"></script>
</body>
</html>

