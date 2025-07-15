<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Clinic</title>
  <link rel="stylesheet" href="<?= base_url('css/index.css') ?>" />
</head>
<body>
  <div class="header">
    <?= view('partials/header') ?>
  </div>

  <div class="container">
    <div class="calendario-wrapper">
      <!-- Calendário -->
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

      <!-- Painel lateral -->
      <div class="painel-agendamento" id="painel-agendamento">
        <h3 id="data-selecionada">Selecione um dia</h3>
        <a href="<?= base_url('paghome') ?>" class="button-agendamento">Nova Consulta</a>
      </div>
    </div>
  </div>

  <script src="<?= base_url('js/index.js') ?>"></script>
</body>
</html>
