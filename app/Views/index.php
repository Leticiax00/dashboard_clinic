<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Clinic</title>
  <link rel="stylesheet" href="<?= base_url('css/index.css') ?>" />
</head>
<body>

  <div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
  </div>

  <div class="header">
    <?= view('partials/header') ?>
    <a href="<?= base_url('/')?>">Home</a>
    <a href="<?= base_url('cadastro_pac')?>"> Novo Paciente</a>
     <button onclick="abrirModal()" class="botao_pac">Grupo de Pacientes</button>
     
  </div>

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
          <h3 id="container-data">Selecione uma data</h3>
          <a href="<?= base_url('paghome') ?>" class="button-agendamento">Nova Consulta</a>
          <br>
          <a href="<?= base_url('consultas') ?>" class="button-agendamento2">Consultas</a>
        </div>
      </div>

    </div>
  </div>
  <script src="<?= base_url('js/index.js') ?>"></script>
</body>

<style>
  .botao_pac {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
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

</style>
</html>
